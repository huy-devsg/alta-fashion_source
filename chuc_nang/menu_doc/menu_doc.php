<?php 
    $tv="select * from menu_doc order by id";
    $tv_1=mysqli_query($conn, $tv);
    echo '<nav class="navbar navbar-inverse" style="margin-right:20px">
        <div class="container-fluid">
            <ul class="nav navbar-nav">';
                while ($tv_2 = mysqli_fetch_array($tv_1)) {
                        $link_menu = "?thamso=xuat_san_pham&id=".$tv_2['id'];
						echo "<li style='margin-left:-15px;margin-bottom:-20PX'><a href='$link_menu'>";
                        echo $tv_2['ten'];
                    	echo "<hr></a></li><br>";
					}      
?>
        </div>
    </nav>
