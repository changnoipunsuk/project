<?php
session_start();
include('server.php');

?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>News</title>
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
      <h2>ข่าวสาร</h2>
      
    </div>

  </div>
</section>
<!-- ======= About Section ======= -->
<section id="events" class="events">
  <div class="container" data-aos="fade-up">

    <div class="section-title">
      <h2>ข่าวสาร</h2>
    </div>

    <div class="events-slider swiper-container" data-aos="fade-up" data-aos-delay="100">
      <div class="swiper-wrapper">

        <div class="swiper-slide">
          <div class="row event-item">
            <div class="col-lg-6">
              <img src="assets/img/elephant/n1.png" class="img-fluid" alt="">
            </div>
            <div class="col-lg-6 pt-4 pt-lg-0 content">
              <h3>การแสดงที่จังหวัดลำปาง</h3>
              <div class="price">
                <p><span>20 มิถุนายน 2564</span></p>
              </div>
              <p class="fst-italic">
                เมื่อวันที่ 20 มิถุนายน 2564 ได้มีการจัดแสดงที่ จังหวัดลำปาง อำเภอแจ้ห่ม 
                ตำบลบ้านสา เวลา 10.00-11.00
              </p>
              <ul>
                <li><i class="bi bi-check-circled"></i> การแสดงช้างนี้จัดขึ้นเพื่อชมความน่ารักของช้าง</li>
                <li><i class="bi bi-check-circled"></i> ช้างจำนวน 4 เชือกพร้อมทั้งคณะจัดแสดงโชว์ช้างได้จัดการแสดงให้เหล่านักท่องเที่ยว</li>
                <li><i class="bi bi-check-circled"></i> และคนในหมู่บ้านได้เห็นถึงความน่ารักและความสามารถของช้างและให้นักท่องเที่ยว</li>
                <li><i class="bi bi-check-circled"></i> ได้มีส่วนร่วมในการให้อาหารช้างหรือการเล่นกับช้างในคณะอีกด้วย</li>
              </ul>
              <p>
                ในการแสดงครั้งนี้ไม่ใช่แค่จัดการแสดงเพื่อความบันเทิงแต่ก็ยังมีควาญช้างที่มาให้เกร็ดความรู้เกี่ยวกับการเลี้ยงช้างให้กับนักท่องเที่ยวหรือคนในหมู่บ้านอีกด้วย
              </p>
            </div>
          </div>
        </div><!-- End testimonial item -->

        <div class="swiper-slide">
          <div class="row event-item">
            <div class="col-lg-6">
              <img src="assets/img/elephant/n2.jpg" class="img-fluid" alt="">
            </div>
            <div class="col-lg-6 pt-4 pt-lg-0 content">
              <h3>การแสดงที่จังหวัดเชียงใหม่</h3>
              <div class="price">
                <p><span>13 พฤศจิกายน 2564</span></p>
              </div>
              <p class="fst-italic">
                เมื่อวันที่ 13 พฤศจิกายน 2564 ได้มีการจัดแสดงที่ จังหวัดเชียงใหม่ อำเภอแม่แตง ตำบลม่วงน้อย เวลา 13.30-15.00
              </p>
              <ul>
                <li><i class="bi bi-check-circled"></i> การแสดงช้างครั้งนี้จัดขึ้นเพื่อให้นักท่องเที่ยวหรือผู้เข้ามาชม </li>
                <li><i class="bi bi-check-circled"></i> ได้ชมความงดงามของการแสดงโชว์ช้าง การแสดงโชว์ช้างในครั้งนี้มีนักท่องเที่ยวจำนวนมาก</li>
                <li><i class="bi bi-check-circled"></i> นักท่องเที่ยวทุกคนต่างเพลิดเพลินกับการแสดงโชว์ช้างในครั้งนี้เป็นอย่างมาก</li>
              </ul>
              <p>
                การแสดงโชว์ช้างในครั้งนี้คิดค่าเข้าชมการแสดงเพียง คนละ 90 บาทเพียงเท่านั้นควาญช้างทุกคนตั้งใจแสดงโชว์ช้างเพื่อให้นักท่อองเที่ยวได้มีความสุขกับการแสดงให้มากที่สุด
              </p>
            </div>
          </div>
        </div><!-- End testimonial item -->

        <div class="swiper-slide">
          <div class="row event-item">
            <div class="col-lg-6">
              <img src="assets/img/elephant/n3.png" class="img-fluid" alt="">
            </div>
            <div class="col-lg-6 pt-4 pt-lg-0 content">
              <h3>การแสดงที่จังหวัดเชียงใหม่</h3>
              <div class="price">
                <p><span>18 พฤศจิกายน 2564</span></p>
              </div>
              <p class="fst-italic">
                เมื่อวันที่ 18 ธันวาคม 2564 ได้มีการจัดแสดงที่ จังหวัดเชียงใหม่ ตำบลกื้ดช้าง อำเภอแม่แตง เวลา 14.00-15.00
              </p>
              <ul>
                <li><i class="bi bi-check-circled"></i> การแสดงช้างครั้งนี้จัดขึ้นเพื่อให้นักท่องเที่ยวหรือผู้เข้ามาชม </li>
                <li><i class="bi bi-check-circled"></i> ได้ชมความงดงามของการแสดงโชว์ช้าง การแสดงโชว์ช้างในครั้งนี้มีนักท่องเที่ยวจำนวนมาก</li>
                <li><i class="bi bi-check-circled"></i> นักท่องเที่ยวทุกคนต่างเพลิดเพลินกับการแสดงโชว์ช้างในครั้งนี้เป็นอย่างมาก</li>
              </ul>
              <p>
                การแสดงโชว์ช้างในครั้งนี้คิดค่าเข้าชมการแสดงเพียง คนละ 90 บาทเพียงเท่านั้นควาญช้างทุกคนตั้งใจแสดงโชว์ช้างเพื่อให้นักท่อองเที่ยวได้มีความสุขกับการแสดงให้มากที่สุด
              </p>
            </div>
          </div>
        </div><!-- End testimonial item -->
      </div>
      <div class="swiper-pagination"></div>
    </div>

  </div>
</section><!-- End About Section -->
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