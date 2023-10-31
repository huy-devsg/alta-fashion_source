<?php 
	if(!isset($bien_bao_mat)){exit();}
?>
<?php 
	$ky_danh=$_SESSION['ky_danh'];
	$tv="select * from tai_khoan where ky_danh='$ky_danh'";
	$tv_1=mysqli_query($conn,$tv);
	$tv_2=mysqli_fetch_array($tv_1);
	$ho_ten=$tv_2['ho_ten'];	
	$email=$tv_2['email'];	
	$phone=$tv_2['phone'];	
	$ky_danh=$tv_2['ky_danh'];	
	$mat_khau=$tv_2['mat_khau'];
	$tv2="select * from dia_chi where id_user='$id_user' and mac_dinh='co'";
	$tv2_1=mysqli_query($conn,$tv2);
	$tv2_2=mysqli_fetch_array($tv2_1);
?>
<style>

</style>
<form action="" method="post" >
	<table width="990px" >
		<tr>
			<td width="100px" >Họ và tên : </td>
			<td width="890px" >
				<input type="text" name="ho_ten" value="<?php echo $ho_ten; ?>" >
			</td>
		</tr>
		<tr>
			<td width="100px" >Tên tài khoản : </td>
			<td width="890px" >
				<input type="text" name="ky_danh" value="<?php echo $ky_danh; ?>" readonly>
			</td>
		</tr>
		<tr>
			<td width="100px" >Email : </td>
			<td width="890px" >
				<input type="text" name="email" value="<?php echo $email; ?>" >
			</td>
		</tr>
		<tr>
			<td width="100px" >Số điện thoại : </td>
			<td width="890px" >
				<input type="text" name="phone" value="<?php echo $phone; ?>" >
			</td>
		</tr>
		<tr>
			<td width="100px" >Địa chỉ : </td>
			<td width="890px" >
				<input type="text" name="dia_chi" value="<?php echo $tv2_2['so_nha'].' '.$tv2_2['duong'].', '.$tv2_2['xa'].', '.$tv2_2['huyen'].', '.$tv2_2['tinh'].' ' ?>" >
			</td>
		<tr>
			<td>
				<a href="profile/them-avatar.html" class="nav_admin" >Thay đổi avatar</a>
			</td>
			<td>&nbsp;</td>
		</tr>
		<tr>
			<td>&nbsp;</td>
			<td>
				<input type="submit" name="bieu_mau_sua_thong_tin" value="Cập nhật">
			</td>
		</tr>
	</table>
</form>