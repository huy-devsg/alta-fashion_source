<?php 
	if(!isset($bien_bao_mat)){exit();}
?>
<?php 
	$so_dong_tren_mot_trang=20;
	if(!isset($_GET['trang'])){$_GET['trang']=1;}
	$tv="select count(*) from hoa_don";
	$tv_1=mysqli_query($conn,$tv);			
	$tv_2=mysqli_fetch_array($tv_1);
	$so_trang=ceil($tv_2[0]/$so_dong_tren_mot_trang);
	$vtbd=($_GET['trang']-1)*$so_dong_tren_mot_trang;
	$tv="select * from hoa_don order by id desc limit $vtbd,$so_dong_tren_mot_trang";
	$tv_1=	mysqli_query($conn,$tv);			
?>
<table width="990px" class="tb_a1" >
	<tr class="tr_title" >
		<td width="370px" ><b>Tên</b></td>
		<td width="300px" ><b>Email</b></td>
		<td width="120px" ><b>Điện thoại</b></td>
		<td width="120px" ><b>Trạng thái</b></td>
		<td align="center" width="100px" ><b>Xem</b></td>
		<td align="center" width="100px" ><b>Xóa</b></td>
	</tr>
	<?php 
		while($tv_2=mysqli_fetch_array($tv_1))
		{
			$id=$tv_2['id'];
			$ten=$tv_2['ten_nguoi_mua'];
			$email=$tv_2['email'];
			$dien_thoai=$tv_2['dien_thoai'];
			$tinh_trang=$tv_2['tinh_trang'];
			$link_xem="profile/quan-tri/xem-hoa-don&id=".$id;
			$link_xoa="profile/quan-tri/xoa-hoa-don&id=".$id;
			?>
				<tr class="a_1" >
					<td>
						<a href="<?php echo $link_xem; ?>" class="lk_a1" ><?php echo $ten; ?></a>
					</td>
					<td>
						<?php echo $email; ?>
					</td>
					<td>
						<?php echo $dien_thoai; ?>
					</td>
					<td>
						<?php
						echo $tinh_trang;
						?>
						

					</td>
					<td align="center" >
						<a href="<?php echo $link_xem; ?>" class="lk_a1" >
							<span class="glyphicon glyphicon-eye-open"></span>
					</a>
					</td>
					<td align="center" >
						<a href="<?php echo $link_xoa; ?>" class="lk_a1" >
							<span class="glyphicon glyphicon-remove"></span>
					</a>
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