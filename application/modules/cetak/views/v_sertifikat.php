<table border="0">
    <tr>
        <td align="right" width=""><img src="assets/images/logo2.png" width="120" ></td>
    </tr>
    <tr><td>&nbsp;</td></tr>
</table>
<h3 style="text-align: center;display: inline-block;line-height: 0.85;font-size: 16;">KEPESERTAAN ASURANSI JIWA KREDIT</h3>
<div class="clearfix"></div>
<table border="0" style="font-size: 9;">
    <tr>
        <!-- <td width="4%" style="text-align: center">1</td> -->
        <td width="28%" height="20px">1. NOMOR POLIS</td>
        <td width="72%" colspan="3">: <?= $nomor_polis ?></td>
    </tr>
    <tr>
        <!-- <td style="text-align: center">2</td> -->
        <td height="20px">2. NOMOR REKENING</td>
        <td colspan="3">: <b><?= $nomor_rekening ?></b></td>
    </tr>
    <tr>
        <!-- <td style="text-align: center">2</td> -->
        <td height="20px">3. NOMOR PK</td>
        <td colspan="3">: <b><?= $nomor_pk ?></b></td>
    </tr>
    <tr>
        <!-- <td style="text-align: center">3</td> -->
        <td height="20px">4. NAMA TERTANGGUNG</td>
        <td colspan="3">: BPD BALI <?= strtoupper($nama_cabang_bws) ?> QQ <?= $nama_peserta ?></td>
    </tr>
    <tr>
        <!-- <td style="text-align: center">4</td> -->
        <td height="20px">5. TANGGAL LAHIR</td>
        <td colspan="3">: <?= $tgl_lahir ?></td>
    </tr>
    <tr>
        <!-- <td style="text-align: center">6</td> -->
        <td height="20px">6. JENIS KELAMIN</td>
        <td colspan="3">: <?= $jeniskelamin ?></td>
    </tr>
    <tr>
        <!-- <td style="text-align: center">7</td> -->
        <td height="20px">7. JENIS KREDIT</td>
        <td colspan="3">: <?= $jenis_kredit ?></td>
    </tr>
    <tr>
        <!-- <td style="text-align: center">8</td> -->
        <td height="20px">8. MASA ASURANSI</td>
        <td colspan="3">: <?= $masa_asuransi.' BULAN'?> ( <?= $tgl_mulai ?> s/d <?= $tgl_akhir ?> )</td>
    </tr>
<!--    <tr>
         <td style="text-align: center">8</td> 
        <td height="20px"></td>
        <td colspan="3">&nbsp;<i><?= $tgl_mulai ?> s/d <?= $tgl_akhir ?></i></td>
    </tr>-->
<!--    <tr>
        <td height="20px"></td>
        <td width="25%">&nbsp;<?= $tgl_mulai ?></td>
        <td width="20%" style="text-align: center"> S/D </td>
        <td width="27%"><?= $tgl_akhir ?></td>
    </tr>-->
    <tr>
        <!-- <td style="text-align: center">9</td> -->
        <td height="20px">9. NILAI PERTANGGUNGAN</td>
        <td colspan="3">: Rp <?= number_format($nilai_pertanggungan,0) ?></td>
        <!-- <td colspan="2"></td> -->
    </tr>
<!--    <tr>
         <td style="text-align: center">10</td> 
        <td height="20px">9. LUAS JAMINAN</td>
        <td colspan="3">:</td>
    </tr>
    <tr>-->
        <!-- <td style="text-align: center">10</td> 
        <td height="12px"></td>
        <td colspan="3">&nbsp;<?= '- Meninggal Dunia' ?></td>
    </tr>-->
    <tr>
        <!-- <td style="text-align: center">11</td> -->
        <td height="20px">10. PERSYARATAN</td>
        <td colspan="3">: <?= "- Debitur dalam keadaan sehat dan tidak dirawat dirumah sakit" ?></td>
    </tr>
<!--    <tr>
         <td style="text-align: center">11</td> 
        <td height="12px"></td>
        <td colspan="3">&nbsp;<?= "- Debitur dalam keadaan sehat dan tidak dirawat dirumah sakit" ?></td>
    </tr>-->    
    <tr>
        <!-- <td style="text-align: center">9</td> -->
        <td height="20px">11. PREMI</td>
        <td colspan="3">: Rp <?= number_format($premi,0) ?> </td>
        <!-- <td colspan="2"></td> -->
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
<table border="0">
<!--    <tr>
         <td width="4%"></td> 
        <td width="49%">
            &nbsp;
        </td>
        
        <td width="11%"></td>
        <td width="40%" style="font-size:9;">
Bandung, <?php echo $approved_date;?><br><b>PT. Asuransi Jasa Indonesia (Persero)</b><br>KC BANDUNG RITEL<br>
<img src="assets/images/TTDKacabSParman.jpg" width="100" height="50" /> <br>
            
M. ABDUL MUTHOLIB
            <div style="border-top: 1px solid black">KEPALA CABANG</div>
        </td>
    </tr>-->
    <tr><td height="150px">&nbsp;</td></tr>
    <tr>
        <!-- <td></td> -->
        <td border="1">
            <table cellpadding="10">
                <tr>
                    <td align="left">Untuk informasi lebih lanjut dapat menghubungi:<br/>Jasindo KC Denpasar<br/>Jl. Surapati No. 22, Denpasar, Bali - 80232<br/>T. : (0361) 235357, 263691<br/>F. : (0361) 234878<br/>E. : denpasar@jasindonet.com<br/>Homepage : http://www.jasindo.co.id
                    </td>
                </tr>
            </table>            
        </td>
        <td colspan="2"></td>
    </tr>
</table>
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