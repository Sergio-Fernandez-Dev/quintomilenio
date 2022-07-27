<html>

<?php
require_once("components/layout.php");
?>

<body>

    <?php
    require_once("components/header/header.php");
    ?>

    <a href="?action=create">
        <button type="button" class="btn btn-primary">crear cita</button>
    </a>

    <main class='container'>

        <?php
        foreach ($data["appointments"] as $appointment) {
            $id = $appointment->getId();
            $name = $appointment->getName();
            $phone = $appointment->getPhone();
            $email = $appointment->getEmail();
            $dateTime = $appointment->getDateTime();
            $userQuery = $appointment->getUserQuery();

            require("components/card/card.php");
        };
        require("components/modal/modal.html");
        ?>
    </main>

    <?php
    require_once("components/footer/footer.php");
    ?>
    
    <script>
        const appointmenteId = document.addEventListener("click", (event) => {
            if (event.target.type === "button") {
                document.getElementById("appointment").innerHTML = event.target.value;
            }
        })
    </script>
</body>

</html>