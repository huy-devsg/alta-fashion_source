<div class="right-div">
        <?php 
            $tv="select * from quang_cao where vi_tri='phai' order by id limit 1";
            $tv_1=mysqli_query($conn,$tv);
            $tv_2=mysqli_fetch_array($tv_1);
			$anh=$tv_2['anh'];
			echo '<img src="hinh_anh/tinymce/'.$anh.'" width="35%">';
        ?>
    </div>
<style>
        .right-div {
            position: fixed;
            right: -10%;
            top: 50%;
            transform: translateY(-50%);
        }
    </style>