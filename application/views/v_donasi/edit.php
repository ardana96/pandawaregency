


    
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
                        <?php echo form_open('donasi/donasi_update/'.$donasi['donasi_id']); ?>
                           
                        <div class="form-group form-float">
                            <div class="form-line">
                                <input type="text" class="form-control" name="donasi_nama" required="required" value="<?php echo $donasi['donasi_nama'];  ?>">

                                <label class="form-label">NAMA</label>
                            </div>
                        </div>
                         

                    <label>RINGKASAN</label>
                     <div class="form-group">
                        <div class="form-line">
                            <textarea rows="10" name="donasi_ringkasan" class="form-control no-resize"><?php echo $donasi['donasi_ringkasan']; ?></textarea>
                        </div>
                    </div>


                    <label>ISI</label>
                    <div class="form-group form-float">
                        <div class="form-line">
                            <div class= body>
                                <textarea id="tinymce" name="donasi_isi">
                              <?php  echo $donasi['donasi_isi'];  ?>
                                </textarea>
                            </div>
                        </div>
                    </div>

                    <div class="form-group form-float">
                        <div class="form-line">
                            <input type="text" class="form-control" name="donasi_target" required="required" value="<?php echo $donasi['donasi_target'];  ?>">

                            <label class="form-label">TARGET</label>
                        </div>
                    </div>
                            
                            <br><br>
                            <label>FOTO</label>
                            <div class="form-group form-float">
                                <div class="form-line">
                                <br>

                                <img width="450" height="300" src="<?php echo base_url('images/donasi/');?><?= $donasi['donasi_photo'] ?>"><br><br>


                                <a href="<?= site_url('donasi/donasi_edit_photo/'.$donasi['donasi_id']); ?>" 
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
   



