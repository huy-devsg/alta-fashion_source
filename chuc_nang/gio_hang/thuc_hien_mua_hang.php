<?php 
	if(isset($_SESSION['id_them_vao_gio']))
	{
		$ten_nguoi_mua=trim($_POST['ten_nguoi_mua']);
		if(isset($_SESSION['id_user']))
		{
			$id_user=$_SESSION['id_user'];
		}
		else
		{
			$id_user="";
		}
		$email=trim($_POST['email']);
		$dien_thoai=trim($_POST['dien_thoai']);
		$dia_chi=trim(nl2br($_POST['dia_chi']));
		$noi_dung=nl2br($_POST['noi_dung']);
		if($ten_nguoi_mua!="" and $dien_thoai!="" and $dia_chi!="")
		{
			$hang_duoc_mua="";
			for($i=0;$i<count($_SESSION['id_them_vao_gio']);$i++)
			{
				$hang_duoc_mua=$hang_duoc_mua.$_SESSION['id_them_vao_gio'][$i]."[|||]".$_SESSION['sl_them_vao_gio'][$i]."[|||||]";
			}		
			$tv="INSERT INTO hoa_don (
            id ,
            ten_nguoi_mua ,
            email ,
            dia_chi ,
            dien_thoai ,
            noi_dung ,
            hang_duoc_mua,
			id_user,
			tinh_trang
            )
            VALUES (
            NULL ,
            '$ten_nguoi_mua',
            '$email',
            '$dia_chi',
            '$dien_thoai',
            '$noi_dung',
            '$hang_duoc_mua',
			'$id_user',
			'Chờ xử lý'
            );";
			mysqli_query($conn,$tv);
			unset($_SESSION['id_them_vao_gio']);
			unset($_SESSION['sl_them_vao_gio']);
			thong_bao("Alta Clothing cảm ơn bạn đã mua hàng");
			trang_truoc();
		}
		else 
		{
			thong_bao("Không được bỏ trống nội dung có (*)");
			trang_truoc();
			exit();
		}
	}
?>