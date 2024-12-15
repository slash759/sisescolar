<?php
include ('../../app/config.php');
include('../../admin/layout/section1.php');
?>




  <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <br>
        <div class="content">
            <div class="container-fluid">
                <div class = "row">      
                    <h1>Creación de un nuevo rol</h1><br> 
                </div>  
                <div class="row">
                <div class="col-md-8">
                    <div class="card card-outline card-primary">
                    <div class="card-header">
                        <h2 class="card-title text-bold">RELLENE EL FORMULARIO</h2>

                        
                        <!-- /.card-tools -->
                    </div>
                    <!-- /.card-header -->
                    <div class="card-body">
                        <form action="<?=APP_URL;?>/app/controllers/roles/create.php" method = "post">
                        <div class="row">
                            <div class="col-md">
                                <div class="form-group">
                                    <label for="">Nombre del rol</label>
                                    <input type="text" name = "nombre_rol" class = "form-control" REQUIRED>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md">
                                <div class="form-group">
                                    <button type = "submit" class="btn btn-primary">Registrar</button>
                                    <a href="<?=APP_URL;?>/admin/roles" class = "btn btn-secondary">Cancelar</a>
                                </div>
                            </div>
                        </div>
                        </form>
                    </div>
                    <!-- /.card-body -->
                    </div>
                    <!-- /.card -->
                </div>    
                
                </div>
            </div><!-- /.container-fluid -->
        </div>
    </div>
    <!-- /.content-header -->

<?php 
include ('../../admin/layout/section2.php'); 
include ('../../layout/mensajes.php');
?>
