<?php
class Post{
    public string $title='';

    public function __construct(string $title){
        $this->title = $title;
    }
    public function __toString(): string {
        return $this->title; // Allow object to be printed
    }
}
?>