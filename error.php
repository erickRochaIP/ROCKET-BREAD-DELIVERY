<?php if(isset($_REQUEST['mensagem'])): ?>
<div class="container-fluid">
    <div class="row">
        <div class="col-md-3"> </div>
        <div class="col-md-6">
            <div class="alert alert-warning text-center">
                <?php echo $_REQUEST['mensagem'] ?>
            </div>
        </div>
        <div class="col-md-3"> </div>
  </div>
</div>
<?php endif; ?>
