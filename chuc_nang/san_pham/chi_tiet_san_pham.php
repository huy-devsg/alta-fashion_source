<h2>CHI TIẾT SẢN PHẨM</h2><br>
<?php
	$_SESSION['trang_chi_tiet_gio_hang']="co";
	$id=makeID();
	$tv="select * from san_pham where id='$id'";
	$tv_1=mysqli_query($conn,$tv);
	$tv_2=mysqli_fetch_array($tv_1);
	$link_anh="hinh_anh/san_pham/".$tv_2['hinh_anh'];
?>
<table>
	<tr>
		<td width='250px' align='center' >
			<img src='<?php echo $link_anh; ?>' width='150px' >
		</td>
		<td valign='top' >
			<a href='#'>
				<?php echo $tv_2['ten']; ?>
			</a>
			<br>
			<br>
			<?php
				$gia=$tv_2['gia'];
				$gia=number_format($gia,0,",",".");
				echo $gia;
			?>
			<br>
			<br>
			<form method="post">
			<input type='text' name='so_luong' id='so_luong' value='1' style='width:50px' > 
				<?php
					if(isset($_SESSION['xac_dinh_dang_nhap']))
					{
						echo '<input type="button" onclick="location.href=\'?thamso=profile&quan-tri=gio-hang&id='.$id.'&so_luong=\' + document.getElementById(\'so_luong\').value;" value="Thêm vào giỏ"/>';
					}
					else
					{
						echo '<input type="button" onclick="location.href=\'?thamso=gio-hang&id='.$id.'&so_luong=\' + document.getElementById(\'so_luong\').value;" value="Thêm vào giỏ"/>';
					}
					?>
				

			</form> 
		</td>
	</tr>
	<tr>
		<td colspan='2' >
			<?php
				if($tv_2['noi_dung']=="")
				{
					echo 'Chưa có thông tin sản phẩm';
				}
				else
				{
					echo $tv_2['noi_dung'];
				}
			?>
		</td>
	</tr>
</table>
