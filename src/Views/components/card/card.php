<div class='card mb-3'>

    <div class='card-header-custom'>
        <div class='card-header-data'>
            <p class="card-user-name"><?php echo $name ?></p>
            <p><?php echo $email ?></p>
            <p><?php echo $phone ?></p>
        </div>

        <div class='card-header-buttons'>
            <a href=<?php echo '?action=edit&id=' . $id ?>>
                <button type='button'><span class="material-symbols-outlined">
                        edit_square
                    </span></button>
            </a>

            <button type="button" value="<?php echo $id ?>" data-bs-toggle="modal" data-bs-target="#appointmentModal" class="material-symbols-outlined">
                delete
            </button>

        </div>
    </div>
    <div class='card-body '>
        <p class='card-text'><?php echo $userQuery ?></p>


        <p class='card-date'><?php echo $dateTime ?></p>

    </div>
</div>