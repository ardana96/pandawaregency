
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
                                <th>NAMA PRODUK</th>
                                <th>HARGA</th>
                                <th>PEMILIK</th>
                                <th>KATEGORI</th>
                                <th width=500>RINGKASAN</th>  
                                <th>AKSI</th>             
                            </tr>
                        </thead>
                        <tbody>
                            <?php $no=1; ?>
                            <?php foreach($bumm_view as $row){ ?>
                            <tr>
                                <td><?= $no++;?></td>
                                <td><?= $row->bumm_produk ?></td>
                                <td>Rp. <?= number_format($row->bumm_harga) ?></td>
                                <td><?= $row->bumm_pemilik ?></td>
                                <td><?= $row->kategori_nama ?></td>
                                <td width=500><?= $row->bumm_ringkasan ?></td>
                                
                                
                          
                                
                                <td width=100>
                                    <a href="<?= site_url('bumm/bumm_edit/'.$row->bumm_id); ?>" 
                                       class="btn btn-warning waves-effect btn-xs">
                                       <i class="material-icons">edit</i></a> 
                                    <a href="<?= site_url('bumm/bumm_delete/'.$row->bumm_id.'/'.$row->bumm_photo); ?>" 
                                       class="btn btn-danger waves-effect btn-xs" 
                                       onclick="return confirm('Apakah Anda Yakin Menghapus bumm <?= $row->bumm_produk ?> ?')">
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

            <?php echo form_open_multipart('bumm/bumm_add'); ?>

                  
                    <div class="form-group form-float">
                        <div class="form-line">
                            <input type="text" name="bumm_produk" id="bumm_produk" required="required" class="form-control" required oninvalid="this.setCustomValidity('Mohon Diisi Terlebih Dahulu')">
                            <label class="form-label">NAMA PRODUK</label>
                        </div>
                    </div>
                    <div class="form-group form-float">
                        <div class="form-line">
                            <input type="text" name="bumm_harga" id="bumm_harga" required="required" class="form-control" required oninvalid="this.setCustomValidity('Mohon Diisi Terlebih Dahulu')">
                            <label class="form-label">HARGA</label>
                        </div>
                    </div>

                    <div class="form-group form-float">
                        <div class="form-line">
                            <input type="text" name="bumm_pemilik" id="bumm_pemilik" required="required" class="form-control" required oninvalid="this.setCustomValidity('Mohon Diisi Terlebih Dahulu')">
                            <label class="form-label">PEMILIK</label>
                        </div>
                    </div>
                    
                     <label>Ringkasan</label>
                     <div class="form-group">
                        <div class="form-line">
                            <textarea rows="4" name="bumm_ringkasan" class="form-control no-resize" placeholder="Keterangan" required oninvalid="this.setCustomValidity('Mohon Diisi Terlebih Dahulu')"></textarea>
                        </div>
                    </div>

                    <div class="body">
                        <textarea id="tinymce" name="bumm_isi">
                          
                        </textarea>
                    </div>
                    <br>

                    <label>Kategori</label>
                    <div class="form-group form-float">
                        <div class="form-line">
                            <select name="kategori_id" id="kategori_id" required="required" class="form-control show-tick" required oninvalid="this.setCustomValidity('Mohon Diisi Terlebih Dahulu')">
                                <option value="">-- PILIH KATEGORI --</option>
                                <?php foreach ($kategori_view as $row) {  ?>
                                <option value="<?= $row->kategori_id ?>"><?= strtoupper($row->kategori_nama)?></option>
                              <?php } ?>
                            </select>
                        </div>
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
