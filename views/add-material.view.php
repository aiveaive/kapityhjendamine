<?php require('partials/head.php'); ?>
<?php $message = filter_input(INPUT_GET, 'MESSAGE', FILTER_SANITIZE_STRING); ?>
<?php echo empty($message) ? "" : '<div class="alert alert-info">' . $message . '</div>'; ?>
</table>
<br>
<h1>Materjali lisamine</h1>

<form method='POST' action='/store'> 
    <input name='name'>
    <input name='unit'>
    <button type='submit'>LISA</button>
</form>
<br>
<table >
        <tr>
            <th style="border: solid 1px">nimi</th>
            <th style="border: solid 1px">ühik</th>
            <th style="border: solid 1px">muuda</th>
            <th style="border: solid 1px">kustuta</th>
        </tr>

    <?php if(!empty($materials)) : foreach ($materials as $material) : ?>
        <tr>
            <td style="border: solid 1px"><?php echo $material->name?></td>
            <td style="border: solid 1px"><?php echo $material->unit?></td>
            <td style="border: solid 1px"><a href="/material/edit?id=<?php echo $material->ID; ?>">edit</a></td>
            <td style="border: solid 1px"><a href="/material/delete?id=<?php echo $material->ID; ?>">delete</a></td>
        </tr>
    <?php endforeach; endif; ?>

<?php  ?>

<?php require('partials/footer.php'); ?>
