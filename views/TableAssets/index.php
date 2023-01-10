<?php 

require ('views/Header/index.php');

?>

        <!-- Page wrapper  -->
        <div class="page-wrapper">
            <!-- Bread crumb -->
            <div class="row page-titles">
                <div class="col-md-5 align-self-center">
                    <h3 class="text-primary">Inventario Activos</h3> </div>
                <div class="col-md-7 align-self-center">
                <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="javascript:void(0)">Activos</a></li>
                        <li class="breadcrumb-item active">Ver Activos</li>
                    </ol>
                </div>
            </div>
            <!-- End Bread crumb -->
            <!-- Container fluid  -->
            <div class="container-fluid">
                <!-- Start Page Content -->
                <div class="row">
                    <div class="col-12">
                        <div class="card">
                            <div class="card-body">
                                <h4 class="card-title">Inventario Activos</h4>
                                <h6 class="card-subtitle">Exportar datos: Copiar, CSV, Excel, PDF e Imprimir</h6>
                                <div class="table-responsive m-t-40">
                                    <table id="example23" class="display nowrap table table-hover table-bordered" cellspacing="0" width="100%">
                                        <thead>
                                            <tr>
                                                <th>Año</th>
                                                <th>Fecha Inv</th>
                                                <th>Articulo</th>
                                                <th>Responsable</th>
                                                <th>Tipo Articulo</th>
                                                <th>Cantidad</th>
                                                <th>Valor Comercial</th>
                                                <th>Valor Total</th>
                                            </tr>
                                        </thead>
                                        <!-- <tfoot>
                                            
                                        </tfoot> -->
                                        <tbody>
                                           
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                        
                        
                    </div>
                </div>

                <!-- End PAge Content -->
            </div>
            <!-- End Container fluid  -->
            <!-- footer -->
            <footer class="footer"> © 2023 Reservados todos los derechos. <a href="#"></a></footer>
            <!-- End footer -->
        </div>
        <!-- End Page wrapper  -->
    </div>
    <!-- End Wrapper -->
    <!-- All Jquery -->
    <script src="public/js/lib/jquery/jquery.min.js"></script>
    <!-- Bootstrap tether Core JavaScript -->
    <script src="public/js/lib/bootstrap/js/bootstrap.min.js"></script>
    <!-- slimscrollbar scrollbar JavaScript -->
    <script src="public/js/jquery.slimscroll.js"></script>
    <!--Menu sidebar -->
    <script src="public/js/sidebarmenu.js"></script>
    <!--stickey kit -->
    <script src="public/js/lib/sticky-kit-master/dist/sticky-kit.min.js"></script>
    <!--Custom JavaScript -->
    <script src="public/js/custom.min.js"></script>

    <!--Datatables -->

    <script src="public/js/lib/datatables/datatables.min.js"></script>
    <script src="public/js/lib/datatables/cdn.datatables.net/buttons/1.2.2/js/dataTables.buttons.min.js"></script>
    <script src="public/js/lib/datatables/cdn.datatables.net/buttons/1.2.2/js/buttons.flash.min.js"></script>
    <script src="public/js/lib/datatables/cdnjs.cloudflare.com/ajax/libs/jszip/2.5.0/jszip.min.js"></script>
    <script src="public/js/lib/datatables/cdn.rawgit.com/bpampuch/pdfmake/0.1.18/build/pdfmake.min.js"></script>
    <script src="public/js/lib/datatables/cdn.rawgit.com/bpampuch/pdfmake/0.1.18/build/vfs_fonts.js"></script>
    <script src="public/js/lib/datatables/cdn.datatables.net/buttons/1.2.2/js/buttons.html5.min.js"></script>
    <script src="public/js/lib/datatables/cdn.datatables.net/buttons/1.2.2/js/buttons.print.min.js"></script>
    <script src="public/js/lib/datatables/datatables-init.js"></script>
    

</body>

</html>