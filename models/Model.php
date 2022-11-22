<?php

class Model
{
    private int $id;
    private Mark $mark;
    private string $name_model;
    
    public function __construct(int $id, Mark $mark, string $name_model)
    {
        $this->id = $id;
        $this->mark_id = $mark;
        $this->name_model = $name_model;
    }
    
    public function getId(): int
    {
        return $this->id;
    }

    // public function getMarkId(): int
    // {
    //     return $this->mark_id;
    // }

    public function getNameModel(): string
    {
        return $this->name_model;
    }
}