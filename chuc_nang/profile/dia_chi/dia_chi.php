<?php
    if(!isset($bien_bao_mat)){exit();}
?>
<?php
    $id_user = $_SESSION['id_user'];
    $tv = "SELECT * FROM dia_chi WHERE id_user='$id_user' ORDER BY id";
    $tv_1 = mysqli_query($conn, $tv);
    $row_count = mysqli_num_rows($tv_1);
?>

<?php if($row_count > 0): ?>
    <form action="" method="post">
        <table>
            <tr class="tr_title">
                <td style="width:70%"> 
                    <b>Địa chỉ</b>
                </td>
                <td style="text-align:center;">
                    <b>Mặc định</b>
                </td>
                <td style="text-align:center;">
                    <b>Xóa</b>
                </td>
            </tr>
            <?php while($tv_2=mysqli_fetch_array($tv_1)):
    $tinh=$tv_2['tinh'];
    $huyen=$tv_2['huyen'];
    $xa=$tv_2['xa'];
    $duong=$tv_2['duong'];
    $so_nha=$tv_2['so_nha'];
    $mac_dinh=$tv_2['mac_dinh'];
    $id=$tv_2['id'];
    $checked = ($mac_dinh == "co") ? "checked" : "";
    $link_xoa="profile/quan-tri/xoa-dia-chi&id=".$id;
?>
<tr>
    <td width="70%"><?php echo $so_nha.' '.$duong.', '.$xa.', '.$huyen.', '.$tinh.' ' ?>
        <?php
            if($mac_dinh=="co")
            {
                echo'<span class="nav_admin">(Mặc định)</span>';                                
            }
        ?>
    </td>
    <td style="text-align:center;">
    <input type="radio" name="dia_chi_id" value="<?php echo $id; ?>" <?php if($mac_dinh == "co"){echo 'checked';}?>>
    </td>
    <td class="td_content">
    <input type="hidden" name="id " value="<?php echo $id; ?>">
						<a href="<?php echo $link_xoa; ?>" class="lk_a1" >
							<span class="glyphicon glyphicon-remove"></span>
					</a>
					</td>
</tr>
<?php endwhile; ?>
            <tr>
                <td colspan=3>
                <a class="nav_admin" href='profile/them-dia-chi.html'>Thêm địa chỉ mới</a>
                </td>
            </tr>
            <tr>
                <td colspan=3 style="text-align:center">
                    <input type="submit" name="dat_mac_dinh_dia_chi" value="Đặt làm mặc định">
                </td>
            </tr>
            <tr>
            </tr>
        </table>
    </form>
    <?php
   if(isset($_POST['dat_mac_dinh_dia_chi'])) { 
    if(isset($_POST['dia_chi_id'])) {
        $dia_chi_id = $_POST['dia_chi_id'];
        $sql = "UPDATE dia_chi SET mac_dinh = 'co' WHERE id = '$dia_chi_id' and id_user='$id_user'";
        $sql2="UPDATE dia_chi SET mac_dinh = 'khong' WHERE id != '$dia_chi_id' and id_user='$id_user'";
        mysqli_query($conn,$sql);
        mysqli_query($conn, $sql2);
        thong_bao('Cập nhật địa chỉ mặc định thành công');
    }
    else {
        echo 'Bạn chưa chọn địa chỉ mặc định';
    }
}

?>
<?php else: ?>
    <p>Không có địa chỉ</p>
    <button class="add" onclick="location.href='profile/them-dia-chi'" >Thêm địa chỉ</button>
<?php endif; ?>
