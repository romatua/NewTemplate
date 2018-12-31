
<!-- START CONTENT -->
<section id="main-content" class=" ">
    <section class="wrapper main-wrapper" style=''>

        <!-- <div class='col-lg-12 col-md-12 col-sm-12 col-xs-12'>
            <div class="page-title">

                <div class="pull-left">
                    <h1 class="title">e-Form New Company Template</h1>
                </div>

                <div class="pull-right hidden-xs">
                    <ol class="breadcrumb">
                        <li>
                            <a href="index.html"><i class="fa fa-home"></i>Home</a>
                        </li>
                        <li>
                            <a href="layout-default.html">Layouts</a>
                        </li>
                        <li class="active">
                            <strong>Default Layout</strong>
                        </li>
                    </ol>
                </div>

            </div>
        </div>
        <div class="clearfix"></div> -->

        <div class="col-lg-12">
            <section class="box ">
                <header class="panel_header">
                    <h2 class="title pull-left"><?php echo $data['title']; ?></h2>
                    <div class="actions panel_actions pull-right">
                        <i class="box_toggle fa fa-chevron-down"></i>
                        <!-- <i class="box_setting fa fa-cog" data-toggle="modal" href="#section-settings"></i>
                        <i class="box_close fa fa-times"></i> -->
                    </div>
                </header>
                <div class="content-body">
                    <div class="row">
                        <div class="col-md-12 col-sm-12 col-xs-12">
                          <?php echo $output; ?>
                        </div>
                    </div>
                </div>
            </section>
        </div>


    </section>
</section>
<!-- END CONTENT -->

<script type="text/javascript">
    /*Level 1*/
    $("#field-nik").on("focusout", function () {
        var pnik = ($(this).val()).replace(/-/g,'');
        $.ajax({
            type: "POST",
            url: "<?php echo base_url(); ?>form/wsektp",
            data: {'nik': pnik},
            dataType: "json",
            success: function (msg) {
                //var json = JSON.parse(msg);
                //console.log(msg);
                if(msg.JENIS_KLMIN == 'Laki-Laki'){
                    radiobtn = document.getElementById("LK");
                    radiobtn.checked = true;
                }else{
                    radiobtn = document.getElementById("PR");
                    radiobtn.checked = true;
                }

                $('#field-nama_peserta').val(msg.NAMA_LGKP);
                $("#field-tmp_lahir").val(msg.TMPT_LHR);
                $("#field-tgl_lahir").val(msg.TGL_LHR);
                
                var age = getAge($("#field-tgl_lahir").val());
        //alert(JSON.stringify(msg));
        if (age > 0) {
            if (age > 17 && age < 76) {
                $("#field-usia_masuk").val(age);
            } else {
                alert("Umur: 18-75 tahun!");
                $("#field-usia_masuk").val('');
                $("#field-tgl_lahir").val('');
            }
        } else {
            $("#field-usia_masuk").val('');
            $("#field-tgl_lahir").val('');
        }
    }
});
    });

    /*Level 2*/
    $("#field-tgl_lahir").on("change paste keyup", function () {
        var age = getAge($(this).val());
        if(age > 0){
            if(age > 17 && age < 76){
                $("#field-usia_masuk").val(age);
            }else{
                alert("Umur: 18-75 tahun!");
                $("#field-usia_masuk").val('');
                $("#field-tgl_lahir").val('');
            }
        }else {
            $("#field-usia_masuk").val('');
            $("#field-tgl_lahir").val('');
        }

        var cekmasa = Math.ceil(parseInt($("#field-masa_asuransi").val()) / 12);
        if(isNaN(cekmasa)){
            $("#field-usia_jatuhtempo").val('');
            $("#field-nilai_pertanggungan").val('');
            $("#field-tarif_premi").val('');
            $("#field-premi").val('');
        }else{
            var birth = $("#field-tgl_lahir").val();
            var endofmassa = $("#field-tgl_akhir").val();
            var ageJT = calcAgeJT(birth,endofmassa);
            if (ageJT > 75) {
                if(ageJT <= 80){
                    if(cekmasa <= 5){
                        $("#field-usia_jatuhtempo").val(ageJT);
                        var masa = Math.ceil(parseInt($("#field-masa_asuransi").val()) / 12);
                        var ujt = '80';                        
                    }else{
                        alert("Tenor Maksimun Untuk Usia Jatuh Tempo 76 s/d 80 Tahun adalah 60 Bulan");
                        $("#field-masa_asuransi").val('');
                        $("#field-usia_jatuhtempo").val('');
                        $("#field-tarif_premi").val('');
                        $("#field-premi").val('');
                    }
                }else{
                    alert("Usia Jatuh Tempo Tidak Boleh Lebih Dari 80 Tahun!");
                    $("#field-masa_asuransi").val('');
                    $("#field-usia_jatuhtempo").val('');
                }
            }else{
                $("#field-usia_jatuhtempo").val(ageJT);
                var masa = Math.ceil(parseInt($("#field-masa_asuransi").val()) / 12);
                var ujt = '75';
                // if((ageJT > 75 && ageJT <= 80) && cekmasa <= 5){
                //     var masa = Math.ceil(parseInt($("#field-masa_asuransi").val()) / 12)/*'5'*/;
                //     var ujt = '80';
                // }else if((ageJT > 75 && ageJT <= 80) && cekmasa > 5){
                //     var masa = agetJT - age;//Math.ceil(parseInt($("#field-masa_asuransi").val()) / 12)/*'5'*/;
                //     var ujt = '80';
                // }else{
                //     var masa = Math.ceil(parseInt($("#field-masa_asuransi").val()) / 12);
                //     var ujt = '75';
                // }
            }
            //alert(masa+' '+ujt+' '+ageJT);
            $.ajax({
                type: "POST",
                url: "<?php echo base_url(); ?>form/tp_ajk",
                data: {'masa': masa,'ujt': ujt},
                dataType: "text",
                success: function (msg) {
                    console.log(msg);
                    var tarif = msg.trim();                  
                    var premi = (($("#field-nilai_pertanggungan").val()).replace(/,/g,'') * parseFloat(tarif)) / 1000;
                    if (masa > 0 || masa != '') {
                        $("#field-tarif_premi").val(tarif);
                        if (premi > 0) {
                            $("#field-premi").val(parseInt(premi));
                        } else {
                            $("#field-premi").val('');
                        }
                    }
                }
            });
        }
    });   

    /*Level 3*/
    $("#field-masa_asuransi").on("focusout change keyup", function () {
        if ($(this).val() > 180) {
            alert("Masa Asuransi: 1-180 Bulan");
            $(this).val('');
            $('#field-usia_jatuhtempo').val('');
            $("#field-nilai_pertanggungan").val('');
            $('#field-tarif_premi').val('');
        }else if($(this).val() == ''){
            $('#field-tgl_akhir').val('');
            $('#field-usia_jatuhtempo').val('');
            $('#field-tarif_premi').val('');
            $('#field-premi').val('');
        }else{
            var cekmasa = Math.ceil(parseInt($(this).val()) / 12);
            var age = $("#field-usia_masuk").val();
            var str = $("#field-tgl_mulai").val();
            if(str == ''){
                $('#field-tgl_akhir').val('');
                $('#field-usia_jatuhtempo').val('');
                $('#field-nilai_pertanggungan').val('');
            }else{
                /*Awal Mulai*/
                var parts = str.split("-");
                var year = parts[0];// && parseInt(parts[0], 10);
                var month = parts[1];// && parseInt(parts[1], 10);
                var day = parts[2];// && parseInt(parts[2], 10);
                var duration = $(this).val();
                //var dayofMonth = $("#field-masa_asuransi2").val();
                
                var expiryDate = new Date(str);
                expiryDate.setMonth(expiryDate.getMonth() + parseInt(duration));
                expiryDate.setDate(expiryDate.getDate());
                if (day <= 31 && day >= 1 && month <= 12 && month >= 1) {
                    /*var expiryDate = new Date(year, month - 1, day - 1);

                    var day = ('0' + (expiryDate.getDate()) + 1).slice(-2);
                    var month = ('0' + (expiryDate.getMonth() + 1)).slice(-2);
                    var year = expiryDate.getFullYear();*/
                    $("#field-tgl_akhir").val(expiryDate.getFullYear() + "-" + ('0' + (expiryDate.getMonth()+1)).slice(-2) + "-" + ('0' + expiryDate.getDate()).slice(-2));
                } else {
                    $("#field-tgl_akhir").val('');
                }
            }

            var birth = $("#field-tgl_lahir").val();
            var endofmassa = $("#field-tgl_akhir").val();
            var ageJT = calcAgeJT(birth,endofmassa);
            //alert(ageJT);
            if (ageJT > 75) {
                if(ageJT <= 80){
                    if(cekmasa <= 5){
                        $("#field-usia_jatuhtempo").val(ageJT);
                        var masa = Math.ceil(parseInt($("#field-masa_asuransi").val()) / 12);
                        var ujt = '80';                        
                    }else{
                        alert("Tenor Maksimun Untuk Usia Jatuh Tempo 76 s/d 80 Tahun adalah 60 Bulan");
                        $("#field-masa_asuransi").val('');
                        $("#field-usia_jatuhtempo").val('');
                        $("#field-tarif_premi").val('');
                        $("#field-premi").val('');
                    }
                }else{
                    alert("Usia Jatuh Tempo Tidak Boleh Lebih Dari 80 Tahun!");
                    $(this).val('');
                    $("#field-usia_jatuhtempo").val('');
                }
            }else{
                $("#field-usia_jatuhtempo").val(ageJT);
                var masa = Math.ceil(parseInt($(this).val()) / 12);
                var ujt = '75';
                // $("#field-usia_jatuhtempo").val(ageJT);            
                // if((ageJT > 75 && ageJT <= 80) && age >= 75 && cekmasa <= 5){
                //     var masa = Math.ceil(parseInt($("#field-masa_asuransi").val()) / 12)/*'5'*/;
                //     var ujt = '80';
                // }else if((ageJT > 75 && ageJT <= 80) && cekmasa > 5){
                //     var masa = agetJT - age;//Math.ceil(parseInt($("#field-masa_asuransi").val()) / 12)/*'5'*/;
                //     var ujt = '80';
                // }else{
                //     var masa = Math.ceil(parseInt($("#field-masa_asuransi").val()) / 12);
                //     var ujt = '75';
                // }
            }
            /*Akhir Mulai*/
            $.ajax({
                type: "POST",
                url: "<?php echo base_url(); ?>form/tp_ajk",
                data: {'masa': masa,'ujt': ujt},
                dataType: "text",
                success: function (msg) {
                    var tarif = msg.trim();                  
                    var premi = (($("#field-nilai_pertanggungan").val()).replace(/,/g,'') * parseFloat(tarif)) / 1000;
                    if (masa > 0) {
                        $("#field-tarif_premi").val(tarif);
                        if (premi > 0) {
                            $("#field-premi").val(parseInt(premi));
                        } else {
                            $("#field-premi").val('');
                        }
                    }
                }
            });        
        }
    });

/*Level 4*/
$("#field-tgl_mulai").on("paste focusout change keyup", function () {
    var str = $(this).val();
    if (str == '') {
        $("#field-tgl_akhir").val('');
        $("#field-usia_jatuhtempo").val('');
    }
    var strDate = new Date(str);
    var parts = str.split("-");
        var year = parts[0];// && parseInt(parts[0], 10);
        var month = parts[1];// && parseInt(parts[1], 10);
        var day = parts[2];// && parseInt(parts[2], 10);
        var duration = $('#field-masa_asuransi').val();
        //var dayofMonth = $("#field-masa_asuransi2").val();

        var expiryDate = new Date(str);
        expiryDate.setMonth(expiryDate.getMonth() + parseInt(duration));
        expiryDate.setDate(expiryDate.getDate());
        if (day <= 31 && day >= 1 && month <= 12 && month >= 1) {
            /*var expiryDate = new Date(year, month - 1, day - 1);
            //expiryDate.setFullYear(expiryDate.getFullYear());
            alert(expiryDate);

            var day = ('0' + (expiryDate.getDate() + 1)).slice(-2);
            var month = ('0' + (expiryDate.getMonth() + 1)).slice(-2);
            var year = expiryDate.getFullYear();*/
            $("#field-tgl_akhir").val(expiryDate.getFullYear() + "-" + ('0' + (expiryDate.getMonth()+1)).slice(-2) + "-" + ('0' + expiryDate.getDate()).slice(-2));
        } else {
            $("#field-tgl_akhir").val('');
        }
        var age = $("#field-usia_masuk").val();
        var cekmasa = Math.ceil(parseInt($("#field-masa_asuransi").val()) / 12);
        var birth = $("#field-tgl_lahir").val();
        var endofmassa = $("#field-tgl_akhir").val();
        var ageJT = calcAgeJT(birth,endofmassa);
        if (ageJT > 75) {
            if(ageJT <= 80){
                if(cekmasa <= 5){
                        $("#field-usia_jatuhtempo").val(ageJT);
                        var masa = Math.ceil(parseInt($("#field-masa_asuransi").val()) / 12);
                        var ujt = '80';                        
                    }else{
                        alert("Tenor Maksimun Untuk Usia Jatuh Tempo 76 s/d 80 Tahun adalah 60 Bulan");
                        $("#field-masa_asuransi").val('');
                        $("#field-usia_jatuhtempo").val('');
                        $("#field-tarif_premi").val('');
                        $("#field-premi").val('');
                    }
            }else{
                alert("Usia Jatuh Tempo Tidak Boleh Lebih Dari 80 Tahun!");
                $("#field-masa_asuransi").val('');
                $("#field-usia_jatuhtempo").val('');
            }
        }else{
            $("#field-usia_jatuhtempo").val(ageJT);
            var masa = Math.ceil(parseInt($("#field-masa_asuransi").val()) / 12);
            var ujt = '75';
            // $("#field-usia_jatuhtempo").val(ageJT);
            // if((ageJT > 75 && ageJT <= 80) && age >= 75 && cekmasa <= 5){
            //     var masa = Math.ceil(parseInt($("#field-masa_asuransi").val()) / 12)/*'5'*/;
            //     var ujt = '80';
            // }else if((ageJT > 75 && ageJT <= 80) && cekmasa > 5){
            //         var masa = agetJT - age;//Math.ceil(parseInt($("#field-masa_asuransi").val()) / 12)/*'5'*/;
            //         var ujt = '80';
            // }else{
            //     var masa = Math.ceil(parseInt($("#field-masa_asuransi").val()) / 12);
            //     var ujt = '75';
            // }            
        }
        /*Akhir Mulai*/
        
        //var ujt = (ageJT > 75 && ageJT <= 80)? '80':'75';
        //alert(masa +'-'+ ujt);
        $.ajax({
            type: "POST",
            url: "<?php echo base_url(); ?>form/tp_ajk",
            data: {'masa': masa,'ujt': ujt },
            dataType: "text",
            success: function (msg) {
                var tarif = msg.trim();                  
                var premi = (($("#field-nilai_pertanggungan").val()).replace(/,/g,'') * parseFloat(tarif)) / 1000;
                if (masa > 0) {
                    $("#field-tarif_premi").val(tarif);
                    if (premi > 0) {
                        $("#field-premi").val(parseInt(premi));
                    } else {
                        $("#field-premi").val('');
                    }
                }
            }
        });
    });

/*Level 5*/
$("#field-nilai_pertanggungan").on("focusout change keyup", function () {
    $("#field-nilai_pertanggungan2").val(($(this).val()).replace(/,/g,''));
    var tarif = $("#field-tarif_premi").val();
    var premi = (($(this).val()).replace(/,/g,'') * parseFloat(tarif)) / 1000;
    if (premi > 0) {
        $("#field-premi").val(parseInt(premi));
    } else {
        $("#field-premi").val('');
    }
});


/*Generated Data Func*/
function tarif_premi(masa){
    $.ajax({
        type: "POST",
        url: "<?php echo base_url(); ?>form/tp_ajk",
        data: {'masa': masa},
        dataType: "text",
        success: function (msg) {
            console.log(msg);
            $('#field-tarif_premi').val(msg.trim());
        }
    });
}

function getAge(dateString) {
  var birthday = +new Date(dateString);
  return~~ ((Date.now() - birthday) / (31557600000));
}

function calcAgeJT(birthday,endofmassa) {
  var birthday = +new Date(birthday);
  var endofmassa = +new Date(endofmassa);
      //alert(endofmassa);
      return~~ (Math.ceil((endofmassa - birthday) / (31557600000)));
  }

  $(document).ready(function() {
    $('#field-nama_peserta').keyup(function() {
        $(this).val($(this).val().toUpperCase());
    });
    $('#field-tmp_lahir').keyup(function() {
        $(this).val($(this).val().toUpperCase());
    });
});
</script>

<script type="text/javascript">
    $('.valNum').keyup(function() {
    $(this).val(accounting.formatMoney($(this).val()));
});

    $('.valNum2').keyup(function() {
    var num = $(this).val().split("-").join(""); // remove hyphens
    if(!(num.match(/^[0-9]*$/gm))){
        $(this).val('');
    }else{    
        if (num.length > 0) {
            num = num.match(new RegExp('.{1,6}', 'g')).join("-");
        }
        $(this).val(num);
    }
});
</script>