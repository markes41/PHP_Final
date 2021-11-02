<?php    
include('inc/conexion.php'); 
include('inc/header.php');
?>

<div class="container home">    
    <h2>Usuarios </h2>      
    <table id="data_table" class="table table-hover table-condensed table-bordered">
        <thead>
            <tr>
                <th>Id</th>
                <th>Nombre</th>
                <th>Apellido</th>
                <th>Mail</th>
                <th>Dni</th>
                <th>Rol</th>
                <td>Editar</td>
				<td>Eliminar</td>
            </tr>
        </thead>
        <tbody>
            <?php 
            $sql_query = "SELECT id, nombre, apellido, email, dni, rol FROM Usuarios";
            $stmt=$conectar->prepare($sql_query);
		    $stmt->execute();
		    $result = $stmt->get_result();
		    while($row = $result->fetch_assoc()){
            ?>
               <tr id="<?php echo $row['id']; ?>">
               <td><?php echo $row['id']; ?></td>
               <td><?php echo $row['nombre']; ?></td>
               <td><?php echo $row['apellido']; ?></td>
               <td><?php echo $row['email']; ?></td>
               <td><?php echo $row['dni']; ?></td>
               <td><?php echo $row['rol']; ?></td>
               <td style="text-align: center;">
					<span class="btn btn-warning btn-sm"  data-bs-toggle="modal" data-bs-target="#exampleModal" onclick="editarDatos('<?php echo $row['id'] ?>')">
						<span class="fa fa-pencil-square-o"></span>
					</span>
				</td>
				<td style="text-align: center;">
					<span class="btn btn-danger btn-sm" onclick="eliminarDatos('<?php echo $row['id'] ?>')">
						<span class="fa fa-trash"></span>
					</span>
				</td>
               </tr>
             
            <?php } ?>
        </tbody>
    </table>    
</div>


    <!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Editar Usuario</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
					<form id="editar">
						<input type="text" hidden="" id="id" name="id">
						<label>Nombre</label>
						<input type="text" class="form-control input-sm" id="nombre" name="nombre">
						<label>Apellido</label>
						<input type="text" class="form-control input-sm" id="apellido" name="apellido">
						<label>Mail</label>
						<input type="text" class="form-control input-sm" id="mail" name="mail">
                        <label>Dni</label>
						<input type="text" class="form-control input-sm" id="dni" name="dni">
                        <label>Rol</label>
						<input type="text" class="form-control input-sm" id="rol" name="rol">
					</form>
				</div>
				<div class="modal-footer">
                    <button type="button" class="btn btn-warning" id="btnActualizar">Actualizar</button>
					<button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
					
				</div>
    </div>
  </div>
</div>

<?php  
    include('inc/footer.php');
?>

<script type="text/javascript">
	$(document).ready(function() {
		$('#data_table').DataTable();
	} );
</script>
