<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">



<body onload="print_dokument()">

  <h2>Cell that spans two rows</h2>
  <p>To make a cell span more than one row, use the rowspan attribute.</p>

  <table style="width: auto;
" class="table table-bordered">
  <?php
                      foreach($form as $f){ 
                      
                      ?>
  <tbody>
  <tr>
      <th colspan="5">I. Data Pegawai</th>

    </tr>
    <tr>
      <td colspan="2">Nama</td>
      <td><?php echo $f->nama ?></td>
      <td> NIP. </td>
      <td colspan="2"><?php echo $f->nip; ?></th>

    </tr>
    <tr>
      <td colspan="2">Jabatan</td>
      <td><?php echo $f->jabatan; ?></td>
      <td> Masa Kerja </td>
      <td><?php echo $f->masa_kerja; ?></td>
    </tr>
    <tr>
      <td colspan="2">Unit Kerja</td>
      <td colspan="3"><?php echo $f->unit_kerja; ?></td>
    </tr>
    <tr>
      <th colspan="5"></th>
    </tr>
    <tr>
      <th colspan="5">II.JENIS CUTI YANG DIAMBIL **</th>
    </tr>
    <tr>
      <td>1. Cuti Tahunan</td>
      <td><?php echo $f->jenis_cuti; ?></td>
      <td></td>
      <td>2. Cuti Besar</td>
      <th></th>
    </tr>
    <tr>
      <td>3. Cuti Sakit</td>
      <td></td>
      <td></td>
      <td>4. Cuti Melahirkan</td>
      <th></th>
    </tr>
    <tr>
      <td>5. Cuti Karena Alasan Penting</td>
      <td></td>
      <td></td>
      <td>6. Cuti Diluar Tanggungan Negara</td>
      <th></th>
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
      <td colspan="2">Selama</td>
      <td><?php echo $f->lama_cuti; ?></td>
      <td> Mulai Tanggal </td>

      <td><?php echo $f->mulai_cuti; ?> s/d <?php echo $f->akhir_cuti; ?></td>

    </tr>
    <tr>
      <th colspan="5">V.LAMANYA CUTI</th>

    </tr>
    <tr>
      <th colspan="3"> 1.CUTI TAHUNAN</th>
      <th> 2.CUTI BESAR </th>
      <th> </th>
    </tr>
    <tr>
      <th> Tahun </th>
      <th> Sisa </th>
      <th> Keterangan </th>
      <th> 3.CUTI SAKIT</th>
      <td> </td>


    </tr>
    <tr>
      <td>N-2</td>
      <td> </td>
      <td></td>
      <th>4.CUTI MELAHIRKAN</th>
      <td></td>
    </tr>
    <tr>
      <td>N-1</td>
      <td> </td>
      <td></td>
      <th>5.CUTI KARENA ALASAN PENTING</th>
      <td></td>
    </tr>
    <tr>
      <td>N</td>
      <td> </td>
      <td></td>
      <th>6.CUTI DILUAR TANGGUNGAN NEGARA</th>
      <td></td>
    </tr>
    <tr>
      <th>Jumlah</th>
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
      <th colspan="3"></th>
      <td>TELP. </td>
      <td></td>
    </tr>
    <tr>
      <th colspan="3"></th>
      <td colspan="2"><p>Hormat Saya, </p></td>
    </tr>
    <tr>
      <th colspan="5"></th>
    </tr>
    <tr>
      <th colspan="5">VII.PERTIMBANGAN ATASAN LANGSUNG dan KA SUB BAG TATA USAHA**</th>

    </tr>
    <tr>
      <td>DISETUJUI</td>
      <td>PERUBAHAN</td>
      <td>DITANGGUNGKAN</td>
      <td colspan="2">TIDAK DISETUJUI</td>


    </tr>
    <tr>
      <td></td>
      <td></td>
      <td></td>
      <td colspan="2"></td>


    </tr>
    <tr>
      <td></td>
      <td></td>
      <td>Atasan Langsung</td>
      <td colspan="2">Ka Sub Bang Tata Usaha</td>


    </tr>
    <tr>
      <th colspan="5">VIII.KPUTUSAN PEJABAT YANG BERWENANG MEMBERIKAN CUTI**</th>

    </tr>
    <tr>
      <td>DISETUJUI</td>
      <td>PERUBAHAN</td>
      <td>DITANGGUNGKAN</td>
      <td colspan="2">TIDAK DISETUJUI</td>


    </tr>
    <tr>
      <td></td>
      <td></td>
      <td></td>
      <td colspan="2"></td>


    </tr>
    <tr>
      <td></td>
      <td></td>
      <td></td>
      <td colspan="2">Kepala Balai</td>


    </tr>
  </tbody>
  </table>
  <?php
                      }?>

<script>
	function print_dokument() {
    	window.print();
}
</script>

</body>