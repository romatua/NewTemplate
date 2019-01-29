<table border="0">
    <tr>
        <td width="200px"></td>
        <td width="10px"></td>        
        <td width="55%"></td>        
        <td width=""><img src="assets/images/logo2.png" ></td>
    </tr>
</table>
<h3 style="text-align: center;display: inline-block;line-height: 0.85;">BANK ASSURANCE</h3>
<div class="clearfix"></div>
<table border="0">
    <tr>
        <!-- <td width="4%" style="text-align: center">1</td> -->
        <td width="28%">NOMOR POLIS</td>
        <td width="72%" colspan="3"><?= $nomor_polis <> ''?$nomor_polis:'-' ?></td>
    </tr>
    <tr>
        <!-- <td style="text-align: center">2</td> -->
        <td>JENIS PERTANGGUNGAN</td>
        <td colspan="3"><b><?= 'Asuransi PA + ND' ?></b></td>
    </tr>
    <tr>
        <!-- <td style="text-align: center">3</td> -->
        <td>NAMA TERTANGGUNG</td>
        <td colspan="3"><?= $nama_peserta ?></td>
    </tr>
    <tr>
        <!-- <td style="text-align: center">4</td> -->
        <td>TANGGAL LAHIR</td>
        <td colspan="3"><?= $tgl_lahir ?></td>
    </tr>
    <tr>
        <!-- <td style="text-align: center">5</td> -->
        <td>USIA</td>
        <td colspan="3"><?= $usia_masuk.' TAHUN' ?></td>
    </tr>
    <tr>
        <!-- <td style="text-align: center">6</td> -->
        <td>JENIS KELAMIN</td>
        <td colspan="3"><?= $jeniskelamin ?></td>
    </tr>
    <tr>
        <!-- <td style="text-align: center">7</td> -->
        <td>JENIS KREDIT</td>
        <td colspan="3"><?= $jenis_kredit ?></td>
    </tr>
    <tr>
        <!-- <td style="text-align: center">8</td> -->
        <td>MASA PERTANGGUNGAN</td>
        <td colspan="3"><?= $masa_asuransi.' BULAN'?><!-- &nbsp;<?= $days > 0 ? $days:'0'.' HARI'?> --></td>
    </tr>
    <tr>
        <td></td>
        <td width="25%"><?= $tgl_mulai ?></td>
        <td width="20%" style="text-align: center"> S/D </td>
        <td width="27%"><?= $tgl_akhir ?></td>
    </tr>
    <tr>
        <!-- <td style="text-align: center">9</td> -->
        <td>HARGA PERTANGGUNGAN</td>
        <td style="text-align: right;"><?= number_format($nilai_pertanggungan,2) ?></td>
        <!-- <td colspan="2"></td> -->
    </tr>
    <tr>
        <!-- <td style="text-align: center">10</td> -->
        <td>LUAS JAMINAN</td>
        <td colspan="3"><?= 'Meninggal Dunia' ?></td>
    </tr>
    <tr>
        <!-- <td style="text-align: center">11</td> -->
        <td>PERSYARATAN</td>
        <td colspan="3"><?= "- Debitur dalam keadaan sehat dan tidak dirawat dirumah sakit" ?></td>
    </tr>
    <tr>
        <!-- <td style="text-align: center">12</td> -->
        <td>PERHITUNGAN PREMI</td>
        <td>:</td>
        <td>PREMI</td>
        <td style="text-align: right;"><?= number_format($premi,2) ?></td>
    </tr>
    <tr>
        <!-- <td style="text-align: center"></td> -->
        <td></td>
        <td></td>
        <td>BIAYA POLIS</td>
        <td style="text-align: right;"><?= number_format('0',2) ?></td>
    </tr>
    <tr>
        <!-- <td style="text-align: center"></td> -->
        <td></td>
        <td></td>
        <td>TOTAL</td>
        <td style="text-align: right;"><?= number_format($premi,2) ?></td>
    </tr>
    
</table>
<div class="clearfix"></div>
<div class="clearfix"></div>
<div class="clearfix"></div>
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
<p>&#x2702;-----------------------------------------------------------------------------------&#x2702;------------------------------------------------------------------------------------&#x2702;</p>
<table border="0">
    <tr>
        <!-- <td width="4%"></td> -->
        <td width="45%" colspan="2">
Untuk informasi lebih lanjut dapat menghubungi:<br/>KC Bandung Ritel<br/>Jl. WR. Supratman No. 35, Bandung<br/>T. : (022) 7202517, 7202370, 7275120<br/>F. : (022) 7274572, 7274493<br/>E. : bandung_ritel@gmail.com<br/>Homepage : http://www.jasindo.co.id
        </td>
        
        <td width="17%"></td>
        <td width="34%"></td>
    </tr>
    
</table>
<div>



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