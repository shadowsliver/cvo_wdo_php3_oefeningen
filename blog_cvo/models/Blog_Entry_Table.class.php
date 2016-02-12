<?php

/**
 * Created by PhpStorm.
 * User: guy
 * Date: 5/02/16
 * Time: 09:00
 */
class Blog_Entry_Table
{
    private $db;

    public function __construct($db)
    {
        $this->db = $db;
    }

    // Create
    public function saveEntry($title,$entry)
    {
        $sql = "INSERT INTO blog_entry (entry_title, entry_text) VALUES (?, ?)"; //vervang ? door array $data
        $data = array($title,$entry);
        $this->makeStatement($sql, $data);
        return $this->db->lastInsertId();
    }

    // GetAllEntries is een create query
    public function getAllEntries() {
        $sql = "SELECT entry_id, entry_title, SUBSTRING(entry_text, 1, 150) AS intro
                FROM blog_entry";

        $statement = $this->makeStatement($sql);
        return $statement;
    }
    // een read query
    public function getEntry($id) {
        $sql = "SELECT * FROM blog_entry WHERE entry_id = ?";
        //$statement = $this->db->prepare($sql);
        $data = array($id);
        $statement = $this->makeStatement($sql,$data);

        $entry = $statement->fetchObject();
        return $entry;
    }
    // update
    public function updateEntry($id, $title, $entry) {
        $sql = "UPDATE blog_entry
                SET entry_title = ?,
                    entry_text = ?
                    WHERE entry_id = ?";
        // volgorde ? wordt hier bepaald in de array volgorde
        $data = array($title, $entry, $id);
        $statement = $this->makeStatement($sql, $data);
        return $statement;
    }


    // delete
    public function deleteEntry($id) {
        $sql = "DELETE FROM blog_entry WHERE entry_id = ?";
        $data = array($id);
        $statement = $this->makeStatement($sql, $data);
    }


    public function makeStatement($sql,$data = null) {
        $statement = $this->db->prepare($sql);
        try{
            $statement->execute($data);
        } catch (Exception $e) {
            $msg = "<p>You tried to run this query: $sql</p>
                    <p>Exeption: $e</p>";
            trigger_error($msg);
        }
        return $statement;

    }

}