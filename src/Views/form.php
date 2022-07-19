<html>

<?php
    require_once("Components/layout.php");
?>

<body>

<?php
    require_once("Components/header.php");
?>

<main>
    <form method="post" action='?action=<?php echo $data['action'] ?>'>
        <label for="name">Nombre y apellidos  </label>
            <input type="text" name="name" placeholder="Nombre del cliente" required >
       

        <label for="email">Email</label>
            <input type="text" name="email" placeholder="Email del cliente" required >
        

        <label for="phone">Telefono</label>
            <input type="text" name="phone" placeholder="Telefono del cliente" required >
       
        <label for="issue">Consulta</label>
        <textarea name="user_query" rows="10" cols="50" required></textarea>
        <button type="reset" class="btn btn-outline-danger">Cancelar</button>
        <button type="submit" class="btn btn-success">Guardar</button>
    </form>
    
</main>


<?php
    require_once("Components/footer.php");
?>