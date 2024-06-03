
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
                                <th>NAME DIVISI</th>
                                <th>RINGKASAN</th>  
                                <th>AKSI</th>             
                            </tr>
                        </thead>
                        <tbody>
                            <?php $no=1; ?>
                            <?php foreach($divisi_detail_view as $row){ ?>
                            <tr>
                                <td><?= $no++;?></td>
                                <td><?= $row->divisi_nama ?></td>
                                <td><?= $row->divisi_det_ringkasan ?></td>
                                
                          
                                
                                <td>
                                    <a href="<?= site_url('divisi_detail/divisi_detail_edit/'.$row->divisi_det_id); ?>" 
                                       class="btn btn-warning waves-effect btn-xs">
                                       <i class="material-icons">edit</i></a> 
                                    <a href="<?= site_url('divisi_detail/divisi_detail_delete/'.$row->divisi_det_id.'/'.$row->divisi_det_photo); ?>" 
                                       class="btn btn-danger waves-effect btn-xs" 
                                       onclick="return confirm('Apakah Anda Yakin Menghapus Detail <?= $row->divisi_nama ?> ?')">
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

            <?php echo form_open_multipart('divisi_detail/divisi_detail_add'); ?>

                  
                    <div class="form-group form-float">
                        <div class="form-line">
                            <select name="divisi_id" id="divisi_id"  class="form-control show-tick"

                            required oninvalid="this.setCustomValidity('Mohon Diisi Terlebih Dahulu')"
                            >
                                <option value="">-- PILIH DIVISI --</option>
                                <?php foreach ($divisi_view as $row) {  ?>
                                <option value="<?= $row->divisi_id ?>"><?= strtoupper($row->divisi_nama)?></option>
                              <?php } ?>
                            </select>
                        </div>
                    </div>
                    
                     <label>Ringkasan</label>
                     <div class="form-group">
                        <div class="form-line">
                            <textarea rows="4" name="divisi_det_ringkasan" class="form-control no-resize" placeholder="Keterangan" 
                            required></textarea>
                        </div>
                    </div>

                    <div class="body">
                        <textarea id="tinymce" name="divisi_det_isi" 
                        required oninvalid="this.setCustomValidity('Mohon Diisi Terlebih Dahulu')">
                          
                        </textarea>
                    </div>

                    

                     <label>UPLOAD FILE - PHOTO</label>
                        <div class="form-group">
                                <input type="file" name="filephoto" required oninvalid="this.setCustomValidity('Mohon Upload Foto Dahulu')">
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



