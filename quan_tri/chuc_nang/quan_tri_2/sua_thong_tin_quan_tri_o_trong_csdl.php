<?php 
	if(!isset($bien_bao_mat)){exit();}
?>
<?php 
	$ky_danh=$_SESSION['ky_danh'];
	$tv="select * from tai_khoan where ky_danh='$ky_danh'";
	$tv_1=mysqli_query($conn,$tv);
	$tv_2=mysqli_fetch_array($tv_1);
	$id=$tv_2['id'];
	$ky_danh=$_POST['ky_danh'];
	$mat_khau=$tv_2['mat_khau'];

	$mat_khau_tu_form=trim($_POST['mat_khau']);
	if($mat_khau_tu_form!="khong_doi")
	{
		$mat_khau=md5($mat_khau_tu_form);
		$mat_khau=md5($mat_khau);
	}

	$tv="
	UPDATE tai_khoan SET 
	ky_danh = '$ky_danh',
	mat_khau = '$mat_khau' 
	WHERE id='$id';
	";
	mysqli_query($conn,$tv);
	
	$_SESSION['ky_danh']=$ky_danh;
	$_SESSION['mat_khau']=$mat_khau;	
?>