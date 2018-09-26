<div role="tabpanel" class="tab-pane fade" id="tab-3">
    <div class="row">

        <div class="form-group col-md-8">
            <label>3. Hizmet Alanı</label>
            <input class="form-control" placeholder="Hizmet Alanınızı Yazınız..."
                   name="third_service"
                   value="<?php echo $item->third_service; ?>">
            <?php if (isset($form_error)) { ?>
                <small
                        class="pull-right input-form-error"> <?php echo form_error("third_service"); ?></small>
            <?php } ?>
        </div>

    </div>
    <div class="row">

        <div class="col-md-2">
            <img
                    src="<?php echo get_picture($viewFolder, $item->third_service_picture, "1240x800"); ?>"
                    alt="<?php echo $item->third_service; ?>"
                    class="img-responsive"
                    style="margin: 0px auto"
            >
        </div>

        <div class="form-group col-md-6">
            <label>3. Hizmet Türü Seçimi</label>
            <input type="file" name="third_service_picture" class="form-control">
        </div>

    </div>
</div><!-- .tab-pane  -->