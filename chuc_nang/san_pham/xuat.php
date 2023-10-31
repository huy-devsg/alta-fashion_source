<?php
    $id=makeID();
	$tv_danhmuc="select * from menu_doc  where id='$id' limit 1";
    $tv_danhmuc1=mysqli_query($conn,$tv_danhmuc);
	$tv_danhmuc2=mysqli_fetch_array($tv_danhmuc1);
	echo '<h2>'.$tv_danhmuc2['ten'].'</h2>';
?>
<div class="product-list">
<?php 
    $so_du_lieu=15;
	$tv="select count(*) from san_pham where thuoc_menu='$id';";
    $tv_1=mysqli_query($conn,$tv);
    $tv_2=mysqli_fetch_array($tv_1);
    $so_trang=ceil($tv_2[0]/$so_du_lieu);
    if(!isset($_GET['trang'])){$vtbd=0;}else{$vtbd=($_GET['trang']-1)*$so_du_lieu;}
    $tv="select id,ten,gia,hinh_anh,thuoc_menu from san_pham  where thuoc_menu='$id' order by id desc limit $vtbd,$so_du_lieu";
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
					echo "<img src='$link_anh' class='product_img' width='200px' >";
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
            echo "<div class='product_details'>";
            echo "<div class='product_name'>Không tìm thấy sản phẩm</div>";
            echo "</div>";
        }
        echo "</div>";
    }
?>
</div>
<?php
	include('chuc_nang/pagination/pagination.php');
?>