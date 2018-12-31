<script type="text/javascript">
    $(function () {
        //$('.pDiv2').append('<input type="checkbox" class="checkall" />Check All ');
        //$('.ftitle').append('<input type="checkbox" class="checkall" />Check All ');
        $('.tDiv').append('<input type="checkbox" class="checkall" style="margin-left:20px;vertical-align=baseline;" /> <b>Check All </b> ');
        //CHECK ALL BOXES
        $('.checkall').click(function () {
            //alert("oii");
            $("input[name=custom_checkbox]").prop('checked', this.checked);
        });
        //ADD DELETE BUTTON
        /*
         if ($('.pDiv2 .delete_all_button').length == 0) { //check if element already exists (for ajax refresh purposes)
         $('.pDiv2').append('<input type="button" value="Delete Selected" class="delete_all_button" onclick="delete_selected();"> ');
         $('.pDiv2').append('<input type="button" value="Update Selected" class="update_all_button" onclick="update_selected();">');
         }*/
        if ($('.tDiv3 .delete_all_button').length == 0) { //check if element already exists (for ajax refresh purposes)
            /*$('.tDiv3').append('<span class="export"><input type="button" value="Delete Selected" class="delete_all_button" onclick="delete_selected();"></span> ');
            $('.tDiv3').append('<input type="button" value="Update Selected" class="update_all_button" onclick="update_selected();">');
            */
            $('.tDiv3').append('<input type="button" value="Persetujuan Jasindo" class="update_all_button" onclick="submit_peserta();">');
        }
    });

    function delete_selected()
    {
        var list = "";
        $('input[type=checkbox]').each(function () {
            if (this.checked) {
                //remove selection rows
                //$('#custom_tr_' + this.value).remove();//to remove row
                //create list of values that will be parsed to controller
                list += this.value + '|';
            }
        });
        //send data to delete
        $.post('http://localhost/bpan2018/trunk/bpanditolak/delete_selection', {selection: list}, function (data) {
            //alert('Voila!');
            location.reload();
        });
    }
    function update_selected()
    {
        var list = "";
        $('input[type=checkbox]').each(function () {
            if (this.checked) {
                //remove selection rows
                //$('#custom_tr_' + this.value).remove();
                //create list of values that will be parsed to controller
                list += this.value + '|';
            }
        });
        //send data to delete
        $.post('http://localhost/bpan2018/trunk/bpanditolak/update_selection', {selection: list}, function (data) {
            //alert('Data Updated!');
            location.reload();
        });
    }
    function submit_peserta()
    {
        var list = "";
        $('input[type=checkbox]').each(function () {
            if (this.checked) {
                //remove selection rows
                //$('#custom_tr_' + this.value).remove();
                //create list of values that will be parsed to controller
                list += this.value + '|';
            }
        });
        //send data to delete
        $.post("<?php echo base_url(); ?>formapp/submit_peserta", {selection: list}, function (data) {
            //alert('Data Updated!');
            location.reload();
        });
    }
</script>
<style>
    /*
    .delete_all_button{
        background-color:#A7D8F5;
        border-color:#A7D8F5;
        margin-bottom: 10px;}
    */
</style>
<!-- page content -->
<div class="right_col" role="main">
    <div class="row">
        <div class="col-md-12">
            <div class="x_panel">
                <div class="x_title">
                    <h2><?php echo $data['title']; ?><small></small></h2>

                    <div class="clearfix"></div>
                        <!--<input type="checkbox" class="checkall" />-->
                    <?php echo $output; ?>
                </div>                  
            </div>
        </div>
    </div>
</div>
<!-- /page content -->