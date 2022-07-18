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
    foreach($data["appointments"] as $appointments){
        echo ($appointments->getid());
        echo ($appointments->getname());
        echo ($appointments->getphone());
        echo ($appointments->getemail());
        echo ($appointments->getdate_time());
        echo ($appointments->getuser_query());

    };
?>
</main>

    <footer></footer>
</body>

</html>