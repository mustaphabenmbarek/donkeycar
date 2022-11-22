<?php

class Mark
{
    private int $id;
    private string $name_mark;
    
    public function __construct(int $id, string $name_mark)
    {
        $this->id = $id;
        $this->name_mark = $name_mark;
    }
    
    public function getId(): int
    {
        return $this->id;
    }

    public function getNameMark(): string
    {
        return $this->name_mark;
    }

}
