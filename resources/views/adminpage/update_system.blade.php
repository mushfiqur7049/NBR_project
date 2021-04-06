<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
      <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Admin</title>

	<!-- BOOTSTRAP STYLES-->
    <link href="{{asset('assets/css/bootstrap.css')}}" rel="stylesheet" />
     <!-- FONTAWESOME STYLES-->
    <link href="{{asset('assets/css/font-awesome.css')}}" rel="stylesheet" />
        <!-- CUSTOM STYLES-->
    <link href="{{asset('assets/css/custom.css')}}" rel="stylesheet" />
     <!-- GOOGLE FONTS-->
   <link href='http://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css' />
</head>

  <style type="text/css">
    .sh{

      color:black;
      box-sizing: content-box;
      width: 30%;
      border: solid #5B6DCD 3px;
      padding: 5px;

    }

  </style>
<body>





@include('adminpage.navi')

        <div id="page-wrapper" >
            <div id="page-inner">
<div class="card-body">
<form method="POST" action="{{ route('admin.update.information',$user->Tax_id) }}">
  @csrf


              <div class="form-group row">
                  <label for="first_name" class="col-md-4 col-form-label text-md-right">Frist name</label>

                  <div class="col-md-6">
                      <input id="first_name" type="text"class="form-control"  name="first_name" value="{{ $user->first_name }}"  required autocomplete="username" autofocus >


                  </div>
              </div>

              <div class="form-group row">
                  <label for="last_name" class="col-md-4 col-form-label text-md-right">Last name</label>

                  <div class="col-md-6">
                      <input id="last_name" type="text" class="form-control" name="last_name" value="{{ $user->last_name }}" required autocomplete="last_name" autofocus>

                      @error('last_name')
                          <span class="invalid-feedback" role="alert">
                              <strong>{{ $message }}</strong>
                          </span>
                      @enderror
                  </div>
              </div>

              <div class="form-group row">
                  <label for="username" class="col-md-4 col-form-label text-md-right">Username</label>

                  <div class="col-md-6">
                      <input id="username" type="text" class="form-control"  name="username" value="{{ $user->username }}" required autocomplete="username" autofocus>


                  </div>
              </div>

              <div class="form-group row">
                  <label for="Tax_id" class="col-md-4 col-form-label text-md-right">Tax_id</label>

                  <div class="col-md-6">
                      <input id="Tax_id" type="text" class="form-control" name="Tax_id" value="{{ $user->Tax_id }}"required autocomplete="Tax_id" autofocus>

                      @error('Tax_id')
                          <span class="invalid-feedback" role="alert">
                              <strong>{{ $message }}</strong>
                          </span>
                      @enderror
                  </div>
              </div>

              <div class="form-group row">
                  <label for="phone_no" class="col-md-4 col-form-label text-md-right">Phone Number</label>

                  <div class="col-md-6">
                      <input id="phone_no" type="text" class="form-control " name="phone_no" value="{{ $user->phone_no }}" required autocomplete="phone_no" autofocus>

                      @error('phone_no')
                          <span class="invalid-feedback" role="alert">
                              <strong>{{ $message }}</strong>
                          </span>
                      @enderror
                  </div>
              </div>

              <div class="form-group row">
                  <label for="email" class="col-md-4 col-form-label text-md-right">{{ __('E-Mail Address') }}</label>

                  <div class="col-md-6">
                      <input id="email" type="email" class="form-control " name="email" value="{{ $user->email }}" required autocomplete="email">

                      @error('email')
                          <span class="invalid-feedback" role="alert">
                              <strong>{{ $message }}</strong>
                          </span>
                      @enderror
                  </div>
              </div>

              <div class="form-group row">
                  <label for="password" class="col-md-4 col-form-label text-md-right">{{ __('Password') }}</label>

                  <div class="col-md-6">
                      <input id="password" type="password" class="form-control" name="password" value="{{ $user->password }}"required autocomplete="password">

                      @error('password')
                          <span class="invalid-feedback" role="alert">
                              <strong>{{ $message }}</strong>
                          </span>
                      @enderror
                  </div>
              </div>


              <div class="form-group row mb-0">
                  <div class="col-md-6 offset-md-4">
                      <button type="submit" class="btn btn-primary">
                          {{ __('Update') }}
                      </button>
                  </div>
              </div>
          </form>
        </div>
             <!-- /. PAGE INNER  -->
            </div>
         <!-- /. PAGE WRAPPER  -->
        </div>
    <div class="footer">


             <div class="row">@include('adminpage.clock')
                <div class="col-lg-12" >
                   <p style="text-align: center">Design by: <a href="#" style="color:#fff;" target="_blank">MD.Mushfiqur Rahman Rifat</a></p>
                </div>
        </div>
        </div>


     <!-- /. WRAPPER  -->
    <!-- SCRIPTS -AT THE BOTOM TO REDUCE THE LOAD TIME-->
    <!-- JQUERY SCRIPTS -->
    <script src="{{asset('assets/js/jquery-1.10.2.js')}}')}}')}}"></script>
      <!-- BOOTSTRAP SCRIPTS -->
    <script src="{{asset('assets/js/bootstrap.min.js')}}')}}"></script>
      <!-- CUSTOM SCRIPTS -->
    <script src="{{asset('assets/js/custom.js')}}"></script>

</body>
</html>
