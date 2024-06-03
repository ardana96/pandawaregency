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
            <?php echo form_open('level/level_update/'.$level['level_id']); ?>
               <div class="form-group form-float">
                        <div class="form-line">
                            <input type="text" class="form-control" name="level_nama" required="required" value="<?php echo $level['level_nama'];  ?>">

                            <label class="form-label">NAMA</label>
                        </div>
                </div>

             

                <div class="form-group form-float">
                        <div class="form-line">
                            <input type="text" class="form-control" name="level_jabatan" required="required" value="<?php echo $level['level_jabatan'];  ?>">

                            <label class="form-label">JABATAN</label>
                        </div>
                </div>


               
                   
                    <button class="btn btn-primary waves-effect" type="submit">Update</button>

            </div>
            <?php echo form_close(); ?>
        </div>
    </div>
</div>




