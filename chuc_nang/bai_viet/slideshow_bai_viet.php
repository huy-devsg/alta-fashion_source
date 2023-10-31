<div id="myCarousel" class="carousel slide" data-ride="carousel">
  <!-- Indicators -->
  <ol class="carousel-indicators">
    <?php
    // Lấy dữ liệu từ bảng "bai_viet"
    $tv = "SELECT * FROM bai_viet order by id desc";
    $tv_1 = mysqli_query($conn, $tv);
    // Tạo các indicators
    /*aaaaa*/
  
?>
</ol>
  <!-- Wrapper for slides -->
  <div class="carousel-inner">
    <?php
    $index = 0;
    while ($tv_2 = mysqli_fetch_array($tv_1)) {
      $active = $index == 0 ? "active" : "";
      $link_menu = 'bai-viet/'.makeUrl($tv_2['tieu_de']).'-'.$tv_2['id'].'.html';
      $link_anh="hinh_anh/bai_viet/".$tv_2['anh'];
      echo '<a href="'.$link_menu.'">';
      echo '<div class="item ' . $active . '">';
      echo '<img src="hinh_anh/bai_viet/'.$tv_2['anh'].'" alt="' . $tv_2["tieu_de"] . '" style="width:100%;">';
      echo '<div class="carousel-caption d-none d-md-block">';
      echo '<h3 class="animated">' . $tv_2["tieu_de"] . '</h3>';
      echo '<div class="time_post">';
        include('time_post.php');
      echo '</div>';
        echo '<div class="author_left">';
          echo 'Author : <b><span style="color:rgba(255,105,0,1);">'.$tv_2["tac_gia"].'</span></b>';
        echo '</div>';
      echo '</a>';
      echo '</div>';
  echo '</div>';
      $index++;
    }
    ?>
  </div>
  <!-- Left and right controls -->
  <a class="left carousel-control" href="#myCarousel" data-slide="prev">
    <span class="glyphicon glyphicon-chevron-left"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="right carousel-control" href="#myCarousel" data-slide="next">
    <span class="glyphicon glyphicon-chevron-right"></span>
    <span class="sr-only">Next</span>
  </a>
</div>
<style>



</style>