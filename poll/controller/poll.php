<?php

include_once 'model/Poll.php';
$poll = new Poll($db);

$isPollSubmitted = isset($_POST['user-input']);
if($isPollSubmitted){
    $input = $_POST['user-inoput'];
    $poll->updatePoll($input);
}
$pollData = $poll->getPollData();

$pollView = include_once "view/poll-html.php";

return $pollView;