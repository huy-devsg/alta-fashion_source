<?php 
	if(!isset($bien_bao_mat)){exit();}
	if(isset($_POST['dang_nhap_quan_tri']))
	{
		$ky_danh=$_POST['ky_danh'];
		$ky_danh=str_replace("'","",$ky_danh);
		$ky_danh=str_replace('"',"",$ky_danh);
		$mat_khau=md5($_POST['mat_khau']);
		$mat_khau=md5($mat_khau);
		$tv="select count(*) from tai_khoan where ky_danh='$ky_danh' and mat_khau='$mat_khau' ";
		$tv_1=mysqli_query($conn,$tv);
		$tv_2=mysqli_fetch_array($tv_1);
		if($tv_2[0]==1)
		{
			$_SESSION['ky_danh']=$ky_danh;
			$_SESSION['mat_khau']=$mat_khau;
			thong_bao("Đăng nhập thành công");	

		}
		else 
		{
			thong_bao("Thông tin nhập vào không đúng");
		}
	}

	if(isset($_POST['dang_ky']))
	{
		$ky_danh=$_POST['ky_danh'];
		$ky_danh=str_replace("'","",$ky_danh);
		$ky_danh=str_replace('"',"",$ky_danh);
		$ho_ten=$_POST['ho_ten'];
		$email=$_POST['email'];
		$phone=$_POST['phone'];
		$mat_khau=md5($_POST['mat_khau']);
		$mat_khau=md5($mat_khau);
		$tv="select count(*) from tai_khoan where ky_danh='$ky_danh' or email='$email'";
		$tv_1=mysqli_query($conn,$tv);
		$tv_2=mysqli_fetch_array($tv_1);
		if($tv_2[0]>0)
		{
			thong_bao("Tài khoản đã tồn tại");
		}
		else 
		{
			echo 'aaaaaaâ';
			$tv="
			INSERT INTO tai_khoan (id,avatar,ho_ten,email,phone,ky_danh,mat_khau,dia_chi,quyen)
			VALUES (NULL,'','$ho_ten','$email','$phone','$ky_danh','$mat_khau','','')";
			mysqli_query($conn,$tv);	
			$_SESSION['ky_danh']=$ky_danh;
			$_SESSION['mat_khau']=$mat_khau;
		}

	}
	if(isset($_SESSION['ky_danh']))
	{
		$ky_danh=$_SESSION['ky_danh'];
		$mat_khau=$_SESSION['mat_khau'];
		$tv="select * from tai_khoan where ky_danh='$ky_danh' and mat_khau='$mat_khau' ";
		$tv_1=mysqli_query($conn,$tv);
		$tv_2=mysqli_fetch_array($tv_1);
		if($tv_2!=false)
		{	
			$_SESSION['quyen']=$tv_2['quyen'];
			$_SESSION['id_user']=$tv_2['id'];
			$_SESSION['xac_dinh_dang_nhap']="co";
		}
	}
?>