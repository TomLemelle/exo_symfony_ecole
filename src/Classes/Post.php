<?php

namespace App\Classes;

class Post
{
    public int $id;
    public int $userId;
    public string $title;
    public string $body;

    public function __construct($id, $userId, $title, $body)
    {
        $this->id = $id;
        $this->userId = $userId;
        $this->title = $title;
        $this->body = $body;
    }

    public function GetId(): int
    {
        return ($this->id);
    }

    public function SetId($id)
    {
        $this->id = $id;
    }
}



?>