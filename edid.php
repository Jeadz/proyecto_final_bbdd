<?php
    include("db.php");


//DETALLE ORDENES
    if(isset($_GET['id'])){
        $ordenid = $_GET['id'];
        $query = "SELECT * FROM detallesordenes WHERE ordenid = $ordenid";
        $resultado = mysqli_query($conexion, $query);

        if(mysqli_num_rows($resultado) == 1){
            $row = mysqli_fetch_array($resultado);
            $detalle_id = $row['detalle_id'];
        }

    }



?>


<?php include("includes/header.php") ?>
<div class="conteiner p-4">
    <div class="row">
        <div class="col-md4 mx-auto">
            <div class="card card-body">
                <form action="">
                    <div class="form-goup">
                        <input type="text" name="detalle_id" value="<?php echo $title; ?>" class= "form-control" placeholder="Actualizar ID detalle"><br/>
                        <input type="text" name="title" value="<?php echo $title; ?>" class= "form-control" placeholder="Actualizar ID detalle"><br/>
                        <input type="text" name="title" value="<?php echo $title; ?>" class= "form-control" placeholder="Actualizar ID detalle"><br/>
                        <input type="text" name="title" value="<?php echo $title; ?>" class= "form-control" placeholder="Actualizar ID detalle">
                    </div>

                </form>
            </div>
        </div>
    </div>
</div>
<?php include(includes/footer.php) ?>