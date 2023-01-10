<?php
session_start();
 
if(!isset($_SESSION['usuario'])){
    header('Location: ?url=Login');
    exit;
} else{

    $NombreUsuario = $_SESSION['usuario'];
    $CorreoUsuario = $_SESSION['correo'];

}

?>

<!DOCTYPE html>
<html lang="es">

<body>

<!-- <div class="page-wrapper"> -->
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
            <!-- footer -->
            
            <!-- End footer -->
          
        </div>

        
        
</body>
   <!-- Chart JS -->
    <script src="public/js/lib/chart-js/Chart.bundle.js"></script>
    <script>
        ( function ( $ ) {
	"use strict";

	//Team chart
	var ctx = document.getElementById( "team-chart" );
	ctx.height = 150;
	var myChart = new Chart( ctx, {
		type: 'line',
		data: {
			labels: ["2007", "2008", "2009", "2010", "2011", "2012", "2013", "2014", "2015", "2016", "2017", "2018", "2019", "2020", "2021", "2022", "2023" ],
			type: 'line',
			defaultFontFamily: 'Montserrat',
			datasets: [ {
				data: [<?php echo $datosVista[7][0]; ?>, 
                        <?php echo $datosVista[8][0]; ?>, 
                        <?php echo $datosVista[9][0]; ?>, 
                        <?php echo $datosVista[10][0]; ?>,
                        <?php echo $datosVista[11][0]; ?>, 
                        <?php echo $datosVista[12][0]; ?>,
                        <?php echo $datosVista[13][0]; ?>,
                        <?php echo $datosVista[14][0]; ?>,
                        <?php echo $datosVista[15][0]; ?>,
                        <?php echo $datosVista[16][0]; ?>,
                        <?php echo $datosVista[17][0]; ?>,
                        <?php echo $datosVista[18][0]; ?>,
                        <?php echo $datosVista[19][0]; ?>,
                        <?php echo $datosVista[20][0]; ?>,
                        <?php echo $datosVista[21][0]; ?>],
				label: "Activos ingresados",
				backgroundColor: 'rgba(0,103,255,.15)',
				borderColor: 'rgba(0,103,255,0.5)',
				borderWidth: 3.5,
				pointStyle: 'circle',
				pointRadius: 5,
				pointBorderColor: 'transparent',
				pointBackgroundColor: 'rgba(0,103,255,0.5)',
                    }, ]
		},
		options: {
			responsive: true,
			tooltips: {
				mode: 'index',
				titleFontSize: 12,
				titleFontColor: '#000',
				bodyFontColor: '#000',
				backgroundColor: '#fff',
				titleFontFamily: 'Montserrat',
				bodyFontFamily: 'Montserrat',
				cornerRadius: 3,
				intersect: false,
			},
			legend: {
				display: false,
				position: 'top',
				labels: {
					usePointStyle: true,
					fontFamily: 'Montserrat',
				},


			},
			scales: {
				xAxes: [ {
					display: true,
					gridLines: {
						display: false,
						drawBorder: false
					},
					scaleLabel: {
						display: false,
						labelString: 'Month'
					}
                        } ],
				yAxes: [ {
					display: true,
					gridLines: {
						display: false,
						drawBorder: false
					},
					scaleLabel: {
						display: true,
						labelString: 'Valores'
					}
                        } ]
			},
			title: {
				display: false,
			}
		}
	} );} )( jQuery );

    </script>

</html>