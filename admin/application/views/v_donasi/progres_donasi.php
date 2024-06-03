
<div class="row clearfix">
    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
        <div class="card">
            <div class="header">
                <h2><?= strtoupper($judul)?> </h2>
            </div>

        

            <div class="body">
                <div class="table-responsive">
                    <table class="table table-bordered table-striped table-hover js-basic-example dataTable">
                        <thead>
                            <tr>
                                <th>NO</th>
                                <th>DONASI</th>
                                <th>TERKUMPUL</th>
                                <th>TARGET</th>  
                                <th>PRIORITAS</th>             
                            </tr>
                        </thead>


                    
                        <tbody>
                            <?php $no=1; ?>
                            <?php foreach($donasi_progres_view as $row){ ?>

                                <?php 
                                    $jumlah = $row->jumlah;
                                    $target = $row->target;
                                    $persen=(($jumlah)/($target))*100;
                                    $bulat = round($persen, 2);
                                ?>
                            <tr>
                                <td><?= $no++;?></td>
                                <td><?= $row->nama ?></td>
                                <td width=17%>Rp. <?= number_format($jumlah) ?></td>
                                <td width=17%>Rp. <?= number_format($target) ?></td>
                                <td width=5%>
                                    <?php if($row->priority == 1){?>
                                    <button class="btn btn-success waves-effect btn-xs">
                                       <i class="material-icons">done</i></button>
                                    <?php }else {?>
                                    <button  
                                       class="btn bg-deep-orange waves-effect btn-xs">
                                       <i class="material-icons">block</i></button>
                                    <?php }?>
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

