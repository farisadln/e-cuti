      <!-- Navbar -->
      <nav class="navbar navbar-expand-lg navbar-absolute fixed-top navbar-transparent">
        <div class="container-fluid">
          <div class="navbar-wrapper">
            <div class="navbar-toggle">
              <button type="button" class="navbar-toggler">
                <span class="navbar-toggler-bar bar1"></span>
                <span class="navbar-toggler-bar bar2"></span>
                <span class="navbar-toggler-bar bar3"></span>
              </button>
            </div>
            <a class="navbar-brand" href="javascript:;"> e-Office Balittas</a>
          </div>
          <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navigation" aria-controls="navigation-index" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-bar navbar-kebab"></span>
            <span class="navbar-toggler-bar navbar-kebab"></span>
            <span class="navbar-toggler-bar navbar-kebab"></span>
          </button>
          <div class="collapse navbar-collapse justify-content-end" id="navigation">
            <!-- <form>
              <div class="input-group no-border">
                <input type="text" value="" class="form-control" placeholder="Search...">
                <div class="input-group-append">
                  <div class="input-group-text">
                    <i class="nc-icon nc-zoom-split"></i>
                  </div>
                </div>
              </div>
            </form> -->
            <ul class="navbar-nav">
              <li class="nav-item btn-rotate dropdown">
                <a class="nav-link dropdown-toggle" href="http://example.com" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                  <i class="nc-icon nc-bell-55"></i>
                  <p>
                    <span class="d-lg-none d-md-block">Menu</span>
                  </p>
                </a>
                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdownMenuLink">
                  <a class="dropdown-item" href="#">Profile</a>
                  <a class="dropdown-item" href="Logout">Logout</a>
                </div>
              </li>
            </ul>
          </div>
        </div>
      </nav>
      <!-- End Navbar -->
      <div class="content" >
        <div class="row">
          <div class="col-md-12" >
            
          <div class="card card-user">
              <div class="card-header">
                <h5 class="card-title">Formulir Cuti</h5>
              </div>
              <div class="card-body">
                <form method="post" action="<?php echo base_url('home/add_cuti'); ?>">
                  <div class="row">
                    <div class="col-md-6 pr-1">
                      <div class="form-group">
                        <label>Nama</label>
                        <input type="text" class="form-control" name="nama" readonly value="<?php echo $this->session->userdata("nama"); ?>" required>
                      </div>
                    </div>
                    <div class="col-md-6 pl-1">
                      <div class="form-group">
                        <label>NIP</label>
                        <input type="text" class="form-control" name="nip" readonly  value="<?php echo $this->session->userdata("nip"); ?>" required>
                      </div>
                    </div>
                  </div>
                  <div class="row">
                    <div class="col-md-6 pr-1">
                      <div class="form-group">
                        <label>Jabatan</label>
                        <input type="text" name="jabatan" class="form-control" placeholder="Jabatan" value="" required>
                      </div>
                    </div>
                    <div class="col-md-6 pl-1">
                      <div class="form-group">
                        <label>Masa Kerja</label>
                        <input type="text"  name="masakerja" class="form-control" placeholder="Masa Kerja" value="" required>
                      </div>
                    </div>
                  </div>
                  <div class="row">
                    <div class="col-md-12">
                      <div class="form-group">
                        <label>Unit Kerja</label>
                        <input type="text" name="unit_kerja" class="form-control" placeholder="Unit Kerja" value="" required>
                      </div>
                    </div>
                  </div>
                  <div class="row">
                    <div class="col-md-12">
                      <div class="form-group">
                        <label>Jenis Cuti Yang Diambil</label>                     
                        <select name="jenis_cuti" id="jenis_cuti" class="form-control" required>
                          <option value="cuti_tahunan">Cuti Tahunan</option>
                          <option value="cuti_besar">Cuti Besar</option>
                          <option value="cuti_sakit">Cuti Sakit</option>
                          <option value="cuti_melahirkan">Cuti Melahirkan</option>
                          <option value="cuti_alasan_penting">Cuti Karena Alasan Penting</option>
                          <option value="cuti_diluar_tanggungan_negara">Cuti Diluar Tanggungan Negara</option>
                        </select>
                      </div>
                    </div>
                  </div>
                  <div class="row">
                    <div class="col-md-12">
                      <div class="form-group">
                        <label>Alasan Cuti</label>                     
                        <textarea class="form-control textarea" name="alasan_cuti" required></textarea>
                      </div>
                    </div>
                  </div>
                  
                  <div class="row">
                    <div class="col-md-4 pr-1">
                      <div class="form-group">
                        <label>Lamanya Cuti </label>
                        <input type="text"  class="form-control" name="lama_cuti" placeholder="Selama Hari/Bulan/Tahun" value="" required> 
                      </div>
                    </div>
                  </div>
                  <div class="row">
                    <div class="col-md-6 pr-1">
                      <div class="form-group">
                        <label>Mulai Tanggal</label>
                        <input type="date"  name="tanggal_mulai" class="form-control" placeholder="" value="" required>
                      </div>
                    </div>
                    <div class="col-md-6 pl-1">
                      <div class="form-group">
                        <label>Sampai Dengan</label>
                        <input type="date"  name="tanggal_akhir" class="form-control" placeholder="" value="" required>
                      </div>
                    </div>
                  </div>
                  <div class="row">
                    <div class="col-md-12">
                      <div class="form-group">
                        <label>Atasan Langsung</label>                     
                        <select name="atasan_langsung" id="jenis_cuti" class="form-control" required>
                          <option value="ppk">PPK</option>
                          <option value="koor_kepegawaian">Koordinator Kepegawaian</option>
                          <option value="koor_rt">Koordinator Rumah Tangga</option>
                          <option value="kepala_tu">Kepala TU</option>
                          <option value="kasie_jaslit">Kasie Jaslit</option>
                          <option value="kasi_yantek">Kasie Yantek</option>
                          <option value="ka_kelti_ento_fato">Kepala Kelti Entomologi & Fitopatologi</option>
                          <option value="ka_kelti_plasmanutfah">Kepala Kelti PLasmanutfah & Pemuliaan</option>
                          <option value="ka_kelti_ekofisiologi">Kepala Kelti Ekofisiologi</option>
                          <option value="ka_balai">Kepala Balai</option>
                        </select>
                      </div>
                    </div>
                  </div>
                  <div class="row">
                    <div class="update ml-auto mr-auto">
                      <button type="submit" class="btn btn-primary btn-round">Kirim Form</button>
                    </div>
                  </div>
                </form>
              </div>
            </div>
           
          </div>
        </div>
      </div>
      <footer class="footer" style="position: absolute; bottom: 0; width: -webkit-fill-available;">
        <div class="container-fluid">
          <div class="row">
            
            
          </div>
        </div>
      </footer>
    </div>
  </div>
  <!--   Core JS Files   -->
  <script src="<? echo base_url();?>admin/assets/js/core/jquery.min.js"></script>
  <script src="<? echo base_url();?>admin/assets/js/core/popper.min.js"></script>
  <script src="<? echo base_url();?>admin/assets/js/core/bootstrap.min.js"></script>
  <script src="<? echo base_url();?>admin/assets/js/plugins/perfect-scrollbar.jquery.min.js"></script>
  <!--  Google Maps Plugin    -->
  <script src="https://maps.googleapis.com/maps/api/js?key=YOUR_KEY_HERE"></script>
  <!-- Chart JS -->
  <script src="<? echo base_url();?>admin/assets/js/plugins/chartjs.min.js"></script>
  <!--  Notifications Plugin    -->
  <script src="<? echo base_url();?>admin/assets/js/plugins/bootstrap-notify.js"></script>
  <!-- Control Center for Now Ui Dashboard: parallax effects, scripts for the example pages etc -->
  <script src="<? echo base_url();?>admin/assets/js/paper-dashboard.min.js?v=2.0.1" type="text/javascript"></script>
</body>

</html>
