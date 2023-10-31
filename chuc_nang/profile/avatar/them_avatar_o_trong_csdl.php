<?php 
	if(!isset($bien_bao_mat)){exit();}
?>

<?php 
    $id_user = $_SESSION['id_user'];
    if(isset($_FILES['avatar']))
    {
        $avatar = $_FILES['avatar'];
        $avatar_name = $avatar['name'];
        $tv = "UPDATE tai_khoan SET avatar = '$avatar_name' WHERE id = '$id_user'";
        mysqli_query($conn, $tv);
        $duong_dan_anh = "hinh_anh/profile/" . $avatar_name;
		if (move_uploaded_file($avatar['tmp_name'], $duong_dan_anh)) {
			thong_bao("Đã cập nhật ảnh thành công");
		} else {
			thong_bao("Lỗi khi tải ảnh lên. Vui lòng thử lại");
		}
    }
	else 
	{
		thong_bao("Bạn chưa chọn avatar");
	}
?>
