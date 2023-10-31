	<h2>SẢN PHẨM MỚI NHẤT</h2>
	<div class="product-list">
		<?php 
		$tv="select id,ten,gia,hinh_anh,thuoc_menu from san_pham where trang_chu='co' order by id desc limit 15";
		$tv_1=mysqli_query($conn,$tv);
		while($tv_2=mysqli_fetch_array($tv_1))
		{
			echo "<div class='product'>";
			if($tv_2!=false)
			{
				$link_anh="hinh_anh/san_pham/".$tv_2['hinh_anh'];
				$link_chi_tiet ='san-pham/'.makeUrl($tv_2['ten']).'-'.$tv_2['id'].'.html';
				$gia=$tv_2['gia'];
				$gia=number_format($gia,0,",",".");
				echo '<div class="product_image">';
				echo "<a href='$link_chi_tiet' >";
					echo "<img src='$link_anh'>";
				echo "</a>";
				echo '</div>';	
				echo "<div class='product_details'>";						
				echo "<div class='product_name'>";						
				echo "<a href='$link_chi_tiet' >";
				echo $tv_2['ten'];
				echo "</a><br>";
				echo "</div>";
				echo "<div class='product_price'>";						
				echo $gia.'&ensp;VNĐ';
				echo "</div>";
				echo "</div>";
		}
			else 
			{
				echo "&nbsp;";
			}
			echo "</div>";
		}
		?>
	</div>