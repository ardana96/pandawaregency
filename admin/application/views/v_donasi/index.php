
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
                                <th>DONASI</th>
                                <th width=500>RINGKASAN</th>
                                <th>TARGET</th>  
                                <th>PRIORITAS</th>
                                <th>AKSI</th>             
                            </tr>
                        </thead>
                        <tbody>
                            <?php $no=1; ?>
                            <?php foreach($donasi_view as $row){ ?>
                            <tr>
                                <td><?= $no++;?></td>
                                <td><?= $row->donasi_nama ?></td>
                                <td width=500><?= $row->donasi_ringkasan ?></td>
                                <td>Rp. <?= number_format($row->donasi_target) ?></td>
                                <td>
                                    <?php if($row->priority == 1){?>
                                    <button class="btn btn-success waves-effect btn-xs">
                                       <i class="material-icons">done</i></button>
                                    <?php }else {?>
                                    <button  
                                       class="btn bg-deep-orange waves-effect btn-xs">
                                       <i class="material-icons">block</i></button>
                                    <?php }?>
                                </td>
                                
                          
                                
                                <td width=100>
                                    <a href="<?= site_url('donasi/donasi_edit/'.$row->donasi_id); ?>" 
                                       class="btn btn-warning waves-effect btn-xs">
                                       <i class="material-icons">edit</i></a> 
                                    <a href="<?= site_url('donasi/donasi_delete/'.$row->donasi_id.'/'.$row->donasi_photo); ?>" 
                                       class="btn btn-danger waves-effect btn-xs" 
                                       onclick="return confirm('Apakah Anda Yakin Menghapus Donasi <?= $row->donasi_nama ?> ?')">
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
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title" id="largeModalLabel">TAMBAH <?= strtoupper($judul)?> BARU</h4>
            </div>
            <div class="modal-body">

            <?php echo form_open_multipart('donasi/donasi_add'); ?>

                  
                    <div class="form-group form-float">
                        <div class="form-line">
                            <input type="text" name="donasi_nama" id="donasi_nama" required="required" class="form-control">
                            <label class="form-label">NAMA</label>
                        </div>
                    </div>
                    
                     <label>Ringkasan</label>
                     <div class="form-group">
                        <div class="form-line">
                            <textarea rows="4" name="donasi_ringkasan" class="form-control no-resize" placeholder="Keterangan"></textarea>
                        </div>
                    </div>

                    <div class="body">
                        <textarea id="tinymce" name="donasi_isi">
                          
                        </textarea>
                    </div>
                    <br>

                    <div class="form-group form-float">
                        <div class="form-line">
                            <input type="number" name="donasi_target" id="donasi_target" required="required" class="form-control" required="required">
                            <label class="form-label">TARGET</label>
                        </div>
                    </div>


                    <label>STATUS</label>
                <div class="demo-radio-button">

                        
                            <input name="priority" type="radio" id="radio_1" value="1"/>
                            <label for="radio_1">PRIORITAS</label>
                            <input name="priority" type="radio" id="radio_2" value="0" checked />
                            <label for="radio_2">TIDAK PRIORITAS</label>
                        
                          
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
