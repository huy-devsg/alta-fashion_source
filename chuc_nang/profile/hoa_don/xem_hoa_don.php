<?php 
	if(!isset($bien_bao_mat)){exit();}
?>
<?php 
	$id=$_GET['id'];
	$tv="select * from hoa_don where id='$id' ";
	$tv_1=	mysqli_query($conn,$tv);			
	$tv_2=mysqli_fetch_array($tv_1);
	$ten_nguoi_mua=$tv_2['ten_nguoi_mua'];
	$email=$tv_2['email'];
	$dien_thoai=$tv_2['dien_thoai'];
	$dia_chi=$tv_2['dia_chi'];
	$noi_dung=$tv_2['noi_dung'];
    $tinh_trang=$tv_2['tinh_trang'];
	$hang_duoc_mua=$tv_2['hang_duoc_mua'];
?>

<table width="990px" >
	<tr>
		<td width="250px" ><b style="color:blue;font-size:20px" >Sản phẩm </b><br><br> </td>	
		<td width="740px" align="right" >
		</td>		
	</tr>
	<tr>
		<td align="left" colspan="2" >
			<table width="880px" >
				<tr style="font-weight:bold">
					<td width="100px">STT</td>
					<td width="300px" >Tên</td>
					<td width="180px">Giá bán</td>
					<td width="100px" >Số lượng</td>
					<td width="200px">Tổng cộng</td>
				</tr>
				<?php 
					$m=explode("[|||||]",$hang_duoc_mua);	
					$tong_lon=0;
					for($i=0;$i<count($m);$i++)
					{
						if(isset($m[$i]))
						{
							if($m[$i]!="")
							{
								$stt=$i+1;
								$m_2=explode("[|||]",$m[$i]);
								$id_sp=$m_2[0];
								$sl_sp=$m_2[1];
								$tv_sp="select id,ten,gia from san_pham where id='$id_sp' ";
								$tv_sp_1=mysqli_query($conn,$tv_sp);			
								$tv_sp_2=mysqli_fetch_array($tv_sp_1);
								$ten=$tv_sp_2['ten'];
								$gia=$tv_sp_2['gia'];
								$gia_duoc_dinh_dang=number_format($gia,0,",",".");
								$tong=$gia*$sl_sp;
								$tong_duoc_dinh_dang=number_format($tong,0,",",".");
								$tong_lon=$tong_lon+$tong;
								if($sl_sp!=0)
								{
								?>
									<tr>
										<td><?php echo $stt; ?></td>
										<td><?php echo $ten; ?></td>
										<td><?php echo $gia_duoc_dinh_dang; ?></td>
										<td><?php echo $sl_sp; ?></td>
										<td><?php echo $tong_duoc_dinh_dang; ?></td>
									</tr>
								<?php
								}								
							}
						}
					}
				?>
				<tr>
					<td colspan="5">
						<br><br>
						Tổng tiền của đơn hàng là : 
						<?php 
							$tong_lon_duoc_dinh_dang=number_format($tong_lon,0,",",".");
							echo "<b>".$tong_lon_duoc_dinh_dang."</b>";
						?>
						<br><br>
					</td>
				</tr>
			</table>
		</td>		
	</tr>

</table>
<br><br>
<table width="990px" >
	<tr>
		<td width="250px" ><b style="color:blue;font-size:20px" >Thông tin người mua</b><br><br> </td>
	</tr>
	<tr style="font-weight:bold">
		<td>Tên người mua : </td>
		<td>Email : </td>
		<td>Điện thoại : </td>
		<td>Địa chỉ : </td>
		<td>Nội dung : </td>
</tr>
<tr>

				</tr>
			<?php echo '<td>'.$ten_nguoi_mua.'</td>'; 
			echo '<td>'.$email.'</td>';
			 echo '<td>'.$dien_thoai.'</td>';
			 echo '<td>'.$dia_chi.'</td>';
			 echo '<td>'.$noi_dung.'</td>';
			 ?>
			 </tr>
	<tr height="30px" >
		<td colspan="5" style="text-align:center;">
			<?php
				if(isset($_SESSION['quyen']))
				{
					if($_SESSION['quyen']!='admin')
					{
						echo $tinh_trang;
					}
					else
					{
			?>
						<form method="POST">
						<select name="tinh_trang" style="width:20%;text-align:center">
								<option><?php echo $tinh_trang ?></option>
								<?php
									if ($tinh_trang != 'Chờ xử lý') {
										echo '<option value=1>Chờ xử lý</option>';
									}
									if ($tinh_trang != 'Đã xác nhận') {
										echo '<option value=2>Đã xác nhận</option>';
									}
									if ($tinh_trang != 'Đang giao hàng') {
										echo '<option value=3>Đang giao hàng</option>';
									}
									if ($tinh_trang != 'Đã giao hàng') {
										echo '<option value=4>Đã giao hàng</option>';
									}
								?>
							</select><br><br>
							<input type="submit" name="update_status" value="Cập nhật trạng thái">
								</form>
							<?php
								if(isset($_POST['update_status']))
								{
									if($_POST['tinh_trang']==1)
									{
										$query="UPDATE hoa_don SET tinh_trang='Chờ xử lý' where id='$id'";
										mysqli_query($conn,$query);
									}
									elseif($_POST['tinh_trang']==2)
									{
										$query="UPDATE hoa_don SET tinh_trang='Đã xác nhận' where id='$id'";
										mysqli_query($conn,$query);

									}
									elseif($_POST['tinh_trang']==3)
									{
										$query="UPDATE hoa_don SET tinh_trang='Đang giao hàng' where id='$id'";
										mysqli_query($conn,$query);

									}
									else
									{
										$query="UPDATE hoa_don SET tinh_trang='Đã giao hàng' where id='$id'";
										mysqli_query($conn,$query);
									}
									echo '<script>
									alert("Cập nhật trạng thái đơn hàng thành công");
									window.location.href = window.location.href;
									</script>';
								}
							}
						}
							?>
		</td>
	</tr>
</table>
