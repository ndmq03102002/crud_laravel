<!DOCTYPE html>
<html>

<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>INSPINIA | Login 2</title>

    <link href="backend/css/bootstrap.min.css" rel="stylesheet">
    <link href="backend/font-awesome/css/font-awesome.css" rel="stylesheet">
    <link href="backend/css/animate.css" rel="stylesheet">
    <link href="backend/css/style.css" rel="stylesheet">

</head>

<body class="gray-bg">

    <div class="loginColumns animated fadeInDown">
        <div class="row">


            <div class="col-md-6">
                <div class="ibox-content">

                    <form class="m-t" role="form" action="" method = "post">
                        @csrf
                        <div class="form-group">
                            Name:
                            <input type="name" class="form-control" name = "name" placeholder="name" required="">
                        </div>
                        </div>
                        <div class="form-group">
                            Email:
                            <input type="email" class="form-control" name = "email" placeholder="Username" required="">
                        </div>
                        <div class="form-group">
                            Password:
                            <input type="password" class="form-control" name="password" placeholder="Password" required="">
                        </div>
                        <div class="form-group">
                            Confirm Password:
                            <input type="password" class="form-control" name="confirmpassword" placeholder="confirmPassword" required="">
                        </div>
                        <button type="submit" class="btn btn-primary block full-width m-b">Register now</button>

                        <a href="#">
                            <small>Forgot password?</small>
                        </a>

                        <p class="text-muted text-center">
                            <small>Do have an account?</small>
                        </p>
                        <a class="btn btn-sm btn-white btn-block" href="{{route('admin.login')}}">Login</a>
                    </form>
                    <p class="m-t">
                        <small>Inspinia we app framework base on Bootstrap 3 &copy; 2014</small>
                    </p>
                </div>
            </div>
        </div>
        <hr/>
        <div class="row">
            <div class="col-md-6">
                Copyright Example Company
            </div>
            <div class="col-md-6 text-right">
               <small>© 2014-2015</small>
            </div>
        </div>
    </div>

</body>

</html>
