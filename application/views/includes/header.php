<!--=============== header ===============-->
<header>
    <!-- header-inner  -->
    <div class="header-inner">
        <!-- header logo -->
        <div class="logo-holder">
            <a href="<?php echo base_url();?>"><img src="<?php echo base_url("assets/images");?>/logo.png" alt=""></a>
        </div>
        <!-- header logo end -->
        <!-- mobile nav button -->
        <div class="nav-button-holder">
            <div class="nav-button vis-m"><span></span><span></span><span></span></div>
        </div>
        <!-- mobile nav button end -->
        <!-- navigation  -->
        <div class="nav-holder">
            <nav>
                <ul>
                    <li>
                        <a href="<?php echo base_url();?>" class="<?php echo $this->uri->segment(1)=='' ? 'act-link' : ''; ?>">Anasayfa</a>
                    </li>
                    <li>
                        <a href="<?php echo base_url("hakkimizda");?>" class="<?php echo $this->uri->segment(1)=='hakkimizda' ? 'act-link' : '' ?>">Hakkımızda</a>
                    </li>
                    <li>
                        <a href="<?php echo base_url("hizmetlerimiz");?>" class="<?php echo $this->uri->segment(1)=='hizmetlerimiz' ? 'act-link' : '' ?>">Hizmetlerimiz</a>
                    </li>
                    <li>
                        <a href="#" class="<?php echo $this->uri->segment(1)=='biten-projeler' ? 'act-link' : '' ?>">Projeler</a>
                        <!--second level -->
                        <ul>
                            <li>
                                <a href="<?php echo base_url("biten-projeler");?>">Biten Projeler</a>
                            </li>
                            <li>
                                <a href="<?php echo base_url("devam-eden-projeler");?>">Devam Eden Projeler</a>
                            </li>

                        </ul>
                        <!--second level end-->
                    </li>
                    <li>
                        <a href="<?php echo base_url("iletisim");?>" class="<?php echo $this->uri->segment(1)=='iletisim' ? 'act-link' : '' ?>">İletişim</a>
                    </li>

                </ul>
            </nav>
        </div>
        <!-- navigation  end -->
    </div>
    <!-- header-inner  end -->
    <!-- share button  -->
<!--    <div class="show-share isShare">-->
<!--        <span>Paylaş</span>-->
<!--        <i class="fa fa-chain-broken"></i>-->
<!--    </div>-->
    <!-- share  end-->
</header>