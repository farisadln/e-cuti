      <!-- End Navbar -->
      <div class="content">
      <div class="row">
          <div class="col-md-12">
            <div class="card">
              <div class="card-header">
                <h4 class="card-title">Status Pengajuan Cuti <?php echo $this->session->userdata("nama"); ?></h4>
              </div>
              <div class="card-body">
                <div class="table-responsive">
                  <table class="table">
                    <thead class=" text-primary">
                      <th>
                        Nomor Form
                      </th>
                      <th>
                        Mulai Tanggal Cuti
                      </th>
                      <th>
                        Status
                      </th>
                      <th class="text-right">
                        Aksi
                      </th>
                    </thead>
                    <tbody>
                      <?php
                      foreach($status as $s){ 
                      
                      ?>
                      <tr>
                        <td>
                          <?php echo $s->id_form ?>
                          
                        </td>
                        <td>
                          <?php echo $s->mulai_cuti ?>
                          
                        </td>
                        <td>
                           <?php echo  $s->status ?>

                        </td>
                        <td class="text-right">
                        <a href="cutiDetail/<?php echo $s->id_form ?>"><button type="button" class="btn btn-primary">Lihat</button></a>
                        <?php 
                          if($s->lokasi_atasan == $s->tujuan_atasan ){
                        ?>
                        <a href="deleteCuti/<?php echo $s->id_form ?>"><button type="button" class="btn btn-danger">Hapus</button></a>

                        <?php
                        
                          }
                        ?>
                        </td>
                      </tr>
                      <tr>

                      <?php
                      }
                      
                      ?>
                    
                    </tbody>
                  </table>
                </div>
              </div>
            </div>
          </div>
         
        </div>
      </div>
      <footer class="footer" style="position: absolute; bottom: 0; width: -webkit-fill-available;">
        <div class="container-fluid">
          <div class="row">
            
            <div class="credits ml-auto">
            
            </div>
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
