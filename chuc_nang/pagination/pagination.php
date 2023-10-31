
<div class="phan_trang">
<nav aria-label="Page navigation example">
  <ul class="pagination">
    <?php
        $trang_hien_tai = isset($_GET['trang']) ? $_GET['trang'] : 1;
        for($i=1;$i<=$so_trang;$i++)
        {
			if($so_trang<=1)
			{
				echo '';
			}
			else{
                if(isset($_GET['tu_khoa'])){
                    $link="tim_kiem.html&tu_khoa=$tu&trang=".$i;
                }
                else
                {
                    $link="san-pham/trang=".$i;
                }
                    if($trang_hien_tai == $i)
                    {
                        echo '<li class="page-item"><a class="page-link" href='.$link.' style="background-color:#000;color:rgba(255,105,0,1);">'.$i.'</a></li>';
                    }
                    else{
                        echo '<li class="page-item"><a class="page-link" style="color:rgba(255,105,0,1);" href='.$link.' ">'.$i.'</a></li>';
                    }
            }
        }
    ?>
      </ul>
</nav>
</div>