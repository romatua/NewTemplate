<table border="0">
    <tr>
        <td align="left" width=""><img src="assets/ultra/data/invoice/Picture1.jpg" height="80px" ></td>
    </tr>
    <tr><td>&nbsp;</td></tr>
</table>
<h3 style="text-align: center;display: inline-block;line-height: 1;font-size: 11;">
IKHTISAR PERTANGGUNGAN<br>POLIS ASURANSI KREDIT STACO AMAN 4
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
        <td align="left" width=""><img src="assets/ultra/data/invoice/Picture1.png" width="200" ></td>
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
Pemegang Polis atau Tertanggung/Kreditur wajib membaca seluruh syarat dan kondisi Polis untuk memastikan bahwa semua hal yang tercantum di dalam polis telah dimengerti dan telah sesuai dengan Surat Permintaan Penutupan Asuransi (SPPA) yang telah ditandatangani oleh Pemegang Polis atau Tertanggung/Kreditur . Apabila dalam waktu 14 (empat belas) hari setelah Polis diterima tidak ada tanggapan, maka Pemegang Polis atau Tertanggung/Kreditur dianggap telah menyetujui seluruh syarat dan kondisi Polis tersebut.
        </li>
        <li>
Surat Permintaan Penutupan Asuransi (SPPA), seluruh korespondensi, Skedul Polis, Klausul serta Warranty yang melekat di dalam Polis merupakan satu kesatuan kontrak asuransi dan merupakan bagian yang tidak terpisahkan dari Polis.
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
        <td align="left" width=""><img src="assets/ultra/data/invoice/Picture1.png" width="200" ></td>
    </tr>
    <tr><td>&nbsp;</td></tr>
</table>
<h3 style="text-align: left;display: inline-block;line-height: 0.5;font-size: 11;">
POLIS ASURANSI KREDIT STACO AMAN
</h3>
<div class="clearfix"></div>
<table border="0" style="text-align: justify;line-height: 1.5;">
    <tr>
        <td width="45%">
<div>
Bahwa Pemegang Polis atau Tertanggung/Kreditur yang disebutkan dalam ikhtisar polis ini telah mengajukan kepada Penanggung suatu permohonan tertulis yang dilengkapi dengan keterangan tertulis lainnya yang menjadi dasar dan merupakan bagian yang tidak terpisahkan dari polis ini, maka dengan syarat Pemegang Polis atau Tertangung/Peserta telah membayar premi kepada Penanggung sebagaimana disebutkan dalam polis dan tunduk pada syarat -syarat, pengecualian- pengecualian dan ketentuan-ketentuan yang terkandung di dalamnya atau ditambahkan padanya, Penanggung akan membayar klaim asuransi kepada Pemegang Polis atau Tertanggung/Kreditur sesuai dengan cara dan ketentuan-ketentuan dalam Polis ini bilamana <b>Debitur</b> gagal memenuhi perjanjian kreditnya sehingga timbul risiko kredit yang ditegaskan dalam syarat serta kondisi polis, yang tercetak, dilekatkan, dicantumkan dan/atau dibuatkan endosemen pada Polis ini.
</div>

<div style="text-align: center;font-weight: bold">
BAB I <br> J A M I N A N <br> PASAL 1 <br> RISIKO YANG DIJAMIN
</div>

<div>
Polis ini memberikan penggantian kepada Pemegang Polis atau Tertanggung/Kreditur apabila fasilitas pinjaman yang disalurkan oleh Pemegang Polis atau Tertanggung/Kreditur kepada <b>Debitur</b> mengalami risiko kredit dan dinyatakan bermasalah sehingga masuk dalam kualitas kolektibiltas 2 (dalam perhatian khusus) dan/atau kualitas kolektibiltas 3 (kurang lancar) sesuai ketentuan Bank Indonesia minimal lama tunggakan 45 (empat puluh lima) hari maksimal 120 (seratus dua puluh) hari, sepanjang tidak termasuk dalam pengecualian umum dan/atau pengecualian khusus polis.
</div>

<div>
Besarnya ganti rugi adalah sebesar seluruh Sisa Pinjaman/Outstanding Kredit yang telah tersetting sebelumnya dalam system Pemegang Polis atau Tertanggung/Kreditur yang harus dibayarkan oleh Debitur kepada Pemegang Polis atau Tertanggung/Kreditur (untuk pembuktian Sisa Pinjaman/Outstanding Kredit) dan tidak termasuk tunggakkan cicilan dan denda.
</div>

<div style="text-align: center;font-weight: bold">
BAB II <br> P E N G E C U A L I A N <br> PASAL 2 <br> PENGECUALIAN
</div>

        </td>
        <td width="5%">&nbsp;</td>
        <td width="50%">
<div style=" font-weight: bold;float: left;">
Pengecualian Umum :
<ol type="1">
    <li>
Pemegang Polis atau Tertanggung/Kreditur tidak membayar premi sampai dengan batas waktu yang ditentukan dan / atau kadaluarsa klaim dan /atau tuntutan ganti rugi tidak memenuhi syarat dan kondisi polis / endosemen; atau
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
Pemberian Kredit melanggar prinsip-prinsip pemberian kredit dan atau melanggar peraturan dan perundang-undangan yang berlaku termasuk dan tidak terbatas pada peraturan perundang-undangan perbankan yang diterbitkan oleh Otoritas Jasa Keuangan dan Bank Indonesia; atau
    </li>
    <li>
Segala bentuk perbuatan yang dilakukannya dengan sengaja atau menyembunyikan fakta/pemalsuan data oleh Debitur dan/atau Pemegang Polis atau Tertanggung/Kreditur dan/atau yang berkepentingan dalam asuransi ini.
    </li>
</ol>
Pengecualian Khusus :
<ol type="1">
    <li>
Debitur fiktif atau tidak memiliki izin usaha yang sesuai dengan peraturan perundang- undangan atau telah dimasukkan dalam Daftar Hitam Nasional oleh Bank Indonesia; atau
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
</table>
<div class="clearfix"></div>
<div class="clearfix"></div>
<div class="clearfix"></div>
<table border="0">
    <tr>
        <td align="left" width=""><img src="assets/ultra/data/invoice/Picture1.png" width="200" ></td>
    </tr>
    <tr><td>&nbsp;</td></tr>
</table>

<table border="0" style="text-align: justify;line-height: 1.5;">
    <tr>
<td width="50%">
<div style=" font-weight: bold;float: left;">
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
Debitur terbukti mengkonsumsi obat-obat terlarang sesuai Undang-Undang No. 5 Tahun 1997 tentang Psikotropika, baik sebagai pengguna maupun pengedar dan Undang- Undang No. 35 Tahun 2009 tentang Narkotika; atau
    </li>
    <li>
Debitur ikut melakukan atau ikut serta dalam tindakan melawan hukum dan / atau peraturan yang berlaku di negara dimana tindakan tersebut dilakukan; atau
    </li>
    <li>
Debitur kehilangan pekerjaan, dipecat, mengundurkan diri atau pensiun termasuk pensiun dini dari tempat Debitur bekerja; atau
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
<b>Pemegang Polis</b> atau <b>Tertanggung/Kreditur</b> merupakan suatu badan usaha yang memberikan fasilitas pinjaman kepada <b>Debitur</b> dan sekaligus sebagai pihak yang menerima manfaat asuransi kredit apabila terjadi suatu peristiwa yang dijamin oleh syarat dan kondisi polis selama masa asuransi.
</div>

<div>
<b>Debitur</b> adalah Pegawai Tetap (bukan Outsourcing/ kontrak) dan atau yang tertera dalam perjanjian kredit yang merupakan nasabah individu penerima fasilitas pinjaman dari Pemegang Polis atau Tertanggung/Kreditur , yang namanya tertera pada deklarasi pertanggungan.
</div>
        </td>
        <td width="5%">&nbsp;</td>
        <td width="45%">
<div>
<b>Deklarasi Pertanggungan</b> adalah daftar nama <b>Debitur</b> yang telah disetujui realisasi kreditnya, yang diajukan Pemegang Polis atau Tertanggung/Kreditur kepada Penanggung.<br/>
<b>Perjanjian Kredit</b> adalah perikatan antara Pemegang Polis atau Tertanggung/Kreditur dengan <b>Debitur</b> dalam rangka penyaluran Kredit, sesuai dengan syarat dan ketentuan yang ber laku pada Bank milik Pemegang Polis atau Tertanggung/Kreditur .
</div>

<div>
<b>Sisa Kredit</b> adalah Jumlah kewajiban <b>Debitur</b> yang tidak dapat diselesaikan berdasarkan ketentuan akad kredit.
</div>

<div>
<b>Hari Kalender</b> adalah hari Senin sampai dengan hari Minggu sebagaimana tercantum dalam kalender yang berlaku secara nasional di Indonesia.
</div>

<div>
<b>Hari Kerja</b> adalah hari dimana bank umum buka untuk beroperasi dan melakukan kliring yaitu hari Senin sampai dengan hari Jumat, kecuali hari tersebut merupakan hari libur Nasional atau dinyatakan sebagai hari Libur Nasional oleh pemerintah.
</div>

<div>
<b>Kerusuhan</b> adalah tindakan suatu kelompok orang minimal sebanyak 12 (dua belas) orang yang dalam melaksanakan suatu tujuan bersama menimbulkan suasana gangguan ketertiban umum dengan kegaduhan dan menggunakan kekerasan serta pengrusakan harta benda orang lain, yang belum dianggap sebagai suatu Huru-hara.
</div>

<div>
<b>Pemogokan</b> adalah tindakan pengrusakan yang disengaja oleh sekelompok pekerja, minimal sebanyak 12 (dua belas) pekerja atau separuh dari jumlah pekerja (dalam hal jumlah seluruh pekerja kurang dari dua puluh empat orang), yang menolak bekerja sebagaimana biasanya dalam usaha untuk memaksa majikan memenuhi tuntutan dari pekerja atau dalam melakukan protes terhadap peraturan atau persyaratan kerja yang diberlakukan oleh majikan.
</div>

<div>
<b>Penghalangan bekerja</b> adalah tindakan pengrusakan yang sengaja dilakukan oleh sekelompok pekerja, minimal sebanyak 12 (dua belas) pekerja atau separuh dari jumlah pekerja (dalam hal jumlah seluruh pekerja kurang dari dua puluh empat orang), akibat dari adanya pekerja yang diberhentikan atau dihalangi bekerja oleh majikan.
</div>

        </td>
</tr>        
</table>

<div class="clearfix"></div>
<div class="clearfix"></div>
<table border="0">
    <tr>
        <td align="left" width=""><img src="assets/ultra/data/invoice/Picture1.png" width="200" ></td>
    </tr>
    <tr><td>&nbsp;</td></tr>
</table>

<table border="0" style="text-align: justify;line-height: 1.5;">
    <tr>
<td width="45%">

<div>
<b>Perbuatan jahat</b> adalah tindakan seseorang yang dengan sengaja merusak harta benda orang lain karena dendam, dengki, amarah atau vandalistis, kecuali tindakan yang dilakukan oleh seseorang yang berada di bawah pengawasan atau atas perintah <b>Debitur</b> atau yang mengawasi atau menguasai harta benda tersebut, atau oleh pencuri/perampok/ penjarah.
</div>

<div>
<b>Pencegahan</b> adalah tindakan pihak yang berwenang dalam usaha menghalangi, menghentikan atau mengurangi dampak atau akibat dari terjadinya risiko-risiko yang dijamin.
</div>

<div>
<b>Huru-hara</b> adalah keadaan di satu kota di mana sejumlah besar massa secara bersama-sama atau dalam kelompok-kelompok kecil menimbulkan suasana gangguan ketertiban dan keamanan masyarakat dengan kegaduhan dan menggunakan kekerasan serta rentetan pengrusakan sejumlah besar harta benda, sedemikian rupa sehingga timbul ketakutan umum, yang ditandai dengan terhentinya lebih dari separuh kegiatan no rmal pusat perdagangan/ pertokoan atau perkantoran atau sekoiah atau transportasi umum di kota tersebut selama minimal 24 (duapuluh empat) jam secara terus-menerus yang dimulai sebelum, selama atau setelah kejadian tersebut.
</div>

<div>
<b>Pembangkitan Rakyat</b> adalah gerakan sebagian besar rakyat di Ibukota Negara, atau di 3 (tiga) atau lebih Ibukota Propinsi dalam kurun waktu 12 (dua belas) hari, yang menuntut penggantian Pemerintah yang sah de jure atau de facto, atau melakukan penolakan secara terbuka terhadap Pemerintah yang sah de jure atau de facto, yang belum dlanggap sebagai suatu Pemberontakan.<br/>
<b>Pengambilalihan Kekuasaan</b> adalah keadaan yang memperlihatkan bahwa Pemerintah yang sah de jure atau de facto telah digulingkan dan digantikan oleh suatu kekuatan yang memberlakukan dan atau memaksakan pemberlakuan peraturan-peraturan mereka sendiri.
</div>

<div>
<b>Revolusi</b> adalah gerakan rakyat dengan kekerasan untuk melakukan perubahan radikal terhadap sistem ketatanegaraan (pemerintahan atau keadaan sosial) atau menggulingkan Pemerintah yang sah de jure atau de facto, yang belum dianggap sebagai suatu Pemberontakan.
</div>

<div>
<b>Pemberontakan</b> adalah tindakan terorganisasi dari suatu kelompok orang yang melakukan pembangkangan dan atau penentangan terhadap Pemerintah yang sah de jure atau de facto dengan kekerasan yang menggunakan senjata api, yang
</div>
        </td>
        <td width="10%">&nbsp;</td>
        <td width="45%">
<div>
dapat menimbulkan ancaman terhadap kelangsungan Pemerintah yang sah de jure atau de facto.
</div>

<div>
<b>Kekuatan Militer</b> adalah kelompok angkatan bersenjata baik dalam maupun luar negeri minimal sebanyak 30 (tiga puluh) orang yang menggunakan kekerasan untuk menggulingkan Pemerintah yang sah de jure atau de facto atau menimbulkan suasana gangguan ketertiban dan keamanan umum.<br/>
<b>Invasi</b> adalah tindakan kekuatan militer suatu negara memasuki wilayah negara lain dengan maksud menduduki atau menguasainya secara sementara atau tetap.
</div>

<div>
<b>Perang Saudara</b> adalah konflik bersenjata antar daerah atau antar faksi politik dalam batas teri torial suatu negara dengan tujuan memperebutkan legitimasi kekuasaan.
</div>

<div>
<b>Perang dan Permusuhan</b> adalah konflik bersenjata secara luas (baik dengan atau tanpa pernyataan perang) atau suasana perang antara dua negara atau lebih, termasuk latihan perang suatu negara atau latihan perang gabungan antar negara.
</div>

<div>
<b>Makar</b> adalah tindakan seseorang yang bertindak atas nama atau sehubungan dengan suatu organisasi atau sekelompok orang dengan kegiatan yang diarahkan pada penggulingan dengan kekerasan Pemerintah yang sah de jure atau de facto atau mempengaruhinya dengan Terorisme atau Sabotase atau kekerasan.
</div>

<div>
<b>Terorisme</b> adalah suatu tindakan, termasuk tetapi tidak terbatas pada penggunaan pemaksaan atau kekerasan dan atau ancaman dengan menggunakan pemaksaan atau kekerasan, oleh seseorang atau sekelompok orang, baik bertindak sendiri atau atas nama atau berkaitan dengan sesuatu organisasi atau pemerintah, dengan tujuan politik, agama, ideologi atau yang sejenisnya termasuk intensi untuk memengaruhi pemerintahan dan/atau membuat publik atau bagian dari publik dalam ketakutan.
</div>

<div>
<b>Sabotase</b> adalah tindakan pengrusakan harta benda atau penghalangan kelancaran pekerjaan atau yang berakibat turunnya nilai suatu pek erjaan, yang dilakukan oleh seseorang atau sekelompok orang, baik bertindak sendiri atau atas nama atau berkaitan dengan sesuatu organisasi atau pemerintah dalam usaha mencapai tujuan politik, agama, Ideologi atau yang sejenisnya termasuk intensi untuk memengaruhi pemerintahan dan/atau membuat publik atau bagian dari publik dalam ketakutan.
</div>

        </td>
</tr>        
</table>

<div class="clearfix"></div>
<div class="clearfix"></div>
<table border="0">
    <tr>
        <td align="left" width=""><img src="assets/ultra/data/invoice/Picture1.png" width="200" ></td>
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
Pemegang Polis atau Tertanggung/Kreditur Wajib :
    <ol type="1.1">
        <li>
Mengungkapkan Fakta material yaitu informasi, keterangan, keadaan dan fakta yang mempengaruhi pertimbangan Penanggung dalam menerima atau menolak suatu permohonan penutupan asuransi dan dalam penetapan suku premi apabila permohonan dimaksud diterima.
        </li>
        <li>            
Membuat pernyataan yang benar tentang hal-hal yang berkaitan dengan penutupan asuransi yang disampaikan baik pada waktu pembuatan perjanjian asuransi maupun selama jangka waktu pertanggungan.
        </li>
    </ol>
    </li>
    <li>
Jika Pemegang Polis atau Tertanggung/Kreditur tidak melaksanakan kewajiban sebagaimana diatur dalam ayat 1 di atas, Penanggung tidak wajib membayar kerugian yang terjadi dan berhak menghentikan pertanggunan serta tidak wajib mengembalikan premi.
    </li>
    <li>
Ketentuan pada ayat 2 di atas tidak berlaku dalam hal fakta material yang tidak diungkapkan atau yang dinyatakan dengan tidak benar tersebut telah diketahu i oleh Penanggung, namun Penanggung tidak mempergunakan haknya untuk menghentikan pertanggungan dalam waktu 30 (tiga puluh) hari setelah Penanggung mengetahui pelanggaran tersebut.
    </li>
</ol>
</div>

<div style="text-align: center;font-weight: bold">
PASAL 6 <br> PROSEDUR PENUTUPAN PERTANGGUNGAN
</div>
<div>
Prosedur Penutupan Pertanggungan Asuransi Kredit sebagai berikut :
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
Asuransi (SPPA) kepada Penanggung atas Pembiayaan yang akan diberikan kepada Calon <b>Debitur</b> dari sebuah Koperasi/Badan Usaha dengan disertai Nota Analisa Pembiayaan (NAP). Apabila Penanggung menyetujui permintaan tersebut maka Penanggung akan menerbitkan Surat Persetujuan Prinsip Permohonan Asuransi (SP3A) dan ditandatangani oleh pejabat yang berwenang untuk selanjutnya dikirimkan kepada Pemegang Polis atau Tertanggung/Kreditur.
    </li>
</ol>
<ol start="2" style="padding:0!important;">
    <li>
Setelah Pemegang Polis atau Tertanggung/Kreditur menerima Surat Persetujuan Prinsip Permohonan Asuransi (SP3A) selanjutnya Pemegang Polis atau Tertanggung/Kreditur mengirimkan kepada Penanggung Deklarasi nominatif <b>Debitur</b> selambat-lambatnya 7 (tujuh) hari kerja sejak Perjanjian Pembiayaan ditanda tangani antara Pemegang Polis atau Tertanggung/Kreditur dan <b>Debitur</b> yang sekaligus menjadi bagian yang tidak terpisahkan dari Polis. Prosedur penutupan pertanggungan didasarkan pada Deklarasi Nominatif <b>Debitur</b> yang diterima dan telah disetujui oleh Penanggung selama periode pertanggungan, dengan mencantumkan :
    <ol type="">
        <li>    
            Nama <b>Debitur</b>;
        </li>
        <li>    
            Tanggal Lahir;
        </li>
        <li>    
            Mulai Asuransi;
        </li>
        <li>    
            Masa Asuransi;
        </li>
        <li>    
            Nilai Pembiayaan;
        </li>
        <li>    
            Lama Bekerja.
        </li>
    </ol>
    </li>
</ol>
Penyampaian Deklarasi tersebut merupakan
Condition Precedent To Liability.
Selanjutnya Penanggung akan menerbitkan Sertifikat Asuransi Kredit berikut Nota Penagihan premi.<br/>
Sertifikat Asuransi Kredit adalah bagian yang tidak terpisahkan dari Polis, dan merupakan dokumen yang dikeluarkan oleh Penanggung sebagai dasar keikutsertaan <b>Debitur</b> dalam pertanggungan Polis ini yang berisi data pertanggungan.
</div>


<div style="text-align: center;font-weight: bold">
PASAL 7 <br> PERTANGGUNGAN LAIN
</div>

<div>
<ol type="1">
<li>Pada waktu pertanggungan ini dibuat, Pemegang Polis atau Tertanggung/Kreditur wajib memberitahukan kepada Penanggung mengenai pertanggungan lain untuk kepentingan yang sama.</li>

<li>Apabila pertanggungan ini telah dibuat, kemudian Pemegang Polis atau Tertanggung/Kreditur   menutup pertanggungan kepada Penanggung lain untuk kepentingan yang sama, maka hal tersebut wajib diberitahukan juga kepada Penanggung.</li>
</ol>
</div>


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