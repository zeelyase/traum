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
                <h2> Traum Studio</h2>
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
                                        <img src="<?php echo base_url("assets/images");?>/folio/slider/1.jpg" alt="">
                                    </div>
                                    <!-- 1 end-->
                                    <!-- 2 -->
                                    <div class="item">
                                        <img src="<?php echo base_url("assets/images");?>/folio/slider/1.jpg" alt="">
                                    </div>
                                    <!-- 2 end-->
                                    <!-- 3 -->
                                    <div class="item">
                                        <img src="<?php echo base_url("assets/images");?>/folio/slider/1.jpg" alt="">
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
                        <a href="portfolio.html" class="btn anim-button fl-l"><span>View Our portfolio</span><i class="fa fa-long-arrow-right"></i></a>
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
            <div class="bg" data-bg="<?php echo base_url("assets");?>/images/bg/1.jpg" data-top-bottom="transform: translateY(300px);" data-bottom-top="transform: translateY(-300px);"></div>
            <div class="overlay"></div>
        </div>
        <!-- parallax image  end -->
        <section>
            <!--  container  -->
            <div class="container">
                <div class="row">
                    <div class="col-md-4">
                        <h2 class="section-title">Some Interisting <strong> Facts</strong></h2>
                    </div>
                    <div class="col-md-8">
                        <p>Our team takes over everything, from an idea and concept development to realization. We believe in traditions and incorporate them within our innovations. All our projects incorporate a unique artistic image and functional solutions. Client is the soul of the project. Our main goal is to illustrate his/hers values and individuality through design.</p>
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
                        <h2 class="section-title algn-right dec-title"><span>Our featured  <strong> Works</strong></span></h2>
                    </div>
                </div>
                <!--  section title end  -->
                <!--  Parallax items  -->
                <!-- 1 -->
                <div class="row">
                    <div class="col-md-7">
                        <div class="parallax-item left-direction">
                            <div class="paralax-media">
                                <ul class="creat-list">
                                    <li><a href="#">Houses</a></li>
                                    <li><a href="#">Design</a></li>
                                    <li><a href="#">Skyscraper</a></li>
                                </ul>
                                <div class="paralax-wrap">
                                    <img src="<?php echo base_url("assets/images");?>/folio/thumbs/1.jpg" class="respimg" alt="">
                                </div>
                            </div>
                            <div class="parallax-deck" data-top-bottom="transform: translateY(-200px);" data-bottom-top="transform: translateY(200px);">
                                <div class="parallax-deck-item">
                                    <h3>Sed ut perspiciatis <strong>unde this</strong></h3>
                                    <a href="portfolio-single.html" class="btn anim-button fl-l"><span>View Project</span><i class="fa fa-long-arrow-right"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-5"></div>
                </div>
                <!-- 1 end-->
                <!-- 2 -->
                <div class="row">
                    <div class="col-md-5"></div>
                    <div class="col-md-7">
                        <div class="parallax-item right-direction">
                            <div class="paralax-media">
                                <ul class="creat-list">
                                    <li><a href="#">Interior</a></li>
                                    <li><a href="#">Wood</a></li>
                                </ul>
                                <div class="paralax-wrap">
                                    <img src="<?php echo base_url("assets/images");?>/folio/thumbs/1.jpg" class="respimg" alt="">
                                </div>
                            </div>
                            <div class="parallax-deck" data-top-bottom="transform: translateY(-200px);" data-bottom-top="transform: translateY(200px);">
                                <div class="parallax-deck-item">
                                    <h3>Sed ut perspiciatis <strong>unde this</strong></h3>
                                    <a href="portfolio-single.html" class="btn anim-button fl-l"><span>View Project</span><i class="fa fa-long-arrow-right"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- 2 end-->
                <!-- 3 -->
                <div class="row">
                    <div class="col-md-7">
                        <div class="parallax-item left-direction">
                            <div class="paralax-media">
                                <ul class="creat-list">
                                    <li><a href="#">Houses</a></li>
                                    <li><a href="#">Design</a></li>
                                    <li><a href="#">Skyscraper</a></li>
                                </ul>
                                <div class="paralax-wrap">
                                    <img src="<?php echo base_url("assets/images");?>/folio/thumbs/1.jpg" class="respimg" alt="">
                                </div>
                            </div>
                            <div class="parallax-deck" data-top-bottom="transform: translateY(-200px);" data-bottom-top="transform: translateY(200px);">
                                <div class="parallax-deck-item">
                                    <h3>Sed ut perspiciatis <strong>unde this</strong></h3>
                                    <a href="portfolio-single.html" class="btn anim-button fl-l"><span>View Project</span><i class="fa fa-long-arrow-right"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-5"></div>
                </div>
                <!-- 3 end-->
                <!-- custom-link-holder  -->
                <div class="custom-link-holder">
                    <a href="portfolio.html" class="btn anim-button"  data-top-bottom="transform: translateY(-50px);" data-bottom-top="transform: translateY(50px);"><span>View All Projects</span><i class="fa fa-long-arrow-right"></i></a>
                </div>
                <!-- custom-link-holder  end -->
            </div>
            <!--  container  end -->
        </section>
    </div>
    <!-- content end -->
    <!-- content footer-->
    <div class="height-emulator"></div>
    <footer class="content-footer">
        <!--  container  -->
        <div class="container">
            <div class="row">
                <div class="col-md-6">
                    <!-- Footer logo -->
                    <div class="footer-item footer-logo">
                        <a href="index.html"><img src="<?php echo base_url("assets/images");?>/footer-logo.png" alt=""></a>
                        <p>Our team takes over everything, from an idea and concept development to realization. We believe in traditions and incorporate them within our innovations.Client is the soul of the project.  </p>
                    </div>
                    <!-- Footer logo end -->
                </div>
                <!-- Footer info -->
                <div class="col-md-2">
                    <div class="footer-item">
                        <h4 class="text-link">Call</h4>
                        <ul>
                            <li><a href="#">+7(111)123456789</a></li>
                            <li><a href="#">+1(000)987654321</a></li>
                        </ul>
                    </div>
                </div>
                <!-- Footer info end-->
                <!-- Footer info -->
                <div class="col-md-2">
                    <div class="footer-item">
                        <h4 class="text-link">Write</h4>
                        <ul>
                            <li><a href="#">yourmail@domain.com</a></li>
                            <li><a href="#">email@website.com</a></li>
                        </ul>
                    </div>
                </div>
                <!-- Footer info-->
                <!-- Footer info end-->
                <div class="col-md-2">
                    <div class="footer-item">
                        <h4 class="text-link">Visit</h4>
                        <ul>
                            <li><span>USA 27TH BROOKLYN NY</span></li>
                            <li> <a href="" target="_blank">View on map</a></li>
                        </ul>
                    </div>
                </div>
                <!-- Footer info end-->
            </div>
            <!-- Footer copyright -->
            <div class="row">
                <div class="col-md-6"></div>
                <div class="col-md-6">
                    <div class="footer-wrap">
                                        <span class="copyright">  &#169; Monolit   2016.  All rights reserved.  
                                        </span>
                        <span class="to-top">To Top</span>
                    </div>
                </div>
            </div>
            <!-- Footer copyright end -->
        </div>
        <!--  container  end -->
        <!-- Hover animation  -->
        <canvas class="particular"></canvas>
        <!-- Hover animation  end -->
    </footer>
    <!-- content footer end -->
    <!-- share  -->
    <div class="share-inner">
        <div class="share-container  isShare"  data-share="['facebook','googleplus','twitter','linkedin']"></div>
        <div class="close-share"></div>
    </div>
    <!-- share end -->
</div>
