<!DOCTYPE html>
<html>
<head>
    <meta charset='utf-8'>
    <!-- Page designed by Titan -->
    <meta name="author" content="Titan">
    <!-- Page designed by Titan -->
    <meta http-equiv='X-UA-Compatible' content='IE=edge'>
    <title>Login - TitanWeb</title>
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
    <!-- import Bootstrap,jQuey and flat-ui -->
    <link href="https://cdn.bootcss.com/twitter-bootstrap/3.4.1/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.bootcss.com/jquery/3.4.1/jquery.min.js"></script>
    <script src="https://cdn.bootcss.com/twitter-bootstrap/3.4.1/js/bootstrap.min.js"></script>

    <script src='/js/titanLogin.js'></script>
    <!-- import end -->
</head>
<body style="background-image: url('./images/LoginBG.jpg');background-repeat: no-repeat;background-size: cover">
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-3">

            </div>
            <div class="col-md-6">
                <center>
                <div class="panel panel-primary" style="margin-top: 10rem;margin-bottom: 20rem;">
                    <div class="panel-heading">Titan留言板 - 管理员登录界面</div>
                    <div class="panel-body">
                       <h2>Titan留言板 - 管理员登录界面 <br><br>请登录以继续操作！</h2> <br>
                       <!-- Login Tips START -->
                        <div id="LoginTips">
                            <div class="alert alert-success alert-dismissable" style="display: none;" id="successTip">
                                <button type="button" class="close" data-dismiss="alert"
                                        aria-hidden="true">
                                    &times;
                                </button>
                                Login Successfully! Redircting...
                            </div>

                            <div class="alert alert-danger alert-dismissable" style="display: none;" id="failedTip">
                                <button type="button" class="close" data-dismiss="alert"
                                        aria-hidden="true">
                                    &times;
                                </button>
                                <h2>Login Failed!</h2> Please check your Username and Password!
                            </div>

                            <div class="alert alert-warning alert-dismissable" style="display: none;" id="invalidUserTip">
                                <button type="button" class="close" data-dismiss="alert"
                                        aria-hidden="true">
                                    &times;
                                </button>
                                <h2>Login Failed!</h2> Invalid Username, please check again.
                            </div>

                            <div class="alert alert-warning alert-dismissable" style="display: none;" id="invalidPassTip">
                                <button type="button" class="close" data-dismiss="alert"
                                        aria-hidden="true">
                                    &times;
                                </button>
                                <h2>Login Failed!</h2> Invalid Password, please check again.
                            </div>

                             <!-- Login Tips END -->
                        </div>
                        <table style="border-spacing: 10px 20px;border-collapse: separate;">
                            <tr>
                                <td>Username:</td>
                                <td><input type="text" id="loginuser"></td>
                            </tr>
                            <tr>
                                <td>Password:</td>
                                <td><input type="password" id="loginpass"></td>
                            </tr>
                            <tr>
                                <td colspan="2"><button type="button" class="btn btn-block btn-primary" onclick="doLogin()">Login</button></td>
                            </tr>
                        </table>
                    </div>
                    <div class="panel-footer">
                        Powered by Titan © 2014-2019 All Rights Reserved.
                    </div>
                </div>
                </center>
            </div>
            
            <div class="col-md-3">

            </div>
        </div>
    </div>
</body>
</html>