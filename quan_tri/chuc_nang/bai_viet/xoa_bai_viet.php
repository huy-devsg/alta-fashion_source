<?php 
	if(!isset($bien_bao_mat)){exit();}
?>
<?php 
	$id=$_GET['id'];	
	$tv="select * from bai_viet where id='$id' ";
	$tv_1=mysqli_query($conn,$tv);
	$tv_2=mysqli_fetch_array($tv_1);

	$link_hinh="hinh_anh/bai_viet/".$tv_2['hinh'];
	if(is_file($link_hinh))	
	{
		unlink($link_hinh);
	}
	
	$tv="DELETE FROM bai_viet WHERE id = $id ";
	$tv_1=mysqli_query($conn,$tv);
?>