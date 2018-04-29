<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="Content-type" content="text/html; charset=utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title><?php echo $title;?></title>

    <!-- Bootstrap Core CSS -->
<!--     <link href="<?php echo base_url('assets/admin_theme') ?>/vendor/bootstrap/css/bootstrap.min.css?v=<?php echo VERSION; ?>" rel="stylesheet">
 -->

 <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <!-- MetisMenu CSS -->
    <link href=".<?php echo base_url('assets/admin_theme') ?>/vendor/metisMenu/metisMenu.min.css?v=<?php echo VERSION; ?>" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="<?php echo base_url('assets/admin_theme') ?>/dist/css/sb-admin-2.css?v=<?php echo VERSION; ?>" rel="stylesheet">

    <!-- Morris Charts CSS -->
    <link href="<?php echo base_url('assets/admin_theme') ?>/vendor/morrisjs/morris.css?v=<?php echo VERSION; ?>" rel="stylesheet">

    <!-- Custom Fonts -->
    <link href="<?php echo base_url('assets/admin_theme') ?>/vendor/font-awesome/css/font-awesome.min.css?v=<?php echo VERSION; ?>" rel="stylesheet" type="text/css">

    <link rel="stylesheet" href="<?php echo base_url('assets/admin_theme')?>/vendor/datepicker/datepicker3.css?v=<?php echo VERSION; ?>">
    <link rel="stylesheet" href="<?php echo base_url('assets/admin_theme'); ?>/vendor/bootstrap-select/dist/css/bootstrap-select.css?v=<?php echo VERSION; ?>">
     <link rel="stylesheet" href="<?php echo base_url('assets/admin_theme/vendor') ?>/toastr/toastr.css?v=<?php echo VERSION; ?>">
    

    <link href="http://cdnjs.cloudflare.com/ajax/libs/summernote/0.8.9/summernote.css" rel="stylesheet">
    <link rel="stylesheet" href="<?php echo base_url('assets/admin_theme/vendor'); ?>/bootstrap-daterangepicker/daterangepicker.css?v=<?php echo VERSION; ?>">
    <?php if(isset($dt_js)){
        if($dt_js== true){ ?>
                <link rel="stylesheet" href="https://cdn.datatables.net/1.10.16/css/dataTables.bootstrap.min.css">
                <link rel="stylesheet" href="https://cdn.datatables.net/responsive/2.2.1/css/responsive.bootstrap.min.css">


      <?php  }
    }?>
    <?php foreach ($css as $css) :?>
    <link href="<?php echo base_url('assets/admin_theme/').$css.'?v='.VERSION ; ?>" rel="stylesheet" />
    <?php endforeach; ?>

    <link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/admin_theme')?>/vendor/datatables-plugins/buttons.dataTables.min.css?v=<?php echo VERSION; ?>">

      <link rel="stylesheet"
  href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.5.2/animate.min.css"
  integrity="sha384-OHBBOqpYHNsIqQy8hL1U+8OXf9hH6QRxi0+EODezv82DfnZoV7qoHAZDwMwEJvSw"
  crossorigin="anonymous">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->



</head>

<body> 
    <div id="wrapper">


        <!-- Navigation -->
        <nav class="navbar navbar-default navbar-static-top" role="navigation" style="margin-bottom: 0;">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="<?php echo base_url(); ?>">
                    <img src="<?php echo base_url('assets/img/logo.png') ?>" alt="" class="logo" style="height:30px;margin-top:-5px;">
                </a>
            </div>
            <!-- /.navbar-header -->

       <ul class="nav navbar-top-links navbar-right notifications-nav">
                <li class="dropdown ">
                    
                  
          
            <!--         <ul class="dropdown-menu dropdown-alerts">
                        <li>
                            <a href="#">
                                <div>
                                    <i class="fa fa-comment fa-fw"></i> New Comment
                                    <span class="pull-right text-muted small">4 minutes ago</span>
                                </div>
                            </a>
                        </li>
                        <li class="divider"></li>
                        <li>
                            <a href="#">
                                <div>
                                    <i class="fa fa-twitter fa-fw"></i> 3 New Followers
                                    <span class="pull-right text-muted small">12 minutes ago</span>
                                </div>
                            </a>
                        </li>
                        <li class="divider"></li>
                        <li>
                            <a href="#">
                                <div>
                                    <i class="fa fa-envelope fa-fw"></i> Message Sent
                                    <span class="pull-right text-muted small">4 minutes ago</span>
                                </div>
                            </a>
                        </li>
                        <li class="divider"></li>
                        <li>
                            <a href="#">
                                <div>
                                    <i class="fa fa-tasks fa-fw"></i> New Task
                                    <span class="pull-right text-muted small">4 minutes ago</span>
                                </div>
                            </a>
                        </li>
                        <li class="divider"></li>
                        <li>
                            <a href="#">
                                <div>
                                    <i class="fa fa-upload fa-fw"></i> Server Rebooted
                                    <span class="pull-right text-muted small">4 minutes ago</span>
                                </div>
                            </a>
                        </li>
                        <li class="divider"></li>
                        <li>
                            <a class="text-center" href="#">
                                <strong>See All Alerts</strong>
                                <i class="fa fa-angle-right"></i>
                            </a>
                        </li>
                    </ul> -->
                    <!-- /.dropdown-alerts -->
                </li>
               
                <li class="dropdown">
                    <a class="dropdown-toggle" data-toggle="dropdown" href="#">
                        <i class="fa fa-user fa-fw"></i> <i class="fa fa-caret-down"></i>
                    </a>
                    <ul class="dropdown-menu dropdown-user">
                       
                        <li><a href="<?php echo base_url('users/perfil'); ?>"><i class="fa fa-user fa-fw"></i>Perfil</a>
                        </li>
                        <li class="divider"></li>
                        <li><a href="<?php echo base_url('logout'); ?>"><i class="fa fa-sign-out fa-fw"></i> Salir</a>
                        </li>
                    </ul>
                    <!-- /.dropdown-user -->
                </li>
                <!-- /.dropdown -->
            </ul>
            <!-- /.navbar-top-links -->
                <!-- /.navbar-top-links -->
            <div class="navbar-default sidebar" role="navigation">
                <div class="sidebar-nav navbar-collapse">
                    <ul class="nav" id="side-menu">

                       



                         <li>
                            <a href="#"><i class="fa fa-truck fa-fw"></i> Gestion de Pedidos<span class="fa arrow"></span></a>
                            <ul class="nav nav-second-level">
                                  <li>
                            <a href="<?php echo base_url('welcome/index'); ?>"><i class="fa fa-dashboard fa-fw"></i> Solicitar Productos (OC)</a>
                        </li>
                                                       <li>
                            <a href="<?php echo base_url('solicitudes'); ?>"><i class="fa fa-shopping-cart fa-fw"></i> Administrar Solicitudes</a>
                        </li>
                       

                              </ul>
                          
                        </li> 
                        <li>
                            <a href="#"><i class="fa fa-truck fa-fw"></i> Gestion de Clientes<span class="fa arrow"></span></a>
                            <ul class="nav nav-second-level">
                               
                          <li>
                            <a href="<?php echo base_url('clientes'); ?>"><i class="fa fa-dashboard fa-fw"></i> Administrar Clientes</a>
                        </li>
                              </ul>




                        <!--     <ul class="nav nav-second-level">
                                  <li>
                            <a href="<?php echo base_url(); ?>"><i class="fa fa-dashboard fa-fw"></i> Solicitar Productos (OC)</a>
                        </li>
                                                       <li>
                            <a href="<?php echo base_url('solicitudes'); ?>"><i class="fa fa-shopping-cart fa-fw"></i> Administrar Solicitudes</a>
                        </li>
                       

                              </ul> -->
                          
                        </li>
                        <li>
                            <a href="#"><i class="fa fa-ticket fa-fw"></i>Gestion de Productos<span class="fa arrow"></span></a>
                            <ul class="nav nav-second-level">
                               
                          <li>
                            <a href="<?php echo base_url('sweets'); ?>"><i class="fa fa-dashboard fa-fw"></i> Administrar Productos</a>
                        </li>
                              </ul>
                          
                        </li> 

                        <li>
                            <a href="#"><i class="fa fa-users"></i> Administracion de Usuarios<span class="fa arrow"></span></a>
                            <ul class="nav nav-second-level">
                               
                          <li>
                            <a href="<?php echo base_url('users/nuevo'); ?>"><i class="fa fa-user-plus fa-fw"></i> Crear Usuario</a>
                        </li>
                              </ul>
                          
                        </li> 
                   
               
                    </ul>

<br><br><br><br><br><br><br><br><br><br><br><br> <center> <?php 
            echo date("d-m-Y"); 
            ?>  
        <script type="text/javascript">
            function startTime(){
                today=new Date();
                h=today.getHours();
                m=today.getMinutes();
                s=today.getSeconds();
                m=checkTime(m);
                s=checkTime(s);
                document.getElementById('reloj').innerHTML=h+":"+m+":"+s;
                t=setTimeout('startTime()',500);}
            function checkTime(i)
            {if (i<10) {i="0" + i;}return i;}
                window.onload=function(){startTime();}
            </script>
            <div id="reloj" style="font-size:20px;"></div> </center>


                </div>
                <!-- /.sidebar-collapse -->







            </div>
            <!-- /.navbar-static-side -->


                           









        </nav>

        <div id="page-wrapper">
            <div class="row">
                <div class="col-lg-12">
                    <!-- <h3 class="page-header"><?php echo $page_header; ?></h3> -->
                    
                        <div class="col-md-9"><h3 class="" style="margin-left:-16px;"><?php echo $page_header; ?></div>
                        <div class="col-md-3" >
                           
                            <div class="btn-group btn-group-xs pull-right" style="margin-right:-15px;margin-top: 10px;">
                                <?php if(isset($buttons)){
                                    echo $buttons; 
                                }?>
                        <a class="btn btn-sm btn-default " href="<?php echo base_url(); ?>" ><i class="fa fa-home"></i></a>
                            </div>
                        </div>
                    
                    <h3 class="page-header"></h3>
                </div>
                <!-- /.col-lg-12 -->
            </div>
            <!-- /.row -->
            <div class="row">
                <img src="<?php echo base_url(); ?>assets/img/ajax-loader.gif" id="loading-indicator" style="display:none" />
              <!-- PAGE CONTENT BEGINS -->
 <?php echo $contents;?>
 <!-- PAGE CONTENT ENDS -->

        </div>
        <!-- /#page-wrapper -->

    </div>
    <!-- /#wrapper -->



                   <!-- Modal -->
                            <div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                                <div class="modal-dialog">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                                            <h4 class="modal-title" id="myModalLabel">Modal title</h4>
                                        </div>
                                        <div class="modal-body">
                                            Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
                                        </div>
                                        <div class="modal-footer">
                                            <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                                            <button type="button" class="btn btn-primary">Save changes</button>
                                        </div>
                                    </div>
                                    <!-- /.modal-content -->
                                </div>
                                <!-- /.modal-dialog -->
                            </div>
                            <!-- /.modal -->

    <!-- jQuery -->
   <!-- <script src="<?php echo base_url('assets/admin_theme') ?>/vendor/jquery/jquery.min.js?v=<?php echo VERSION; ?>"></script> -->

   <script src="https://code.jquery.com/jquery-1.12.4.js"></script>

    <!-- Bootstrap Core JavaScript -->
<!--     <script src="<?php echo base_url('assets/admin_theme') ?>/vendor/bootstrap/js/bootstrap.min.js?v=<?php echo VERSION; ?>"></script> -->
      <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
      <script src="<?php echo base_url('assets/admin_theme') ?>/vendor/ajaxform/jquery.form.js?v=<?php echo VERSION; ?>"></script>
    <script src="<?php echo base_url('assets/admin_theme') ?>/dist/js/sb-admin-2.js?v=<?php echo VERSION; ?>"></script>
     <script src="<?php echo base_url('assets/admin_theme/vendor')?>/metisMenu/metisMenu.min.js?v=<?php echo VERSION; ?>"></script>
     <script src="<?php echo base_url('assets/admin_theme/vendor') ?>/jquery-validation/jquery.validate.js?v=<?php echo VERSION; ?>"></script>
     <script src="<?php echo base_url('assets/admin_theme/vendor') ?>/mask/jquery.mask.js?v=<?php echo VERSION; ?>"></script>
     <script src="<?php echo base_url('assets/admin_theme/vendor') ?>/toastr/toastr.min.js?v=<?php echo VERSION; ?>"></script>
     <script type="text/javascript" src="<?php echo base_url('assets/admin_theme/vendor')?>/timepicker/dist/wickedpicker.min.js?v=<?php echo VERSION; ?>"></script>
     <script type="text/javascript" src="<?php echo base_url('assets/admin_theme/vendor')?>/datepicker/bootstrap-datepicker.js?v=<?php echo VERSION; ?>"></script>
      <script type="text/javascript" src="<?php echo base_url('assets/admin_theme/vendor')?>/datepicker/locales/bootstrap-datepicker.es.js?v=<?php echo VERSION; ?>"></script>
     <script type="text/javascript" src="<?php echo base_url('assets/admin_theme/vendor')?>/bootstrap-select/dist/js/bootstrap-select.js?v=<?php echo VERSION; ?>"></script>

             <script src="<?php echo base_url('assets/admin_theme/vendor'); ?>/bootstrap-daterangepicker/moment.js?v=<?php echo VERSION; ?>"></script> 
        <script src="<?php echo base_url('assets/admin_theme/vendor'); ?>/bootstrap-daterangepicker/daterangepicker.js?v=<?php echo VERSION; ?>"></script> 
     <script src="<?php echo base_url('assets') ?>/kropsys.jquery.js" ></script>
     <script src="<?php echo base_url('assets')?>/global.js?v=<?php echo VERSION; ?>"></script>
         <script type="text/javascript" src="<?php echo base_url('assets/admin_theme/vendor')?>/snow/snowfall.jquery.min.js?v=<?php echo VERSION; ?>"></script>

         <script src="https://js.pusher.com/4.1/pusher.min.js"></script>
         <script src="<?php echo base_url('assets/admin_theme/vendor')?>/timeago/jquery.timeago.js?v=<?php echo VERSION; ?>" type="text/javascript"></script>

         <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>



        <script src="http://cdnjs.cloudflare.com/ajax/libs/summernote/0.8.9/summernote.js"></script> 
                <script src="<?php echo base_url('assets/admin_theme/vendor'); ?>/summernote/lang/summernote-es-ES.js?v=<?php echo VERSION; ?>"></script> 
 <script src="<?php echo base_url('assets/admin_theme/vendor'); ?>/cloneya/jquery-cloneya.js?v=<?php echo VERSION; ?>"></script> 


  <!-- CARGAR LOS JS DE DATATABLES -->
  <?php if(isset($dt_js)){
        if($dt_js === true) ?>
 
    
    <script src="https://cdn.datatables.net/1.10.16/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/1.10.16/js/dataTables.bootstrap.min.js"></script>
    <script src="https://cdn.datatables.net/responsive/2.2.1/js/dataTables.responsive.min.js"></script>
    <script src="https://cdn.datatables.net/responsive/2.2.1/js/responsive.bootstrap.min.js"></script>
  <script src="<?php echo base_url('assets/admin_theme/vendor') ?>/datatables-plugins/dataTables.buttons.min.js" ></script>
    <script src="<?php echo base_url('assets/admin_theme/vendor') ?>/datatables-plugins/buttons.bootstrap.min.js" ></script>
    <script src="<?php echo base_url('assets/admin_theme/vendor') ?>/datatables-plugins/jszip.min.js" ></script>
    <script src="<?php echo base_url('assets/admin_theme/vendor') ?>/datatables-plugins/pdfmake.min.js" ></script>
    <script src="<?php echo base_url('assets/admin_theme/vendor') ?>/datatables-plugins/vfs_fonts.js" ></script>
    <script src="<?php echo base_url('assets/admin_theme/vendor') ?>/datatables-plugins/buttons.html5.min.js" ></script>
    <script src="<?php echo base_url('assets/admin_theme/vendor') ?>/datatables-plugins/buttons.print.min.js" ></script>



  <?php 
}
  ?>
 
 <?php foreach ($scripts as $js) :?>
        <script src="<?php echo base_url('assets/admin_theme/').$js.'?v='.VERSION; ?>"></script>
    <?php endforeach; ?>

</body>

</html>