@extends('base.baseadmin')
@section('title', 'Dân tộc')

@section('content')

<div class="container">


	<div class="row">
		<div class="col-md-offset-1 col-md-3">
<table border="1" class="table" >
			<tr >
				<th id="tablehead" colspan="2" >
					Dân tộc hiện có:
				</th>
				    		
			</tr>
			<tr style="background: #ffffff;">
				<td>
					<label>Mã</label>
				</td>
				<td>
					<label>Tên</label>
				</td>
			</tr>
			<?php
			$count=1;
				$data=DB::table('dantoc')->select(['id','tendantoc'])->get();
				foreach ($data as $tdt) {
					if(($count%2)==1){
						echo "<tr class=\"success\">";
					}
					else{
						echo "<tr class=\"danger\">";
					}
					
					echo "<td>";
					echo $tdt->id;
					echo "</td>";
					echo "<td>";
					echo $tdt->tendantoc;
					echo "</td>";
					echo "</tr>";
					$count++;
				}
			?>

			</table>

			
		</div>
		<div class="col-md-offset-3 col-md-3">
			<form action="{!!route ('adqldantoc')!!}">
	
	<div class="form-group">
      				<label for="usr">Dân tộc mới:</label>
     		 		<input type="text" class="form-control" name="txtdantoc">
   			 	</div>
   			 	<div class="form-group">
                    <div >
                    <input type="hidden" name="_token" value="{!! csrf_token() !!}"/>
                        <button type="submit" name="btthem" class="btn btn-primary" 
                        data-toggle="tooltip" title="nhấp để đăng nhập" style="width:112px;">Thêm</button>                                         
                    </div>
                </div>
			
</form>
		</div>
	</div>

</div>



@stop