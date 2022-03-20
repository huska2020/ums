
  <link rel="icon" type="image/x-icon" href="<?=base_url()?>assets/assets/img/favicon.ico"/>
    <!-- BEGIN GLOBAL MANDATORY STYLES -->
    <link href="https://fonts.googleapis.com/css?family=Quicksand:400,500,600,700&display=swap" rel="stylesheet">
    <link href="<?=base_url()?>assets/bootstrap/css/bootstrap.min.css" rel="stylesheet" type="text/css" />
    <link href="<?=base_url()?>assets/assets/css/plugins.css" rel="stylesheet" type="text/css" />
    <link href="<?=base_url()?>assets/plugins/perfect-scrollbar/perfect-scrollbar.css" rel="stylesheet" type="text/css" />
    <!-- END GLOBAL MANDATORY STYLES -->

    <!--  BEGIN CUSTOM STYLE FILE  -->
    <link rel="stylesheet" type="text/css" href="<?=base_url()?>assets/plugins/table/datatable/datatables.css">
    <link rel="stylesheet" type="text/css" href="<?=base_url()?>assets/plugins/table/datatable/dt-global_style.css">
    <link rel="stylesheet" type="text/css" href="<?=base_url()?>assets/assets/css/forms/theme-checkbox-radio.css">
    <link href="<?=base_url()?>assets/assets/css/apps/invoice-list.css" rel="stylesheet" type="text/css" />
    
    <div id="content" class="main-content">
            <div class="layout-px-spacing">
                <div class="row layout-top-spacing">
                
                    <div class="col-xl-10 col-lg-10 col-sm-10 layout-spacing">
                        <div class="widget-content widget-content-area br-6">
                            <?php echo form_open_multipart(site_url('Isibo/do_upload_ikira'));?>
                                <div class="form-group mb-4">
                                    <input type="text" name="name" class="form-control" id="exampleFormControlInput2" required="" placeholder="Izina Ry'igikorwa">
                                </div>
                                <div class="form-group mb-4">
                                    <input type="text" name="contact" class="form-control" id="exampleFormControlInput2" required="" placeholder="Contact/Address">
                                </div>
                                <div class="form-group mb-4">
                                    <select name="category" class="form-control" id="exampleFormControlInput2" required="">
                                        <option value="amashuri">amashuri</option>
                                        <option value="amavuriro">amavuriro</option>
                                        <option value="pharmacy">pharmacy</option>
                                        <option value="restaurent">restaurent</option>
                                        <option value="utubari">utubari</option>
                                        <option value="inganda">inganda</option>
                                        <option value="amasoko">amasoko</option>
                                        <option value=""></option>
                                        <option value=""></option>
                                        <option value=""></option>
                                        <option value=""></option>
                                        <option value=""></option>
                                        <option value=""></option>
                                    </select>
                                </div>

                                <div class="form-group mb-4">
                                    <textarea name="myTextarea" id="myTextarea"></textarea>
                                </div>
                                <div class="form-group mb-4 mt-3">
                                    <label style="color:#000;" for="exampleFormControlFile1">Ikirangwa(pdf*)</label>
                                    <input type="file" name="ufile" id="InputFile" accept="application/pdf">
                                </div>
                                <button class="btn btn-lg btn-primary btn-block" id="btn-submit" type="submit">Emeza</button>
                            </form>
                        </div>
                    </div>

                </div>
            </div>
         
        </div>
    
        <script src="<?=base_url()?>assets/assets/js/libs/jquery-3.1.1.min.js"></script>
 
    <!-- END GLOBAL MANDATORY SCRIPTS -->
    <script src="<?=base_url()?>assets/plugins/table/datatable/datatables.js"></script>
    <script src="<?=base_url()?>assets/assets/js/apps/invoice-list.js"></script>
   <?php
include('footer.php');
?>
<script src='<?=base_url()?>assets/tinymce/tinymce.min.js'></script>
<script type="text/javascript">
  tinymce.init({
      selector: '#myTextarea',
      branding: false
  });
</script>