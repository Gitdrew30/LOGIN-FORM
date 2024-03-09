<?php if (count($errors) > 0) : ?>
    <div class="error">
        <?php foreach ($errors as $error) : ?>

            <p><p? echo $error?></p>
        <?php endforeach ?>
        Please login or register
    </div>
<?php endif ?>