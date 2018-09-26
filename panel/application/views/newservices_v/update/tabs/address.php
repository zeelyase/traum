<div role="tabpanel" class="tab-pane in active fade" id="tab-1">
<div class="row">

        <div class="form-group col-md-8">
            <label>1. Hizmet Alanı</label>
            <input class="form-control" placeholder="Hizmet Alanınızı Yazınız..."
                   name="first_service"
                   value="<?php echo $item->first_service; ?>">
            <?php if (isset($form_error)) { ?>
                <small
                        class="pull-right input-form-error"> <?php echo form_error("first_service"); ?></small>
            <?php } ?>
        </div>

    </div>
    <div class="row">

        <div class="col-md-2">
            <img
                    src="<?php echo get_picture($viewFolder, $item->first_service_picture, "1240x800"); ?>"
                    alt="<?php echo $item->first_service; ?>"
                    class="img-responsive"
                    style="margin: 0px auto"
            >
        </div>

        <div class="form-group col-md-6">
            <label>1. Hizmet Türü Seçimi</label>
            <input type="file" name="first_service_picture" class="form-control">
        </div>

    </div>

</div><!-- .tab-pane  -->