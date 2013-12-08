<?php echo'

  <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
    <ul class="nav navbar-nav">
      <li class="active"><a href="admin.php"><span class="glyphicon glyphicon-home"></span> Home</a></li>
                 
      <li class="dropdown">
        <a href="data.php">EXCEL</a>
      </li>  
    </ul>
    <ul class="nav navbar-nav navbar-right">
      <li data-toggle="modal" data-target="#myModal"><a href="#"><span class="glyphicon glyphicon-thumbs-up"></span> Help us</a></li>
<!-- Modal -->
<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
        <div class="modal-title" id="myModalLabel"><!-- Nav tabs -->
<ul class="nav nav-tabs">
  <li class="active"><a href="#home" data-toggle="tab">Overview</a></li>
  <li><a href="#donate" data-toggle="tab">Donation</a></li>
  <li><a href="#youtube" data-toggle="tab">YouTube</a></li>
  <li><a href="#facebook" data-toggle="tab">Facebook</a></li>
</ul>

<!-- Tab panes -->
<div class="tab-content">
  <div class="tab-pane active" id="home">You can help us in many ways.</div>
  <div class="tab-pane" id="donate">donate</div>
  <div class="tab-pane" id="youtube">subscribe</div>
  <div class="tab-pane" id="facebook">asdasd<p>sada</p></div>
</div></div>
      </div>

    </div><!-- /.modal-content -->
  </div><!-- /.modal-dialog -->
</div><!-- /.modal -->
      <li class="dropdown">
        <a href="http://localhost/PIF456/latihanbootstrap/logout.php" class="dropdown-toggle" data-toggle="dropdown"><span class="glyphicon glyphicon-user"></span><b class="caret"></b></a>
        <ul class="dropdown-menu">
          <li class="disabled"><a href="http://localhost/PIF456/latihanbootstrap/logout.php">Tunggu!</a></li>
        </ul>
      </li>
    </ul>
    </div><!-- /.nav-collapse -->
</nav>';
?>