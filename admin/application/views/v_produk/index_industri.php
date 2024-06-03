<div class="row clearfix">
    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
        <div class="card">
            <div class="header">
                <h2> <?= strtoupper($judul)?> </h2>
            </div>

            <div class="header">
                <button type="button" class="btn btn-primary waves-effect" data-toggle="modal" data-target="#defaultModal">
                    <i class="material-icons">add</i><span>Tambah</span>
                </button>

                <!-- <a href="<?php echo site_url('laporan/cetak_produk_industri/'.$industri_id ); ?>" class="btn btn-danger waves-effect">
                    <i class="material-icons">print</i>
                    <span> Cetak </span>
                </a> -->
            </div>
         

            <div class="body">
                <div class="table-responsive">
                    <table class="table table-bordered table-striped table-hover js-basic-example dataTable">
                        <thead>
                            <tr>
                                <th>NO</th>
                                <th>NAMA PRODUK</th>
                                <th>JENIS</th>
                                <th>RINGKASAN</th>
                                <th>DESKRIPSI</th>
                                <th>STATUS</th>
                                <th>HARGA</th>
                                <th>PHOTO</th>
                                <th>AKSI</th>            
                            </tr>
                        </thead>

                        <tbody>
                            <?php $no=1; ?>

                            <?php foreach($produk_view as $row){ ?>
                            <tr>
                                <td><?= $no++;?></td>
                                <td><?= $row->produk_nama ?></td>
                                <td><?= $row->produk_jenis ?></td>
                                <td><?= $row->produk_ringkasan ?></td>
                                <td><?= $row->produk_deskripsi ?></td>
                                <td><?= $row->produk_status ?></td>
                                <td><?= $row->produk_harga ?></td>
                                <td><img width="100" height="75" src="<?php echo base_url('images/produk/');?><?= $row->produk_photo ?>"></td>
                                <td>
                                    <a href="<?= site_url('produk/produk_edit/'.$row->produk_id); ?>" 
                                       class="btn btn-warning waves-effect btn-xs">
                                       <i class="material-icons">edit</i></a> 
                                    <a href="<?= site_url('produk/produk_delete/'.$row->produk_id); ?>" 
                                       class="btn btn-danger waves-effect btn-xs" 
                                       onclick="return confirm('Apakah Anda Yakin Menghapus Mahasiswa <?= $row->produk_nama ?> ?')">
                                       <i class="material-icons">close</i></a>

                                    <a href="<?= site_url('produk/produk_edit_photo/'.$row->produk_id); ?>" 
                                       class="btn btn-info waves-effect btn-xs">
                                       <i class="material-icons">add_a_photo</i></a>   
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
                <h4 class="modal-title" id="defaultModalLabel"> TAMBAH <?= strtoupper($judul)?> BARU</h4>
            </div>
            <div class="modal-body">

            <?php echo form_open_multipart('produk/produk_add'); ?>


                    <div class="form-group form-float">
                        <div class="form-line">
                            <input type="text" name="produk_id" id="produk_id" required="required" class="form-control" value="<?= $produk_id ?>">
                            <label class="form-label">PRODUK ID</label>
                        </div>
                    </div>

                    <div class="form-group form-float">
                        <div class="form-line">
                            <input type="text" name="produk_nama" id="produk_nama" required="required" class="form-control" >
                            <label class="form-label">NAMA PRODUK</label>
                        </div>
                    </div>

                    <div class="form-group form-float">
                        <div class="form-line">
                            <select name="produk_jenis" id="produk_jenis" required="required" class="form-control show-tick">
                                <option value="">-- PILIH JENIS --</option>
                                <option value="1">1</option>
                                <option value="2">2</option>
                            </select>
                        </div>
                    </div>

                     <label>DESKRIPSI</label>
                     <div class="form-group">
                        <div class="form-line">
                            <textarea rows="4" name="produk_ringkasan" class="form-control no-resize" placeholder="Tuliskan Deskripsi...."></textarea>
                        </div>
                    </div>

                  
                    <div class="body">
                            <textarea id="tinymce" name="produk_deskripsi">
                              
                            </textarea>
                        </div>
                
                    <div class="form-group form-float">
                        <div class="form-line">
                            <input type="text" name="produk_harga" id="produk_harga" required="required" class="form-control">
                            <label class="form-label">HARGA TOKO</label>
                        </div>
                    </div>

                    <label>Status</label>
                            <div class="demo-radio-button">                           
                                <input name="produk_status" type="radio" id="radio_1" value="Y" checked />
                                <label for="radio_1">Ada</label>
                                <input name="produk_status" type="radio" id="radio_2" value="T" />
                                <label for="radio_2">Kosong</label>                                     
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
</div>
