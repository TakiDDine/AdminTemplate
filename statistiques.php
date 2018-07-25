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

				
<h1 class="text-left"> الإحصائيات  </h1>


<hr>
					<div class="row">
						<div class="col-sm-6 col-md-3">
							<div class="panel panel-body bg-blue-400 has-bg-image">
								<div class="media no-margin">
									<div class="media-body">
										<h3 class="no-margin"><?php echo $comments; ?></h3>
										<span class="text-uppercase text-size-mini">مجموع التعليقات</span>
									</div>

									<div class="media-right media-middle">
										<i class="icon-bubbles4 icon-3x opacity-75"></i>
									</div>
								</div>
							</div>
						</div>

						<div class="col-sm-6 col-md-3">
							<div class="panel panel-body bg-danger-400 has-bg-image">
								<div class="media no-margin">
									<div class="media-body">
										<h3 class="no-margin"><?php echo $pages; ?></h3>
										<span class="text-uppercase text-size-mini">مجموع المقالات</span>
									</div>

									<div class="media-right media-middle">
										<i class="icon-file-empty2 icon-3x opacity-75"></i>
									</div>
								</div>
							</div>
						</div>

						<div class="col-sm-6 col-md-3">
							<div class="panel panel-body bg-success-400 has-bg-image">
								<div class="media no-margin">
								<div class="media-body text-left">
										<h3 class="no-margin"><?php echo $users; ?></h3>
										<span class="text-uppercase text-size-mini">مجموع الأعضاء</span>
									</div>
									
									<div class="media-right media-middle">
										<i class="icon-users2 icon-3x opacity-75"></i>
									</div>

									
								</div>
							</div>
						</div>

						<div class="col-sm-6 col-md-3">
							<div class="panel panel-body bg-indigo-400 has-bg-image">
								<div class="media no-margin">
									

									<div class="media-body text-left">
										<h3 class="no-margin"><?php echo $emails; ?></h3>
										<span class="text-uppercase text-size-mini">مجموع الرسائل</span>
									</div>
									
									<div class="media-right media-middle">
										<i class="icon-envelop2 icon-3x opacity-75"></i>
									</div>
									
								</div>
							</div>
						</div>
					</div>
					<!-- /simple statistics -->




<div class="row row-sortable">
<div class="col-md-6">
<div class="panel panel-white">
		<div class="panel-heading no-border-bottom">
			<h6 class="panel-title">احصائيات الأعضاء</h6>
		</div>
		<div class="table-responsive">
			<table class="table table-bordered">
				<tbody>
					<tr>
						<td>عدد المدراء</td>
						<td><?php echo $admins  ?></td>
					</tr>															
					<tr>
						<td>عدد الأعضاء العاديين</td>
						<td><?php echo $simple_users  ?></td>
					</tr>					
					<tr>
						<td>عدد الأعضاء المحظورين</td>
						<td><?php echo $blocked_users ?></td>
					</tr>		
					<tr>
						<td>عدد الأعضاء المفعلين</td>
						<td><?php echo $active_users ?></td>
					</tr>		
					<tr>
						<td>عدد الأعضاء في انتظار الموافقة</td>
						<td><?php echo $pending_users; ?></td>
					</tr>																		
				</tbody>
			</table>
		</div>
	</div>
	<div class="panel panel-white">
		<div class="panel-heading no-border-bottom">
			<h6 class="panel-title">احصائيات  التعليقات</h6>
		</div>
		<div class="table-responsive">
			<table class="table table-bordered">
				<tbody>
					<tr>
						<td>التعليقات المنشورة</td>
						<td><?php echo $active_comments; ?></td>
					</tr>															
					<tr>
						<td>التعليقات المحذوفة</td>
						<td><?php echo $deleted_comments; ?></td>
					</tr>		
					<tr>
						<td>التعليقات التي تنتظر الموافقة</td>
						<td><?php echo $pending_comments; ?></td>
					</tr>					
				</tbody>
			</table>
		</div>
	</div>
</div>

<div class="col-md-6">
<div class="panel panel-white">
		<div class="panel-heading no-border-bottom">
			<h6 class="panel-title">احصائيات  المقالات</h6>
		</div>
		<div class="table-responsive">
			<table class="table table-bordered">
				<tbody>
                    <tr>
                        <td>المقالات المنشورة</td>
                        <td><?php echo $active_articles ; ?></td>
                    </tr>
					<tr>
						<td>المقالات المسودة </td>
						<td><?php echo $pending_articles; ?></td>
					</tr>	                    
					<tr>
						<td>المقالات المحذوفة</td>
				        <td><?php echo $deleted_articles ; ?></td>
					</tr>
				</tbody>
			</table>
		</div>
	</div>
</div>
<div class="col-md-6">
<div class="panel panel-white">
		<div class="panel-heading no-border-bottom">
			<h6 class="panel-title">احصائيات  الصفحات</h6>
		</div>
		<div class="table-responsive">
			<table class="table table-bordered">
				<tbody>
					<tr>
						<td>الصفحات المنشورة</td>
						<td><?php echo $active_pages    ?></td>
					</tr>				
					<tr>
						<td>الصفحات المسودة</td>
						<td><?php echo $pending_pages   ?></td>
					</tr>					
					<tr>
						<td>الصفحات المحذوفة</td>
						<td><?php echo $deleted_pages   ?></td>
					</tr>															
				</tbody>
			</table>
		</div>
	</div>
</div>
<div class="col-md-6">
<div class="panel panel-white">
		<div class="panel-heading no-border-bottom">
			<h6 class="panel-title">احصائيات الرسائل</h6>
		</div>

		<div class="table-responsive">
			<table class="table table-bordered">
				<tbody>
					<tr>
						<td>الرسائل المقروءة</td>
						<td><?php echo $seen_mails; ?></td>
					</tr>					
					<tr>
						<td>الرسائل غير مقروءة</td>
						<td><?php echo $new_mails;  ?></td>
					</tr>														
				</tbody>
			</table>
		</div>
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