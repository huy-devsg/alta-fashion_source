<?php 
	if(!isset($bien_bao_mat)){exit();}
	$id=$_GET['id'];
	$lien_ket=trim($_POST['lien_ket']);
	$ten_file_anh_tai_len=$_FILES['anh']['name'];
	$tieu_de=$_POST['tieu_de'];
	$noi_dung=$_POST['noi_dung'];
	$tac_gia=$_SESSION['ky_danh'];
	$time=time();
	if($ten_file_anh_tai_len!="")
	{
		$ten_file_anh=$ten_file_anh_tai_len;
	}
	else 
	{
		$ten_file_anh=$_POST['ten_anh'];
	}
	$kiem_tra_anh="hop_le";	
	if($ten_file_anh_tai_len!="")
	{
		$tv_k="select count(*) from slideshow where hinh='$ten_file_anh' ";
		$tv_k_1=mysqli_query($conn,$tv_k);
		$tv_k_2=mysqli_fetch_array($tv_k_1);
		if($tv_k_2[0]!=0)
		{
			$kiem_tra_anh="khong_hop_le";	
		}
	}
	if($kiem_tra_anh=="hop_le")
	{

		if($ten_file_anh_tai_len!="")
		{				
			$duong_dan_anh="../hinh_anh/slideshow/".$ten_file_anh_tai_len;
			move_uploaded_file($_FILES['hinh_anh']['tmp_name'],$duong_dan_anh);
			$duong_dan_anh_cu="../hinh_anh/slideshow/".$_POST['ten_anh'];
			unlink($duong_dan_anh_cu);
		}		

		$tv="
			UPDATE bai_viet SET
			tieu_de='$tieu_de',anh='$ten_file_anh',noi_dung='$noi_dung',tac_gia='$tac_gia',lien_ket='$lien_ket',time='$time'
			WHERE id ='$id'
			";
		mysqli_query($conn,$tv);				

	}
	else 
	{
		thong_bao("Hình ảnh bị trùng tên");
	}
?>