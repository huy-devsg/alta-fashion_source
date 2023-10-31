<?php 
	if(!isset($bien_bao_mat)){exit();}
?>
<?php 
	$tv="select * from bai_viet order by id ";
	$tv_1=mysqli_query($conn,$tv);
?>

<table width="990px" class="tb_a1" >
	<tr class="tr_title" >
		<td class="td_content" ><b>Hình ảnh</b></td>
		<td class="td_content" ><b>Tiêu đề</b></td>
		<td class="td_content" ><b>Nội dung</b></td>
		<td class="td_content" width="140px" ><b>Sửa</b></td>
		<td class="td_content" width="140px" ><b>Xóa</b></td>
	</tr>
	<?php 
		while($tv_2=mysqli_fetch_array($tv_1))
		{
			$id=$tv_2['id'];
			$link_hinh="hinh_anh/bai_viet/".$tv_2['anh'];
			$link_sua="profile/quan-tri/sua-bai-viet&id=".$id;
			$link_xoa="profile/quan-tri/xoa-bai-viet&id=".$id;
			$tieu_de=$tv_2['tieu_de'];
			$noi_dung = $tv_2['noi_dung'];
			$noi_dung = mb_substr($noi_dung, 0, 270) . "...";
			?>
				<tr class="a_1" >
					<td class="td_content" >
						<a href="<?php echo $link_sua; ?>" >
							<img src="<?php echo $link_hinh; ?>" style="width:200px;max-height:200px;margin-top:10px;margin-bottom:10px;" border="0" >
						</a>
					</td>
					<td class="td_content" style="width:200px" >
						<a href="<?php echo $link_sua; ?>" >
							<?php echo $tieu_de ?>
						</a>
					</td>
					<td class="td_content" width="600px" >
						<?php echo $noi_dung ?>
					</td>
					<td class="td_content" >
						<a href="<?php echo $link_sua; ?>" class="lk_a1" >
							<span class="glyphicon glyphicon-edit"></span>
					</a>
					</td>
					<td class="td_content" >
						<a href="<?php echo $link_xoa; ?>" class="lk_a1" >
							<span class="glyphicon glyphicon-remove"></span>
					</a>
					</td>
				</tr>
			<?php 
		}
	?>

</table>