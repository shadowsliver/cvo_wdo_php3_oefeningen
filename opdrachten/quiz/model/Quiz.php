<?php

class Quiz
{
    public $vragen = array(

    );

    public function __construct()
    {

    }

    public function addVraag( $question, $correct, $wrong1, $wrong2, $wrong3 ){
        $vragen = array(
            $question, $correct, $wrong1, $wrong2, $wrong3
        );

        array_push($this->vragen, $vragen);
    }


}