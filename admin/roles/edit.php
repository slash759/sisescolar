<?php

$id_rol=$_GET['id'];


include ('../../app/config.php');
include('../../admin/layout/section1.php');
include('../../app/controllers/roles/datos_del_rol.php');
?>




  <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <br>
        <div class="content">
            <div class="container-fluid">
                <div class = "row">      
                    <h1>Editar el rol: <?=$nombre_rol?></h1><br> 
                </div>  
                <div class="row">
                <div class="col-md-8">
                    <div class="card card-outline card-success">
                    <div class="card-header">
                        <h2 class="card-title text-bold">Datos Registrados</h2>

                        
                        <!-- /.card-tools -->
                    </div>
                    <!-- /.card-header -->
                    <div class="card-body">
                        <form action="<?=APP_URL;?>/app/controllers/roles/update.php" method = "post">
                        <div class="row">
                            <div class="col-md">
                                <div class="form-group">
                                    <label for="">Nombre del rol</label>
                                    <input type="text" name = "id_rol" value = "<?=$id_rol;?>" hidden>
                                    <input type="text" class = "form-control" name="nombre_rol" value = "<?=$nombre_rol;?>">
                                </div>
                            </div>
                        </div>
                        <hr>
                        <div class="row">
                            <div class="col-md">
                                <div class="form-group">
                                    <button type = "submit" class="btn btn-success">Actualizar</button>
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

