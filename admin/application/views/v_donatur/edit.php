


    
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
                        <?php echo form_open('donatur/donatur_update/'.$donatur['donatur_id']); ?>
                           



                        <label class="form-label">NAMA DONASI</label>
                        <div class="form-group form-float">
                            <div class="form-line">
                                <select name="donasi_id" id="donasi_id" required="required" class="form-control show-tick" data-live-search="true">
                                    <option value="">-- PILIH DONASI --</option>
                                        <?php
                                        foreach($donasi_view as $row)
                                        {
                                          $selected = "";
                                          if($row->donasi_id == $donatur['donasi_id'])
                                            $selected = 'selected="selected"';

                                          echo "<option value='".$row->donasi_id."' $selected>" .$row->donasi_nama.'</option>';
                                        }
                                        ?>
                                </select>
                            </div>
                        </div>
                        <div class="form-group form-float">
                            <div class="form-line">
                                <input type="text" class="form-control" name="donatur_nama" required="required" value="<?php echo $donatur['donatur_nama'];  ?>">

                                <label class="form-label">NAMA</label>
                            </div>
                        </div>
                         

                    

                        <div class="form-group form-float">
                            <div class="form-line">
                                <input type="number" class="form-control" name="donatur_jumlah" required="required" value="<?php echo $donatur['donatur_jumlah'];  ?>">

                                <label class="form-label">JUMLAH</label>
                            </div>
                        </div>

                        <div class="form-group form-float">
                            <div class="form-line">
                                <input type="text" class="form-control" name="donatur_rekening" required="required" value="<?php echo $donatur['donatur_rekening'];  ?>">

                                <label class="form-label">REKENING</label>
                            </div>
                        </div>

                        <div class="form-group form-float">
                            <div class="form-line">
                                <input type="date" class="form-control" name="donatur_tanggal" required="required" value="<?php echo $donatur['donatur_tanggal'] ;  ?>">

                                <label class="form-label">TANGGAL</label>
                            </div>
                        </div>
                            
                            
                        <button class="btn btn-primary waves-effect" type="submit">Update</button>


                        </div>
                        <?php echo form_close(); ?>
                    </div>
                </div>
            </div>
   



