<?php
if(isset($_SESSION['xac_dinh_dang_nhap']))
{
    $id_user=$_SESSION['id_user'];
    $tv="SELECT * FROM tai_khoan where id='$id_user'";
    $tv_1=mysqli_query($conn,$tv);
    $tv_2=mysqli_fetch_array($tv_1);
    $ten=$tv_2['ho_ten'];
    $email=$tv_2['email'];
    $phone=$tv_2['phone'];
    $dia_chi=$tv_2['dia_chi'];
}
else
{
    $ten="";
    $email="";
    $phone="";
    $dia_chi="";
}
    
?>
<form method="post" action="">
    <input type="hidden" name="thong_tin_khach_hang" value="co">
    <table style="width:80%">
        <tr class="tr_title">
            <td colspan="2" height="30px"><b>Thông tin mua hàng</b></td>
        </tr>
        <tr>
            <td height="40px">Lưu ý :</td>
            <td>Những trường có (<span style="color:red;font-weight:bold;">*</span>) bắt buộc điền vào</td>
        </tr>
        <tr>
            <td width="180px">Tên người mua <span style="color:red;">(*)</span></td>
            <td><input type="text" style="width:400px" name="ten_nguoi_mua" value="<?php echo $ten ?>"></td>
        </tr>
        <tr>
            <td>Email </td>
            <td><input type="text" style="width:400px" name="email" value="<?php echo $email ?>"></td>
        </tr>
        <tr>
            <td>Địa chỉ <span style="color:red;">(*)</span></td>
            <td><textarea style="width:400px;" name="dia_chi" ><?php echo $dia_chi ?></textarea></td>
        </tr>
        <tr>
            <td>Điện thoại <span style="color:red;">(*)</span></td>
            <td><input type="text" style="width:400px" name="dien_thoai"value="<?php echo $phone ?>"></td>
        </tr>
        <tr>
            <td>Nội dung </td>
            <td><textarea style="width:400px;height:100px" name="noi_dung"></textarea></td>
        </tr>
		<tr>
            <td>&nbsp;</td>
        </tr>
        <tr>
            <td colspan=2 align="center"><input type="submit" value="Thanh toán"></td>
        </tr>
    </table>
</form>
