<html>

<?php
    require_once("Components/layout.php");
?>

<body>

<?php
    require_once("Components/header.php");
?>

<a href="?action=create">
    <button type="button" class="btn btn-primary">crear cita</button>
</a>


 
<main class='container'>

<?php
    foreach($data["appointments"] as $appointment){
        $id = $appointment->getId();
        $name = $appointment->getName();
        $phone = $appointment->getPhone();
        $email = $appointment->getEmail();
        $dateTime = $appointment->getDateTime();
        $userQuery = $appointment->getUserQuery();
        
        echo  "
            <div class='card mb-3' style='max-width: 18rem;'>
                <div class='card-header'>
                    <h3>$name</h3>
                    <p class='card-data'>$email</p>
                    <p class='card-data'>$phone</p>
                    <a href='?action=edit&id=$id'>
                         <button type='button' class='btn btn-primary'>m</button>
                    </a>

                    <a href='?action=delete&id=$id'>
                        <button type='button' class='btn btn-primary'>D</button>
                    </a>
                </div> 
                <div class='card-body '> 
                    <p class='card-text'>$userQuery</p>

                    <p class ='card-date'>$dateTime</p>

                </div>
            </div>  
      
        
        ";
       

    };
?>
</main>

    <footer></footer>
</body>

</html>