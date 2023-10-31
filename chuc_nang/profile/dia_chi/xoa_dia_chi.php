<?php 
	if(!isset($bien_bao_mat)){exit();}
?>
<?php 
	$id=$_GET['id'];
	$tv="DELETE FROM dia_chi WHERE id = $id ";
	mysqli_query($conn,$tv);			
?>
