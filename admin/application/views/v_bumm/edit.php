


    
            <div class="row clearfix">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="card">

                         <div class="header">
                            <h2>
                                <?= $judul ?>
                            </h2>
                            <ul class="header-dropdown m-r--5">
                                <li class="dropdown">
                                    <a href="javascript:void(0);" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">
                                        <i class="material-icons">more_vert</i>
                                    </a>
                                    <ul class="dropdown-menu pull-right">
                                        <li><a href="javascript:void(0);">Action</a></li>
                                        <li><a href="javascript:void(0);">Another action</a></li>
                                        <li><a href="javascript:void(0);">Something else here</a></li>
                                    </ul>
                                </li>
                            </ul>
                        </div>

                        <div class="body">
                        <?php echo form_open('bumm/bumm_update/'.$bumm['bumm_id']); ?>
                           
                        <div class="form-group form-float">
                            <div class="form-line">
                                <input type="text" class="form-control" name="bumm_produk" required="required" value="<?php echo $bumm['bumm_produk'];  ?>">

                                <label class="form-label">NAMA PRODUK</label>
                            </div>
                        </div>
                        <div class="form-group form-float">
                            <div class="form-line">
                                <input type="text" class="form-control" name="bumm_harga" required="required" value="<?php echo $bumm['bumm_harga'];  ?>">

                                <label class="form-label">HARGA</label>
                            </div>
                        </div>

                        <div class="form-group form-float">
                            <div class="form-line">
                                <input type="text" class="form-control" name="bumm_pemilik" required="required" value="<?php echo $bumm['bumm_pemilik'];  ?>">

                                <label class="form-label">PEMILIK</label>
                            </div>
                        </div>
                         

                    <label>RINGKASAN</label>
                     <div class="form-group">
                        <div class="form-line">
                            <textarea rows="10" name="bumm_ringkasan" class="form-control no-resize"><?php echo $bumm['bumm_ringkasan']; ?></textarea>
                        </div>
                    </div>


                    <label>ISI</label>
                    <div class="form-group form-float">
                        <div class="form-line">
                            <div class= body>
                                <textarea id="tinymce" name="bumm_isi">
                              <?php  echo $bumm['bumm_isi'];  ?>
                                </textarea>
                            </div>
                        </div>
                    </div>


                    <label class="form-label">KATEGORI</label>
                    <div class="form-group form-float">
                        <div class="form-line">
                            <select name="kategori_id" id="kategori_id" required="required" class="form-control show-tick" data-live-search="true">
                                <option value="">-- PILIH kategori --</option>
                                    <?php
                                    foreach($kategori_view as $row)
                                    {
                                      $selected = "";
                                      if($row->kategori_id == $bumm['kategori_id'])
                                        $selected = 'selected="selected"';

                                      echo "<option value='".$row->kategori_id."' $selected>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;" .$row->kategori_nama.'</option>';
                                    }
                                    ?>
                            </select>
                        </div>
                    </div>

                   
                            
                            <br><br>
                            <label>FOTO</label>
                            <div class="form-group form-float">
                                <div class="form-line">
                                <br>

                                <img width="450" height="300" src="<?php echo base_url('images/bumm/');?><?= $bumm['bumm_photo'] ?>"><br><br>


                                <a href="<?= site_url('bumm/bumm_edit_photo/'.$bumm['bumm_id']); ?>" 
                                       class="btn btn-info waves-effect btn-xs">
                                       <i class="material-icons">add_a_photo</i> Edit Photo</a> 
                                </div>        
                            </div> 
                                <button class="btn btn-primary waves-effect" type="submit">Update</button>

                        </div>
                        <?php echo form_close(); ?>
                    </div>
                </div>
            </div>
   



