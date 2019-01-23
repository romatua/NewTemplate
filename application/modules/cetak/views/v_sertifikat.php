<table border="0">
    <tr>
        <td align="left" width=""><img src="assets/ultra/data/invoice/Picture1.png" width="120" ></td>
    </tr>
    <tr><td>&nbsp;</td></tr>
</table>
<h3 style="text-align: center;display: inline-block;line-height: 0.85;font-size: 11;">
IKHTISAR PERTANGGUNGAN<br>POLIS ASURANSI KREDIT STACO AMAN 4
</h3>
<div class="clearfix"></div>
<table border="0" style="font-size: 9;">
    <tr>
        <!-- <td width="4%" style="text-align: center">1</td> -->
        <td width="28%" height="20px">No. Polis</td>
        <td width="72%" colspan="3">: <?= '00-K0000001/2018/0/0' ?></td>
    </tr>
    <tr>
        <td height="20px">&nbsp;</td>
    </tr>
    <tr>
        <td height="20px"><b>Tertanggung</b></td>
    </tr>
    <tr>
        <!-- <td style="text-align: center">2</td> -->
        <td height="20px">Nama</td>
        <td colspan="3">: <?= 'PT. Akulaku Finance Indonesia' ?></td>
    </tr>
    <tr>
        <!-- <td style="text-align: center">2</td> -->
        <td height="20px">Alamat</td>
        <td colspan="3" align="justify">: <?= 'Sahid Sudirman Center lantai 11, unit C, Jalan Jend. Sudirman No. 
        <br>  86, Jakarta Pusat 10160' ?></td>
    </tr>
    <tr>
        <td height="20px">&nbsp;</td>
    </tr>
    <tr>
        <td height="20px"><b>Debitur</b></td>
    </tr>
    <tr>
        <!-- <td style="text-align: center">3</td> -->
        <td height="20px">No. Transaksi</td>
        <td colspan="3">: <?= $noref ?></td>
    </tr>
    <tr>
        <!-- <td style="text-align: center">4</td> -->
        <td height="20px">Tanggal Transaksi</td>
        <td colspan="3">: <?= $transdate ?></td>
    </tr>
    <tr>
        <!-- <td style="text-align: center">6</td> -->
        <td height="20px">Nama</td>
        <td colspan="3">: <?= $custname ?></td>
    </tr>
    <tr>
        <!-- <td style="text-align: center">7</td> -->
        <td height="20px">Nomor KTP</td>
        <td colspan="3">: <?= $ktp ?></td>
    </tr>
    <tr>
        <!-- <td style="text-align: center">8</td> -->
        <td height="20px">Tanggal Lahir</td>
        <td colspan="3">: <?= $dob?></td>
    </tr>
    <tr>
        <!-- <td style="text-align: center">9</td> -->
        <td height="20px">Alamat</td>
        <td colspan="3">: <?= $adrs ?></td>
        <!-- <td colspan="2"></td> -->
    </tr>
    <tr>
        <td height="20px">&nbsp;</td>
    </tr>
    <tr>
        <!-- <td style="text-align: center">9</td> -->
        <td height="20px">Pekerjaan</td>
        <td colspan="3">: <?= $jobtitle ?></td>
        <!-- <td colspan="2"></td> -->
    </tr>
    <tr>
        <td height="20px">&nbsp;</td>
    </tr>
    <tr>
        <td height="20px" colspan="4"><b>Jangka Waktu Pertanggungan</b></td>
    </tr>
    <tr>
        <td height="20px" colspan="4">Mulai dari tanggal <?= $transdate ?> sampai tanggal <?= $enddate ?></td>
    </tr>
    <tr>
        <td height="20px">&nbsp;</td>
    </tr>
    <tr>
        <td height="20px" colspan="2"><b>Jumlah Uang Pertanggungan</b></td>
        <td height="20px" colspan="2">Rp. <?= $tsi ?></td>
    </tr>
    <tr>
        <td height="20px">&nbsp;</td>
    </tr>
    <tr>
        <td height="20px" colspan="2"><b>JUMLAH PREMI</b></td>
        <td height="20px" colspan="2">Rp. <?= $tsi.' x '.'3 % = Rp. '.$tsi * 0.03 ?></td>
    </tr>
    <tr>
        <td height="20px">&nbsp;</td>
    </tr>
    <tr>
        <td height="20px" colspan="2"><b>Lampiran / Syarat-syarat Tambahan:</b></td>
    </tr>
    <tr>
        <td height="20px" colspan="4">
        <?= "
<br>- Debitur dalam keadaan sehat dan tidak dirawat dirumah sakit
<br>- Klausul Pengakuan Penanggalan Electronik (EDRC \"A\")
<br>- Klausul Kadaluarsa Klaim
<br>- Klausul Pengecualian Kewajiban Kontraktual Tambahan
<br>- Klausul Pengecualian Asbestos Total
<br>- Klausul Pengecualian Rembesan, Polusi dan Kontaminasi (NMA 1685 - Tiba-tiba dan tidak sengaja)
        " ?>
        </td>
    </tr>
    <tr>
        <td height="20px">&nbsp;</td>
    </tr>
    <tr>
        <td height="20px" colspan="2">&nbsp;</td>
        <td height="20px" align="right" colspan="2">Jakarta, <?= date("d-M-Y") ?></td>
    </tr>
    <tr>
        <td height="20px" colspan="2">&nbsp;</td>
        <td height="20px" align="right" colspan="2">PT. Asuransi Staco Mandiri</td>
    </tr>
    <tr>
        <td align="right" height="20px" colspan="4"><img src="assets/ultra/data/invoice/nng1.png" width="120" ></td>
    </tr>
    <tr>
        <td height="20px" colspan="3">&nbsp;</td>
        <td height="20px" align="right" colspan="">Naning Setiyaningsih</td>
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