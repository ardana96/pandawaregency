


    
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
                        <?php echo form_open('divisi_detail/divisi_detail_update/'.$divisi_detail['divisi_det_id']); ?>
                           

                         
                            <label class="form-label">NAMA DONASI</label>
                            <div class="form-group form-float">
                                <div class="form-line">
                                    <select name="divisi_id" id="divisi_id" required="required" class="form-control show-tick" data-live-search="true">
                                        <option value="">-- PILIH DIVISI --</option>
                                            <?php
                                            foreach($divisi_view as $row)
                                            {
                                              $selected = "";
                                              if($row->divisi_id == $divisi_detail['divisi_id'])
                                                $selected = 'selected="selected"';

                                              echo "<option value='".$row->divisi_id."' $selected>" .$row->divisi_nama.'</option>';
                                            }
                                            ?>
                                    </select>
                                </div>
                            </div>
                            <label>RINGKASAN</label>
                             <div class="form-group">
                                <div class="form-line">
                                    <textarea rows="10" name="divisi_det_ringkasan" class="form-control no-resize"><?php echo $divisi_detail['divisi_det_ringkasan']; ?></textarea>
                                </div>
                            </div>


                            <label>ISI</label>
                            <div class="form-group form-float">
                                <div class="form-line">
                                    <div class= body>
                                        <textarea id="tinymce" name="divisi_det_isi">
                                      <?php  echo $divisi_detail['divisi_det_isi'];  ?>
                                        </textarea>
                                    </div>
                                </div>
                            </div>


                            
                            <br><br>
                            <label>FOTO</label>
                            <div class="form-group form-float">
                                <div class="form-line">
                                <br>

                                <img width="200" height="200" src="<?php echo base_url('images/divisi/');?><?= $divisi_detail['divisi_det_photo'] ?>"><br><br>


                                <a href="<?= site_url('divisi_detail/divisi_detail_edit_photo/'.$divisi_detail['divisi_det_id']); ?>" 
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
   



