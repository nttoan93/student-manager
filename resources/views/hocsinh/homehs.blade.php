@extends('base.basehocsinh')
@section('title', 'Học sinh')

@section('content')

<div class="container">
	<div class="row">

		<div class="col-md-offset-1 col-md-4">
		   	<form class="form-horizontal">
				<div >
				    <table border="1" class="table" >
				    	<tr >
				    		<th id="tablehead" colspan="2" >
				    			Thông tin
				    		</th>
				    		
				    	</tr>
				    	<tr class="success">
				    		<td>
				    			Họ tên:
				    		</td>
				    		<td>
				    			Tạ Thanh Bình
				    		</td>
				    		
				    	</tr>
				    	<tr class="danger">
				    		<td>
				    			Lớp:
				    		</td>
				    		<td>
				    			10B2
				    		</td>
				    	</tr>
				    	<tr class="success">
				    		<td>
				    			GVCN:
				    		</td>
				    		<td>
				    			Trần Hùng Cường
				    		</td>
				    		
				    	</tr>

				    </table>
				</div>
		  	</form>
	  	</div>
		
		<div class="col-md-offset-3 col-md-3">
		   	<form class="form-horizontal">
				<div >
				    <div class="form-group">
				      	<label>Tài khoản:</label>
				      	<input type="text" class="form-control"  value="Tạ Thanh Bình (b1203997)" disabled="true">
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
					 <div class="col-sm-offset-3 col-sm-5">
				    	<div>
							<button type="submit" class="btn btn-primary">Đổi mật khẩu</button>
						</div>
				    </div>
				</div>
		  	</form>
	  	</div>
	</div>
</div>

@stop