<?php
include ('../../app/config.php');
include('../../admin/layout/section1.php');
include('../../app/controllers/roles/listado_de_roles.php');
?>




  <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <br>
        <div class="content">
            <div class="container-fluid">
                <div class = "row">      
                    <h1>Listado de Roles</h1><br> 
                </div>  
                <div class="row">
                <div class="col-md-8">
                    <div class="card card-outline card-primary">
                    <div class="card-header">
                        <h3 class="card-title">Roles registrados</h3>

                        <div class="card-tools">
                        <a href="<?=APP_URL?>/admin/roles/create.php" class="btn btn-primary"> Crear nuevo rol</a>
                        </div>
                        <!-- /.card-tools -->
                    </div>
                    <!-- /.card-header -->
                    <div class="card-body">
                    <table id = "example1" class= "table table-striped table-bordered table-hover">
                        <thead>
                            <th><center>Nro</center></th>
                            <th><center>Nombre del Rol</center></th>
                            <th><center>Acciones</center></th>
                        </thead>
                        <tbody>
                            <?php
                                $contador_rol = 0;
                                foreach ($roles as $role) {
                                    $id_rol = $role['id_rol'];
                                    $contador_rol = $contador_rol + 1;
                            ?> 
                             <tr>
                                <td style = "text-align: center;"><?=$contador_rol?></td>
                                <td><?=$role['nombre_rol']?></td>
                                <td style = "text-align: center;">
                                <div class="btn-group" role="group" aria-label="Basic example">
                                    <a href= "<?=APP_URL?>/admin/roles/show.php?id=<?=$id_rol;?>" type="button" class="btn btn-secondary btn-sm bg-info"><i class="bi bi-eye"></i></a>
                                    <a href= "<?=APP_URL?>/admin/roles/edit.php?id=<?=$id_rol;?>"  type="button" class="btn btn-secondary btn-sm bg-success"><i class="bi bi-pen"></i></a>
                                    <form action="<?=APP_URL;?>/app/controllers/roles/delete.php" onclick = "preguntar(event)" method = "post" id="miFormulario<?=$id_rol;?>">
                                        <input type="text" name ="id_rol" value = "<?=$id_rol?>" hidden>
                                        <button type="submit" class="btn btn-secondary btn-sm bg-danger" style = "border-radius: 0px"><i class="bi bi-trash"></i></button>
                                    </form>
                                    <script>
                                        function preguntar(event) {
                                            event.preventDefault();
                                            Swal.fire({
                                                tittle: 'Eliminar registro',
                                                text: 'Desea eliminar este registro?',
                                                icon: 'question',
                                                showDenyButton: true,
                                                confirmButtonText: 'Eliminar',
                                                confirmButtonColor: '#a5161d',
                                                denyButtonColor: '#270a0a',
                                                denyButtonText: 'Cancelar',
                                            }).then((result)=>{
                                                if (result.isConfirmed) {
                                                    var form = $('#miFormulario<?=$id_rol;?>');
                                                    form.submit();
                                                }
                                            });
                                        }
                                    </script>
                                </div>
                                </td>
                            </tr>       
                             <?php       
                                }
                            ?>
                           
                        </tbody>
                    </table>
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

<script>
  $(function () {
    $("#example1").DataTable({
        "pageLength": 5,
        "language":{
            "emptyTable": "No hay información",
            "info": "Mostrando _START_ a _END_ de _TOTAL_ categorías",
            "infoEmpty": "Mostrando 0 a 0 de 0 categorías",
            "infoFiltered": "(Filtrando de _MAX_ total categorías)",
            "infoPostFix": "",
            "thousands": ",",
            "lengthMenu": "Mostrar _MENU_ categorías",
            "loadingRecords": "Cargando...",
            "processing": "Procesando...",
            "search": "Buscador",
            "zeroRecords": "Sin resultados encontrados",
            "paginate":{
                "first": "Primero",
                "last": "Último",
                "next": "Siguiente",
                "previous": "Anterior"
            }
        },
        "responsive": true, "lengthChange": true, "autoWidth": false,
        "buttons": [{
            extend: 'collection',
            text: 'Reportes',
            orientation: 'landscape',
            buttons:[{
                text: 'Copiar',
                extend: 'copy',
            },{
                extend: 'pdf'
            },{
                extend: 'csv'
            },{
                extend: 'excel'
            },{
                text: 'Imprimir',
                extend: 'print'
            }]    
        },  {
                extend: 'colvis',
                text: 'Visor de columnas',
                collectionLayout: 'Fixed three-column'
            }
        ],
        }).buttons().container().appendTo('#example1_wrapper .col-md-6:eq(0)');
  });
</script>
