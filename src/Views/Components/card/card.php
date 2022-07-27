<div class='card mb-3' style='max-width: 18rem;'>
    <div class='card-header'>
        <h3><?php echo $name ?></h3>
        <p class='card-data'><?php echo $email ?></p>
        <p class='card-data'><?php echo $phone ?></p>
        <a href=<?php echo '?action=edit&id=' . $id ?>>
            <button type='button' class='btn btn-primary'>m</button>
        </a>

        <a href=<?php echo '?action=delete&id=' . $id ?>>
            <button type='button' class='btn btn-primary'>D</button>
        </a>
    </div>
    <div class='card-body '>
        <p class='card-text'><?php echo $userQuery ?></p>

        <p class='card-date'><?php echo $dateTime ?></p>

    </div>
</div>