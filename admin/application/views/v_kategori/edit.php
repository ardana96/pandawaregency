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
            <?php echo form_open('kategori/kategori_update/'.$kategori['kategori_id']); ?>
               <div class="form-group form-float">
                        <div class="form-line">
                            <input type="text" class="form-control" name="kategori_nama" required="required" value="<?php echo $kategori['kategori_nama'];  ?>">

                            <label class="form-label">NAMA</label>
                        </div>
                </div>

                <label class="form-label">STATUS</label>
                <div class="form-group form-float">
                    <div class="form-line">
                        <select name="donasi_id" id="donasi_id" required="required" class="form-control show-tick" data-live-search="true">
                            <option value="">-- PILIH STATUS --</option>
                                <?php
                                foreach($kategori_status_view as $row)
                                {
                                  $selected = "";
                                  if($row->kategori_status_id == $kategori['kategori_status_id'])
                                    $selected = 'selected="selected"';

                                  echo "<option value='".$row->kategori_status_id."' $selected>" .$row->kategori_status_nama.'</option>';
                                }
                                ?>
                        </select>
                    </div>
                </div>

                <!-- <label>STATUS</label>
                <div class="demo-radio-button">

                        <?php if ($kategori['kategori_status'] == "kegiatan") { ?>
                            <input name="kategori_status" type="radio" id="radio_1" value="kegiatan" checked />
                            <label for="radio_1">KEGIATAN</label>
                            <input name="status" type="radio" id="radio_2" value="bumm" />
                            <label for="radio_2">BUMM</label>
                        
                        <?php } else { ?>
                        
                            <input name="kategori_status" type="radio" id="radio_1" value="kegiatan"  />
                            <label for="radio_1">KEGIATAN</label>
                            <input name="status" type="radio" id="radio_2" value="bumm" checked/>
                            <label for="radio_2">BUMM</label>
                        <?php } ?>     
                </div> -->

             

                


               
                   
                    <button class="btn btn-primary waves-effect" type="submit">Update</button>

            </div>
            <?php echo form_close(); ?>
        </div>
    </div>
</div>




