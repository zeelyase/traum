<?php $settings = get_settings();?>
<div class="content-holder">
    <!-- Page title -->
    <div class="dynamic-title">Anasayfa</div>
    <!-- Page title  end-->
    <!-- content  -->
    <div class="content full-height">
        <!-- Hero section   -->
        <div class="hero-wrap">
            <!-- Hero image   -->
            <div class="bg"  data-bg="<?php echo base_url("assets");?>/images/bg/11.jpg" data-top-bottom="transform: translateY(300px);" data-bottom-top="transform: translateY(-300px);"></div>
            <!-- Hero image   end -->
            <div class="overlay"></div>
            <!-- Hero text   -->
            <div class="hero-wrap-item center-item">
                <h2> Traum Studios</h2>
                <h3>Architecture</h3>
            </div>
            <!-- Hero text   end-->
            <a href="#sec1" class="hero-scroll-link custom-scroll-link" data-top-bottom="transform: translateY(50px);" data-bottom-top="transform: translateY(-50px);"><i class="fa fa-angle-down"></i></a>
        </div>
        <!-- Hero section   end -->
    </div>
    <!-- content end -->
    <!-- content  -->
    <div class="content">
        <section id="sec1">
            <!-- section number   -->
            <div class="sect-subtitle right-align-dec" data-top-bottom="transform: translateY(200px);" data-bottom-top="transform: translateY(-200px);"><span>01</span></div>
            <!-- section number  end  -->
            <!--  container  -->
            <div class="container">
                <div class="row">
                    <div class="col-md-4">
                        <!-- single slider  -->
                        <div class="parallax-box slider-box ">
                            <div class="single-slider-holder">
                                <div class="single-slider">
                                    <!-- 1 -->
                                    <div class="item">
                                        <img src="<?php echo base_url("assets/images");?>/folio/slider/2.jpg" alt="">
                                    </div>
                                    <!-- 1 end-->
                                    <!-- 2 -->
                                    <div class="item">
                                        <img src="<?php echo base_url("assets/images");?>/folio/slider/3.jpg" alt="">
                                    </div>
                                    <!-- 2 end-->
                                    <!-- 3 -->
                                    <div class="item">
                                        <img src="<?php echo base_url("assets/images");?>/folio/slider/4.jpg" alt="">
                                    </div>
                                    <!-- 3 end  -->
                                </div>
                                <div class="customNavigation ssn">
                                    <a class="prev-slide transition"><i class="fa fa-angle-left"></i></a>
                                    <a class="next-slide transition"><i class="fa fa-angle-right"></i></a>
                                </div>
                            </div>
                            <!-- single slider  end -->
                        </div>
                    </div>
                    <div class="col-md-8">
                        <!-- section title  -->
                        <h2 class="section-title"><strong>Traum'a</strong> Hoşgeldiniz</h2>
                        <!-- section title  end -->
                        <?php
                        echo $settings->about_us;
                        ?>
                        <div class="process-box">
                            <h3>Our process</h3>
                            <ul class="creat-list">
                                <li><a href="#">Idea & Start</a></li>
                                <li><a href="#">Design & Crate</a></li>
                                <li><a href="#">Build & Finish</a></li>
                            </ul>
                        </div>
                        <a href="<?php echo base_url("hakkimizda");?>" class="btn anim-button fl-l"><span>Detaylı İnceleyin</span><i class="fa fa-long-arrow-right"></i></a>
                    </div>
                </div>
            </div>
            <!--  container end  -->
        </section>
    </div>
    <!-- content  end  -->
    <!-- content   -->
    <div class="content dark-bg">
        <!-- section number   -->
        <div class="sect-subtitle left-align-dec" data-top-bottom="transform: translateY(-200px);" data-bottom-top="transform: translateY(200px);"><span>02</span></div>
        <!-- section number   end -->
        <!-- parallax image  -->
        <div class="parallax-inner">
            <div class="bg" data-bg="<?php echo base_url("assets");?>/images/bg/11.jpg" data-top-bottom="transform: translateY(300px);" data-bottom-top="transform: translateY(-300px);"></div>
            <div class="overlay"></div>
        </div>
        <!-- parallax image  end -->
        <section>
            <!--  container  -->
            <div class="container">
                <div class="row">
                    <div class="col-md-4">
                        <h2 class="section-title">Bizi Anlatan <br><strong> Bazı Sayılar</strong></h2>
                    </div>
                    <div class="col-md-8">
                        Bir fikirden ve konsept geliştirmeden gerçekleşmeye kadar her şeyi ele alır. Geleneklere inanır ve yeniliklerimize dahil ederiz. Tüm projelerimiz eşsiz bir sanatsal imaj ve fonksiyonel çözümler içermektedir. Müşteri projenin ruhudur. Temel amacımız tasarımlarıyla kendi değerlerini ve bireyselliklerini ortaya koymaktır.
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-4"></div>
                    <div class="col-md-8">
                        <!-- facts   -->
                        <div class="inline-facts-holder row">
                            <!-- 1 -->
                            <div class="inline-facts col-md-4 ">
                                <div class="milestone-counter">
                                    <div class="stats animaper">
                                        <div class="num" data-content="461" data-num="461">0</div>
                                    </div>
                                </div>
                                <h6>Finished projects</h6>
                            </div>
                            <!-- 3 -->
                            <div class="inline-facts col-md-4">
                                <div class="milestone-counter">
                                    <div class="stats animaper">
                                        <div class="num" data-content="168" data-num="168">0</div>
                                    </div>
                                </div>
                                <h6>Happy customers</h6>
                            </div>
                            <!-- 3 -->
                            <div class="inline-facts col-md-4">
                                <div class="milestone-counter">
                                    <div class="stats animaper">
                                        <div class="num" data-content="222" data-num="222">0</div>
                                    </div>
                                </div>
                                <h6>Working hours</h6>
                            </div>
                        </div>
                        <!-- facts   end -->
                    </div>
                </div>
            </div>
            <!--  container  end -->
        </section>
    </div>
    <!-- content  end  -->
    <!-- content   -->
    <div class="content">
        <section>
            <!-- section number     -->
            <div class="sect-subtitle right-align-dec" data-top-bottom="transform: translateY(200px);" data-bottom-top="transform: translateY(-200px);"><span>03</span></div>
            <!-- section number   end -->
            <!--  container  -->
            <div class="container">
                <!--  section title -->
                <div class="row">
                    <div class="col-md-12">
                        <h2 class="section-title algn-right dec-title"><span>Öne Çıkan  <strong> Bazı İşlerimiz</strong></span></h2>
                    </div>
                </div>
                <!--  section title end  -->
                <!--  Parallax items  -->
                <!-- 1 -->
                <?php foreach ($image as $item=>$value) { ?>
                <div class="row">
                    <?php echo $item %2 == 0 ? '' : '<div class="col-md-5"></div>';?>
                    <div class="col-md-7">
                        <div class="parallax-item <?php echo $item %2 == 0 ? 'left' : 'right';?>-direction">
                            <div class="paralax-media">
                                <ul class="creat-list">
                                    <li><a href="#">Houses</a></li>
                                    <li><a href="#">Design</a></li>
                                    <li><a href="#">Traum</a></li>
                                </ul>
                                <div class="paralax-wrap">
                                    <img src="<?php echo base_url("panel/uploads/product_v/700x450/$value->pro_img_url");?>" class="respimg" alt="">
                                </div>
                            </div>
                            <div class="parallax-deck" data-top-bottom="transform: translateY(-200px);" data-bottom-top="transform: translateY(200px);">
                                <div class="parallax-deck-item">
                                    <h3>
                                        <?php echo $value->pro_title;?>
                                    </h3>
                                    <a href="<?php echo base_url("proje-detaylari/$value->pro_url");?>" class="btn anim-button fl-l"><span>View Project</span><i class="fa fa-long-arrow-right"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <?php echo $item %2 == 0 ? '<div class="col-md-5"></div>' : '';?>
                </div>
                <?php } ?>

                <div class="custom-link-holder">
                    <a href="<?php echo base_url("biten-projeler");?>" class="btn anim-button"  data-top-bottom="transform: translateY(-50px);" data-bottom-top="transform: translateY(50px);"><span>View All Projects</span><i class="fa fa-long-arrow-right"></i></a>
                </div>
                <!-- custom-link-holder  end -->
            </div>
            <!--  container  end -->
        </section>
    </div>
    <!-- content end -->
    <!-- content footer-->
    <div class="height-emulator"></div>
