<?php


//echo 'sumbit';
//echo '<br>';
$app['database']->insert('feedback', [
    'subject' => $_POST['subject'],
    'body' => $_POST['body']
]);
header("Location: /feedback");

//$btn = filter_input (INPUT_POST, 'action', FILTER_SANITIZE_STRING);
//$subject = filter_input (INPUT_POST, 'subject', FILTER_SANITIZE_STRING);
//$body = filter_input (INPUT_POST, 'body', FILTER_SANITIZE_STRING);

//if (isset($btn) && $btn === 'send') {

  //  $error = [];
    //if (empty($subject)) {
      //  $error[] = 'Subject is empty';
    //}
    //if (empty($body)) {
        $error[] = 'Body is empty';
    //}
    //if (empty($error)) {
      //  $app['database']->insert('feedback', [
        //    'subject' => $subject,
          //  'body' => $body
        //]);
    //}
//}
//?><meta http-equiv="refresh" content="0;URL='/feedback'"/>;