
      <!-- End Navbar -->
      <div class="content" >
        <div class="row">
          <div class="col-md-12" >
            
          <div class="card card-user">
              <div class="card-header">
                <h5 class="card-title">Formulir Cuti</h5>
              </div>
              <div class="card-body">
              <?php
                      foreach($form as $f){ 
                      
                      ?>
                <form method="post" 
                      <?php 
                        if($f->lokasi_atasan == "kepala_tu"){
                          ?> 
                            action="<?php echo base_url().'home/edit_cutiKaTu/'; ?>"
                      <?php
                        }
                        elseif($f->lokasi_atasan == "ka_balai"){
                          ?> 
                            action="<?php echo base_url().'home/edit_cutiKaBalai/'; ?>"

                            <?php
                        }
                        elseif($f->lokasi_atasan == "admin"){
                          ?> 
                            action="<?php echo base_url().'home/edit_cutiAdmin/'; ?>"
                      <?php
                        }
                        
                        
                        else{
                          ?>
                           action="<?php echo base_url().'home/edit_cuti/'; ?>"
                          <?php
                        }
                      
                      
                      ?>
                
                
                >
             

                    <input type="text" class="form-control" name="id" readonly value="<?php echo $f->id_form ?>" hidden  required>
                  <div class="row">
                    <div class="col-md-6 pr-1">
                      <div class="form-group">
                        <label>Nama</label>
                        <input type="text" class="form-control" name="nama" readonly value="<?php echo $f->nama ?>"   required>
                      </div>
                    </div>
                    <div class="col-md-6 pl-1">
                      <div class="form-group">
                        <label>NIP</label>
                        <input type="text" class="form-control" name="nip" readonly  value="<?php echo $f->nip; ?>"  required>
                      </div>
                    </div>
                  </div>
                  <div class="row">
                    <div class="col-md-6 pr-1">
                      <div class="form-group">
                        <label>Jabatan</label>
                        <input type="text" name="jabatan" class="form-control" placeholder="Jabatan" readonly value="<?php echo $f->jabatan; ?>"  required>
                      </div>
                    </div>
                    <div class="col-md-6 pl-1">
                      <div class="form-group">
                        <label>Masa Kerja</label>
                        <input type="text"  name="masakerja" class="form-control" placeholder="Masa Kerja" readonly  value="<?php echo $f->masa_kerja; ?>"  required>
                      </div>
                    </div>
                  </div>
                  <div class="row">
                    <div class="col-md-12">
                      <div class="form-group">
                        <label>Unit Kerja</label>
                        <input type="text" name="unit_kerja" class="form-control" placeholder="Unit Kerja"  readonly value="<?php echo $f->unit_kerja; ?>"  required>
                      </div>
                    </div>
                  </div>
                  <div class="row">
                    <div class="col-md-12">
                      <div class="form-group">
                        <label>Jenis Cuti Yang Diambil</label>                     
                        <select name="jenis_cuti" id="jenis_cuti" class="form-control" disabled required >
                          <option value="cuti_tahunan" <?php if($f->jenis_cuti == "cuti_tahunan"){echo "selected";}  ?>>Cuti Tahunan</option>
                          <option value="cuti_besar" <?php if($f->jenis_cuti == "cuti_besar"){echo "selected";}  ?>>Cuti Besar</option>
                          <option value="cuti_sakit" <?php if($f->jenis_cuti == "cuti_sakit"){echo "selected";}  ?>>Cuti Sakit</option>
                          <option value="cuti_melahirkan" <?php if($f->jenis_cuti == "cuti_melahirkan"){echo "selected";}  ?>>Cuti Melahirkan</option>
                          <option value="cuti_alasan_penting" <?php if($f->jenis_cuti == "cuti_alasan_penting"){echo "selected";}  ?>>Cuti Karena Alasan Penting</option>
                          <option value="cuti_diluar_tanggungan_negara" <?php if($f->jenis_cuti == "cuti_diluar_tanggungan_negara"){echo "selected";}  ?>>Cuti Diluar Tanggungan Negara</option>
                        </select>
                      </div>
                    </div>
                  </div>
                  
                  <div class="row">
                    <div class="col-md-12">
                      <div class="form-group">
                        <label>Alasan Cuti</label>                     
                        <textarea class="form-control textarea" name="alasan_cuti"  readonly required><?php echo $f->alasan_cuti; ?></textarea>
                      </div>
                    </div>
                  </div>
                  
                  <div class="row">
                    <div class="col-md-4 pr-1">
                      <div class="form-group">
                        <label>Lamanya Cuti </label>
                        <input type="text" class="form-control" name="lama_cuti" placeholder="Selama Hari/Bulan/Tahun" readonly value="<?php echo $f->lama_cuti; ?>" required> 
                      </div>
                    </div>
                  </div>
                  <div class="row">
                    <div class="col-md-6 pr-1">
                      <div class="form-group">
                        <label>Mulai Tanggal</label>
                        <input type="date" name="tanggal_mulai" class="form-control" placeholder="Jabatan"  readonly value="<?php echo $f->mulai_cuti; ?>" required>
                      </div>
                    </div>
                    <div class="col-md-6 pl-1">
                      <div class="form-group">
                        <label>Sampai Dengan</label>
                        <input type="date"  name="tanggal_akhir" class="form-control" placeholder="Masa Kerja" readonly  value="<?php echo $f->akhir_cuti; ?>"  required>
                      </div>
                    </div>
                  </div>
                  <div class="row">
                    <div class="col-md-12">
                      <div class="form-group">
                        <label>Atasan Langsung</label>                     
                        <select name="atasan_langsung" id="jenis_cuti" class="form-control" disabled required > 
                          <option value="ppk" <?php if($f->tujuan_atasan == "ppk"){echo "selected";}  ?>>PPK</option>
                          <option value="koor_kepegawaian" <?php if($f->tujuan_atasan == "koor_kepegawaian"){echo "selected";}  ?> >Koordinator Kepegawaian</option>
                          <option value="koor_rt"  <?php if($f->tujuan_atasan == "koor_rt"){echo "selected";}  ?> >Koordinator Rumah Tangga</option>
                          <option value="kepala_tu"  <?php if($f->tujuan_atasan == "kepala_tu"){echo "selected";}  ?> >Kepala TU</option>
                          <option value="kasie_jaslit" <?php if($f->tujuan_atasan == "kasie_jaslit"){echo "selected";}  ?> >Kasie Jaslit</option>
                          <option value="kasi_yantek" <?php if($f->tujuan_atasan == "kasi_yantek"){echo "selected";}  ?> >Kasie Yantek</option>
                          <option value="ka_kelti_ento_fato" <?php if($f->tujuan_atasan == "ka_kelti_ento_fato"){echo "selected";}  ?>  >Kepala Kelti Entomologi & Fitopatologi</option>
                          <option value="ka_kelti_plasmanutfah" <?php if($f->tujuan_atasan == "ka_kelti_plasmanutfah"){echo "selected";}  ?>  >Kepala Kelti PLasmanutfah & Pemuliaan</option>
                          <option value="ka_kelti_ekofisiologi" <?php if($f->tujuan_atasan == "ka_kelti_ekofisiologi"){echo "selected";}  ?>  >Kepala Kelti Ekofisiologi</option>
                          <option value="ka_balai" <?php if($f->tujuan_atasan == "ka_balai"){echo "selected";}  ?>  >Kepala Balai</option>
                        </select>
                      </div>
                    </div>
                  </div>
                  <div class="row">
                    <div class="col-md-12">
                      <div class="form-group">
                        <?php $role= $this->session->userdata("role"); ?>
                        <label>Catatan Atasan Langsung</label>                     
                          <textarea class="form-control textarea" name="status_atasan"  
                            <?php if($role !== $f->tujuan_atasan || $role == "ka_balai" || $role == "kepala_tu") {  echo "disabled";  } ?>
                          ><?php echo $f->status_atasan_langsung; ?>
                          </textarea>


                      </div>
                    </div>
                    <div class="col-md-12">
                      <div class="form-group">
                        <label>Pertimbangan Atasan Langsung</label>                     
                        <select name="pertimbangan_atasan_langsung"  class="form-control" 
                        <?php if($role !== $f->tujuan_atasan || $role == "ka_balai" || $role == "kepala_tu") {  echo "disabled";  } ?>
                        required > 
                          <option value="belum" <?php if($f->pertimbangan_atasan_langsung == "belum"){echo "selected";}  ?>>Belum Dipertimbangkan</option>

                          <option value="disetujui" <?php if($f->pertimbangan_atasan_langsung == "disetujui"){echo "selected";}  ?>>Disetujui</option>
                          <option value="perubahan" <?php if($f->pertimbangan_atasan_langsung == "perubahan"){echo "selected";}  ?> >Perubahan</option>
                          <option value="ditangguhkan"  <?php if($f->pertimbangan_atasan_langsung == "ditangguhkan"){echo "selected";}  ?> >Ditangguhkan</option>
                          <option value="tidak_disetujui"  <?php if($f->pertimbangan_atasan_langsung == "tidak_disetujui"){echo "selected";}  ?> >Tidak Disetujui</option>
                        </select>
                      </div>
                    </div>
                  </div>
                  <div class="row">
                    <div class="col-md-12">
                      <div class="form-group">
                        <label>Catatan Kepala TU</label>                     
                        <textarea class="form-control textarea" name="status_ktu"  
                          <?php if($role !== "kepala_tu") {echo "disabled"; } ?> 
                          required placeholder="isi - jika kosong ">
                          <?php echo $f->status_ktu; ?>
                        </textarea>
                      </div>
                    </div>
                    <div class="col-md-12">
                      <div class="form-group">
                        <label>Pertimbangan Kepala Tata Usaha</label>                     
                        <select name="pertimbangan_katu"  class="form-control" 
                        <?php if($role !== "kepala_tu") {echo "disabled"; } ?> 
                        required > 
                          <option value="belum" <?php if($f->pertimbangan_kepala_tu == "belum"){echo "selected";}  ?>>Belum Dipertimbangkan</option>

                          <option value="disetujui" <?php if($f->pertimbangan_kepala_tu == "disetujui"){echo "selected";}  ?>>Disetujui</option>
                          <option value="perubahan" <?php if($f->pertimbangan_kepala_tu == "perubahan"){echo "selected";}  ?> >Perubahan</option>
                          <option value="ditangguhkan"  <?php if($f->pertimbangan_kepala_tu == "ditangguhkan"){echo "selected";}  ?> >Ditangguhkan</option>
                          <option value="tidak_disetujui"  <?php if($f->pertimbangan_kepala_tu == "tidak_disetujui"){echo "selected";}  ?> >Tidak Disetujui</option>
                        </select>
                      </div>
                    </div>
                  </div>
                  <div class="row">
                    <div class="col-md-12">
                      <div class="form-group">
                        <label>Catatan Kepala Balai</label>                     
                        <textarea class="form-control textarea" name="status_kabalai"   
                          <?php
                           var_dump($role);
                            if($role !== "ka_balai") {  echo "disabled";  } ?>
                        ><?php echo $f->status_kepala_balai; ?></textarea>
                      </div>
                    </div>
                    <div class="col-md-12">
                      <div class="form-group">
                        <label>Pertimbangan Kepala Balai</label>                     
                        <select name="pertimbangan_kepala_balai"  class="form-control" 
                        <?php  if($role !== "ka_balai") {  echo "disabled";  } ?> 
                        required > 
                          <option value="belum" <?php if($f->pertimbangan_kepala_balai == "belum"){echo "selected";}  ?>>Belum Dipertimbangkan</option>

                          <option value="disetujui" <?php if($f->pertimbangan_kepala_balai == "disetujui"){echo "selected";}  ?>>Disetujui</option>
                          <option value="perubahan" <?php if($f->pertimbangan_kepala_balai == "perubahan"){echo "selected";}  ?> >Perubahan</option>
                          <option value="ditangguhkan"  <?php if($f->pertimbangan_kepala_balai == "ditangguhkan"){echo "selected";}  ?> >Ditangguhkan</option>
                          <option value="tidak_disetujui"  <?php if($f->pertimbangan_kepala_balai == "tidak_disetujui"){echo "selected";}  ?> >Tidak Disetujui</option>
                        </select>
                      </div>
                    </div>
                  </div>
                  
                  <?php
                      }
                 
                $role = $this->session->userdata("role");
                if($role !== "user"){
                ?>
                  <div class="row">
                    <div class="update ml-auto mr-auto">
                      <button type="submit" class="btn btn-primary btn-round">Simpan</button>
                    </div>
                  </div>
                <?php }?>
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
