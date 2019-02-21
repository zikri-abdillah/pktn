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
                                <a href="<?=base_url()?>index.php/portal/menu/home">Home</a>
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
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Perizinan
                                      <span class="caret"></span>
                                </a>
                                <ul class="dropdown-menu" style="margin-top: 7.5px;">
                                      <li>
                                            <a href="#" onclick="sub_standalitu()">DIT. Standalitu</a>
                                            
                                      </li>
                                       <li role="separator" class="divider"></li>
                                      <li>
                                            <a href="#">DIT. Pemerdayaan Konsumen</a>
                                      </li>
                                      <li role="separator" class="divider"></li>
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
                          </li>


                          <li>
                                <a href="<?=base_url()?>index.php/portal/menu/peraturan">Peraturan</a>
                          </li>
                          <li>

                             <li>
                                <a href="about.html">Tracking</a>
                          </li>
                          
                          
                          <li>
                                <a href="#" onclick="regist_user()">Register</a>
                          </li>
                          <li>
                                <a href="<?=base_url()?>index.php/portal/menu/faq">F.A.Q</a>
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
<section>
  <?php
    $this->load->view($tampil);
  ?>
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
<div id="myModal_subStandalitu" class="modal fade" style="width: 100%;" style="display: block;">
  <div class="modal-dialog modal-login" style="width: 95%;">
    <div class="modal-content" >
      <form action="" method="post">
        <div class="modal-header">        
          <h4 class="modal-title" style="color: #03243c">Direktorat Standalitu</h4>
          <button type="button" onclick="close()" id="close_regist" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
           
        </div>
        <div class="modal-body" style="margin-top: -1%">        
          <div class="tabs" style="padding: 10px 20px;">
                        <ul class="nav nav-tabs" role="tablist" style="padding: 10px 20px;">
                            <li role="presentation" class="active">
                                <a href="#stand1"  data-toggle="tab" onclick="stand_modal('1')" style="font-size: 16px;">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;LIMS &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</a>
                            </li>
                            <li role="presentation" width= "100%">
                                <a href="#stand2" data-toggle="tab" style="font-size: 16px;" onclick="stand_modal('2')">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;LPK &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; </a>
                            </li>
                            <li role="presentation">
                                <a href="#stand3" data-toggle="tab" style="font-size: 16px;" onclick="stand_modal('3')">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; NPB&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</a>
                            </li>
                            <li role="presentation">
                                <a href="#stand4" data-toggle="tab" style="font-size: 16px;" onclick="stand_modal('4')">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;TPP &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</a>
                            </li>
                            <li role="presentation" >
                                <a href="#stand5" data-toggle="tab" style="font-size: 16px;" onclick="stand_modal('5')"> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Kalibrasi&nbsp;&nbsp;&nbsp;&nbsp;</a>
                            </li>
                            
                             <li role="presentation">
                                <a href="#stand6"  data-toggle="tab" style="font-size: 16px;" onclick="stand_modal('6')">&nbsp;&nbsp;&nbsp;&nbsp;E-Dupak&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</a>
                            </li>
                            <li role="presentation" width= "100%">
                                <a href="#stand7" data-toggle="tab" style="font-size: 16px;" onclick="stand_modal('7')">Sertifikasi Produk </a>
                            </li>
                            <li role="presentation">
                                <a href="#stand8" data-toggle="tab" style="font-size: 16px;" onclick="stand_modal('8')"> Sertifikasi Personil</a>
                            </li>
                            <li role="presentation">
                                <a href="#stand9" data-toggle="tab" style="font-size: 16px;" onclick="stand_modal('9')"> Balai Sertifikat </a>
                            </li>
                            <li role="presentation" >
                                <a href="#stand10" data-toggle="tab " style="font-size: 16px;" onclick="stand_modal('10')">Penguji Mutu Barang</a>
                            </li>
                             <li role="presentation" style="padding-right: 10px;">
                                <a href="#stand11" data-toggle="tab" style="font-size: 16px;" onclick="stand_modal('11')">PORTAL INATRIMS</a>
                            </li>
                        </ul>
                    </div>
  <section>
    <div class="container">
                                                                                        
  <div class="table-responsive" style="margin-top: -2%;" id="stand_lims">          
  <table class="table" style=" color: #000">
    <thead>
      <tr bgcolor="#0d1a2f" style="color: #fff">
        <th><center>No</center></th>
        <th colspan="4"><center>Persyaratan LIMS</center></th>
        <th><center>Detail</center></th>
      </tr>
    </thead>
    <tbody>
      <tr>
        <td align="center">1</td>
        <td colspan="4" width="80%">Peraturan Menteri Perdagangan Nomor 111 Tahun 2018 tentang Ketentuan dan Tata Cara Pembuatan Deklarasi Asal Barang (Origin Declaration) untuk Barang Ekspor Asal Indonesia</td>
        <td align="center"> + Selengkapnya</td>
      </tr>
      <tr bgcolor="#ebe6e6">
        <td align="center">2</td>
        <td colspan="4" width="80%">Peraturan Menteri Perdagangan Nomor 37 Tahun 2018 tentang Tata Cara Pembayaran Penerimaan Negara atas Penerbitan Surat Keterangan Asal Untuk Barang Asal Indonesia.</td>
        <td align="center"> + Selengkapnya</td>
      </tr>
      <tr>
        <td align="center">3</td>
        <td colspan="4" width="80%">Keputusan Presiden Republik Indonesia Nomor 58 tahun 1971 Tentang Penetapan Pejabat yang Berwenang Mengeluarkan Surat Keterangan Asal</td>
        <td align="center"> + Selengkapnya</td>
      </tr>
      <tr bgcolor="#ebe6e6">
        <td align="center">4</td>
        <td colspan="4" width="80%">Keputusan Menteri Perdagangan Republik Indonesia Nomor 397 Tahun 2018 Tentang Penetapan Pejabat Penerbit Surat Keterangan Asal</td>
        <td align="center"> + Selengkapnya</td>
      </tr>
      <tr>
        <td align="center">5</td>
        <td colspan="4" width="80%">Keputusan Menteri Perdagangan 104 Tahun 2018 Tentang Penetapan Instansi Penerbit Surat Keterangan Asala</td>
        <td align="center"> + Selengkapnya</td>
      </tr>
      <tr bgcolor="#ebe6e6">
        <td align="center">6</td>
        <td colspan="4" width="80%">Peraturan Menteri Perdagangan 24 Tahun 2018 Tentang Ketentuan dan Tata Cara Penerbitan SKA untuk Barang Asal Indonesia</td>
        <td align="center"> + Selengkapnya</td>
      </tr>
      <tr>
        <td align="center">7</td>
        <td colspan="4" width="80%">Peraturan Menteri Perdagangan 39/M-DAG/PER/8/2013 Tentang Ketentuan Sertifikasi Mandiri (SC)</td>
        <td align="center"> + Selengkapnya</td>
      </tr>
      <tr bgcolor="#ebe6e6">
        <td align="center">8</td>
        <td colspan="4" width="80%">Peraturan Menteri Perdagangan 24 Tahun 2018 Tentang Ketentuan dan Tata Cara Penerbitan SKA untuk Barang Asal Indonesia</td>
        <td align="center"> + Selengkapnya</td>
      </tr>
      <tr>
        <td align="center">9</td>
        <td colspan="4" width="80%">Peraturan Menteri Perdagangan 39/M-DAG/PER/8/2013 Tentang Ketentuan Sertifikasi Mandiri (SC)</td>
        <td align="center"> + Selengkapnya</td>
      </tr>
      <tr bgcolor="#ebe6e6">
        <td align="center">10</td>
        <td colspan="4" width="80%">Peraturan Menteri Perdagangan 24 Tahun 2018 Tentang Ketentuan dan Tata Cara Penerbitan SKA untuk Barang Asal Indonesia</td>
        <td align="center"> + Selengkapnya</td>
      </tr>
      <tr>
        <td align="center">11</td>
        <td colspan="4" width="80%">Peraturan Menteri Perdagangan 39/M-DAG/PER/8/2013 Tentang Ketentuan Sertifikasi Mandiri (SC)</td>
        <td align="center"> + Selengkapnya</td>
      </tr>
    </tbody>
  </table>
  </div>
</div>



  </section>
  <!-- LPK -->
  <section>
    <div class="container">
                                                                                        
  <div class="table-responsive" style="margin-top: -2%; display: none;" id="stand_lpk">          
  <table class="table" style=" color: #000">
    <thead>
      <tr bgcolor="#0d1a2f" style="color: #fff">
        <th><center>No</center></th>
        <th colspan="4"><center>Persyaratan LPK</center></th>
        <th><center>Detail</center></th>
      </tr>
    </thead>
    <tbody>
      <tr>
        <td align="center">1</td>
        <td colspan="4" width="80%">Peraturan Menteri Perdagangan Nomor 111 Tahun 2018 tentang Ketentuan dan Tata Cara Pembuatan Deklarasi Asal Barang (Origin Declaration) untuk Barang Ekspor Asal Indonesia</td>
        <td align="center"> + Selengkapnya</td>
      </tr>
      <tr bgcolor="#ebe6e6">
        <td align="center">2</td>
        <td colspan="4" width="80%">Peraturan Menteri Perdagangan Nomor 37 Tahun 2018 tentang Tata Cara Pembayaran Penerimaan Negara atas Penerbitan Surat Keterangan Asal Untuk Barang Asal Indonesia.</td>
        <td align="center"> + Selengkapnya</td>
      </tr>
      <tr>
        <td align="center">3</td>
        <td colspan="4" width="80%">Keputusan Presiden Republik Indonesia Nomor 58 tahun 1971 Tentang Penetapan Pejabat yang Berwenang Mengeluarkan Surat Keterangan Asal</td>
        <td align="center"> + Selengkapnya</td>
      </tr>
      <tr bgcolor="#ebe6e6">
        <td align="center">4</td>
        <td colspan="4" width="80%">Keputusan Menteri Perdagangan Republik Indonesia Nomor 397 Tahun 2018 Tentang Penetapan Pejabat Penerbit Surat Keterangan Asal</td>
        <td align="center"> + Selengkapnya</td>
      </tr>
      <tr>
        <td align="center">5</td>
        <td colspan="4" width="80%">Keputusan Menteri Perdagangan 104 Tahun 2018 Tentang Penetapan Instansi Penerbit Surat Keterangan Asala</td>
        <td align="center"> + Selengkapnya</td>
      </tr>
      <tr bgcolor="#ebe6e6">
        <td align="center">6</td>
        <td colspan="4" width="80%">Peraturan Menteri Perdagangan 24 Tahun 2018 Tentang Ketentuan dan Tata Cara Penerbitan SKA untuk Barang Asal Indonesia</td>
        <td align="center"> + Selengkapnya</td>
      </tr>
      <tr>
        <td align="center">7</td>
        <td colspan="4" width="80%">Peraturan Menteri Perdagangan 39/M-DAG/PER/8/2013 Tentang Ketentuan Sertifikasi Mandiri (SC)</td>
        <td align="center"> + Selengkapnya</td>
      </tr>
      <tr bgcolor="#ebe6e6">
        <td align="center">8</td>
        <td colspan="4" width="80%">Peraturan Menteri Perdagangan 24 Tahun 2018 Tentang Ketentuan dan Tata Cara Penerbitan SKA untuk Barang Asal Indonesia</td>
        <td align="center"> + Selengkapnya</td>
      </tr>
      <tr>
        <td align="center">9</td>
        <td colspan="4" width="80%">Peraturan Menteri Perdagangan 39/M-DAG/PER/8/2013 Tentang Ketentuan Sertifikasi Mandiri (SC)</td>
        <td align="center"> + Selengkapnya</td>
      </tr>
      <tr bgcolor="#ebe6e6">
        <td align="center">10</td>
        <td colspan="4" width="80%">Peraturan Menteri Perdagangan 24 Tahun 2018 Tentang Ketentuan dan Tata Cara Penerbitan SKA untuk Barang Asal Indonesia</td>
        <td align="center"> + Selengkapnya</td>
      </tr>
      <tr>
        <td align="center">11</td>
        <td colspan="4" width="80%">Peraturan Menteri Perdagangan 39/M-DAG/PER/8/2013 Tentang Ketentuan Sertifikasi Mandiri (SC)</td>
        <td align="center"> + Selengkapnya</td>
      </tr>
    </tbody>
  </table>
  </div>
</div>



  </section>
  
  <!-- END LPK -->
        </div>

       <!--  <div class="modal-footer">
          <label class="checkbox-inline pull-left"><input type="checkbox"> Remember me</label>
          <input type="button" class="btn btn-primary pull-right" value="Regist" onclick="regist()" style="background: #03243c">
        </div> -->
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

  function stand_modal(type) {
    if(type == 1)
    {
      document.getElementById("stand_lims").style.display = 'block';
      document.getElementById("stand_lpk").style.display = 'none';
      document.getElementById("stand_npb").style.display = 'none';
      document.getElementById("stand_tpp").style.display = 'none';
      document.getElementById("stand_kalibrasi").style.display = 'none';
      document.getElementById("stand_dupak").style.display = 'none';
      document.getElementById("stand_produk").style.display = 'none';
      document.getElementById("stand_personil").style.display = 'none';
      document.getElementById("stand_balai").style.display = 'none';
      document.getElementById("stand_barang").style.display = 'none';
      document.getElementById("stand_inatrims").style.display = 'none';
    }
    else if(type == 2)
    {
      document.getElementById("stand_lims").style.display = 'none';
      document.getElementById("stand_lpk").style.display = 'block';
      document.getElementById("stand_npb").style.display = 'none';
      document.getElementById("stand_tpp").style.display = 'none';
      document.getElementById("stand_kalibrasi").style.display = 'none';
      document.getElementById("stand_dupak").style.display = 'none';
      document.getElementById("stand_produk").style.display = 'none';
      document.getElementById("stand_personil").style.display = 'none';
      document.getElementById("stand_balai").style.display = 'none';
      document.getElementById("stand_barang").style.display = 'none';
      document.getElementById("stand_inatrims").style.display = 'none';
    }

    else if(type == 3)
    {
      document.getElementById("stand_lims").style.display = 'none';
      document.getElementById("stand_lpk").style.display = 'none';
      document.getElementById("stand_npb").style.display = 'none';
      document.getElementById("stand_tpp").style.display = 'none';
      document.getElementById("stand_kalibrasi").style.display = 'none';
      document.getElementById("stand_dupak").style.display = 'none';
      document.getElementById("stand_produk").style.display = 'none';
      document.getElementById("stand_personil").style.display = 'none';
      document.getElementById("stand_balai").style.display = 'none';
      document.getElementById("stand_barang").style.display = 'none';
      document.getElementById("stand_inatrims").style.display = 'none';
    }
    else if(type == 4)
    {
      document.getElementById("stand_lims").style.display = 'none';
      document.getElementById("stand_lpk").style.display = 'none';
      document.getElementById("stand_npb").style.display = 'none';
      document.getElementById("stand_tpp").style.display = 'none';
      document.getElementById("stand_kalibrasi").style.display = 'none';
      document.getElementById("stand_dupak").style.display = 'none';
      document.getElementById("stand_produk").style.display = 'none';
      document.getElementById("stand_personil").style.display = 'none';
      document.getElementById("stand_balai").style.display = 'none';
      document.getElementById("stand_barang").style.display = 'none';
      document.getElementById("stand_inatrims").style.display = 'none';
    }
    else if(type == 5)
    {
      document.getElementById("stand_lims").style.display = 'none';
      document.getElementById("stand_lpk").style.display = 'none';
      document.getElementById("stand_npb").style.display = 'none';
      document.getElementById("stand_tpp").style.display = 'none';
      document.getElementById("stand_kalibrasi").style.display = 'none';
      document.getElementById("stand_dupak").style.display = 'none';
      document.getElementById("stand_produk").style.display = 'none';
      document.getElementById("stand_personil").style.display = 'none';
      document.getElementById("stand_balai").style.display = 'none';
      document.getElementById("stand_barang").style.display = 'none';
      document.getElementById("stand_inatrims").style.display = 'none';
    }
    else if(type == 6)
    {
      document.getElementById("stand_lims").style.display = 'none';
      document.getElementById("stand_lpk").style.display = 'none';
      document.getElementById("stand_npb").style.display = 'none';
      document.getElementById("stand_tpp").style.display = 'none';
      document.getElementById("stand_kalibrasi").style.display = 'none';
      document.getElementById("stand_dupak").style.display = 'none';
      document.getElementById("stand_produk").style.display = 'none';
      document.getElementById("stand_personil").style.display = 'none';
      document.getElementById("stand_balai").style.display = 'none';
      document.getElementById("stand_barang").style.display = 'none';
      document.getElementById("stand_inatrims").style.display = 'none';
    }
    else if(type == 7)
    {
      document.getElementById("stand_lims").style.display = 'none';
      document.getElementById("stand_lpk").style.display = 'none';
      document.getElementById("stand_npb").style.display = 'none';
      document.getElementById("stand_tpp").style.display = 'none';
      document.getElementById("stand_kalibrasi").style.display = 'none';
      document.getElementById("stand_dupak").style.display = 'none';
      document.getElementById("stand_produk").style.display = 'none';
      document.getElementById("stand_personil").style.display = 'none';
      document.getElementById("stand_balai").style.display = 'none';
      document.getElementById("stand_barang").style.display = 'none';
      document.getElementById("stand_inatrims").style.display = 'none';
    }
    else if(type == 8)
    {
      document.getElementById("stand_lims").style.display = 'none';
      document.getElementById("stand_lpk").style.display = 'none';
      document.getElementById("stand_npb").style.display = 'none';
      document.getElementById("stand_tpp").style.display = 'none';
      document.getElementById("stand_kalibrasi").style.display = 'none';
      document.getElementById("stand_dupak").style.display = 'none';
      document.getElementById("stand_produk").style.display = 'none';
      document.getElementById("stand_personil").style.display = 'none';
      document.getElementById("stand_balai").style.display = 'none';
      document.getElementById("stand_barang").style.display = 'none';
      document.getElementById("stand_inatrims").style.display = 'none';
    }
    else if(type == 9)
    {
      document.getElementById("stand_lims").style.display = 'none';
      document.getElementById("stand_lpk").style.display = 'none';
      document.getElementById("stand_npb").style.display = 'none';
      document.getElementById("stand_tpp").style.display = 'none';
      document.getElementById("stand_kalibrasi").style.display = 'none';
      document.getElementById("stand_dupak").style.display = 'none';
      document.getElementById("stand_produk").style.display = 'none';
      document.getElementById("stand_personil").style.display = 'none';
      document.getElementById("stand_balai").style.display = 'none';
      document.getElementById("stand_barang").style.display = 'none';
      document.getElementById("stand_inatrims").style.display = 'none';
    }
    else if(type == 10)
    {
      document.getElementById("stand_lims").style.display = 'none';
      document.getElementById("stand_lpk").style.display = 'none';
      document.getElementById("stand_npb").style.display = 'none';
      document.getElementById("stand_tpp").style.display = 'none';
      document.getElementById("stand_kalibrasi").style.display = 'none';
      document.getElementById("stand_dupak").style.display = 'none';
      document.getElementById("stand_produk").style.display = 'none';
      document.getElementById("stand_personil").style.display = 'none';
      document.getElementById("stand_balai").style.display = 'none';
      document.getElementById("stand_barang").style.display = 'none';
      document.getElementById("stand_inatrims").style.display = 'none';
    }
    else if(type == 11)
    {
      document.getElementById("stand_lims").style.display = 'none';
      document.getElementById("stand_lpk").style.display = 'none';
      document.getElementById("stand_npb").style.display = 'none';
      document.getElementById("stand_tpp").style.display = 'none';
      document.getElementById("stand_kalibrasi").style.display = 'none';
      document.getElementById("stand_dupak").style.display = 'none';
      document.getElementById("stand_produk").style.display = 'none';
      document.getElementById("stand_personil").style.display = 'none';
      document.getElementById("stand_balai").style.display = 'none';
      document.getElementById("stand_barang").style.display = 'none';
      document.getElementById("stand_inatrims").style.display = 'none';
    }

  }

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

  function sub_standalitu()
  {
      $("#myModal_subStandalitu").modal('show');
      $("#myModalRegist").modal('hide');
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