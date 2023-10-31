<div id="myCarousel" class="carousel slide" data-ride="carousel" style="margin:52px 0 15px 0;">
  <ol class="carousel-indicators">
    <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
    <li data-target="#myCarousel" data-slide-to="1"></li>
    <li data-target="#myCarousel" data-slide-to="2"></li>
  </ol>
  <div class="carousel-inner">
    <?php 
    $tv="select hinh,lien_ket from slideshow order by id limit 3";
    $tv_1=mysqli_query($conn,$tv);
    $first_item = true;
    while($tv_2=mysqli_fetch_array($tv_1))
    {
      $link_hinh="hinh_anh/slideshow/".$tv_2['hinh'];
      if ($first_item) {
        echo "<div class='item active'>";
        $first_item = false;
      } else {
        echo "<div class='item'>";
      }
      echo "<a href='".$tv_2['lien_ket']."'>";
      echo "<img src='".$link_hinh."'class='slideshow_img'>";
      echo "</a>";
      echo "</div>";
    }
    ?>
  </div>
  <a class="left carousel-control" href="#myCarousel" data-slide="prev">
    <span class="glyphicon glyphicon-chevron-left"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="right carousel-control" href="#myCarousel" data-slide="next">
    <span class="glyphicon glyphicon-chevron-right"></span>
    <span class="sr-only">Next</span>
  </a>
</div>
<script type="text/javascript" >

	var i_img=0;
	var div_slideshow=document.getElementById("slideshow");
	var img_slideshow=div_slideshow.getElementsByTagName("img");
	for(var i=0;i<img_slideshow.length;i++)
	{
		img_slideshow[i].style.display="none";
	}
	img_slideshow[0].style.display="block";
	
	setInterval(function(){
		img_slideshow[i_img].style.display="none";
		i_img=i_img+1;
		if(i_img>=img_slideshow.length){i_img=0;}
		img_slideshow[i_img].style.display="block";		
	},2000);
</script>