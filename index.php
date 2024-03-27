<?php include("templates/header.php"); ?>
    <?php 
        include("./bd.php");
        $nombreusuario=$_SESSION['usuario'];  
    ?>

            <div class="p-5 mb-4 bg-light rounded-3">
                <div class="container-fluid py-5">
                    <h1 class="display-5 fw-bold">Bienvenid@ <?php echo $nombreusuario ?></h1>
                    
                    
                </div>
            </div>
                
<?php include("templates/footer.php"); ?>