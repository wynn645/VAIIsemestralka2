<?php $layout = 'auth'?>
<div class="container">
    <div class="row">
        <div class="offset-4 col-4">
            <form method="post" action="?c=posts&a=store">
                <?php /** @var \App\Models\Post $data */
                if ($data->getId()) { ?>
                    <input type="hidden" name="id" value="<?php echo $data->getId() ?>">
                <?php } ?>
                <label>
                    <input type="text" name="text" value="<?php echo $data->getText() ?>">
                </label>
                <input type="submit" value="Odoslat">
            </form>
        </div>

    </div>

</div>


