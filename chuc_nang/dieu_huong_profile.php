<?php 
	if(isset($_GET['dieu_huong']))
	{
        $dieu_huong=$_GET['dieu_huong'];
        switch($dieu_huong)
	    {
            case "moi":
                include("chuc_nang/bai_viet/xuat_bai_viet.php");
            break;
            case "gio-hang":
            echo '<h2 class="title_admin">GIỎ HÀNG</h2>';
            include("chuc_nang/gio_hang/gio_hang.php");
            break;
            case "don-hang":
                echo '<h2 class="title_admin">ĐƠN HÀNG ĐÃ MUA</h2>';
                include('chuc_nang/profile/hoa_don/hoa_don.php');
            break;
            case "quan-tri":
                echo '<h2 class="title_admin">QUẢN TRỊ WEBSITE</h2>';
                include("quan_tri/chuc_nang/quan_tri_2/index.php");
            break;
            case "thong-tin":
                echo '<h2 class="title_admin">THÔNG TIN CÁ NHÂN</h2>';
                include('chuc_nang/profile/tai_khoan/sua_thong_tin.php');
            break;
            case "dia-chi":
                echo '<h2 class="title_admin">ĐỊA CHỈ GIAO HÀNG</h2>';
                include('chuc_nang/profile/dia_chi/dia_chi.php');
            break;
            case "them-dia-chi":
                echo '<h2 class="title_admin">THÊM ĐỊA CHỈ MỚI</h2>';
                include('chuc_nang/profile/dia_chi/them_dia_chi.php');
            break;
            case "them-avatar":
                echo '<h2 class="title_admin">ẢNH ĐẠI DIỆN</h2>';
                include('chuc_nang/profile/avatar/them_avatar.php');
            break;
            case "doi-mat-khau":
                echo '<h2 class="title_admin">ĐỔI MẬT KHẨU MỚI</h2>';
                include('chuc_nang/profile/tai_khoan/doi_mat_khau.php');
            break;
            default: 
            echo '<h2 class="title_admin">THÔNG TIN CÁ NHÂN</h2>';
            include('chuc_nang/profile/tai_khoan/sua_thong_tin.php');
        }
    }
    elseif(isset($_GET['quan-tri']))
    {
        $quan_tri=$_GET['quan-tri'];
        switch($quan_tri)
        {
            case "gio-hang":
            echo '<h2 class="title_admin">GIỎ HÀNG</h2>';
            include("chuc_nang/gio_hang/gio_hang.php");
            break;
            case "them-menu-ngang":
                echo '<h2 class="title_admin">THÊM MENU</h2>';
                include("quan_tri/chuc_nang/menu_ngang/them_menu_ngang.php");
            break;
            case "quan-ly-menu-ngang":
                echo '<h2 class="title_admin">DANH SÁCH MENU</h2>';
                include("quan_tri/chuc_nang/menu_ngang/quan_ly_menu_ngang.php");
            break;
            case "sua-menu-ngang":
                echo '<h2 class="title_admin">SỬA MENU</h2>';
                include("quan_tri/chuc_nang/menu_ngang/sua_menu_ngang.php");
            break;
            case "xoa-menu-ngang":
            include("quan_tri/chuc_nang/menu_ngang/xoa_menu_ngang.php");
            thong_bao("Xóa menu thành công");
            break;
            case "them-menu-doc":
                echo '<h2 class="title_admin">THÊM DANH MỤC SẢN PHẨM</h2>';
                include("quan_tri/chuc_nang/menu_doc/them_menu_doc.php");
            break;
            case "quan-ly-menu-doc":
                echo '<h2 class="title_admin">DANH SÁCH DANH MỤC</h2>';
                include("quan_tri/chuc_nang/menu_doc/quan_ly_menu_doc.php");
            break;
            case "sua-menu-doc":
                echo '<h2 class="title_admin">SỬA DANH MỤC SẢN PHẨM</h2>';
                include("quan_tri/chuc_nang/menu_doc/sua_menu_doc.php");
            break;
            case "them-san-pham":
                echo '<h2 class="title_admin">THÊM SẢN PHẨM</h2>';
                include("quan_tri/chuc_nang/san_pham/them_san_pham.php");
            break;
            case "quan-ly-san-pham":
                echo '<h2 class="title_admin">DANH SÁCH SẢN PHẨM</h2>';
                include("quan_tri/chuc_nang/san_pham/quan_ly_san_pham.php");
            break;
            case "sua-san-pham":
                echo '<h2 class="title_admin">SỬA SẢN PHẨM</h2>';
                include("quan_tri/chuc_nang/san_pham/sua_san_pham.php");
            break;
            case "hoa-don":
                echo '<h2 class="title_admin">DANH SÁCH HÓA ĐƠN</h2>';
                include("quan_tri/chuc_nang/hoa_don/quan_ly_hoa_don.php");
            break;
            case "xem-hoa-don":
                echo '<h2 class="title_admin">HÓA ĐƠN</h2>';
                include("chuc_nang/profile/hoa_don/xem_hoa_don.php");
            break;
            case "san-pham-trang-chu":
                echo '<h2 class="title_admin">HIỂN THỊ TRANG CHỦ</h2>';
                include("quan_tri/chuc_nang/san_pham_trang_chu/san_pham_trang_chu.php");
            break;
            case "san-pham-noi-bat":
                echo '<h2 class="title_admin">HIỂN THỊ BÁN CHẠY</h2>';
                include("quan_tri/chuc_nang/san_pham_noi_bat/san_pham_noi_bat.php");
            break;
            case "them-slideshow":
                echo '<h2 class="title_admin">THÊM SLIDESHOW</h2>';
                include("quan_tri/chuc_nang/slideshow/them_slideshow.php");
            break;
            case "quan-ly-slideshow":
                echo '<h2 class="title_admin">DANH SÁCH SLIDESHOW</h2>';
                include("quan_tri/chuc_nang/slideshow/quan_ly_slideshow.php");
            break;
            case "sua-slideshow":
                echo '<h2 class="title_admin">SỬA SLIDESHOW</h2>';
                include("quan_tri/chuc_nang/slideshow/sua_slideshow.php");
            break;
            case "them-bai-viet":
                echo '<h2 class="title_admin">THÊM BÀI VIẾT MỚI</h2>';
                include("quan_tri/chuc_nang/bai_viet/them_bai_viet.php");
            break;
            case "quan-ly-bai-viet":
                echo '<h2 class="title_admin">DANH SÁCH BÀI VIẾT</h2>';
                include("quan_tri/chuc_nang/bai_viet/quan_ly_bai_viet.php");
            break;
            case "sua-bai-viet":
                echo '<h2 class="title_admin">SỬA BÀI VIẾT</h2>';
                include("quan_tri/chuc_nang/bai_viet/sua_bai_viet.php");
            break;
            case "sua-banner":
                echo '<h2 class="title_admin">SỬA BANNER</h2>';
                include("quan_tri/chuc_nang/banner/sua_banner.php");
            break;
            case "sua-footer":
                echo '<h2 class="title_admin">SỬA FOOTER</h2>';
                include("quan_tri/chuc_nang/footer/sua_footer.php");
            break;
            case "them-quang-cao-trai":
                echo '<h2 class="title_admin">THÊM QUẢNG CÁO LEFT</h2>';
                include("quan_tri/chuc_nang/quang_cao_trai/them_quang_cao_trai.php");
            break;
            case "quan-ly-quang-cao-trai":
                echo '<h2 class="title_admin">QUẢNG CÁO LEFT</h2>';
                include("quan_tri/chuc_nang/quang_cao_trai/quan_ly_quang_cao_trai.php");
            break;
            case "sua-quang-cao-trai":
                echo '<h2 class="title_admin">SỬA QUẢNG CÁO LEFT</h2>';
                include("quan_tri/chuc_nang/quang_cao_trai/sua_quang_cao_trai.php");
            break;
            case "them-quang-cao-phai":
                echo '<h2 class="title_admin">THÊM QUẢNG CÁO RIGHT</h2>';
                include("quan_tri/chuc_nang/quang_cao_phai/them_quang_cao_phai.php");
            break;
            case "quan-ly-quang-cao-phai":
                echo '<h2 class="title_admin">QUẢNG CÁO RIGHT</h2>';
                include("quan_tri/chuc_nang/quang_cao_phai/quan_ly_quang_cao_phai.php");
            break;
            case "sua-quang-cao-phai":
                echo '<h2 class="title_admin">SỬA QUẢNG CÁO RIGHT</h2>';
                include("quan_tri/chuc_nang/quang_cao_phai/sua_quang_cao_phai.php");
            break;
            case "xoa-menu-doc":
                include("quan_tri/chuc_nang/menu_doc/xoa_menu_doc.php");
                thong_bao("Xóa danh mục thành công");
                break;
            case "xoa-san-pham":
                include("quan_tri/chuc_nang/san_pham/xoa_san_pham.php");
                thong_bao("Xóa sản phẩm thành công");
                break;
            case "xoa-hoa-don":
                include("quan_tri/chuc_nang/hoa_don/xoa_hoa_don.php");
                thong_bao("Xóa đơn thành công");
                break;
            case "xoa-hoa-don-o-trang-chi-tiet":
                include("quan_tri/chuc_nang/hoa_don/xoa_hoa_don_o_trang_chi_tiet.php");
                thong_bao("Xóa hóa đơn thành công");
                break;
            case "xoa-slideshow":
                include("quan_tri/chuc_nang/slideshow/xoa_slideshow.php");
                thong_bao("Xóa slideshow thành công");
                break;
            case "xoa-bai-viet":
                include("quan_tri/chuc_nang/bai_viet/xoa_bai_viet.php");
                thong_bao("Xóa bài viết thành công");
                break;
            case "xoa-quang-cao-trai":
                include("quan_tri/chuc_nang/quang_cao_trai/xoa_quang_cao_trai.php");
                thong_bao("Xóa nội dung quảng cáo trái thành công");
                break;
            case "xoa-quang-cao-phai":
                include("quan_tri/chuc_nang/quang_cao_phai/xoa_quang_cao_phai.php");
                thong_bao("Xóa nội dung quảng cáo phải thành công");
                break;
            case "xoa-dia-chi":
                include("chuc_nang/profile/dia_chi/xoa_dia_chi.php");
                thong_bao("Xóa địa chỉ thành công");
                break;
            default:
                echo '<h2 class="title_admin">QUYỀN HẠN WEBSITE</h2>';
                include("quan_tri/chuc_nang/quan_tri_2/sua_thong_tin_quan_tri.php");
        }
    
    }
    else
    {
        echo '<h2 class="title_admin">THÔNG TIN CÁ NHÂN</h2>';
        include('chuc_nang/profile/tai_khoan/sua_thong_tin.php');
    }
/*  <----------------------------------------------->  */
    if(isset($_POST['bieu_mau_them_menu_ngang']))
        {
            include("quan_tri/chuc_nang/menu_ngang/them_menu_ngang_vao_csdl.php");
            thong_bao("Thêm menu thành công");
            trang_truoc();
        }
        if(isset($_POST['bieu_mau_sua_menu_ngang']))
        {
            include("quan_tri/chuc_nang/menu_ngang/sua_menu_ngang_o_trong_csdl.php");
            thong_bao("Sửa menu thành công");
            trang_truoc();
        }
        
        if(isset($_POST['bieu_mau_them_menu_doc']))
        {
            include("quan_tri/chuc_nang/menu_doc/them_menu_doc_vao_csdl.php");
            thong_bao("Thêm danh mục thành công");
            trang_truoc();
        }
        if(isset($_POST['bieu_mau_sua_menu_doc']))
        {
            include("quan_tri/chuc_nang/menu_doc/sua_menu_doc_o_trong_csdl.php");
            thong_bao("Sửa danh mục thành công");
            trang_truoc();
        }
       
        if(isset($_POST['bieu_mau_them_san_pham']))
        {
            include("quan_tri/chuc_nang/san_pham/them_san_pham_vao_csdl.php");
            thong_bao("Thêm sản phẩm thành công");
            trang_truoc();
        }
        if(isset($_POST['bieu_mau_sua_san_pham']))
        {
            include("quan_tri/chuc_nang/san_pham/sua_san_pham_o_trong_csdl.php");
            thong_bao("Sửa sản phẩm thành công");
            trang_truoc();
        }
       
        if(isset($_POST['bieu_mau_san_pham_trang_chu']))
        {
            include("quan_tri/chuc_nang/san_pham_trang_chu/sua_san_pham_trang_chu.php");
            thong_bao("Hiển thị trang chủ thành công");
            trang_truoc();
        }
        if(isset($_POST['bieu_mau_san_pham_noi_bat']))
        {
            include("quan_tri/chuc_nang/san_pham_noi_bat/sua_san_pham_noi_bat.php");
            thong_bao("Hiển thị sản phẩm bán chạy thành công");
            trang_truoc();
        }
        if(isset($_POST['bieu_mau_them_slideshow']))
        {
            include("quan_tri/chuc_nang/slideshow/them_slideshow_vao_csdl.php");
            thong_bao("Thêm slideshow thành công");
            trang_truoc();
        }
        if(isset($_POST['bieu_mau_sua_slideshow']))
        {
            include("quan_tri/chuc_nang/slideshow/sua_slideshow_o_trong_csdl.php");
            thong_bao("Sửa slideshow thành công");
            trang_truoc();
        }
        
        if(isset($_POST['bieu_mau_them_bai_viet']))
        {
            include("quan_tri/chuc_nang/bai_viet/them_bai_viet_vao_csdl.php");
            thong_bao("Thêm bài viết mới thành công");
            trang_truoc();
        }
        if(isset($_POST['bieu_mau_sua_bai_viet']))
        {
            include("quan_tri/chuc_nang/bai_viet/sua_bai_viet_o_trong_csdl.php");
            thong_bao("Sửa bài viết thành công");
            trang_truoc();
        }
       
        if(isset($_POST['bieu_mau_sua_banner']))
        {
            include("quan_tri/chuc_nang/banner/sua_banner_o_trong_csdl.php");
            thong_bao("Sửa banner thành công");
            trang_truoc();
        }
        if(isset($_POST['bieu_mau_sua_footer']))
        {
            include("quan_tri/chuc_nang/footer/sua_footer_o_trong_csdl.php");
            thong_bao("Sửa footer thành công");
            trang_truoc();
        }
        if(isset($_POST['bieu_mau_them_quang_cao_trai']))
        {
            include("quan_tri/chuc_nang/quang_cao_trai/them_quang_cao_trai_vao_csdl.php");
            thong_bao("Thêm nội dung quảng cáo trái thành công");
            trang_truoc();
        }
        if(isset($_POST['bieu_mau_sua_quang_cao_trai']))
        {
            include("quan_tri/chuc_nang/quang_cao_trai/sua_quang_cao_trai_o_trong_csdl.php");
            thong_bao("Sửa nội dung quảng cáo trái thành công");
            trang_truoc();
        }
        
        if(isset($_POST['bieu_mau_them_quang_cao_phai']))
        {
            include("quan_tri/chuc_nang/quang_cao_phai/them_quang_cao_phai_vao_csdl.php");
            thong_bao("Thêm nội dung quảng cáo phải thành công");
            trang_truoc();
        }
        if(isset($_POST['bieu_mau_sua_quang_cao_phai']))
        {
            include("quan_tri/chuc_nang/quang_cao_phai/sua_quang_cao_phai_o_trong_csdl.php");
            thong_bao("Sửa nội dung quảng cáo phải thành công");
            trang_truoc();
        }
       
        if(isset($_POST['bieu_mau_sua_thong_tin_quan_tri']))
        {
            include("quan_tri/chuc_nang/quan_tri_2/sua_thong_tin_quan_tri_o_trong_csdl.php");
            thong_bao("Đổi mật khẩu thành công");
            trang_truoc();
        }
        if(isset($_POST['bieu_mau_sua_thong_tin']))
        {
            include("chuc_nang/profile/tai_khoan/sua_thong_tin_o_trong_csdl.php");
            thong_bao("Cập nhật thông tin thành công");
            trang_truoc();
        }
        if(isset($_POST['bieu_mau_them_dia_chi']))
        {
            include("chuc_nang/profile/dia_chi/them_dia_chi_o_trong_csdl.php");
            thong_bao_chuyen_link("Thêm địa chỉ thành công",'?thamso=profile&dieu_huong=dia_chi');
        }
        
        if(isset($_POST['bieu_mau_doi_mat_khau']))
        {
            include("chuc_nang/profile/tai_khoan/doi_mat_khau_o_trong_csdl.php");
        }
        if(isset($_POST['bieu_mau_them_avatar']))
        {
            include("chuc_nang/profile/avatar/them_avatar_o_trong_csdl.php");
        }
?>