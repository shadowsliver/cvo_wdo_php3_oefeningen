<?php
$output = include 'views/quiz-form.php';
$quizIsSubmitted = isset($_POST['quiz-submitted']);
if($quizIsSubmitted){
    $answer = $_POST['answer'];
    $output = showQuizResponse($answer);
    $output .= "<pre>";
    $output .= print_r($_POST, true);
    $output .= "</pre>";

}else{
    $output = include 'views/quiz-form.php';
}

return $output;

function showQuizResponse($answer){
    $response = "<p>Je koos voor: ";
    if($answer === "ja"){
     $response .= " - ik begrijp wat je bedoelt";
    }
    $response .= "</p>";
    $response.= "<p><a href='index.php?page=quiz'>Opnieuw Quizen?</a> </p>";

    return $response;
}