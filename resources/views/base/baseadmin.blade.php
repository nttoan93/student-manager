<!DOCTYPE html>
<html>

<head>

	<title> @yield('title')</title>
	<meta charset="utf-8">
	<link rel="stylesheet" href="/nienluannew/public/bootstrap/css/bootstrap.min.css">
  	<link rel="stylesheet" href="/nienluannew/public/css/app.css">

</head>
<body>
<div>
	<nav id="mainmenu"class="navbar navbar-default" >
		<div class="container-fluid">
			<div class="navbar-header">	
				<a id="schoollogo" class="navbar-brand"   href="{!!route('admin')!!}"> <img id="logoanh" src="/nienluannew/public/image/laihoa.png"   ></a>
			</div>
			<div>
				<ul id="leftmenu" class="nav navbar-nav" >
					<li ><a href="">Quản lí Giáo viên</a>
						<ul>
							<li><a href="{!!route('themgiaovien')!!}">Thêm Giáo viên</a></li>
							<li><a href="{!!route('adcngiaovien')!!}">Cập nhật Giáo viên</a></li>
						</ul>
					</li>
					<li><a href="#">Quản lí Học sinh</a></li>
					<li><a href="#">Quản lí Lớp học</a></li>
					<li><a href="#">Quản lí Môn học</a></li>
					<li><a href="">Quản lí khác</a>
						<ul>
							<li><a href="{!!route('adqldantoc')!!}">Dân Tộc</a></li>
							<li><a href="{!!route('adqltongiao')!!}">Tôn Giáo</a></li>
						</ul>
					</li>
				</ul>
				<ul id="logout" class="nav navbar-nav navbar-right" >
					<li >
						<a id="drop" href="#" class="dropdown-toggle" data-toggle="dropdown" >Quản Trị Viên <b class="caret"></b></a>
						<ul >						
							<li><i class="glyphicon glyphicon-log-out"></i>&nbsp<a href="#">Thoát</a></li>
						</ul>
					</li>
				</ul>
			</div>
		</div>
	</nav>
</div>

<br>
<br>
<br>
<br>
@section('content')
            
@show


<br>
<br>
<br>
<br>
<br>
<br>

<div>
	<nav id="navfooter" class="navbar navbar-default" role="navigation" style="position:absolute;bottom:-23;width:100%;">
	    <div class="navbar-footer">
	        <div id="footer" class="container">
	            <div class="row text-center">
	                <div class="col-sm-12">
	                    <p>
	                      <b>Trường THPT Lai Hòa, Lai Hòa - Vĩnh Châu - Sóc Trăng, DT: 0793012345</b>
	                    </p>
	                </div>
	            </div>
	        </div>
	    </div>
	</nav>  
</div>

</body>
</html>