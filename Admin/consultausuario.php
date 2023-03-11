<?php
include_once "conexion.php"
$conn = mysqli_connect($host,$user,$pw,$db)

if(isset($_SESSION['idusuario'])==false){
  header("Location:index.php");
}


?>

    
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0">Usuarios</h1>
          </div><!-- /.col -->
  
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    <section class="content">
    <div class="content-fluid">
        <div class="row">
          <div class="col-md-12">
            <div class="card">

               <!--tabla para mostar los datos del usuario-->

               <table class="table table-bordered"><thead>

               <tr>
                <th>Nombre</th>
                <th>Email</th>
                <th>Crear Usuario<a href="panel.php?modulo=crearusuario"
                title="Crear Usuario"> <i clas="fas fa-user-plus"></i></a>
                <th>
               </tr>
               </thead>

               <tbody>
                <?php

                include_once "conexion.php";
                $conn=mysqli_connect($host,$user,$pw,$db);
                $sql="SELECT * FROM usuarios;";
                $result=mysqli_query($conn,$sql);

                //estructura de bulce while

                while ($row=mysqli_fetch_array($result)) {

                  ?>
                  <tr>
                    <td><?php echo $row['nombre']?></td>
                    <td><?php echo $row['email']?></td>
                    <td> <a href="panel.php?modulo=editarUsuario&idusuario=<?php echo $row['idusuario']?>"
                    style="margin-right:10px;"title="Editar Usuario">Editar Usuario</a> 

                    <a href="panel.php?modulo=usuarios&idborrar=<?php echo $row['idusuario']?>"
                    style="margin-right:10px;"title="Borrar Usuario">Borar Usuario</a> 
                  </td>
                  </tr>
                  <?php
                   }
                  ?>


               </table>
             
            </div>
            <!-- /.card -->
          </div>
          <!-- /.col -->
        </div>
        <!-- /.row -->
      </div><!--/. container-fluid -->
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->

 