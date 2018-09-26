<div class="row">
    <div class="col-md-4 col-sm-4">
        <div class="widget p-md clearfix">
            <div class="pull-left">
                <h3 class="widget-title">Site Açılışı: </h3>
                <small class="text-color">Sayılar yalan söylemez bay başgan</small>
            </div>
            <span class="pull-right fz-md fw-500 counter">30.06.2018</span>
        </div><!-- .widget -->
    </div>
    <div class="col-md-4 col-sm-4">
        <div class="widget p-md clearfix">
            <div class="pull-left">
                <h3 class="widget-title">Hosting Son Tarihi</h3>
                <small class="text-color">Sayılar yalan söylemez bay başgan</small>
            </div>
            <span class="pull-right fz-md fw-500 counter">02.05.2019</span>
        </div><!-- .widget -->
    </div>
    <div class="col-md-4 col-sm-4">
        <div class="widget p-md clearfix">
            <div class="pull-left">
                <h3 class="widget-title">Domain Son Tarihi</h3>
                <small class="text-color">İsim Hakkı İçin Son Süre</small>
            </div>
            <span class="pull-right fz-md fw-500 counter">06.05.2019</span>
        </div><!-- .widget -->
    </div>
</div>

<div class="row">
    <div class="col-md-3 col-sm-6">
        <div class="widget stats-widget">
            <div class="widget-body clearfix">
                <div class="pull-left">
                    <h3 class="widget-title text-primary"><span class="counter" data-plugin="counterUp"><?php echo get_active_product_number();?></span> Adet</h3>
                    <small class="text-color">Devam Eden İş Sayısı</small>
                </div>
                <span class="pull-right big-icon watermark"><i class="fa fa-paperclip"></i></span>
            </div>
            <footer class="widget-footer bg-primary">
                <small>% charge</small>
                <span class="small-chart pull-right" data-plugin="sparkline" data-options="[4,3,5,2,1], { type: 'bar', barColor: '#ffffff', barWidth: 5, barSpacing: 2 }"><canvas width="33" height="16" style="display: inline-block; width: 33px; height: 16px; vertical-align: top;"></canvas></span>
            </footer>
        </div><!-- .widget -->
    </div>

    <div class="col-md-3 col-sm-6">
        <div class="widget stats-widget">
            <div class="widget-body clearfix">
                <div class="pull-left">
                    <h3 class="widget-title text-danger"><span class="counter" data-plugin="counterUp"><?php echo get_completed_product_number();?></span> Adet</h3>
                    <small class="text-color">Tamamlanmış İş Sayısı</small>
                </div>
                <span class="pull-right big-icon watermark"><i class="fa fa-ban"></i></span>
            </div>
            <footer class="widget-footer bg-danger">
                <small>% charge</small>
                <span class="small-chart pull-right" data-plugin="sparkline" data-options="[1,2,3,5,4], { type: 'bar', barColor: '#ffffff', barWidth: 5, barSpacing: 2 }"><canvas width="33" height="16" style="display: inline-block; width: 33px; height: 16px; vertical-align: top;"></canvas></span>
            </footer>
        </div><!-- .widget -->
    </div>

    <div class="col-md-3 col-sm-6">
        <div class="widget stats-widget">
            <div class="widget-body clearfix">
                <div class="pull-left">
                    <h3 class="widget-title text-success"><span class="counter" data-plugin="counterUp"><?php echo get_product_images_number();?></span> Adet</h3>
                    <small class="text-color">Toplam Fotoğraf Sayısı</small>
                </div>
                <span class="pull-right big-icon watermark"><i class="fa fa-unlock-alt"></i></span>
            </div>
            <footer class="widget-footer bg-success">
                <small>% charge</small>
                <span class="small-chart pull-right" data-plugin="sparkline" data-options="[2,4,3,4,3], { type: 'bar', barColor: '#ffffff', barWidth: 5, barSpacing: 2 }"><canvas width="33" height="16" style="display: inline-block; width: 33px; height: 16px; vertical-align: top;"></canvas></span>
            </footer>
        </div><!-- .widget -->
    </div>

    <div class="col-md-3 col-sm-6">
        <div class="widget stats-widget">
            <div class="widget-body clearfix">
                <div class="pull-left">
                    <h3 class="widget-title text-warning"><span class="counter" data-plugin="counterUp"><?php echo get_users_number();?></span> Adet</h3>
                    <small class="text-color">Toplam Üye Sayısı</small>
                </div>
                <span class="pull-right big-icon watermark"><i class="fa fa-file-text-o"></i></span>
            </div>
            <footer class="widget-footer bg-warning">
                <small>% charge</small>
                <span class="small-chart pull-right" data-plugin="sparkline" data-options="[5,4,3,5,2],{ type: 'bar', barColor: '#ffffff', barWidth: 5, barSpacing: 2 }"><canvas width="33" height="16" style="display: inline-block; width: 33px; height: 16px; vertical-align: top;"></canvas></span>
            </footer>
        </div><!-- .widget -->
    </div>
</div>