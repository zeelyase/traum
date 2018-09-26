<?php $settings = get_settings();?>
<!-- content-holder  -->
<div class="content-holder">
    <!-- Page title -->
    <div class="dynamic-title">Horizontal Gallery</div>
    <!-- Page title  end-->
    <!-- content  -->
    <div class="content hor-content full-height pad-con no-bg-con">
        <!-- portfolio  Images  -->
        <div class="control-panel">
            <div class="container">
                <div class="caption"></div>
                <a href="#" class=" btn anim-button   flat-btn   transition    show-hid-sidebar"><span>Proje Bilgileri</span><i class="fa fa-eye"></i></a>
                <span     class="show-thumbs vis-con-panel vis-t" data-textshow="Fotoğrafları Küçült" data-texthide="Eski Haline Dön"></span>
            </div>
        </div>
        <div class="resize-carousel-holder lightgallery ogm smp">
            <div id="gallery_horizontal" class="gallery_horizontal flow-gallery" data-cen="1">
                <!-- gallery Item-->
                <?php foreach ($product_images as $photos){ ?>
                <div class="horizontal_item" data-phname="<?php echo $product->title; ?>" data-phdesc="<?php echo $product->description; ?>">
                    <img src="<?php echo base_url();?>/panel/uploads/product_v/1240x800/<?php echo $photos->img_url;?>" alt="<?php echo $product->title; ?>">
                    <a data-src="<?php echo base_url();?>/panel/uploads/product_v/1240x800/<?php echo $photos->img_url;?>" class="popup-image slider-zoom">
                        <i class="fa fa-expand"></i>
                    </a>
                </div>
                <?php }  ?>
<!--
                <!-- gallery item end-->
            </div>
            <!--  navigation -->
            <div class="customNavigation fhsln">
                <a class="prev-slide transition"><i class="fa fa-angle-left"></i></a>
                <a class="next-slide transition"><i class="fa fa-angle-right"></i></a>
            </div>
            <!--  navigation end-->
        </div>
        <!-- portfolio  Images  end-->
        <!-- Hidden sidebar-->
        <div class="sb-overlay"></div>
        <div class="hid-sidebar">
            <div class="container small-container">
                <div class="sidebar-wrap">
                    <div class="sb-bg"></div>
                    <div class="sb-inner">
                        <div class="close-sidebar"></div>
                        <h2 class="section-title"><?php echo $product->title; ?></h2>
                        <div class="separator"></div>
                        <div class="clearfix"></div>
                       <?php echo $product->description; ?>
                        <h4>Info</h4>
                        <ul class="project-details">
                            <li>
                                <div class="pd-holder">
                                    <h5>Kategori :  <a href="#">House</a> <a href="#"> Architecture</a></h5>
                                </div>
                            </li>
                            <li>
                                <div class="pd-holder">
                                    <h5>Tarih :  <a href="#">23 may 2016</a></h5>
                                </div>
                            </li>
                            <li>
                                <div class="pd-holder">
                                    <h5>Müşteri  :  <a href="#"><?php echo $product->title; ?></a></h5>
                                </div>
                            </li>
                            <li>
                                <div class="pd-holder">
                                    <h5>Lokasyon :  <a href="#">Sweden Stockholm</a></h5>
                                </div>
                            </li>
                        </ul>
                        <a href="<?php echo $product->url; ?>" class="btn anim-button   flat-btn   transition  fl-l"><span>Fotoğraflara Geri Dön</span><i class="fa fa-eye"></i></a>
                        <div class="content-nav">
                            <ul>
                                <li><a href="<?php echo base_url();?>" class=" text-link">TRAUM Ana Sayfaya Git</a></li>
                              <!--  <li><a href="portfolio-single2.html" class=" text-link">next project</a></li>
                                <li><a href="portfolio-single3.html" class=" text-link">prev project</a></li>-->
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- sidebar end -->
    </div>
    <!-- content end -->
    <!-- share  -->
    <div class="share-inner">
        <div class="share-container  isShare"  data-share="['facebook','googleplus','twitter','linkedin']"></div>
        <div class="close-share"></div>
    </div>
    <!-- share end -->
</div>
<!-- content-holder  end-->
<footer class="fixed-footer">
    <div class="footer-social">
        <ul>
            <li><a href="<?php echo $settings->facebook;?>" target="_blank" ><i class="fa fa-facebook"></i></a></li>
            <li><a href="<?php echo $settings->twitter;?>" target="_blank"><i class="fa fa-twitter"></i></a></li>
            <li><a href="<?php echo $settings->instagram;?>" target="_blank" ><i class="fa fa-instagram"></i></a></li>
            <li><a href="<?php echo $settings->linkedin;?>" target="_blank" ><i class="fa fa-linkedin"></i></a></li>
        </ul>
    </div>
    <!-- Header  title -->
    <div class="footer-title">
        <h2><a  href="#"></a></h2>
    </div>
    <!-- Header  title  end-->
</footer>