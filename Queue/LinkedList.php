<?php

class LinkedList
{
    public $firstNode;
    public $lastNode;

    function __construct()
    {
        $this->firstNode = null;
        $this->lastNode = null;
    }

    public function isEmpty()
    {
        return is_null($this->firstNode);
    }

    function normalAdd($node)
    {
        if ($this->firstNode == null) {
            $this->firstNode = $node;
        } else {
            $node->next = $this->lastNode;
        }
        $this->lastNode = $node;
    }

    function sortList()
    {

        $preNode = null;
        $current = $this->lastNode;
        $nextNode = $current->next;

        while (!is_null($nextNode)) {
            if ((int)$current->code < (int)$nextNode->code) {

                if (is_null($nextNode->next)) {
                    $current->next = null;
                    $this->firstNode = $current;
                } else {
                    $current->next = $nextNode->next;
                }

                $nextNode->next = $current;

                if (is_null($preNode)) {
                    $this->lastNode = $nextNode;
                } else {
                    $preNode->next = $nextNode;
                }

                $preNode = $nextNode;
                $nextNode = $current->next;
            } else {
                return;
            }
        }
    }

    function addWithSort($node)
    {
        $this->normalAdd($node);
        $this->sortList();
    }

    function printList()
    {
        $current = $this->lastNode;
        while (!is_null($current)) {
            echo $current->readNode();
            echo "<br>";
            $current = $current->next;
        }
    }

    function getSecondNode(){
        $secondNode = null;
        $current = $this->lastNode;
        while (!is_null($current->next)) {
          if($current->next->next == null){
              $secondNode = $current;
          }
            $current = $current->next;
        }
        return $secondNode;
    }

    function moveFirstNode(){
        if($this->isEmpty()){
            return null;
        }
        $secondNode = $this->getSecondNode();
        $moveValue = null;
        if(!is_null($secondNode)){
            $moveValue = $this->firstNode;
            $secondNode->next = null;
            $this->firstNode = $secondNode ;
        }
        return $moveValue->readNode();
    }
}