
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
                    <table class="table table-bordered table-striped table-hover dataTable js-exportable">
                        <thead>
                            <tr>
                                <th>NO</th>
                                <th>NAMA</th>
                                <th>JUMLAH</th>
                                <th>REKENING</th> 
                                <th>TANGGAL</th> 
                                <th>UNTUK DONASI</th>
                                <th>AKSI</th>             
                            </tr>
                        </thead>
                        <tbody>
                            <?php $no=1; ?>
                            <?php foreach($donatur_view as $row){ ?>
                            <tr>
                                <td><?= $no++;?></td>
                                <td><?= $row->donatur_nama ?></td>
                                <td><?= number_format($row->donatur_jumlah)?></td>
                                <td><?= $row->donatur_rekening?></td>
                                <td><?= $row->donatur_tanggal?></td>
                                <td><?= $row->donasi_nama?></td>
                                
                          
                                
                                <td width=100>
                                    <a href="<?= site_url('donatur/donatur_edit/'.$row->donatur_id); ?>" 
                                       class="btn btn-warning waves-effect btn-xs">
                                       <i class="material-icons">edit</i></a> 
                                    <a href="<?= site_url('donatur/donatur_delete/'.$row->donatur_id); ?>" 
                                       class="btn btn-danger waves-effect btn-xs" 
                                       onclick="return confirm('Apakah Anda Yakin Menghapus donatur <?= $row->donatur_nama ?> ?')">
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

            <?php echo form_open_multipart('donatur/donatur_add'); ?>

                  
                    <div class="form-group form-float">
                        <div class="form-line">
                            <select name="donasi_id" id="donasi_id" required="required" class="form-control show-tick">
                                <option value="">-- PILIH DONASI --</option>
                                <?php foreach ($donasi_view as $row) {  ?>
                                <option value="<?= $row->donasi_id ?>"><?= $row->donasi_nama ?></option>
                              <?php } ?>
                            </select>
                        </div>
                    </div>                  
                    <div class="form-group form-float">
                        <div class="form-line">
                            <input type="text" name="donatur_nama" id="donatur_nama" required="required" class="form-control">
                            <label class="form-label">NAMA</label>
                        </div>
                    </div>

                    <div class="form-group form-float">
                        <div class="form-line">
                            <input type="number" name="donatur_jumlah" id="donatur_jumlah" required="required" class="form-control">
                            <label class="form-label">JUMLAH</label>
                        </div>
                    </div>

                    <div class="form-group form-float">
                        <div class="form-line">
                            <input type="text" name="donatur_rekening" id="donatur_rekening" required="required" class="form-control">
                            <label class="form-label">REKENING</label>
                        </div>
                    </div>

                    <div class="form-group form-float">
                        <div class="form-line">
                            <input type="date" name="donatur_tanggal" id="donatur_tanggal" required="required" class="form-control">
                            <label class="form-label">TANGGAL</label>
                        </div>
                    </div>



            </div>
            <div class="modal-footer">
                <button type="submit" class="btn btn-primary waves-effect">Simpan</button>
                <button type="reset" class="btn btn-danger waves-effect">Reset</button>
                <button type="button" class="btn btn-link waves-effect" data-dismiss="modal">Batal</button>
            </div>
            <?php echo form_close(); ?>
        </div>
    </div>
