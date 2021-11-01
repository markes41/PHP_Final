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
                <th>Activo</th>
                <td>Editar</td>
				<td>Eliminar</td>
            </tr>
        </thead>
        <tbody>
            <?php 
            $sql_query = "SELECT id, nombre, apellido, email, dni, rol, activo FROM Usuarios";
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
               <td><?php echo $row['activo']; ?></td>
               <td style="text-align: center;">
					<span class="btn btn-warning btn-sm" data-toggle="modal" data-target="#modalEditar" onclick="agregaFrmActualizar('<?php echo $mostrar[0] ?>')">
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

<?php  
    include('inc/footer.php');
?>

<script type="text/javascript">
	$(document).ready(function() {
		$('#data_table').DataTable();
	} );
</script>
