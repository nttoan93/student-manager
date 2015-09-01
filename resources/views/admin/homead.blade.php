@extends('base.baseadmin')
@section('title', 'Admin')
@section('content')
	<div class="container">
   	<form class="form-horizontal">
		<div class="col-sm-offset-4 col-sm-4">
		    <div class="form-group">
		      	<label>Tài khoản:</label>
		      	<input type="text" class="form-control"  value="Quản Trị Viên (quantrivien)" disabled="true">
		    </div>
		    <div class="form-group">
		      	<label for="pwd">Mật khẩu cũ:</label>
		      	<input type="password"  class="form-control" placeholder="Mật khẩu cũ" 
                                  required data-errormessage-value-missing="Nhập vào mật khẩu">
		    </div>
		    <div class="form-group">
		      	<label for="pwd">Mật khẩu mới:</label>
		      	<input type="password"   class="form-control" placeholder="Mật khẩu mới" 
                                  required data-errormessage-value-missing="Nhập vào mật khẩu">
		    </div>
		    <div class="form-group">
		      	<label for="pwd">Xác nhận mật khẩu:</label>
		      	<input type="password"  class="form-control" placeholder="Xác nhận mật khẩu mới" 
                                  required data-errormessage-value-missing="Nhập vào mật khẩu">
		    </div>
			 <div class="col-sm-offset-3 col-sm-6">
		    	<div>
					<button type="submit" class="btn btn-primary" style="width:112px;">Đổi mật khẩu</button>
				</div>
		    </div>
		    
		</div>
  	</form>
</div>
@stop