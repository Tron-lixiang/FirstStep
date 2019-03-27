<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>登录</title>
    <!--引入CSS-->
    <link rel="stylesheet" type="text/css" href="public/css/semantic.css" />
    <link rel="stylesheet" type="text/css" href="public/css/login.css" />
    <script type="text/javascript" src="public/js/jquery.js"></script>
    <script type="text/javascript" src="public/static/layer/layer.js"></script>

</head>
<body>
<div class="header" title="李想">
    <img src="public/images/lixiang_logo.png">
</div>
<!--主体部分 -->
<div class="main">
    <div class="left">
        <div class="login-bg">
            <img src="public/images/logo_banner.jpg">
        </div>
    </div>
    <div class="content">
        <!-- 输入部分 -->
        <div class="ui big form">
            <div class="ui stacked segment blue">
                <div class="field">
                    <div class="ui icon input">
                        <i class="user icon"></i>
                        <input type="text" name="username" placeholder="用户名">
                    </div>
                </div>
                <div class="field">
                    <div class="ui icon input">
                        <i class="lock icon"></i>
                        <input type="password" name="password" placeholder="密码">
                    </div>
                </div>
                <button id="login" class="ui fluid large teal submit  button" >登录</button>
            </div>
            <div class="ui message">
                您是新用户?<a href="register.php">注册</a>
            </div>
        </div>
        <!-- 推荐输入结束 -->

        <!-- 推荐用户 -->
        <div class="recommend">
            <div class="ui horizontal divider">
                <h4 class="ui teal">推荐用户</h4>
            </div>
            <div class="ui tiny images">
                <img class="ui medium circular image" src="public/images/lixiang.png">
                <img class="ui medium circular image" src="public/images/lixiang1.jpg">
                <img class="ui medium circular image" src="public/images/lixiang2.JPG">
                <img class="ui medium circular image" src="public/images/laolao.jpg">
                <img class="ui medium circular image" src="public/images/huanjing.jpg">
                <img class="ui medium circular image" src="public/images/laolao1.JPG">
                <img class="ui medium circular image" src="public/images/gopro.JPG">
                <img class="ui medium circular image" src="public/images/shizi.JPG">
                <img class="ui medium circular image" src="public/images/penquan.JPG">
            </div>
        </div>
        <!-- 推荐用户 -->
    </div>
</div>
<div class="clear"></div>
<!-- 网站底部 -->
<div class="footer">
    Copyright@2019李想科技
</div>
<!- JS对输入判断 -!>
<script>
    $('#login').click(function(){
        var username  = $("input[name='username']").val();
        var password  = $("input[name='password']").val();
        //js验证用户名和密码
        if(username == ''){
            layer.msg('请填写用户名');
            return false;
        }
        if(password == ''){
            layer.msg('请填写密码');
            return false;
        }
        $('#login').click(function(){
            var username  = $("input[name='username']").val();	//获取用户名
            var password  = $("input[name='password']").val();	//获取密码
            //验证用户名和密码
            if(username == ''){
                layer.msg('请填写用户名');
                return false;
            }
            if(password == ''){
                layer.msg('请填写密码');
                return false;
            }
            //layer弹窗
            $.post("ajaxCheckLogin.php", {username: username,password:password}, function(data) {
                if (data == -1) {
                    layer.msg('用户名或密码错误');
                    return false;
                }
                if (data == 1){
                    window.location.href = "index.php";
                }
            });
            return false;
        });
        return false;
    });
</script>
</body>
</html>