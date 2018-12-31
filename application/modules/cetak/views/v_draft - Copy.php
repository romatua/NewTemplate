<table border="0">
    <tr>
        <td width="200px"></td>
        <td width="10px"></td>        
        <td width="55%"></td>
        
        <td width=""><img src="assets/images/logo3.png" width="500" ></td>
    </tr>
</table>
<h3 style="text-align: center;display: inline-block;line-height: 0.85;">DRAFT APLIKASI ASURANSI PA + ND BNI FLEKSI</h3>
<div class="clearfix"></div>
<table border="0">
    <tr>
        <td width="4%" style="text-align: center">1</td>
        <td width="30%">NOMOR POLIS</td>
        <td width="66%">: <?= $nomor_polis ?></td>
    </tr>
    <tr>
        <td style="text-align: center">2</td>
        <td>JENIS PERTANGGUNGAN</td>
        <td>: <?= 'Asuransi Jasindo PA + ND' ?></td>
    </tr>
    <tr>
        <td style="text-align: center">3</td>
        <td>NAMA TERTANGGUNG</td>
        <td>: <?= $nama_peserta ?></td>
    </tr>
    <tr>
        <td style="text-align: center">4</td>
        <td>TANGGAL LAHIR</td>
        <td>: <?= $tgl_lahir ?></td>
    </tr>
    <tr>
        <td style="text-align: center">5</td>
        <td>USIA</td>
        <td>: <?= $usia_masuk.' TAHUN' ?></td>
    </tr>
    <tr>
        <td style="text-align: center">6</td>
        <td>JENIS KELAMIN</td>
        <td>: <?= $jenis_kelamin ?></td>
    </tr>
    <tr>
        <td style="text-align: center">7</td>
        <td>JENIS KREDIT</td>
        <td>: <?= $jenis_kredit ?></td>
    </tr>
    <tr>
        <td style="text-align: center">8</td>
        <td>MASA PERTANGGUNGAN</td>
        <td>: <?= $masa_asuransi.' BULAN'?></td>
    </tr>
    <tr>
        <td colspan="2"></td>
        <td>  <?= $tgl_mulai.' s/d '.$tgl_akhir ?></td>
    </tr>
    <tr>
        <td style="text-align: center">9</td>
        <td>HARGA PERTANGGUNGAN</td>
        <td>: <?= number_format($nilai_pertanggungan,2) ?></td>
    </tr>
    <tr>
        <td style="text-align: center">10</td>
        <td>LUAS JAMINAN</td>
        <td>: <?= 'Meninggal Dunia' ?></td>
    </tr>
    <tr>
        <td style="text-align: center">11</td>
        <td>PERSYARATAN</td>
        <td>: <?= "- Debitur dalam keadaan sehat dan tidak dirawat dirumah sakit" ?></td>
    </tr>
    <tr>
        <td colspan="2"></td>
        <td>  <?= "- Subjet to no claim up to tanggal" ?></td>
    </tr>
    <tr>
        <td colspan="2"></td>
        <td>  <?= "- Usia + Masa pertanggungan maksimal 75 Tahun (Tenor max 15 Tahun)" ?></td>
    </tr>
    <tr>
        <td colspan="2"></td>
        <td>  <?= "- Usia Masuk 20-74 Tahun" ?></td>
    </tr>
    <tr>
        <td style="text-align: center">12</td>
        <td>PREMI</td>
        <td>: <?= number_format($premi,2) ?></td>
    </tr>
    <!-- <tr>
        <td>13</td>
        <td>Masa Asuransi</td>
        <td>: <?= $masa_asuransi ?></td>
    </tr>
    <tr>
        <td width="5%">14</td>
        <td>Ahli Waris</td>
        <td>: <?= "......................." ?></td>
    </tr> -->
</table>
<div class="clearfix"></div>
<div>

<?php $date = getdate(date('U')); ?>
<?php 
switch ($date['mon']) {
    case '1':
    $month = 'Januari';
    break;
    case '2':
    $month = 'Februari';
    break;
    case '3':
    $month = 'Maret';
    break;
    case '4':
    $month = 'April';
    break;
    case '5':
    $month = 'Mei';
    break;
    case '6':
    $month = 'Juni';
    break;
    case '7':
    $month = 'Juli';
    break;
    case '8':
    $month = 'Agustus';
    break;
    case '9':
    $month = 'September';
    break;
    case '10':
    $month = 'Oktober';
    break;
    case '11':
    $month = 'November';
    break;
    case '12':
    $month = 'Desember';
    break;
}
?>

<!-- <table border="0">
    <tr>
        <td>Ditandatangani di :_____________________________</td>
        <td>Tanggal :<?php echo $date['mday']." ".$month." ".$date['year'];?></td>
    </tr>
    <tr>
        <td colspan="2"></td>
    </tr>
    <tr>
        <td colspan="2">Calon Peserta</td>
    </tr>
    <tr>
        <td colspan="2"><br/><br/><br/><br/><br/><br/></td>
    </tr>
    <tr>
        <td colspan="2"><?= '$nama' ?></td>
    </tr>
</table> -->
</div>
<style type="text/css">
div,p {
    text-align: justify;
    text-justify: inter-word;
}
ul {
    list-style-type:square;
}
h4 {
    font-weight: normal;
}
</style>