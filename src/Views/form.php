<html>

<?php

use PhpParser\Node\Name;

require_once("components/layout.php");
$id = null;
$name = "";
$phone = "";
$email = "";
$userQuery = "";
if ($data["action"] == "update") {

    $appointment = $data["appointments"];
    $id = $appointment->getId();
    $name = $appointment->getName();
    $phone = $appointment->getPhone();
    $email = $appointment->getEmail();
    $userQuery = $appointment->getUserQuery();
}

//echo(var_dump ($data["appointments"]));
?>

<body>

    <?php
    require_once("components/header/header.php");
    ?>

    <main>
        <link rel="stylesheet" href="src/Views/form.css">
        <div class='card mb-3' style='max-width: 80em;'>
            <div class='card-header'>
                <p class='card-tittle'>Alta/Modificacion</p>
                <div class='card-body '>

                    <form method="post" action='?action=<?php echo $data['action'] ?>&id=<?php echo $id ?>'>

                        <p class='card-data'></p>
                        <label for="name">Nombre y apellidos </label>
                        <input type="text" name="name" value="<?php echo $name; ?>" placeholder="Nombre del cliente" required>


                        <label for="email">Email</label>
                        <input type="text" name="email" value="<?php echo $email; ?>" placeholder="Email del cliente" required>


                        <label for="phone">Telefono</label>
                        <input type="text" name="phone" value="<?php echo $phone; ?>" placeholder="Telefono del cliente" required>

                        <label for="issue">Consulta</label>
                        <textarea name="user_query" rows="10" cols="50" required><?php echo $userQuery; ?> </textarea>
                       
                    </form>
                    <div class='cancellButton'>
                        <button type="reset" class="btn btn-outline-danger">Cancelar</button>
                    </div>
                    <div class="saveButton">
                        <button type="submit" class="btn btn-success">Guardar</button>
                    </div>
                </div>
            </div>
        </div>

    </main>


    <?php
    require_once("components/footer/footer.php");
    ?>