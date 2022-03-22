<!DOCTYPE html>
<html lang="en">
<head>
    <style>
        .test {
            position:fixed;
            right:0;
        align-content:center;
        justify-content:center;
        text-align:center;
        margin-top:-20px;
        width:21%;
        }
        @media (max-width: 1200px) {
  .test {
    position:relative;
    width:100%;
  }
}


        </style>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, shrink-to-fit=no">
    <title>UMS</title>
    <script src='https://kit.fontawesome.com/a076d05399.js' crossorigin='anonymous'></script>
    <link rel="icon" type="image/x-icon" href="assets/img/favicon.ico"/>
    <link href="<?=base_url()?>assets/assets/css/loader.css" rel="stylesheet" type="text/css" />
    <script src="<?=base_url()?>assets/assets/js/loader.js"></script>
    <link href="<?=base_url()?>assets//css/apps/mailing-chat.css" rel="stylesheet" type="text/css" />
    <!-- BEGIN GLOBAL MANDATORY STYLES -->
    <link href="https://fonts.googleapis.com/css?family=Quicksand:400,500,600,700&display=swap" rel="stylesheet">
    <link href="<?=base_url()?>assets/bootstrap/css/bootstrap.min.css" rel="stylesheet" type="text/css" />
    <link href="<?=base_url()?>assets/assets/css/plugins.css" rel="stylesheet" type="text/css" />
    <!-- END GLOBAL MANDATORY STYLES -->
    <link rel="stylesheet" type="text/css" href="<?=base_url()?>assets/assets/css/widgets/modules-widgets.css">  
    <!-- BEGIN PAGE LEVEL PLUGINS/CUSTOM STYLES -->
    <link href="<?=base_url()?>assets/plugins/apex/apexcharts.css" rel="stylesheet" type="text/css">
    <link href="<?=base_url()?>assets/assets/css/dashboard/dash_2.css" rel="stylesheet" type="text/css" />
    <!-- END PAGE LEVEL PLUGINS/CUSTOM STYLES -->
    <link href="<?=base_url()?>assets/assets/css/components/custom-media_object.css" rel="stylesheet" type="text/css" />
    <link href="<?=base_url()?>assets/assets/css/scrollspyNav.css" rel="stylesheet" type="text/css" />
    <link href="<?=base_url()?>assets/assets/css/components/custom-carousel.css" rel="stylesheet" type="text/css" />


    <!--  BEGIN CUSTOM STYLE FILE  -->
    <link href="<?=base_url()?>assets/css/scrollspyNav.css" rel="stylesheet" type="text/css" />
    <link rel="stylesheet" type="text/css" href="<?=base_url()?>plugins/editors/quill/quill.snow.css">
    <!--  END CUSTOM STYLE FILE  -->

</head>
<body>
    <!-- BEGIN LOADER -->
    <div id="load_screen"> <div class="loader"> <div class="loader-content">
        <div class="spinner-grow align-self-center"></div>
    </div></div></div>
    <!--  END LOADER -->

    <!--  BEGIN NAVBAR  -->
    <div class="header-container fixed-top"  style="background-color:#fff" >
        <header style="background-color:#fff; color:#000" class="header navbar navbar-expand-sm">
            
            <ul style="background:#F0F0F0;color:#000" class="navbar-nav theme-brand flex-row  text-center">
                <li class="nav-item theme-logo" >
                    <a href=""  >
                        <img style="border-radius:50px"  src="<?=base_url()?>assets/assets/img/dadoh.png" class="navbar-logo" alt="logo">
                    </a>
                </li>
                <li class="nav-item theme-text" >
                    <a href="<?=base_url()?>isibo/" style="font-size:14px;color:#000" class="nav-link"> Dadoh Bernard </a>
                </li>
                <li class="nav-item toggle-sidebar">
                    <a href="javascript:void(0);"  style="color:#000" class="sidebarCollapse" data-placement="bottom">
                    <i class="fa fa-bars" aria-hidden="true"></i></a>
                </li>
</ul>

            <ul class="navbar-item flex-row navbar-dropdown" style="background-color:#fff; color:#000">
                <li class="nav-item dropdown apps-dropdown more-dropdown md-hidden" style="background-color:#fff; color:#000">
                    <div class="dropdown  custom-dropdown-icon" style="background-color:#fff; color:#000">
                        <a class="dropdown-toggle btn" style="background-color:#CED4F3; color:#000" href="#" role="button" id="appSection" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-crosshair"><circle cx="12" cy="12" r="10"></circle><line x1="22" y1="12" x2="18" y2="12"></line><line x1="6" y1="12" x2="2" y2="12"></line><line x1="12" y1="6" x2="12" y2="2"></line><line x1="12" y1="22" x2="12" y2="18"></line></svg><span>Ikaze</span> <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-chevron-down"><polyline points="6 9 12 15 18 9"></polyline></svg></a>

						<div class="dropdown-menu dropdown-menu-right" aria-labelledby="appSection">
						<a href="<?=base_url()?>isibo/ibikorwa"><i class="fas fa-plus" style="font-size:13px;color:blue;padding-left:0px"><span style="color:#000; padding-left:10px">Igikorwa Gishya<span></i>  </a><hr>
						<a href="<?=base_url()?>isibo/amashuri"><i class="fas fa-graduation-cap" style="font-size:16px;color:blue;padding-left:0px"><span style="color:#000; padding-left:10px">Amashuri<span></i>  </a>
						<a href="<?=base_url()?>isibo/amavuriro"><i class="fas fa-hospital" style="font-size:16px;color:orange;padding-left:0px"><span style="color:#000; padding-left:10px">Amavuriro<span></i>      </a>
						<a href="<?=base_url()?>isibo/pharmacy"><i class="fas fa-plus-square" style="font-size:16px;color:green;padding-left:0px"><span style="color:#000; padding-left:10px">Pharmacy<span></i>     </a>
						<a href="<?=base_url()?>isibo/restaurent"><i class="fas fa-hamburger" style="font-size:16px;color:#E85959;padding-left:0px"><span style="color:#000; padding-left:10px">Restaurent<span></i>    </a>
						<a href="<?=base_url()?>isibo/utubari"><i class="fas fa-glass-cheers" style="font-size:16px;color:#F17421;padding-left:0px"><span style="color:#000; padding-left:10px">Utubari<span></i>    </a>
						<a href="<?=base_url()?>isibo/inganda"><i class="fas fa-industry" style="font-size:16px;color:blue;padding-left:0px"><span style="color:#000; padding-left:10px">Inganda<span></i>            </a>
						<a href="<?=base_url()?>isibo/amasoko"><i class="fas fa-store" style="font-size:16px;color:#82C91E;padding-left:0px"><span style="color:#000; padding-left:10px">Amasoko<span></i>            </a>
						<a href="<?=base_url()?>isibo/amaduka"><i class="fas fa-store-alt" style="font-size:16px;color:blue;padding-left:0px"><span style="color:#000; padding-left:10px">Amaduka<span></i>           </a>
						<a href="<?=base_url()?>isibo/cooperative"><i class="fas fa-store-alt" style="font-size:16px;color:blue;padding-left:0px"><span style="color:#000; padding-left:10px">cooperative<span></i>   </a>
						<a href="<?=base_url()?>isibo/salon_de_coiffure"><i class="fas fa-store-alt" style="font-size:16px;color:blue;padding-left:0px"><span style="color:#000; padding-left:10px">Salon<span></i></a>
						<a href="<?=base_url()?>isibo/amabanki"><i class="fas fa-store-alt" style="font-size:16px;color:blue;padding-left:0px"><span style="color:#000; padding-left:10px">Amabanki<span></i>   </a>
						<a href="<?=base_url()?>isibo/insengero"><i class="fas fa-store-alt" style="font-size:16px;color:blue;padding-left:0px"><span style="color:#000; padding-left:10px">insengero<span></i>   </a>
						<a href="<?=base_url()?>isibo/hoteli"><i class="fas fa-store-alt" style="font-size:16px;color:blue;padding-left:0px"><span style="color:#000; padding-left:10px">hoteli<span></i>   </a>

						
                           <!--<a class="dropdown-item" data-value="Mailbox" href="apps_mailbox.html"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-mail"><path d="M4 4h16c1.1 0 2 .9 2 2v12c0 1.1-.9 2-2 2H4c-1.1 0-2-.9-2-2V6c0-1.1.9-2 2-2z"></path><polyline points="22,6 12,13 2,6"></polyline></svg> Mailbox</a>
                            <a class="dropdown-item" data-value="Todo" href="apps_todoList.html"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-edit"><path d="M11 4H4a2 2 0 0 0-2 2v14a2 2 0 0 0 2 2h14a2 2 0 0 0 2-2v-7"></path><path d="M18.5 2.5a2.121 2.121 0 0 1 3 3L12 15l-4 1 1-4 9.5-9.5z"></path></svg> Todo List</a>
                            <a class="dropdown-item" data-value="Notes" href="apps_notes.html"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-file-text"><path d="M14 2H6a2 2 0 0 0-2 2v16a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V8z"></path><polyline points="14 2 14 8 20 8"></polyline><line x1="16" y1="13" x2="8" y2="13"></line><line x1="16" y1="17" x2="8" y2="17"></line><polyline points="10 9 9 9 8 9"></polyline></svg> Notes</a>
                            <a class="dropdown-item" data-value="Scrumboard" href="apps_scrumboard.html"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-file-plus"><path d="M14 2H6a2 2 0 0 0-2 2v16a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V8z"></path><polyline points="14 2 14 8 20 8"></polyline><line x1="12" y1="18" x2="12" y2="12"></line><line x1="9" y1="15" x2="15" y2="15"></line></svg> Scrumboard</a>
                            <a class="dropdown-item" data-value="Contacts" href="apps_contacts.html"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-map-pin"><path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0 1 18 0z"></path><circle cx="12" cy="10" r="3"></circle></svg> Contacts</a>
                           
                             <div class="dropdown-item-collapsable">
                                <a class="dropdown-item" data-value="Invoice" data-toggle="collapse" role="button" aria-expanded="false" aria-controls="collapseExample">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-dollar-sign"><line x1="12" y1="1" x2="12" y2="23"></line><path d="M17 5H9.5a3.5 3.5 0 0 0 0 7h5a3.5 3.5 0 0 1 0 7H6"></path></svg> Invoice <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-chevron-down"><polyline points="6 9 12 15 18 9"></polyline></svg>
                                </a>
                                <div class="collapse" id="collapseExample">
                                    <ul>
                                        <li>
                                            <a data-value="Invoice List" href="apps_invoice-list.html"> List </a>
                                        </li>
                                        <li>
                                            <a data-value="Invoice Preview" href="apps_invoice-preview.html"> Preview </a>
                                        </li>
                                        <li>
                                            <a data-value="Invoice Add" href="apps_invoice-add.html"> Add </a>
                                        </li>
                                        <li>
                                            <a data-value="Invoice Edit" href="apps_invoice-edit.html"> Edit </a>
                                        </li>  
                                    </ul>
                                </div>
                            </div>                            
                            <a class="dropdown-item" data-value="Calendar" href="apps_calendar.html"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-calendar"><rect x="3" y="4" width="18" height="18" rx="2" ry="2"></rect><line x1="16" y1="2" x2="16" y2="6"></line><line x1="8" y1="2" x2="8" y2="6"></line><line x1="3" y1="10" x2="21" y2="10"></line></svg> Calendar</a> -->
                        </div>
                    </div>
                </li>
            </ul>
            <ul class="navbar-item flex-row navbar-dropdown" style="background-color:transparent; color:#000">
                <li class="nav-item dropdown apps-dropdown more-dropdown md-hidden" style="background-color:#fff; color:#000">
                    <div class="dropdown  custom-dropdown-icon" style="background-color:transparent; color:#fff">
                    <a class="btn btn-trans btn-icon  add-tooltip" style="color:black; background-color:#fff; box-shadow: none; margin:1px;" href="<?=base_url()?>isibo/amaduka" data-original-title="Reba Amaduka" data-toggle="tooltip"><b style="font-family: Roboto, 'Segoe UI', Tahoma, sans-serif;"><span class="fas fa-store-alt" style="font-size:28px"></span> </b></a>
                        <div class="dropdown-menu dropdown-menu-right" aria-labelledby="appSection">

                        </div>
                    </div>
                </li>
            </ul>
            <ul class="navbar-item flex-row navbar-dropdown" style="background-color:transparent; color:#000">
                <li class="nav-item dropdown apps-dropdown more-dropdown md-hidden" style="background-color:#fff; color:#000">
                    <div class="dropdown  custom-dropdown-icon" style="background-color:transparent; color:#fff">
                    <a class="btn btn-trans btn-icon add-tooltip" style="color:black; background-color:#fff; box-shadow: none; margin:1px" href="<?=base_url()?>isibo/imihigo" data-original-title="Add Photo" data-toggle="tooltip"><b style="font-family: Roboto, 'Segoe UI', Tahoma, sans-serif;"><span class="fa fa-trophy" style="font-size:32px"></span> </b></a>
                        <div class="dropdown-menu dropdown-menu-right" aria-labelledby="appSection">

                        </div>
                    </div>
                </li>
            </ul>
            <ul class="navbar-item flex-row navbar-dropdown" style="background-color:transparent; color:#000">
                <li class="nav-item dropdown apps-dropdown more-dropdown md-hidden" style="background-color:#fff; color:#000">
                    <div class="dropdown  custom-dropdown-icon" style="background-color:transparent; color:#fff">
                    <a class="btn btn-trans btn-icon add-tooltip" style="color:black; background-color:#fff; box-shadow: none; margin:1px" href="<?=base_url()?>isibo/igiceri" data-original-title="Add Photo" data-toggle="tooltip"><b style="font-family: Roboto, 'Segoe UI', Tahoma, sans-serif;"><span class="fas fa-wallet" style="font-size:28px"></span> </b></a>
                        <div class="dropdown-menu dropdown-menu-right" aria-labelledby="appSection">

                        </div>
                    </div>
                </li>
            </ul>

            <!-- <ul class="navbar-item flex-row navbar-dropdown" style="background-color:transparent; color:#000">
                <li class="nav-item dropdown apps-dropdown more-dropdown md-hidden" style="background-color:#fff; color:#000">
                    <div class="dropdown  custom-dropdown-icon" style="background-color:transparent; color:#fff">
                    <a class="btn btn-trans btn-icon add-tooltip" style="color:blue; background-color:#fff; box-shadow: none; margin:1px" href="<?=base_url()?>isibo/chat" data-original-title="Add Photo" data-toggle="tooltip"><b style="font-family: Roboto, 'Segoe UI', Tahoma, sans-serif;"><span class="fas fa-comment-alt" style="font-size:28px; font-weight:bold"></span> </b></a>
                        <div class="dropdown-menu dropdown-menu-right" aria-labelledby="appSection">

                        </div>
                    </div>
                </li>
            </ul> -->
            <!-- <ul class="navbar-item flex-row navbar-dropdown" style="background-color:transparent; color:#000">
                <li class="nav-item dropdown apps-dropdown more-dropdown md-hidden" style="background-color:#F0F0F0; color:#000">
                    <div class="dropdown  custom-dropdown-icon" style="background-color:transparent; color:#fff">
                    <a class="btn btn-trans btn-icon fa fa-camera add-tooltip" style="color:blue; margin:1px" href="#" data-original-title="Add Photo" data-toggle="tooltip"> Amafoto</a>
                        <div class="dropdown-menu dropdown-menu-right" aria-labelledby="appSection">

                        </div>
                    </div>
                </li>
            </ul> -->

            <ul class="navbar-item flex-row search-ul">
                <li class="nav-item align-self-center search-animated">
                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-search toggle-search"><circle cx="11" cy="11" r="8"></circle><line x1="21" y1="21" x2="16.65" y2="16.65"></line></svg>
                    <form class="form-inline search-full form-inline search" role="search">
                        <div class="search-bar">
                            <input type="text"  style="background-color:#fff; width:100%" class="form-control search-form-control  ml-lg-auto" placeholder="Search...">
                        </div>
                    </form>
                </li>
            </ul>
            <ul class="navbar-item flex-row navbar-dropdown">
                <li class="nav-item dropdown language-dropdown more-dropdown">
                    <div class="dropdown  custom-dropdown-icon">
                        <a  style="background-color:#CED4F3; color:#000" class="dropdown-toggle btn" href="#" role="button" id="langDropdown" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><img src="assets/img/ca.png" class="flag-width" alt="flag"><span>English</span> <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-chevron-down"><polyline points="6 9 12 15 18 9"></polyline></svg></a>

                        <div class="dropdown-menu dropdown-menu-right" aria-labelledby="langDropdown">
                            <a class="dropdown-item" data-img-value="jp" data-value="Japanese" href="javascript:void(0);"><img src="<?=base_url()?>assets/assets/img/jp.png" class="flag-width" alt="flag"> Kinyarwanda</a>
                            <a class="dropdown-item" data-img-value="fr" data-value="French" href="javascript:void(0);"><img src="<?=base_url()?>assets/assets/img/fr.png" class="flag-width" alt="flag"> French</a>
                            <a class="dropdown-item" data-img-value="ca" data-value="English" href="javascript:void(0);"><img src="<?=base_url()?>assets/assets/img/ca.png" class="flag-width" alt="flag"> English</a>
                        </div>
                    </div>
                </li>
                
                <li class="nav-item dropdown message-dropdown">
                    <a href="javascript:void(0);" class="nav-link dropdown-toggle" id="messageDropdown" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    <i class='fas fa-comment-dots' style='font-size:26px;color:green'></i>
                    </a>
                    <div class="dropdown-menu p-0 position-absolute" aria-labelledby="messageDropdown" >
                        <div class="" >
                            <a class="dropdown-item" >
                                <div class="">

                                    <div class="media" >
                                        <div class="user-img">
                                            <div class="avatar avatar-xl">
                                                <span class="avatar-title rounded-circle">KY</span>
                                            </div>
                                        </div>
                                        <div class="media-body">
                                            <div class="">
                                                <h5 class="usr-name">Kara Young</h5>
                                                <p class="msg-title">ACCOUNT UPDATE</p>
                                            </div>
                                        </div>
                                    </div>

                                </div>
                            </a>
                            <a class="dropdown-item">
                                <div class="">
                                    <div class="media">
                                        <div class="user-img">
                                            <div class="avatar avatar-xl">
                                                <span class="avatar-title rounded-circle">DA</span>
                                            </div>
                                        </div>
                                        <div class="media-body">
                                            <div class="">
                                                <h5 class="usr-name">Daisy Anderson</h5>
                                                <p class="msg-title">ACCOUNT UPDATE</p>
                                            </div>
                                        </div>
                                    </div>                                    
                                </div>
                            </a>
                            <a class="dropdown-item">
                                <div class="">

                                    <div class="media">
                                        <div class="user-img">
                                            <div class="avatar avatar-xl">
                                                <span class="avatar-title rounded-circle">OG</span>
                                            </div>
                                        </div>
                                        <div class="media-body">
                                            <div class="">
                                                <h5 class="usr-name">Oscar Garner</h5>
                                                <p class="msg-title">ACCOUNT UPDATE</p>
                                            </div>
                                        </div>
                                    </div>
                                    
                                </div>
                            </a>
                        </div>
                    </div>
                </li>

                <li class="nav-item dropdown notification-dropdown">
                    <a href="javascript:void(0);" class="nav-link dropdown-toggle" id="notificationDropdown" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    <i class="fa fa-bell" style="font-size:26px;color:red"></i>
                    </a>
                    <div class="dropdown-menu position-absolute" aria-labelledby="notificationDropdown">
                        <div class="notification-scroll">

                            <div class="dropdown-item">
                                <div class="media server-log">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-server"><rect x="2" y="2" width="20" height="8" rx="2" ry="2"></rect><rect x="2" y="14" width="20" height="8" rx="2" ry="2"></rect><line x1="6" y1="6" x2="6" y2="6"></line><line x1="6" y1="18" x2="6" y2="18"></line></svg>
                                    <div class="media-body">
                                        <div class="data-info">
                                            <h6 class="">Server Rebooted</h6>
                                            <p class="">45 min ago</p>
                                        </div>

                                        <div class="icon-status">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-x"><line x1="18" y1="6" x2="6" y2="18"></line><line x1="6" y1="6" x2="18" y2="18"></line></svg>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="dropdown-item">
                                <div class="media ">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-heart"><path d="M20.84 4.61a5.5 5.5 0 0 0-7.78 0L12 5.67l-1.06-1.06a5.5 5.5 0 0 0-7.78 7.78l1.06 1.06L12 21.23l7.78-7.78 1.06-1.06a5.5 5.5 0 0 0 0-7.78z"></path></svg>
                                    <div class="media-body">
                                        <div class="data-info">
                                            <h6 class="">Licence Expiring Soon</h6>
                                            <p class="">8 hrs ago</p>
                                        </div>

                                        <div class="icon-status">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-x"><line x1="18" y1="6" x2="6" y2="18"></line><line x1="6" y1="6" x2="18" y2="18"></line></svg>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="dropdown-item">
                                <div class="media file-upload">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-file-text"><path d="M14 2H6a2 2 0 0 0-2 2v16a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V8z"></path><polyline points="14 2 14 8 20 8"></polyline><line x1="16" y1="13" x2="8" y2="13"></line><line x1="16" y1="17" x2="8" y2="17"></line><polyline points="10 9 9 9 8 9"></polyline></svg>
                                    <div class="media-body">
                                        <div class="data-info">
                                            <h6 class="">Kelly Portfolio.pdf</h6>
                                            <p class="">670 kb</p>
                                        </div>

                                        <div class="icon-status">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-check"><polyline points="20 6 9 17 4 12"></polyline></svg>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </li>

                <li class="nav-item dropdown user-profile-dropdown  order-lg-0 order-1">
                    <a href="javascript:void(0);" class="nav-link dropdown-toggle user" id="userProfileDropdown" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    <i class="fa fa-gear" style="font-size:26px;color:blue"></i>                    </a>
                    <div class="dropdown-menu position-absolute" aria-labelledby="userProfileDropdown">
                        <div class="user-profile-section">
                            <div class="media mx-auto">
                                <img src="assets/img/90x90.jpg" class="img-fluid mr-2" alt="avatar">
                                <div class="media-body">
                                    <h5>Sonia Shaw</h5>
                                    <p>Project Leader</p>
                                </div>
                            </div>
                        </div>
                        <div class="dropdown-item">
                            <a href="user_profile.html">
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-user"><path d="M20 21v-2a4 4 0 0 0-4-4H8a4 4 0 0 0-4 4v2"></path><circle cx="12" cy="7" r="4"></circle></svg> <span>My Profile</span>
                            </a>
                        </div>
                        <div class="dropdown-item">
                            <a href="apps_mailbox.html">
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-inbox"><polyline points="22 12 16 12 14 15 10 15 8 12 2 12"></polyline><path d="M5.45 5.11L2 12v6a2 2 0 0 0 2 2h16a2 2 0 0 0 2-2v-6l-3.45-6.89A2 2 0 0 0 16.76 4H7.24a2 2 0 0 0-1.79 1.11z"></path></svg> <span>My Inbox</span>
                            </a>
                        </div>
                        <div class="dropdown-item">
                            <a href="auth_lockscreen.html">
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-lock"><rect x="3" y="11" width="18" height="11" rx="2" ry="2"></rect><path d="M7 11V7a5 5 0 0 1 10 0v4"></path></svg> <span>Lock Screen</span>
                            </a>
                        </div>
                        <div class="dropdown-item">
                            <a href="<?php echo base_url();?>Logout">
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-log-out"><path d="M9 21H5a2 2 0 0 1-2-2V5a2 2 0 0 1 2-2h4"></path><polyline points="16 17 21 12 16 7"></polyline><line x1="21" y1="12" x2="9" y2="12"></line></svg> <span>Log Out</span>
                            </a>
                        </div>
                    </div>
                </li>
            </ul>
        </header>
    </div>

