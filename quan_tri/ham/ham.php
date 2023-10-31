<?php 
	function thong_bao($c)
	{
		$lien_ket_trang_truoc=$_SERVER['HTTP_REFERER'];
		?>
				<script type="text/javascript">
					alert("<?php echo $c; ?>");
					window.history.back();
				</script>
		<?php 
	}
	function chuyen_trang($link)
	{
?>
				<script type="text/javascript">
					window.location.href='<?php echo $link ?>';
				</script>
		<?php 
	}
	function trang_truoc()
	{
		$lien_ket_trang_truoc=$_SERVER['HTTP_REFERER'];
		?>
				<script type="text/javascript">
					window.history.back();
				</script>
		<?php 
	}
	function thong_bao_chuyen_link($chuoi_thong_bao,$link_chuyen_trang)
	{
		if($link_chuyen_trang=="")
		{
			$link=$_SERVER['HTTP_REFERER'];
		}
		else
		{
			$link=$link_chuyen_trang;
		}
		?>
				<script type="text/javascript">
					alert("<?php echo $chuoi_thong_bao; ?>");
					window.location="<?php echo $link; ?>";
				</script>
		<?php 
	}
	function convert_vn2latin($str)
{
    // Mảng các ký tự tiếng việt không dấu theo mã unicode tổ hợp
    $tv_unicode_tohop  =
        [
            "à","á","ạ","ả","ã","â","ầ","ấ","ậ","ẩ","ẫ","ă", "ằ","ắ","ặ","ẳ","ẵ",
            "è","é","ẹ","ẻ","ẽ","ê","ề" ,"ế","ệ","ể","ễ",
            "ì","í","ị","ỉ","ĩ",
            "ò","ó","ọ","ỏ","õ","ô","ồ","ố","ộ","ổ","ỗ","ơ" ,"ò","ớ","ợ","ở","õ",
            "ù","ú","ụ","ủ","ũ","ư","ừ","ứ","ự","ử","ữ",
            "ỳ","ý","ỵ","ỷ","ỹ",
            "đ",
            "À","À","Ạ","Ả","Ã","Â","Ầ","Ấ","Ậ","Ẩ","Ẫ","Ă" ,"Ằ","Ắ","Ặ","Ẳ","Ẵ",
            "È","É","Ẹ","Ẻ","Ẽ","Ê","Ề","Ế","Ệ","Ể","Ễ",
            "Ì","Í","Ị","Ỉ","Ĩ",
            "Ò","Ó","Ọ","Ỏ","Õ","Ô","Ồ","Ố","Ộ","Ổ","Ỗ","Ơ" ,"Ờ","Ớ","Ợ","Ở","Ỡ",
            "Ù","Ú","Ụ","Ủ","Ũ","Ư","Ừ","Ứ","Ự","Ử","Ữ",
            "Ỳ","Ý","Ỵ","Ỷ","Ỹ",
            "Đ"
        ];
    // Mảng các ký tự tiếng việt không dấu theo mã unicode dựng sẵn   
    $tv_unicode_dungsan  =
        [
            "à","á","ạ","ả","ã","â","ầ","ấ","ậ","ẩ","ẫ","ă","ằ","ắ","ặ","ẳ","ẵ",
            "è","é","ẹ","ẻ","ẽ","ê","ề","ế","ệ","ể","ễ",
            "ì","í","ị","ỉ","ĩ",
            "ò","ó","ọ","ỏ","õ","ô","ồ","ố","ộ","ổ","ỗ","ơ","ờ","ớ","ợ","ở","ỡ",
            "ù","ú","ụ","ủ","ũ","ư","ừ","ứ","ự","ử","ữ",
            "ỳ","ý","ỵ","ỷ","ỹ",
            "đ",
            "À","Á","Ạ","Ả","Ã","Â","Ầ","Ấ","Ậ","Ẩ","Ẫ","Ă","Ằ","Ắ","Ặ","Ẳ","Ẵ",
            "È","É","Ẹ","Ẻ","Ẽ","Ê","Ề","Ế","Ệ","Ể","Ễ",
            "Ì","Í","Ị","Ỉ","Ĩ",
            "Ò","Ó","Ọ","Ỏ","Õ","Ô","Ồ","Ố","Ộ","Ổ","Ỗ","Ơ","Ờ","Ớ","Ợ","Ở","Ỡ",
            "Ù","Ú","Ụ","Ủ","Ũ","Ư","Ừ","Ứ","Ự","Ử","Ữ",
            "Ỳ","Ý","Ỵ","Ỷ","Ỹ",
            "Đ"
        ];
    // Mảng các ký không dấu sẽ thay thế cho ký tự có dấu
    $tv_khongdau =
        [
            "a","a","a","a","a","a","a","a","a","a","a" ,"a","a","a","a","a","a",
            "e","e","e","e","e","e","e","e","e","e","e",
            "i","i","i","i","i",
            "o","o","o","o","o","o","o","o","o","o","o","o" ,"o","o","o","o","o",
            "u","u","u","u","u","u","u","u","u","u","u",
            "y","y","y","y","y",
            "d",
            "A","A","A","A","A","A","A","A","A","A","A","A" ,"A","A","A","A","A",
            "E","E","E","E","E","E","E","E","E","E","E",
            "I","I","I","I","I",
            "O","O","O","O","O","O","O","O","O","O","O","O" ,"O","O","O","O","O",
            "U","U","U","U","U","U","U","U","U","U","U",
            "Y","Y","Y","Y","Y",
            "D"
        ];

    $str = str_replace($tv_unicode_dungsan, $tv_khongdau, $str);
    $str = str_replace($tv_unicode_tohop,   $tv_khongdau, $str);
    return $str;
}
	function makeUrl($str)
{
    // Chuyển tiếng việt không dấu
    $str = convert_vn2latin($str);
    // chuyển sang in thường
    $str = mb_strtolower($str);
    // Giữ lại các ký tự chữ a - z và số 0 - 9 còn lại thay bằng -
    $str = preg_replace('/[^a-z0-9]/', '-', ($str));
    $str = preg_replace('/[--]+/', '-', $str);
    $str = trim($str, '-');
    return $str;
}
function makeID()
{
	$url = $_SERVER['REQUEST_URI'];
	$parts = explode('-', $url);
	$id = (int) $parts[count($parts)-1]; 
	return $id;
}
?>