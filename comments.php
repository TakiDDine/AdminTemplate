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

<h1>صفحة التعليقات</h1>

<div class="col-md-12">
	<div id="CommentsResultTable"></div>
	<div class="panel panel-flat">
		<table class="table datatable datatable-basic">
			<thead>
				<tr>
					<th class="col-md-3"><b>الإسم</b></th>
					<th class="col-md-8"><b>التعليق</b></th>
					<th class="col-md-1 text-center"><b>تعديل</b></th>
				</tr>
			</thead>
			<tbody>
				<tr id=''>
					<td></td>
					<td></td>
					<td class="text-center">
						<ul class="icons-list">
							<li class="dropdown">
								<a href="#" class="dropdown-toggle" data-toggle="dropdown">
								    <i class="icon-menu9"></i>
								</a>
								<ul class="dropdown-menu dropdown-menu-right">
									<li><a class="text-success"><i class="icon-eye"></i><b>عرض التعليق </b></a></li>
									<li><a><i class="icon-eye-blocked"></i><b>اخفاء التعليق</b></a></li>
									<li><a class='text-danger'><i class="icon-trash"></i><b> حذف التعليق </b></a></li>
								</ul>
							</li>
						</ul>
					</td>
				</tr>
			</tbody>
		</table>
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