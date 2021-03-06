<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Hệ thống dịch vụ Instagram</title>
  <link rel="preconnect" href="https://fonts.googleapis.com" />
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
  <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;500;700&display=swap" rel="stylesheet" />
  <link rel="stylesheet" href="./lading-page/css/animate.min.css" />
  <link rel="stylesheet" href="./lading-page/css/font-awesome.min.css" />
  <link rel="stylesheet" href="./lading-page/css/style.css" />
</head>

<body>
  <div id="preloader">
    <div id="loader"></div>
  </div>
  <div class="landing-page">
    <header class="header">
      <div class="header-navbar">
        <div class="container">
          <div class="header-top">
            <a href="index.html">
              <img src="./assets/images/logo.png" alt="" />
            </a>

            <ul class="menu">
              <li class="menu-item">
                <a href="#" class="menu-link">trang chủ </a>
              </li>

              <li class="menu-item menu-services">
                <a href="#" class="menu-link">dịch vụ nổi bật
                  <i class="fa fa-caret-down"></i>
                </a>

                <ul class="sub-menu">
                  <li>
                    <a href="#instagram">Instagram</a>
                  </li>
                  <li>
                    <a href="#more-services">Mốt số dịch vụ khác</a>
                  </li>
                </ul>
              </li>

              <li class="menu-item menu-support">
                <a href="#" class="menu-link">liên hệ hỗ trợ
                  <i class="fa fa-caret-down"></i>
                </a>

                <ul class="sub-menu">
                  <li>
                    <a target="_blank" href="https://www.facebook.com/thaotoiday">Facebook</a>
                  </li>
                  <li>
                    <a href="#zalo">Zalo: 0345005746</a>
                  </li>
                </ul>
              </li>
            </ul>

            <div class="header-buttons">
              <a href="auth/login" class="button header-login">Đăng Nhập</a>
              <a href="auth/register" class="button header-signup">Đăng Ký</a>
            </div>

            <span class="menu-toggle"><i class="fa fa-bars"></i></span>
          </div>
        </div>
      </div>

      <div class="header-content container">
        <div class="header-motions">
          <img src="./lading-page/img/tracks/03-1.png" alt="" class="header-motion header-motion--start" />

          <img src="./lading-page/img/tracks/04-1.png" alt="" class="header-motion header-motion--end" />
        </div>

        <div class="header-area">
          <div class="header-motion">
            <img src="./lading-page/img/tracks/05.png" alt="" class="header-motion--heart" />
          </div>

          <div class="header-motion" style="order: 2">
            <img src="./lading-page/img/tracks/06.png" alt="" class="header-motion--thumb" />
          </div>
          <div class="header-body">
            <h2 class="heading--big header-title bounceIn action-on-scroll">
              Hệ thống dịch vụ mạng xã hội Instagram
            </h2>
            <p class="heading--small header-subtitle fadeIn action-on-scroll">
              Tạo cảm hứng cuộc sống muôn màu cho bạn.
            </p>
            <div class="header-button fadeIn action-on-scroll">
              <a href="#" class="button button--primary">Trải Nghiệm Ngay</a>
            </div>
          </div>
        </div>

        <div class="header-img wow animated animate__animated animate__bounceIn">
          <img src="./lading-page/img/header/header-bottom-image.png" alt="" />
        </div>
      </div>
    </header>
    <section class="section services" id="services">
      <div class="container">
        <div class="services-container">
          <div class="services-item">
            <div class="services-item-icon">
              <div class="top-icon">
                <span></span>
                <span></span>
                <span></span>
              </div>

              <i class="fa fa-user" style="font-size: 50px; color: #fff"></i>
            </div>
            <h4 class="section-title wow animated animate__animated animate__fadeInUp">
              Công nghệ
            </h4>
            <p class="section-text wow animated animate__animated animate__fadeInUp">
              Hệ thống được vận hành hoàn toàn tự động 24/24.
            </p>
          </div>

          <div class="services-item">
            <div class="services-item-icon">
              <div class="top-icon">
                <span></span>
                <span></span>
                <span></span>
              </div>

              <i class="fa fa-lock" style="font-size: 50px; color: #fff"></i>
            </div>

            <h4 class="section-title wow animated animate__animated animate__fadeInUp">
              Bảo mật
            </h4>
            <p class="section-text wow animated animate__animated animate__fadeInUp">
              Chúng tôi cam kết sẽ bảo mật thông tin người dùng 1 cách tốt
              nhất.
            </p>
          </div>

          <div class="services-item">
            <div class="services-item-icon">
              <div class="top-icon">
                <span></span>
                <span></span>
                <span></span>
              </div>

              <i class="fa fa-phone" style="font-size: 50px; color: #fff"></i>
            </div>

            <h4 class="section-title wow animated animate__animated animate__fadeInUp">
              Hỗ trợ
            </h4>
            <p class="section-text wow animated animate__animated animate__fadeInUp">
              Đội ngũ hỗ trợ luôn lắng nghe ý khiến khách hàng để phát triển
              hệ thống.
            </p>
          </div>
        </div>
      </div>
    </section>

    <section class="section group" id="group">
      <div class="container">
        <div class="group-container">
          <div class="group-img">
            <img src="./lading-page/img/header/group.png" alt="" class="wow animated animate__animated animate__fadeInRight" data-wow-delay="0.5s" />
          </div>
          <div class="group-buttons wow animated animate__animated animate__bounceIn">
            <a href="#" class="button button-zalo">Nhóm Zalo</a>
            <a href="#" class="button button-telegram">Nhóm Telegram</a>
          </div>
          <div></div>
        </div>
      </div>
    </section>

    <section class="section price" id="price">
      <div class="container">
        <div class="price-container">
          <h2 class="section-heading fadeInUp action-on-scroll">
            Cấp bậc ưu đãi khách hàng
          </h2>
          <p class="section-text fadeIn action-on-scroll">
            Hãy nâng cấp ngay nếu bạn muốn tiết kiệm mọi thứ.
          </p>

          <div class="price-list">
            <div class="price-item wow animated animate__animated animate__zoomIn" data-wow-duration="0.5s">
              <div class="price-header">
                <h4 class="name">Thành viên</h4>
              </div>
              <div class="price-img">
                <img src="./lading-page/img/price/01-4.png" alt="" />
              </div>
              <div class="price-wrap">
                <span class="price-single">0đ</span>
              </div>
              <div class="price-body">
                <ul>
                  <li>Không có ưu đãi.</li>
                </ul>
              </div>
              <div class="price-footer">
                <a href="#" class="price-btn button button--secondary">
                  Xem Ngay
                </a>
              </div>
            </div>

            <div class="price-item wow animated animate__animated animate__zoomIn" data-wow-duration="0.75s">
              <div class="price-header">
                <h4 class="name">Cộng tác viên</h4>
              </div>
              <div class="price-img">
                <img src="./lading-page/img/price/01-4.png" alt="" />
              </div>
              <div class="price-wrap">
                <span class="price-single">500,000đ</span>
              </div>
              <div class="price-body">
                <ul>
                  <li>Có ưu đãi.</li>
                </ul>
              </div>
              <div class="price-footer">
                <a href="#" class="price-btn button button--secondary">
                  Xem Ngay
                </a>
              </div>
            </div>

            <div class="price-item wow animated animate__animated animate__zoomIn" data-wow-duration="1s">
              <div class="price-header">
                <h4 class="name">Đại lý</h4>
              </div>
              <div class="price-img">
                <img src="./lading-page/img/price/01-4.png" alt="" />
              </div>
              <div class="price-wrap">
                <span class="price-single">5,000,000đ</span>
              </div>
              <div class="price-body">
                <ul>
                  <li>Có rất nhiều ưu đãi.</li>
                </ul>
              </div>
              <div class="price-footer">
                <a href="#" class="price-btn button button--secondary">
                  Xem Ngay
                </a>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>

    <div class="manages">
      <div class="container">
        <div class="manages-container">
          <div class="manages-img">
            <img src="./lading-page/img/header/01-3.png" alt="" class="wow animated animate__animated animate__backInUp" />
          </div>

          <div class="manages-body wow animated animate__animated animate__fadeInUp">
            <h4 class="heading heading--normal">Bạn còn chờ đợi gì nữa?</h4>
            <ul>
              <li><i class="fa fa-check"></i>Cam kết dịch vụ giá rẻ</li>

              <li>
                <i class="fa fa-check"></i>Chất lượng và an toàn tuyệt dối
              </li>

              <li>
                <i class="fa fa-check"></i>Tốc độ hoàn thành nhanh chóng
              </li>
            </ul>
            <strong class="heading heaeding--small">
              <i class="fa fa-cart-arrow-down" style="font-size: 30px; margin-right: 15px"></i>
              Hãy thử sử dụng dịch vụ của chúng tôi</strong>

            <div class="manages-buttons">
              <a href="#" class="button button--secondary">Đăng nhập</a>
              <a href="#" class="button button--secondary">Đăng ký</a>
            </div>
          </div>
        </div>
      </div>
    </div>

    <footer class="footer">
      <div class="footer-container">
        <div class="container">
          <div class="copy-right">
            © 2021 <a href="https://subins.tech">Subins.Tech</a> hệ thống được
            phát triển và vận hành bởi
            <a href="https://www.facebook.com/thaotoiday" target="_blank">Nguyễn Văn Thảo</a>.
          </div>
        </div>
      </div>
    </footer>
  </div>
  <a href="#" class="scroll-up">
    <i class="fa fa-arrow-up scroll-up-icon"></i>
  </a>

  <script type="text/javascript" src="./lading-page/js/wow.min.js"></script>
  <script type="text/javascript" src="./lading-page/js/index.js"></script>
</body>

</html>