<?php
print_r($ingredients);
?> 
</table>
<br>
<h1>Materjali muutmine</h1>
<?php 
if ($_SESSION["is_logged_in"]= true) {?>

<form method='POST' action='/editingredient'> 
    <input type='hidden' name="id" value="<?php echo $ingredients->ID; ?>">
    <input name='name' value="<?php echo $ingredients->name; ?>">
    <input name='unit' value="<?php echo $ingredients->unit; ?>">
    
    <button type='submit'>SALVESTA</button>
</form>

<?php } ?>

