<?php 
	if(!isset($bien_bao_mat)){exit();}
?>
<?php
	$ten_file_anh=$_FILES['hinh_anh']['name'];
	$tieu_de=$_POST['tieu_de'];
	$noi_dung=$_POST['noi_dung'];
	$tac_gia=$_SESSION['ky_danh'];
	$time=time();
	if($ten_file_anh!="")
	{
		$tv_k="select count(*) from bai_viet where anh='$ten_file_anh' ";
		$tv_k_1=mysqli_query($conn,$tv_k);
		$tv_k_2=mysqli_fetch_array($tv_k_1);
		if($tv_k_2[0]==0)
		{
			$tv_k="
			INSERT INTO bai_viet (
			id ,
			tieu_de,
			anh,
			noi_dung,
			tac_gia,
			time
			)
			VALUES (
			NULL ,
			'$tieu_de',
			'$ten_file_anh',
			'$noi_dung',
			'$tac_gia',
			'$time'
			);";
			mysqli_query($conn,$tv_k);
			$duong_dan_anh="hinh_anh/bai_viet/".$ten_file_anh;
			move_uploaded_file($_FILES['hinh_anh']['tmp_name'],$duong_dan_anh);
		}
		else 
		{
			thong_bao("Hình ảnh bị trùng tên");
		}
	}
	else 
	{
		thong_bao("Chưa chọn ảnh");
	}

?>