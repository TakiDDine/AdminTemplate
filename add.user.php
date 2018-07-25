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

<body>

<!-- Main navbar -->
<div class="navbar navbar-inverse">
    <div class="navbar-header">
        <a class="navbar-brand" href="/admin">لوحة التحكم</a>

        <ul class="nav navbar-nav visible-xs-block">
            <li><a data-toggle="collapse" data-target="#navbar-mobile"><i class="icon-tree5"></i></a></li>
            <li><a class="sidebar-mobile-main-toggle"><i class="icon-paragraph-justify3"></i></a></li>
        </ul>
    </div>

    <div class="navbar-collapse collapse" id="navbar-mobile">
        <ul class="nav navbar-nav">
            <li><a class="sidebar-control sidebar-main-toggle hidden-xs "><i class="icon-paragraph-justify3"></i></a></li>
                        <li><a href="#">زيارة الموقع</a></li>

        </ul>
        <ul class="nav navbar-nav navbar-right">
            <li class="dropdown dropdown-user">
                <a class="dropdown-toggle" data-toggle="dropdown">
                    <img src="assets/images/demo/users/face11.jpg" alt="">
                    <span>
                        سليمان تقي الدين
                    </span>
                    <i class="caret"></i>
                </a>

                <ul class="dropdown-menu dropdown-menu-right">
                    <li><a href="account"><i class="icon-cog5"></i> اعدادات الحساب</a></li>
                    <li><a href="logout"><i class="icon-switch2"></i> تسجيل الخروج</a></li>
                </ul>
            </li>
        </ul>
    </div>
</div>
<!-- /main navbar -->

	<!-- Page container -->
	<div class="page-container">

		<!-- Page content -->
		<div class="page-content">

			<!-- Main sidebar -->
<div class="sidebar sidebar-main">
    <div class="sidebar-content">

        <!-- User menu -->
        <div class="sidebar-user">
            <div class="category-content">
                <div class="media">
                    <a href="/panel/account" class="media-left"><img src="storage/users-avatars/default-avatar.png" class="img-circle img-sm" alt=""></a>
                    <div class="media-body">
                        <span class="media-heading text-semibold">
                          
                            
                        </span>
                    </div>
                    <div class="media-right media-middle">
                        <ul class="icons-list">
                            <li>
                                <a href="account"><i class="icon-cog3"></i></a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <!-- /user menu -->

   
        <!-- Main navigation -->
        <div class="sidebar-category sidebar-category-visible">
            <div class="category-content no-padding">
                <ul class="navigation navigation-main navigation-accordion">
                    <li><a href="home"><i class="icon-home4"></i> <span>نظرة عامة</span></a></li>
                    <li><a href="statistiques"><i class="icon-stats-growth"></i> <span>الإحصائيات</span></a></li>
                    <li><a href="mail"><i class="icon-envelop2"></i> <span>الرسائل</span></a></li>
                    <li><a href="users"><i class="icon-users"></i> <span>الأعضاء</span></a></li>
                    <li><a href="pages"><i class="icon-files-empty2"></i> <span>الصفحات</span></a></li>
                    <li><a href="posts"><i class="icon-price-tag3"></i> <span>  المقالات </span></a></li>
                    <li><a href="comments"><i class="icon-bubbles5"></i> <span>  التعليقات  </span></a></li>
                    <li><a href="ads"><i class="icon-barcode2"></i> <span>  الإعلانات  </span></a></li>
                    <li><a href="settings"><i class="icon-gear"></i> <span>  الإعدادات  </span></a></li>
                    <li><a href="categories"><i class="icon-hyperlink"></i> <span>  التصنيفات  </span></a></li>
                    <li><a href="files"><i class="icon-gear"></i> <span>  الملفات  </span></a></li>
                </ul>
            </div>
        </div>
        <!-- /main navigation -->
    </div>
</div>
<!-- /main sidebar -->
			
			


			<!-- Main content -->
			<div class="content-wrapper">

				

				<!-- Content area -->
				<div class="content">


                   
                   <h1>اضافة عضو جديد</h1>


<div class="col-md-12">
	<div class="panel panel-flat col-md-12">
		<div class="panel-body">
			<form class="form-horizontal" method='post' id="ADD_USER_FORM" onsubmit="return false;" >
				<fieldset class="content-group">
					<legend class="text-bold">اضافة عضو جديد</legend>
					<div class="form-group">
						<label class="control-label col-lg-2">اسم المستخدم</label>
						<div class="col-lg-10">
							<input type="text" class="form-control" name="username" placeholder="@username">
						</div>
					</div>
					<div class="form-group">
						<label class="control-label col-lg-2">الإسم الكامل</label>
						<div class="col-lg-10">
							<input type="text" class="form-control" name="full_name" placeholder="الإسم الكامل">
						</div>
					</div>
					<div class="form-group">
						<label class="control-label col-lg-2">البريد الإلكتروني</label>
						<div class="col-lg-10">
							<input type="text" class="form-control" name="email" placeholder="البريد الإلكتروني">
						</div>
					</div>
					<div class="form-group">
						<label class="control-label col-lg-2">كلمة المرور</label>
						<div class="col-lg-10">
							<input type="password" class="form-control" name="password" placeholder="كلمة المرور">
						</div>
					</div>
					<div class="form-group">
						<label class="control-label col-lg-2">تأكيد كلمة المرور</label>
						<div class="col-lg-10">
							<input type="password" class="form-control" name="retype_password" placeholder="تأكيد كلمة المرور">
						</div>
					</div>
					<div class="form-group">
						<label class="control-label col-lg-2">الجنس</label>
						<div class="col-lg-10">
							<select name="user_sexe" class="form-control">
                                <option value="female" class="form-control">أنثى</option>
                                <option value="male" class="form-control">ذكر</option>
                            </select>
						</div>
					</div>					
					<div class="form-group">
						<label class="control-label col-lg-2">تاريخ الميلاد</label>
						<div class="col-lg-10">
							<input type="text" class="form-control" name="birth_day" placeholder="تاريخ الميلاد">
						</div>
					</div>
					<div class="form-group">
						<label class="control-label col-lg-2">رقم الهاتف</label>
						<div class="col-lg-10">
							<input type="text" class="form-control" name="phone" placeholder="رقم الهاتف">
						</div>
					</div>	
					<div class="form-group">
						<label class="control-label col-lg-2">الدولة</label>
						<div class="col-lg-10">
							<input type="text" class="form-control" name="country" placeholder="الدولة">
						</div>
					</div>
					<div class="form-group">
						<label class="control-label col-lg-2">نوع العضوية</label>
						<div class="col-lg-10">
                            <select name="user_type" class="form-control">
                                    <option value="1" class="form-control">مستخدمة عادية</option>
                                    <option value="2" class="form-control">مديرة (تستطيع الدخول للوحة التحكم)</option>
                            </select>
						</div>
					</div>																
					<div class="form-group">
						<label class="control-label col-lg-2">نبذة تعريفية</label>
						<div class="col-lg-10">
						<textarea name="description" class='form-control' cols="30" rows="5"></textarea>
						</div>
					</div>																
<!--
					<div class="form-group">
						<label class="control-label col-lg-2">صورة المستخدم</label>
						<div class="col-lg-10">
							<input type="file" />
						</div>
					</div>					
-->
				</fieldset>
				<div class="text-right">
					<input type="hidden" name="validate" value="add_new_user">
					<button type="submit" class="btn btn-primary" id="Submit_Add_User">اضافة عضو جديد <i class="icon-arrow-left13 position-right"></i></button>
				</div>
			</form>
		</div>
	</div>
</div>
                   
                   
                   
                   
                   
                   
                   
                   
                    

					<!-- Footer -->
					<div class="footer text-muted">
						&copy; 2018. <a href="#">صنع بكل حب </a> بواسطة <a href="http://takiddine.com" target="_blank">takiddine</a>
					</div>
					<!-- /footer -->

				</div>
				<!-- /content area -->

			</div>
			<!-- /main content -->

		</div>
		<!-- /page content -->

	</div>
	<!-- /page container -->

</body>
</html>