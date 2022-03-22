<meta charset="utf-8">
    <!--  This file has been downloaded from bootdey.com @bootdey on twitter -->
    <!--  All snippets are MIT license http://bootdey.com/license -->

    <meta name="viewport" content="width=device-width, initial-scale=1">
	<script src="https://code.jquery.com/jquery-1.10.2.min.js"></script>
    <link rel="icon" type="image/x-icon" href="<?=base_url()?>assets/assets/img/favicon.ico"/>
    <link href="<?=base_url()?>assets/assets/css/loader.css" rel="stylesheet" type="text/css" />
    <script src="<?=base_url()?>assets/assets/js/loader.js"></script>
    <!-- BEGIN GLOBAL MANDATORY STYLES -->
    <link href="https://fonts.googleapis.com/css?family=Quicksand:400,500,600,700&display=swap" rel="stylesheet">
    <link href="<?=base_url()?>assets/bootstrap/css/bootstrap.min.css" rel="stylesheet" type="text/css" />
    <link href="<?=base_url()?>assets/assets/css/plugins.css" rel="stylesheet" type="text/css" />
	<script src="https://netdna.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
<link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css" rel="stylesheet">
<link rel="stylesheet" type="text/css" href="<?=base_url()?>assets/plugins/table/datatable/datatables.css">
    <link rel="stylesheet" type="text/css" href="<?=base_url()?>assets/plugins/table/datatable/dt-global_style.css">
    
<style type="text/css">

.social-feed-separated .social-avatar {
  float: left;
  padding: 0;
  
}
.social-feed-separated .social-avatar img {
  width: 52px;
  height: 52px;
  border: 1px solid #e7eaec;
}
.social-feed-separated .social-feed-box .social-avatar {
  padding: 15px 15px 0 15px;
  float: none;
}
.social-feed-box {
  /*padding: 15px;*/
  border: 1px solid #e7eaec;
  background: #fff;
  margin-bottom: 15px;
}
.article .social-feed-box {
  margin-bottom: 0;
  border-bottom: none;
}
.article .social-feed-box:last-child {
  margin-bottom: 0;
  border-bottom: 1px solid #e7eaec;
}
.article .social-feed-box p {
  font-size: 13px;
  line-height: 18px;
}
.social-action {
  margin: 15px;
}
.social-avatar {
  padding: 15px 15px 0 15px;
 
}
.social-comment .social-comment {
  margin-left: 45px;
}
.social-avatar img {
  height: 40px;
  border-radius:50px;
  width: 40px;
  margin-right: 10px;
}
.social-avatar .media-body a {
  font-size: 14px;
  display: block;
  
}
.social-body {
  padding: 15px;
}
.social-body img {
  margin-bottom: 10px;
  border-radius:5px;
  width:100%;
  border: 20px solid #F0F0F0;
  text-align:center;
  
}
.social-footer {
  border-top: 1px solid #e7eaec;
  padding: 10px 15px;
  background: #f9f9f9;
}
.social-footer .social-comment img {
  width: 32px;
  margin-right: 10px;
}
.social-comment:first-child {
  margin-top: 0;
}
.social-comment {
  margin-top: 15px;
}
.social-comment textarea {
  font-size: 12px;
}


.form-control, .single-line {
    background-color: #FFFFFF;
    background-image: none;
    border: 1px solid #e5e6e7;
    border-radius: 1px;
    color: inherit;
    display: block;
    padding: 6px 12px;
    transition: border-color 0.15s ease-in-out 0s, box-shadow 0.15s ease-in-out 0s;
    width: 100%;
    font-size: 14px;
}


.ibox {
  clear: both;
  margin-bottom: 25px;
  margin-top: 0;
  padding: 0;
}
.ibox.collapsed .ibox-content {
  display: none;
}
.ibox.collapsed .fa.fa-chevron-up:before {
  content: "\f078";
}
.ibox.collapsed .fa.fa-chevron-down:before {
  content: "\f077";
}
.ibox:after,
.ibox:before {
  display: table;
}
.ibox-title {
  -moz-border-bottom-colors: none;
  -moz-border-left-colors: none;
  -moz-border-right-colors: none;
  -moz-border-top-colors: none;
  background-color: #ffffff;
  border-color: #e7eaec;
  border-image: none;
  border-style: solid solid none;
  border-width: 3px 0 0;
  color: inherit;
  margin-bottom: 0;
  padding: 14px 15px 7px;
  min-height: 48px;
}
.ibox-content {
  background-color: #ffffff;
  color: inherit;
  padding: 15px 20px 20px 20px;
  border-color: #e7eaec;
  border-image: none;
  border-style: solid solid none;
  border-width: 1px 0;
}
.ibox-footer {
  color: inherit;
  border-top: 1px solid #e7eaec;
  font-size: 90%;
  background: #ffffff;
  padding: 10px 15px;
}


.panel {
    box-shadow: 0 2px 0 rgba(0,0,0,0.075);
    border-radius: 0;
    border: 0;
    margin-bottom: 15px;
}

.panel .panel-footer, .panel>:last-child {
    border-bottom-left-radius: 0;
    border-bottom-right-radius: 0;
}

.panel .panel-heading, .panel>:first-child {
    border-top-left-radius: 0;
    border-top-right-radius: 0;
}

.panel-body {
    padding: 25px 20px;
}

</style>
 <!--  BEGIN CONTENT AREA  -->
 <div id="content" class="main-content">
            <div class="layout-px-spacing">
                
                <div class="row layout-top-spacing" id="cancel-row">
                
                    <div class="col-xl-12 col-lg-12 col-sm-12  layout-spacing">
                        <div class="widget-content widget-content-area br-6">
                        <?php echo form_open_multipart(site_url('Isibo/do_upload_ibi'));?>
                                <div class="form-group mb-4">
                                    <input type="text" name="name" class="form-control" id="exampleFormControlInput2" required="" placeholder="Izina Ry'igikorwa">
                                </div>
                                <div class="form-group mb-4">
                                    <input type="text" name="contact" class="form-control" id="exampleFormControlInput2" required="" placeholder="Contact/Address">
                                </div>
                                <div class="form-group mb-4">
                                    <input type="text" name="owner" class="form-control" id="exampleFormControlInput2" required="" placeholder="Nyiri igikorwa">
                                </div>
                                <div class="form-group mb-4">
                                    <select name="category" class="form-control" id="exampleFormControlInput2" required="">
                                        <option value="amashuri" disabled selected>Hitamo Ubwoko Bw'igikorwa</option>
                                        <option value="amashuri">amashuri</option>  
                                        <option value="amavuriro">amavuriro</option>
                                        <option value="pharmacy">pharmacy</option>
                                        <option value="restaurent">restaurent</option>
                                        <option value="utubari">utubari</option>
                                        <option value="inganda">inganda</option>
                                        <option value="amasoko">amasoko</option>
                                        <option value="amaduka">amaduka</option>
                                        <option value="cooperative">cooperative</option>
                                        <option value="salon">salon</option>
                                        <option value="amabanki">amabanki</option>
                                        <option value="insengero">insengero</option>
                                        <option value="hoteli">hoteli</option>
                                    </select>
                                </div>
                                <div class="form-group mb-4">
                                    <input type="file" name="files[]" multiple/>
                                </div>

                                <div class="form-group mb-4">
                                    <textarea name="myTextarea" id="myTextarea"></textarea>
                                </div>
                                <button class="btn btn-lg btn-primary btn-block" id="btn-submit" type="submit">Emeza</button>
                            </form>
                        </div>
                    </div>

                </div>

                </div>
       
        </div>
   
       
  
    <script src="<?=base_url()?>assets/assets/js/custom.js"></script>
    <!-- END GLOBAL MANDATORY SCRIPTS -->

    <!-- BEGIN PAGE LEVEL SCRIPTS -->
    
    <script src='<?=base_url()?>assets/tinymce/tinymce.min.js'></script>
    <script type="text/javascript">
    tinymce.init({
        selector: '#myTextarea',
        branding: false
    });
    </script>
