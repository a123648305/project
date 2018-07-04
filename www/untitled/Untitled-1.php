
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
	<head>
        <meta http-equiv="Content-Type" content="text/html; charset=gb2312" /> 
		<title>�û�ע�� - ������</title>
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
                                            $("#email\\.info").html("Email��ַ����Ϊ��");
                                            return;
                                        }
                                        var pattern=/\b(^['_A-Za-z0-9-]+(\.['_A-Za-z0-9-]+)*@([A-Za-z0-9-])+(\.[A-Za-z0-9-]+)*((\.[A-Za-z0-9]{2,})|(\.[A-Za-z0-9]{2,}\.[A-Za-z0-9]{2,}))$)\b/;
                                        if(!pattern.test(email)){
                                            $("#email\\.info").html("Email��ʽ����ȷ");
                                            return;
                                        }
                                        $.get("check_email.php?email="+email,null,
                                            function(data){
                                                $("#email\\.info").html(data);
                                                if (data=="����ע��") {
                                                    flag.email=true;
                                                }
                                            }
                                        );
                                    });
                $("#txtNickName").blur(function () {
                                            var nickname=$(this).val();
                                            if(nickname==""){
                                                $("#name\\.info").html("�ǳƲ���Ϊ��");
                                                return;
                                            }
                                            var pattern = /\b(^['A-Za-z0-9]{4,20}$)\b/;
                                			if (!pattern.test(nickname)) {
                                				$("#name\\.info").html("�ǳƸ�ʽ����ȷ");
                                                return;
                                            }else{
                                                $("#name\\.info").html("�ǳƸ�ʽ��ȷ");
                                                flag.nickname=true;
                                                return;
                                            }
                                       });
                $("#txtPassword").blur(function () {
                                            var password=$(this).val();
                                            if (password=="") {
                                                $("#password\\.info").html("���벻��Ϊ��");
                                                return;
                                            }
                                            var pattern = /\b(^['A-Za-z0-9]{4,20}$)\b/;
                                			if (!pattern.test(password)) {
                                				$("#password\\.info").html("�����ʽ����ȷ");
                                                return;   
                                            }else{
                                                $("#password\\.info").html("�����ʽ��ȷ");
                                                //flag.password=true;
                                                return;
                                            }
                                       });
                $("#txtRepeatPass").blur(function () {
                                            var password1=$(this).val();
                                            if (password1=="") {
                                                $("#password1\\.info").html("���벻��Ϊ��");
                                                return;
                                            }
                                            var pattern = /\b(^['A-Za-z0-9]{4,20}$)\b/;
                                			if (!pattern.test(password1)) {
                                				$("#password1\\.info").html("�����ʽ����ȷ");
                                                return;   
                                            }else if(password1!=$("#txtPassword").val()){
                                                $("#password1\\.info").html("������������벻һ��");
                                                return;
                                            }else{
                                                $("#password1\\.info").html("�ظ�������ȷ");
                                                flag.password=true;
                                                return;
                                            }                                            
                                        });
                $("#txtVerifyCode").blur(function () {
                                            var verify=$(this).val();
                                            if(verify==""){
                                                $("#number\\.info").html("��֤�벻��Ϊ��");
                                                return;
                                            }
                                            $.post("./verify/check.php",{verify:verify},
                                                function(data){
                                                    $("#number\\.info").html(data);
                                                    if (data=="��֤�ɹ�") {
                                                        flag.verify=true;
                                                    }
                                                }
                                            );
                                         })
            	$("#f").submit(function(){
                            		var ok = flag.email&&flag.password&&flag.verify&&flag.nickname;
                            		if(ok==false){
                            			alert("���������ڼ�����ڴ���");
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
			ע�Ჽ��:<span class="red_bold">1.��д��Ϣ</span> > 2.��֤���� > 3.ע��ɹ�
		</div>
		<div class="fill_message">
			<form name="ctl00" method="post" action="save_reg.php" id="f">
				<h2>���¾�Ϊ������</h2>
				<table class="tab_login" >
					<tr>
						<td valign="top" class="w1">����д����Email��ַ��</td>
						<td>
							<input name="email" type="text" id="txtEmail" class="text_input"/>
							<div class="text_left" id="emailValidMsg">
								<p>����д��Ч��Email��ַ��</p>
								<span id="email.info" style="color:red"></span>
							</div>
						</td>
					</tr>
					<tr>
						<td valign="top" class="w1">�������ڵ��������ǳƣ�</td>
						<td>
							<input name="nickname" type="text" id="txtNickName" class="text_input" />
							<div class="text_left" id="nickNameValidMsg">
								<p>��СдӢ����ĸ�����ġ�������ɣ�����4��20���ַ���һ������Ϊ�����ַ���</p>
								<span id="name.info" style="color:red"></span>
							</div>
						</td>
					</tr>
					<tr>
						<td valign="top" class="w1">�������룺</td>
						<td>
							<input name="password" type="password" id="txtPassword" class="text_input" />
							<div class="text_left" id="passwordValidMsg">
								<p>������������ɴ�СдӢ����ĸ��������ɣ�����6��20λ��</p>
								<span id="password.info" style="color:red"></span>
							</div>
						</td>
					</tr>
					<tr>
						<td valign="top" class="w1">�ٴ����������õ����룺</td>
						<td>
							<input name="password1" type="password" id="txtRepeatPass" class="text_input"/>
							<div class="text_left" id="repeatPassValidMsg">
							<span id="password1.info" style="color:red"></span>
							</div>
						</td>
					</tr>
					<tr>
						<td valign="top" class="w1">��֤�룺</td>
						<td>
							<img class="yzm_img" id='imgVcode' src='./verify/verify.php' style="cursor:pointer" border='0' onclick="document.getElementById('imgVcode').src='./verify/verify.php?t='+Math.random()"/>
							<input name="number" type="text" id="txtVerifyCode" class="yzm_input"/>
							<div class="text_left t1">
								<p class="t1">
									<span id="vcodeValidMsg">������ͼƬ�е��ĸ���ĸ��</span>									
									<a href="#" style="cursor:pointer" onclick="document.getElementById('imgVcode').src='./verify/verify.php?t='+Math.random()">�������������ͼƬ</a>
                                    <br />
                                    <span id="number.info" style="color:red"></span>
								</p>
							</div>
						</td>
					</tr>
				</table>

				<div class="login_in">
					<input id="btnClientRegister" class="button_1" name="submit" type="submit" value="ע ��"/>
				</div>
			</form>
		</div>
        <?php include("../common/foot.php"); ?>
	</body>
</html>
