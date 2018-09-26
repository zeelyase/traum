<div role="tabpanel" class="tab-pane fade" id="tab-4">
    <div class="row">

        <div class="form-group col-md-8">
            <label>4. Hizmet Alanı</label>
            <input class="form-control" placeholder="Hizmet Alanınızı Yazınız..."
                   name="fourth_service"
                   value="<?php echo $item->fourth_service; ?>">
            <?php if (isset($form_error)) { ?>
                <small
                        class="pull-right input-form-error"> <?php echo form_error("fourth_service"); ?></small>
            <?php } ?>
        </div>

    </div>
    <div class="row">

        <div class="col-md-2">
            <img
                    src="<?php echo get_picture($viewFolder, $item->fourth_service_picture, "1240x800"); ?>"
                    alt="<?php echo $item->fourth_service; ?>"
                    class="img-responsive"
                    style="margin: 0px auto"
            >
        </div>

        <div class="form-group col-md-6">
            <label>4. Hizmet Türü Seçimi</label>
            <input type="file" name="fourth_service_picture" class="form-control">
        </div>

    </div>
</div><!-- .tab-pane  -->