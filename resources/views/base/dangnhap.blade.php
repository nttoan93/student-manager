<!DOCTYPE html>
<html>
<head>

  	<meta charset="utf-8">
  	<title> Đăng nhập </title>
    
  	<link rel="stylesheet" href="/nienluannew/public/bootstrap/css/bootstrap.min.css">
  	<link rel="stylesheet" href="/nienluannew/public/css/app.css">
    

</head>

<body>

<div>
    <nav id="banner" class="navbar navbar-default" role="navigation">
        <div class="navbar-footer">
            <div align="center">
                <img src="/nienluannew/public/image/banner.png"   >
            </div>
        </div>
    </nav>
</div>

<br>
<br>
<br>
<br>
<br>
<br>

<div class="container">
    <div class="row">
        
            <div class="col-sm-offset-4 col-sm-4">
                <form action="index.php" method="post">
                    <div class="panel panel-primary">
                        <div class="panel-heading text-center">
                            <h3 class="panel-title"><b>ĐĂNG NHẬP</b></h3>
                        </div>
                        <div class="panel-body">
                            <form class="form-horizontal">
                                <div class="input-group">
                                    <span class="input-group-addon"><i class="glyphicon glyphicon-user" aria-hidden="true"></i></span>
                                    <input type="text" name="texttaikhoan" class="form-control" placeholder="Tên đăng nhập" 
                                    required autofocus data-errormessage-value-missing="Nhập vào tên đăng nhập" 
                                    data-errormessage-type-mismatch="Invalid!">
                                </div>
                                <p></p>
                                <p></p>
                                <div class="input-group">
                                  <span class="input-group-addon"><i class="glyphicon glyphicon-lock"></i></span>
                                  <input type="password" name="textmatkhau" class="form-control" placeholder="Mật khẩu" 
                                  required data-errormessage-value-missing="Nhập vào mật khẩu">
                                </div>
                                <p></p>
                                <p></p>
                                <div class="form-group">
                                    <div class="col-sm-offset-2 col-sm-6">
                                       <button type="submit" name="btdangnhap" class="btn btn-primary" data-toggle="tooltip" title="nhấp để đăng nhập">Đăng nhập</button>                                         
                                    </div>
                                </div>
                            </form>
                        </div>
                   
                </form>
            </div>
        </div>
    </div>  
</div>  

<br>
<br>
<br>
<br>
<br>
<br>

<div>
    <nav id="navfooter" class="navbar navbar-default" role="navigation" >
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