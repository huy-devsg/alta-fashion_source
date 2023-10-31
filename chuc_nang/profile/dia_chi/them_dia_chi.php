<?php 
	if(!isset($bien_bao_mat)){exit();}
?>
<form action="" method="post">
	<table width="990px" >
		<tr>
			<td width="150px" >Tỉnh / Thành phố : </td>
			<td width="840px">
				<input type="text" name="tinh" value="" >
			</td>
		</tr>
		<tr>
			<td width="150px" >Quận / Huyện : </td>
			<td width="840px">
				<input type="text" name="huyen" value="" >
			</td>
		</tr>
		<tr>
			<td width="150px" >Phường / Xã : </td>
			<td width="840px">
				<input type="text" name="xa" value="" >
			</td>
		</tr>
		<tr>
			<td width="150px" >Tên Đường : </td>
			<td width="840px">
				<input type="text" name="duong" value="" >
			</td>
		</tr>
		<tr>
			<td width="150px" >Số Nhà / Hẻm : </td>
			<td width="840px">
				<input type="text" name="so_nha" value="" >
			</td>
		</tr>
		<tr>
			<td>Mặc định </td>
			<td>
                    <input type="checkbox" name="mac_dinh" value="co"> Đặt làm mặc định
			</td>
		</tr>
		<tr>
			<td>&nbsp;</td>
			<td>
				<br>
				<input type="submit" name="bieu_mau_them_dia_chi" value="Thêm địa chỉ">
			</td>
		</tr>
	</table>
</form>