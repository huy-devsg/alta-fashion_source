<script>
    $(document).ready(function(){
        $('select').on('change', function() {
            var option = $(this).val();
			if(option == 'Chờ xử lý') {
    //Thực hiện lệnh PHP khi lựa chọn là "Chờ xử lý"
    <?php $query="UPDATE hoa_don SET tinh_trang='Chờ xử lý' where id='$id'";
		mysqli_query($conn,$query); ?>
} else if (option == 'Đã xác nhận') {
    //Thực hiện lệnh PHP khi lựa chọn là "Đã xác nhận"
    <?php $query="UPDATE hoa_don SET tinh_trang='Đã xác nhận' where id='$id'";
		mysqli_query($conn,$query); ?>
} else if (option == 'Đang giao hàng') {
    //Thực hiện lệnh PHP khi lựa chọn là "Đang giao hàng"
    <?php $query="UPDATE hoa_don SET tinh_trang='Đang giao hàng' where id='$id'";
		mysqli_query($conn,$query); ?>
} else if (option == 'Đã giao hàng') {
    //Thực hiện lệnh PHP khi lựa chọn là "Đã giao hàng"
    <?php $query="UPDATE hoa_don SET tinh_trang='Đã giao hàng' where id='$id'";
		mysqli_query($conn,$query); ?>
}
</script>