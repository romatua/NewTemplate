<!-- page content -->
<div class="right_col" role="main">
  <div class="row">
    <div class="col-md-12">
      <div class="x_panel">
        <div class="x_title">
          <h2><?php echo $data['title']; ?><small></small></h2>

          <div class="clearfix"></div>
          <?php echo $output; ?>
        </div>                  
      </div>
    </div>
  </div>
</div>
<!-- /page content -->
<script type="text/javascript">
  $(window).load(function() {
   $(".target").attr("target", "_blank");
 });
</script>
<!-- <style type="text/css">
  .crud-action .set1:before
  {
    content: 'DRAFT';
    font-size: 10px;
    cursor: pointer;
    width: 36px;
    height:18px;
    float:left;
    border: none !important;
    padding:0px !important;
    padding-bottom:0px !important;
    margin-left:5px;
    display: block;
  }
  .crud-action .set2:before
  {
    content: 'APPROVE';
    font-size: 10px;
    cursor: pointer;
    width: 36px;
    height:18px;
    float:left;
    border: none !important;
    padding:0px !important;
    padding-bottom:0px !important;
    margin-left:5px;
    display: block;
  }
  .crud-action .set3:before
  {
    content: 'MANUAL';
    font-size: 10px;
    cursor: pointer;
    width: 36px;
    height:18px;
    float:left;
    border: none !important;
    padding:0px !important;
    padding-bottom:0px !important;
    margin-left:5px;
    display: block;
  }
</style> -->