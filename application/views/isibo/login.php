

<script>
    var check = function() {
  if (document.getElementById('password').value ==
    document.getElementById('password2').value) {
    document.getElementById('message').style.color = 'green';
    document.getElementById('message').innerHTML = 'matching';
  } else {
    document.getElementById('message').style.color = 'red';
    document.getElementById('message').innerHTML = 'not matching';
  }
}
s

</script>
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <meta name="description" content="">
    <meta name="author" content="">
    <!-- Bootstrap core CSS -->
    <link href="<?=base_url()?>assets/asset/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
    <link href="<?=base_url()?>asset/css/ie10-viewport-bug-workaround.css" rel="stylesheet">
    <!-- Custom styles -->
    <link href="<?=base_url()?>assets/asset/multistepform/css/style.css" rel="stylesheet">
    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->



<div id="content" class="main-content">

<!-- MultiStep Form -->
<div class="row">
    <div  class="col-md-10 col-md-offset-1" >
        <form action="<?=base_url()?>Isibo/login" method="POST" enctype="multipart/form-data" id="msform">
            <!-- progressbar -->
        
            <!-- fieldsets -->
            <fieldset>
            <label>
                <?php
                if(@$data){
                    foreach(@$data as $row)
									{
                                        echo $row->username;
									}
                }else{
                    echo "";
                }
				?>
                </label>
                <h2 class="fs-title">uzuza neza ibisabwa</h2>
                <h3 class="fs-subtitle">Umwirondoro w'uhagarariye umuryango</h3>
                <input type="text" name="fname"/>
                <input type="text" name="lname"/>
                <input type="submit" name="save" value="login"/>
            </fieldset>
        </form>
        <!-- link to designify.me code snippets -->
    </div>
</div>
<!-- /.MultiStep Form -->


<!-- Bootstrap core JavaScript
================================================== -->
<!-- Placed at the end of the document so the pages load faster -->
<script src='http://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>
<script src='http://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.3/jquery.easing.min.js'></script>
<script>window.jQuery || document.write('<script src="../../assets/js/vendor/jquery.min.js"><\/script>')</script>
<script src="<?=base_url()?>assets/asset/bootstrap/js/bootstrap.min.js"></script>
<script src="<?=base_url()?>assets/asset/multistepform/js/msform.js"></script>
<!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
<script src="../../asset/js/ie10-viewport-bug-workaround.js"></script>