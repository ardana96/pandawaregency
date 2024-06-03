<div class="row clearfix">
    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
        <div class="card">
            <div class="header">
                <h2><?= strtoupper($judul)?></h2>

                 
            </div>

            <?php echo form_open_multipart('produk/produk_update/'.$produk['produk_id']); ?>
            <div class="body"> 


                    <div class="form-group form-float">
                        <div class="form-line">
                            <input type="text" name="produk_id" id="produk_id" required="required" value="<?php echo $produk['produk_id'];  ?>" class="form-control" >
                            <label class="form-label">ID_Produk</label>
                        </div>
                    </div>

                    <div class="form-group form-float">
                        <div class="form-line">
                            <input type="text" name="produk_nama" id="produk_nama" required="required" value="<?php echo $produk['produk_nama'];  ?>" class="form-control" >
                            <label class="form-label">NAMA PRODUK</label>
                        </div>
                    </div>

                    <div class="form-group form-float">
                        <div class="form-line">
                            <select name="produk_jenis" id="produk_jenis" required="required" class="form-control show-tick">
                                <option value="">-- PILIH JENIS --</option>
                                <option value="1">1</option>
                                <option value="2">2</option>
                            </select>
                        </div>
                    </div>

                     <label>RINGKASAN</label>
                     <div class="form-group">
                        <div class="form-line">
                            <textarea rows="4" name="produk_ringkasan" class="form-control no-resize"><?php echo $produk['produk_ringkasan']; ?></textarea>
                        </div>
                    </div>


                    <label>ISI</label>
                    <div class="form-group form-float">
                        <div class="form-line">
                            <div class= body>
                                <textarea id="tinymce" name="produk_deskripsi">
                              <?php  echo $produk['produk_deskripsi'];  ?>
                                </textarea>
                            </div>
                        </div>
                    </div>
                         
                
                    <div class="form-group form-float">
                        <div class="form-line">
                            <input type="text" name="produk_harga" id="produk_harga" required="required" class="form-control"  value="<?php echo $produk['produk_harga'];  ?>" >
                            <label class="form-label">HARGA TOKO</label>
                        </div>
                    </div>

                    <label>Status</label>


                            <div class="demo-radio-button">   
                            <?php if( $produk['produk_status'] == "Y") {?>                        
                                <input name="produk_status" type="radio" id="radio_1" value="Y" checked />
                                <label for="radio_1">Ada</label>
                                <input name="produk_status" type="radio" id="radio_2" value="T" />
                                <label for="radio_2">Kosong</label>     

                                <?php } else { ?>    
                                <input name="produk_status" type="radio" id="radio_1" value="Y"  />
                                <label for="radio_1">Ada</label>
                                <input name="produk_status" type="radio" id="radio_2" value="T"  checked/>
                                <label for="radio_2">Kosong</label>      
                                <?php }?>                        
                            </div>








               
                <button class="btn btn-primary waves-effect" type="submit">Update</button>
                 <?php echo form_close(); ?>
            </div>
           
        </div>
    </div>
</div>