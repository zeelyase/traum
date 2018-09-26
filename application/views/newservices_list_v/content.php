<div class="content-holder">
    <!-- Page title -->
    <div class="dynamic-title"><?php echo $subViewFolder;?></div>
    <!-- Page title  end-->
    <!-- content  -->
    <div class="content">
        <section class="parallax-section">
            <div class="parallax-inner">
                <div class="bg" data-bg="<?php echo base_url("assets/images");?>/bg/services.jpeg" data-top-bottom="transform: translateY(300px);" data-bottom-top="transform: translateY(-300px);"></div>
                <div class="overlay"></div>
            </div>
            <div class="container">
                <div class="page-title">
                    <div class="row">
                        <div class="col-md-6">
                            <h2> <strong> HİZMETLERİMİZ</strong></h2>
                        </div>
                        <div class="col-md-6">
                            <ul class="creat-list">
                                <li><a href="<?php echo base_url();?>">Anasayfa</a></li>
                                <li><a href="#">Hizmetlerimiz</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>
    <!-- content end -->
    <!-- content  -->
    <div class="content">
        <section>
            <div class="container">
                <div class="row">
                    <div class="col-md-8">
                        <h2 class="section-title">Ne Tür <strong>Çözümler Sunuyoruz? </strong></h2>
                        <p><?php echo $about_us->description;?> </p>
                    </div>
                </div>
                <div class="services-holder">
                    <!-- 1 -->
                    <a class="serv-item" href="#ser1">
                        <div class="serv-item-inner">
                            <img src="<?php echo base_url("panel/uploads/newservices_v/1240x800/$about_us->first_service_picture");?>"   alt="">
                            <div class="ser-title">
                                <h3><?php echo $about_us->first_service;?></h3>
                            </div>
                        </div>
                    </a>
                    <!-- 1 end-->
                    <!-- 2 -->
                    <a class="serv-item" href="#ser2">
                        <div class="serv-item-inner">
                            <img src="<?php echo base_url("panel/uploads/newservices_v/1240x800/$about_us->second_service_picture");?>"   alt="">
                            <div class="ser-title">
                                <h3><?php echo $about_us->second_service;?></h3>
                            </div>
                        </div>
                    </a>
                    <!-- 2 end -->
                    <!-- 3 -->
                    <a class="serv-item" href="#ser3">
                        <div class="serv-item-inner">
                            <img src="<?php echo base_url("panel/uploads/newservices_v/1240x800/$about_us->third_service_picture");?>"   alt="">
                            <div class="ser-title">
                                <h3><?php echo $about_us->third_service;?></h3>
                            </div>
                        </div>
                    </a>
                    <!-- 3 end -->
                    <!-- 4 -->
                    <a class="serv-item" href="#ser4">
                        <div class="serv-item-inner">
                            <img src="<?php echo base_url("panel/uploads/newservices_v/1240x800/$about_us->fourth_service_picture");?>"   alt="">
                            <div class="ser-title">
                                <h3><?php echo $about_us->fourth_service;?></h3>
                            </div>
                        </div>
                    </a>
                    <!-- 4 end-->
                </div>
                <div class="row">
                    <div class="col-md-6">
                        <!-- serv-post  -->
                        <div class="serv-post">
                            <!-- 1 -->
                            <div id="ser1" class="serv-details">
                                <h3>Interior</h3>
                                <p>There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don't look even slightly believable. If you are going to use a passage of Lorem Ipsum, you need to be sure there isn't anything embarrassing hidden in the middle of text. </p>
                                <p>  If you are going to use a passage of Lorem Ipsum, you need to be sure there isn't anything embarrassing hidden in the middle of text. </p>
                                <ul class="ser-list">
                                    <li>Curabitur mi sem</li>
                                    <li>Euismod in velit</li>
                                    <li>Proin eu felis hendrerit</li>
                                </ul>
                                <span class="price">1200$-5000$</span>
                            </div>
                            <!-- 1 end -->
                            <!-- 2 -->
                            <div id="ser2" class="serv-details">
                                <h3>Construction</h3>
                                <p>There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don't look even slightly believable. If you are going to use a passage of Lorem Ipsum, you need to be sure there isn't anything embarrassing hidden in the middle of text. </p>
                                <p>There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don't look even slightly believable. If you are going to use a passage of Lorem Ipsum, you need to be sure there isn't anything embarrassing hidden in the middle of text. </p>
                                <p>  If you are going to use a passage of Lorem Ipsum, you need to be sure there isn't anything embarrassing hidden in the middle of text. </p>
                                <ul class="ser-list">
                                    <li>Curabitur mi sem</li>
                                    <li>Euismod in velit</li>
                                    <li>Proin eu felis hendrerit</li>
                                </ul>
                                <span class="price">3200$-8800$</span>
                            </div>
                            <!-- 2 end -->
                            <!-- 3 -->
                            <div id="ser3" class="serv-details">
                                <h3>Architecture</h3>
                                <p>There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don't look even slightly believable. If you are going to use a passage of Lorem Ipsum, you need to be sure there isn't anything embarrassing hidden in the middle of text. You need to be sure there isn't anything embarrassing hidden in the middle of text.  </p>
                                <p>  If you are going to use a passage of Lorem Ipsum, you need to be sure there isn't anything embarrassing hidden in the middle of text. You need to be sure there isn't anything embarrassing hidden in the middle of text.  </p>
                                <ul class="ser-list">
                                    <li>Architecture</li>
                                    <li>Euismod in velit</li>
                                    <li>Proin eu felis hendrerit</li>
                                </ul>
                                <span class="price">12300$-53000$</span>
                            </div>
                            <!-- 3 end -->
                            <!-- 4 -->
                            <div id="ser4" class="serv-details">
                                <h3>Visualization</h3>
                                <p>There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don't look even slightly believable. If you are going to use a passage of Lorem Ipsum, you need to be sure there isn't anything embarrassing hidden in the middle of text. </p>
                                <p>  If you are going to use a passage of Lorem Ipsum, you need to be sure there isn't anything embarrassing hidden in the middle of text. </p>
                                <ul class="ser-list">
                                    <li>Curabitur mi sem</li>
                                    <li>Euismod in velit</li>
                                    <li>Proin eu felis hendrerit</li>
                                </ul>
                                <span class="price">3200$-6500$</span>
                            </div>
                            <!-- 4 end -->
                        </div>
                        <!-- serv-post end-->
                    </div>
                    <div class="col-md-6"></div>
                </div>
            </div>
        </section>
    </div>
    <!-- content end -->
    <!-- content footer-->
    <div class="height-emulator"></div>
