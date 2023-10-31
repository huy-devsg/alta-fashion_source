<?php
	session_start();
	$bien_bao_mat="co";
	include("quan_tri/ham/ham.php");
    include("ket_noi.php");	
	if(isset($_POST['thong_tin_khach_hang']))
	{
		include("chuc_nang/gio_hang/thuc_hien_mua_hang.php");
	}
	if(isset($_POST['cap_nhat_gio_hang']))
	{
		include("chuc_nang/gio_hang/cap_nhat_gio_hang.php");
		trang_truoc();
	}
?>
<html>
	<head>
		<meta charset="UTF-8">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<title>Alta Clothing</title>
		<base href="/alta-fashion/"/>
		<link rel="icon" href="hinh_anh/logo/icon.png">
		<link rel="stylesheet" type="text/css" href="giao_dien/giao_dien.css">
		<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" />
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.1/jquery.min.js"></script>
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
	</head>
	<body>
		<center>
		<div style="width:100%">
				<?php
					include("chuc_nang/menu_ngang/menu_ngang.php");
					?>
			</div>	
			<?php 
					echo'<div style="width:90%;margin-top:55px">';
						if(!isset($_GET['thamso']))
						{
							include("chuc_nang/banner/banner.php");	
						}
					?> 	
					<?php 
						include("chuc_nang/dieu_huong.php");
					?>
				</div>
				<div style="width:100%">
					<?php
						include("chuc_nang/footer/footer.php");
					?>
			</div>
		</center>
	</body>
</html>