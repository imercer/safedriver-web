<?php
// require codebird
require_once('codebird.php');
 
\Codebird\Codebird::setConsumerKey("4d5SQPcrdfGCvI4Gm7u64NUik", "jA0eppU5iLJ8FY0wiGIkPMaPk8RSfWRS1k5zIZjJZKntElefqd");
$cb = \Codebird\Codebird::getInstance();
$cb->setToken("3174625284-PueDjm5YbE7oeS8xoYsZUFsdnGkkXhsp4dboPN0", "tUlkwD6j7j8tpbTK4qI9QrdAXaKfGddIZNkk6ejj2tKyJ");
 
$params = array(
  'status' => 'E.T. Phone Home.'
);
$reply = $cb->statuses_update($params);
$status = $reply->httpstatus;
    if($status == 200) {
 
      echo "Tweeted";
      $tweet = "Done";
 
      } else {
      echo "Failed to Tweet";
      $tweet = "Failed $status";
      }
 
?>