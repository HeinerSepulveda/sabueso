<?php 

require ('views/Header/index.php');

?>

<div class="page-wrapper">
        <!-- Page wrapper  -->
            <!-- Bread crumb -->
            <div class="row page-titles">
                <div class="col-md-5 align-self-center">
                    <h3 class="text-primary">Tablero de Activos</h3> </div>
                <div class="col-md-7 align-self-center">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="javascript:void(0)">Inicio</a></li>
                        <li class="breadcrumb-item active">Tablero</li>
                    </ol>
                </div>
            </div>
            <!-- End Bread crumb -->
            <!-- Container fluid  -->
            <div class="container-fluid">
                <!-- Start Page Content -->
                <div class="row">
                    <div class="col-md-4">
                        <div class="card p-30">
                            <div class="media">
                                <div class="media-left meida media-middle">
                                    <span><i class="fa fa-archive f-s-40 color-warning"></i></span>
                                </div>
                                <div class="media-body media-text-right">
                                    <h2><?php echo number_format($datosVista[0],0); ?></h2>
                                    <p class="m-b-0">Cantidad Activos</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="card p-30">
                            <div class="media">
                                <div class="media-left meida media-middle">
                                    <span><i class="fa fa-shopping-cart f-s-40 color-success"></i></span>
                                </div>
                                <div class="media-body media-text-right">
                                    <h2><?php echo number_format($datosVista[1],0); ?></h2>
                                    <p class="m-b-0">Valor Comercial</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="card p-30">
                            <div class="media">
                                <div class="media-left meida media-middle">
                                    <span><i class="fa fa-usd f-s-40 color-primary"></i></span>
                                </div>
                                <div class="media-body media-text-right">
                                    <h2><?php echo number_format($datosVista[2],0); ?></h2>
                                    <p class="m-b-0">Valor Total</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- <div class="col-md-3">
                        <div class="card p-30">
                            <div class="media">
                                <div class="media-left meida media-middle">
                                    <span><i class="fa fa-user f-s-40 color-danger"></i></span>
                                </div>
                                <div class="media-body media-text-right">
                                    <h2>847</h2>
                                    <p class="m-b-0">Usuarios</p>
                                </div>
                            </div>
                        </div>
                    </div> -->
                </div>

                <div class="row bg-white m-l-0 m-r-0 box-shadow ">

                    <!-- column -->
                    <div class="col-lg-8">
                        <div class="card">
                            <div class="card-body">
                                <h4 class="card-title">Entradas de activos por año</h4>
                                <div class="sales-chart">
                                    <canvas id="team-chart"></canvas>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- column -->

                    <!-- column -->
                    <div class="col-lg-4">
                        <div class="card">
                            <div class="card-body browser">
                                <p class="f-w-600">Responsable Activo<span class="pull-right"><?php echo $datosVista[3].'%'; ?></span></p>
                                <div class="progress ">
                                    <div role="progressbar" style="width: <?php echo $datosVista[3].'%'; ?>; height:8px;" class="progress-bar bg-danger wow animated progress-animated"> <span class="sr-only">60% Complete</span> </div>
                                </div>

                                <p class="m-t-30 f-w-600">Tipo de Activo<span class="pull-right"><?php echo $datosVista[4].'%'; ?></span></p>
                                <div class="progress">
                                    <div role="progressbar" style="width: <?php echo $datosVista[4].'%'; ?>; height:8px;" class="progress-bar bg-info wow animated progress-animated"> <span class="sr-only">60% Complete</span> </div>
                                </div>

                                <p class="m-t-30 f-w-600">Valor Comercial<span class="pull-right"><?php echo $datosVista[5].'%'; ?></span></p>
                                <div class="progress">
                                    <div role="progressbar" style="width: <?php echo $datosVista[5].'%'; ?>; height:8px;" class="progress-bar bg-success wow animated progress-animated"> <span class="sr-only">60% Complete</span> </div>
                                </div>

                                <p class="m-t-30 f-w-600">Valor Total<span class="pull-right"><?php echo $datosVista[6].'%'; ?></span></p>
                                <div class="progress">
                                    <div role="progressbar" style="width: <?php echo $datosVista[6].'%'; ?>; height:8px;" class="progress-bar bg-warning wow animated progress-animated"> <span class="sr-only">60% Complete</span> </div>
                                </div>
	
                            </div>
                        </div>
                    </div>
                    <!-- column -->
                </div>

            <!-- End Container fluid  -->
            
          
        </div>
        
        <!-- End Page wrapper  -->
    </div><?php require('views/Footer/index.php')?>
    
    <!-- End Wrapper -->
    <!-- All Jquery -->
    

<script src="public/js/lib/jquery/jquery.min.js"></script>

    <script>
    
    $(document).ready(function (){  
        
        $(".page-wrapper").load('?url=Content/DatosTablero');
        
    
    });
   
    </script>
    <!-- Bootstrap tether Core JavaScript -->
    <script src="public/js/lib/bootstrap/js/popper.min.js"></script>
    <script src="public/js/lib/bootstrap/js/bootstrap.min.js"></script>
    <!-- slimscrollbar scrollbar JavaScript -->
    <script src="public/js/jquery.slimscroll.js"></script>
    <!--Menu sidebar -->
    <script src="public/js/sidebarmenu.js"></script>
    <!--stickey kit -->
    <script src="public/js/lib/sticky-kit-master/dist/sticky-kit.min.js"></script>
 
    <script src="public/js/lib/datamap/d3.min.js"></script>
    <script src="public/js/lib/datamap/topojson.js"></script>
    <script src="public/js/lib/datamap/datamaps.world.min.js"></script>
    <script src="public/js/lib/datamap/datamap-init.js"></script>

    <script src="public/js/lib/weather/jquery.simpleWeather.min.js"></script>
    <script src="public/js/lib/weather/weather-init.js"></script>
    <script src="public/js/lib/owl-carousel/owl.carousel.min.js"></script>
    <script src="public/js/lib/owl-carousel/owl.carousel-init.js"></script>


    <script src="public/js/lib/chartist/chartist.min.js"></script>
    <script src="public/js/lib/chartist/chartist-plugin-tooltip.min.js"></script>
    <script src="public/js/lib/chartist/chartist-init.js"></script>
    <!--Custom JavaScript -->
    <script src="public/js/custom.min.js"></script>



</body>

</html>