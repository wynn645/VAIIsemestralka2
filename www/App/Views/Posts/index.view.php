<?php
$layout = 'auth';
use App\Models\Post;
/** @var Post[] $data */
/** @var \App\Core\IAuthenticator $auth */
?>
<div>
<?php if ($auth->isLogged()) { ?>
    <a href="?c=posts&a=create" class="btn btn-success">Vytvor post</a>
    <?php } ?>
</div>
<?php
foreach ($data as $post) {

?><div class="card my-3 mx-auto" style="width: 80%; background-color: rgba(6, 15, 45, .75)">
    <div class="card-header" style="color: #ffffff">
        Header
    </div>
    <?php if ($post->getImg()) { ?>
    <img src="<?php echo $post->getImg() ?>" class="card-img-bottom" alt="...">
        <?php } ?>
    <div class="card-body">
<!--        <h5 class="card-title">Card title</h5>-->
        <p class="card-text">
            <?php echo $post->getText() ?>
        </p>
        <?php if ($auth->isLogged()) { ?>
        <a href="?c=posts&a=delete&id=<?php echo $post->getId() ?>" class="btn btn-outline-danger mx-auto">Zmazat</a>
        <a href="?c=posts&a=edit&id=<?php echo $post->getId() ?>" class="btn btn-outline-secondary mx-auto">Upravit</a>
        <a href="?c=posts&a=like&id=<?php echo $post->getId() ?>" class="btn btn-outline-success mx-auto">
            <?php echo count($post->getLikes()) ?>likes
        </a>
        <?php } else { ?>
        <a href="#" class="btn btn-outline-success mx-auto">
            <?php echo count($post->getLikes()) ?>likes
        </a>
        <?php } ?>
    </div>
</div>
<?php } ?>