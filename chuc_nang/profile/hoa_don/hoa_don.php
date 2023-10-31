<?php 
	if(!isset($bien_bao_mat)){exit();}
?>
<?php 
	$id_user=$_SESSION['id_user'];
	$so_dong_tren_mot_trang=20;
	if(!isset($_GET['trang'])){$_GET['trang']=1;}
	$tv="select count(*) from hoa_don where id_user='$id_user'";
	$tv_1=mysqli_query($conn,$tv);			
	$tv_2=mysqli_fetch_array($tv_1);
	if ($tv_2[0] == 0) {
		echo "Không có đơn hàng";
	} else {
		$so_trang=ceil($tv_2[0]/$so_dong_tren_mot_trang);
		$vtbd=($_GET['trang']-1)*$so_dong_tren_mot_trang;
		$tv="select * from hoa_don where id_user='$id_user' order by id desc limit $vtbd,$so_dong_tren_mot_trang";
		$tv_1=mysqli_query($conn,$tv);		
?>
<table width="990px" class="tb_a1" >
	<tr class="tr_title" >
		<td><b>Tên</b></td>
		<td><b>Email</b></td>
		<td><b>Điện thoại</b></td>
		<td><b>Địa chỉ</b></td>
		<td><b>Tình trạng</b></td>
	</tr>
	<?php 
		while($tv_2=mysqli_fetch_array($tv_1))
		{
			$id=$tv_2['id'];
			$ten=$tv_2['ten_nguoi_mua'];
			$email=$tv_2['email'];
			$dien_thoai=$tv_2['dien_thoai'];
			$dia_chi=$tv_2['dia_chi'];
			$tinh_trang=$tv_2['tinh_trang'];
			$link_xem="profile/quan-tri/xem-hoa-don&id=".$id;
			?>
				<tr class="a_1" >
					<td>
						<a href="<?php echo $link_xem; ?>"><?php echo $ten; ?></a>
					</td>
					<td>
						<?php echo $email; ?>
					</td>
					<td>
						<?php echo $dien_thoai; ?>
					</td>
					<td>
						<?php echo $dia_chi; ?>
					</td>
					<td>
						<?php echo $tinh_trang; ?>
					</td>
				</tr>
			<?php 
		}
	?>
	<tr>
		<td colspan="5" style="text-align:center" >
			<br>
			<?php 
				for($i=1;$i<=$so_trang;$i++)
				{
					$link_phan_trang="?thamso=profile&dieu_huong=hoa_don&trang=".$i;
					echo "<a href='$link_phan_trang' class='phan_trang' >";
						echo 'Trang '.$i;
					echo "</a> ";
				}
			?>
			<br><br>
		</td>
	</tr>
</table>
<?php } ?>