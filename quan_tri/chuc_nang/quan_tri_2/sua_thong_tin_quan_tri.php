<?php 
	if(!isset($bien_bao_mat)){exit();}
?>
<?php 
	$ky_danh=$_SESSION['ky_danh'];
	$tv="select * from tai_khoan where ky_danh='$ky_danh'";
	$tv_1=mysqli_query($conn,$tv);
	$tv_2=mysqli_fetch_array($tv_1);
	$ky_danh=$tv_2['ky_danh'];	
?>
<form action="" method="post" >
	<table width="990px" >
		<tr>
			<td colspan="2" ><b style="color:blue;font-size:20px" >Sửa thông tin</b><br><br> </td>			
		</tr>
		<tr>
			<td width="100px" >Ký danh : </td>
			<td width="890px" >
				<input style="width:400px;margin-top:3px;margin-bottom:3px;" name="ky_danh" value="<?php echo $ky_danh; ?>" >
			</td>
		</tr>
		<tr>
			<td valign="top" >Mật khẩu : </td>
			<td >
				<input type="password" style="width:400px;margin-top:3px;margin-bottom:3px;" name="mat_khau" value="khong_doi" ><br><br>
				<br><br>
			</td>
		</tr>
		
		<tr>
			<td>&nbsp;</td>
			<td>
				<br>
				<input type="submit" name="bieu_mau_sua_thong_tin_quan_tri" value="Sửa"">
			</td>
		</tr>
	</table>
</form>