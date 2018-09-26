<?php $settings = get_settings();?>
<footer class="content-footer">
    <!--  container  -->
    <div class="container">
        <div class="row">
            <div class="col-md-6">
                <!-- Footer logo -->
                <div class="footer-item footer-logo">
                    <a href="index.html"><img src="<?php echo base_url("assets/images");?>/footer-logo.png" alt=""></a>
                <?php echo word_limiter($settings->about_us, 20);?>
                </div>
                <!-- Footer logo end -->
            </div>
            <!-- Footer info -->
            <div class="col-md-2">
                <div class="footer-item">
                    <h4 class="text-link">Arayın</h4>
                    <ul>
                        <li><a href="#">GSM-1: <?php echo $settings->phone_1;?></a></li>
                        <li><a href="#">GSM-2: <?php echo $settings->phone_2;?></a></li>
                    </ul>
                </div>
            </div>
            <!-- Footer info end-->
            <!-- Footer info -->
            <div class="col-md-2">
                <div class="footer-item">
                    <h4 class="text-link">Yazın</h4>
                    <ul>
                        <li><a href="#" style="text-transform: lowercase;">E-MAİL: <?php echo $settings->email;?></a></li>
                    </ul>
                </div>
            </div>
            <!-- Footer info-->
            <!-- Footer info end-->
            <div class="col-md-2">
                <div class="footer-item">
                    <h4 class="text-link">Ziyaret Edin</h4>
                    <ul>
                        <li><span><?php echo $settings->address;?></span></li>
                        <li> <a href="https://goo.gl/maps/3BPxvVSpK592" target="_blank">Haritada Göster</a></li>
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
                                        <span class="copyright">  &#169; Eniac Yazılım  <?php echo date("Y");?>.  All rights reserved.
                                        </span>
                    <span class="to-top">Yukarı</span>
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
<!--    <div class="share-inner">-->
<!--        <div class="share-container  isShare"  data-share="['facebook','googleplus','twitter','linkedin']"></div>-->
<!--        <div class="close-share"></div>-->
<!--    </div>-->
<!-- share end -->
</div>
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
