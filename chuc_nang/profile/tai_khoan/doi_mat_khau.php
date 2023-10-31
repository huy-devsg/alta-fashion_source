<?php 
	if(!isset($bien_bao_mat)){exit();}
?>
<form action="" method="post" >
	<table width="990px" >
		<tr>
			<td width="100px" >Mật khẩu hiện tại : </td>
			<td width="890px" >
				<input type="password" name="mat_khau" >
			</td>
		</tr>
		<tr>
			<td width="100px" >Mật khẩu mới : </td>
			<td width="890px" >
				<input type="password" name="new_password">
			</td>
		</tr>
		<tr>
			<td width="100px" >Nhập lại mật khẩu : </td>
			<td width="890px" >
				<input type="password" name="comfirm_password">
			</td>
		</tr>
		<tr>
			<td>&nbsp;</td>
			<td>
				<input type="submit" name="bieu_mau_doi_mat_khau" value="Đổi mật khẩu">
			</td>
		</tr>
	</table>
</form>