<aside id="leftsidebar" class="sidebar">
            <!-- User Info -->
            <div class="user-info">
                <div class="image">
                    <img src="<?php echo base_url('images/user/'); ?><?= $ses_photo?>" width="60" height="60" alt="<?= $ses_photo?>" />
                </div>
                <div class="info-container">
                    <div class="name" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><?= strtoupper($ses_nama) ?></div>
                    <div class="email"><?= strtoupper($ses_jabatan)?></div>
                    <div class="btn-group user-helper-dropdown">
                        <i class="material-icons" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">keyboard_arrow_down</i>
                        <ul class="dropdown-menu pull-right">
                            <li><a href="<?php echo base_url(); ?>users"><i class="material-icons">person</i>Users</a></li>
                            <li role="separator" class="divider"></li>
                            <li><a href="<?php echo base_url(); ?>login"><i class="material-icons">input</i>Sign Out</a></li>
                        </ul>
                    </div>
                </div>
            </div>
            <!-- #User Info -->
            <!-- Menu -->
            <div class="menu">
                <ul class="list">

                    
                   <li class="header">MENU UTAMA</li>

                    <li >
                        <a href="javascript:void(0);" class="menu-toggle">
                            <i class="material-icons">view_list</i>
                            <span>MASTER</span>
                        </a>
                        <ul class="ml-menu">
                            <li>
                                <a href="<?php echo base_url(); ?>level">LEVEL</a>
                            </li>
                            <li>
                                <a href="<?php echo base_url(); ?>kategori">KATEGORI</a>
                            </li>
                            <li>
                                <a href="<?php echo base_url(); ?>divisi">DIVISI</a>
                            </li>
                            
                        </ul>
                    </li>


                   
                    <li>
                        <a href="<?php echo base_url(); ?>divisi_detail">
                            <i class="material-icons">filter_none</i>
                            <span>DIVISI</span>
                        </a>
                    </li>

                    <li >
                        <a href="javascript:void(0);" class="menu-toggle">
                            <i class="material-icons">monetization_on</i>
                            <span>DONASI</span>
                        </a>
                        <ul class="ml-menu">
                            <li>
                                <a href="<?php echo base_url(); ?>donasi">EVEN DONASI</a>
                            </li>
                            <li>
                                <a href="<?php echo base_url(); ?>donatur">DONATUR</a>
                            </li>
                            
                            
                        </ul>
                    </li>

                    <li>
                        <a href="<?php echo base_url(); ?>kegiatan">
                            <i class="material-icons">view_agenda</i>
                            <span>KEGIATAN</span>
                        </a>
                    </li>

                    
                     
                </ul>
            </div>
            <!-- #Menu -->
            <!-- Footer -->
            <div class="legal">
                <div class="copyright">
                    &copy; 2019 <a href="javascript:void(0);">RESELLER APP</a>.
                </div>
                <div class="version">
                    <b>Version: </b> 1.0.0
                </div>
            </div>
            <!-- #Footer -->
        </aside>