<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
<style>
  td {
    font-size: 10px;
  }

  tr {
    font-size: 12px;
  }

  p.header_lampiran {
    margin-left: 80%;
    font-size: 9px;
    margin-bottom: -1px;
  }

  p.header_alamat {
    margin-left: 60%;
    font-size: 10px;
    margin-bottom: -1px;
  }

  div.margin_top {
    margin-top: 8px;
  }

  td.center_text {
    text-align: center;

  }

  th.center_text {
    text-align: center;
  }

  table.border {
    border-collapse: collapse;
    border: 1px solid black;
  }
</style>


<body >


  <p class="header_lampiran ">Anak Lampiran 1.b</p>
  <p class="header_lampiran ">Peraturan Kepegawaian Negara</p>
  <p class="header_lampiran ">Republik Indonesia</p>
  <p class="header_lampiran ">Nomor 24 Tahun 2017</p>
  <p style='font-size:12px;'>Nomor : </p>

  <p class="header_alamat ">Malang</p>
  <p class="header_alamat ">Kepada Yth,</p>
  <p class="header_alamat ">Kepala Balai Penelitian Tanaman Pemanis dan Serat</p>
  <p class="header_alamat ">Di Malang</p>

  <div class="margin_top">
    <table class="table table-bordered">
      <?php
      foreach ($form as $f) {
      ?>
        <tbody>
          <tr>
            <th colspan="5">I. Data Pegawai</th>

          </tr>
          <tr>
            <td>Nama</td>
            <td colspan="2"><?php echo $f->nama ?></td>
            <td> NIP. </td>
            <td colspan="1"><?php echo $f->nip; ?></th>

          </tr>
          <tr>
            <td>Jabatan</td>
            <td colspan="2"><?php echo $f->jabatan; ?></td>
            <td> Masa Kerja </td>
            <td colspan="1"><?php echo $f->masa_kerja; ?></td>
          </tr>
          <tr>
            <td>Unit Kerja</td>
            <td colspan="4"><?php echo $f->unit_kerja; ?></td>
          </tr>
          <tr>
            <th colspan="5"></th>
          </tr>
          <tr>
            <th colspan="5">II.JENIS CUTI YANG DIAMBIL **</th>
          </tr>
          <tr>
            <td>1. Cuti Tahunan</td>
            <td class="center_text"><?php if ($f->jenis_cuti == "cuti_tahunan") {
                                      echo "&#10003;";
                                    } ?></td>
            <td rowspan=3></td>
            <td>2. Cuti Besar</td>
            <th class="center_text"><?php if ($f->jenis_cuti == "cuti_besar") {
                                      echo "&#10003;";
                                    } ?></th>
          </tr>
          <tr>
            <td>3. Cuti Sakit</td>
            <td class="center_text"><?php if ($f->jenis_cuti == "cuti_sakit") {
                                      echo "&#10003;";
                                    } ?></td>
            <td colspan="">4. Cuti Melahirkan</td>
            <th class="center_text"><?php if ($f->jenis_cuti == "cuti_melahirkan") {
                                      echo "&#10003;";
                                    } ?></th>
          </tr>
          <tr>
            <td>5. Cuti Karena Alasan Penting</td>
            <td class="center_text"><?php if ($f->jenis_cuti == "cuti_alasan_penting") {
                                      echo "&#10003;";
                                    } ?></td>
            <td>6. Cuti Diluar Tanggungan Negara</td>
            <th class="center_text"><?php if ($f->jenis_cuti == "cuti_diluar_tanggungan_negara") {
                                      echo "&#10003;";
                                    } ?></th>
          </tr>
          <tr>
            <th colspan="5"></th>
          </tr>
          <tr>
            <th colspan="5">III.ALASAN CUTI</th>
          </tr>
          <tr>
            <td colspan="5"><?php echo $f->alasan_cuti; ?></td>
          </tr>
          <tr>
            <th colspan="5">IV.LAMANYA CUTI</th>

          </tr>
          <tr>
            <td colspan="2" class="center_text">Selama</td>
            <td class="center_text"><?php echo $f->lama_cuti; ?></td>
            <td class="center_text"> Mulai Tanggal </td>


            <td class="center_text"><?php echo $f->mulai_cuti; ?>
              s/d
              <?php echo $f->akhir_cuti; ?>
            </td>

          </tr>
          <tr>
            <th colspan="5">V.CATATAN CUTI***</th>

          </tr>
          <tr>
            <th colspan="3"> 1.CUTI TAHUNAN</th>
            <th> 2.CUTI BESAR </th>
            <th> </th>
          </tr>
          <tr>
            <th class="center_text"> Tahun </th>
            <th class="center_text"> Sisa </th>
            <th class="center_text"> Keterangan </th>
            <th> 3.CUTI SAKIT</th>
            <td> </td>


          </tr>
          <tr>
            <td class="center_text">N-2</td>
            <td> </td>
            <td></td>
            <th>4.CUTI MELAHIRKAN</th>
            <td></td>
          </tr>
          <tr>
            <td class="center_text">N-1</td>
            <td> </td>
            <td></td>
            <th>5.CUTI KARENA ALASAN PENTING</th>
            <td></td>
          </tr>
          <tr>
            <td class="center_text">N</td>
            <td> </td>
            <td></td>
            <th>6.CUTI DILUAR TANGGUNGAN NEGARA</th>
            <td></td>
          </tr>
          <tr>
            <th class="center_text">Jumlah</th>
            <td> </td>
            <td></td>

            <td colspan="2"></td>
          </tr>

          <tr>
            <th colspan="5"></th>
          </tr>
          <tr>
            <th colspan="5">VI.ALAMAT SELAMA MEJALANKAN CUTI</th>

          </tr>
          <tr>
            <th rowspan="2" colspan="3"></th>
            <td>TELP. </td>
            <td></td>
          </tr>
          <tr>
            <td class="center_text" colspan="3">
              <p>Hormat Saya, </p>
              <p></p>
              <p>NIP.</p>
            </td>


            </td>
          </tr>
          <tr>
            <th colspan="5"></th>
          </tr>
          <tr>
            <th colspan="5">VII.PERTIMBANGAN ATASAN LANGSUNG dan KA SUB BAG TATA USAHA**</th>

          </tr>
          <tr>
            <td class="center_text">DISETUJUI</td>
            <td class="center_text">PERUBAHAN ****</td>
            <td class="center_text">DITANGGUNGKAN ****</td>
            <td class="center_text" colspan="2">TIDAK DISETUJUI ****</td>


          </tr>
          <tr>
            <td></td>
            <td></td>
            <td></td>
            <td colspan="2"></td>


          </tr>
          <tr>
            <td colspan="2"></td>
            <td class="center_text"> 
            <?php if ($f->pertimbangan_atasan_langsung == "disetujui") {
                                        echo "<img  src='../../../img/acc.png'>";
                                      } ?> Atasan Langsung</td>
            <td class="center_text" colspan="2">
              <?php if ($f->pertimbangan_kepala_tu == "disetujui") {
                echo "<img  src='../../../img/acc.png'>";
              } ?>

              Ka Sub Bang Tata Usaha</td>


          </tr>
          <tr>
            <th colspan="5">VIII.KPUTUSAN PEJABAT YANG BERWENANG MEMBERIKAN CUTI**</th>

          </tr>
          <tr>
            <td class="center_text">DISETUJUI</td>
            <td class="center_text">PERUBAHAN ****</td>
            <td class="center_text">DITANGGUNGKAN ****</td>
            <td class="center_text" colspan="2">TIDAK DISETUJUI ****</td>


          </tr>
          <tr>
            <td colspan="1"></td>
            <td></td>
            <td></td>
            <td colspan="2"></td>


          </tr>
          <tr>
            <td colspan="3"></td>
            <td class="center_text" colspan="2"> 
            <?php if ($f->pertimbangan_kepala_balai == "disetujui") {
                                                    echo "<img  src='../../../img/acc.png'>";
                                                  } ?>Kepala Balai</td>
          </tr>
        </tbody>
    </table>
  </div> <?php } ?>
<script>
  function print_dokument() {
    window.print();
  }
</script>

</body>