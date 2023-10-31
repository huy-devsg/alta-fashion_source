<?php
    if(!isset($bien_bao_mat)){exit();}
?>
<?php
    $id_user = $_SESSION['id_user'];
    $tv = "SELECT avatar FROM tai_khoan WHERE id='$id_user'";
    $tv_1 = mysqli_query($conn, $tv);
    $tv_2 = mysqli_fetch_array($tv_1);
?>
<form action="" method="post" enctype="multipart/form-data" >
	<table width="990px" >
		<tr>
			<td style="text-align:center;">
				<?php 
					if($tv_2['avatar']!='')
					{
						echo '<img src="hinh_anh/profile/'.$tv_2['avatar'].'" alt="" width="100px">';
					}
					else
					{
						echo '<img src="hinh_anh/profile/no_avatar.png" alt="" width="100px">';
					}
				?>
			</td>
		</tr>
		<tr>
			<td style="text-align:center;">
				<input type="file" name="avatar" value="Upload avatar mới" >
			</td>
		</tr>
		<tr>
			<td style="text-align:center;">
				<br>
				<input type="submit" name="bieu_mau_them_avatar" value="Cập nhật avatar">
			</td>
		</tr>
	</table>
</form>