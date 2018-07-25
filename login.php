<!DOCTYPE html>
<html lang="ar" dir="rtl">
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta http-equiv="content-type" content="text/html;charset=UTF-8" />
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>لوحة التحكم</title>
	
	<!-- Global stylesheets -->
	<link href="assets/css/icons/icomoon/styles.css" rel="stylesheet" type="text/css">
	<link href="assets/css/bootstrap.css" rel="stylesheet" type="text/css">
	<link href="assets/css/core.css" rel="stylesheet" type="text/css">
	<link href="assets/css/components.css" rel="stylesheet" type="text/css">
	<link href="assets/css/colors.css" rel="stylesheet" type="text/css">
	<link href="assets/css/arfont/font.css" rel="stylesheet" type="text/css">
	<!-- /global stylesheets -->

	<!-- Core JS files -->
	<script type="text/javascript" src="assets/js/plugins/loaders/pace.min.js"></script>
	<script type="text/javascript" src="assets/js/core/libraries/jquery.min.js"></script>
	<script type="text/javascript" src="assets/js/core/libraries/bootstrap.min.js"></script>
	<script type="text/javascript" src="assets/js/plugins/loaders/blockui.min.js"></script>
	<!-- /core JS files -->

	<script type="text/javascript" src="assets/js/core/app.js"></script>
	<script type="text/javascript" src="assets/js/pages/dashboard.js"></script>

</head>


<body class="login-container">
<div class="page-container login-container">
<div class="page-content">
    <div class="content-wrapper">
        <div class="content">
            <form method="POST" id="LoginForm" onsubmit="return false;" >
                <div class="panel panel-body login-form">
                 <div id="LoginResult"> </div>
                   
                    <!-- To Disable auto saving Password -->
                    <input style="opacity: 0;position: absolute;">
                    <input type="password" style="opacity: 0;position: absolute;">
                    <!-- To Disable auto saving Password -->
                    
                    <div class="text-center">
                        <div class="icon-object border-slate-300 text-slate-300"><i class="icon-reading"></i></div>
                        <h5 class="content-group"> تسجيل الدخول للمديرين  <small class="display-block">أدخل المعلومات أسفله</small></h5>
                    </div>
                    <div class="form-group has-feedback has-feedback-left">
                        <input type="text" class="form-control" name="user_login" placeholder="إسم المستخدم أو البريد الإلكتروني">
                        <div class="form-control-feedback">
                            <i class="icon-user text-muted"></i>
                        </div>
                    </div>
                    <div class="form-group has-feedback has-feedback-left">
                        <input type="password" class="form-control" name="pass_login" placeholder="كلمة السر">
                        <div class="form-control-feedback">
                            <i class="icon-lock2 text-muted"></i>
                        </div>
                    </div>
                    <div class="form-group">
                    <input type="hidden" name="validate" value="users_login" >
                    <input type="submit" name="submit" id='login' class="btn btn-primary btn-block" value="تسجيل الدخول" >
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>
</div>
</body>
</html>