<?php require('partials/head.php'); ?>

<h1>FEEDBACK</h1>
<br>
<form action="/save_feedback" method="post">
    <h3>Pealkiri</h3>
    <input name="subject" type="text" require style="border-radius: 15px; align-content:center;">
    <br>
    <br>
    <h3>Tagasiside:</h3>
    <textarea name="body" id="body" cols="30" rows="10" require style="border-radius: 15px"></textarea>
    <br>
    <br>
    <button class="btn btn-succsess" name="action" value="send" style="background:lime; border-radius: 10px">ANNA TAGASISIDET</button>
</form>

<table >
<?php if(!empty($feedback)) : foreach ($feedback as $feed) : ?>
    <tr>
        <th style="border: solid 1px"><?php echo $feed->subject?></th>
        <th style="border: solid 1px"><?php echo $feed->body?></th>
        <th style="border: solid 1px"><?php echo $feed->added?></th>
    </tr>
<?php endforeach; endif; ?>
</table>

<?php require('partials/footer.php'); ?>


//<?php if (!empty($feedbacks)) : ?>

  //  <ul>
    //    <?php foreach ($feedbacks as feedbacks) : ?>
      //      <li><?php echo $feedback->subject; ?> (<?php echo $feedback->added ?>)</li>
        //    <$php endforeach ?>
        //</ul>
        //<?php endif; ?>
//<h1>Jäta tagasiside</h1>
//<form action="/add feedback">
  //  <input type="text" placeholder= "Add Subject">
    //<tex7tarea name="body"></textarea> 
    //<button class="btn btn-success" name="action" value="send">send</button>
//</form>
//<?php require('partials/footer.php'); ?>