<?php 
	if(!isset($bien_bao_mat)){exit();}
?>
<?php 
	$id=$_SESSION['id_user'];
	$tv="select * from tai_khoan where id='$id'";
	$tv_1=mysqli_query($conn,$tv);
	$tv_2=mysqli_fetch_array($tv_1);
	$mat_khau=md5($_POST['mat_khau']);
	$mat_khau=md5($mat_khau);
	$new_password=$_POST['new_password'];	
	$comfirm_password=$_POST['comfirm_password'];
	if($mat_khau!="")
	{
			if($mat_khau==$tv_2['mat_khau'])
			{
				if($new_password==$comfirm_password)
				{
					$new_password=md5($new_password);
					$new_password=md5($new_password);
					$tv="
						UPDATE tai_khoan SET mat_khau = '$new_password' WHERE id='$id_user';";
						mysqli_query($conn,$tv);
						$_SESSION['mat_khau']=$mat_khau;
						thong_bao('Cập nhật mật khẩu thành công');
				}
				else
				{
					thong_bao('Mật khẩu mới và xác nhận mật khẩu không trùng khớp');
				}
			}
			else
			{
				thong_bao('Mật khẩu hiện tại không chính xác');
			}
	}
	else
	{
		thong_bao('Bạn chưa nhập mật khẩu hiện tại');
	}
?>