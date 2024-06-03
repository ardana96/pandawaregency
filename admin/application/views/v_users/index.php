
<div class="row clearfix">
    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
        <div class="card">
            <div class="header">
                <h2><?= strtoupper($judul)?> </h2>
            </div>

            <div class="header">

                    <button type="button" class="btn btn-primary waves-effect" data-toggle="modal" data-target="#defaultModal">
                        <i class="material-icons">add</i><span>Tambah</span>
                    </button>

            </div>

            <div class="body">
                <div class="table-responsive">
                    <table class="table table-bordered table-striped table-hover js-basic-example dataTable">
                        <thead>
                            <tr>
                                <th>NO</th>
                                <th>USER NAME</th>
                                <th>NAMA</th>
                                <th>JABATAN</th>
                                <th>AKTIF</th>
                                <th>AKSI</th>             
                            </tr>
                        </thead>
                        <tbody>
                            <?php $no=1; ?>
                            <?php foreach($users_view as $row){ ?>
                            <tr>
                                <td><?= $no++;?></td>
                                <td><?= $row->user_username ?></td>
                                <td><?= $row->user_name ?></td>
                                <td><?= strtoupper($row->level_jabatan) ?></td>
                                <td>
                                    <?php if ($row->user_aktif == 'Y') { ?>
                                        <button type="button" class="btn btn-success waves-effect btn-xs">
                                            <i class="material-icons">done</i>
                                        </button>           
                                    <?php } else { ?>
                                        <button type="button" class="btn btn-danger waves-effect btn-xs">
                                            <i class="material-icons">close</i>
                                        </button> 
                                    <?php } ?>
                                    
                                </td>
                                
                                <td>
                                    <a href="<?= site_url('users/users_edit/'.$row->user_id); ?>" 
                                       class="btn btn-warning waves-effect btn-xs">
                                       <i class="material-icons">edit</i></a> 
                                    <a href="<?= site_url('users/users_delete/'.$row->user_id.'/'.$row->user_photo); ?>" 
                                       class="btn btn-danger waves-effect btn-xs" 
                                       onclick="return confirm('Apakah Anda Yakin Menghapus User <?= $row->user_name ?> ?')">
                                       <i class="material-icons">close</i></a>
                                </td>              
                            </tr>
                             <?php } ?>          
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="modal fade" id="defaultModal" tabindex="-1" role="dialog">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title" id="defaultModalLabel">TAMBAH <?= strtoupper($judul)?> BARU</h4>
            </div>
            <div class="modal-body">

            <?php echo form_open_multipart('users/users_add'); ?>

                  
                    <div class="form-group form-float">
                        <div class="form-line">
                            <select name="level_id" id="level_id" required="required" class="form-control show-tick">
                                <option value="">-- PILIH LEVEL --</option>
                                <?php foreach ($level_view as $row) {  ?>
                                <option value="<?= $row->level_id ?>"><?= $row->level_nama?>  -  <?= strtoupper($row->level_jabatan) ?></option>
                              <?php } ?>
                            </select>
                        </div>
                    </div>
                    
                    <div class="form-group form-float">
                        <div class="form-line">
                            <input type="text" name="users_name" id="users_name" required="required" class="form-control">
                            <label class="form-label">NAMA</label>
                        </div>
                    </div>


                    <div class="form-group form-float">
                        <div class="form-line">
                            <input type="text" name="users_username" id="users_username" required="required" class="form-control">
                            <label class="form-label">USERNAME</label>
                        </div>
                    </div>

                    <div class="form-group form-float">
                        <div class="form-line">
                            <input type="text" name="users_password" id="users_password" required="required" class="form-control">
                            <label class="form-label">PASSWORD</label>
                        </div>
                    </div>

                     <label>UPLOAD FILE - PHOTO</label>
                        <div class="form-group">
                                <input type="file" name="filephoto">
                        </div>

                    <div class="form-group"><div class="form-line"></div></div>



            </div>
            <div class="modal-footer">
                <button type="submit" class="btn btn-primary waves-effect">Simpan</button>
                <button type="reset" class="btn btn-danger waves-effect">Reset</button>
                <button type="button" class="btn btn-link waves-effect" data-dismiss="modal">Batal</button>
            </div>
            <?php echo form_close(); ?>
        </div>
    </div>
