<?php

class LLNode {
    private $value;
    private $next;
    private $previous;

    /**
     * LLNode constructor.
     * @param $value
     */
    public function __construct($value)
    {
        $this->value = $value;
    }

    /**
     * @param mixed $next
     */
    public function setNext(LLNode $next)
    {
        $this->next = $next;
    }

    /**
     * @param mixed $previous
     */
    public function setPrevious(LLNode $previous)
    {
        $this->previous = $previous;
    }


}