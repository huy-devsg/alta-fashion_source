  <h2>DANH MỤC SẢN PHẨM</h2>
  <div class="grid-container">
    <?php
      $tv="select * from menu_doc order by id limit 4";
      $tv_1=mysqli_query($conn, $tv);
      while ($tv_2 = mysqli_fetch_array($tv_1)) {
        $link_menu ='danh-muc/'.makeUrl($tv_2['ten']).'-'.$tv_2['id'].'.html';
        $link_anh="hinh_anh/danh_muc/".$tv_2['anh'];
        echo '<a href="'.$link_menu.'" class="grid-item">';
        echo '<div class="grid-item-wrapper" style="background-color: rgba(255, 255, 255, 1);position: relative;">';
        echo "<img src='$link_anh' class='category_img' style='object-fit: cover; width: 100%; height: 100%;'>";
        echo '<div class="grid-item-content" style="position: absolute; left: 50%; top: 50%; transform: translate(-50%, -50%);">';
        $ten= $tv_2['ten'];
        $teninhoa=mb_strtoupper($ten,"UTF-8");
        echo $teninhoa;
        echo "</div>";
        echo "</div>";
        echo "</a>";
      }     
    ?>
  </div>

