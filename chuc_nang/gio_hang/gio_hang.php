<?php 
	if(isset($_GET['id']) and $_SESSION['trang_chi_tiet_gio_hang']=="co")
	{
		$_SESSION['trang_chi_tiet_gio_hang']="huy_bo";
		if(isset($_SESSION['id_them_vao_gio']))
		{
			$so=count($_SESSION['id_them_vao_gio']);
			$trung_lap="khong";
			for($i=0;$i<count($_SESSION['id_them_vao_gio']);$i++)
			{
				if($_SESSION['id_them_vao_gio'][$i]==$_GET['id'])
				{
					$trung_lap="co";
					$vi_tri_trung_lap=$i;
					break;
				}
			}
			if($trung_lap=="khong")
			{
				$_SESSION['id_them_vao_gio'][$so]=$_GET['id'];
				$_SESSION['sl_them_vao_gio'][$so]=$_GET['so_luong'];
			}
			if($trung_lap=="co")
			{
				$_SESSION['sl_them_vao_gio'][$vi_tri_trung_lap]=$_SESSION['sl_them_vao_gio'][$vi_tri_trung_lap]+$_GET['so_luong'];
			}
		}
		else
		{
			$_SESSION['id_them_vao_gio'][0]=$_GET['id'];
			$_SESSION['sl_them_vao_gio'][0]=$_GET['so_luong'];
		}
	}

	$gio_hang="khong";
	if(isset($_SESSION['id_them_vao_gio']))
	{
		$so_luong=0;
		for($i=0;$i<count($_SESSION['id_them_vao_gio']);$i++)
		{
			$so_luong=$so_luong+$_SESSION['sl_them_vao_gio'][$i];
		}
		if($so_luong!=0)
		{
			$gio_hang="co";
		}
	}
?>
<div class="product_list">
	<br>
	<br>
	<?php if($gio_hang=="khong") : ?>
		Không có sản phẩm trong giỏ hàng
	<?php else : ?>
		<form action="" method="post">
			<input type="hidden" name="cap_nhat_gio_hang" value="co">
			<table border=1 width=100% class="product_table">
				<tr class="tr_title">
					<td width="100px">&nbsp;</td>
					<td width="200px"><b>Tên</b></td>
					<td width="150px"><b>Số lượng</b></td>
					<td width="150px"><b>Đơn giá</b></td>
					<td width="170px"><b>Thành tiền</b></td>
				</tr>
				<?php
					$tong_cong=0;
					for($i=0;$i<count($_SESSION['id_them_vao_gio']);$i++)
					{
						$tv="select * from san_pham where id='".$_SESSION['id_them_vao_gio'][$i]."'";
						$tv_1= mysqli_query($conn,$tv);
						while($tv_2=mysqli_fetch_array($tv_1))
						{
							$thanh_tien=$_SESSION['sl_them_vao_gio'][$i]*$tv_2['gia'];
							$tong_cong=$tong_cong+$thanh_tien;$name_id="id_".$i;
							$name_sl="sl_".$i;
							if($_SESSION['sl_them_vao_gio'][$i]!=0)
							{
								echo '<input type="hidden" name="'.$name_id.'" value="'.$_SESSION['id_them_vao_gio'][$i].'" >';
				?>
				<tr>
					<td><img src="hinh_anh/san_pham/<?php echo $tv_2['hinh_anh'] ?>" width="100px"></td>
					<td><?php echo $tv_2['ten'] ?></td>
					<td>
						<input type="text" name="<?php echo $name_sl ?>" value="<?php echo $_SESSION['sl_them_vao_gio'][$i] ?>" size=5>
					</td>
					<td><?php echo $tv_2['gia'] ?></td>
					<td><?php echo number_format($thanh_tien) ?></td>
				</tr>
				<?php
				}
						}
					}
				?>
				<tr>
					<td colspan=4 style="text-align:right;"><b>Tổng cộng:</b></td>
					<td><b><?php echo number_format($tong_cong) ?></b></td>
				</tr>
				<tr>
					<td colspan=4>
						<input type="submit" value="Cập nhật giỏ hàng">
					</td>
				<td style="text-align:center;">
				<?php
	if(isset($_GET['thanh-toan']))
	{
		if($_GET['thanh-toan']=='co')
		{
			echo '';
		}
	}
		else
		{
			if(isset($_SESSION['xac_dinh_dang_nhap']))
			{
				echo '<input type="button" value="Thanh toán" onclick="window.location.href=\'index.php?thamso=profile&quan-tri=gio-hang&thanh-toan=co\'">';
			}
			else
			{
				echo '<input type="button" value="Thanh toán" onclick="window.location.href=\'index.php?thamso=gio-hang&thanh-toan=co\'">';
			}
		}

	?>

			</td>
				</tr>
			<br>
		</form>
		</table>

		<br>
<br>
	<?php
	if(isset($_GET['thanh-toan']))
	{
		if($_GET['thanh-toan']=='co')
		{
			include('bieu_mau_mua_hang.php');

		}
	}
endif; ?>
</div>
<style>
.product_table img {
  max-width: 100%;
  height: auto;
  display: block;
  margin: 0 auto;
}
.glyphicon-credit-card
{
	background: #fe8c00;
	background: -webkit-linear-gradient(to right, #f83600, #fe8c00);
	background: linear-gradient(to right, #f83600, #fe8c00);
	-webkit-background-clip: text;
	-webkit-text-fill-color: transparent;
}
</style>
