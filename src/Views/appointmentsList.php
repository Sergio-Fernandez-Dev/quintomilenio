<?php
require_once("components/header/header.php");
?>

<main>
    <a href="?action=create">
        <button type="button" class="btn-float ">+</button>
    </a>

    <div class="card-list">
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
        ?>
    </div>
</main>

<?php
require_once("components/footer/footer.php");
?>