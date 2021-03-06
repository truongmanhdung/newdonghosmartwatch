<!DOCTYPE html>
<?php
ob_start();
session_start();
?>
<html lang="">

<head>
    <!-- Global site tag (gtag.js) - Google Analytics -->
<script async src="https://www.googletagmanager.com/gtag/js?id=UA-193116547-1"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'UA-193116547-1');
</script>

  <meta charset="utf-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css" />
  <title>Smart Watch</title>
  <!-- fontawesome -->
  <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous" />
  <!-- gg font -->
  <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@1,100&display=swap" rel="stylesheet" />
  <!-- Bootstrap CSS -->
  <!-- link swiper -->
  <link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.css" />
  <link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.min.css" />
  <link rel="stylesheet" href="./bootstrap-5.0.0-beta1-dist/bootstrap-5.0.0-beta1-dist/css/bootstrap.min.css" />
  <!-- link css -->
  <link rel="stylesheet" href="./css/base.css" />
  <link rel="stylesheet" href="./css/main.css?v= <?php echo time(); ?>" />
  <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
  <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
  <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.3/html5shiv.js"></script>
      <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
</head>

<body>
  <div class="container-fluid">
    <header id="trangchu">
      <!-- navbar -->
      <nav class="navbar navbar-expand-lg navbar-light menu" style="z-index: 1000000000000;">
        <div class="container">
          <a class="navbar-brand" href="#">
            <img style="width: 60px;" src="./img/logosm-removebg-preview.png" alt="" class="logo1" />
          </a>
          <button class="navbar-toggler color" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon" style="color: white !important"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
              <li class="nav-item">
                <a class="nav-link nav-link_tt" href="index.php">Trang ch???</a>
              </li>
               <li class="nav-item">
                <a class="nav-link nav-link_tinhnang" href="dongho.php">?????ng h???</a>
              </li>
              <li class="nav-item">
                <a class="nav-link nav-link_tinhnang" href="donghothongminh.php">?????ng h??? th??ng minh</a>
              </li>
              <li class="nav-item">
                <a class="nav-link nav-link_manhinh" href="Donghonam.php">?????ng h??? nam</a>
              </li>
              <li class="nav-item">
                <a class="nav-link nav-link_vct" href="donghorolex.php">?????ng h??? rolex</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" class="nav-link_tintuc" href="donghocasio.php">?????ng h??? casio</a>
              </li>
              <li class="nav-item">
                <a class="nav-link nav-link_thongke" href="donghohublot.php">?????ng h??? hublot</a>
              </li>
              <?php
              if (isset($_GET['id'])) {
                $id = $_GET['id'];
                include "conn.php";
                $result = $conn->query("SELECT * FROM member where id = $id");
                while ($row = $result->fetch_assoc()) {
                  $name = $row['name'];
                }
                echo '
          <li class="nav-item">
            <div class="nav_user">
              <i class="fas fa-user"></i>
              <div class="user_hover">
              <p>' . $name . '</p>
              <p><a href="doipass.php?id=' . $id . '">?????i m???t kh???u</a></p>
              <p><a href="index.php">????ng xu???t</a></p>
              </div>
            </div>
          </li>
          ';
              }
              ?>

          </div>
      </nav>
      <!-- end navbar -->

      <div class="overlay"></div>
      <video playsinline autoplay muted loop style="opacity: 1; z-index: 100;">
        <source src="https://content.rolex.com/dam/watches/hubs/all-watches/videos/hub-collection-watches-cover.mp4" type="video/mp4" />
      </video>

      <div class="header-content container">
        <div class="row header-content_list">
          <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 header-content-item">
            <h1 style="font-size: 24px; z-index: 10000000000000;" class="header-content_header">
              ?????n v???i <span style="font-weight: bold;font-size: 30px">Smart Watch</span> b???n s??? t??m th???y nh???ng m???u ?????ng h??? sang tr???ng v?? l???ch l??m
            </h1>
            <p class="header-content_text" style="z-index: 10000000000000;">
              Thay ?????i th??? gi???i nh??? c??ng ngh??? s??? ch??? c?? t???i Smart Watch. <br>
              Ch??c m???ng b???n ???? tr??? th??nh th??nh vi??n c???a Smart Watch.<br>
              Ng??y h??m nay b???n s??? nh???n ???????c ??u ????i 10% t???ng h??a ????n mua h??ng, h??y mua h??ng ngay n??o.
            </p>

          </div>
        </div>
      </div>
      <!-- end header-content -->
    </header>
    <!-- end header-content -->
    <div class="message">
    <a href="tel:0365727226">
      <div class="tele"></div>
      <div class="telephone"></div>
      <div class="icon-phone">
        <i class="fas fa-phone-alt"></i>
      </div>
      <div class="message-icon">
        <div class="icon-message">
          <i class="fas fa-share"></i>
        </div>
        <div class="message-icon-2">
          <i class="fas fa-pen"></i>
        </div>
      </div>
      </a>
      <div class="message2">
        <div class="message2-top">
          <div class="message2-header">
            <h2 style="color: white">
              Ch??o B???n
            </h2>
            <div style="align-items: center; margin-top: 10px">
              <i class="tat-tb far fa-ellipsis-v"></i>
              <div class="tat-thong-bao">
                <i class="far fa-bell-slash"></i>
                <span>T???t th??ng b??o</span>
              </div>
            </div>
            <div style="align-items: center; margin-top: 10px">
              <i class="fas fa-angle-down"></i>
            </div>
          </div>
          <div class="message2-content">
            <div class="message2-content-left">
              <p style="color: white">Ch??c b???n 1 ng??y t???t l??nh!</p>
              <p style="color: white">
                <img src="https://twemoji.maxcdn.com/v/12.1.5/72x72/1f44b.png" alt="" />
                H??y c??ng tr?? chuy???n nh??!
              </p>
            </div>
            <div class="message2-content-right">
              <p style="color: white;">Smart Watch</p>
            </div>
          </div>
          <p class="message2-p" style="color: white;">Ch??ng t??i th?????ng tr??? l???i trong ??t ph??t.</p>
        </div>
        <div class="message2-input">
          <input type="text" class="form-control" placeholder="Nh???p n???i dung ..." aria-label="Username" aria-describedby="basic-addon1" />
          <div class="message2-icon">
            <i class="far fa-smile-wink"></i><span>POWERED BY</span>
          </div>
        </div>
      </div>
      <!-- end message2 -->
    </div>
    <!-- end message -->
    <!-- end header -->
    <main>
      <section class="product container">
        <div class="row product-list">
          <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6">
            <div class="product-content product3">
              <h3 class="product-hd">?????ng h??? th???nh h??nh nh???t hi???n nay</h3>
              <p>
                Chi???c ?????ng h??? Huawei Watch GT2 Pro 46mm d??y da v???i thi???t k??? ?????ng c???p, sang tr???ng v?? c??ng ngh??? 4.0
              </p>
              <a type="button" href="hoatdong.php" class="btn btn-product btn_hd btn-outline btn-ellipse e-primary">T??m hi???u th??m</a>
            </div>
          </div>

          <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6">
            <div class="img_product product4 img_hd">
              <img src="./img/img dh/637381162983643737_gt2-pro-day-da-1.webp" title="?????ng h??? th???nh h??nh nh???t" alt="" />
            </div>
          </div>
        </div>
        <div class="row product-list">
          <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6 product5">
            <div class="img_product img_kt">
              <img src="./img/img dh/637394913767077286_Apple Watch Series 6 GPS 40mm den 1.webp" title="?????ng h??? nam ?????ng c???p nh???t" alt="" />
            </div>
          </div>

          <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6 product6">
            <div class="product-content ">
              <h3 class="product-kt">?????ng h??? c??ng ngh??? nh???t t??? tr?????c ?????n nay</h3>
              <p>
                Chi???c ?????ng h??? Apple Watch Series 6 GPS 40mm vi???n nh??m d??y cao su s??? h???u t???t c??? c??c t??nh n??ng ??u vi???t c???a m???t chi???c ?????ng h??? th??ng minh
              </p>
              <a type="button" href="hoatdong.php" class="btn btn-product btn_kt btn_hd btn-outline btn-ellipse e-primary">T??m hi???u th??m</a>
            </div>
          </div>
        </div>
      </section>
      <!-- end section product-->

      <h3 style="text-align: center" id="manhinh">S???n Ph???m b??n ch???y</h3>
      <div class="swiper-container product11">
        <!-- Additional required wrapper -->
        <div class="swiper-wrapper">
          <!-- Slides -->
          <?php
           include "conn.php";
          $result = $conn->query("SELECT * FROM sanpham");
          if ($result->num_rows > 0) {
            while ($row = $result->fetch_assoc()) {
              echo '<div class="swiper-slide">
                  <img src="' . $row['anh'] . '" alt="" />
                  <div class="slide_content">
                    <div class="slide_content_name">
                      <h5 style="font-size: 16px; margin: 10px 0;">' . $row['tensp'] . '</h5>
                    </div>
                    <div class="slide_buttom">
                      <button type="button" class="btn slide_btn">40 mm</button>
                      <button type="button" class="btn slide_btn">44 mm</button>
                    </div>
                    <div class="slide_price">
                      <p style="text-align: center !important;"><span class="price_sp" style="text-align: center !important;margin: 10px auto;font-size:16px; color: red;">Gi??: ' . number_format($row['gia']) . '??</span></p>
                    </div>
                    <button type="button" class="btn btn-primary btn-ellipse btn_sp"><a href="sanpham.php?id=' . $row['id'] . '">Mua ngay</a></button>
                  </div>
                </div>';
            }
          }

          ?>
          <form action="" method="post"></form>
        </div>
        <!-- If we need pagination -->
        <div class="swiper-pagination"></div>

        <!-- If we need navigation buttons -->
        <div class="swiper-button-prev"></div>
        <div class="swiper-button-next"></div>

        <!-- If we need scrollbar -->
        <div class="swiper-scrollbar"></div>
      </div>
      <!-- end swiper -->

      <section class="REVIEW" id="review">
        <h3 style="text-align: center">REVIEW</h3>
        <h6>Nh???ng l???i review c???a m???i ng?????i</h6>
        <div id="carouselExampleControls" class="carousel slide product10" data-bs-ride="carousel">
          <div class="carousel-inner">
            <div class="carousel-item active">
              <i class="far fa-quote-left"></i>
              <i class="far fa-quote-right"></i>
              <img src="./img/review/01-5-3.jpg" class="d-block img1" alt="..." />

              <p>
                Ho???t ?????ng cho b???t k??? ?????c ??i???m k??? thu???t n??o. T??i l?? m???t nh??
                ph??t tri???n web v?? mua c??c ch??? ????? lorem kh?? th?????ng xuy??n. Nh??
                m???i khi, c??i cu???i c??ng r???t ?????p v?? d??? t??y ch???nh theo ?????c ??i???m
                k??? thu???t c???a kh??ch h??ng c???a t??i.
              </p>
              <img class="img_icon" src="./img/???Pngtree???simple dividing line cartoon hand_3910347.png" alt="" />
              <h5>M???nh D??ng</h5>
              <h6>Ng?????i d??ng ???ng d???ng</h6>
            </div>
            <div class="carousel-item">
              <i class="far fa-quote-left"></i>
              <i class="far fa-quote-right"></i>
              <img src="./img/review/02-2-3.jpg" class="d-block img1" alt="..." />

              <p>
                Ho???t ?????ng cho b???t k??? ?????c ??i???m k??? thu???t n??o. T??i l?? m???t nh??
                ph??t tri???n web v?? mua c??c ch??? ????? lorem kh?? th?????ng xuy??n. Nh??
                m???i khi, c??i cu???i c??ng r???t ?????p v?? d??? t??y ch???nh theo ?????c ??i???m
                k??? thu???t c???a kh??ch h??ng c???a t??i.
              </p>
              <img class="img_icon" src="./img/???Pngtree???simple dividing line cartoon hand_3910347.png" alt="" />
              <h5>M???nh D??ng</h5>
              <h6>Ng?????i d??ng ???ng d???ng</h6>
            </div>
            <div class="carousel-item">
              <i class="far fa-quote-left"></i>
              <i class="far fa-quote-right"></i>
              <img src="./img/review/03-2-3.jpg" class="d-block img1" alt="..." />

              <p>
                Ho???t ?????ng cho b???t k??? ?????c ??i???m k??? thu???t n??o. T??i l?? m???t nh??
                ph??t tri???n web v?? mua c??c ch??? ????? lorem kh?? th?????ng xuy??n. Nh??
                m???i khi, c??i cu???i c??ng r???t ?????p v?? d??? t??y ch???nh theo ?????c ??i???m
                k??? thu???t c???a kh??ch h??ng c???a t??i.
              </p>
              <img class="img_icon" src="./img/???Pngtree???simple dividing line cartoon hand_3910347.png" alt="" />
              <h5>M???nh D??ng</h5>
              <h6>Ng?????i d??ng ???ng d???ng</h6>
            </div>
          </div>
          <button class="carousel-control-prev carousel-control-prev1" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
          </button>
          <button class="carousel-control-next carousel-control-next1" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
          </button>
        </div>
      </section>
      <!-- end review -->
      <section class="section_video">
        <div class="wpb_wrapper product2">
          <div class="video wow slideInUp" data-wow-delay="0.2s" style="
                visibility: visible;
                animation-delay: 0.2s;
                animation-name: slideInUp;
              ">
            <a href="https://www.youtube.com/watch?v=HO3n-3JIIlY&ab_channel=Ho%E1%BA%B5ngReV" class="play-btn video-popup"><img src="./img/review/play-btn.png" alt="" /></a>

            <h1 class="mtb-25 text-white text-uppercase">XEM VIDEO</h1>
            <p class="text-white text-bold">
              Xem video s???n ph???m c???a ch??ng t??i ????? bi???t th??m chi t???t
            </p>
          </div>
        </div>
      </section>
      <div class="back-to-top">
        <i class="fas fa-angle-up"></i>
      </div>
      <!-- back-to-top -->
      <section id="tinhnang" class="tinhnang container">
        <h3 class="tinhnang_heading">Ch??nh s??ch c???a ch??ng t??i</h3>
        <h6 class="tinhnang_text">Lu??n ?????t quy???n l???i c???a kh??ch h??ng l??n h??ng ?????u</h6>
        <div class="tinhnang_content">
          <div class="row tinhnang_content_list">
            <div class="col-xs-12 col-sm-12 col-md-4 col-lg-4 tinhnang_item tinhnang_item_left product7">
              <div class="item_content">
                <div class="tinhnang_icon btn-ellipse">
                  <i class="far fa-heart"></i>
                </div>
                <div class="tinhnang_item_text">
                  <h4>V???N CHUY???N NHANH</h4>
                  <p>
                    L??u tr??? v?? s??? d???ng ngu???n d??? li???u kh???ng l??? v?? l???i ??ch chung
                  </p>
                </div>
              </div>
              <div class="item_content">
                <div class="tinhnang_icon btn-ellipse">
                  <i class="far fa-heart"></i>
                </div>
                <div class="tinhnang_item_text">
                  <h4>HO??N TR??? H??NG</h4>
                  <p>
                    N???u b???n g???p v???n ????? v??? ch???t l?????ng ho???c kh??ng h??i l??ng v??? d???ch v??? c???a ch??ng t??i, ch??ng t??i s???n s??ng ho??n l???i ti???n trong 15 ng??y
                  </p>
                </div>
              </div>
            </div>

            <div class="col-xs-12 col-sm-12 col-md-4 col-lg-4 tinhnang_icon_img product8">
              <img src="img/img dh/637381162983643737_gt2-pro-day-da-1.webp" alt="" />
            </div>

            <div class="col-xs-12 col-sm-12 col-md-4 col-lg-4 tinhnang_item tinhnang_item_right product9">
              <div class="item_content">
                <div class="tinhnang_icon btn-ellipse tinhnang_icon_right">
                  <i class="far fa-star"></i>
                </div>
                <div class="tinhnang_item_text">
                  <h4>THANH TO??N NHANH</h4>
                  <p>
                    ????? l??m cho s???n ph???m c???a b???n hi???n th??? v?? d??? d??ng ti???p c???n
                    nhu c???u c???a kh??ch h??ng.
                  </p>
                </div>
              </div>
              <div class="item_content">
                <div class="tinhnang_icon btn-ellipse tinhnang_icon_right">
                  <i class="far fa-star"></i>
                </div>
                <div class="tinhnang_item_text">
                  <h4>GI?? C??? H???P L??</h4>
                  <p>
                    Gi?? c??? ?????ng h??? c??ng ngh??? ??? Smart Watch lu??n ??? m???c t???m trung, ph?? h???p v???i t???t c??? m???i ng?????i t??? sinh vi??n ?????n nh??n vi??n v??n ph??ng.
                  </p>
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>
      <!-- end section li??n h??? -->
      <section class="container" id="tintuc">
        <h3 style="text-align: center">T???M NH??N V?? NHI???M V???</h3>
        <h6>
          Ch??ng t??i lu??n kh??ng ng???ng c??? g???ng ????? mang ?????n nh???ng g?? t???t ?????p nh???t d??nh cho kh??ch h??ng.
        </h6>
        <div class="product2">
          <div class="row product2_list">
            <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6 product12">
              <div class="product2_item">
                <p class="product2_item_list product2_item_list1">
                  <span>NHI???M V??? C???A CH??NG T??I</span><span>+</span>
                </p>
                <div class="product2_content">
                  <p>
                    ??? K???t n???i nhu c???u v?? kh??? n??ng cung ???ng h??ng h??a, d???ch v???
                    v???i t??ch h???p n???n t???ng c??ng ngh??? 4.0. ??? X??c ?????nh l???i gi??
                    tr??? treu c???a nguy??n t???c n???n kinh t??? chia s???. ??? T???o n???n
                    t???ng k???t n???i c??c gi?? tr??? ????ch th???c v???i ??u ti??n gi?? tr???
                    c???ng ?????ng.
                  </p>
                </div>
              </div>
              <div class="product2_item">
                <p class="product2_item_list product2_item_list2">
                  <span>T???M NH??N C???A CH??NG T??I</span><span>+</span>
                </p>
                <div class="product2_content">
                  <p>
                    ??? N???m trong top 10 c??ng ty c??ng ngh??? h??ng ?????u t???i th???
                    tr?????ng Ch??u ?? v???i gi?? tr??? c???t l??i l?? chia s??? h??ng h??a v??
                    d???ch v???.
                  </p>
                </div>
              </div>
            </div>

            <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6 product13">
              <div class="">
                <img src="./img/img dh/637394913767077286_Apple Watch Series 6 GPS 40mm den 1.webp" alt="">
              </div>
            </div>
          </div>
        </div>
        <!-- end product2 -->
      </section>
      <section class="section_video2" id="download">
        <div class="wpb_wrapper">
          <div class="video wow slideInUp" data-wow-delay="0.2s" style="
                visibility: visible;
                animation-delay: 0.2s;
                animation-name: slideInUp;
              ">
            <div class="product14">
              <h3 class="mtb-25 text-white text-uppercase">
                ????ng Nh???p ho???c ????ng K?? ngay t??i kho???n members c???a Smart Watch
              </h3>
              <h6>B???n s??? nh???n ???????c r???t nhi???u ??u ????i khi tr??? th??nh th??nh vi??n c???a Smart Watch</h6>
              <div class="btn_header">
                <button type="button" class="btn btn-outline btn-left">
                  <a href="dangki.php"><i class="fas fa-sign-in"></i></i>????ng k??</a>
                </button>
                <button type="button" class="btn btn-outline btn-right">
                  <a href="dangnhap.php"><i class="fas fa-user-hard-hat"></i> ????ng Nh???p</a>
                </button>
              </div>
              <h3 class="mtb-25 text-white text-uppercase" style="margin-top: 40px;">
                ????NG K?? TIN NHANH
              </h3>
            </div>

            <form action="" method="POST" role="form" class="product15">
              <div class="form-group form-group_test">
                <input type="email" class="input_1" id="exampleInputEmail1" aria-describedby="emailHelp" required placeholder="?????a ch??? email c???a b???n" />
                <span></span>
                <input type="submit" class="input_2" id="exampleInputEmail1" aria-describedby="emailHelp" required value="G???i email" />
              </div>
            </form>
          </div>
        </div>
      </section>

      <section class="container blog" id="blog">
        <h3 style="text-align: center">B??I ????NG TR??N BLOG</h3>
        <h6>
          Mua ?????ng h??? c??ng ngh??? t???i Smart Watch lu??n l?? l???a ch???n ????ng ?????n.
        </h6>
        <div id="carouselExampleIndicators" class="carousel slide product16" data-bs-ride="carousel">
          <div class="carousel-indicators btn_blog">
            <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
            <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
          </div>
          <div class="carousel-inner">
            <div class="carousel-item active">
              <div class="row blog_list">
                <div class="col-xs-12 col-sm-12 col-md-4 col-lg-4 blog_item">
                  <div class="blog_img">
                    <img src="./img/blog/02-6.jpg" alt="" />
                  </div>
                  <div class="blog_content">
                    <h4>
                      <a href="http://aviglobal.unaux.com/managing-office-culture/">B???n mu???n t??m m???t chi???c ?????ng h??? sang tr???ng</a>
                    </h4>
                    <p>
                      Th???i ??i???m kh??ng th??? t???t h??n cho n???n t???ng giao d???ch t???p
                      trung v??o quy ?????nh Qume, n??i c??ng b??? m???t lo???t d???ch v???
                      ???????c c???i ti???n v??o th??? Hai. Ngay c??? trong ...
                    </p>
                    <div class="news-meta">
                      <div class="date">14/02/2017</div>
                      <div class="more_hove">
                        <div class="read-more read-more1">
                          <a href="blog.php">?????c th??m ></a>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="col-xs-12 col-sm-12 col-md-4 col-lg-4 blog_item">
                  <div class="blog_img">
                    <img src="./img/blog/01-8.jpg" alt="" />
                  </div>
                  <div class="blog_content">
                    <h4>
                      <a href="blog.php">?????ng h??? nam l???ch l??m </a>
                    </h4>
                    <p>
                      Th???i ??i???m kh??ng th??? t???t h??n cho n???n t???ng giao d???ch t???p
                      trung v??o quy ?????nh Qume, n??i c??ng b??? m???t lo???t d???ch v???
                      ???????c c???i ti???n v??o th??? Hai. Ngay c??? trong ...
                    </p>
                    <div class="news-meta">
                      <div class="date">14/02/2017</div>
                      <div class="more_hove">
                        <div class="read-more read-more1">
                          <a href="blog.php">?????c th??m ></a>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="col-xs-12 col-sm-12 col-md-4 col-lg-4 blog_item">
                  <div class="blog_img">
                    <img src="./img/img dh/product/637369907197319165_Apple??Watch SE GPS??40mm dai dien.jfif" alt="" />
                  </div>
                  <div class="blog_content">
                    <h4>
                      <a href="blog.php">?????ng h??? c??ng ngh??? m???i nh???t</a>
                    </h4>
                    <p>
                      Th???i ??i???m kh??ng th??? t???t h??n cho n???n t???ng giao d???ch t???p
                      trung v??o quy ?????nh Qume, n??i c??ng b??? m???t lo???t d???ch v???
                      ???????c c???i ti???n v??o th??? Hai. Ngay c??? trong ...
                    </p>
                    <div class="news-meta">
                      <div class="date">14/02/2017</div>
                      <div class="more_hove">
                        <div class="read-more read-more1">
                          <a href="blog.php">?????c th??m ></a>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="carousel-item">
              <div class="row blog_list">
                <div class="col-xs-12 col-sm-12 col-md-4 col-lg-4 blog_item">
                  <div class="blog_img">
                    <img src="./img/blog/03-6.jpg" alt="" />
                  </div>
                  <div class="blog_content">
                    <h4>
                      <a href="blog.php">Lu??n c???p nh???t su th??? c???a th??? gi???i, ????n ?????u c??ng ngh??? v??? ?????ng h??? th??ng minh</a>
                    </h4>
                    <p>
                      Th???i ??i???m kh??ng th??? t???t h??n cho n???n t???ng giao d???ch t???p
                      trung v??o quy ?????nh Qume, n??i c??ng b??? m???t lo???t d???ch v???
                      ???????c c???i ti???n v??o th??? Hai. Ngay c??? trong ...
                    </p>
                    <div class="news-meta">
                      <div class="date">14/02/2017</div>
                      <div class="more_hove">
                        <div class="read-more read-more1">
                          <a href="blog.php">?????c th??m ></a>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="col-xs-12 col-sm-12 col-md-4 col-lg-4 blog_item">
                  <div class="blog_img">
                    <img src="./img/product/nam/8.png" alt="" />
                  </div>
                  <div class="blog_content">
                    <h4>
                      <a href="blog.php">?????ng h??? nam sang tr???ng v?? l???ch l??m</a>
                    </h4>
                    <p>
                      Th???i ??i???m kh??ng th??? t???t h??n cho n???n t???ng giao d???ch t???p
                      trung v??o quy ?????nh Qume, n??i c??ng b??? m???t lo???t d???ch v???
                      ???????c c???i ti???n v??o th??? Hai. Ngay c??? trong ...
                    </p>
                    <div class="news-meta">
                      <div class="date">14/02/2017</div>
                      <div class="more_hove">
                        <div class="read-more read-more1">
                          <a href="blog.php">?????c th??m ></a>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="col-xs-12 col-sm-12 col-md-4 col-lg-4 blog_item">
                  <div class="blog_img">
                    <img src="./img/blog/mike-enerio-tmqsL3BmZ80-unsplash-710x458-1.jpg" alt="" />
                  </div>
                  <div class="blog_content">
                    <h4>
                      <a href="blog.php">Ng?????i s??ng t???o c???a Yearn. Finance cho bi???t anh ???y ????
                        tho??t kh???i DeFi, nh??ng d??? ??n c?? s???c m???nh ??i???m chu???n</a>
                    </h4>
                    <p>
                      Yearn. Finance ??ang qu???n l?? qu?? tr??nh chuy???n ?????i l??nh
                      ?????o ngay b??y gi??? v?? d?????ng nh?? ??ang l??m ??i???u ???? m???t c??ch
                      hi???u qu???.
                    </p>
                    <div class="news-meta">
                      <div class="date">21/12/2020</div>
                      <div class="more_hove">
                        <div class="read-more read-more1">
                          <a href="blog.php">?????c th??m > </a>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
          </button>
          <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
          </button>
        </div>
        <div class="wpb_wrapper ">
          <a class="ot-btn btn_hd btn btn-ellipse" href="blog.php" target="_self">Xem t???t c???</a>
        </div>
      </section>
      <section class="contact container" id="contact">
        <h3 style="text-align: center">C???ng T??c</h3>
        <h6>Ch??ng t??i th??ch c???ng t??c v???i ng?????i d??ng c???a m??nh</h6>

        <div class="row">
          <div class="col-xs-12 col-sm-12 col-md-4 col-lg-4 product17">
            <div class="contact_item">
              <div class="contact_item_header">
                <i class="fas fa-address-card"></i>
              </div>
              <div class="contact_item_content">
                <h4>Address</h4>
                <h4>Smart Watch</h4>
                <p>2 Kallang Pudding Road, #02-11, Mactech Building, Singapore (349307)</p>
                <h4>Smart Watch Address</h4>
                <p>No. 60, Lane 132 Cau Dien, Minh Khai Ward, Bac Tu Liem District, Hanoi City, Vietnam
                </p>
                <p>info@gstore.social</p>
              </div>

            </div>
            <div class="contact_item">
              <div class="contact_item_header">
                <i class="fas fa-history"></i>
              </div>
              <div class="contact_item_content">
                <h4>Business hours</h4>
                <p>Mon-Fri : 9 to 18</p>
                <p>Sat: 9 to 13</p>
              </div>
            </div>
          </div>

          <div class="col-xs-12 col-sm-12 col-md-8 col-lg-8 product18">
            <form action="" method="POST" role="form">
              <div class="row">
                <div class="col-xs-12 col-sm-6 col-md-6 col-lg-6">
                  <input class="form-control me-2" type="search" required placeholder="Nh???p t??n" aria-label="Search">
                </div>
                <div class="col-xs-12 col-sm-6 col-md-6 col-lg-6">
                  <input class="form-control me-2" type="email" placeholder="Nh???p Email" aria-label="" required placeholder="Enter Email" aria-label="Search">
                </div>
              </div>
              <div class="row">
                <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                  <input class="form-control me-2" type="search" required placeholder="Nh???p ch??? ?????" aria-label="Search">
                </div>
              </div>
              <div class="row">
                <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                  <input class="form-control me-2 message_to" type="search" required placeholder="Nh???p tin nh???n" aria-label="Search">
                </div>
              </div>
              <button type="submit" class="btn btn-ellipse btn_send btn-primary">G???I TIN NH???N</button>
            </form>
          </div>
        </div>
      </section>
      <!-- end section_contact -->

    </main>
    <!-- end main -->
    <footer>
      <h3>FOLLOW CH??NG T??I</h3>
      <h6>H??y k???t n???i v???i ch??ng t??i</h6>
      <div class="social-icons">
        <a href="#"><i class="fab fa-twitter" aria-hidden="true"></i></a>
        <a href="#"><i class="fab fa-facebook" aria-hidden="true"></i></a>
        <a href="#"><i class="fab fa-pinterest" aria-hidden="true"></i></a>
        <a href="#"><i class="fab fa-linkedin" aria-hidden="true"></i></a>
        <a href="#"><i class="fab fa-behance" aria-hidden="true"></i></a>
      </div>
      <p>?? 2017 ThemeModern. All right reserved.</p>
    </footer>
    <!-- end footer -->
  </div>
  <!-- end container -->
  <!-- jQuery -->
  <script src="./js/jquery-3.5.1.min.js"></script>
  <!-- Bootstrap JavaScript -->
  <!-- link swiper -->
  <script src="./js/header.js"></script>
  <script script src="https://unpkg.com/swiper/swiper-bundle.js"></script>
  <script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>
  <script src="./js/validator.js"></script>
  <!-- link validate js-->
  <script src="./bootstrap-5.0.0-beta1-dist/bootstrap-5.0.0-beta1-dist/js/bootstrap.min.js"></script>
  <script src="./js/cuontrang.js"></script>
  <script src="./js/query.js"></script>
  <script></script>
</body>

</html>