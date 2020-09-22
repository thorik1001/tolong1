<div class="card">
  <div class="card-header">
  </div>
  <div class="card-block">
    <!-- Menampilkan notif !-->
    <?= $this->session->flashdata('notif') ?>
    <!-- Tombol untuk menambah data akun !-->

    <div class="table-responsive dt-responsive">
      <table id="dom-jqry" class="table table-striped table-bordered nowrap">
        <thead>
              <tr>
                  <th rowspan="2" style="text-align: center; font-size: 13px;">Tanggal</th>
                  <th rowspan="2" style="text-align: center; font-size: 13px;">Kode Transaksi</th>
                  <th rowspan="2" style="text-align: center; font-size: 13px;">Keterangan</th>
                  <th colspan="3" style="font-size: 13px"><center>Debit</center></th>
                  <th colspan="2" style="font-size: 13px"><center>Kredit</center></th>
                        <tr>
                          <th style="font-size: 13px;text-align: center;">Beban</th>
                          <th style="font-size: 13px;text-align: center;">Perlengkapan</th>
                          <th style="font-size: 13px;text-align: center;">Hutang Usaha</th>
                          <!-- <th style="font-size: 13px;text-align: center;">HPP</th> -->
                          
                          <th style="font-size: 13px;text-align: center;">Kas</th>
                          <!-- <th style="font-size: 13px;text-align: center;">Persediaan</th> -->
                          <!-- <th style="font-size: 13px;text-align: center;">Persediaan</th> -->
                        </tr>
                    </tr>
        </thead>

        <tbody>
          <?php
          foreach ($C_JurKelkas as $key => $value) {
          ?>

          <tr class="odd gradeX">
             <td style="font-size: 13px"> <?php echo ($value->jurnalkk_tanggal) ?> </td>
              <td style="font-size: 13px"> <?php echo ($value->kode_transaksi) ?> </td>
             <td style="font-size: 13px"> <?php echo ($value->nama_akun2) ?> </td>
             <td style="font-size: 13px"> <?php echo rupiah($value->debit_beban); ?> </td>
             <td style="font-size: 13px"> <?php echo rupiah($value->debit_perlengkapan); ?>  </td>
             <td style="font-size: 13px"> <?php echo rupiah($value->debit_hutang); ?> </td>
             <td style="font-size: 13px"> <?php echo rupiah($value->kreditkas); ?> </td>
          </tr>


</tbody>
<?php } ?>
          <tfoot>
            <!-- UNTUK JUMLAH -->

                <tr>
                <th colspan="2" style="text-align:right">Total:</th>
                <!-- SUM BEBAN -->
                <th colspan="2" style="text-align:right"> <?php echo rupiah($sum_beban); ?> </th>
                <th colspan="0" style="text-align:right"> <?php echo rupiah($sum_perlengkapan); ?> </th>
                <th colspan="1" style="text-align:right"> <?php echo rupiah($sum_hutang); ?> </th>
                <th colspan="1" style="text-align:right"> <?php echo rupiah($sum_kas); ?> </th>
                </tr>

          </tfoot>
      </table>

    </div>
  </div>
</div>



<!-- Untuk rupiah pemisah angka koma dan RP !-->
<?php

function rupiah($angka){
  
  $hasil_rupiah = "Rp " . number_format($angka,2,',','.');
  return $hasil_rupiah;
 
}
?>