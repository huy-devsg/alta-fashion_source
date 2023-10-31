<div class="footer-container">
  <div class="footer-top">
    <div class="container">
      <div class="row">
      <div class="col-md-4 col-sm-6 col-xs-12 footer-col">
          <div class="footer-col-inner">
            <h3>Theo dõi chúng tôi</h3>
            <ul>
              <li class="social"><a href="#"><i class="fab fa-facebook-f fa-2x" style="color: #3b5998;"></i></a>
              <a href="#">&emsp;<i class="fab fa-twitter fa-2x" style="color: #55acee;"></i></a>
              <a href="#">&emsp;<i class="fab fa-instagram fa-2x" style="color: #ac2bac;"></i></a>
              <a href="#">&emsp;<i class="fab fa-linkedin-in fa-2x" style="color: #0082ca;"></i></a></li>
            </ul>
          </div>
        </div>
        <div class="col-md-4 col-sm-6 col-xs-12 footer-col">
          <div class="footer-col-inner">
            <h3>Về Alta Clothing</h3>
            <ul>
              <li><a href="#">Giới thiệu</a></li>
              <li><a href="#">Tuyển dụng</a></li>
              <li><a href="#">Chính sách bảo mật</a></li>
              <li><a href="#">Điều khoản sử dụng</a></li>
            </ul>
          </div>
        </div>
        <div class="col-md-4 col-sm-6 col-xs-12 footer-col">
          <div class="footer-col-inner">
            <h3>Hỗ trợ khách hàng</h3>
            <ul>
              <li><a href="#">Trung tâm hỗ trợ</a></li>
              <li><a href="#">Liên hệ hỗ trợ</a></li>
              <li><a href="#">Hướng dẫn sử dụng</a></li>
            </ul>
          </div>
        </div>
        <div class="col-md-4 col-sm-6 col-xs-12 footer-col">
          <div class="footer-col-inner">
            <h3>Liên hệ hỗ trợ</h3>
            <ul>
              <li><i class="fas fa-map-marker-alt"></i><a href="#">&ensp;193 Lê Đức Thọ, Phường 17, Quận Gò Vấp, Thành Phố Hồ Chí Minh</a></li>
              <li><i class="fas fa-phone me-3"></i><a href="#">&ensp;+843 7574 3633</a></li>
              <li><i class="fas fa-envelope me-3"></i><a href="#">&ensp;Support@alta.com.vn</a></li>
            </ul>
          </div>
        </div> 
      </div>
    </div>
  </div>
  <div class="footer-bottom">
    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <p><?php
              $tv="select * from footer";
              $tv_1=mysqli_query($conn,$tv);
              $tv_2=mysqli_fetch_array($tv_1);
              echo $tv_2['html'];
          ?></p>
        </div>
      </div>
    </div>
  </div>
</div>
<style>
  .footer-col {
  width: 25%;
}
.container
{
  width:89%
}

</style>