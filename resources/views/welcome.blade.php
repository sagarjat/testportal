@extends('layouts.app')

@section('content')

    <!-- Page Content -->
    <div class="container">

        <!-- Jumbotron Header -->
        <header class="jumbotron my-4">
            <div class="text-center header-message">Welcome, Fyn-Tune Test Portal</div>
            <!-- <div class="text-center">
                <a href="" class="btn btn-default btn-rounded my-3 login-btn" data-toggle="modal" data-target="#modalLRForm">LogIn/Register</a>
            </div> -->
        </header>

    </div>
    <!-- /.container -->
    <style>
        .header-message {
            font-size: 25px;
            font-weight: bold;
        }
        .login-btn {
            background: blue;
            color: white;
        }
    </style>
    <!--Modal: Login / Register Form-->
    <div class="modal fade" id="modalLRForm" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
        <div class="modal-dialog cascading-modal" role="document">
            <!--Content-->
            <div class="modal-content">

            <!--Modal cascading tabs-->
            <div class="modal-c-tabs">

                <!-- Nav tabs -->
                <ul class="nav nav-tabs md-tabs tabs-2 light-blue darken-3" role="tablist">
                <li class="nav-item">
                    <a class="nav-link active" data-toggle="tab" href="#panel7" role="tab"><i class="fas fa-user mr-1"></i>
                    Login</a>
                </li>
                <!-- <li class="nav-item">
                    <a class="nav-link" data-toggle="tab" href="#panel8" role="tab"><i class="fas fa-user-plus mr-1"></i>
                    Register</a>
                </li> -->
                </ul>

                <!-- Tab panels -->
                <div class="tab-content">
                    <!--Panel 7-->
                    <div class="tab-pane fade in show active" id="panel7" role="tabpanel">
                        <!--Body-->
                        <div class="modal-body mb-1">
                            <div class="md-form form-sm  ">
                                <i class="fas fa-envelope prefix"></i>
                                <input type="email" id="email" name="email" class="form-control form-control-sm validate">
                                <label data-error="wrong" data-success="right" for="modalLRInput10">Your email</label>
                            </div>

                            <div class="md-form form-sm mb-4">
                                <i class="fas fa-lock prefix"></i>
                                <input type="password" id="password" name="password" class="form-control form-control-sm validate">
                                <label data-error="wrong" data-success="right" for="modalLRInput11">Your password</label>
                            </div>
                            <div class="text-center mt-2">
                                <button class="btn btn-info" id="btnsub">Log in <i class="fas fa-sign-in ml-1"></i></button>
                            </div>
                        </div>
                    </div>
                    <!--/.Panel 7--> 
                </div>
            </div>
            <!--/.Content-->
        </div>
    </div>
    <!--Modal: Login / Register Form-->
    <script>
        $("#btnsub").on('click',function(){
            var email = $('#email').val();
            var password = $('#password').val();
            console.log(email,password);
            $.ajax({
                url:  '/laravel/login',
                type: 'POST',
                data: {email:email,password:password,_token:"{{ csrf_token() }}"},
                success: function (response) {
                    response = JSON.parse(response);
                }
            });
        });
    </script>
@stop
