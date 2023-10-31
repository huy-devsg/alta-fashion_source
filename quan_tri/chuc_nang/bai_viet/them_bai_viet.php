<?php 
	if(!isset($bien_bao_mat)){exit();}
?>
<form action="" method="post" enctype="multipart/form-data" >
	<table width="990px" >
		<tr>
			<td>Hình ảnh : </td>
			<td>
				<input type="file" name="hinh_anh" >
			</td>
		</tr>
		<tr>
			<td>Tiêu đề : </td>
			<td>
				<input type="text" name="tieu_de" >
			</td>
		</tr>
		<tr>
			<td>Nội dung : </td>
			<td>
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
				  <textarea id="noi_dung" name="noi_dung" ></textarea>
			</td>
		</tr>
		<tr>
			<td>&nbsp;</td>
			<td>
				<br><br>
				<input type="submit" name="bieu_mau_them_bai_viet" value="Thêm bài viết" style="width:150px;height:40px;font-size:18px" >
			</td>
		</tr>
	</table>
</form>