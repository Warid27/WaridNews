<?php if ($data['foto'] == 'default') { ?>
            <i class="fa-solid fa-user"></i>
    <?php } else { ?>
        <img src="<?php echo $userDir.htmlspecialchars($data['foto']); ?>">
    <?php } ?>