<link href="<?=base_url()?>assets/assets/css/pages/privacy/privacy.css" rel="stylesheet" type="text/css" />

<div id="content" class="main-content">
        <div class="layout-px-spacing">



            <div id="privacyWrapper" class="">
                <div class="privacy-container">
                    <div class="privacyContent">

                        

                        <div class="privacy-content-container">
                            <?php
                            foreach ($data as $value) {
                                ?>

                                <section>
                                    <h5><?=$value->ibi_name?></h5> 
                                    <?=$value->ibi_desc?>
                            </section>
    
                                <section>
                                    
                                    <h5>Contact</h5>
    
                                    <p><?=$value->ibi_contact?></p>                                    
                                </section>
                                 <h5>AMAFOTO Y'IGIKORWAREMEZO</h5>
                                <a class="img-2" data-author="Samuel Rohl">
                                    <?php
                                    if (is_array($pic)) {
                                        
                                    foreach ($pic as $key) {
                                        ?>
                                        <img src="<?=base_url()?><?=$key->ibi_file_image?>" style="width:100%" alt="image-gallery">
                                        <?php
                                    }
                                    }else {
                                        ?>
                                        <center><h4>Nta Foto  zihari</h4></center>
                                        <?php
                                    }
                                    ?>
                                    </a>
                                <?php
                            }
                            ?>

                        </div>

                    </div>
                </div>
            </div>

        </div>


        <div class="footer-wrapper">
            <div class="footer-section f-section-1">
                <p class="">Copyright © 2021 <a target="_blank" href="https://designreset.com">DesignReset</a>, All rights reserved.</p>
            </div>
            <div class="footer-section f-section-2">
                <p class="">Coded with <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-heart"><path d="M20.84 4.61a5.5 5.5 0 0 0-7.78 0L12 5.67l-1.06-1.06a5.5 5.5 0 0 0-7.78 7.78l1.06 1.06L12 21.23l7.78-7.78 1.06-1.06a5.5 5.5 0 0 0 0-7.78z"></path></svg></p>
            </div>
        </div>
    </div>
