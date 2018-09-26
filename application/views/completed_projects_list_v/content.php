<div class="content-holder">
    <!-- Page title -->
    <div class="dynamic-title">Biten Projeler</div>
    <!-- Page title  end-->
    <!-- content  -->
    <div class="content">
        <section class="parallax-section">
            <div class="parallax-inner">
                <div class="bg"
                     data-bg="<?php echo base_url("assets/images");?>/bg/1.jpeg"
                     data-top-bottom="transform: translateY(300px);"
                     data-bottom-top="transform: translateY(-300px);"></div>
                <div class="overlay"></div>
            </div>
            <div class="container">
                <div class="page-title">
                    <div class="row">
                        <div class="col-md-6">
                            <h2> Biten <strong> Projelerimiz</strong></h2>
                        </div>
                        <div class="col-md-6">
                            <ul class="creat-list">
                                <li><a href="<?php echo base_url();?>">Anasayfa</a></li>
                                <li><a href="#">Projeler</a></li>
                                <li><a href="#">Biten Projeler</a></li>
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
                <!-- 1 -->
                <?php foreach ($completed_projects as $item=>$value){ ?>
                    <div class="row">
                        <?php echo $item %2 == 0 ? '' : '<div class="col-md-5"></div>'; ?>
                        <div class="col-md-7">
                            <div class="parallax-item <?php echo $item %2 == 0 ? "left" : "right"; ?>-direction">
                                <div class="paralax-media">
                                    <ul class="creat-list">
                                        <li><a href="#"><?php echo $value->createdAt;?></a></li>
                                        <li><a href="#"><?php echo $subViewFolder;?></a></li>
                                        <li><a href="#"><?php echo $subViewFolderTurkce;?></a></li>
                                    </ul>
                                    <div class="paralax-wrap">

                                        <?php

                                        $image = get_product_cover_image($value->id);
                                        $image = ($image) ? base_url("panel/uploads/product_v/1240x800/$image") : base_url("assets/images/portfolio-1.jpg");

                                        ?>

                                        <img src="<?php echo $image;?>" class="respimg" alt="">
                                    </div>
                                </div>
                                <div class="parallax-deck" data-top-bottom="transform: translateY(-200px);" data-bottom-top="transform: translateY(200px);">
                                    <div class="parallax-deck-item">
                                        <h3><?php echo $value->title;?></h3>
                                        <a href="proje-detaylari/<?php echo $value->url ?>" class="btn anim-button fl-l"><span>Projeyi İncele</span><i class="fa fa-long-arrow-right"></i></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <?php echo $item %2 == 0 ? '<div class="col-md-5"></div>' : ''; ?>
                    </div>
                    <!-- 1 end-->
                <?php } ?>

                <div class="content-nav">
                    <ul>
                        <li><a href="#" class="text-link">previous  page</a></li>
                        <li><a href="#" class="text-link">next page</a></li>
                    </ul>
                </div>
            </div>
        </section>
    </div>
    <!-- content end -->
    <!-- content footer-->
    <div class="height-emulator"></div>