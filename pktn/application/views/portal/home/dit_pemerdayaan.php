<style type="text/css">
        fieldset.scheduler-border {
    border: 1px groove #ddd !important;
    padding: 0 1.4em 1.4em 1.4em !important;
    margin: 0 0 1.5em 0 !important;
    -webkit-box-shadow:  0px 0px 0px 0px #000;
            box-shadow:  0px 0px 0px 0px #000;
    border: 2px solid #000 !important;
    border-radius: 12px;
}
 
legend.scheduler-border {
    font-size: 1.2em !important;
    font-weight: bold !important;
    text-align: left !important;
    width:auto;
    padding:0 10px;
    border-bottom:none;
    margin-bottom: 5px;
}
 
</style>

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
<section class="service-tab-section section" style="margin-top: -3%">
    <div class="outer-box clearfix">
        <div class="container" style="width: 98%">
            <div class="row" >
                <div class="col-md-12">
                    <!-- Nav tabs -->
                    <div class="tabs">

                        <?php
                             $class1 = "";
                             
                             $class2 = "";
                            
                            if($part == 2)
                            {
                                $class1 = "active"; 
                            }
                            elseif($part == 3)
                            {
                                $class2 = "active";
                            }
                           
                        ?>

                        <ul class="nav nav-tabs" role="tablist">
                            <li role="presentation" class=<?=$class1?>>
                                <a href="#dormitory"  data-toggle="tab">Fungsi Dan Tugas <?=$part?></a>
                            </li>
                            <li role="presentation" width= "100%" class=<?=$class2?>>
                                <a href="#orthopedic" data-toggle="tab"> &nbsp;&nbsp;&nbsp; LPKSM &nbsp;&nbsp; </a>
                            </li>
                            <li role="presentation">
                                <a href="http://ditjenpktn.kemendag.go.id/app/repository/upload/eselon%202/dit%20Metrologi/Struktur%20Organisasi/11_struktur_metrologi%202_1.jpg" target="_blank" >  &nbsp;&nbsp;&nbsp;&nbsp; Struktur Organisasi &nbsp;&nbsp;&nbsp;</a>
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
                    <?php
                        $class_s1 = "";
                        $class_s2 = "";
                        if($part == 2)
                        {
                            $class_s1 = "active row";

                        }
                        else if($part == 3)
                        {
                            $class_s2 = "active row";
                            $class_s1 = "";
                        }
                    ?>
                    <div class="tab-content">
                        <div class="service-box tab-pane fade in <?=$class_s1?>" id="dormitory" style="margin-left: 0.1%; ">
                            <BR/>
                        <fieldset class="scheduler-border" style="margin-top: 10%">
                            <legend class="scheduler-border">DIT PENGAWASAN </legend>

                            <div style="text-align: left; margin-top: 2%;">
                                <span style="font-size: 20px; font-family: 'Source Sans Pro', sans-serif;color: #03243c"><b>1) Tugas </b> </span><br/>
                                  </div>
                                  <div style="margin-left: 2%;">
                                    <p style="text-align: justify;font-size: 18px; font-family: 'Source Sans Pro', sans-serif;color: #03243c">
                                        Direktorat Pemberdayaan Konsumen mempunyai tugas melaksanakan perumusan dan pelaksanaan kebijakan, penyusunan pedoman, norma, standar, prosedur, dan kriteria, serta pemberian bimbingan teknis dan evaluasi pelaksanaan kebijakan di bidang pemberdayaan konsumen.
                                    </p><br>
                                </div>
                                <div style="text-align: left;">
                                    <span style="font-size: 18px; font-family: 'Source Sans Pro', sans-serif;color: #03243c"><b>2) Fungsi </b> </span><br/>
                                  </div>
                                  <div style="margin-left: 2%;">
                                    <p style="text-align: justify;font-size: 20px; font-family: 'Source Sans Pro', sans-serif;color: #03243c">
                                        Direktorat Pemberdayaan Konsumen menyelenggarakan fungsi :
                                        <div style="margin-left: 2%;">
                                              <p style="text-align: justify;font-size: 18px; font-family: 'Source Sans Pro', sans-serif;color: #03243c">
                                                1. penyiapan perumusan kebijakan di bidang analisa perlindungan konsumen, pelayanan pengaduan konsumen, bimbingan konsumen dan pelaku usaha, fasilitasi kelembagaan, dan
                                                 <span style="margin-left: 1.5%">pembinaan jejaring perlindungan konsumen;</span>
                                            </p>
                                            <p style="text-align: justify;font-size: 18px; font-family: 'Source Sans Pro', sans-serif;color: #03243c">
                                                2. penyiapan pelaksanaan kebijakan di bidang analisa perlindungan konsumen, pelayanan pengaduan konsumen, bimbingan konsumen dan pelaku usaha, fasilitasi kelembagaan, dan <span style="margin-left: 1.5%">pembinaan jejaring perlindungan konsumen;</span>
                                            </p>
                                            <p style="text-align: justify;font-size: 18px; font-family: 'Source Sans Pro', sans-serif;color: #03243c">
                                                3. penyiapan penyusunan pedoman, norma, standar, prosedur, dan kriteria di bidang analisa perlindungan konsumen, pelayanan pengaduan konsumen, bimbingan konsumen dan pelaku <span style="margin-left: 1.5%">usaha, fasilitasi kelembagaan, dan pembinaan jejaring perlindungan konsumen;</span>
                                            </p>
                                            <p style="text-align: justify;font-size: 18px; font-family: 'Source Sans Pro', sans-serif;color: #03243c">
                                                4. penyiapan pemberian bimbingan teknis dan evaluasi pelaksanaan kebijakan di bidang analisa perlindungan konsumen, pelayanan pengaduan konsumen, bimbingan konsumen dan <span style="margin-left: 1.5%">pelaku usaha, fasilitasi kelembagaan, dan pembinaan jejaring perlindungan konsumen;</span>
                                            </p>
                                            <p style="text-align: justify;font-size: 18px; font-family: 'Source Sans Pro', sans-serif;color: #03243c">
                                                5. pelaksanaan urusan tata usaha kepegawaian, keuangan, dan rumah tangga Direktorat; dan
                                            </p>
                                            <p style="text-align: justify;font-size: 18px; font-family: 'Source Sans Pro', sans-serif;color: #03243c">
                                                6. pelaksanaan fungsi lain yang diberikan oleh Direktur Jenderal.
                                            </p>
                                        </div>
                                    </p><br>
                                  </div>
                        </div>
                            
                        </fieldset>



                          
                        <!--End single tab content-->
                        <!--Start single tab content-->
                        <div class="service-box tab-pane fade in <?=$class_s2?> " id="orthopedic" style="margin-left: 0.1%; ">
                             <BR/>
                        <fieldset class="scheduler-border" style="margin-top: 10%">
                            <legend class="scheduler-border">DIT PENGAWASAN</legend>

                            <div style="text-align: left; margin-top: 2%;">
                                <span style="font-size: 20px; font-family: 'Source Sans Pro', sans-serif;color: #03243c"><b>Dasar Hukum Undang-Undang Nomor 8 Tahun 1999 tentang Perlindungan Konsumen</b> </span><br/>
                                  </div>
                                  <div>
                                    <p style="text-align: justify;font-size: 18px; font-family: 'Source Sans Pro', sans-serif;color: #03243c">
                                        Lembaga Perlindungan Konsumen Swadaya Masyarakat adalah lembaga non Pemerintah yang terdaftar dan diakui oleh Pemerintah yang mempunyai kegiatan menangani perlindungan konsumen.
                                    </p><br>
                                </div>
                               
                                  <div style="margin-top: -2%">
                                    <p style="text-align: justify;font-size: 20px; font-family: 'Source Sans Pro', sans-serif;color: #03243c">
                                        Tugas lembaga perlindungan konsumen swadaya masyarakat meliputi kegiatan:
                                        <div style="margin-left: 2%;">
                                              <p style="text-align: justify;font-size: 18px; font-family: 'Source Sans Pro', sans-serif;color: #03243c">
                                                1. menyebarkan informasi dalam rangka meningkatkan kesadaran atas hak dan kewajiban dan kehati-hatian konsumen dalam mengkonsumsi barang dan/atau jasa;
                                            </p>
                                            <p style="text-align: justify;font-size: 18px; font-family: 'Source Sans Pro', sans-serif;color: #03243c">
                                                2. memberikan nasihat kepada konsumen yang memerlukannya;
                                            </p>
                                            <p style="text-align: justify;font-size: 18px; font-family: 'Source Sans Pro', sans-serif;color: #03243c">
                                                3. bekerja sama dengan instansi terkait dalam upaya mewujudkan perlindungan konsumen;
                                            </p>
                                            <p style="text-align: justify;font-size: 18px; font-family: 'Source Sans Pro', sans-serif;color: #03243c">
                                                4. membantu konsumen dalam memperjuangkan haknya, termasuk menerima keluhan atau pengaduan konsumen;
                                            </p>
                                            <p style="text-align: justify;font-size: 18px; font-family: 'Source Sans Pro', sans-serif;color: #03243c">
                                                5. melakukan pengawasan bersama pemerintah dan masyarakat terhadap pelaksanaan perlindungan konsumen.
                                            </p>
                                          
                                        </div>
                                    </p><br>
                                  </div>
                            
                        </div>
                        <!--End single tab content-->
                        <!--Start single tab content-->
                        <div class="service-box tab-pane fade in" id="sonogram">
                            
                        </div>
                        <!--End single tab content-->
                        <!--Start single tab content-->
                        <div class="service-box tab-pane fade in" id="x-ray">
                            <div class="col-md-6" id="gambar4" style="display: block;">
                                <img class="img-responsive" src="<?php echo base_url(); ?>theme/images/services/gambar1.jpg" alt="service-image">
                            </div>
                            <div class="col-md-6" style="display: none;" id="gambar4_2">
                                <img class="img-responsive" src="<?php echo base_url(); ?>theme/images/services/gambar1_2.jpg" alt="service-image">
                            </div>
                            <div class="col-md-6" style="display: none;" id="gambar4_3">
                                <img class="img-responsive" src="<?php echo base_url(); ?>theme/images/services/gambar1_3.jpg" alt="service-image">
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
                                <img class="img-responsive" src="<?php echo base_url(); ?>theme/images/services/gambar1.jpg" alt="service-image">
                            </div>
                            <div class="col-md-6" style="display: none;" id="gambar5_2">
                                <img class="img-responsive" src="<?php echo base_url(); ?>theme/images/services/gambar1_2.jpg" alt="service-image">
                            </div>
                            <div class="col-md-6" style="display: none;" id="gambar5_3">
                                <img class="img-responsive" src="<?php echo base_url(); ?>theme/images/services/gambar1_3.jpg" alt="service-image">
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