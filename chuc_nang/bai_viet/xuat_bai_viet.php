</div>
</div>
<?php  
	$id=makeID();
	$tv="select * from bai_viet where id='$id'";
	$tv_1=mysqli_query($conn,$tv);
	$tv_2=mysqli_fetch_array($tv_1);
	$link_menu = 'bai-viet/'.makeUrl($tv_2['tieu_de']).'-'.$tv_2['id'].'.html';
    $link_anh="hinh_anh/bai_viet/".$tv_2['anh'];
	$tac_gia=$tv_2['tac_gia'];
	$tieu_de=$tv_2['tieu_de'];
	$noi_dung=$tv_2['noi_dung'];
	$tv_bv="select * from bai_viet where id !='$id' order by id limit 5";
	$tv_bv1=mysqli_query($conn,$tv_bv);
?>
	<style>
		.wrapper
		{
			width: 100%;
			margin:0 auto;
		}
		.banner_bv
		{
			width:100%;
			height:250px;
			background:red;
			position: relative;
		}
		.banner_bv img {
			width: 100%;
			height: 100%;
			top:0;
			left:0;
			position: absolute;
			object-fit: cover;
			object-position: top calc(50% - 200px);
			
		}
		.overlay {
				background-color: rgba(0, 0, 0, 0.7);
				width: 100%;
				height: 100%;
				top:0;
				left:0;
				position: absolute;
				z-index: 1;
		}
		.post-info {
			position: absolute;
			width:80%;
			bottom: 5%;
			left: 50%;
			transform: translateX(-50%);
			color:#fff;

		}
		.post-info h1
		{
			color:#fff;
			text-shadow:none;
			font-weight:bold;
			font-size:40px;
		}
		.post-info span
		{
			color:rgba(255,105,0,1);
		}
		.content
		{
			width: 90%;
			margin: 0 auto;
			float:left;
			padding: 20px 0;
			

		}
		.content_left {
			width: 63%;
			max-width: 63%;
			text-align:left;
			float:left;
			padding: 10px;
			border-radius:20px ;
			box-shadow: rgba(100, 100, 111, 0.2) 0px 7px 29px 0px;

		}
		h2 {
			font-size: 24px;
			font-weight: bold;
			margin-bottom: 20px;
		}
		.content_left p {
			font-size: 16px;
			line-height: 1.5;
			margin-bottom: 20px;
		}
		.content-left img
		{
			width:30%;
			margin:10px 0 10px 0;
		}
		.sidebar {
			border-radius:20px ;
			box-shadow: rgba(100, 100, 111, 0.2) 0px 7px 29px 0px;
			padding:0 0 10px 10px;
			width: 35%;
			float:right;
			display:flex;
			text-align:left;
			justify-content:center;
			flex-direction: column;
		}
		.sidebar h2
		{
			text-align: center;
			margin-bottom: 20px;
		}
		
		.sidebar ul {
			list-style-type: none;
			margin: 0;
			padding: 0;
		}
		.sidebar ul li {
			margin-bottom: 20px;
		}
		.sidebar ul li a {
			color: #333;
			text-decoration: none;
		}
		.post_image_2
		{
			object-fit:cover;
			width: 35%;
			height:80px;
			border-radius:10px;
		}
		.title_post
		{	box-shadow: none;
			padding: 10px;
			width: 65%;
			height:80px;
			font-weight:bold;
		}
		.time
		{
			color: gray;
			font-weight:400;
		}
	</style>
<div class="wrapper">
		<div class="banner_bv">
			<img src="<?php echo $link_anh; ?>" class="post_image">
			<div class="banner_bv overlay">
				<div class="post-info">
					<h1><?php echo $tieu_de ?> </h1>
					<i class="glyphicon glyphicon-user"></i> Người đăng: <span><?php echo $tac_gia ?></span>
					<i class="glyphicon glyphicon-time"></i> <span><?php include('time_post.php'); ?></span>
				</div>
			</div>
		</div>
				<div class="content">
					<div class="content_left">
					
						<h2><?php echo $tieu_de ?></h2>
						<p><?php echo $noi_dung ?></p>
					</div>
			<div class="sidebar">
				<h2>Bài viết liên quan</h2>
				<ul>
					<?php
						while($tv_bv2=mysqli_fetch_array($tv_bv1))
						{
							$link_menu = 'bai-viet/'.makeUrl($tv_bv2['tieu_de']).'-'.$tv_bv2['id'].'.html';
							$link_anh="hinh_anh/bai_viet/".$tv_bv2['anh'];
							$tac_gia=$tv_bv2['tac_gia'];
							$tieu_de=$tv_bv2['tieu_de'];
							$noi_dung=$tv_bv2['noi_dung'];
							echo '<li><a href="'.$link_menu.'">';
							echo '<img class="post_image_2"src="'.$link_anh.'">';
							echo '<div class="sidebar title_post">';
							echo ''.$tieu_de.'<BR>';
							echo '<div class="time">';
							include('time_post.php');
							echo '</div>';
							echo '</div>';
							echo '</a></li>';
						}
					?>
				</ul>
			</div>
		</div>
	</div>