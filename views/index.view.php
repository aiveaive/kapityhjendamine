<?php require('partials/head.php'); ?>

<h1>Avaleht</h1>

<?php if (!empty($tasks)) : foreach ($tasks as $task) : ?>
    <li>
        <?php if ($task->completed) : ?>
            <strike><?= $task->description; ?></strike>
        <?php else : ?>
            <?= $task->description; ?>
        <?php endif; ?>
    </li>
<?php endforeach; endif; ?>

<?php require('partials/footer.php'); ?>
