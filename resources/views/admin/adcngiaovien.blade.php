@extends('base.baseadmin')
@section('title', 'Cập nhật Giáo viên')
@section('content')

<div class="container">
	<div class="row">

		<div class="col-md-offset-1 col-md-3">
		   	<form class="form-horizontal">
				<div class="form-group">
      				<label for="usr">Mã Giáo Viên:</label>
     		 		<input type="text" class="form-control" >
   			 	</div>
				<div class="form-group">
      				<label for="usr">Họ Tên:</label>
     		 		<input type="text" class="form-control" >
   			 	</div>
   			 	<div class="form-group" >
					<label for="usr">Giới Tính:</label>
					<br>
					<div id="gioitinh">
			      		<label id="gioitinhnam">&nbsp &nbsp<input type="radio" name="optradio">&nbsp Nam</label>
			      		<label><input type="radio" name="optradio">&nbsp Nữ</label>
		      		</div>
		    	</div>
				<div class="form-group">
				    <label for="sel1">Dân Tộc:</label>
				    <select class="form-control" >
				        <option>Kinh</option>
				        <option>Khmer</option>
				        <option>Hoa</option>
				        <option>Chăm</option>

		      		</select>
		      	</div>
		      	
		  	</form>
	  	</div>
		
		<div class="col-md-offset-3 col-md-3">
		   	<form class="form-horizontal">
		   		<div class="form-group">
				    <label for="sel1">Tôn Giáo:</label>
				    <select class="form-control" >
				        <option>Không</option>
				        <option>Phật giáo</option>
				        <option>Thiên Chúa giáo</option>
				        <option>Hồi giáo</option>
		      		</select>
		      	</div>
				<div class="form-group">
      				<label for="usr">Ngày Sinh:</label>
     		 		<input type="text" class="form-control" >
   			 	</div>
   			 	<div class="form-group">
      				<label for="usr">Nơi Sinh:</label>
     		 		<input type="text" class="form-control" >
   			 	</div>
				<div class="form-group">
      				<label for="usr">Số Điện Thoại:</label>
     		 		<input type="text" class="form-control" >
   			 	</div>
   			 	<div class="form-group">
                    <div class="col-sm-offset-4 ">
                        <button type="submit" name="btdangnhap" class="btn btn-primary" 
                        data-toggle="tooltip" title="nhấp để đăng nhập" style="width:112px;">Xác nhận</button>                                         
                    </div>
                </div>
		  	</form>
	  	</div>

	</div>
</div>

@stop