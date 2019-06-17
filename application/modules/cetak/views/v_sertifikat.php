<?php error_reporting(0);?>
<table border="0">
    <tr>
        <td align="left" width=""><img src="assets/ultra/data/invoice/Picture1.jpg" height="50px" ></td>
    </tr>
    <tr><td>&nbsp;</td></tr>
</table>
<h3 style="text-align: center;display: inline-block;line-height: 1;font-size: 11;">
IKHTISAR PERTANGGUNGAN<br>POLIS ASURANSI STACO AMAN 4
</h3>
<div class="clearfix"></div>
<table border="0" style="font-size: 9;">
    <tr>
        <!-- <td width="4%" style="text-align: center">1</td> -->
        <td width="28%" height="20px">No. Polis</td>
        <td width="72%" colspan="3">: <?= $nomor_polis ?></td>
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
        <td height="20px" colspan="2">Rp. <?= number_format($tsi,2) ?></td>
    </tr>
    <tr>
        <td height="20px">&nbsp;</td>
    </tr>
    <tr>
        <td height="20px" colspan="2"><b>JUMLAH PREMI</b></td>
        <td height="20px" colspan="2">Rp. <?= number_format($tsi,2).' x '.number_format($premi/$tsi,2).' % = Rp. '.number_format($premi,2) ?></td>
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
        <td height="20px">&nbsp;</td>
    </tr>
    <tr>
        <td height="20px">&nbsp;</td>
    </tr>
    <tr>
        <td height="20px" colspan="2">&nbsp;</td>
        <td height="20px" align="right" colspan="2">Jakarta, <?= date("d F Y") ?></td>
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
        <td height="20px" align="center" colspan="">Naning Setiyaningsih</td>
    </tr>
</table>
<div class="clearfix"></div>
<div class="clearfix"></div>
<div class="clearfix"></div>
<table border="0">
    <tr>
        <td align="left" width=""><img src="assets/ultra/data/invoice/Picture1.jpg" height="40px" ></td>
    </tr>
    <tr><td>&nbsp;</td></tr>
</table>
<h3 style="text-align: center;display: inline-block;line-height: 1;font-size: 11;">
CATATAN PENTING
</h3>
<div class="clearfix"></div>
<div>
    <ul style="text-align: justify;line-height: 1.5;">
        <li>
Pemegang Polis atau Tertanggung/Kreditur wajib membaca seluruh syarat dan kondisi Polis untuk memastikan bahwa semua hal yang tercantum di dalam polis telah dimengerti dan telah sesuai dengan Surat Permintaan Penutupan Asuransi (SPPA) yang telah ditandatangani oleh Pemegang Polis atau Tertanggung/Kreditur.  Apabila dalam waktu 14 (empatbelas) hari setelah Polis diterima tidak ada tanggapan, maka Pemegang Polis atau Tertanggung/Kreditur dianggap telah menyetujui seluruh syarat dan kondisi Polis tersebut.
        </li>
        <li>
Surat Permintaan Penutupan Asuransi (SPPA), seluruh korespondensi, Skedul Polis, Klausul serta <i>Warranty</i> yang melekat di dalam Polis merupakan satu kesatuan kontrak asuransi dan merupakan bagian yang tidak terpisahkan dari Polis.
        </li>
        <li>
Penanggung dapat membatalkan Polis dan atau dibebaskan dari tanggung jawab membayar ganti rugi bila ternyata Pemegang Polis atau Tertanggung/Kreditur dengan sengaja menyembunyikan atau tidak melaporkan fakta penting yang diketahuinya dan atau memberikan keterangan tidak benar sebelum dan selama periode pertanggungan asuransi.
        </li>
        <li>
Kecuali diatur lain dalam ketentuan pembayaran premi di dalam Polis, premi harus langsung dibayar oleh Pemegang Polis atau Tertanggung/Kreditur sewaktu penyerahan Polis, walaupun tidak ada pemberitahuan lisan maupun tertulis dari Penanggung mengenai keterlambatan pembayaran Polis. Penanggung dibebaskan dari tanggung jawab membayar ganti rugi apabila terjadi klaim jika Pemegang Polis atau Tertanggung/Kreditur tidak melaksanakan ketentuan pembayaran premi ini.
        </li>
    </ul>
</div>
<table style="padding-top: 460px" border="0">
    <tr>
        <td>&nbsp;</td>
    </tr>
</table>
<div class="clearfix"></div>
<div class="clearfix"></div>
<div class="clearfix"></div>
<table border="0">
    <tr>
        <td align="left" width=""><img src="assets/ultra/data/invoice/Picture1.jpg" height="40px" ></td>
    </tr>
    <tr><td>&nbsp;</td></tr>
</table>
<h3 style="text-align: left;display: inline-block;line-height: 0.5;font-size: 11;">
POLIS ASURANSI STACO AMAN 4
</h3>
<div class="clearfix"></div>
<table border="0" style="text-align: justify;line-height: 1.5;">
    <tr>
        <td width="45%">&nbsp;</td>
        <td width="5%">&nbsp;</td>
        <td width="50%" rowspan="2">
<div style=" font-weight: bold;float: left;">
Pengecualian Umum :
<ol type="1" style="font-style: italic;">
    <li>
Pemegang Polis atau  Tertanggung/Kreditur tidak membayar premi sampai dengan batas waktu yang ditentukan dan / atau kadaluarsa klaim dan /atau tuntutan ganti rugi tidak memenuhi syarat dan kondisi polis / endosemen; atau
    </li>
    <li>
Huru Hara, Terorisme atau Sabotase; atau
    </li>
    <li>
Perang atau keadaan yang dapat disamakan dengan itu, Pembangkitan Rakyat, Pengambil-alihan Kekuasaan, Revolusi, Pemberontakan, Kekuatan Militer, Invasi, Perang Saudara, Perang dan Permusuhan, Makar; atau
    </li>
    <li>
Baik langsung maupun tidak langsung karena atau terjadi pada reaksi-reaksi inti atom dan atau nuklir; atau
    </li>
    <li>
Bencana alam; atau
    </li>
    <li>
Pemberian Kredit melanggar prinsip-prinsip pemberian kredit dan/atau melanggar ketentuan peraturan perundang-undangan termasuk ketentuan Peraturan Otoritas Jasa Keuangan; atau
    </li>
    <li>
Segala bentuk perbuatan yang dilakukannya dengan sengaja atau menyembunyikan fakta/pemalsuan data oleh Debitur dan/atau Pemegang Polis atau Tertanggung/Kreditur dan/atau yang berkepentingan dalam asuransi ini.
    </li>
</ol>
Pengecualian Khusus :
<ol type="1" style="font-style: italic;">
    <li>
Debitur fiktif atau tidak memiliki izin usaha yang sesuai dengan peraturan perundang-undangan; atau
    </li>
    <li>
Debitur memberikan keterangan yang tidak benar tentang kondisi kesehatannya pada saat permintaan penutupan asuransi; atau
    </li>
    <li>
Kecelakaan yang terjadi sebagai akibat langsung dari Debitur karena bertinju, bergulat dan semua jenis olah raga beladiri, rugby, hockey, olah raga di atas es atau salju, mendaki gunung atau gunung es dan semua jenis olah raga kontak fisik, bungy jumping dan sejenisnya, memasuki gua-gua atau lubang-lubang yang dalam, berburu binatang, atau jika Debitur berlayar seorang diri, atau berlatih untuk atau turut serta dalam perlombaan kecepatan atau ketangkasan mobil atau sepeda motor, olah raga udara dan olah raga air; atau
    </li>
</ol>
</div>
        </td>
    </tr>
    <tr>
        <td>
<div>
Bahwa Pemegang Polis atau Tertanggung/Kreditur yang disebutkan dalam ikhtisar polis ini telah mengajukan kepada Penanggung suatu permohonan tertulis yang dilengkapi dengan keterangan tertulis lainnya yang menjadi dasar dan merupakan bagian yang tidak terpisahkan dari polis ini, maka dengan syarat Pemegang Polis atau Tertangung/Peserta telah membayar premi kepada Penanggung sebagaimana disebutkan dalam polis dan tunduk pada syarat-syarat, pengecualian-pengecualian dan ketentuan-ketentuan yang terkandung di dalamnya atau ditambahkan padanya, Penanggung akan membayar klaim asuransi kepada Pemegang Polis atau Tertanggung/Kreditur sesuai dengan cara dan ketentuan-ketentuan dalam Polis ini bilamana Pemegang Polis atau Tertanggung/Kreditur mengalami risiko kredit yang disebabkan umur piutang dinyatakan bermasalah, yang ditegaskan dalam syarat serta kondisi polis, yang tercetak, dilekatkan, dicantumkan dan/atau dibuatkan endosemen pada Polis ini.
</div>

<div style="text-align: center;font-weight: bold">
BAB I <br> J A M I N A N <br> PASAL 1 <br> RISIKO YANG DIJAMIN
</div>

<div>
Polis ini memberikan penggantian kepada Pemegang Polis atau Tertanggung/Kreditur apabila fasilitas pinjaman yang disalurkan oleh Pemegang Polis atau Tertanggung/Kreditur mengalami risiko kredit dan dinyatakan bermasalah sehingga masuk dalam kualitas pinjaman 2, sepanjang tidak termasuk dalam pengecualian umum dan/atau pengecualian khusus polis.
</div>

<div>
Besarnya ganti rugi adalah sebesar seluruh Sisa Pinjaman/Outstanding Kredit yang telah tersetting sebelumnya dalam system Pemegang Polis atau Tertanggung/Kreditur yang harus dibayarkan oleh <b><i>Debitur</i></b> kepada Pemegang Polis atau Tertanggung/Kreditur (untuk pembuktian Sisa Pinjaman/Outstanding Kredit) dan termasuk tunggakan cicilan dan denda.
</div>

<div style="text-align: center;font-weight: bold">
BAB II <br> P E N G E C U A L I A N <br> PASAL 2 <br> PENGECUALIAN
</div>

        </td>
        <td>&nbsp;</td>
        <!-- <td></td> -->
    </tr>
</table>
<div class="clearfix"></div>
<div class="clearfix"></div>
<table border="0">
    <tr>
        <td align="left" width=""><img src="assets/ultra/data/invoice/Picture1.jpg" height="40px" ></td>
    </tr>
    <tr><td>&nbsp;</td></tr>
</table>

<table border="0" style="text-align: justify;line-height: 1.5;">
    <tr>
        <td width="50%">
<div style=" font-weight: bold;float: left; font-style: italic;">
<ol start="4">
    <li>
Debitur mengalami kecelakaan dalam penerbangan non komersil kecuali kecelakaan dalam penerbangan karena risiko pekerjaan; atau
    </li>
    <li>
Debitur terlibat dalam perkelahian dan tidak dalam keadaan seseorang yang sedang mempertahankan diri; atau
    </li>
    <li>
Debitur dengan sengaja melibatkan diri dalam tindak kejahatan, penganiayaan, perbuatan kekerasan, pemberontakan, huru hara, pengacauan atau perbuatan terror; atau
    </li>
    <li>
Debitur terbukti mengkonsumsi obat-obat terlarang sesuai Undang-Undang No. 5 Tahun 1997 tentang Psikotropika, baik sebagai pengguna maupun pengedar dan Undang-Undang No. 35 Tahun 2009 tentang Narkotika; atau
    </li>
    <li>
Debitur ikut melakukan atau ikut serta dalam tindakan melawan hukum dan / atau peraturan yang berlaku di negara dimana tindakan tersebut dilakukan; atau
    </li>
    <li>
Debitur kehilangan pekerjaan, dipecat, mengundurkan diri atau pensiun termasuk pensiun dini dari tempat  Debitur bekerja; atau
    </li>
    <li>
Debitur dihukum mati oleh pengadilan; atau
    </li>
    <li>
Debitur meninggal dunia sebab apapun atau bunuh diri; atau
    </li>
    <li>
Sebagai akibat perbuatan jahat yang dilakukan oleh ahli waris atau pihak yang ditunjuk dengan atau tanpa bantuan pihak lain.
    </li>
</ol>
</div>

<div style="text-align: center;font-weight: bold">
BAB III <br> D E F I N I S I <br> PASAL 3 <br> DEFENISI
</div>

<div>
Menyimpang dari arti yang berbeda yang mungkin diberikan oleh peraturan hukum yang berlaku, untuk keperluan Polis ini semua istilah yang dicetak miring diartikan sebagaimana diuraikan berikut ini:
</div>

<div>
<b><i>Pemegang Polis</i></b> atau <b><i>Tertanggung/Kreditur</i></b> merupakan perusahaan <i>fintech</i> atau badan usaha lainnya yang non-bank yang memberikan fasilitas pinjaman dan sekaligus sebagai pihak yang menerima manfaat asuransi kredit apabila terjadi suatu peristiwa yang dijamin oleh syarat dan kondisi polis selama masa asuransi.
</div>

<div>
<b><i>Debitur</i></b> adalah Pegawai Tetap (bukan <i>Outsourcing</i>/kontrak) dan atau yang tertera dalam perjanjian kredit yang merupakan nasabah individu penerima fasilitas pinjaman dari Pemegang Polis atau Tertanggung/Kreditur, yang namanya tertera pada deklarasi pertanggungan.
</div>
        </td>
        <td width="5%"></td>
        <td width="45%">
<div>
<div class="clearfix"></div>
<b><i>Deklarasi Pertanggungan</i></b> adalah daftar nama <b><i>Debitur</i></b> yang telah disetujui realisasi kreditnya, yang diajukan Pemegang Polis atau Tertanggung/Kreditur kepada Penanggung.
</div>

<div>
<b><i>Perjanjian Kredit</i></b> adalah perikatan antara Pemegang Polis atau Tertanggung/Kreditur dengan <b><i>Debitur</i></b> dalam rangka penyaluran Kredit, sesuai dengan syarat dan ketentuan yang berlaku pada Pemegang Polis atau Tertanggung/Kreditur.
</div>

<div>
<b><i>Kualitas Pinjaman 2</i></b> apabila terdapat tunggakan minimal 45 (empatpuluhlima) hari kalender sejak tanggal jatuh tempo bulanannya dan maksimal 90 (sembilanpuluh) hari kalender.
</div>

<div>
<b><i>Sisa Kredit</i></b> adalah Jumlah kewajiban <b><i>Debitur</i></b> yang tidak dapat diselesaikan berdasarkan ketentuan akad kredit.
</div>

<div>
<b><i>Hari Kalender</i></b> adalah hari Senin sampai dengan hari Minggu sebagaimana tercantum dalam kalender yang berlaku secara nasional di Indonesia.
</div>

<div>
<b><i>Hari Kerja</i></b> adalah hari dimana perusahaan beroperasi yaitu hari Senin sampai dengan hari Jumat, kecuali hari tersebut merupakan hari libur Nasional atau dinyatakan sebagai hari Libur Nasional oleh pemerintah.
</div>

<div>
<b><i>Kerusuhan</i></b> adalah tindakan suatu kelompok orang minimal sebanyak 12 (duabelas) orang yang dalam melaksanakan suatu tujuan bersama menimbulkan suasana gangguan ketertiban umum dengan kegaduhan dan menggunakan kekerasan serta pengrusakan harta benda orang lain, yang belum dianggap sebagai suatu Huru-hara.
</div>

<div>
<b><i>Pemogokan</i></b> adalah tindakan pengrusakan yang disengaja oleh sekelompok pekerja, minimal sebanyak 12 (dua belas) pekerja atau separuh dari jumlah pekerja (dalam hal jumlah seluruh pekerja kurang dari dua puluh empat orang), yang menolak bekerja sebagaimana biasanya dalam usaha untuk memaksa majikan memenuhi tuntutan dari pekerja atau dalam melakukan protes terhadap peraturan atau persyaratan kerja yang diberlakukan oleh majikan.
</div>

<div>
<b><i>Penghalangan bekerja</i></b> adalah tindakan pengrusakan yang sengaja dilakukan oleh sekelompok pekerja, minimal sebanyak 12 (duabelas) pekerja atau separuh dari jumlah pekerja (dalam hal jumlah seluruh pekerja kurang dari dua puluh empat orang), akibat dari adanya pekerja yang diberhentikan atau dihalangi bekerja oleh majikan.
</div>
        </td>
    </tr>        
</table>

<div class="clearfix"></div>
<div class="clearfix"></div>
<table border="0">
    <tr>
        <td align="left" width=""><img src="assets/ultra/data/invoice/Picture1.jpg" height="40px" ></td>
    </tr>
    <tr><td>&nbsp;</td></tr>
</table>

<table border="0" style="text-align: justify;line-height: 1.5;">
    <tr>
<td width="45%">

<div>
<b><i>Perbuatan jahat</i></b> adalah tindakan seseorang yang dengan sengaja merusak harta benda orang lain karena dendam, dengki, amarah atau vandalistis, kecuali tindakan yang dilakukan oleh seseorang yang berada di bawah pengawasan atau atas perintah <b><i>Debitur</i></b> atau yang mengawasi atau menguasai harta benda tersebut, atau oleh pencuri/perampok/ penjarah.
</div>

<div>
<b><i>Pencegahan</i></b> adalah tindakan pihak yang berwenang dalam usaha menghalangi, menghentikan atau mengurangi dampak atau akibat dari terjadinya risiko-risiko yang dijamin.
</div>

<div>
<b><i>Huru-hara</i></b> adalah keadaan di satu kota di mana sejumlah besar massa secara bersama-sama atau dalam kelompok-kelompok kecil menimbulkan suasana gangguan ketertiban dan keamanan masyarakat dengan kegaduhan dan menggunakan kekerasan serta rentetan pengrusakan sejumlah besar harta benda, sedemikian rupa sehingga timbul ketakutan umum, yang ditandai dengan terhentinya lebih dari separuh kegiatan normal pusat perdagangan/ pertokoan atau perkantoran atau sekoiah atau transportasi umum di kota tersebut selama minimal 24 (duapuluhempat) jam secara terus-menerus yang dimulai sebelum, selama atau setelah kejadian tersebut.
</div>

<div>
<b><i>Pembangkitan Rakyat</i></b> adalah gerakan sebagian besar rakyat di Ibukota Negara, atau di 3 (tiga) atau lebih Ibukota Propinsi dalam kurun waktu 12 (duabelas) hari, yang menuntut penggantian Pemerintah yang sah de jure atau de facto, atau melakukan penolakan secara terbuka terhadap Pemerintah yang sah de jure atau de facto, yang belum dlanggap sebagai suatu Pemberontakan.
</div>

<div>
<b><i>Pengambilalihan Kekuasaan</i></b> adalah keadaan yang memperlihatkan bahwa Pemerintah yang sah de jure atau de facto telah digulingkan dan digantikan oleh suatu kekuatan yang memberlakukan dan atau memaksakan pemberlakuan peraturan-peraturan mereka sendiri.
</div>

<div>
<b><i>Revolusi</i></b> adalah gerakan rakyat dengan kekerasan untuk melakukan perubahan radikal terhadap sistem ketatanegaraan (pemerintahan atau keadaan sosial) atau menggulingkan Pemerintah yang sah de jure atau de facto, yang belum dianggap sebagai suatu Pemberontakan.
</div>

<div>
<b><i>Pemberontakan</i></b> adalah tindakan terorganisasi dari suatu kelompok orang yang melakukan pembangkangan dan atau penentangan terhadap Pemerintah yang sah de jure atau de facto dengan kekerasan yang menggunakan senjata api, yang dapat menimbulkan ancaman terhadap kelangsungan Pemerintah yang sah de jure atau de facto.
</div>
        </td>
        <td width="10%">&nbsp;</td>
        <td width="45%">
<div>
<b><i>Kekuatan Militer</i></b> adalah kelompok angkatan bersenjata baik dalam maupun luar negeri minimal sebanyak 30 (tigapuluh) orang yang menggunakan kekerasan untuk menggulingkan Pemerintah yang sah de jure atau de facto atau menimbulkan suasana gangguan ketertiban dan keamanan umum.
</div>

<div>
<b><i>Invasi</i></b> adalah tindakan kekuatan militer suatu negara memasuki wilayah negara lain dengan maksud menduduki atau menguasainya secara sementara atau tetap.
</div>

<div>
<b><i>Perang Saudara</i></b> adalah konflik bersenjata antar daerah atau antar faksi politik dalam batas teritorial suatu negara dengan tujuan memperebutkan legitimasi kekuasaan.
</div>

<div>
<b><i>Perang dan Permusuhan</i></b> adalah konflik bersenjata secara luas (baik dengan atau tanpa pernyataan perang) atau suasana perang antara dua negara atau lebih, termasuk latihan perang suatu negara atau latihan perang gabungan antar negara.
</div>

<div>
<b><i>Makar</i></b> adalah tindakan seseorang yang bertindak atas nama atau sehubungan dengan suatu organisasi atau sekelompok orang dengan kegiatan yang diarahkan pada penggulingan dengan kekerasan Pemerintah yang sah de jure atau de facto atau mempengaruhinya dengan Terorisme atau Sabotase atau kekerasan.
</div>

<div>
<b><i>Terorisme</i></b> adalah suatu tindakan, termasuk tetapi tidak terbatas pada penggunaan pemaksaan atau kekerasan dan atau ancaman dengan menggunakan pemaksaan atau kekerasan, oleh seseorang atau sekelompok orang, baik bertindak sendiri atau atas nama atau berkaitan dengan sesuatu organisasi atau pemerintah, dengan tujuan politik, agama, ideologi atau yang sejenisnya termasuk intensi untuk memengaruhi pemerintahan dan/atau membuat publik atau bagian dari publik dalam ketakutan.
</div>

<div>
<b><i>Sabotase</i></b> adalah tindakan pengrusakan harta benda atau penghalangan kelancaran pekerjaan atau yang berakibat turunnya nilai suatu pekerjaan, yang dilakukan oleh seseorang atau sekelompok orang, baik bertindak sendiri atau atas nama atau berkaitan dengan sesuatu organisasi atau pemerintah dalam usaha mencapai tujuan politik, agama, Ideologi atau yang sejenisnya termasuk intensi untuk memengaruhi pemerintahan dan/atau membuat publik atau bagian dari publik dalam ketakutan.
</div>

        </td>
</tr>        
</table>

<div class="clearfix"></div>
<div class="clearfix"></div>
<table border="0">
    <tr>
        <td align="left" width=""><img src="assets/ultra/data/invoice/Picture1.jpg" height="40px" ></td>
    </tr>
    <tr><td>&nbsp;</td></tr>
</table>

<table border="0" style="text-align: justify;line-height: 1.4;">
    <tr>
<td width="45%">
<div style="text-align: center;font-weight: bold">
BAB IV <br> S Y A R A T U M U M <br> PASAL 4 <br> WILAYAH
</div>

<div>
Pertanggungan ini berlaku di seluruh wilayah Negara Republik Indonesia dan polis ini dibuat, serta diatur berdasarkan hukum Negara Republik Indonesia dan para pihak tunduk kepada jurisdiksi di Republik Indonesia.
</div>
<div style="text-align: center;font-weight: bold">
PASAL 5 <br> KEWAJIBAN MENGUNGKAPKAN FAKTA
</div>
<div style=" font-weight: none;float: left;">
<ol type="1">
    <li>
Pemegang Polis atau Tertanggung/Kreditur Wajib :<br/>
    <table border="0">
        <tr>
            <td width="10%">1.1</td>
            <td  width="90%">
Mengungkapkan Fakta material yaitu informasi, keterangan, keadaan dan fakta yang mempengaruhi pertimbangan Penanggung dalam menerima atau menolak suatu permohonan penutupan asuransi dan dalam penetapan suku premi apabila permohonan dimaksud diterima.
            </td>
        </tr>
        <tr>
        <td>1.2</td>
        <td>
Membuat pernyataan yang benar tentang hal-hal yang berkaitan dengan penutupan asuransi yang disampaikan baik pada waktu pembuatan perjanjian asuransi maupun selama jangka waktu pertanggungan.
        </td>
        </tr>
    </table>
    </li>
    <li>
Jika Pemegang Polis atau Tertanggung/Kreditur tidak melaksanakan kewajiban sebagaimana diatur dalam ayat 1 di atas, Penanggung tidak wajib membayar kerugian yang terjadi dan berhak menghentikan pertanggunan serta tidak wajib mengembalikan premi.
    </li>
    <li>
Ketentuan pada ayat 2 di atas tidak berlaku dalam hal fakta material yang tidak diungkapkan atau yang dinyatakan dengan tidak benar tersebut telah diketahui oleh Penanggung, namun Penanggung tidak mempergunakan haknya untuk menghentikan pertanggungan dalam waktu 30 (tigapuluh) hari setelah Penanggung mengetahui pelanggaran tersebut.
    </li>
</ol>
</div>

<div style="text-align: center;font-weight: bold">
PASAL 6 <br> PROSEDUR PENUTUPAN PERTANGGUNGAN
</div>
<div>
<i>Prosedur Penutupan Pertanggungan Asuransi Kredit  sebagai berikut :</i>
<ol type="1">
    <li>
Pemegang Polis atau Tertanggung/Kreditur mengirimkan Surat Permohonan Penutupan
    </li>
</ol>
</div>
    </td>
        <td width="10%">&nbsp;</td>
        <td width="45%">
<div>
<ol type="none">
    <li>
Asuransi (SPPA) kepada Penanggung atas Pembiayaan yang akan diberikan kepada Calon <b><i>Debitur</i></b> dari sebuah Koperasi/Badan Usaha dengan disertai Nota Analisa Pembiayaan (NAP). Apabila Penanggung menyetujui permintaan tersebut maka Penanggung akan menerbitkan Surat Persetujuan Prinsip Permohonan Asuransi (SP3A) dan ditandatangani oleh pejabat yang berwenang untuk selanjutnya  dikirimkan kepada Pemegang Polis atau Tertanggung/Kreditur.
    </li>
</ol>
<ol start="2" style="padding:0!important;">
    <li>
Setelah Pemegang Polis atau Tertanggung/Kreditur menerima Surat Persetujuan Prinsip Permohonan Asuransi (SP3A) selanjutnya Pemegang Polis atau Tertanggung/Kreditur mengirimkan kepada Penanggung Deklarasi nominatif <b><i>Debitur</i></b> selambat-lambatnya 7 (tujuh) hari kerja sejak Perjanjian Pembiayaan ditanda tangani antara Pemegang Polis atau Tertanggung/Kreditur dan <b><i>Debitur</i></b> yang sekaligus menjadi bagian yang tidak terpisahkan dari Polis. Prosedur penutupan pertanggungan didasarkan pada Deklarasi Nominatif <b><i>Debitur</i></b> yang diterima dan telah disetujui oleh Penanggung selama periode pertanggungan, dengan mencantumkan :<br/>
    <table border="0" style="padding: 0!important">
        <tr>
            <td width="10%">2.1</td>
            <td width="50%">Nama <b><i>Debitur</i></b>;</td>
        </tr>
        <tr>
            <td>2.2</td>
            <td>Nomor KTP</td>
        </tr>
        <tr>
            <td>2.3</td>
            <td>Tempat/Tanggal Lahir;</td>
        </tr>
        <tr>
            <td>2.4</td>
            <td>Alamat Domisili;</td>
        </tr>
        <tr>
            <td>2.5</td>
            <td>Pekerjaan;</td>
        </tr>
        <tr>
            <td>2.6</td>
            <td>Nama Instansi;</td>
        </tr>
        <tr>
            <td>2.7</td>
            <td>Lama Bekerja.</td>
        </tr>
        <tr>
            <td>2.8</td>
            <td>Mulai Asuransi;</td>
        </tr>
        <tr>
            <td>2.9</td>
            <td>Masa Asuransi;</td>
        </tr>
        <tr>
            <td>2.10</td>
            <td>Nilai Pembiayaan;</td>
        </tr>
    </table>
    </li>
</ol>
Penyampaian Deklarasi tersebut merupakan Condition Precedent To Liability. Selanjutnya Penanggung akan menerbitkan Sertifikat Asuransi Kredit berikut Nota Penagihan premi.
</div>


<div style="text-align: center;font-weight: bold">
PASAL 7 <br> PERTANGGUNGAN LAIN
</div>

<div>
<ol type="1">
<li>Pada waktu pertanggungan ini dibuat, Pemegang Polis atau Tertanggung/Kreditur wajib memberitahukan kepada Penanggung mengenai pertanggungan lain untuk kepentingan yang sama.</li>
<li>Apabila pertanggungan ini telah dibuat, kemudian Pemegang Polis atau Tertanggung/Kreditur menutup pertanggungan</li>
</ol>
</div>


        </td>
</tr>        
</table>
<div class="clearfix"></div>
<table border="0">
    <tr>
        <td align="left" width=""><img src="assets/ultra/data/invoice/Picture1.jpg" height="40px" ></td>
    </tr>
    <tr><td>&nbsp;</td></tr>
</table>

<table border="0" style="text-align: justify;line-height: 1.4;">
    <tr>
<td width="45%">
<div>
<ol type="none">
<li>
kepada Penanggung lain untuk kepentingan yang sama, maka hal tersebut wajib diberitahukan juga kepada Penanggung.</li>
</ol>
</div>
    
<div style="text-align: center;font-weight: bold">
PASAL 8 <br> PEMBAYARAN PREMI
</div>
<ol type="1" style="text-align:justify-all;">
    <li>
Merupakan syarat dari tanggung jawab Penanggung atas jaminan  asuransi berdasarkan Polis ini, setiap premi terhutang harus sudah dibayar lunas dan secara nyata telah diterima seluruhnya oleh Penanggung dalam tenggang waktu 14 (empatbelas) hari kalender dihitung dari tanggal mulai berlakunya Polis.
    </li>
    <li>
Pembayaran premi dapat dilakukan dengan cara tunai, cek, bilyet giro, transfer atau dengan cara lain yang disepakati antara Penanggung dan Pemegang Polis atau Tertanggung/Kreditur. Penanggung dianggap telah menerima pembayaran premi, pada saat :<br/>
<table>
    <tr>
        <td width="10%">2.1</td>
        <td width="90%">
Diterimanya pembayaran tunai; atau
        </td>
    </tr>
    <tr>
        <td>2.2</td>
        <td>
Premi bersangkutan  sudah masuk ke rekening Bank Penanggung; atau
        </td>
    </tr>
    <tr>
        <td>2.3</td>
        <td>
Penanggung telah menyepakati pelunasan premi bersangkutan secara tertulis.
        </td>
    </tr>
</table>
    </li>
    <li>
Jika Pemegang Polis atau Tertanggung/Kreditur tidak memenuhi kewajiban sebagaimana dimaksud ayat (1) diatas, <i>Polis ini berakhir dengan sendirinya sejak berakhirnya tenggang waktu tersebut tanpa kewajiban bagi Penanggung untuk menerbitkan endorsemen dan Penanggung dibebaskan dari semua tanggung jawab berdasarkan polis.</i><br/>
Namun demikian, Pemegang Polis atau Tertanggung/Kreditur tetap berkewajiban membayar premi untuk jaminan selama tenggang waktu pembayaran premi, sebesar 20% (duapuluh persen) dari premi 1 (satu) tahun.
    </li>
    <li>
Apabila terjadi kerugian yang dijamin Polis dalam tenggang waktu sebagaimana dimaksud pada ayat (1) di atas, <i>Penanggung akan bertanggung jawab terhadap kerugian tersebut apabila Pemegang Polis atau Tertanggung/Kreditur melunasi premi dalam tenggang waktu bersangkutan.</i>
    </li>
</ol>
<div style="text-align: center;font-weight: bold">
PASAL 9 <br> PERUBAHAN RISIKO
</div>
<ol type="1" style="text-align:justify-all;">
    <li>
Setiap perubahan kebijakan/prosedur pemberian kredit yang dilakukan oleh
</li>
</ol>
    </td>
        <td width="10%">&nbsp;</td>
        <td width="45%">
<div>
<ol type="none">
    <li>
Tertanggung/ Pemegang polis dan dinilai dapat meningkatkan risiko kredit wajib diberitahukan kepada Penanggung.
    </li>
</ol>
<ol start="2">
    <li>
Dalam hal terjadi peningkatan risiko kredit dengan indikasi antara lain terjadinya tunggakan kewajiban pembayaran kredit, maka Pemegang Polis atau Tertanggung/Kreditur wajib memberitahukan secara tertulis kepada Penanggung paling lambat dalam waktu 14 (empatbelas) hari sejak terjadinya tunggakan kewajiban pembayaran kredit.
    </li>
    <li>
Apabila terjadi peningkatan risiko sebagai akibat ayat (1) dan (2), maka akan dilakukan mitigasi risiko dalam bentuk :
<ol type="a">
        <li>
Peningkatan premi; dan/atau
        </li>
        <li>
Penurunan nilai atau penurunan prosentase ganti rugi; dan/atau
        </li>
        <li>
Mitigasi lain sesuai kesepakatan antara Penanggung dengan Pemegang Polis atau Tertanggung/Kreditur.
        </li>
    </ol>
    </li>
    <li>
Pemegang Polis atau Tertanggung/Kreditur wajib melakukan langkah-langkah penagihan/penyehatan untuk mengurangi risiko kredit.
    </li>
</ol>
</div>
<div style="text-align: center;font-weight: bold">
PASAL 10 <br> OBYEK PERTANGGUNGAN
</div>
    <div>
Obyek pertanggungan adalah fasilitas pinjaman yang diberikan oleh Pemegang Polis atau Tertanggung/Kreditur kepada Debitur berdasarkan perjanjian kredit yang dibuat sesuai dengan ketentuan peraturan perundang-undangan termasuk ketentuan Peraturan Otoritas Jasa Keuangan dan penyaluran fasilitas pinjaman diberikan sesuai dengan prinsip dan ketentuan peraturan perundang-undangan termasuk ketentuan Peraturan Otoritas Jasa Keuangan.
    </div>


<div style="text-align: center;font-weight: bold">
PASAL 11 <br> USIA <i>DEBITUR</i>
</div>

<div>
Usia <b><i>Debitur</i></b> adalah sampai dengan 56 (limapuluhenam).<br/>
Dimana  x + n ≤ 56 :<br/>
x  = Usia Masuk <b><i>Debitur</i></b><br/>
n  = Masa Asuransi
<div class="clearfix"></div>
Usia dihitung pada saat calon <b><i>Debitur</i></b> dinyatakan diterima sebagai <b><i>Debitur</i></b> Kredit.<br/> 
Apabila usia <b><i>Debitur</i></b> adalah x tahun y bulan, maka :<br/>
<ul>
    <li>
Usia <b><i>Debitur</i></b> adalah x tahun, jika y &lt; 6 bulan;
    </li>
    <li>
Usia <b><i>Debitur</i></b> adalah x+1 tahun, jika y ≥ 6 bulan.
    </li>
</ul>
</div>
        </td>
</tr>        
</table>

<div class="clearfix"></div>
<div class="clearfix"></div>
<table border="0">
    <tr>
        <td align="left" width=""><img src="assets/ultra/data/invoice/Picture1.jpg" height="40px" ></td>
    </tr>
    <tr><td>&nbsp;</td></tr>
</table>

<table border="0" style="text-align: justify;line-height: 1.4;">
    <tr>
<td width="45%">
    
<div style="text-align: center;font-weight: bold">
PASAL 12 <br> JANGKA WAKTU PERTANGGUNGAN
</div>
    <div>
Jangka waktu pertanggungan, yaitu : jangka waktu pertanggungan yang disesuaikan dengan jangka waktu perjanjian antara <b><i>Debitur</i></b> dengan Pemegang Polis atau Tertanggung/Kreditur <b><i>sesuai dengan Perjanjian Kredit yang disepakati  maksimal 3 (tiga) tahun.</i></b>
    </div>
    
<div style="text-align: center;font-weight: bold">
PASAL 13 <br> HARGA PERTANGGUNGAN
</div>
    <div>
Dengan ini dicatat dan disetujui bahwa menyimpang daripada ketentuan dan syarat-syarat polis, Harga Pertanggungan di dalam polis adalah jumlah maksimum nilai pinjaman yang tertera di dalam perjanjian kredit antara <b><i>Debitur</i></b> dengan Pemegang Polis atau Tertanggung/Kreditur dan nilainya akan selalu mengalami penurunan setiap saat di dalam jangka waktu pertanggungan.
    </div>

<div style="text-align: center;font-weight: bold">
PASAL 14 <br> PENGEMBALIAN PREMI
</div>
    <ol type="1" style="text-align:justify-all;">
        <li>
Apabila <b><i>Debitur</i></b> melunasi Kredit atau mengundurkan diri dari fasilitias kredit yang ada, maka perhitungan Pengembalian Premi sebagai berikut  :
<div>
<b><i>((N - T)/N) x P x 70%</i></b><br/>
<b><i>N</i></b> : Jangka waktu kredit dalam bulan.<br/>
<b><i>T</i></b> : Jangka waktu kredit yang sudah dilalui dalam bulan.<br/>
<b><i>P</i></b> : Premi sekaligus yang telah dibayar Pemegang Polis atau Tertanggung/Kreditur.
</div>
        </li>
        <li>
Pengembalian Premi dapat dilakukan apabila Premi yang tersisa lebih besar atau sama dengan   Rp. 50,000.- (limapuluhribu rupiah).
        </li>
        <li>
Seluruh biaya administrasi yang timbul pada proses Pengembalian Premi tersebut akan dibebankan kepada Pemegang Polis atau Tertanggung/Kreditur.
        </li>
    </ol>

<div style="text-align: center;font-weight: bold">
PASAL 15 <br> TUNTUTAN GANTI RUGI/KLAIM
</div>
    <ol type="1" style="text-align:justify-all;">
        <li>
Apabila upaya penagihan/penyehatan yang dilakukan oleh Pemegang Polis atau Tertanggung/Kreditur tidak memberikan hasil sesuai yang diharapkan, Pemegang Polis atau Tertanggung/Kreditur dapat mengajukan tuntutan ganti rugi/klaim kepada Penanggung secara tertulis dalam waktu 30 (tigapuluh) hari kalender sejak timbulnya risiko kredit.
        </li>
        <li>
Pemegang Polis atau Tertanggung/Kreditur wajib menyampaikan dokumen pendukung
        </li>
    </ol>
    </td>
        <td width="10%">&nbsp;</td>
        <td width="45%">
<br/>
<div>
<ol type="none">
<li>
tuntutan ganti rugi/ klaim sebagai berikut :
<ol type="a">
    <li>Surat pengajuan tuntutan ganti rugi/klaim;</li>
    <li>Mengisi Formulir Klaim secara lengkap dan benar;</li>
    <li>Copy Perjanjian Kredit (PK);</li>
    <li>Copy Kartu Tanda Penduduk (KTP);</li>
    <li>Copy Kartu Keluarga;</li>
    <li>Copy Polis/Sertifikat Asuransi yang memuat nama <b><i>Debitur</i></b>;</li>
    <li><i>Print Screen system</i> Pemegang Polis atau Tertanggung/Kreditur yang yang harus dibayarkan oleh <b><i>Debitur</i></b> kepada Pemegang Polis atau Tertanggung/Kreditur atau bukti tunggakan kewajiban yang belum dibayar;</li>
    <li>Copy dokumen upaya penagihan/penyehatan oleh Pemegang Polis atau Tertanggung/Kreditur; dan</li>
    <li>Dokumen lain yang relevan yang diminta Penanggung sehubungan dengan penyelesaian klaim.</li>
</ol>
</li>
</ol>
</div>

<div style="text-align: center;font-weight: bold">
PASAL 16 <br> KADALUARSA KLAIM
</div>
<ol type="1" style="text-align: justify-all;">
    <li>
Untuk peristiwa yang dijamin <b><i>Debitur</i></b> tidak melaksanakan kewajiban sesuai perjanjian kredit tanpa memperhatikan apapun penyebabnya, sehingga timbul risiko kredit, hak klaim menjadi kadaluarsa setelah melampaui 3 (tiga) bulan sejak kredit jatuh tempo sebagaimana tertuang dalam perjanjian kredit; atau
    </li>
    <li>
Pemegang Polis atau Tertanggung/Kreditur tidak melengkapi dokumen klaim yang menjadi persyaratan klaim dalam waktu 3 (tiga) bulan terhitung sejak permintaan terakhir untuk melengkapi dokumen klaim tersebut dari penjamin diteriman oleh penerima jaminan; atau
    </li>
    <li>
Pemegang Polis atau Tertanggung/Kreditur tidak melakukan bantahan atas penolakan klaim atau besarnya klaim yang akan dibayar penjamin, dalam waktu 3 (tiga) bulan sejak diterimanya surat penolakan klaim atau persetujuan klaim.
    </li>
</ol>
<!-- <div style="text-align: center;font-weight: bold">
PASAL 17 <br> SUBROGASI
</div>
<ol type="1" style="text-align: justify-all;">
    <li>
Klaim yang telah dibayar oleh Penanggung kepada Pemegang Polis atau Tertanggung/Kreditur, tidak membebaskan Debitur dari kewajibannya untuk melunasi kredit.
    </li>
    <li>
Dalam hal Penanggung telah melaksanakan pembayaran klaim kepada Pemegang Polis atau Tertanggung/Kreditur, maka dengan bantuan Pemegang Polis atau Tertanggung/Kreditur hak tagih akan beralih kepada Penanggung.
    </li>
    <li>
Setiap hasil penagihan atau hasil penjualan agunan (jika ada) atau bentuk pembayaran kewajiban kredit lainnya dari pihak manapun setelah klaim dibayarkan oleh Penanggung kepada Pemegang Polis atau Tertanggung/Kreditur, beralih menjadi hak subrogasi yang akan dibayarkan oleh Penanggung setelah terlebih dahulu digunakan untuk melunasi kewajiban lain Debitur (bunga, denda, tagihan lain) yang masih tertunggak kepada Pemegang Polis atau Tertanggung/Kreditur.
    </li>
</ol> -->

        </td>
</tr>        
</table>
<div class="clearfix"></div>
<div class="clearfix"></div>
<table border="0">
    <tr>
        <td align="left" width=""><img src="assets/ultra/data/invoice/Picture1.jpg" height="40px" ></td>
    </tr>
    <tr><td>&nbsp;</td></tr>
</table>

<table border="0" style="text-align: justify;line-height: 1.4;">
    <tr>
<td width="45%">
<div style="text-align: center;font-weight: bold">
PASAL 17 <br> PEMBAYARAN GANTI RUGI/ KLAIM
</div>
<div>
Pembayaran ganti rugi/klaim akan dilakukan dalam mata uang Rupiah selambat-lambatnya dalam waktu 30 (tigapuluh) hari kalender sejak tercapainya kesepakatan antara Penanggung dengan Tertanggung/ Pemegang polis mengenai jumlah ganti rugi/nilai klaim.
</div>
<div style="text-align: center;font-weight: bold">
PASAL 18 <br> HILANGNYA HAK ATAS GANTI RUGI
</div>
<div>
Hak klaim menjadi gugur apabila memenuhi salah satu atau lebih kriteria sebagai berikut :
<ol type="1">
    <li>
Pemegang Polis atau Tertanggung/Kreditur tidak memenuhi semua kewajiban yan tertulis dalam Perjanjian ini.
    </li>
    <li>
Terdapat perbedaan antara data dalam dokumen penutupan dan dokumen klaim.
    </li>
    <li>
Pemegang Polis atau Tertanggung/Kreditur atau <b><i>Debitur</i></b> memberikan informasi yang tidak benar atau menyimpang atau menahan informasi yang sifatnya penting bagi Penanggung.
    </li>
</ol>
</div>
            
<div style="text-align: center;font-weight: bold">
PASAL 19 <br> LAPORAN TIDAK BENAR
</div>
<div>
Pemegang Polis atau Tertanggung/Kreditur tidak berhak mendapatkan ganti rugi apabila :
<ol type="1">
    <li>
Memberikan data dan/atau mengungkapkan fakta dan/atau membuat pernyataan yang tidak benar pada saat mengajukan permohonan pertanggungan atau pada saat mengajukan klaim.
    </li>
    <li>
Mempergunakan dokumen atau alat bukti palsu.
    </li>
</ol>
</div>

<div style="text-align: center;font-weight: bold">
PASAL 20 <br> MATA UANG
</div>
<div>
Dalam hal premi atau klaim berdasarkan Polis ini ditetapkan dalam mata uang asing tetapi pembayarannya dilakukan dengan mata uang rupiah, maka pembayaran tersebut dilakukan dengan menggunakan kurs jual Bank Indonesia pada saat pembayaran.
</div>
</td>
<td width="10%">&nbsp;</td>
        <td width="45%">
<div style="text-align: center;font-weight: bold">
PASAL 21 <br> PENGHENTIAN PERTANGGUNGAN
</div>
<div>
Pertanggungan akan berakhir dalam hal-hal sebagai berikut :
<ol type="1">
    <li>
Jangka waktu pertanggungan telah berakhir;
    </li>
    <li>
Klaim telah dibayar oleh Penanggung;
    </li>
    <li>
Pemegang Polis atau Tertanggung/Kreditur dikenakan sanksi hukum oleh pihak yang berwenang.
    </li>
    <li>
Pemegang Polis atau Tertanggung/Kreditur berhenti beroperasi atau diberhentikan operasinya oleh pihak yang berwenang;
    </li>
    <li>
Pertanggungan dihentikan :
<ol type="a">
    <li>
Pihak Penanggung dan Pemegang Polis atau Tertanggung/Kreditur setiap saat berhak menghentikan pertanggungan ini dengan memberitahukan kepada pihak lainnya.
    </li>
    <li>
Pemberitahuan penghentian pertanggungan tersebut dilakukan secara tertulis dalam bentuk surat, email atau facsimile paling lambat dalam waktu 7 (tujuh) hari kalender
    </li>
</ol>
    </li>
</ol>
</div>            
<div style="text-align: center;font-weight: bold">
PASAL 22 <br> KLAUSUL KEADAAN LUAR BIASA
</div>
<div>
Dalam hal terjadi suatu peristiwa sedemikian rupa yang membawa dampak terhadap kemampuan Penanggung untuk melakukan membayar Ganti Rugi, seperti gempa bumi, angin topan, banjir, tanah longsor, tsunami, kebakaran, embargo, pemogokan massal, kebijakan moneter atau kebijakan pemerintah yang berhubungan secara langsung terhadap pelaksanaan Polis ini, maka keterlambatan atau kegagalan Penanggung dalam melaksanakan ketentuan Polis tidak dapat dianggap sebagai suatu pelanggaran.
</div>
<div style="text-align: center;font-weight: bold">
PASAL 23 <br> KLAUSUL PERSELISIHAN
</div>
<div>
<ol type="1">
    <li>
Dalam hal timbul perselisihan antara Penanggung dan Pemegang Polis atau Tertanggung/Kreditur sebagai akibat dari penafsiran atas tanggung jawab atau besarnya ganti rugi dari Polis ini, maka perselisihan tersebut akan diselesaikan melalui forum perdamaian atau musyawarah oleh unit internal Penanggung yang menangani Pelayanan dan Penyelesaian Pengaduan bagi Konsumen. Perselisihan timbul sejak Pemegang Polis atau Tertanggung/Kreditur menyatakan secara tertulis ketidaksepakatan atas hal yang diperselisihkan.
    </li>
</ol>
</div>

        </td>
</tr>        
</table>
<div class="clearfix"></div>
<div class="clearfix"></div>
<table border="0">
    <tr>
        <td align="left" width=""><img src="assets/ultra/data/invoice/Picture1.jpg" height="40px" ></td>
    </tr>
    <tr><td>&nbsp;</td></tr>
</table>

<table border="0" style="text-align: justify;line-height: 1.4;">
    <tr>
<td width="50%">
<div>
<ol type="none">
    <li>
Penyelesaian perselisihan melalui perdamaian atau musyawarah dilakukan dalam waktu paling lama 60 (enampuluh) hari kalender sejak timbulnya perselisihan.
    </li>
</ol>
<ol start="2">
    <li>
Apabila penyelesaian perselisihan melalui perdamaian atau musyawarah sebagaimana diatur pada ayat 1 tidak mencapai kesepakatan, maka ketidaksepakatan tersebut harus dinyatakan secara tertulis oleh Penanggung dan Pemegang Polis atau Tertanggung/Kreditur. Selanjutnya Pemegang Polis atau Tertanggung/Kreditur dapat memilih penyelesaian sengketa di luar pengadilan atau melalui pengadilan dengan memilih salah satu klausul penyelesaian sengketa sebagaimana diatur di bawah ini :<br/>
<table border="0">
    <tr>
        <td width="10%">2.1</td>
        <td width="90%" style="font-weight: bold;text-align: left;">LEMBAGA ALTERNATIF PENYELESAIAN SENGKETA</td>
    </tr>
    <tr>
        <td>&nbsp;</td>
        <td style="text-align: justify-all;">
Dengan ini dinyatakan dan disepakati bahwa Pemegang Polis atau Tertanggung/Kreditur dan Penanggung akan melakukan penyelesaian sengketa melalui Badan Mediasi dan Arbitrase Asuransi Indonesia (BMAI) sesuai dengan Peraturan dan Prosedur BMAI atau melalui Lembaga Alternatif Penyelesaian Sengketa Asuransi lainnya yang terdaftar di Otoritas Jasa Keuangan.
        </td>
    </tr>
    <tr>
        <td>2.2</td>
        <td style="font-weight: bold;">PENGADILAN</td>
    </tr>
    <tr>
        <td>&nbsp;</td>
        <td style="text-align: justify-all;">
Dengan ini dinyatakan dan disepakati bahwa Pemegang Polis atau Tertanggung/Kreditur dan Penanggung akan melakukan penyelesaian sengketa melalui Pengadilan Negeri di wilayah Republik Indonesia.
        </td>
    </tr>
</table>
    </li>
</ol>
</div>
<div style="text-align: center;font-weight: bold">
PASAL 24 <br> PENUTUP
</div>
<div>
<ol type="1">
    <li>
Isi Polis ini telah disesuaikan dengan ketentuan peraturan perundang-undangan termasuk ketentuan Peraturan Otoritas Jasa Keuangan.
    </li>
    <li>
Untuk hal-hal yang belum atau tidak cukup diatur dalam polis ini, berlaku ketentuan Kitab Undang-Undang Hukum Dagang dan atau Peraturan Perundang-Undangan yang berlaku.
    </li>
</ol>
</div>

        </td>
        <td width="5%">&nbsp;</td>
        <td width="45%"></td>
</tr>        
</table>
<div class="clearfix"></div>
<div class="clearfix"></div>
<div class="clearfix"></div>
<div class="clearfix"></div>
<div class="clearfix"></div>
<div class="clearfix"></div>
<table border="0">
    <tr>
        <td align="left" width=""><img src="assets/ultra/data/invoice/Picture1.jpg" height="40px" ></td>
    </tr>
    <tr><td>&nbsp;</td></tr>
</table>

<table border="0" style="text-align: justify;line-height: 1.4;">
    <tr>
<td width="45%">

<div style="text-align: center;font-weight: bold">
KLAUSUL JAMINAN POLIS
</div>
<div>
Dengan ini dicatat dan disetujui bahwa risiko yang dijamin pada PASAL 1 Polis ini termasuk :
<div class="clearfix"></div>
<table border="0">
    <tr>
        <td style="font-weight: bold;" width="10%">A.</td>
        <td style="font-weight: bold;" width="90%">JAMINAN TERHADAP RISIKO MENINGGAL DUNIA AKIBAT KECELAKAAN</td>
    </tr>
    <tr>
        <td style="text-align: justify-all;" colspan="2">
<div class="clearfix"></div>
Asuransi ini menjamin risiko kematian Debitur yang secara langsung disebabkan oleh suatu Kecelakaan yaitu suatu kejadian atau peristiwa yang mengandung unsur kekerasan, baik yang bersifat fisik maupun kimia, yang datangnya secara tiba - tiba, tidak dikehendaki atau direncanakan, dari luar, terlihat, langsung terhadap Debitur yang seketika itu mengakibatkan luka badani yang sifat dan tempatnya dapat ditentukan oleh Ilmu Kedokteran, termasuk :
<ol type="1" style="text-align: justify-all;">
    <li>
Keracunan karena terhirup gas atau uap beracun, kecuali Debitur dengan sengaja memakai obat-obat bius atau zat la in yang telah diketahui akibat -akibat buruknya termasuk juga pemakaian obat -obatan terlarang;
    </li>
    <li>
Terjangkit virus atau kuman penyakit sebagai akibat Debitur dengan tidak sengaja terjatuh ke dalam air atau suatu zat cair lainnya;
    </li>
    <li>
Mati lemas atau tenggelam;
    </li>
    <li>
Terasing karena bencana dari luar yang tiba- tiba, yang ditimbulkan karena kecelakaan kapal laut, pendaratan darurat dan jatuhnya pesawat terbang, tetapi hanya sejauh sebagai akibat dari kelaparan, kehausan atau kehilangan tenaga.
    </li>
</ol>
Besarnya ganti rugi adalah sebesar seluruh Sisa Pinjaman/Outstanding Kredit yang telah tersetting sebelumnya dalam system Pemegang Polis atau Tertanggung/Peserta yang harus dibayarkan oleh Debitur kepada Pemegang Polis atau Tertanggung/Peserta (untuk pembuktian Sisa Pinjaman/Outstand ing Kredit), tidak termasuk tunggakkan cicilan dan denda.
        </td>
    </tr>
<div class="clearfix"></div>
    <tr>
        <td style="font-weight: bold;">B.</td>
        <td style="font-weight: bold;">JAMINAN TERHADAP RISIKO PEMUTUSAN HUBUNGAN KERJA (PHK)</td>
    </tr>
    <tr>
        <td style="text-align: justify-all;" colspan="2">
<div class="clearfix"></div>
Asuransi ini menjamin risiko Pemutusan Hubungan Kerja (PHK) apabila setelah 3 (tiga) bulan terhitung dari tanggal dimulainya periode Asuransi, Debitur mengalami Pemutusan Hubungan Kerja (PHK) yang diakibatkan oleh:
<ol type="1" style="text-align: justify-all;">
    <li>
Perubahan status, penggabungan, peleburan, atau perubahan kepemilikan;
    </li>
</ol>
        </td>
    </tr>
</table>
</div>
        </td>
        <td width="10%">&nbsp;</td>
        <td width="45%">
<ol start="2" style="text-align: justify-all;">
    <li>Perusahaan tutup yang disebabkan perusahaan mengalami kerugian selama 2 tahun terus menerus;</li>
    <li>Keadaan memaksa (force majeure);</li>
    <li>Efisiensi;</li>
    <li>Perusahaan dinyatakan pailit oleh Putusan Pengadilan;</li>
</ol>
<div>
Jaminan asuransi yang berkenaan dengan risiko Pemutusan Hubungan Kerja (PHK) sepenuhnya mengacu pada UU No. 13 Tahun 2003 tentang Ketenagakerjaan beserta peraturan t urunannya, baik dalam hal istilah, pengertian, pelaksanaan dan lain-lain.
<div class="clearfix"></div>
Besarnya ganti rugi adalah sebesar 80% dari Sisa Pinjaman/Outstanding Kredit yang telah tersetting sebelumnya dalam system Pemegang Polis atau Tertanggung/Peserta yang harus dibayar kan oleh Debitur kepada Pemegang Polis atau Tertanggung/Peserta (untuk pembuktian Sisa Pinjaman/Outstanding Kredit), berikut biaya-biaya yang timbul (jika ada), maksimum Rp. 100.000.000,- (seratus juta rupiah) per orang dan Rp. 5.000.000.000,- (lima milyar rupiah) per tahun per perusahaan.
</div>
<div style="text-align: center;font-weight: bold">
KLAUSUL PENGECUALIAN POLIS
</div>
<div>
Dengan  ini dicatat dan disetujui   bahwa pengecualian pada PASAL 2 Polis ini termasuk :<br/>
<div style="text-align: left;font-weight: bold">
Pengecualian Dalam Hal Pemutusan Hubungan Kerja (PHK) :
</div>
Pemutusan Hubungan Kerja (PHK) akibat :
<ol type="1">
    <li>
Pemutusan Hubungan Kerja (PHK) yang terjadi kurang dari 3 (tiga) bulan setelah pertanggungan asuransi dimulai;
    </li>
    <li>
Diberhentikan secara tidak hormat oleh Pemberi Kerja/Instansi karena Debitur melakukan tindak pidana dan Pemberi Kerja/Instansi menggunakan atau tidak menggunakan hak untuk menuntut Debitur berdasarkan peraturan perundang-undangan pidana ;
    </li>
    <li>
Pemisahan usaha/ spin off;
    </li>
    <li>
Pemutusan Hubungan Kerja (PHK) massal yaitu pemutusan hubungan kerja terhadap 9 (sembilan) orang atau lebih pada satu perusahaan dalam 1 (satu) bulan yang merupakan satu rentetan peristiwa;
    </li>
    <li>
Tidak adanya surat rekomendasi dari Depnakertrans untuk Pemutusan Hubungan Kerja (PHK) akibat perusahaan likuidasi, pailit, rasionalisasi, penggabungan, peleburan dan efisiensi;
    </li>
</ol>
</div>
        </td>
</tr>        
</table>

<div class="clearfix"></div>
<div class="clearfix"></div>
<div class="clearfix"></div>
<table border="0">
    <tr>
        <td align="left" width=""><img src="assets/ultra/data/invoice/Picture1.jpg" height="40px" ></td>
    </tr>
    <tr><td>&nbsp;</td></tr>
</table>

<table border="0" style="text-align: justify;line-height: 1.4;">
    <tr>
<td width="45%">
<ol start="6" style="text-align: justify-all;">
    <li>
Pemutusan Hubungan Kerja (PHK) yang dilaksanakan dengan tidak mengindahkan peraturan ketenagakerjaan yang berlaku (sesuai Undang-Undang No. 13 Tahun 2003 tentang Ketenagakerjaan);        
    </li>
    <li>
Melakukan Kesalahan Berat (sesuai Undang- Undang No. 13 Tahun 2003 tentang Ketenagakerjaan).        
    </li>
</ol>
<div style="text-align: center;font-weight: bold">
KLAUSUL PENGAKUAN PENANGGALAN <br/> ELEKTRONIK <br/> (EDRC “A”)
</div>
<div>
Untuk tujuan klausul ini yang dimaksud Peralatan Elektronik adalah segala bentuk komputer, sistem pengolahan, penyimpanan dan penyelamatan data, atau termasuk, namun tidak terbatas pada, segala bentuk komputer, hardware, software, microchip atau integrated circuit, atau peralatan sejenis lainnya.<br/>
Pada Polis ini tidak menjamin kerugian atau kerusakan, baik yang besifat langsung maupun tidak langsung, yang disebabkan atau dipengaruhi oleh, atau yang timbul dari kesalahan atau ketidak mampuan dari Pelalatan Elektroni, baik yang dimiliki oleh Tertanggung ataupun bukan, dan baik yang terjadi sebelum, selama atau setelah tahun 2000 dalam hal:
<ol type="a">
    <li>
Mengenal dengan benar setiap tanggal sebagai tanggal kalender yang benar;
    </li>
    <li>
Menangkap, menyimpan, menahan, memproses, memanipulasi secara benar, dan/atau menafsirkan data atau informasi atau perintah atau instruksi, sebagai hasil dari lompatan perhitungan tahun; dan/atau
    </li>
    <li>
Menangkap, menyimpan, menahan, memproses data dengan baik sebagai hasil menjalankan perintah-perintah yang telah diprogram dalam Peralatan Elektronik sebagai perintah yang menyebabkan kerugian atau ketidak mampuan untuk menangkap, menyimpan, menahan, memproses data dengan benar pada atau setelah tanggal tersebut.
    </li>
</ol>
Namun klausul ini tidak mengecualikan kerugian fisik, kehancuran, atau kerusakan, kecuali ditetapkan lain, yang timbul sendiri dari kebakaran, petir, peledakan, kejatuhan pesawat terbang, huru-hara, pemogokan, perbuatan jahat, gempa bumi, angin topan, banjir, air yang melimpah dari peralatan tangki atau pipa, atau tertabrak kendaraan.
</div>

<div style="text-align: center;font-weight: bold">
KLAUSUL KADALUARSA KLAIM
</div>
<div>
Menyimpang dari PASAL 15,  dengan ini dicatat dan disetujui kadaluarsa klaim menjadi sebagai berikut:
</div>
        </td>
        <td width="10%">&nbsp;</td>
        <td width="45%">
<div>
    <ol type="1">
    <li>
Untuk peristiwa yang dijamin Debitur meninggal dunia, hak klaim menjadi kadaluarsa setelah melampaui 3 (tiga) bulan sejak Debitur meninggal dunia.
    </li>
    <li>
Untuk peristiwa yang dijamin Debitur terkena Pemutusan Hubungan Kerja (PHK),  hak klaim menjadi kadaluarsa setelah melampaui 3 (tiga) bulan sejak Debitur terkena Pemutusan Hubungan Kerja (PHK).
    </li>
    <li>
Untuk peristiwa yang dijamin Debitur tidak melaksanakan kewajiban sesuai perjanjian kredit tanpa memperhatikan apapun penyebabnya, sehingga timbul risiko kredit, hak klaim menjadi kadaluarsa setelah melampaui 3 (tiga) bulan sejak kredit jatuh tempo sebagaimana tertuang dalam perjanjian kredit.
    </li>
    <li>
Untuk semua peristiwa yang dijamin :
<ol type="1">
    <li>
Penerima jaminan tidak melengkapi dokumen klaim yang menjadi persyaratan klaim dalam waktu 3 (tiga) bulan terhitung sejak permintaan terakhir untuk melengkapi dokumen klaim tersebut dari penjamin diteriman oleh penerima jaminan; atau
    </li>
    <li>
Penerima jaminan tidak melakukan bantahan atas penolakan klaim atau besarnya klaim yang akan dibayar penjamin, dalam waktu 3 (tiga) bulan sejak diterimanya surat penolakan klaim atau persetujuan klaim.
    </li>
</ol>
    </li>
</ol>
</div>

<div style="text-align: center;font-weight: bold">
KLAUSUL PENGECUALIAN KEWAJIBAN <br/> KONTRAKTUAL TAMBAHAN
</div>
<div>
Bertentangan dengan ketentuan yang berlaku sebaliknya di dalam Polis ini, disini dinyatakan dan disetujui bahwa pertanggungan ini tidak menjamin kewajiban kontraktual tambahan yang timbul dengan cara apapun, dalam hal ini diartikan sebagai keputusan atas seorang penanggung yang dibuat oleh suatu pengadilan dalam yuridiksi yang berwenang, yang tidak dijamin oleh kontrak asuransi antar pihak-pihak yang bersengketa.<br/>
Klausul ini tunduk kepada semua syarat dan ketentun lain di dalam Polis.
</div>            
<div style="text-align: center;font-weight: bold">
KLAUSUL PENGECUALIAN ASBESTOS TOTAL
</div>
<div>
Dengan ini dipahami dan disetujui bahwa pertanggungan ini tidak berlaku atas dan tidak menjamin tanggung jawab hukum nyata atau dituduhkan apapun atas satu atau lebih klaim yang timbul akibat satu atau lebih kerugian yang baik secara langsung maupun tidak langsung terjadi dari, dikarenakan oleh, atau merupakan konsekuensi dari asbestos dalam segala bentuk dan jumlah.
</div>
        </td>
</tr>        
</table>

<div class="clearfix"></div>
<div class="clearfix"></div>
<div class="clearfix"></div>
<table border="0">
    <tr>
        <td align="left" width=""><img src="assets/ultra/data/invoice/Picture1.jpg" height="40px" ></td>
    </tr>
    <tr><td>&nbsp;</td></tr>
</table>

<table border="0" style="text-align: justify;line-height: 1.4;">
    <tr>
<td width="45%">
<div class="clearfix"></div>
<div class="clearfix"></div>
<div style="text-align: center;font-weight: bold">
KLAUSUL PENGECUALIAN REMBESAN, <br/> POLUSI DAN KONTAMINASI <br/> (NMA 1685 – TIBA-TIBA DAN TIDAK SENGAJA)
</div>
<div>
Pertanggungan ini tidak menjamin segala tanggung jawab hukum atas:
<ol type="1" style="text-align: justify-all;">
    <li>
Cedera Diri, Cedera Badan, kerugian, kehancuran, atau hilangnya fungsi harta benda yang baik secara langsung maupun tidak langsung disebabkan oleh rembesan, polusi, atau kontaminasi dengan syarat bahwa alinea (1) ini tidak berlaku bagi tanggung jawab hukum atas Cedera Diri, Cedera Badan, kerugian, kehancuran fisik, kerusakan atas harta benda kongkrit ataupun hilang atau rusaknya fungsi harta benda tersebut, jika 
    </li>
</ol>
</div>
        </td>
        <td width="10%">&nbsp;</td>
        <td width="45%">
<div>
    <ol type="none">
        <li>
rembesan, polusi atau kontaminasi termasud disebabkan oleh kejadian yang tiba-tiba, tidak dimaksudkan atau diharapkan, yang terjadi selama berlangsungnya Periode Asuransi.
        </li>
    </ol>
    <ol start="2" style="text-align: justify-all;">
    <li>
Biaya untuk meniadakan, mengurangi atau membersihkan bahan yang merembes atau menimbulkan polusi, atau kontaminasi kecuali jika rembesan, polusi, atau kontaminasi termaksud disebabkan oleh kejadian yang tiba-tiba, tidak dimaksudkan atau diharapkan, yang terjadi selama berlangsungnya Periode Asuransi.
    </li>
    <li>
Denda, penalti, atau sanksi keuangan.
    </li>
</ol>
Klausul ini tidak memperluas pertanggungan untuk menjamin segala tanggung jawab hukum yang memang tidak dijamin Polis seandainya Klausul ini tidak dilekatkan.
</div>
        </td>
</tr>        
</table>

<div class="clearfix"></div>
<div class="clearfix"></div>
<div class="clearfix"></div>
<div class="clearfix"></div>
<div class="clearfix"></div>
<div class="clearfix"></div>
<div class="clearfix"></div>
<div class="clearfix"></div>
<div class="clearfix"></div>
<div class="clearfix"></div>
<div class="clearfix"></div>
<div class="clearfix"></div>
<div class="clearfix"></div>
<div class="clearfix"></div>
<div class="clearfix"></div>
<div class="clearfix"></div>
<div class="clearfix"></div>
<div class="clearfix"></div>
<div class="clearfix"></div>
<div class="clearfix"></div>
<div class="clearfix"></div>
<div class="clearfix"></div>
<div class="clearfix"></div>
<div class="clearfix"></div>
<table border="0">
    <tr>
        <td align="left" width=""><img src="assets/ultra/data/invoice/Picture1.jpg" height="40px" ></td>
    </tr>
    <tr><td>&nbsp;</td></tr>
</table>

<div style="text-align: left;font-weight: bold">
PT. ASURANSI STACO MANDIRI <br/> KANTOR PUSAT, KANTOR CABANG/ KANTOR PEMASARAN DAN UNIT SYARIAH
</div>
<div class="clearfix"></div>
<table border="1" style="text-align: justify;line-height: 1.4;">
    <tr>
        <td>
            <table>
                <tr>
                    <td width="30%">&nbsp;</td>
                    <td width="38%">
<b>KANTOR PUSAT</b> <br/>
Wisma Tugu Raden Saleh Lantai 3 & 4 <br/>
Jalan Raden Saleh No. 4e <br/>
Jakarta 10330 <br/>
Telepon : (62-21) 391-1840 (Hunting) <br/>
Fax : (62-21) 391-1844, 391-1845 <br/>
Email   : info@stacoinsurance.com <br/>
Home Page : http://www.stacoinsurance.com
                    </td>
                    <td width="32%">&nbsp;</td>
                </tr>
            </table>
        </td>
    </tr>
<tr>
    <td colspan="3">&nbsp;</td>
</tr>
<tr>
    <td colspan="3" style="text-align: center;font-weight: bold">KANTOR CABANG</td>
</tr>
</table>
<table border="1" style="text-align: justify;line-height: 1.4;">
<tr>
    <td width="50%">
Jakarta Utama <br/>
Wisma Tugu Raden Saleh Lt. 4 <br/>
Jalan Raden Saleh No. 44 <br/>
Jakarta 10330 <br/>
Telp    : (021) 391-1840 (Hunting) <br/>
Fax : (021) 391-1844, 391-1845 <br/>
Email   : kcu@stacoinsurance.com
    </td>
    <td width="50%">
Palembang <br/>
Jl. Dr. M. Isa No. 981 A, Palembang <br/>
Telp    : (0711) 311-389 <br/>
Fax : (0711) 312-180 <br/>
Email   : plb@stacoinsurance.com
    </td>
</tr>

<tr>
    <td width="50%">
Jakarta 2 <br/>
Wisma Tugu Raden Salah Lt. 3 <br/>
Jalan Raden Saleh No. 44 <br/>
Jakarta 10330 <br/>
Telp    : (021) 391-1840 (Hunting) <br/>
Fax : (021) 391-1844, 391-1845 <br/>
Email   : jkt2@stacoinsurance.com
    </td>
    <td width="50%">
Medan <br/>
Jl. Kepribadian No. 6, Medan <br/>
Telp    : (061) 457-5069 <br/>
Fax : (061) 453-0589 <br/>
Email   : mdn@stacoinsurance.com
    </td>
</tr>

<tr>
    <td width="50%">
Tangerang <br/>
BSD Golden Road Blok C 28 No. 28 <br/>
Serpong, Tangerang Selatan, Banten <br/>
Telp    : (021) 5315-1001 <br/>
Fax : (021) 537-7676 <br/>
Email   : tng@stacoinsurance.com
    </td>
    <td width="50%">
Pekanbaru <br/>
Perkantoran Grand Sudirman Blok D No. 1 <br/>
Jl. Datuk Setia Maharaja Pekanbaru - Riau <br/>
Telp    : (0761) 32326, 37287 <br/>
Fax : (0761) 32326 <br/>
Email   : pku@stacoinsurance.com
    </td>
</tr>

<tr>
    <td width="50%">
Bandung <br/>
BSD Golden Road Blok C 28 No. 28 <br/>
Jl. BKR No. 102 B, Bandung <br/>
Telp    : (022) 520-3368, 8780-4359 <br/>
Fax : (022) 8780-4358 <br/>
Email   : bdg@stacoinsurance.com
    </td>
    <td width="50%">
Makassar <br/>
Jl. Rappocini No. 6, Makassar <br/>
Telp    : (0411) 877-636 <br/>
Fax : (0411) 877-654 <br/>
Email   : mks@stacoinsurance.com
    </td>
</tr>

<tr>
    <td width="50%">
Semarang <br/>
Jl. Pringgading No. 55 B, Semarang <br/>
Telp    : (024) 358-0337 <br/>
Fax : (024) 356-9696 <br/>
Email   : smg@stacoinsurance.com
    </td>
    <td width="50%">
Balikpapan <br/>
Jl. Komplek Balikpapan Regency Blok W3 No. 19 <br/>
Balikpapan Selatan, Kalimantan Timur <br/>
Telp    : (0542) 721-2458 / 0851 0063 6555 <br/>
Fax : (0542) 721-2150 <br/>
Email   : blp@stacoinsurance.com
    </td>
</tr>

<tr>
    <td width="50%">
Surabaya <br/>
Jl. Ngagel Jaya Selatan No. 27B, Surabaya <br/>
Telp    : (031) 502-6028, 501-1290 <br/>
Fax : (031) 505-5765 <br/>
Email   : sby@stacoinsurance.com
    </td>
    <td width="50%">
Unit Syariah <br/>
Komp. Ruko Graha Mas Pemuda Blok AB No. 5, <br/>
Lt.1&2, Taman Berdikari Sentosa, Jl. Pemuda <br/>
Jakarta Timur <br/>
Telp    : (021) 2983-3021, 2983-3022 <br/>
Fax : (021) 4788-2583 <br/>
Email   : syh@stacoinsurance.com
    </td>
</tr>

</table>
<div class="clearfix"></div>
<div class="clearfix"></div>
<div class="clearfix"></div>
<div class="clearfix"></div>
<div class="clearfix"></div>
<div class="clearfix"></div>
<div class="clearfix"></div>
<table border="0">
    <tr>
        <td align="left" width=""><img src="assets/ultra/data/invoice/Picture1.jpg" height="40px" ></td>
    </tr>
    <tr><td>&nbsp;</td></tr>
</table>

<table border="1" style="text-align: justify;line-height: 1.4;">
<tr>
    <td colspan="2" style="text-align: center;font-weight: bold">KANTOR PEMASARAN</td>
</tr>
<tr>
    <td width="50%">
Bekasi <br/>
Komp. Ruko Graha Mas Pemuda Blok AB No. 5, Lt.3, <br/>
Taman Berdikari Sentosa, Jl. Pemuda, Rawamangun, <br/>
Jakarta Timur <br/>
Telp    : (021) 2247-3032 <br/>
Email   : bks@stacoinsurance.com
    </td>
    <td width="50%">
Yogyakarta <br/>
Gedung Graha Natans Sejahtera Lt.1- Unit 105 <br/>
Jl. Urip Sumoharjo No.65 Klitren <br/>
Gondokusuman, Yogyakarta 55222 <br/>
Telp    : (0274) 564-241 <br/>
Email   : ygy@stacoinsurance.com
    </td>
</tr>

<tr>
    <td width="50%">
Bali <br/>
Ruko Graha Merdeka Unit B, Surabaya <br/>
Jl. Merdeka Tanjung Bungkak <br/>
Denpasar - Bali <br/>
Telp    : (0361) 236-079 <br/>
Fax : (0361) 236-079 <br/>
Email   : bli@stacoinsurance.com
    </td>
    <td width="50%">
    </td>
</tr>
</table>
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