<?php

class Task {
    public $title;
    public $desc;
    public $priority;

    public $message;

    public function __construct($title, $desc, $priority, $message)
    {
        $this->title =  $title;
        $this->desc =  $desc;
        $this->priority =  $priority;
        $this->message =  $message;
    }

    public function sayTask() {
        return $this->message;
    }
}