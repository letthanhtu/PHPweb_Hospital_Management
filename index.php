<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <!-- title -->
  <title>Medical Website</title>
  <!-- css -->
  <link rel="stylesheet" href="css/style.css">
  <!-- Favicon -->
  <link rel="shortcut icon" href="images/fav-icon.png">
  <!-- Manifest -->
  <link rel="apple-touch-icon" href="images/touch-icon.png" />
  <link rel="manifest" href="css/manifest.webmanifest" />
  <!-- google fonts -->
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
  <link href="https://fonts.googleapis.com/css2?family=Rubik:wght@400;500;600;700&display=swap" rel="stylesheet" />
  <!-- Font-awesome cdn -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css">
  <!-- Link Swiper's CSS -->
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper/swiper-bundle.min.css" />
  <script defer src="https://unpkg.com/smoothscroll-polyfill@0.4.4/dist/smoothscroll.min.js"></script>
  <script defer src="js/script.js"></script>
</head>

<body>
  <header class="header nav-open">
    <a href="#hero" class="logo"><span>We</span>Care</a>
    <!-- Nav -->
    <nav class="navigation">

      <!-- menu -->
      <ul class="menu">
        <li><a class="menu-nav-link" href="index.php">Trang chủ</a></li>
        <li><a class="menu-nav-link" href="about_us.php">Giới thiệu</a></li>
        <li><a class="menu-nav-link" href="services.php">Dịch vụ</a></li>
        <li><a class="menu-nav-link" href="doctors.php">Bác sĩ</a></li>
        <li><a class="menu-nav-link" href="contact_us.php">Liên hệ</a></li>
        <li><a class="menu-nav-link" href="index1.php">Đăng nhập</a></li>
      </ul>
    </nav>
    <div class="menu-search">

      <li class="search">
        <form action="#">
          <input type="text" placeholder="Tìm kiếm..." class="search-form">
          <button type="submit" class="search-button">
            <i class="fa-solid fa-magnifying-glass"></i>
          </button>
        </form>

      </li>


      <button href="#" class="nav-appointment-btn">Đặt lịch hẹn khám</button>

    </div>

    <button class="btn-mobile-nav">
      <i class="fa-solid fa-bars icon-mobile-nav" name="menu-outline"></i>
      <i class="fa-solid fa-xmark icon-mobile-nav" name="close-outline"></i>
    </button>

  </header>

  <main>
    <!-- content -->
    <section class="hero-content" id="hero">
      <div class="hero">
        <div class="hero-text">
          <h1 class="heading-primary">
            Chúng tôi chăm sóc cuộc sống khỏe mạnh của bạn</h1>
          <p> Wecare cung cấp các dịch vụ thăm khám, xét nghiệm, chăm sóc sức khỏe toàn diện.</p>
          <div class="hero-text-btns">
            <a href="#"><i class="fa-solid fa-magnifying-glass"></i> Tìm bác sĩ</a>
            <a href="#"><i class="fa-solid fa-check"></i> Liên hệ ngay bây giờ</a>
          </div>
        </div>

        <div class="hero-img">
          <img src="images/main-bg.png" alt>
        </div>
      </div>
    </section>


    <div class="appointment-search-container">
      <h3>Tìm chăm sóc sức khỏe tốt nhất</h3>
      <form class="appointment-search">
        <div class="appo-search-box">
          <i class="fa-solid fa-magnifying-glass"></i>
          <input type="text" placeholder="Tìm bác sĩ tại đây để được tư vấn">
        </div>
        <div class="appo-search-box">
          <i class="fa-solid fa-location-dot"></i>
          <input type="text" placeholder="Địa chỉ của bạn">
        </div>
        <button>
          <i class="fa-solid fa-magnifying-glass"></i>
        </button>
      </form>
    </div>


    <section class="what-we-provide">

      <div class="w-info-box w-i-box1">

        <div class="w-info-icon">
          <i class="fa-solid fa-capsules"></i>
        </div>

        <div class="w-info-text">
          <strong>Dịch vụ chuyên biệt</strong>
          <p>Chăm sóc y tế đặc biệt </p>
        </div>
      </div>
      <div class="w-info-box w-i-box2">
        <div class="w-info-icon">
          <i class="fa-regular fa-comments"></i>
        </div>
        <div class="w-info-text">
          <strong>Chăm sóc 24/7</strong>
          <p>Chăm sóc liên tục</p>
        </div>
      </div>
      <div class="w-info-box w-i-box3">

        <div class="w-info-icon">
          <i class="fa-solid fa-square-poll-horizontal"></i>
        </div>

        <div class="w-info-text">
          <strong>Nhận kết quả trực tuyến</strong>
          <p>Trả kết quả online nhanh </p>
        </div>
      </div>

    </section>


    <section id="our_story">

      <div class="our-story-img">
        <img src="images/story_img.jpg" />
        <a href="#" class="story-play-btn">
          <i class="fa-solid fa-play"></i>
          Play Video
        </a>
      </div>
      <div class="our-stroy-text">
        <h2>Truyện ngắn về phòng khám của chúng tôi.</h2>
        <p>Chào mừng bạn đến với phòng khám của chúng tôi, nơi bạn sẽ nhận được dịch vụ chăm sóc sức khỏe tận tâm và
          chuyên nghiệp. Với đội ngũ bác sĩ giàu kinh nghiệm và trang thiết bị hiện đại, chúng tôi cam kết mang đến sự
          chăm sóc tốt nhất cho sức khỏe của bạn.</p>
        <p> Hơn 1000 bệnh nhân đã tin tưởng và hài lòng với dịch vụ của chúng tôi. Phòng khám của chúng tôi luôn sẵn
          sàng đồng hành cùng bạn trên con đường chăm sóc sức khỏe toàn diện.<a> Đọc thêm</a></p>
        <div class="story-numbers-container">

          <div class="story-numbers-box s-n-box1">
            <strong>1000+</strong>
            <span>Bệnh nhân hài lòng</span>
          </div>

          <div class="story-numbers-box s-n-box2">
            <strong>215+</strong>
            <span>Các chuyên gia bác sĩ</span>
          </div>

          <div class="story-numbers-box s-n-box3">
            <strong>315+</strong>
            <span>Phòng bệnh viện</span>
          </div>

          <div class="story-numbers-box s-n-box4">
            <strong>106+</strong>
            <span>Giải thưởng đạt được</span>
          </div>
        </div>
      </div>

    </section>




    <section id="our-services">
      <div class="services-heading">
        <div class="services-heading-text">
          <strong>Các dịch vụ của chúng tôi</strong>
          <h2>Dịch vụ chất lượng cao</h2>
        </div>
        <div class="service-slide-btns">
          <div class="swiper-button-prev"></div>
          <div class="swiper-button-next"></div>
        </div>
      </div>
      <div class="services-box-container">
        <div class="swiper mySwiperservices">
          <div class="swiper-wrapper">
            <div class="swiper-slide">
              <div class="service-box s-box1">
                <i class="fa-solid fa-tooth"></i>
                <strong>Chăm sóc răng miệng</strong>
                <p>Chăm sóc răng miệng giúp duy trì sức khỏe răng và nướu, ngăn ngừa sâu răng và bệnh nha chu. Việc vệ
                  sinh đúng cách và thăm khám định kỳ là cần thiết để giữ cho răng miệng luôn khỏe mạnh.</p>
                <a href="#">Xem thêm</a>
              </div>
            </div>
            <div class="swiper-slide">
              <div class="service-box s-box2">
                <i class="fa-solid fa-droplet"></i>
                <strong>Xét nghiệm máu</strong>
                <p>Xét nghiệm máu giúp kiểm tra các chỉ số sức khỏe, phát hiện sớm bệnh tật và đánh giá chức năng cơ
                  thể. Đây là phương pháp quan trọng để chẩn đoán và theo dõi nhiều tình trạng y tế.</p>
                <a href="#">Xem thêm</a>
              </div>
            </div>

            <div class="swiper-slide">
              <div class="service-box s-box3">
                <i class="fa-solid fa-disease"></i>
                <strong>Dịch vụ ung thư</strong>
                <p>Dịch vụ ung thư bao gồm chẩn đoán, điều trị và chăm sóc hỗ trợ cho bệnh nhân mắc bệnh ung thư. Các
                  phương pháp điều trị thường bao gồm phẫu thuật, hóa trị, xạ trị và liệu pháp miễn dịch nhằm cải thiện
                  chất lượng cuộc sống và kéo dài thời gian sống cho bệnh nhân.</p>
                <a href="#">Xem thêm</a>
              </div>
            </div>
            <div class="swiper-slide">
              <div class="service-box s-box4">
                <i class="fa-solid fa-user-doctor"></i>
                <strong>Hiệu thuốc</strong>
                <p>Hiệu thuốc cung cấp các loại thuốc kê đơn và không kê đơn nhằm hỗ trợ điều trị bệnh và cải thiện sức
                  khỏe. Bác sĩ tại hiệu thuốc cũng tư vấn cách sử dụng thuốc an toàn và hiệu quả cho khách hàng.</p>
                <a href="#">Xem thêm</a>
              </div>
            </div>
          </div>
        </div>

      </div>
      <span class="service-btn">Liên hệ với chúng tôi nếu cần bất kỳ sự trợ giúp và dịch vụ nào <a href="#">Tại
          đây</a></span>
    </section>

    <section id="why-choose-us">
      <div class="why-choose-us-left">
        <h3>Tại sao lại chọn chúng tôi?</h3>
        <div class="why-choose-box-container">
          <div class="why-choose-box">
            <i class="fa-solid fa-check"></i>
            <div class="why-choose-box-text">
              <strong>Chăm sóc tận tâm</strong>
              <p>Bất cứ khi nào bạn cần chúng tôi luôn sẵn sàng</p>
            </div>
          </div>
          <div class="why-choose-box">
            <i class="fa-solid fa-check"></i>
            <div class="why-choose-box-text">
              <strong>Y tế trực tuyến</strong>
              <p>Chăm sóc sức khỏe, nhận tư vấn trực tuyến.</p>
            </div>
          </div>
          <div class="why-choose-box">
            <i class="fa-solid fa-check"></i>
            <div class="why-choose-box-text">
              <strong>Phẫu thuật</strong>
              <p>Chăm sóc toàn diện cho bệnh nhân</p>
            </div>
          </div>

          <div class="why-choose-box">
            <i class="fa-solid fa-check"></i>
            <div class="why-choose-box-text">
              <strong>Xét nghiệm</strong>
              <p>Kiểm tra sức khỏe và chẩn đoán.</p>
            </div>
          </div>
        </div>
        <a href="#" class="why-choose-us-btn">Đặt lịch hẹn khám</a>
      </div>
      <div class="why-choose-us-right">
        <h3>Trường hợp khẩn cấp?<br />
          Liên hệ với chúng tôi
        </h3>
        <p>Trường hợp khẩn cấp, đừng ngần ngại liên hệ. Chúng tôi luôn sẵn sàng hỗ trợ bạn.</p>
        <div class="w-right-contact-container">
          <div class="w-right-contact-box">
            <i class="fa-solid fa-phone"></i>
            <div class="w-right-contact-box-text">
              <span>Gọi chúng tôi</span>
              <strong>+123 4567 89</strong>
            </div>
          </div>
          <div class="w-right-contact-box">
            <i class="fa-solid fa-envelope"></i>
            <div class="w-right-contact-box-text">
              <span>Mail liên hệ</span>
              <strong>info@example.com</strong>
            </div>
          </div>
        </div>
      </div>
    </section>
    <section id="our-team">
      <div class="our-team-heading">
        <h3>Gặp gỡ các chuyên gia</h3>
        <p>Trao đổi với các chuyên gia y tế hàng đầu để được tư vấn và tìm kiếm ý kiến về phương pháp điều trị tối ưu.
        </p>
      </div>
      <div class="team-box-container">
        <div class="swiper mySwiperteam">
          <div class="swiper-wrapper">
            <div class="swiper-slide">
              <div class="team-box">
                <div class="team-img">
                  <img alt="" src="images/d1.png">
                </div>
                <div class="team-text">
                  <strong>Đào Kiệt</strong>
                  <span>Chuyên gia về nội khoa</span>
                </div>
              </div>
            </div>
            <div class="swiper-slide">
              <div class="team-box">
                <div class="team-img">
                  <img alt="" src="images/d2.png">
                </div>
                <div class="team-text">
                  <strong>Trịnh Nam</strong>
                  <span>Chuyên gia về phẫu thuật</span>
                </div>
              </div>
            </div>
            <div class="swiper-slide">
              <div class="team-box">
                <div class="team-img">
                  <img alt="" src="images/d3.png">
                </div>
                <div class="team-text">
                  <strong>Đặng Linh</strong>
                  <span>Chuyên gia về xét nghiệm y tế</span>
                </div>
              </div>
            </div>
            <div class="swiper-slide">
              <div class="team-box">
                <div class="team-img">
                  <img alt="" src="images/d4.png">
                </div>
                <div class="team-text">
                  <strong>Nguyễn Loan</strong>
                  <span>Chuyên gia về nha khoa</span>
                </div>
              </div>
            </div>
            <div class="swiper-slide">
              <div class="team-box">
                <div class="team-img">
                  <img alt="" src="images/d5.png">
                </div>
                <div class="team-text">
                  <strong>Lê Tú</strong>
                  <span>Chuyên gia về da</span>
                </div>
              </div>
            </div>
          </div>
          <div class="swiper-pagination"></div>
        </div>



      </div>

    </section>

    <section id="testimonials">

      <div class="testimonials-heading">
        <h3>Phản hồi của bệnh nhân về chúng tôi</h3>
        <p>Những ý kiến của bạn giúp cho bệnh viện của chúng tôi ngày càng được hoàn thiện và phát triển hơn.</p>
      </div>
      <div class="testimonials-content">

        <div class="testimonials-img">
          <img alt="" src="images/testimonials-img.png">
        </div>

        <div class="testimonials-box-container">
          <div class="swiper mySwipertesti">
            <div class="swiper-wrapper">
              <div class="swiper-slide">
                <div class="testimonials-box">
                  <div class="t-profile">
                    <div class="t-profile-img">
                      <img alt="" src="images/t1.jpg">
                    </div>
                    <div class="t-profile-text">
                      <strong>Văn A</strong>
                      <span>From Vietnam</span>
                      <div class="t-rating">
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star"></i>
                      </div>
                    </div>
                  </div>
                  <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Ipsa est odit dicta sequi labore
                    perferendis ut veritatis expedita, nihil sint! Delectus aut id voluptatibus nemo dolorum, quos
                    consequatur commodi repudiandae?</p>
                </div>
              </div>
              <div class="swiper-slide">
                <div class="testimonials-box">
                  <div class="t-profile">
                    <div class="t-profile-img">
                      <img alt="" src="images/t1.jpg">
                    </div>
                    <div class="t-profile-text">
                      <strong>Văn B</strong>
                      <span>From Vietnam</span>
                      <div class="t-rating">
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star"></i>
                      </div>
                    </div>
                  </div>
                  <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Ipsa est odit dicta sequi labore
                    perferendis ut veritatis expedita, nihil sint! Delectus aut id voluptatibus nemo dolorum, quos
                    consequatur commodi repudiandae?</p>
                </div>
              </div>
              <div class="swiper-slide">
                <div class="testimonials-box">
                  <div class="t-profile">
                    <div class="t-profile-img">
                      <img alt="" src="images/t1.jpg">
                    </div>
                    <div class="t-profile-text">
                      <strong>Văn C</strong>
                      <span>From Vietnam</span>
                      <div class="t-rating">
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star"></i>
                      </div>
                    </div>
                  </div>
                  <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Ipsa est odit dicta sequi labore
                    perferendis ut veritatis expedita, nihil sint! Delectus aut id voluptatibus nemo dolorum, quos
                    consequatur commodi repudiandae?</p>
                </div>
              </div>

            </div>
            <div class="swiper-pagination"></div>
          </div>

        </div>

      </div>

    </section>

    <section class="gallery">
      <div class="gallery-heading">
        <h3>
          Phòng trưng bày của chúng tôi
        </h3>
        <p>Trang thiết bị hiện đại, các hoạt động y tế chuyên nghiệp, đội ngũ bác sĩ tận tâm mang đến chất lượng
          chăm sóc sức khỏe tốt nhất.</p>

        <div class="gallery-content">
          <figure class="gallery-item">
            <img src="images/gallery-1.jpg" alt="Photo of beautifully oranged food" />
            <!-- <figcaption>Caption</figcaption>-->
          </figure>
          <figure class="gallery-item">
            <img src="images/gallery-2.jpg" alt="Photo of beautifully oranged food" />
          </figure>
          <figure class="gallery-item">
            <img src="images/gallery-3.jpg" alt="Photo of beautifully oranged food" />
          </figure>
          <figure class="gallery-item">
            <img src="images/gallery-4.jpg" alt="Photo of beautifully oranged food" />
          </figure>
          <figure class="gallery-item">
            <img src="images/gallery-5.jpg" alt="Photo of beautifully oranged food" />
          </figure>
          <figure class="gallery-item">
            <img src="images/gallery-6.jpg" alt="Photo of beautifully oranged food" />
          </figure>
        </div>
      </div>
    </section>

    <section class="faq-section">
      <div class="container">
        <div class="faq-heading">
          <h3><span>Các câu hỏi</span> thường gặp</h3>
          <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et
            dolore magna aliqua.</p>
        </div>
        <div class="faq-content">
          <div class="faq-left">
            <img src="images/d5.png" alt="Doctor Image" class="faq-image">
          </div>
          <div class="faq-right">


            <div class="faq-item">
              <div class="faq-question">
                <p>Q. What Do You Mean By Item And End Product?</p>
                <span class="toggle-icon"><i class="fas fa-plus"></i></span>
              </div>
              <div class="faq-answer">
                <p>The answer to the question goes here.</p>
              </div>
            </div>

            <div class="faq-item">
              <div class="faq-question">
                <p>Q. What Are Some Examples Of Permitted End Products?</p>
                <span class="toggle-icon"><i class="fas fa-plus"></i></span>
              </div>
              <div class="faq-answer">
                <p>The answer to the question goes here.</p>
              </div>
            </div>

            <div class="faq-item">
              <div class="faq-question">
                <p>Q. Am I Allowed To Modify The Item That I Purchased?</p>
                <span class="toggle-icon"><i class="fas fa-plus"></i></span>
              </div>
              <div class="faq-answer">
                <p>The answer to the question goes here.</p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
    <section id="subscribe">
      <h3>Đăng ký để nhận thông tin cập nhật mới từ WeCare</h3>
      <form class="subscribe-box">
        <input type="email" placeholder="Example@gmail.com">
        <button>Đăng ký</button>
      </form>
    </section>
  </main>

  <footer>
    <div class="footer-container">
      <div class="footer-company-box">
        <a href="#" class="logo"><span>We</span>Care</a>
        <p>52/237, đường số 34, phường Tam Bình, TP.Thủ Đức, Thành phố Hồ Chí Minh, Việt Nam.</p>
        <div class="footer-social">
          <a href="#"><i class="fa-brands fa-facebook-f"></i></a>
          <a href="#"><i class="fa-brands fa-instagram"></i></a>
          <a href="#"><i class="fa-brands fa-twitter"></i></a>
          <a href="#"><i class="fa-brands fa-youtube"></i></a>
        </div>
      </div>
      <div class="footer-link-box">
        <p>Thông Tin về We Care</p>
        <ul>
          <li><a href="index.php">Trang chủ</a></li>
          <li><a href="about_us.php">Giới thiệu</a></li>
          <li><a href="contact_us.php">Liên hệ</a></li>
          <li><a href="services.php">Các dịch vụ</a></li>
          <li><a href="doctors.php">Bác sĩ</a></li>
        </ul>
      </div>
      <div class="footer-link-box">
        <p>Dịch vụ của chúng tôi</p>
        <ul>
          <li><a href="#">Chăm sóc răng miệng</a></li>
          <li><a href="#">Xét ngiệm máu</a></li>
          <li><a href="#">Phẫu thuật</a></li>
          <li><a href="#">Y tế</a></li>
        </ul>
      </div>
      <div class="footer-link-box">
        <p>Chăm sóc khách hàng</p>
        <ul>
          <li><a><i class="fas fa-phone-alt"> </i>
              +123 4567 89</a></li>

          <li><a><i class="fas fa-envelope"> </i>
              info@example.com</a></li>
        </ul>

      </div>


    </div>

    <div class="footer-bottom">
      <span class="footer-owner">Made By WeCare</span>
      <span class="copyright">&#169; Copyright 2024 - Công ty cổ phần công nghệ sức khoẻ WeCare</span>
    </div>
  </footer>

  <script>
  /*-services--*/
  var swiper = new Swiper(".mySwiperservices", {
    slidesPerView: 1,
    spaceBetween: 10,
    navigation: {
      nextEl: ".swiper-button-next",
      prevEl: ".swiper-button-prev",
    },
    breakpoints: {
      700: {
        slidesPerView: 2,
        spaceBetween: 40,
      },
      1024: {
        slidesPerView: 3,
        spaceBetween: 50,
      },
    },
  });
  /*--team--*/
  var swiper = new Swiper(".mySwiperteam", {
    slidesPerView: 1,
    spaceBetween: 10,
    pagination: {
      el: ".swiper-pagination",
      clickable: true,
    },
    breakpoints: {
      560: {
        slidesPerView: 2,
        spaceBetween: 20,
      },
      950: {
        slidesPerView: 3,
        spaceBetween: 40,
      },
      1250: {
        slidesPerView: 4,
        spaceBetween: 40,
      },
    },
  });
  /*--testimonials--*/
  var swiper = new Swiper(".mySwipertesti", {
    pagination: {
      el: ".swiper-pagination",
    },
  });
  </script>
  <!-- jQuery -->
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
</body>

</html>