<?php

class Poll
{
    private $db;

    public function __construct($dbConnection)
    {
        $this->db = $dbConnection;
    }

    public function getPollData(){
        /*$pollData = new stdClass();
        $pollData->poll_question = "just testing...";
        $pollData->yes = 0;
        $pollData->no = 0;*/

        $sql = "SELECT poll_question, yes, no FROM poll WHERE poll_id=1";
        $statement = $this->db->prepare($sql);
        $statement->execute();
        $pollData = $statement-> fetchObject();

        return $pollData;
    }

    public function updatePoll($input){
        if($input === "yes"){
            $sql="UPDATE poll SET yes = yes + 1 WHERE poll_id=1";
        }else if($input === 'no'){
            $sql="UPDATE poll SET no = no + 1 WHERE poll_id=1";
        }
        $statement = $this->db->prepare($sql);
        $statement->execute();
    }
}