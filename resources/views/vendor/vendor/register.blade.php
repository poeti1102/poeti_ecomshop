@extends('shop.layouts.app')

@section('main')
<style>
    :root {
      --input-padding-x: .75rem;
      --input-padding-y: .75rem;
    }
    
    .form-signup {
      width: 100%;
      padding: 15px;
      margin: 0 auto;
    }
    
    .form-label-group {
      position: relative;
      margin-bottom: 1rem;
    }
    
    .form-label-group > input,
    .form-label-group > label {
      padding: var(--input-padding-y) var(--input-padding-x);
    }
    
    .form-label-group > label {
      position: absolute;
      top: 0;
      left: 0;
      display: block;
      width: 100%;
      margin-bottom: 0; /* Override default `<label>` margin */
      line-height: 1.5;
      color: #495057;
      border: 1px solid transparent;
      border-radius: .25rem;
      transition: all .1s ease-in-out;
    }
    
    .form-label-group input::-webkit-input-placeholder {
      color: transparent;
    }
    
    .form-label-group input:-ms-input-placeholder {
      color: transparent;
    }
    
    .form-label-group input::-ms-input-placeholder {
      color: transparent;
    }
    
    .form-label-group input::-moz-placeholder {
      color: transparent;
    }
    
    .form-label-group input::placeholder {
      color: transparent;
    }
    
    .form-label-group input:not(:placeholder-shown) {
      padding-top: calc(var(--input-padding-y) + var(--input-padding-y) * (2 / 3));
      padding-bottom: calc(var(--input-padding-y) / 3);
    }
    
    .form-label-group input:not(:placeholder-shown) ~ label {
      padding-top: calc(var(--input-padding-y) / 3);
      padding-bottom: calc(var(--input-padding-y) / 3);
      font-size: 12px;
      color: #777;
    }
    
    #reg-form {
        margin: 25px;
    }
</style>
    <!--================Slider Area =================-->
    <section class="main_slider_area">
        <div class="container">
            <div class="row">
                <div class="col-md-12" id="reg-form">
                    {!! Form::open(['action' => 'VendorController@confirm' ,  'method' => 'POST', 'enctype' => 'multipart/form-data' , 'class' => 'form-inline']) !!}
                    <div class="text-center col-md-12">
                        <h1 class="h3 mb-12 font-weight-normal">Vendor Registration</h1>
                    </div>
                    <div class="col-md-6">
                        <div class="form-label-group">
                            <input type="text" class="form-control" id="label-name" required name="firstname">
                            <label for="label-name">First Name</label>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-label-group">
                            <input type="text" class="form-control" id="label-name" required name="lastname">
                            <label for="label-name">Last Name</label>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-label-group">
                            <input type="text" class="form-control" id="label-name" required name="nickname">
                            <label for="label-name">Nick Name</label>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-label-group">
                            <input type="text" class="form-control" id="label-name" required name="email">
                            <label for="label-name">Email</label>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-label-group">
                            <input type="password" class="form-control" id="label-name" required name="password">
                            <label for="label-name">Password</label>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-label-group">
                            <input type="password" class="form-control" id="label-name" required name="password-confirmation">
                            <label for="label-name">Confirm Password</label>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-label-group">
                            <label for="">Address</label>
                            <textarea class="form-control" id="" rows="3" name="address1"></textarea>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-label-group">
                            <label for="">Address Continued (Optional)</label>
                            <textarea class="form-control" id="" rows="3" name="address2"></textarea>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-label-group">
                            <input type="text" class="form-control" id="label-name" required name="division">
                            <label for="label-name">Division</label>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-label-group">
                            <input type="text" class="form-control" id="label-name" required name="city">
                            <label for="label-name">City</label>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-label-group">
                            <input type="text" class="form-control" id="label-name" required name="phone1">
                            <label for="label-name">Phone Number</label>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-label-group">
                            <input type="text" class="form-control" id="label-name" required name="phone2">
                            <label for="label-name">Phone Number (Optional)</label>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="inputState">ID Card Type </label>
                            <select id="inputState" class="form-control" name="id_type">
                              <option selected>Choose...</option>
                              <option value="1">National ID</option>
                              <option value="2">Passport</option>
                              <option value="3">Driver License</option>
                            </select>
                          </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-label-group">
                            <input type="text" class="form-control" id="label-name" required name="id_no">
                            <label for="label-name">ID Number</label>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="exampleFormControlFile1">ID front</label><br>
                            <input type="file" class="form-control-file"  name="id_img_front">
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="exampleFormControlFile1">ID Back</label><br>
                            <input type="file" class="form-control-file"  name="id_img_back">
                        </div>
                    </div>

                    <div class="col-md-4">
                        <div class="form-group">
                            <label for="exampleFormControlFile1">Vendor Image 1</label><br>
                            <input type="file" class="form-control-file"  name="vendor_img1">
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="form-group">
                            <label for="exampleFormControlFile1">Vendor Image 2</label><br>
                            <input type="file" class="form-control-file"  name="vendor_img2">
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="form-group">
                            <label for="exampleFormControlFile1">Vendor Image 3</label><br>
                            <input type="file" class="form-control-file"  name="vendor_img3">
                        </div>
                    </div>
                    
                    <div class="col-md-6">
                        <div class="form-label-group">
                            <input type="text" class="form-control" id="label-name" required name="payment-method1">
                            <label for="label-name">Payment Method 1</label>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-label-group">
                            <input type="text" class="form-control" id="label-name" required name="payment-description1">
                            <label for="label-name">Payment Description 1</label>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-label-group">
                            <input type="text" class="form-control" id="label-name" required name="payment-method2">
                            <label for="label-name">Payment Method 2</label>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-label-group">
                            <input type="text" class="form-control" id="label-name" required name="payment-description2">
                            <label for="label-name">Payment Description 2</label>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-label-group">
                            <input type="text" class="form-control" id="label-name" required name="payment-method3">
                            <label for="label-name">Payment Method 3</label>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-label-group">
                            <input type="text" class="form-control" id="label-name" required name="payment-description3">
                            <label for="label-name">Payment Description 3</label>
                        </div>
                    </div>

                    <button type="button">Register</button>
                    {!! Form::close() !!}
                </div>
            </div>
        </div>
    </section>
    <!--================End Slider Area =================-->
    
@endsection