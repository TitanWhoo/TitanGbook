<!DOCTYPE html>
<html lang="zh-CN">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Titan留言板 - Powered by Titan!</title>
    <link href="./css/titan.css?v=1.0.1" rel="stylesheet">
    <link href="https://cdn.bootcss.com/twitter-bootstrap/3.4.1/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.bootcss.com/jquery/3.4.1/jquery.min.js"></script>
    <script src="https://cdn.bootcss.com/twitter-bootstrap/3.4.1/js/bootstrap.min.js"></script>
    <script src="/js/titan.js"></script>
</head>
<body>
    <div class="container">
        <nav class="navbar navbar-default" role="navigation">
            <div class="container-fluid titan-nav"> 
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse"
                        data-target="#navbar-collapse">
                    <span class="sr-only">切换导航</span>
                    <span class="icon-bar titan-nav-button"></span>
                    <span class="icon-bar titan-nav-button"></span>
                    <span class="icon-bar titan-nav-button"></span>
                </button>
                <a class="navbar-brand titan-nav-font" href="#">Titan留言板</a>
            </div>
            <div class="collapse navbar-collapse titan-nav" id="navbar-collapse">
                <ul class="nav navbar-nav">
                    <li class="titan-nav-active"><a class="titan-nav-a" href="./">主页</a></li>
                </ul>
                <ul class="nav navbar-nav navbar-right"><li><a style="font-size: 15px;" class="titan-nav-font" href="https://www.titan6.cn/" target="_blank">Titan博客</a></li></ul>
            </div>
            </div>
        </nav>
        <div class="panel panel-primary">
            <div class="panel-heading">
                <h3 class="panel-title text-center">Welcome!</h3>
            </div>
                <div class="panel-body text-center">
                    <h3>欢迎来到Titan留言板，你可以在这里畅所欲言！</h3>
                </div>
            </div>
         <div id="gbookArea" style="display: none;">

        </div>
        <div id="loading" class="text-center">
            <div class="panel panel-info">
                <div class="panel-heading">
                    <h3 class="panel-title">正在载入评论...</h3>
                </div>
                <div class="panel-body">
                    <h3 class="primary">正在载入评论...请稍后！</h3><br>
                    <div class="progress">
                        <div id="progressCom" class="progress-bar" role="progressbar" style="width: 15%;">
                        </div>
                    </div>
                </div>
            </div>
        </div>
            <div id="sendGbook">
                <div class="panel panel-primary">
                    <div class="panel-heading">
                        <h3 class="panel-title">留言</h3>
                    </div>
                    <div class="panel-body">
                        <div id="commentSuccess" class="alert alert-success" style="display: none;">评论成功！</div>
                        <div role="form">
                            <div class="input-group">
                                <span class="input-group-addon" id="sizing-addon1">您的姓名</span>
                                <input type="text" id="username" class="form-control" placeholder="请输入您的姓名">
                            </div><br>
                            <div class="input-group">
                                <span class="input-group-addon" id="sizing-addon2">您的邮箱</span>
                                <input type="text" id="mail" class="form-control" placeholder="请输入您的邮箱">
                            </div><br>
                            <div class="input-group captcha-div">
                                <span class="input-group-addon" id="sizing-addon2">验证码</span>
                                <input type="text" id="vcode" class="form-control"  style="height: 50px;" placeholder="请输入验证码">
                                <span class="input-group-addon" id="sizing-addon2" style="padding: 0;"><img id="captcha" onclick="javascript:this.src='./vcode.php?t='+Math.random();" src="vcode.php"></span>
                                
                            </div>
                            <div class="form-group">
                                <label for="content">请输入您的留言内容:</label>
                                <textarea id="content" class="form-control" rows="3"></textarea>
                            </div>
                            <div class="form-group">
                                <button id="commentBtn" class="btn btn-block btn-info form-control" onclick="doComment()">提交留言</button>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
            
  
            

 </div>
</body>
</html>