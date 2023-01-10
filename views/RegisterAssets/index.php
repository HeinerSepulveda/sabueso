<?php 

require ('views/Header/index.php');

?>

        <!-- Page wrapper  -->
        <div class="page-wrapper">
            <!-- Bread crumb -->
            <div class="row page-titles">
                <div class="col-md-5 align-self-center">
                    <h3 class="text-primary">Registro de Activos</h3> </div>
                <div class="col-md-7 align-self-center">
                <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="javascript:void(0)">Activos</a></li>
                        <li class="breadcrumb-item active">Registrar Activos</li>
                    </ol>
                </div>
            </div>
            <!-- End Bread crumb -->
            <!-- Container fluid  -->
            <div class="container-fluid">
                <!-- Start Page Content -->
                <div class="row justify-content-center">
                    <div class="col-lg-12">
                        <div class="card">
                            <div class="card-body">
                                <div class="form-validation">
                                    <form class="form-valide-assets" action="#" method="post">
                                        <div class="form-group row">
                                            <label class="col-lg-2 col-form-label" for="val-articulo">Nombre Articulo <span class="text-danger">*</span></label>
                                            <div class="col-lg-4">
                                                <input type="text" class="form-control" id="val-articulo" name="val-articulo" placeholder="Ingrese nombre del articulo..">
                                            </div>
                                            <label class="col-lg-2 col-form-label" for="val-select-articulo">Tipo Articulo <span class="text-danger">*</span></label>
                                            <div class="col-lg-4">
                                                <select class="form-control" id="val-select-articulo" name="val-select-articulo">
                                                    <option value="">Seleccione</option>
                                                    <option value="html">Equipo de Computo</option>
                                                    <option value="css">Equipo de Oficina</option>
                                                    <option value="javascript">Maquinaria y Equipo</option>
                                                    <option value="angular">Muebles y enseres</option>
                                                    <option value="angular">Vehiculos</option>
                                                    <option value="vuejs">Otros</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label class="col-lg-2 col-form-label" for="val-ubicacion">Ubicacion <span class="text-danger">*</span></label>
                                            <div class="col-lg-4">
                                                <input type="text" class="form-control" id="val-ubicacion" name="val-ubicacion" placeholder="Ingrese la ubicación..">
                                            </div>
                                            <label class="col-lg-2 col-form-label" for="val-select-responsable">Responsable<span class="text-danger">*</span></label>
                                            <div class="col-lg-4">
                                                <select class="form-control" id="val-select-responsable" name="val-select-responsable">
                                                    <option value="">Seleccione</option>
                                                    <option value="1">Gerente General</option>
                                                    <option value="2">Gerente Ejecutivo</option>
                                                    <option value="3">Auxiliar de Gerencia</option>
                                                    <option value="4">Dir. Aditivo y Financiera</option>
                                                    <option value="5">Analista Aditiva y Financiera</option>
                                                    <option value="6">Analista de Contabilidad</option>
                                                    <option value="7">Analista TIC</option>
                                                    <option value="8">Auxiliar Contable</option>
                                                    <option value="9">Aux. Adtiva. y Financiera</option>
                                                    <option value="10">Dir. Negocio Institucional</option>
                                                    <option value="11">Rpte de Vtas IND</option>
                                                    <option value="12">Dir. Negocio Masivo</option>
                                                    <option value="13">Ejec. Cta Neg. Masivo</option>
                                                    <option value="14">Ejec. Cta. Neg Institucional</option>
                                                    <option value="15">Operario In-House</option>
                                                    <option value="16">Auxiliar Comercial</option>
                                                    <option value="17">Coord. de RRHH</option>
                                                    <option value="18">Coord. de Mercadeo</option>
                                                    <option value="19">Coord. Costos y Control Int</option>
                                                    <option value="20">Analista de Mercadeo</option>
                                                    <option value="21">Apr. Mercadeo</option>
                                                    <option value="22">Analista de Negocio</option>
                                                    <option value="23">Ejec. Cta. IND</option>
                                                    <option value="24">Director. SGE</option>
                                                    <option value="25">Analista SEG</option>
                                                    <option value="26">Aux. de Calidad</option>
                                                    <option value="27">Director de Operaciones</option>
                                                    <option value="28">Analista Diseño y Preprensa</option>
                                                    <option value="29">Coord. Producción</option>
                                                    <option value="30">Coord. Logístico</option>
                                                    <option value="31">Auxiliar Despachos</option>
                                                    <option value="32">Impresor Flexo</option>
                                                    <option value="33">Impresor Offset</option>
                                                    <option value="34">Aux. Proceso Prdtivo Flexo</option>
                                                    <option value="35">Aux. Produccion y Mantenimiento</option>
                                                    <option value="36">Terminado Flexo</option>
                                                    <option value="37">Terminado Offset</option>
                                                    <option value="38">Analista Comercio Ext</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label class="col-lg-2 col-form-label" for="val-cantidad">Cantidad <span class="text-danger">*</span></label>
                                            <div class="col-lg-4">
                                                <input type="number" class="form-control" id="val-cantidad" name="val-cantidad" placeholder="Ingrese la cantidad..">
                                            </div>
                                            <label class="col-lg-2 col-form-label" for="val-valor-comercial">Valor Comercial <span class="text-danger">*</span></label>
                                            <div class="col-lg-4">
                                                <input type="number" class="form-control" id="val-valor-comercial" name="val-valor-comercial" placeholder="Ingrese el valor comercial..">
                                            </div>
                                        </div>
                                        <!-- <div class="form-group row">
                                            
                                        </div> -->
                                        <div class="form-group row">
                                            <!-- <label class="col-lg-2 col-form-label" for="val-skill">Valor Total<span class="text-danger">*</span></label>
                                            <div class="col-lg-4">
                                                <input type="password" class="form-control" id="val-confirm-password" name="val-confirm-password" placeholder="Ingrese el valor total...">
                                            </div> -->
                                            <label class="col-lg-2 col-form-label" for="val-valor-raiz">Raiz Contable <span class="text-danger">*</span></label>
                                            <div class="col-lg-4">
                                                <input type="number" class="form-control" id="val-valor-raiz" name="val-valor-raiz" placeholder="Ingrese la raiz contable..">
                                            </div>
                                            <label class="col-lg-2 col-form-label" for="val-codigo">Codigo Contable <span class="text-danger">*</span></label>
                                            <div class="col-lg-4">
                                                <input type="number" class="form-control" id="val-codigo" name="val-codigo" placeholder="Ingrese codigo contable..">
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label class="col-lg-2 col-form-label" for="val-valor-contable">Valor Contable <span class="text-danger">*</span></label>
                                            <div class="col-lg-4">
                                                <input type="number" class="form-control" id="val-valor-contable" name="val-valor-contable" placeholder="Ingrese valor contable..">
                                            </div>
                                            <label class="col-lg-2 col-form-label" for="val-uso">Porcentaje Uso <span class="text-danger">*</span></label>
                                            <div class="col-lg-4">
                                                <input type="number" class="form-control" id="val-uso" name="val-uso" placeholder="Ingrese porcentaje uso..">
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label class="col-lg-2 col-form-label" for="val-bienes">Bienes <span class="text-danger">*</span></label>
                                            <div class="col-lg-4">
                                                <input type="text" class="form-control" id="val-bienes" name="val-bienes" placeholder="Ingrese los bienes..">
                                            </div>
                                            <label class="col-lg-2 col-form-label" for="val-cobertura">Cobertura <span class="text-danger">*</span></label>
                                            <div class="col-lg-4">
                                                <input type="text" class="form-control" id="val-cobertura" name="val-cobertura" placeholder="Ingrese la cobertura..">
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <div class="col-lg-7 ml-auto">
                                                <button type="submit" class="btn btn-primary">Registrar Activo</button>
                                            </div>
                                        </div>
                                    </form>
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
    <!-- Form validation -->
    <script src="public/js/lib/form-validation/jquery.validate.min.js"></script>
    <script src="public/js/lib/form-validation/jquery.validate-init.js"></script>
    

</body>

</html>