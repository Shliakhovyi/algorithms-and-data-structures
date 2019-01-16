<?php

class LinkedList
{
    private $head;
    private $tail;


    public function isEmpty(): bool {
        return empty($this->head);
    }

    public function first(): LLNode {
        return $this->head;
    }

    public function last(): LLNode {
        return $this->tail;
    }

    public function append($value) {
        $newNode = new LLNode($value);

        if(!$this->isEmpty()) {
            $lastNode = $this->last();
            $newNode->setPrevious($lastNode);
            $lastNode->setNext($newNode);
        } else {
            $this->head = $newNode;
            $this->tail = $newNode;
        }
    }

    // Searching a linked list ?
    // Inserting into a linked list ?
    // Deleting from a linked list ?
}