<h2>BÀI VIẾT SẢN PHẨM</h2>
<div class="khung">
<br>
<div class="wrapper">
  <?php
        echo '<div class="main-article">';
            include('slideshow_bai_viet.php');
        echo '</div>';
        $tv="select * from bai_viet order by id limit 2";
        $tv_1=mysqli_query($conn, $tv);
        while ($tv_2 = mysqli_fetch_array($tv_1)) {
          $link_menu = 'bai-viet/'.makeUrl($tv_2['tieu_de']).'-'.$tv_2['id'].'.html';
          $link_anh="hinh_anh/bai_viet/".$tv_2['anh'];
        $tieu_de=$tv_2['tieu_de'];
        $tac_gia=$tv_2['tac_gia'];
        echo '<div class="article">';     
        echo "<img src='$link_anh'>";
        echo '<div class="author_right">';
        echo strtoupper($tac_gia);
        echo '</div>';
        echo "<div class='tieu_de'>";
        echo '<a href="'.$link_menu.'">';
        echo "<h4>$tieu_de</h4>";
        echo "</div>";
        echo "</a><div class='noi_dung'>";
        $noi_dung = $tv_2['noi_dung'];
        $words = explode(" ", $noi_dung);
        $subtext = "";
        $i = 0;
        while ($i < count($words) && str_word_count($subtext) < 86) {
            $subtext .= $words[$i] . " ";
            $i++;
        }
        $subtext = rtrim($subtext);
        if (str_word_count($subtext) >= 86) {
          $subtext .= "...";
      }
        echo $subtext;
        echo '</div></div>';
    }     
  ?>
</div>
<br>
</div>