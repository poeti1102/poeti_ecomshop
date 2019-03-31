<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Vendor;
use Validator;
use App\Rules\Password;
use Session;

class VendorController extends Controller
{
    public $rules = [
        'firstname' => ['string' , 'required'],
        'lastname' => ['string' , 'required'],
        'nickname' => ['string' , 'required'],
        'password' => ['string' , 'required' , 'confirmed'],
        'email' => ['string' , 'required' , 'email' , 'unique:vendors'],
        'address1' => ['string' , 'required'],
        'address2' => ['string'],
        'division' => ['string' , 'required'],
        'city' => ['string' , 'required'],
        'phone1' => ['string' , 'required'],
        'phone2' => ['string'],
        'id_type' => ['integer' , 'required'],
        'id_no' => ['integer' , 'required'],
        'id_img_front' => ['string' , 'required'],
        'id_img_back' => ['string' , 'required'],
        'vendor_img1' => ['string' , 'required'],
        'vendor_img2' => ['string'],
        'vendor_img3' => ['string'],
        'payment_method1' => ['string' , 'required'],
        'payment_description1' => ['string' , 'required'],
        'payment_method2' => ['string'],
        'payment_description2' => ['string'],
        'payment_method3' => ['string'],
        'payment_description3' => ['string'],
    ];

    public function register()
    {
        return view('vendor.vendor.register');
    }

    public function confirm(Request $request)
    {
        //Get Data from redquest
        $data = $request->all();
        //Sanitize inputs 
        foreach($request->all() as $key => $val)
        {
            if(is_string($val))
            {
                $data[$key] = strip_tags(trim($val));
            }
          
        }

        Validator::make($data , $this->rules)->validate();

        if(!empty($request->file('id_img_front'))){
            $img_front = time().'.'.$request->file('id_img_front')->getClientOriginalName();;
            $destination = public_path('images/vendor/id_front/temp/');
            $request->file('id_img_front')->move($destination, $img_front);
            $data['id_front'] = $img_front;
        }

        if(!empty($request->file('id_img_back'))){
            $img_back = time().'.'.$request->file('id_img_back')->getClientOriginalName();;
            $destination = public_path('images/vendor/id_back/temp/');
            $request->file('id_img_back')->move($destination, $img_back);
            $data['id_back'] = $img_back;
        }
        
        if(!empty($request->file('vendor_image1'))){
            $vendor_image1 = time().'.'.$request->file('vendor_image1')->getClientOriginalName();;
            $destination = public_path('images/vendor/vendor_image/temp/');
            $request->file('vendor_image1')->move($destination, $vendor_image1);
            $data['vd_img1'] = $vendor_image1;
        }

        if(!empty($request->file('vendor_image2'))){
            $vendor_image2 = time().'.'.$request->file('vendor_image2')->getClientOriginalName();;
            $destination = public_path('images/vendor/vendor_image/temp/');
            $request->file('vendor_image2')->move($destination, $vendor_image2);
            $data['vd_img2'] = $vendor_image2;
        }

        if(!empty($request->file('vendor_image3'))){
            $vendor_image3 = time().'.'.$request->file('vendor_image3')->getClientOriginalName();;
            $destination = public_path('images/vendor/vendor_image/temp/');
            $request->file('vendor_image3')->move($destination, $vendor_image3);
            $data['vd_img3'] = $vendor_image3;
        }

        Session::put('data' , $data);
        
        return view('vendor.vendor.confirm' , compact('data'));
    }

    public function complete()
    {
        $data = Session::get('data');
        $vendor = new Vendor();
        Session::forget('data');

        if(isset($data['id_front'])){
            $data['id_img_front'] = $data['id_front'];
            unset($data['id_front']);

            $old_path = public_path('images/vendor/id_front/temp/'.$data['id_img_front']);
            $new_path = public_path('images/vendor/id_front/'.$data['id_img_front']);
            File::move($old_path, $new_path);
        }

        if(isset($data['id_back'])){
            $data['id_img_back'] = $data['id_back'];
            unset($data['id_back']);

            $old_path = public_path('images/vendor/id_back/temp/'.$data['id_img_back']);
            $new_path = public_path('images/vendor/id_back/'.$data['id_img_back']);
            File::move($old_path, $new_path);
        }

        if(isset($data['vd_img1'])){
            $data['vendor_image1'] = $data['vd_img1'];
            unset($data['vd_img1']);

            $old_path = public_path('images/vendor/vendor_image/temp/'.$data['vendor_image1']);
            $new_path = public_path('images/vendor/vendor_image/'.$data['vendor_image1']);
            File::move($old_path, $new_path);
        }

        if(isset($data['vd_img2'])){
            $data['vendor_image2'] = $data['vd_img2'];
            unset($data['vd_img2']);

            $old_path = public_path('images/vendor/vendor_image/temp/'.$data['vendor_image2']);
            $new_path = public_path('images/vendor/vendor_image/'.$data['vendor_image2']);
            File::move($old_path, $new_path);
        }

        if(isset($data['vd_img3'])){
            $data['vendor_image3'] = $data['vd_img3'];
            unset($data['vd_img3']);

            $old_path = public_path('images/vendor/vendor_image/temp/'.$data['vendor_image3']);
            $new_path = public_path('images/vendor/vendor_image/'.$data['vendor_image3']);
            File::move($old_path, $new_path);
        }

        $vendor->fill($data);
        $vendor->save();
        return view('vendor.vendor.complete');
    }
}
