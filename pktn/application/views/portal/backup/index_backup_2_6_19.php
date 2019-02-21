<!DOCTYPE html>
<html>

<head>
  <meta charset="utf-8">
  <title>PORTAL APLIKASI DITJEN PKTN</title>


  <!-- mobile responsive meta -->
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

  <!-- Slick Carousel -->
  <link rel="stylesheet" href="<?php echo base_url(); ?>theme/plugins/slick/slick.css">
  <link rel="stylesheet" href="<?php echo base_url(); ?>theme/plugins/slick/slick-theme.css">
  <!-- FancyBox -->
  <link rel="stylesheet" href="<?php echo base_url(); ?>theme/plugins/fancybox/jquery.fancybox.min.css">

  <!-- Stylesheets -->
  <link href="<?php echo base_url(); ?>theme/css/style.css" rel="stylesheet">

  <!--Favicon-->
  <link rel="shortcut icon" href="<?php echo base_url(); ?>theme/images/favicon.png" type="image/png">
  <link rel="icon" href="<?php echo base_url(); ?>theme/images/favicon.png" type="image/png">

  <style type="text/css">
    .header-wrapper{
      /*position: fixed !important;
      z-index: 99999;
      width: 100%;*/
      /*margin-bottom: 50px;*/
    }

    .responsive-img {
      max-width: 80%;
      /*max-height: 100px;*/
    }

    .responsive-img-pktn {
      max-width: 80%;
      /*max-height: 100px;*/
    }
  </style>

</head>


<body>
  <div class="page-wrapper">
    <!-- Preloader -->
    <!-- <div class="preloader"></div> -->
    <!-- Preloader -->


<div class="header-wrapper">
  <!--header top-->
  <div class="header-top">
        <div class="container clearfix">
              <div class="top-left">
                    <h6>Portal Aplikasi Perijinan Direktorat Jenderal Perlindungan Konsumen dan Tertib Niaga, Kementerian Perdagangan</h6>
              </div>
              <div class="top-right">
                    <ul class="social-links">
                          <li>
                                <a href="#">
                                      <i class="fa fa-facebook" aria-hidden="true"></i>
                                </a>
                          </li>
                          <li>
                                <a href="#">
                                      <i class="fa fa-twitter" aria-hidden="true"></i>
                                </a>
                          </li>
                          <li>
                                <a href="#">
                                      <i class="fa fa-google-plus" aria-hidden="true"></i>
                                </a>
                          </li>
                          <li>
                                <a href="#">
                                      <i class="fa fa-instagram" aria-hidden="true"></i>
                                </a>
                          </li>
                          <li>
                                <a href="#">
                                      <i class="fa fa-pinterest-p" aria-hidden="true"></i>
                                </a>
                          </li>
                    </ul>
              </div>
        </div>
  </div>
  <!--header top-->

  <!--Header Upper-->
  <section class="header-uper">
        <div class="container clearfix" >
            <div class="col-md-6">
              <a href="index.html">
                <img src="http://ditjenpktn.kemendag.go.id/theme/default/assets/images/repository/header-kemendag-logo.png" class="responsive-img" alt="">
              </a>
              <a href="index.html">
                <img src="http://ditjenpktn.kemendag.go.id/theme/default/assets/images/repository/header-kemendag-logo-text.png" class="responsive-img-pktn" alt="">
              </a>
            </div>
              <!-- <div class="logo">
                    <figure>
                          <a href="index.html">
                              <img src="http://ditjenpktn.kemendag.go.id/theme/default/assets/images/repository/header-kemendag-logo.png" class="responsive-img" alt="">
                          </a>
                    </figure>
                    <figure>
                          <a href="index.html">
                            <img src="http://ditjenpktn.kemendag.go.id/theme/default/assets/images/repository/header-kemendag-logo-text.png" class="responsive-img-pktn" alt="">
                          </a>
                    </figure>
              </div>
              <div class="logo">
                <a href="index.html">
                  <img src="http://ditjenpktn.kemendag.go.id/theme/default/assets/images/repository/header-kemendag-logo-text.png" class="responsive-img-pktn" alt="">
                </a>
              </div> -->
              <div class="right-side">
                    <!-- <ul class="contact-info">
                          <li class="item">
                                <div class="icon-box">
                                      <i class="fa fa-envelope-o"></i>
                                </div>
                                <strong>Email</strong>
                                <br>
                                <a href="#">
                                      <span>contact.us@kemendag.go.id</span>
                                </a>
                          </li>
                          <li class="item">
                                <div class="icon-box">
                                      <i class="fa fa-phone"></i>
                                </div>
                                <strong>Phone</strong>
                                <br>
                                <span>+(62)-21-3858171</span>
                          </li>
                    </ul> -->
                    <div class="link-btn" style="margin-top: 10%;">
                          <a href="#" class="btn-style-one" onclick="login_usrnm()">Login</a>
                    </div>
              </div>
        </div>
  </section>
  <!--Header Upper-->


  <!--Main Header-->
  <nav class="navbar navbar-default">
        <div class="container">
              <!-- Brand and toggle get grouped for better mobile display -->
              <div class="navbar-header">
                    <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1"
                          aria-expanded="false">
                          <span class="sr-only">Toggle navigation</span>
                          <span class="icon-bar"></span>
                          <span class="icon-bar"></span>
                          <span class="icon-bar"></span>
                    </button>
              </div>
              <!-- Collect the nav links, forms, and other content for toggling -->
              <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                    <ul class="nav navbar-nav" style="padding: 8px 5px;">
                          <li class="active">
                                <a href="index.html">Home</a>
                          </li>

                          <!-- <li class="coba">
                                <a href="contact.html">PKTN</a>
                                <div class="dropdown-menu1"></div>
                                <ul class="dropdown-menu">
                                      <li>
                                            <a href="#">DIT. Pemerdayaan Konsumen</a>
                                      </li>
                                      <li>
                                            <a href="#">DIT. Standalitu</a>
                                      </li>
                                      <li>
                                            <a href="#">DIT. Metrologi</a>
                                      </li>
                                      <li role="separator" class="divider"></li>
                                      <li>
                                            <a href="#">DIT. Pengawasan</a>
                                      </li>
                                      <li role="separator" class="divider"></li>
                                      <li>
                                            <a href="#">DIT. Tertib Niaga</a>
                                      </li>
                                </ul>
                          </li> -->
                          <li class="dropdown">
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Dropdown
                                      <span class="caret"></span>
                                </a>
                                <ul class="dropdown-menu" style="margin-top: 7.5px;">
                                      <li>
                                            <a href="#">DIT. Standalitu</a>
                                      </li>
                                      <li role="separator" class="divider"></li>
                                      <li>
                                            <a href="#">DIT. Pemerdayaan Konsumen</a>
                                      </li>
                                      <li role="separator" class="divider"></li>
                                      <li>
                                            <a href="#">Something else here</a>
                                      </li>
                                      <li role="separator" class="divider"></li>
                                      <li>
                                            <a href="#">Separated link</a>
                                      </li>
                                      <li role="separator" class="divider"></li>
                                      <li>
                                            <a href="#">One more separated link</a>
                                      </li>
                                </ul>
                          </li>
                          <li>

                             <li>
                                <a href="about.html">About</a>
                          </li>
                          <li>
                                <a href="service.html">Service</a>
                          </li>
                          <li>
                                <a href="gallery.html">Gallery</a>
                          </li>
                          <li>
                                <a href="#" onclick="regist_user()">Register</a>
                          </li>

                         

                         
                          <!-- <li class="dropdown">
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Dropdown
                                      <span class="caret"></span>
                                </a>
                                <ul class="dropdown-menu">
                                      <li>
                                            <a href="#">Action</a>
                                      </li>
                                      <li>
                                            <a href="#">Another action</a>
                                      </li>
                                      <li>
                                            <a href="#">Something else here</a>
                                      </li>
                                      <li role="separator" class="divider"></li>
                                      <li>
                                            <a href="#">Separated link</a>
                                      </li>
                                      <li role="separator" class="divider"></li>
                                      <li>
                                            <a href="#">One more separated link</a>
                                      </li>
                                </ul>
                          </li> -->
                    </ul>
              </div>
              <!-- /.navbar-collapse -->
        </div>
        <!-- /.container-fluid -->
  </nav>
  <!--End Main Header -->
</div>

<!--=================================
=            Page Slider            =
==================================-->
<div class="hero-slider">
    <!-- Slider Item -->
    <div class="slider-item slide" style="background-image:url(<?php echo base_url(); ?>theme/images/slider/kemendag.jpg);">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <!-- Slide Content Start -->
                    <!-- <div class="content style text-center">
                        <h2 class="text-white text-bold mb-2">Our Best Surgeons</h2>
                        <p class="tag-text mb-5">Lorem ipsum dolor sit amet consectetur adipisicing elit. Vel sunt animi sequi ratione quod at earum. <br>
                             Quis quos officiis numquam!</p>
                        <a href="#" class="btn btn-main btn-white">explore</a>
                    </div> -->
                    <!-- Slide Content End -->
                </div>
            </div>
        </div>
    </div>
</div>

<!--====  End of Page Slider  ====-->

<section class="cta">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="cta-block">
                    <div class="emmergency item">
                        <i class="fa fa-phone"></i>
                        <h2>Emegency Cases</h2>
                        <a href="#">1-800-700-6200</a>
                        <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit.</p>
                    </div>
                    <div class="top-doctor item">
                        <i class="fa fa-stethoscope"></i>
                        <h2>24 Hour Service</h2>
                        <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Inventore dignissimos officia dicta suscipit vel eum</p>
                        <a href="#" class="btn btn-main">Read more</a>
                    </div>
                    <div class="working-time item">
                        <i class="fa fa-hourglass-o"></i>
                        <h2>Working Hours</h2>
                        <ul class="w-hours">
                            <li>Mon - Fri  - <span>8:00 - 17:00</span></li>
                            <li>Mon - Fri  - <span>8:00 - 17:00</span></li>
                            <li>Mon - Fri  - <span>8:00 - 17:00</span></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!--about section-->
<section class="feature-section section bg-gray">
  <div class="container">
    <div class="row">
      <div class="col-sm-12 col-xs-12">
        <div class="image-content">
          <div class="section-title text-center" style="margin-top: -4%;">
            <h3>Direktorat Jenderal PKTN
              <!-- <span>of Our Hospital</span> -->
            </h3>
            <p style="font-size: 18px;margin-top: -1%;">Direktorat Jenderal Perlindungan Konsumen dan Tertib Niaga - <br>
              Kementerian Perdagangan Republik Indonesia</p>
          </div>
          <div class="row" style="margin-top: 4%; color: #2e2d2d">
            <div class="col-sm-6">
              <div class="item">
                <div class="icon-box">
                  <figure>
                    <a href="#">
                      <img src="<?php echo base_url(); ?>theme/images/resource/1.png" alt="">
                    </a>
                  </figure>
                </div>
                <h6 style="font-size: 18px;">Direktorat. Pemberdayaan</h6>
                <p style="margin-top: 2%;"><span style="font-size: 18px;">1. Struktur Organisasi</span>
                      <br>
                      <table border="0" width="100%" style="margin-left: 3%;margin-top: -2%">
                        <tr>
                            <td align="justify">
                              

                              <i><font style="font-size: 16px; font-family: 'Source Sans Pro', sans-serif;"> lihat selengkapnya .. </font></i> 
                            </td>
                        </tr>
                      </table>
                </p>
                <p style="margin-top: 5%;"><span style="font-size: 18px;">2. Fungsi dan Tugas</span>
                      <br>
                      
                      <table border="0" width="100%" style="margin-left: 3%;margin-top: -2%">
                        <tr>
                            <td align="justify">
                              <font style="font-size: 16px; font-family: 'Source Sans Pro', sans-serif;">
                                  Tugas Pokok Direktorat Pengawasan Barang Beredar dan Jasa adalah perumusan dan pelaksanaan kebijakan, penyusunan norma, standar, prosedur, dan kriteria, pemberian bimbingan teknis dan supervisi, serta evaluasi dan pel... <br/>
                              </font>

                              <i><font style="font-size: 16px; font-family: 'Source Sans Pro', sans-serif;"> lihat selengkapnya ....</font></i> 
                            </td>
                        </tr>
                      </table>

                </p>
                <p style="margin-top: 5.5%;"><span style="font-size: 18px;">3. LPKSM</span>
                      <br>
                      <table border="0" width="100%" style="margin-left: 3%;margin-top: -2%">
                        <tr>
                            <td align="justify">
                              <font style="font-size: 16px; font-family: 'Source Sans Pro', sans-serif;">
                                  Dasar Hukum Undang-Undang Nomor 8 Tahun 1999 tentang Perlindungan Konsumen. <br/>
                              </font>

                              <i><font style="font-size: 16px; font-family: 'Source Sans Pro', sans-serif;"> lihat selengkapnya ....</font></i> 
                            </td>
                        </tr>
                      </table>
                  

                </p>
                <p style="margin-top: 5.5%;"><span style="font-size: 18px">4. BPSK</span>
                      <br>
                    
                    <table border="0" width="100%" style="margin-left: 3%;margin-top: -2%">
                        <tr>
                            <td align="justify">
                              <font style="font-size: 16px; font-family: 'Source Sans Pro', sans-serif;">
                                  Dasar Hukum Undang-Undang Nomor 8 Tahun 1999 tentang Perlindungan Konsumen <br/>
                              </font>

                              <i><font style="font-size: 16px; font-family: 'Source Sans Pro', sans-serif;"> lihat selengkapnya ....</font></i> 
                            </td>
                        </tr>
                      </table>

                </p>
                <p style="margin-top: 5.5%;"><span style="font-size: 18px;">5. Kontak Pejabat</span>
                      <br>

                      <table border="0" width="100%" style="margin-left: 3%;margin-top: -2%">
                        <tr>
                            <td align="justify">
                              <font style="font-size: 16px; font-family: 'Source Sans Pro', sans-serif;">
                                 Direktur Pemberdayaan Konsumen <br/>
                                 Nina Mora, SE. <br/>
                              </font>

                              <i><font style="font-size: 16px; font-family: 'Source Sans Pro', sans-serif;"> lihat selengkapnya ....</font></i> 
                            </td>
                        </tr>
                      </table>
                    

                </p><br/>


                <div style="margin-top: 0%;">
                  <figure>
                    <a href="#">
                      <img src="<?php echo base_url(); ?>theme/images/resource/2.png" alt="">
                    </a>
                  </figure>
                </div>
                <div style="margin-top: 3%;">
                  <h6 style="font-size: 18px;">Direktorat. Pengawasan</h6>
                <p style="margin-top: 2%;"><span style="font-size: 18px;">1. Struktur Organisasi</span>
                      <br>
                      <table border="0" width="100%" style="margin-left: 3%;margin-top: -2%">
                        <tr>
                            <td align="justify">
                              

                              <i><font style="font-size: 16px; font-family: 'Source Sans Pro', sans-serif;"> lihat selengkapnya .. </font></i> 
                            </td>
                        </tr>
                      </table>
                </p>
                <p style="margin-top: 5%;"><span style="font-size: 18px;">2. Fungsi dan Tugas</span>
                      <br>
                      
                      <table border="0" width="100%" style="margin-left: 3%;margin-top: -2%">
                        <tr>
                            <td align="justify">
                              <font style="font-size: 16px; font-family: 'Source Sans Pro', sans-serif;">
                                  Tugas Pokok Direktorat Pengawasan Barang Beredar dan Jasa adalah perumusan dan pelaksanaan kebijakan, penyusunan norma, standar, prosedur, dan kriteria, pemberian bimbingan teknis dan supervisi, serta evaluasi dan pel... <br/>
                              </font>

                              <i><font style="font-size: 16px; font-family: 'Source Sans Pro', sans-serif;"> lihat selengkapnya ....</font></i> 
                            </td>
                        </tr>
                      </table>

                </p>
              
                
                <p style="margin-top: 5.5%;"><span style="font-size: 18px;">3. Kontak Pejabat</span>
                      <br>

                      <table border="0" width="100%" style="margin-left: 3%;margin-top: -2%">
                        <tr>
                            <td align="justify">
                              <font style="font-size: 16px; font-family: 'Source Sans Pro', sans-serif;">
                                 Direktur Pengawasan Barang Beredar dan Jasa <br/>
                                 Wahyu Hidayat, S.H., MM. <br/>
                              </font>

                              <i><font style="font-size: 16px; font-family: 'Source Sans Pro', sans-serif;"> lihat selengkapnya ....</font></i> 
                            </td>
                        </tr>
                      </table>
                    

                </p>
                </div>
                <br/>
    
                <div style="margin-top: 0%;">
                  <figure>
                    <a href="#">
                      <img src="<?php echo base_url(); ?>theme/images/resource/2.png" alt="">
                    </a>
                  </figure>
                </div>
                <div style="margin-top: 3%;">
                  <h6 style="font-size: 18px;">Direktorat. Standalitu</h6>
                <p style="margin-top: 2%;"><span style="font-size: 18px;">1. Struktur Organisasi</span>
                      <br>
                      <table border="0" width="100%" style="margin-left: 3%;margin-top: -2%">
                        <tr>
                            <td align="justify">
                              
                              <font style="font-size: 16px; font-family: 'Source Sans Pro', sans-serif;">
                                  Adapun struktur organisasi Direktorat Standalitu adalah .... <br/>
                              </font>
                              <i><font style="font-size: 16px; font-family: 'Source Sans Pro', sans-serif;"> lihat selengkapnya .. </font></i> 
                            </td>
                        </tr>
                      </table>
                </p>
                <p style="margin-top: 5%;"><span style="font-size: 18px;">2. Fungsi dan Tugas</span>
                      <br>
                      
                      <table border="0" width="100%" style="margin-left: 3%;margin-top: -2%">
                        <tr>
                            <td align="justify">
                              <font style="font-size: 16px; font-family: 'Source Sans Pro', sans-serif;">
                                  Tugas Pokok Direktorat Pengawasan Barang Beredar dan Jasa adalah perumusan dan pelaksanaan kebijakan, penyusunan norma, standar, prosedur, dan kriteria, pemberian bimbingan teknis dan supervisi, serta evaluasi dan pel... <br/>
                              </font>

                              <i><font style="font-size: 16px; font-family: 'Source Sans Pro', sans-serif;"> lihat selengkapnya ....</font></i> 
                            </td>
                        </tr>
                      </table>

                </p>
                <p style="margin-top: 5.5%;"><span style="font-size: 18px;">3. BPSM</span>
                      <br>
                      <table border="0" width="100%" style="margin-left: 3%;margin-top: -2%">
                        <tr>
                            <td align="justify">
                              <font style="font-size: 16px; font-family: 'Source Sans Pro', sans-serif;">
                                  Balai Pengujian Mutu Barang, yang selanjutanya disebut BPMB, adalah unit pelaksana teknis di bidang pengujian mutu barang yang berada di bawah dan bertanggung jawab kepada direktur standardisasi ... <br/>
                              </font>

                              <i><font style="font-size: 16px; font-family: 'Source Sans Pro', sans-serif;"> lihat selengkapnya ....</font></i> 
                            </td>
                        </tr>
                      </table>
                  

                </p>
                <p style="margin-top: 5.5%;"><span style="font-size: 18px">4. Pelayanan Kalibrasi</span>
                      <br>
                    
                    <table border="0" width="100%" style="margin-left: 3%;margin-top: -2%">
                        <tr>
                            <td align="justify">
                              <font style="font-size: 16px; font-family: 'Source Sans Pro', sans-serif;">
                                  BALAI KALIBRASI adalah Unit Pelaksana Teknis (UPT) di bidang kalibrasi... <br/>
                              </font>

                              <i><font style="font-size: 16px; font-family: 'Source Sans Pro', sans-serif;"> lihat selengkapnya ....</font></i> 
                            </td>
                        </tr>
                      </table>

                </p>
                 <p style="margin-top: 5.5%;"><span style="font-size: 18px">5. TPP SIR</span>
                      <br>
                    
                    <table border="0" width="100%" style="margin-left: 3%;margin-top: -2%">
                        <tr>
                            <td align="justify">
                              <font style="font-size: 16px; font-family: 'Source Sans Pro', sans-serif;">
                                  Dalam rangka menjaga mutu dan meningkatkan daya saing karet Indonesia, dan ditujukan untuk menjaga citra produk Indonesia serta memberikan.. <br/>
                              </font>

                              <i><font style="font-size: 16px; font-family: 'Source Sans Pro', sans-serif;"> lihat selengkapnya ....</font></i> 
                            </td>
                        </tr>
                      </table>

                </p>
                <p style="margin-top: 5.5%;"><span style="font-size: 18px">6. NRP</span>
                      <br>
                    
                    <table border="0" width="100%" style="margin-left: 3%;margin-top: -2%">
                        <tr>
                            <td align="justify">
                              <font style="font-size: 16px; font-family: 'Source Sans Pro', sans-serif;">
                                  Pengawasan SNI Wajib terhadap barang produksl dalam negeri...<br/>
                              </font>

                              <i><font style="font-size: 16px; font-family: 'Source Sans Pro', sans-serif;"> lihat selengkapnya ....</font></i> 
                            </td>
                        </tr>
                      </table>

                </p>
                <p style="margin-top: 5.5%;"><span style="font-size: 18px">7. NPB</span>
                      <br>
                    
                    <table border="0" width="100%" style="margin-left: 3%;margin-top: -2%">
                        <tr>
                            <td align="justify">
                              <font style="font-size: 16px; font-family: 'Source Sans Pro', sans-serif;">
                                  Pengawasan SNI Wajib terhadap barang produksl dalam negeri atau impor yang diperdagangkan di dalam negeri, dilakukan melalui pengawasan pra pasar dan pengawasan di pasar yang dilakukan melalui... <br/>
                              </font>

                              <i><font style="font-size: 16px; font-family: 'Source Sans Pro', sans-serif;"> lihat selengkapnya ....</font></i> 
                            </td>
                        </tr>
                      </table>

                </p>
                <p style="margin-top: 5.5%;"><span style="font-size: 18px">8. LPK</span>
                      <br>
                    
                    <table border="0" width="100%" style="margin-left: 3%;margin-top: -2%">
                        <tr>
                            <td align="justify">
                              <font style="font-size: 16px; font-family: 'Source Sans Pro', sans-serif;">
                                  LPK yang menerbitkan sertifikat kesesuaian merupakan Lembaga Sertifikasi Produk (LSPro) dl dalam negeri atau di luar negeri yang didukung oleh laboratorium penguji dan atau lembaga inspeks... <br/>
                              </font>

                              <i><font style="font-size: 16px; font-family: 'Source Sans Pro', sans-serif;"> lihat selengkapnya ....</font></i> 
                            </td>
                        </tr>
                      </table>

                </p>
                <p style="margin-top: 5.5%;"><span style="font-size: 18px">9. Kebijan Dan Sasaran Mutu</span>
                      <br>
                    
                    <table border="0" width="100%" style="margin-left: 3%;margin-top: -2%">
                        <tr>
                            <td align="justify">
                              <font style="font-size: 16px; font-family: 'Source Sans Pro', sans-serif;">
                                  Adapun kebijakan dan sasaran mutu sebagai berikut ...<br/>
                              </font>

                              <i><font style="font-size: 16px; font-family: 'Source Sans Pro', sans-serif;"> lihat selengkapnya ....</font></i> 
                            </td>
                        </tr>
                      </table>

                </p>
                <p style="margin-top: 5.5%;"><span style="font-size: 18px;">10. Kontak Pejabat</span>
                      <br>

                      <table border="0" width="100%" style="margin-left: 3%;margin-top: -2%">
                        <tr>
                            <td align="justify">
                              <font style="font-size: 16px; font-family: 'Source Sans Pro', sans-serif;">
                                 Direktur Standardisasi dan Pengendalian Mutu <br/>
                                 Ir. Chandrini Mestika Dewi, M.Si. <br/>
                              </font>

                              <i><font style="font-size: 16px; font-family: 'Source Sans Pro', sans-serif;"> lihat selengkapnya ....</font></i> 
                            </td>
                        </tr>
                      </table>
                    

                </p>
                
                </div>


              </div>
            </div>
            
            <div class="col-sm-6" style="margin-top: 0%;">
              <div class="item">
                <div class="icon-box">
                  <figure style=" margin-left: 3%">
                    <a href="#">
                      <img src="<?php echo base_url(); ?>theme/images/resource/3.png" alt="">
                    </a>
                  </figure>
                </div>
                <div style=" margin-left: 0%">
                  <h6 style="font-size: 18px;">Direktorat. Metrologi</h6>
                <p style="margin-top: 2%;"><span style="font-size: 18px;">1. Struktur Organisasi</span>
                      <br>
                      <table border="0" width="100%" style="margin-left: 3%;margin-top: -2%">
                        <tr>
                            <td align="justify">
                              

                              <i><font style="font-size: 16px; font-family: 'Source Sans Pro', sans-serif;"> lihat selengkapnya .. </font></i> 
                            </td>
                        </tr>
                      </table>
                </p>
                <p style="margin-top: 5%;"><span style="font-size: 18px;">2. Fungsi dan Tugas</span>
                      <br>
                      
                      <table border="0" width="100%" style="margin-left: 3%;margin-top: -2%">
                        <tr>
                            <td align="justify">
                              <font style="font-size: 16px; font-family: 'Source Sans Pro', sans-serif;">
                                  Tugas Pokok Direktorat Pengawasan Barang Beredar dan Jasa adalah perumusan dan pelaksanaan kebijakan, penyusunan norma, standar, prosedur, dan kriteria, pemberian bimbingan teknis dan ... <br/>
                              </font>

                              <i><font style="font-size: 16px; font-family: 'Source Sans Pro', sans-serif;"> lihat selengkapnya ....</font></i> 
                            </td>
                        </tr>
                      </table>

                </p>
                <p style="margin-top: 5.5%;"><span style="font-size: 18px;">3. Syarat Teknis UTP</span>
                      <br>
                      <table border="0" width="100%" style="margin-left: 3%;margin-top: -2%">
                        <tr>
                            <td align="justify">
                              <font style="font-size: 16px; font-family: 'Source Sans Pro', sans-serif;">
                                  Adapun Syarat dan Teknis UTP sebagai berikut ST Alat Ukur Panjang, ST Anak Timbangan. <br/>
                              </font>

                              <i><font style="font-size: 16px; font-family: 'Source Sans Pro', sans-serif;"> lihat selengkapnya ....</font></i> 
                            </td>
                        </tr>
                      </table>
                  

                </p>
                <p style="margin-top: 5%;"><span style="font-size: 18px">4. Data Tera dan Tera Ulang UTTP Kab/Kota Th 2017-2018</span>
                      <br>
                    
                    <table border="0" width="100%" style="margin-left: 3%;margin-top: -2%">
                        <tr>
                            <td align="justify">
                              <font style="font-size: 16px; font-family: 'Source Sans Pro', sans-serif;">
                                 Adapun Data Tera dan Tera Ulang UTTP Kabupaten/Kota Tahun 2017 - 2018 sebagai berikut... <br/>
                              </font>

                              <i><font style="font-size: 16px; font-family: 'Source Sans Pro', sans-serif;"> lihat selengkapnya ....</font></i> 
                            </td>
                        </tr>
                      </table>

                </p>
                <p style="margin-top: 5.5%;"><span style="font-size: 18px;">5. Kontak Pejabat</span>
                      <br>

                      <table border="0" width="100%" style="margin-left: 3%;margin-top: -2%">
                        <tr>
                            <td align="justify">
                              <font style="font-size: 16px; font-family: 'Source Sans Pro', sans-serif;">
                                 Direktur Metrologi <br/>
                                 Dr.Rusmin Amin, S.Si, M.T. <br/>
                              </font>

                              <i><font style="font-size: 16px; font-family: 'Source Sans Pro', sans-serif;"> lihat selengkapnya ....</font></i> 
                            </td>
                        </tr>
                      </table>
                    

                </p><br/>
                </div>
              </div>
            </div>
            <div class="col-sm-6" style="margin-top: -3.9%;">
              <div class="item">
                <div class="icon-box">
                  <figure style=" margin-left: 0%">
                    <a href="#">
                      <img src="<?php echo base_url(); ?>theme/images/resource/3.png" alt="">
                    </a>
                  </figure>
                </div>
                <div style=" margin-left: 0%">
                  <h6>Direktorat. Tertib Niaga</h6>
                    <p style="margin-top: 2%;"><span style="font-size: 18px;">1. Struktur Organisasi</span>
                      <br>
                      <table border="0" width="100%" style="margin-left: 3%;margin-top: -2%">
                        <tr>
                            <td align="justify">
                              

                              <i><font style="font-size: 16px; font-family: 'Source Sans Pro', sans-serif;"> lihat selengkapnya .. </font></i> 
                            </td>
                        </tr>
                      </table>
                </p>
                <p style="margin-top: 5%;"><span style="font-size: 18px;">2. Fungsi dan Tugas</span>
                      <br>
                      
                      <table border="0" width="100%" style="margin-left: 3%;margin-top: -2%">
                        <tr>
                            <td align="justify">
                              <font style="font-size: 16px; font-family: 'Source Sans Pro', sans-serif;">
                                  Tugas Pokok Direktorat Pengawasan Barang Beredar dan Jasa adalah perumusan dan pelaksanaan kebijakan, penyusunan norma, standar, prosedur, dan kriteria, pemberian bimbingan teknis dan supervisi, serta evaluasi dan pel... <br/>
                              </font>

                              <i><font style="font-size: 16px; font-family: 'Source Sans Pro', sans-serif;"> lihat selengkapnya ....</font></i> 
                            </td>
                        </tr>
                      </table>

                </p>
              
                
                <p style="margin-top: 5.5%;"><span style="font-size: 18px;">3. Kontak Pejabat</span>
                      <br>

                      <table border="0" width="100%" style="margin-left: 3%;margin-top: -2%">
                        <tr>
                            <td align="justify">
                              <font style="font-size: 16px; font-family: 'Source Sans Pro', sans-serif;">
                                 Direktur Tertib Niaga <br/>
                                Veri Anggriono Sutiarto, SE., M.Si.<br/>
                              </font>

                              <i><font style="font-size: 16px; font-family: 'Source Sans Pro', sans-serif;"> lihat selengkapnya ....</font></i> 
                            </td>
                        </tr>
                      </table>
                    

                </p>
                </div><br>
                
              </div>
            </div>
        </div>
      </div>
    </div>
  </div>
</section>
<!--End about section-->

<!--Start about us area-->
<section class="service-tab-section section">
    <div class="outer-box clearfix">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <!-- Nav tabs -->
                    <div class="tabs">
                        <ul class="nav nav-tabs" role="tablist">
                            <li role="presentation" class="active">
                                <a href="#dormitory"  data-toggle="tab">DIT. Pemerdayaan</a>
                            </li>
                            <li role="presentation" width= "100%">
                                <a href="#orthopedic" data-toggle="tab"> &nbsp;&nbsp;&nbsp; DIT. Standalitu &nbsp;&nbsp; </a>
                            </li>
                            <li role="presentation">
                                <a href="#sonogram" data-toggle="tab">  &nbsp;&nbsp;&nbsp;&nbsp; DIT. Metrologi &nbsp;&nbsp;&nbsp;</a>
                            </li>
                            <li role="presentation">
                                <a href="#x-ray" data-toggle="tab"> &nbsp; DIT. Pengawasan </a>
                            </li>
                            <li role="presentation" style="margin-right: 3.8%;">
                                <a href="#diagnostic" data-toggle="tab"> &nbsp;&nbsp; DIT. Tertib Niaga</a>
                            </li>
                        </ul>
                    </div>
                    <!--Start single tab content-->
                    <div class="tab-content">
                        <div class="service-box tab-pane fade in active row" id="dormitory" style="margin-left: 0.1%;">
                            <div class="col-md-6" id="gambar1" style="display: block;">
                                <img class="img-responsive" src="<?php echo base_url(); ?>theme/images/services/service-one.jpg" alt="service-image">
                            </div>
                            <div class="col-md-6" style="display: none;" id="gambar1_2">
                                <img class="img-responsive" src="<?php echo base_url(); ?>theme/images/services/service-two.jpg" alt="service-image">
                            </div>
                            <div class="col-md-6" style="display: none;" id="gambar1_3">
                                <img class="img-responsive" src="<?php echo base_url(); ?>theme/images/services/service-three.jpg" alt="service-image">
                            </div>

                            <div class="col-md-6">
                                <div class="contents">
                                    <div class="section-title" style="margin-top: -1%;">
                                        <h3><font style="font-size: 25px;">DIT. Permerdayaan Konsumen</font></h3>
                                    </div>
                                    <div class="accordion-section-menu" style="margin-top: -8%;">   
                                      <div class="accordion-holder">
                                        <div class="panel-group" id="accordion" role="tablist" aria-multiselectable="true">
                                          <div class="panel panel-default">
                                            <div class="panel-heading" role="tab" id="headingFour">
                                              <h4 class="panel-title">
                                                <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseFour" aria-expanded="false" aria-controls="collapseFour" onclick="dit_per1()">
                                                    <span style="font-size: 14.2px;">Sistem Pengawasan Perlindungan Konsumen (SISWAS-PK)</span>
                                                </a>
                                              </h4>
                                            </div>
                                            <div id="collapseFour" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingFour">
                                              <div class="panel-body" style="text-align: justify;">
                                                Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute,
                                                non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor,
                                                sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh
                                                helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher
                                                vice lomo.
                                                <br/>
                                                <a href="#" class="btn btn-style-one">Read more</a>
                                              </div>
                                            </div>
                                          </div>
                                          <div class="panel panel-default">
                                            <div class="panel-heading" role="tab" id="headingTwo">
                                              <h4 class="panel-title">
                                                <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseTwo" aria-expanded="false"aria-controls="collapseTwo" onclick="dit_per2()">
                                                  <span style="font-size: 14.2px;">Portal Nasional Perlindungan Konsumen </span>
                                                </a>
                                              </h4>
                                            </div>
                                            <div id="collapseTwo" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingTwo">
                                              <div class="panel-body" style="text-align: justify;">
                                                Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute,
                                                non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor,
                                                sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh
                                                helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher
                                                vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably haven't
                                                heard of them accusamus labore sustainable VHS.
                                                <br/>
                                                <a href="#" class="btn btn-style-one">Read more</a>
                                              </div>
                                            </div>
                                          </div>
                                          <div class="panel panel-default">
                                            <div class="panel-heading" role="tab" id="headingThree">
                                              <h4 class="panel-title">
                                                <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseThree" aria-expanded="false" aria-controls="collapseThree" onclick="dit_per3()">
                                                 <span style="font-size: 14.2px;">Pendaftaran Petunjuk Penggunaan dan Kartu Jaminan Purna Jual Dalam Bahasa Indonesia Bagi Produk Telematika dan Produk Elektronika</span>
                                                </a>
                                              </h4>
                                            </div>
                                          <div id="collapseThree" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingThree">
                                            <div class="panel-body" style="text-align: justify;">
                                              Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute,
                                              non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor,
                                              sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh
                                              helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher
                                              vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably haven't
                                              heard of them accusamus labore sustainable VHS.
                                              <br/>
                                                <a href="#" class="btn btn-style-one">Read more</a>
                                            </div>
                                          </div>
                                        </div>
                                      </div>
                                    </div>
                                  </div>
                                </div>
                            </div>
                        </div>
                        <!--End single tab content-->
                        <!--Start single tab content-->
                        <div class="service-box tab-pane fade in" id="orthopedic">
                            <div class="col-md-6" id="gambar2" style="display: block;">
                                <img class="img-responsive" src="<?php echo base_url(); ?>theme/images/services/service-one.jpg" alt="service-image">
                            </div>
                            <div class="col-md-6" style="display: none;" id="gambar2_2">
                                <img class="img-responsive" src="<?php echo base_url(); ?>theme/images/services/service-two.jpg" alt="service-image">
                            </div>
                            <div class="col-md-6" style="display: none;" id="gambar2_3">
                                <img class="img-responsive" src="<?php echo base_url(); ?>theme/images/services/service-three.jpg" alt="service-image">
                            </div>
                            <div class="col-md-6">
                                <div class="contents">
                                    <div class="section-title" style="margin-top: -1%;" >
                                        <h3><font style="font-size: 25px;"> DIT. Standalitu</font></h3>
                                    </div>
                                    <div class="accordion-section-menu" style="margin-top: -8%;">   
                                      <div class="accordion-holder">
                                        <div class="panel-group" id="accordion2" role="tablist" aria-multiselectable="true">
                                          <div class="panel panel-default">
                                            <div class="panel-heading" role="tab" id="heading_stand1">
                                              <h4 class="panel-title">
                                                <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion2" href="#collapse_stand1" aria-expanded="false" aria-controls="collapse_stand1" onclick="dit_stand(1)">
                                                   <span style="font-size: 14.2px;">Aplikasi Laboratorium Information Management System (LIMS)</span>
                                                </a>
                                              </h4>
                                            </div>
                                            <div id="collapse_stand1" class="panel-collapse collapse" role="tabpanel" aria-labelledby="heading_stand1">
                                              <div class="panel-body" style="text-align: justify;">
                                                Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute,
                                                non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor,
                                                sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh
                                                helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher
                                                vice lomo.
                                                <br/>
                                                <a href="#" class="btn btn-style-one">Read more</a>
                                              </div>
                                            </div>
                                          </div>
                                          <div class="panel panel-default">
                                            <div class="panel-heading" role="tab" id="heading_stand2">
                                              <h4 class="panel-title">
                                                <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion2" href="#collapse_stand2" aria-expanded="false"aria-controls="collapse_stand2" onclick="dit_stand(2)">
                                                  <span style="font-size: 14.2px;">LPK Online</span>
                                                </a>
                                              </h4>
                                            </div>
                                            <div id="collapse_stand2" class="panel-collapse collapse" role="tabpanel" aria-labelledby="heading_stand2">
                                              <div class="panel-body" style="text-align: justify;">
                                                Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute,
                                                non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor,
                                                sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh
                                                helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher
                                                vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably haven't
                                                heard of them accusamus labore sustainable VHS.
                                                <br/>
                                                <a href="#" class="btn btn-style-one">Read more</a>
                                              </div>
                                            </div>
                                          </div>
                                          <div class="panel panel-default">
                                            <div class="panel-heading" role="tab" id="heading_stand3">
                                              <h4 class="panel-title">
                                                <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion2" href="#collapse_stand3" aria-expanded="false" aria-controls="collapse_stand3" onclick="dit_stand(3)">
                                                 <span style="font-size: 14.2px;">Nomor Pendaftaran Barang (NPB)</span>
                                                </a>
                                              </h4>
                                            </div>
                                          <div id="collapse_stand3" class="panel-collapse collapse" role="tabpanel" aria-labelledby="heading_stand3">
                                            <div class="panel-body" style="text-align: justify;">
                                              Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute,
                                              non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor,
                                              sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh
                                              helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher
                                              vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably haven't
                                              heard of them accusamus labore sustainable VHS.
                                              <br/>
                                                <a href="#" class="btn btn-style-one">Read more</a>
                                            </div>
                                          </div>
                                        </div>
                                        <div class="panel panel-default">
                                            <div class="panel-heading" role="tab" id="heading_stand4">
                                              <h4 class="panel-title">
                                                <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion2" href="#collapse_stand4" aria-expanded="false" aria-controls="collapse_stand4" onclick="dit_stand(4)">
                                                 <span style="font-size: 14.2px;">TPP Online</span>
                                                </a>
                                              </h4>
                                            </div>
                                          <div id="collapse_stand4" class="panel-collapse collapse" role="tabpanel" aria-labelledby="heading_stand4">
                                            <div class="panel-body" style="text-align: justify;">
                                              Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute,
                                              non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor,
                                              sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh
                                              helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher
                                              vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably haven't
                                              heard of them accusamus labore sustainable VHS.
                                              <br/>
                                                <a href="#" class="btn btn-style-one">Read more</a>
                                            </div>
                                          </div>
                                        </div>
                                        <div class="panel panel-default">
                                            <div class="panel-heading" role="tab" id="heading_stand5">
                                              <h4 class="panel-title">
                                                <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion2" href="#collapse_stand5" aria-expanded="false" aria-controls="collapse_stand5" onclick="dit_stand(5)">
                                                 <span style="font-size: 14.2px;">Sistem Informasi Penguji Mutu Barang&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span>
                                                </a>
                                              </h4>
                                            </div>
                                          <div id="collapse_stand5" class="panel-collapse collapse" role="tabpanel" aria-labelledby="heading_stand5">
                                            <div class="panel-body" style="text-align: justify;">
                                              Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute,
                                              non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor,
                                              sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh
                                              helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher
                                              vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably haven't
                                              heard of them accusamus labore sustainable VHS.
                                              <br/>
                                                <a href="#" class="btn btn-style-one">Read more</a>
                                            </div>
                                          </div>
                                        </div>
                                        <div class="panel panel-default">
                                            <div class="panel-heading" role="tab" id="heading_stand6">
                                              <h4 class="panel-title">
                                                <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion2" href="#collapse_stand6" aria-expanded="false" aria-controls="collapse_stand6" onclick="dit_stand(6)">
                                                 <span style="font-size: 14.2px;">E-Dupak Jabfung PMB</span>
                                                </a>
                                              </h4>
                                            </div>
                                          <div id="collapse_stand6" class="panel-collapse collapse" role="tabpanel" aria-labelledby="heading_stand6">
                                            <div class="panel-body" style="text-align: justify;">
                                              Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute,
                                              non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor,
                                              sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh
                                              helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher
                                              vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably haven't
                                              heard of them accusamus labore sustainable VHS.
                                              <br/>
                                                <a href="#" class="btn btn-style-one">Read more</a>
                                            </div>
                                          </div>
                                        </div>
                                        <div class="panel panel-default">
                                            <div class="panel-heading" role="tab" id="heading_stand7">
                                              <h4 class="panel-title">
                                                <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion2" href="#collapse_stand7" aria-expanded="false" aria-controls="collapse_stand7" onclick="dit_stand(7)">
                                                 <span style="font-size: 14.2px;">Sistem Informasi Sertifikasi Produk&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span>
                                                </a>
                                              </h4>
                                            </div>
                                          <div id="collapse_stand7" class="panel-collapse collapse" role="tabpanel" aria-labelledby="heading_stand7">
                                            <div class="panel-body" style="text-align: justify;">
                                              Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute,
                                              non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor,
                                              sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh
                                              helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher
                                              vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably haven't
                                              heard of them accusamus labore sustainable VHS.
                                              <br/>
                                                <a href="#" class="btn btn-style-one">Read more</a>
                                            </div>
                                          </div>
                                        </div>
                                        <div class="panel panel-default">
                                            <div class="panel-heading" role="tab" id="heading_stand8">
                                              <h4 class="panel-title">
                                                <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion2" href="#collapse_stand8" aria-expanded="false" aria-controls="collapse_stand8" onclick="dit_stand(8)">
                                                 <span style="font-size: 14.2px;">Sistem Informasi Sertifikasi Personil&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span>
                                                </a>
                                              </h4>
                                            </div>
                                          <div id="collapse_stand8" class="panel-collapse collapse" role="tabpanel" aria-labelledby="heading_stand8">
                                            <div class="panel-body" style="text-align: justify;">
                                              Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute,
                                              non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor,
                                              sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh
                                              helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher
                                              vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably haven't
                                              heard of them accusamus labore sustainable VHS.
                                              <br/>
                                                <a href="#" class="btn btn-style-one">Read more</a>
                                            </div>
                                          </div>
                                        </div>
                                        <div class="panel panel-default">
                                            <div class="panel-heading" role="tab" id="heading_stand9">
                                              <h4 class="panel-title">
                                                <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion2" href="#collapse_stand9" aria-expanded="false" aria-controls="collapse_stand9" onclick="dit_stand(9)">
                                                 <span style="font-size: 14.2px;">Web Balai Sertifikasi</span>
                                                </a>
                                              </h4>
                                            </div>
                                          <div id="collapse_stand9" class="panel-collapse collapse" role="tabpanel" aria-labelledby="heading_stand9">
                                            <div class="panel-body" style="text-align: justify;">
                                              Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute,
                                              non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor,
                                              sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh
                                              helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher
                                              vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably haven't
                                              heard of them accusamus labore sustainable VHS.
                                              <br/>
                                                <a href="#" class="btn btn-style-one">Read more</a>
                                            </div>
                                          </div>
                                        </div>
                                        <div class="panel panel-default">
                                            <div class="panel-heading" role="tab" id="heading_stand10">
                                              <h4 class="panel-title">
                                                <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion2" href="#collapse_stand10" aria-expanded="false" aria-controls="collapse_stand10" onclick="dit_stand(10)">
                                                 <span style="font-size: 14.2px;">Sistem Informasi Pelayanan Kalibrasi&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span>
                                                </a>
                                              </h4>
                                            </div>
                                          <div id="collapse_stand10" class="panel-collapse collapse" role="tabpanel" aria-labelledby="heading_stand10">
                                            <div class="panel-body" style="text-align: justify;">
                                              Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute,
                                              non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor,
                                              sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh
                                              helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher
                                              vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably haven't
                                              heard of them accusamus labore sustainable VHS.
                                              <br/>
                                                <a href="#" class="btn btn-style-one">Read more</a>
                                            </div>
                                          </div>
                                        </div>
                                        <div class="panel panel-default">
                                            <div class="panel-heading" role="tab" id="heading_stand11">
                                              <h4 class="panel-title">
                                                <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion2" href="#collapse_stand11" aria-expanded="false" aria-controls="collapse_stand11" onclick="dit_stand(11)">
                                                 <span style="font-size: 14.2px;">Portal INATRIMS</span>
                                                </a>
                                              </h4>
                                            </div>
                                          <div id="collapse_stand11" class="panel-collapse collapse" role="tabpanel" aria-labelledby="heading_stand11">
                                            <div class="panel-body" style="text-align: justify;">
                                              Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute,
                                              non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor,
                                              sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh
                                              helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher
                                              vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably haven't
                                              heard of them accusamus labore sustainable VHS.
                                              <br/>
                                                <a href="#" class="btn btn-style-one">Read more</a>
                                            </div>
                                          </div>
                                        </div>
                                      </div>
                                    </div>
                                  </div>
                                </div>
                            </div>
                        </div>
                        <!--End single tab content-->
                        <!--Start single tab content-->
                        <div class="service-box tab-pane fade in" id="sonogram">
                            <div class="col-md-6" id="gambar3" style="display: block;">
                                <img class="img-responsive" src="<?php echo base_url(); ?>theme/images/services/service-one.jpg" alt="service-image">
                            </div>
                            <div class="col-md-6" style="display: none;" id="gambar3_2">
                                <img class="img-responsive" src="<?php echo base_url(); ?>theme/images/services/service-two.jpg" alt="service-image">
                            </div>
                            <div class="col-md-6" style="display: none;" id="gambar3_3">
                                <img class="img-responsive" src="<?php echo base_url(); ?>theme/images/services/service-three.jpg" alt="service-image">
                            </div>
                            <div class="col-md-6">
                                <div class="contents">
                                    <div class="section-title" style="margin-top: -1%;" >
                                        <h3><font style="font-size: 25px;"> DIT. Metrologi</font></h3>
                                    </div>
                                    <div class="accordion-section-menu" style="margin-top: -8%;">   
                                      <div class="accordion-holder">
                                        <div class="panel-group" id="accordion3" role="tablist" aria-multiselectable="true">
                                          <div class="panel panel-default">
                                            <div class="panel-heading" role="tab" id="heading_met1">
                                              <h4 class="panel-title">
                                                <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion3" href="#collapse_met1" aria-expanded="false" aria-controls="collapse_met1" onclick="dit_metrologi(1)">
                                                   <span style="font-size: 14.2px;">Sistem Informasi Pelaporan Tera / Tera Ulang dan Pengawasan</span>
                                                </a>
                                              </h4>
                                            </div>
                                            <div id="collapse_met1" class="panel-collapse collapse" role="tabpanel" aria-labelledby="heading_met1">
                                              <div class="panel-body" style="text-align: justify;">
                                                Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute,
                                                non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor,
                                                sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh
                                                helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher
                                                vice lomo.
                                                <br/>
                                                <a href="#" class="btn btn-style-one">Read more</a>
                                              </div>
                                            </div>
                                          </div>
                                          <div class="panel panel-default">
                                            <div class="panel-heading" role="tab" id="heading_met2">
                                              <h4 class="panel-title">
                                                <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion3" href="#collapse_met2" aria-expanded="false"aria-controls="collapse_met2" onclick="dit_metrologi(2)">
                                                  <span style="font-size: 14.2px;">Sistem Informasi Perizinan Metrologi&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span>
                                                </a>
                                              </h4>
                                            </div>
                                            <div id="collapse_met2" class="panel-collapse collapse" role="tabpanel" aria-labelledby="heading_met2">
                                              <div class="panel-body" style="text-align: justify;">
                                                Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute,
                                                non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor,
                                                sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh
                                                helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher
                                                vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably haven't
                                                heard of them accusamus labore sustainable VHS.
                                                <br/>
                                                <a href="#" class="btn btn-style-one">Read more</a>
                                              </div>
                                            </div>
                                          </div>
                                          <div class="panel panel-default">
                                            <div class="panel-heading" role="tab" id="heading_met3">
                                              <h4 class="panel-title">
                                                <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion3" href="#collapse_met3" aria-expanded="false" aria-controls="collapse_met3" onclick="dit_metrologi(3)">
                                                 <span style="font-size: 14.2px;">Sistem Informasi UPTP</span>
                                                </a>
                                              </h4>
                                            </div>
                                          <div id="collapse_met3" class="panel-collapse collapse" role="tabpanel" aria-labelledby="heading_met3">
                                            <div class="panel-body" style="text-align: justify;">
                                              Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute,
                                              non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor,
                                              sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh
                                              helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher
                                              vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably haven't
                                              heard of them accusamus labore sustainable VHS.
                                              <br/>
                                                <a href="#" class="btn btn-style-one">Read more</a>
                                            </div>
                                          </div>
                                        </div>
                                        <div class="panel panel-default">
                                            <div class="panel-heading" role="tab" id="heading_met4">
                                              <h4 class="panel-title">
                                                <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion3" href="#collapse_met4" aria-expanded="false" aria-controls="collapse_met4" onclick="dit_metrologi(4)">
                                                 <span style="font-size: 14.2px;">e-DUPAK (Sistem Pengelolaan DUPAK)</span>
                                                </a>
                                              </h4>
                                            </div>
                                          <div id="collapse_met4" class="panel-collapse collapse" role="tabpanel" aria-labelledby="heading_met4">
                                            <div class="panel-body" style="text-align: justify;">
                                              Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute,
                                              non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor,
                                              sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh
                                              helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher
                                              vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably haven't
                                              heard of them accusamus labore sustainable VHS.
                                              <br/>
                                                <a href="#" class="btn btn-style-one">Read more</a>
                                            </div>
                                          </div>
                                        </div>
                                        <div class="panel panel-default">
                                            <div class="panel-heading" role="tab" id="heading_met5">
                                              <h4 class="panel-title">
                                                <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion3" href="#collapse_met5" aria-expanded="false" aria-controls="collapse_met5" onclick="dit_metrologi(5)">
                                                 <span style="font-size: 14.2px;">e-Assessment SKKPTTU (sistem informasi penilaian UML)</span>
                                                </a>
                                              </h4>
                                            </div>
                                          <div id="collapse_met5" class="panel-collapse collapse" role="tabpanel" aria-labelledby="heading_met5">
                                            <div class="panel-body" style="text-align: justify;">
                                              Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute,
                                              non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor,
                                              sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh
                                              helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher
                                              vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably haven't
                                              heard of them accusamus labore sustainable VHS.
                                              <br/>
                                                <a href="#" class="btn btn-style-one">Read more</a>
                                            </div>
                                          </div>
                                        </div>
                                        
                                        
                                        
                                      </div>
                                    </div>
                                  </div>
                                </div>
                            </div>
                        </div>
                        <!--End single tab content-->
                        <!--Start single tab content-->
                        <div class="service-box tab-pane fade in" id="x-ray">
                            <div class="col-md-6" id="gambar4" style="display: block;">
                                <img class="img-responsive" src="<?php echo base_url(); ?>theme/images/services/service-one.jpg" alt="service-image">
                            </div>
                            <div class="col-md-6" style="display: none;" id="gambar4_2">
                                <img class="img-responsive" src="<?php echo base_url(); ?>theme/images/services/service-two.jpg" alt="service-image">
                            </div>
                            <div class="col-md-6" style="display: none;" id="gambar4_3">
                                <img class="img-responsive" src="<?php echo base_url(); ?>theme/images/services/service-three.jpg" alt="service-image">
                            </div>
                            <div class="col-md-6">
                                <div class="contents">
                                    <div class="section-title" style="margin-top: -1%;" >
                                        <h3><font style="font-size: 25px;"> DIT. Pengawasan</font></h3>
                                    </div>
                                    <div class="accordion-section-menu" style="margin-top: -8%;">   
                                      <div class="accordion-holder">
                                        <div class="panel-group" id="accordion4" role="tablist" aria-multiselectable="true">
                                          <div class="panel panel-default">
                                            <div class="panel-heading" role="tab" id="heading_pengawas1">
                                              <h4 class="panel-title">
                                                <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion4" href="#collapse_pengawas1" aria-expanded="false" aria-controls="collapse_pengawasa1" onclick="dit_pengawas(1)">
                                                   <span style="font-size: 14.2px;">Aplikasi Sistem Pelaporan Pengawasan Barang Beredar dan Jasa</span>
                                                </a>
                                              </h4>
                                            </div>
                                            <div id="collapse_pengawas1" class="panel-collapse collapse" role="tabpanel" aria-labelledby="heading_pengawas1">
                                              <div class="panel-body" style="text-align: justify;">
                                                Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute,
                                                non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor,
                                                sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh
                                                helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher
                                                vice lomo.
                                                <br/>
                                                <a href="#" class="btn btn-style-one">Read more</a>
                                              </div>
                                            </div>
                                          </div>
                                      </div>
                                    </div>
                                  </div>
                                </div>
                            </div>
                        </div>
                        <!--End single tab content-->
                        <!--Start single tab content-->
                        <div class="service-box tab-pane fade in" id="diagnostic">
                            <div class="col-md-6" id="gambar5" style="display: block;">
                                <img class="img-responsive" src="<?php echo base_url(); ?>theme/images/services/service-one.jpg" alt="service-image">
                            </div>
                            <div class="col-md-6" style="display: none;" id="gambar5_2">
                                <img class="img-responsive" src="<?php echo base_url(); ?>theme/images/services/service-two.jpg" alt="service-image">
                            </div>
                            <div class="col-md-6" style="display: none;" id="gambar5_3">
                                <img class="img-responsive" src="<?php echo base_url(); ?>theme/images/services/service-three.jpg" alt="service-image">
                            </div>
                            <div class="col-md-6">
                                <div class="contents">
                                    <div class="section-title" style="margin-top: -1%;" >
                                        <h3><font style="font-size: 25px;"> DIT. Tertib Niaga</font></h3>
                                    </div>
                                    <div class="accordion-section-menu" style="margin-top: -8%;">   
                                      <div class="accordion-holder">
                                        <div class="panel-group" id="accordion5" role="tablist" aria-multiselectable="true">
                                          <div class="panel panel-default">
                                            <div class="panel-heading" role="tab" id="heading_niaga1">
                                              <h4 class="panel-title">
                                                <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion5" href="#collapse_niaga1" aria-expanded="false" aria-controls="collapse_niaga1" onclick="dit_niaga(1)">
                                                   <span style="font-size: 14.2px;">Pendaftaran Barang Keselamatan, Keamanan, Kesehatan Lingkungan Hidup (K3L)</span>
                                                </a>
                                              </h4>
                                            </div>
                                            <div id="collapse_niaga1" class="panel-collapse collapse" role="tabpanel" aria-labelledby="heading_niaga1">
                                              <div class="panel-body" style="text-align: justify;">
                                                Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute,
                                                non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor,
                                                sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh
                                                helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher
                                                vice lomo.
                                                <br/>
                                                <a href="#" class="btn btn-style-one">Read more</a>
                                              </div>
                                            </div>
                                          </div>
                                          <div class="panel panel-default">
                                            <div class="panel-heading" role="tab" id="heading_niaga2">
                                              <h4 class="panel-title">
                                                <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion5" href="#collapse_niaga2" aria-expanded="false"aria-controls="collapse_niaga2" onclick="dit_niaga(2)">
                                                  <span style="font-size: 14.2px;">Sistem Informasi Petugas Pengawas&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span>
                                                </a>
                                              </h4>
                                            </div>
                                            <div id="collapse_niaga2" class="panel-collapse collapse" role="tabpanel" aria-labelledby="heading_niaga2">
                                              <div class="panel-body" style="text-align: justify;">
                                                Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute,
                                                non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor,
                                                sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh
                                                helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher
                                                vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably haven't
                                                heard of them accusamus labore sustainable VHS.
                                                <br/>
                                                <a href="#" class="btn btn-style-one">Read more</a>
                                              </div>
                                            </div>
                                          </div>
                                          <div class="panel panel-default">
                                            <div class="panel-heading" role="tab" id="heading_niaga3">
                                              <h4 class="panel-title">
                                                <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion5" href="#collapse_niaga3" aria-expanded="false" aria-controls="collapse_niaga3" onclick="dit_niaga(3)">
                                                 <span style="font-size: 14.2px;">Aplikasi Penugasan Petugas Pengawas</span>
                                                </a>
                                              </h4>
                                            </div>
                                          <div id="collapse_niaga3" class="panel-collapse collapse" role="tabpanel" aria-labelledby="heading_niaga3">
                                            <div class="panel-body" style="text-align: justify;">
                                              Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute,
                                              non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor,
                                              sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh
                                              helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher
                                              vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably haven't
                                              heard of them accusamus labore sustainable VHS.
                                              <br/>
                                                <a href="#" class="btn btn-style-one">Read more</a>
                                            </div>
                                          </div>
                                        </div>
                                        <div class="panel panel-default">
                                            <div class="panel-heading" role="tab" id="heading_niaga4">
                                              <h4 class="panel-title">
                                                <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion5" href="#collapse_niaga4" aria-expanded="false" aria-controls="collapse_niaga4" onclick="dit_niaga(4)">
                                                 <span style="font-size: 14.2px;">Aplikasi Pelaporan</span>
                                                </a>
                                              </h4>
                                            </div>
                                          <div id="collapse_niaga4" class="panel-collapse collapse" role="tabpanel" aria-labelledby="heading_niaga4">
                                            <div class="panel-body" style="text-align: justify;">
                                              Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute,
                                              non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor,
                                              sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh
                                              helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher
                                              vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably haven't
                                              heard of them accusamus labore sustainable VHS.
                                              <br/>
                                                <a href="#" class="btn btn-style-one">Read more</a>
                                            </div>
                                          </div>
                                        </div>
                                        
                                        
                                      </div>
                                    </div>
                                  </div>
                                </div>
                            </div>
                        </div>
                        <!--End single tab content-->
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!--End about us area-->

<!--Service Section-->
<section class="service-section bg-gray section">
    <div class="container">
        <div class="section-title text-center">
            <h3>Informasi
                <span>Terkini</span>
            </h3>
            <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Lorem ipsum dolor sit amet. qui suscipit atque <br>
                fugiat officia corporis rerum eaque neque totam animi, sapiente culpa. Architecto!</p>
        </div>
        <div class="row items-container clearfix">
            <div class="item">
                <div class="inner-box">
                    <div class="img_holder">
                        <a href="service.html">
                            <img src="<?php echo base_url(); ?>theme/images/gallery/1.jpg" alt="images" class="img-responsive">
                        </a>
                    </div>
                    <div class="image-content text-center">
                        <!--<span>Better Service At Low Cost</span>-->
                        <a href=" ">
                            <h6>EDUKASI KONSUMEN</h6>
                        </a>
                        <p>Menempatkan konsumen menjadi agen perubahan dalam posisinya sebagai subjek penentu kegiatan ekonomi Indonesia serta menguatkan kesadaran konsumen akan pentingnya hak dan kewajibannya</p>
                    </div>
                </div>
            </div>
            <div class="item">
                <div class="inner-box">
                    <div class="img_holder">
                        <a href="service.html">
                            <img src="<?php echo base_url(); ?>theme/images/gallery/2.jpg" alt="images" class="img-responsive">
                        </a>
                    </div>
                    <div class="image-content text-center">
                        <!-- <span>Better Service At Low Cost</span> -->
                        <a href="">
                            <h6>STANDAR NASIONAL INDONESIA</h6>
                        </a>
                        <p>Standardisasi merupakan salah satu instrumen regulasi teknis yang dapat melindungi kepentingan konsumen nasional dan sekaligus produsen dalam negeri. <br/><br/></p>
                    </div>
                </div>
            </div>
            <div class="item">
                <div class="inner-box">
                    <div class="img_holder">
                        <a href="service.html">
                            <img src="<?php echo base_url(); ?>theme/images/gallery/3.jpg" alt="images" class="img-responsive">
                        </a>
                    </div>
                    <div class="image-content text-center">
                        <!-- <span>Better Service At Low Cost</span> -->
                        <a href="">
                            <h6>Siaran Pers</h6>
                        </a>
                        <p>Perkuat Kerja Sama Penegakan Hukum, Pengawasan, dan Pengamanan Perdagangan, Kemendag-Polri Tandatangani MoU,Tidak Sesuai Ketentuan, Gula Kristal Rafinasi dan Daging Beku Dimusnahkan</p>
                    </div>
                </div>
            </div>
            <div class="item">
                <div class="inner-box">
                    <div class="img_holder">
                        <a href="service.html">
                            <img src="<?php echo base_url(); ?>theme/images/gallery/1.jpg" alt="images" class="img-responsive">
                        </a>
                    </div>
                    <div class="image-content text-center">
                        <!-- <span>Better Service At Low Cost</span> -->
                        <a href="">
                            <h6>Regulasi</h6>
                        </a>
                        <p>Permendag No. 28 Tahun 2018 tentang Pemeriksaan Tata Niaga Impor di Luar Kawasan Pabean (Post Border).<br/><br/><br/></p>
                    </div>
                </div>
            </div>
            <div class="item">
                <div class="inner-box">
                    <div class="img_holder">
                        <a href="service.html">
                            <img src="<?php echo base_url(); ?>theme/images/gallery/2.jpg" alt="images" class="img-responsive">
                        </a>
                    </div>
                    <div class="image-content text-center">
                        <!-- <span>Better Service At Low Cost</span> -->
                        <a href="">
                            <h6>AGENDA KEGIATAN PKTN</h6>
                        </a>
                        <p>Engaging for Global Challenge, Hasil Survey Kepuasan Pelanggan Dit. Standalitu 2017, Hasil Survei Kepuasan Pelanggan Layanan Internal Ditjen PKTN<br/></br></p>
                    </div>
                </div>
            </div>
            <div class="item">
                <div class="inner-box">
                    <div class="img_holder">
                        <a href="service.html">
                            <img src="<?php echo base_url(); ?>theme/images/gallery/3.jpg" alt="images" class="img-responsive">
                        </a>
                    </div>
                    <div class="image-content text-center">
                        <!-- <span>Better Service At Low Cost</span> -->
                        <a href="">
                            <h6>RANCANGAN PERATURAN DI BIDANG PKTN</h6>
                        </a>
                        <p>Pengelolaan Sumber Daya Manusia Metrologi Legal<br><br><br/></p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!--End Service Section-->

<!--team section-->

<!--End team section-->

<!--testimonial-section-->

<!--End testimonial-section-->

<!-- Contact Section -->
<section class="appoinment-section section">
    <div class="container">
        <div class="row">
            <div class="col-md-6 col-sm-12 col-xs-12">
                <div class="accordion-section">
    <div class="section-title">
        <h3>FAQ</h3>
    </div>
    <div class="accordion-holder">
        <div class="panel-group" id="accordion_faq" role="tablist" aria-multiselectable="true">
            <div class="panel panel-default">
                <div class="panel-heading" role="tab" id="headingFour_faq">
                    <h4 class="panel-title">
                        <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion_faq" href="#collapseFour_faq" aria-expanded="false"
                            aria-controls="collapseFour_faq">
                            What are the Centre’s visiting hours?
                        </a>
                    </h4>
                </div>
                <div id="collapseFour_faq" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingFour_faq">
                    <div class="panel-body">
                        Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute,
                        non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor,
                        sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh
                        helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher
                        vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably haven't
                        heard of them accusamus labore sustainable VHS.
                    </div>
                </div>
            </div>
            <div class="panel panel-default">
                <div class="panel-heading" role="tab" id="headingTwo_faq">
                    <h4 class="panel-title">
                        <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion_faq" href="#collapseTwo_faq" aria-expanded="false"
                            aria-controls="collapseTwo_faq">
                            What are the Centre’s visiting hours?
                        </a>
                    </h4>
                </div>
                <div id="collapseTwo_faq" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingTwo_faq">
                    <div class="panel-body">
                        Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute,
                        non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor,
                        sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh
                        helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher
                        vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably haven't
                        heard of them accusamus labore sustainable VHS.
                    </div>
                </div>
            </div>
            <div class="panel panel-default">
                <div class="panel-heading" role="tab" id="headingThree_faq">
                    <h4 class="panel-title">
                        <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion_faq" href="#collapseThree_faq" aria-expanded="false"
                            aria-controls="collapseThree_faq">
                            How many visitors are allowed?
                        </a>
                    </h4>
                </div>
                <div id="collapseThree_faq" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingThree_faq">
                    <div class="panel-body">
                        Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute,
                        non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor,
                        sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh
                        helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher
                        vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably haven't
                        heard of them accusamus labore sustainable VHS.
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
            </div>
            <div class="col-md-6 col-sm-12 col-xs-12">
                <div class="contact-area">
    <div class="section-title">
        <h3>Request
            <span>Appointment</span>
        </h3>
    </div>
    <form name="contact_form" class="default-form contact-form" action="sendmail.php" method="post">
        <div class="row">
            <div class="col-md-6 col-sm-12 col-xs-12">
                <div class="form-group">
                    <input type="text" name="Name" placeholder="Name" required="">
                </div>
                <div class="form-group">
                    <input type="email" name="Email" placeholder="Email" required="">
                </div>
                <div class="form-group">
                    <select name="subject">
                        <option>Departments</option>
                        <option>Diagnostic</option>
                        <option>Psychological</option>
                    </select>
                </div>
            </div>
            <div class="col-md-6 col-sm-12 col-xs-12">
                <div class="form-group">
                    <input type="text" name="Phone" placeholder="Phone" required="">
                </div>
                <div class="form-group">
                    <input type="text" name="Date" placeholder="Date" required="" id="datepicker">
                    <i class="fa fa-calendar" aria-hidden="true"></i>
                </div>
                <div class="form-group">
                    <select name="subject">
                        <option>Doctor</option>
                        <option>Diagnostic</option>
                        <option>Psychological</option>
                    </select>
                </div>
            </div>
            <div class="col-md-12 col-sm-12 col-xs-12">
                <div class="form-group">
                    <textarea name="form_message" placeholder="Your Message" required=""></textarea>
                </div>
                <div class="form-group text-center">
                    <button type="submit" class="btn-style-one">submit now</button>
                </div>
            </div>
        </div>
    </form>
</div>
            </div>
        </div>
    </div>
</section>
<!-- End Contact Section -->

<!--footer-main-->
<footer class="footer-main">
  <!-- <div class="footer-top">
    <div class="container">
      <div class="row">
        <div class="col-md-4 col-sm-6 col-xs-12">
          <div class="about-widget">
            <div class="footer-logo">
              <figure>
                <a href="index.html">
                  <img src="<?php echo base_url(); ?>theme/images/logo-2.png" alt="">
                </a>
              </figure>
            </div>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Molestias, temporibus?</p>
            <ul class="location-link">
              <li class="item">
                <i class="fa fa-map-marker"></i>
                <p>Modamba, NY 80021, United States</p>
              </li>
              <li class="item">
                <i class="fa fa-envelope-o" aria-hidden="true"></i>
                <a href="#">
                  <p>Support@medic.com</p>
                </a>
              </li>
              <li class="item">
                <i class="fa fa-phone" aria-hidden="true"></i>
                <p>(88017) +123 4567</p>
              </li>
            </ul>
            <ul class="list-inline social-icons">
              <li><a href="#"><i class="fa fa-facebook"></i></a></li>
              <li><a href="#"><i class="fa fa-twitter"></i></a></li>
              <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
              <li><a href="#"><i class="fa fa-vimeo"></i></a></li>
            </ul>
          </div>
        </div>
        <div class="col-md-4 col-sm-6 col-xs-12">
          <h6>Services</h6>
          <ul class="menu-link">
            <li>
              <a href="#">
                <i class="fa fa-angle-right" aria-hidden="true"></i>Orthopadic Liabilities</a>
            </li>
            <li>
              <a href="#">
                <i class="fa fa-angle-right" aria-hidden="true"></i>Dental Clinic</a>
            </li>
            <li>
              <a href="#">
                <i class="fa fa-angle-right" aria-hidden="true"></i>Dormamu Clinic</a>
            </li>
            <li>
              <a href="#">
                <i class="fa fa-angle-right" aria-hidden="true"></i>Psycological Clinic</a>
            </li>
            <li>
              <a href="#">
                <i class="fa fa-angle-right" aria-hidden="true"></i>Gynaecological Clinic</a>
            </li>
          </ul>
        </div>
        <div class="col-md-4 col-sm-6 col-xs-12">
          <div class="social-links">
            <h6>Recent Posts</h6>
            <ul>
              <li class="item">
                <div class="media">
                  <div class="media-left">
                    <a href="#">
                      <img class="media-object" src="<?php echo base_url(); ?>theme/images/blog/post-thumb-small.jpg" alt="post-thumb">
                    </a>
                  </div>
                  <div class="media-body">
                    <h4 class="media-heading"><a href="#">Post Title</a></h4>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Aperiam, dolorem.</p>
                  </div>
                </div>
              </li>
              <a href="index.html">
                  <img src="<?php echo base_url(); ?>theme/images/logo-2.png" alt="">
                </a>
              </figure>
            </div>
            
              <li class="item">
                <div class="media">
                  <div class="media-left">
                    <a href="index.html">
                  <img src="<?php echo base_url(); ?>theme/images/logo-2.png" alt="">
                </a>
                  </div>
                  <div class="media-body">
                    <h4 class="media-heading">
                      <a href="#">Post Title</a>
                    </h4>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Aperiam, dolorem.</p>
                  </div>
                </div>
              </li>
            </ul>
          </div>
        </div>
      </div>
    </div>
  </div> -->
  <div class="footer-bottom">
    <div class="container clearfix">
       <!-- <div class="col-md-6">
              <a href="index.html">
                <img src="http://ditjenpktn.kemendag.go.id/theme/default/assets/images/repository/header-kemendag-logo.png" class="responsive-img" alt="" style="vertical-align: middle;">&nbsp;
              </a>
              <a href="index.html">
                <img src="http://ditjenpktn.kemendag.go.id/theme/default/assets/images/repository/footer-kemendag-logo-text.png" alt="" style="margin-top: 5%;">
              </a>

            </div> -->

      <!-- <div style="margin-top: 5%;">

                <i class="fa fa-map-marker">&nbsp;<span style="font-family: 'Source Sans Pro', sans-serif; font-size: 16px;">Direktorat Jenderal Perlindungan Konsumen </span><br><span style="margin-left: 5%;">dan Tertib Niaga - </span></i>

                <p>Kementerian Perdagangan Republik Indonesia Jl. M. I. Ridwan Rais No.5, Jakarta Pusat 10110</p>
           
      </div> -->
      <div class="copyright-text" style="margin-top: 0%;">
        <p>&copy; Copyright 2018. All Rights Reserved by
          <a href="index.html">Medic</a>
        </p>
      </div>
      <ul class="footer-bottom-link" style="margin-top: 0%;">
        <li>
          <a href="index.html">Home</a>
        </li>
        <li>
          <a href="about.html">About</a>
        </li>
        <li>
          <a href="contact.html">Contact</a>
        </li>
      </ul>
    </div>
  </div>
</footer>
<!--End footer-main-->

</div>
<div id="myModal" class="modal fade">
  <div class="modal-dialog modal-login">
    <div class="modal-content">
      <form action="" method="post">
        <div class="modal-header">        
          <h4 class="modal-title" style="color: #03243c">Login</h4>
          <button type="button" onclick="close()" id="close" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
           <button onclick="close_pass()" id="close_pass" class="close" style="display: none;" >&times;</button>
        </div>
        <div class="modal-body">        
          <div class="form-group" id="cek_user">
            <label><b>Username</b></label>
            <input type="text" id="username" class="form-control" required="required">
          </div>
          <div class="form-group" id="cek_pass" style="display: none;">
            <label>Password</label>
            <input type="text" id="password" class="form-control" >
          </div>
        </div>

        <div class="modal-footer">
          <label class="checkbox-inline pull-left"><input type="checkbox"> Remember me</label>
          <input type="button" class="btn btn-primary pull-right" value="Login" onclick="login1()" style="background: #03243c">
        </div>
      </form>
    </div>
  </div>
</div>

<div id="myModalRegist" class="modal fade">
  <div class="modal-dialog modal-login">
    <div class="modal-content">
      <form action="" method="post">
        <div class="modal-header">        
          <h4 class="modal-title" style="color: #03243c">Registrasi</h4>
          <button type="button" onclick="close()" id="close_regist" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
           
        </div>
        <div class="modal-body">        
          <div class="form-group" id="cek_user">
            <label><b>Username</b></label>
            <input type="text" id="username_user" class="form-control" required="required">
          </div>
          <div class="form-group" id="cek_pass">
            <label>Password</label>
            <input type="password" id="password_user" class="form-control" required="required" >
          </div>
          <div class="form-group" id="cek_pass_again">
            <label>Re-Password</label>
            <input type="password" id="re-password" class="form-control" required="required" >
          </div>
        </div>

        <div class="modal-footer">
          <label class="checkbox-inline pull-left"><input type="checkbox"> Remember me</label>
          <input type="button" class="btn btn-primary pull-right" value="Regist" onclick="regist()" style="background: #03243c">
        </div>
      </form>
    </div>
  </div>
</div>  

<div id="myModal2" class="modal fade">
  <div class="modal-dialog modal-login">
    <div class="modal-content">
      <form action="" method="post">
        <div class="modal-header">        
          <h4 class="modal-title">Login</h4>
          <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
        </div>
        <div class="modal-body">        
          <div class="form-group">
            <label>Password</label>
            <input type="text" id="password1" class="form-control" required="required">
          </div>
        </div>
        <img src="">
        <div class="modal-footer">
         <!--  <label class="checkbox-inline pull-left"><input type="checkbox"> Remember me</label> -->
          <input type="button" class="btn btn-primary pull-right" value="Login">
        </div>
      </form>
    </div>
  </div>
</div>
<!--End pagewrapper-->


<!--Scroll to top-->
<div class="scroll-to-top scroll-to-target" data-target=".header-top">
  <span class="icon fa fa-angle-up"></span>
</div>

<script src="<?php echo base_url(); ?>theme/plugins/jquery.js"></script>
<script src="<?php echo base_url(); ?>theme/plugins/bootstrap.min.js"></script>
<script src="<?php echo base_url(); ?>theme/plugins/bootstrap-select.min.js"></script>
<!-- Slick Slider -->
<script src="<?php echo base_url(); ?>theme/plugins/slick/slick.min.js"></script>
<!-- FancyBox -->
<script src="<?php echo base_url(); ?>theme/plugins/fancybox/jquery.fancybox.min.js"></script>
<!-- Google Map -->
<!-- <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCC72vZw-6tGqFyRhhg5CkF2fqfILn2Tsw"></script>
<script src="<?php echo base_url(); ?>theme/plugins/google-map/gmap.js"></script> -->

<script src="<?php echo base_url(); ?>theme/plugins/validate.js"></script>
<script src="<?php echo base_url(); ?>theme/plugins/wow.js"></script>
<script src="<?php echo base_url(); ?>theme/plugins/jquery-ui.js"></script>
<script src="<?php echo base_url(); ?>theme/plugins/timePicker.js"></script>
<script src="<?php echo base_url(); ?>theme/js/script.js"></script>
</body>

</html>

<script type="text/javascript">

  function close()
  {
    // document.getElementById("cek_user").style.display = 'block';
    // document.getElementById("cek_pass").style.display = 'none';
    alert("aaa");
  }

  function login_usrnm()
  {
    $("#myModal").modal('show');
     // $("#myModal2").modal('hide');
  }

   function regist_user()
  {
    $("#myModalRegist").modal('show');
     // $("#myModal2").modal('hide');
  }

  function regist()
  {
    // alert("aaa");
    var nama = $("#username_user").val();
    var pass = $("#password_user").val();
    var re_pass = $("#re-password").val();
    if(nama == "")
    {
       alert( "Maaf, Username tidak boleh dikosongkan.!!" );
       $("#username_user").focus();
        return false ;
    }

    else if(pass == "")
    {
       alert( "Maaf, Password tidak boleh dikosongkan.!!" );
       $("#password_user").focus();
        return false ;
    }

    else if(re_pass == "")
    {
      alert( "Maaf, Re-Password tidak boleh dikosongkan.!!" );
       $("#re-password").focus();
        return false ;
    }
  }

  function login1()
  {
    //alert("aaaa");
    //$("#myModal").fadeOut("fast"); 
    //$("#myModal2").fadeOut("fast"); 
    // /document.getElementById("myModal").style.display = 'none';
    //document.getElementById("myModal2").style.display = 'block';
    //$("#loading").html('<img src = "loading.gif">');
    var site_url = '<?php echo site_url(); ?>/';
    
    var username = $("#username").val();
    var password = $("#password").val();
    //$.LoadingOverlay("show");

    if(username == "")
    {
       alert( "Maaf, Username tidak boleh dikosongkan.!!" );
       $("#username").focus();
        return false ;
    }
    

    if(username == "admin")
    {
      // $("#myModal").modal('hide');
      // $("#myModal2").modal('show');
      if(password == "")
      {
        document.getElementById("cek_user").style.display = 'none';
        document.getElementById("cek_pass").style.display = 'block';
        document.getElementById("close").style.display = 'none';
        document.getElementById("close_pass").style.display = 'block';


      }
      else if(password == "123")
      {
        alert("Berhasil");
        // alert(username);
        // alert(password);
        window.location.href = site_url + 'portal/index';
      }
      else
      {
        // alert(username);
        // alert(password);
        alert("Password Anda Salah");
         $("#password").val("");
        $("#password").focus();
        
      }
    }
    else
    {
      // alert(username);
      // alert(password);
      alert("User Tidak Dikenali");
      $("#username").val("");
      $("#username").focus();
    }

    

  }

  function dit_niaga(type)
  {
      if(type == 1)
      {
          document.getElementById("gambar5_2").style.display = 'block';
          document.getElementById("gambar5").style.display = 'none';
          document.getElementById("gambar5_3").style.display = 'none';
      }
      else if(type == 2)
      {
          document.getElementById("gambar5_2").style.display = 'none';
          document.getElementById("gambar5").style.display = 'block';
          document.getElementById("gambar5_3").style.display = 'none';
      }
      else if(type == 3)
      {
          document.getElementById("gambar5_2").style.display = 'none';
          document.getElementById("gambar5").style.display = 'none';
          document.getElementById("gambar5_3").style.display = 'block';
      }
      else if(type == 4)
      {
          document.getElementById("gambar5_2").style.display = 'block';
          document.getElementById("gambar5").style.display = 'none';
          document.getElementById("gambar5_3").style.display = 'none';
      }
  }



  function dit_metrologi(type)
  {
      if(type == 1)
      {
          document.getElementById("gambar3_2").style.display = 'block';
          document.getElementById("gambar3").style.display = 'none';
          document.getElementById("gambar3_3").style.display = 'none';
      }
      else if(type == 2)
      {
          document.getElementById("gambar3_2").style.display = 'none';
          document.getElementById("gambar3").style.display = 'block';
          document.getElementById("gambar3_3").style.display = 'none';
      }
      else if(type == 3)
      {
          document.getElementById("gambar3_2").style.display = 'none';
          document.getElementById("gambar3").style.display = 'none';
          document.getElementById("gambar3_3").style.display = 'block';
      }
      else if(type == 4)
      {
          document.getElementById("gambar3_2").style.display = 'block';
          document.getElementById("gambar3").style.display = 'none';
          document.getElementById("gambar3_3").style.display = 'none';
      }
      else if(type == 5)
      {
          document.getElementById("gambar3_2").style.display = 'none';
          document.getElementById("gambar3").style.display = 'block';
          document.getElementById("gambar3_3").style.display = 'none';
      }
  }

  function dit_stand(type)
  {
      if(type == 1)
      {
          document.getElementById("gambar2_2").style.display = 'block';
          document.getElementById("gambar2").style.display = 'none';
          document.getElementById("gambar2_3").style.display = 'none';
      }
      else if(type == 2)
      {
          document.getElementById("gambar2_2").style.display = 'none';
          document.getElementById("gambar2").style.display = 'block';
          document.getElementById("gambar2_3").style.display = 'none';
      }
      else if(type == 3)
      {
          document.getElementById("gambar2_2").style.display = 'none';
          document.getElementById("gambar2").style.display = 'none';
          document.getElementById("gambar2_3").style.display = 'block';
      }
      else if(type == 4)
      {
          document.getElementById("gambar2_2").style.display = 'block';
          document.getElementById("gambar2").style.display = 'none';
          document.getElementById("gambar2_3").style.display = 'none';
      }
      else if(type == 5)
      {
          document.getElementById("gambar2_2").style.display = 'none';
          document.getElementById("gambar2").style.display = 'block';
          document.getElementById("gambar2_3").style.display = 'none';
      }
      else if(type == 6)
      {
          document.getElementById("gambar2_2").style.display = 'none';
          document.getElementById("gambar2").style.display = 'none';
          document.getElementById("gambar2_3").style.display = 'block';
      }
      else if(type == 7)
      {
          document.getElementById("gambar2_2").style.display = 'block';
          document.getElementById("gambar2").style.display = 'none';
          document.getElementById("gambar2_3").style.display = 'none';
      }
      else if(type == 8)
      {
          document.getElementById("gambar2_2").style.display = 'none';
          document.getElementById("gambar2").style.display = 'block';
          document.getElementById("gambar2_3").style.display = 'none';
      }
      else if(type == 9)
      {
          document.getElementById("gambar2_2").style.display = 'none';
          document.getElementById("gambar2").style.display = 'none';
          document.getElementById("gambar2_3").style.display = 'block';
      }
      else if(type == 10)
      {
          document.getElementById("gambar2_2").style.display = 'block';
          document.getElementById("gambar2").style.display = 'none';
          document.getElementById("gambar2_3").style.display = 'none';
      }
      else if(type == 11)
      {
          document.getElementById("gambar2_2").style.display = 'none';
          document.getElementById("gambar2").style.display = 'block';
          document.getElementById("gambar2_3").style.display = 'none';
      }

  }

  function dit_per1()
  {
    document.getElementById("gambar1_2").style.display = 'block';
    document.getElementById("gambar1").style.display = 'none';
    document.getElementById("gambar1_3").style.display = 'none';
  }

  function dit_pengawas(type)
  {
    if(type == 1)
    {
        document.getElementById("gambar4_2").style.display = 'block';
        document.getElementById("gambar4").style.display = 'none';
        document.getElementById("gambar4_3").style.display = 'none';
    }
    
  }

  function dit_per2()
  {
    document.getElementById("gambar1_3").style.display = 'block';
    document.getElementById("gambar1").style.display = 'none';
    document.getElementById("gambar1_2").style.display = 'none';
  }

  function dit_per3()
  {
    document.getElementById("gambar1_3").style.display = 'none';
    document.getElementById("gambar1").style.display = 'block';
    document.getElementById("gambar1_2").style.display = 'none';
  }

  

</script>