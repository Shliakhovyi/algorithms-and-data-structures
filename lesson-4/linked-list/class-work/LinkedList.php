<?php
require __DIR__ . '/SeparateObject.php';

class LinkedList
{
    public $head;
    public  $tail;
    public $count = 0;

    public function isEmpty() {
        return empty($this->head);
    }

    /**
     * @return mixed
     */
    public function getTail()
    {
        return $this->tail;
    }


    // ссылка на текущий
    public function append($key, $value) {
        $sObject = new SeparateObject($key, $value);

        if($this->isEmpty()) {
            $this->head = $sObject;
        }

        $sObject->prev = $this->getTail();

        if($this->getTail()) {
            $this->getTail()->next = $sObject;
        }

        $this->tail = $sObject;
        $this->count++;
    }

    public function search($key) {
        if($this->isEmpty()) {
            throw new Exception("Can't search through empty linked list!");
        }

        /** @var SeparateObject $item */
        $item = $this->head;
        do {
            if($item->key === $key) {
                return $item;
            }

            $item = $item->next;
        } while(!empty($item));
    }
}

//$llObject = new LinkedList();
//
////$element = new SeparateObject();
//var_dump($llObject->isEmpty());
//
//$llObject->append(16, 'hello');
//$llObject->append(4, 'from');
//$llObject->append(21, 'list');
//
//try {
//    var_dump($llObject->search(4)->value);
//} catch (Exception $e) {
//    var_dump("Error: {$e->getMessage()}");
//}