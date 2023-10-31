<?php 
	if(!isset($bien_bao_mat)){exit();}
?>
<?php 
	$id=$_GET['id'];
	$tv="select * from bai_viet where id='$id' ";
	$tv_1=mysqli_query($conn,$tv);
	$tv_2=mysqli_fetch_array($tv_1);
	$ten_anh=$tv_2['anh'];
	$link_hinh="hinh_anh/bai_viet/".$tv_2['anh'];
	$link_dong="?thamso=profile&dieu_huong=quan_ly_bai_viet";
	$tieu_de=$tv_2['tieu_de'];
	$noi_dung = $tv_2['noi_dung'];
?>
<form action="" method="post" enctype="multipart/form-data" >
	<table width="990px" >
		<tr>
			<td width="180px" ><b style="color:blue;font-size:20px" >Sửa bài viết</b><br><br> </td>
			<td width="810px" align="right" >
				<a href="<?php echo $link_dong; ?>" class="lk_a1" style="margin-right:30px" >Đóng</a>
			</td>
		</tr>
		<tr>
			<td valign="top" >Hình ảnh : </td>
			<td>
				<img src='<?php echo $link_hinh; ?>' style='width:600px' > 
				<br><br>
				<input type="file" name="hinh_anh" >
				<input type="hidden" name="ten_anh" value="<?php echo $ten_anh; ?>" >
				<br><br>
			</td>
		</tr>
		<tr>
			<td >Tiêu đề : </td>
			<td >
				<input style="width:400px;margin-top:3px;margin-bottom:3px;" name="tieu_de" value="<?php echo $tieu_de; ?>" >
			</td>
		</tr>
		<tr>
			<td >Nội dung : </td>
			<td >
			<script type="text/javascript">
				  tinymce.init({
					selector: '#noi_dung',
					theme: 'modern',
					width: 800,
					height: 400,
					plugins: [
					  'advlist autolink link image lists charmap print preview hr anchor pagebreak spellchecker',
					  'searchreplace wordcount visualblocks visualchars code fullscreen insertdatetime media nonbreaking',
					  'save table contextmenu directionality emoticons template paste textcolor jbimages'
					],
					toolbar: 'insertfile undo redo | styleselect | bold italic | alignleft aligncenter alignright alignjustify | bullist numlist outdent indent | link image | print preview media fullpage | forecolor backcolor emoticons jbimages',
					relative_urls: false
				  });
				  
				  </script>
				  <textarea id="noi_dung" name="noi_dung" ><?php echo $noi_dung; ?></textarea>
			</td>
		</tr>
		<tr>
			<td>&nbsp;</td>
			<td>
				<br>
				<input type="submit" name="bieu_mau_sua_bai_viet" value="Sửa">
			</td>
		</tr>
	</table>
</form>