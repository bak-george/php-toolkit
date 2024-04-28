<?php

class ListNode
{
    public $data = null; 
    public $next = null;

    public function __construct(string|int $data = null) {
        $this->data = $data;
    }
}