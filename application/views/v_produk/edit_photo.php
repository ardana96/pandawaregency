<div class="row clearfix">
    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
        <div class="card">
            <div class="header">
                <h2><?= strtoupper($judul)?></h2>
            </div>

            <div class="body">
            <?php echo form_open_multipart('produk/produk_update_photo/'.$produk['produk_id']); ?>

            <div class="form-group form-float">
                        <div class="form-line">
                            <div class= body>
                                <textarea id="tinymce">
                              
                                </textarea>
                            </div>
                        </div>
                    </div>

                    <label>UPLOAD FILE - PHOTO BARU</label>
                        <div class="form-group">
                                <input type="file" name="filephoto">
                        </div>

                    <div class="form-group"><div class="form-line"></div></div>

                
                <button class="btn btn-primary waves-effect" type="submit">Update</button>

            </div>
            <?php echo form_close(); ?>
        </div>
    </div>
</div>