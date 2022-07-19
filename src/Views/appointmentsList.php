<html>

<?php
    require_once("Components/layout.php");
?>

<body>

<?php
    require_once("Components/header.php");
?>
 
<main>
<div class="card-header py-3">
    <h1 class="font-weight-bold text-black titulo-pagina">Task appointment</h1>
</div>
<?php
    foreach($data["appointments"] as $appointment){
        echo ($appointment->getId());
        echo ($appointment->getName());
        echo ($appointment->getPhone());
        echo ($appointment->getEmail());
        echo ($appointment->getDateTime());
        echo ($appointment->getUserQuery());

    };
?>
</main>

    <footer></footer>
</body>

</html>