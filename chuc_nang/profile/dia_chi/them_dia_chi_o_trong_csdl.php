<?php 
	if(!isset($bien_bao_mat)){exit();}
?>
<?php 
    $id_user=$_SESSION['id_user'];
	$tinh=$_POST['tinh'];
    $huyen=$_POST['huyen'];
	$xa=$_POST['xa'];
	$duong=$_POST['duong'];
    $so_nha=$_POST['so_nha'];
    if(isset($_POST['mac_dinh']))
    {
        $mac_dinh=$_POST['mac_dinh'];
    }
    else
    {
        $mac_dinh="khong";
    }
    if($tinh!=""||$huyen!=""||$xa!=""||$duong!=""||$so_nha!="")
    {
        if($mac_dinh=="co")
        {
            $sql="UPDATE dia_chi SET mac_dinh = 'khong' WHERE mac_dinh='co' and id_user ='$id_user'";
            mysqli_query($conn,$sql);
        }
		$tv="
		INSERT INTO dia_chi (
                                id,
                                tinh,
                                huyen,
                                xa,
                                duong,
                                so_nha,
                                id_user,
                                mac_dinh
                            )
                            VALUES (
                            NULL ,
                            '$tinh',
                            '$huyen',
                            '$xa',
                            '$duong',
                            '$so_nha',
                            '$id_user',
                            '$mac_dinh'
                            );";
		mysqli_query($conn,$tv);
	}
	else 
	{
		thong_bao("Không được để trống các ô địa chỉ");
	}
?>