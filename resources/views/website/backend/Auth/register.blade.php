<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin</title>
    <link href="{{ asset('backend/vendors/bootstrap/dist/css/bootstrap.min.css')}}" rel="stylesheet">
    <!-- Font Awesome -->
    <link href="{{ asset('backend/vendors/font-awesome/css/font-awesome.min.css')}}" rel="stylesheet">
    <!-- NProgress -->
    <link href="{{ asset('backend/vendors/nprogress/nprogress.css')}}" rel="stylesheet">
    <!-- iCheck -->
    <link href="{{ asset('backend/vendors/iCheck/skins/flat/green.css')}}" rel="stylesheet">

    <!-- bootstrap-progressbar -->
    <link href="{{ asset('backend/vendors/bootstrap-progressbar/css/bootstrap-progressbar-3.3.4.min.css')}}" rel="stylesheet">
    <!-- JQVMap -->
    <link href="{{ asset('backend/vendors/jqvmap/dist/jqvmap.min.css')}}" rel="stylesheet"/>
    <!-- bootstrap-daterangepicker -->
    <link href="{{ asset('backend/vendors/bootstrap-daterangepicker/daterangepicker.css')}}" rel="stylesheet">

    <!-- Custom Theme Style -->
    <link href="{{ asset('backend/build/css/custom.min.css')}}" rel="stylesheet">
    <style>
      .random{
        background: #fffff4;
        width:50%;
        margin:auto;
        margin-top:100px;
        height:330px;
        color:#000666;
      }
      .colo{
        background:#000666;
        color:#fff;
      }
     
      form{
        margin-top:10px;
      }
    </style>
</head>
<body>
  <div class="random">
      <h1>Admin Login</h1>
    <form id="demo-form2" data-parsley-validate="" class="form-horizontal form-label-left" novalidate="" method="POST" action="{{route('admin.register')}}">
      @csrf

      <div class="item form-group">
        <label class="col-form-label col-md-3 col-sm-3 label-align" for="first-name">Email Address<span class="required">*</span>
        </label>
        <div class="col-md-6 col-sm-6 ">
        <input type="email" id="email" name="email" required="required" class="form-control ">
        </div>
      </div>

      <div class="item form-group">
        <label class="col-form-label col-md-3 col-sm-3 label-align" for="first-name">Full Name<span class="required">*</span>
        </label>
        <div class="col-md-6 col-sm-6 ">
          <input type="text" id="name" name="name" required="required" class="form-control ">
        </div>
      </div>

      <div class="item form-group">
        <label class="col-form-label col-md-3 col-sm-3 label-align" for="first-name">Password<span class="required">*</span>
        </label>
        <div class="col-md-6 col-sm-6 ">
          <input type="password" id="password" name="password" required="required" class="form-control ">
        </div>
      </div>

      <div class="item form-group">
        <label class="col-form-label col-md-3 col-sm-3 label-align" for="first-name">Confirm Password<span class="required">*</span>
        </label>
        <div class="col-md-6 col-sm-6 ">
          <input type="password" id="" name="total" required="required" class="form-control ">
        </div>
      </div>
    
      <div class="item form-group">
        <div class="col-md-6 col-sm-6 offset-md-3">
          <button type="submit" class="btn colo">Submit</button>
        </div>
      </div>

    </form>
  </div>
</body>
</html>