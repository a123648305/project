
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
	<head>
        <meta http-equiv="Content-Type" content="text/html; charset=gb2312" /> 
		<title>用户注册 - 当当网</title>
		<link href="../css/login.css" rel="stylesheet" type="text/css" />
		<link href="../css/page_bottom.css" rel="stylesheet" type="text/css" />
        <script type="text/javascript" src="../js/jquery-1.7.1.js"></script>
        <script type="text/javascript">
            var flag = {
                "email":false,
                "nickname":false,
                "password":false,
                "verify":false
            };
            
            $(function(){
                $("#txtEmail").blur(function () {
                                        var email=$(this).val();
                                        //alert(email);
                                        if(email==""){
                                            $("#email\\.info").html("Email地址不能为空");
                                            return;
                                        }
                                        var pattern=/\b(^['_A-Za-z0-9-]+(\.['_A-Za-z0-9-]+)*@([A-Za-z0-9-])+(\.[A-Za-z0-9-]+)*((\.[A-Za-z0-9]{2,})|(\.[A-Za-z0-9]{2,}\.[A-Za-z0-9]{2,}))$)\b/;
                                        if(!pattern.test(email)){
                                            $("#email\\.info").html("Email格式不正确");
                                            return;
                                        }
                                        $.get("check_email.php?email="+email,null,
                                            function(data){
                                                $("#email\\.info").html(data);
                                                if (data=="可以注册") {
                                                    flag.email=true;
                                                }
                                            }
                                        );
                                    });
                $("#txtNickName").blur(function () {
                                            var nickname=$(this).val();
                                            if(nickname==""){
                                                $("#name\\.info").html("昵称不能为空");
                                                return;
                                            }
                                            var pattern = /\b(^['A-Za-z0-9]{4,20}$)\b/;
                                			if (!pattern.test(nickname)) {
                                				$("#name\\.info").html("昵称格式不正确");
                                                return;
                                            }else{
                                                $("#name\\.info").html("昵称格式正确");
                                                flag.nickname=true;
                                                return;
                                            }
                                       });
                $("#txtPassword").blur(function () {
                                            var password=$(this).val();
                                            if (password=="") {
                                                $("#password\\.info").html("密码不能为空");
                                                return;
                                            }
                                            var pattern = /\b(^['A-Za-z0-9]{4,20}$)\b/;
                                			if (!pattern.test(password)) {
                                				$("#password\\.info").html("密码格式不正确");
                                                return;   
                                            }else{
                                                $("#password\\.info").html("密码格式正确");
                                                //flag.password=true;
                                                return;
                                            }
                                       });
                $("#txtRepeatPass").blur(function () {
                                            var password1=$(this).val();
                                            if (password1=="") {
                                                $("#password1\\.info").html("密码不能为空");
                                                return;
                                            }
                                            var pattern = /\b(^['A-Za-z0-9]{4,20}$)\b/;
                                			if (!pattern.test(password1)) {
                                				$("#password1\\.info").html("密码格式不正确");
                                                return;   
                                            }else if(password1!=$("#txtPassword").val()){
                                                $("#password1\\.info").html("两次输入的密码不一致");
                                                return;
                                            }else{
                                                $("#password1\\.info").html("重复密码正确");
                                                flag.password=true;
                                                return;
                                            }                                            
                                        });
                $("#txtVerifyCode").blur(function () {
                                            var verify=$(this).val();
                                            if(verify==""){
                                                $("#number\\.info").html("验证码不能为空");
                                                return;
                                            }
                                            $.post("./verify/check.php",{verify:verify},
                                                function(data){
                                                    $("#number\\.info").html(data);
                                                    if (data=="验证成功") {
                                                        flag.verify=true;
                                                    }
                                                }
                                            );
                                         })
            	$("#f").submit(function(){
                            		var ok = flag.email&&flag.password&&flag.verify&&flag.nickname;
                            		if(ok==false){
                            			alert("表单项正在检测或存在错误");
                                        history.back();
                            			return false;
                            		}
                            		return true;
                            	});	
            })
        </script>
	</head>
	<body>
        <?php include("../common/head.php"); ?>
		<div class="login_step">
			注册步骤:<span class="red_bold">1.填写信息</span> > 2.验证邮箱 > 3.注册成功
		</div>
		<div class="fill_message">
			<form name="ctl00" method="post" action="save_reg.php" id="f">
				<h2>以下均为必填项</h2>
				<table class="tab_login" >
					<tr>
						<td valign="top" class="w1">请填写您的Email地址：</td>
						<td>
							<input name="email" type="text" id="txtEmail" class="text_input"/>
							<div class="text_left" id="emailValidMsg">
								<p>请填写有效的Email地址。</p>
								<span id="email.info" style="color:red"></span>
							</div>
						</td>
					</tr>
					<tr>
						<td valign="top" class="w1">设置您在当当网的昵称：</td>
						<td>
							<input name="nickname" type="text" id="txtNickName" class="text_input" />
							<div class="text_left" id="nickNameValidMsg">
								<p>由小写英文字母、中文、数字组成，长度4－20个字符，一个汉字为两个字符。</p>
								<span id="name.info" style="color:red"></span>
							</div>
						</td>
					</tr>
					<tr>
						<td valign="top" class="w1">设置密码：</td>
						<td>
							<input name="password" type="password" id="txtPassword" class="text_input" />
							<div class="text_left" id="passwordValidMsg">
								<p>您的密码可以由大小写英文字母、数字组成，长度6－20位。</p>
								<span id="password.info" style="color:red"></span>
							</div>
						</td>
					</tr>
					<tr>
						<td valign="top" class="w1">再次输入您设置的密码：</td>
						<td>
							<input name="password1" type="password" id="txtRepeatPass" class="text_input"/>
							<div class="text_left" id="repeatPassValidMsg">
							<span id="password1.info" style="color:red"></span>
							</div>
						</td>
					</tr>
					<tr>
						<td valign="top" class="w1">验证码：</td>
						<td>
							<img class="yzm_img" id='imgVcode' src='./verify/verify.php' style="cursor:pointer" border='0' onclick="document.getElementById('imgVcode').src='./verify/verify.php?t='+Math.random()"/>
							<input name="number" type="text" id="txtVerifyCode" class="yzm_input"/>
							<div class="text_left t1">
								<p class="t1">
									<span id="vcodeValidMsg">请输入图片中的四个字母。</span>									
									<a href="#" style="cursor:pointer" onclick="document.getElementById('imgVcode').src='./verify/verify.php?t='+Math.random()">看不清楚？换个图片</a>
                                    <br />
                                    <span id="number.info" style="color:red"></span>
								</p>
							</div>
						</td>
					</tr>
				</table>

				<div class="login_in">
					<input id="btnClientRegister" class="button_1" name="submit" type="submit" value="注 册"/>
				</div>
			</form>
		</div>
        <?php include("../common/foot.php"); ?>
	</body>
</html>

