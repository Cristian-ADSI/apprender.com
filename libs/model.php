<?php
class Model
{
    function __construcut()
    {
        $this->database = new Database();
    }

    function query($query)
    {
        return $this->database->connect()->query($query);
    }
    function lastIdQuery($query)
    {
        $instance  = $this->database->connect();
        $instance->query($query);
        return $instance->lastInsertId();
    }

    function prepare($STRING)
    {
        return $this->database->connect()->prepare($STRING);
    }
}
