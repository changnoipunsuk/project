<?php
session_start();
include('server.php');


?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Contact</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="assets/img/favicon.png" rel="icon">
  <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Kanit:wght@600&display=swap" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="assets/vendor/animate.css/animate.min.css" rel="stylesheet">
  <link href="assets/vendor/aos/aos.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
  <link href="assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
  <link href="assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="assets/css/style.css" rel="stylesheet">

  <!-- =======================================================
  * Template Name: Restaurantly - v3.1.0
  * Template URL: https://bootstrapmade.com/restaurantly-restaurant-template/
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
</head>

<body>



    <!-- ======= Header ======= -->
  <header id="header" class="fixed-top d-flex align-items-cente">
    <div class="container-fluid container-xl d-flex align-items-center justify-content-lg-between">
      <!-- Uncomment below if you prefer to use an image logo -->
      <!-- <a href="index.html" class="logo me-auto me-lg-0"><img src="assets/img/logo.png" alt="" class="img-fluid"></a>-->

      <nav id="navbar" class="navbar order-last order-lg-0">
        <ul>
          <li><a class="" href="http://localhost/project/index.php">หน้าแรก</a></li>
          <li class="dropdown"><a href="#"><span>เกี่ยวกับเรา</span> <i class="bi bi-chevron-down"></i></a>
            <ul>
              <li><a href="http://localhost/project/history.php">ประวัติความเป็นมา</a></li>
              <li class="dropdown"><a href="http://localhost/project/elephant.php"><span>ช้างในคณะ</span> <i class="bi bi-chevron-right"></i></a>
                <ul>
                  <li><a href="http://localhost/project/elephant1.php">อิ่มบุญ</a></li>
                  <li><a href="http://localhost/project/elephant2.php">วาเลนไทน์</a></li>
                  <li><a href="http://localhost/project/elephant3.php">เหมยลี่</a></li>
                  <li><a href="http://localhost/project/elephant4.php">ทับทิมสยาม</a></li>
                </ul>
              </li>
              <li><a href="http://localhost/project/idea.php">ความเชื่อเกี่ยวกับช้าง</a></li>
              <li><a href="http://localhost/project/care.php">การเลี้ยงดูช้าง</a></li>
            </ul>
          </li>
          <li class="dropdown"><a href="#"><span>ข่าวสาร</span> <i class="bi bi-chevron-down"></i></a>
            <ul>
              <li><a href="http://localhost/project/news.php">ข่าวสารการแสดง</a></li>
              <li><a href="http://localhost/project/calendar.php">ปฏิทินการแสดง</a></li>
              <li><a href="http://localhost/project/img.php">ภาพกิจกรรม</a></li>
            </ul>
          </li>
          <li class="dropdown"><a href="#"><span>การแสดง</span> <i class="bi bi-chevron-down"></i></a>
            <ul>
              <li><a href="http://localhost/project/show.php">รายละเอียดการแสดง</a></li>
              <li><a href="http://localhost/project/typeshow.php">ประเภทการแสดง</a></li>
            </ul>
          </li>
          <li class="dropdown"><a href="#"><span>บุคลากร</span> <i class="bi bi-chevron-down"></i></a>
            <ul>
              <li><a href="http://localhost/project/manager.php">คณะช้างน้อยปันสุข</a></li>
              <li><a href="http://localhost/project/creator.php">คณะผู้จัดทำ</a></li>
            </ul>
          </li>
          <li><a class="nav-link scrollto" href="http://localhost/project/faq.php">คำถามที่พบบ่อย</a></li>
          <li><a class="nav-link scrollto" href="http://localhost/project/ref.php">แหล่งอ้างอิง</a></li>
          <li><a href="http://localhost/project/contact.php">ติดต่อ</a></li>
          <?php if (isset($_SESSION['username'])) : ?>
            &nbsp;

            <li class="dropdown"><a href="#"><span><?php echo $_SESSION['username']; ?></span> <i class="bi bi-chevron-down"></i></a>
              <ul>
                <li><a href="assets/img/coupon.png">ส่วนลดของฉัน</a></li>
                <li><a href="http://localhost/project/updateprofile.php">แก้ไขโปรไฟล์</a></li>
                <li><a href="http://localhost/project/delete.php">ลบโปรไฟล์</a></li>
                <li><a href="index.php?logout='1'" onclick="return confirm('ยืนยันการออกจากระบบ');">ออกจากระบบ</a></li>
              <?php endif ?>
              </ul>
            </li>
        </ul>
        <i class="bi bi-list mobile-nav-toggle"></i>
      </nav><!-- .navbar -->
      <?php if (!isset($_SESSION['username'])) : ?>
        <a href="http://localhost/project/register.php" class="book-a-table-btn scrollto d-none d-lg-flex">Sign Up</a>
        <a href="http://localhost/project/login.php" class="book-a-table-btn scrollto d-none d-lg-flex">Login</a>
      <?php endif ?>
    </div>

  </header><!-- End Header -->
  <section class="breadcrumbs">
    <div class="container">

      <div class="d-flex justify-content-between align-items-center">
        <h2>ติดต่อ</h2>

      </div>

    </div>
  </section>
  <!-- ======= Contact Section ======= -->
  <section id="contact" class="contact">
    <div class="container" data-aos="fade-up">

      <div class="section-title">
        <p>แผนที่</p>
      </div>
    </div>

    <div data-aos="fade-up">
      <iframe style="border:0; width: 100%; height: 550px;" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3773.9030722106195!2d98.92283931489901!3d18.93568398716859!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x30da3dd7c28c8e2b%3A0x10a8505e97409f24!2z4Lib4Liy4LiH4LiK4LmJ4Liy4LiH4LmB4Lih4LmI4Lij4Li04Lih!5e0!3m2!1sth!2sth!4v1638624703381!5m2!1sth!2sth" frameborder="0" allowfullscreen></iframe>
    </div>

    <div class="container" data-aos="fade-up">

      <div class="row mt-5">

        <div class="col-lg-4">
          <div class="info">
            <div class="address">

              <i class="bi bi-geo-alt"></i>
              <h4>ที่อยู่:</h4>
              <p>ปางช้างแม่ริมเลขที่ 96 หมู่ 10 ตำบลแม่แรมอำเภอแม่ริมจังหวัดเชียงใหม่รหัสไปรษณีย์ 50180
              </p>
            </div>


            <div class="open-hours">
              <i class="bi bi-clock"></i>
              <h4>เวลาเปิด-ปิด:</h4>
              <p>
                จันทร์-เสาร์:<br>
                08:00 - 16:00
              </p>
            </div>

            <div  class="email">
              <i  class="bi bi-envelope"></i>
              <h4>อีเมล:</h4>
              <p><a href="mailto::changnoipunsuk@gmail.com">changnoipunsuk@gmail.com</a>
              </p>
            </div>

            <div class="phone">
              <i class="bi bi-phone"></i>
              <h4>โทรศัพท์:</h4>
              <p>06-5459-2588</p>
            </div>

          </div>

        </div>
        

      </div>

    </div>
  </section><!-- End Contact Section -->
  </main><!-- End #main -->

  <!-- ======= Footer ======= -->
  <footer id="footer">


    <div class="container">
      <div class="copyright">
        &copy; Copyright <strong><span>Changnoi Punsuk</span></strong>. All Rights Reserved
      </div>
      <div class="credits">
        <!-- All the links in the footer should remain intact. -->
        <!-- You can delete the links only if you purchased the pro version. -->
        <!-- Licensing information: https://bootstrapmade.com/license/ -->
        <!-- Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/restaurantly-restaurant-template/ -->
        Designed by <a href="https://bootstrapmade.com/">Changnoi Punsuk Group</a>
      </div>
    </div>
  </footer><!-- End Footer -->

  <div id="preloader"></div>
  <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  <!-- Vendor JS Files -->
  <script src="assets/vendor/aos/aos.js"></script>
  <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="assets/vendor/glightbox/js/glightbox.min.js"></script>
  <script src="assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
  <script src="assets/vendor/php-email-form/validate.js"></script>
  <script src="assets/vendor/swiper/swiper-bundle.min.js"></script>

  <!-- Template Main JS File -->
  <script src="assets/js/main.js"></script>

</body>

</html>