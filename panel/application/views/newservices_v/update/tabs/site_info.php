<div role="tabpanel" class="tab-pane fade" id="tab-5">

    <div class="row">

        <div class="form-group col-md-12">
            <label>Hizmetlerimiz Alanı Açıklam Bilgisi</label>
            <textarea name="description" class="m-0" data-plugin="summernote" data-options="{height: 250}">
            <?php echo isset($form_error) ? set_value("description") : $item->description; ?>
            </textarea>
        </div>

    </div>

</div><!-- .tab-pane  -->