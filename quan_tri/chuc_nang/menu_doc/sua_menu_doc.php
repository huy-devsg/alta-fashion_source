<?php 
	if(!isset($bien_bao_mat)){exit();}
?>
<?php 
	$id=$_GET['id'];
	$tv="select * from menu_doc where id='$id' ";
	$tv_1=mysqli_query($conn,$tv);
	$tv_2=mysqli_fetch_array($tv_1);
	$ten=$tv_2['ten'];
?>
<form action="" method="post">
	<table width="990px" >
		<tr>
			<td width="180px" ><b style="color:blue;font-size:20px" >Sửa danh mục sản phẩm</b><br><br> </td>
			<td width="810px" align="right" >
			</td>
		</tr>
		<tr>
			<td >Tên : </td>
			<td >
				<input style="width:400px;margin-top:3px;margin-bottom:3px;" name="ten" value="<?php echo $ten; ?>" >
			</td>
		</tr>		
		<tr>
			<td>&nbsp;</td>
			<td>
				<br>
				<input type="submit" name="bieu_mau_sua_menu_doc" value="Sửa menu">
			</td>
		</tr>
	</table>
</form>