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
        echo ($appointment->getid());
        echo ($appointment->getname());
        echo ($appointment->getphone());
        echo ($appointment->getemail());
        echo ($appointment->getdate_time());
        echo ($appointment->getuser_query());

    };
?>
</main>

    <footer></footer>
</body>

</html>