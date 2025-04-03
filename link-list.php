<?php
class Node {
    public $data;
    public $next;

    public function __construct($data) {
        $this->data = $data;
        $this->next = null;
    }
}
class LinkedList {
    private $head;

    public function __construct() {
        $this->head = null;
    }

    public function insertAtEnd($data) {
        $newNode = new Node($data);
        if ($this->head === null) {
            $this->head = $newNode;
        } else {
            $current = $this->head;
            while ($current->next !== null) {
                $current = $current->next;
            }
            $current->next = $newNode;
        }
    }

    public function insertAtBeginning($data) {
        $newNode = new Node($data);
        if ($this->head === null) {
            $this->head = $newNode;
        } else {
            $newNode->next = $this->head;
            $this->head = $newNode;
        }
    }

    public function deleteNode($key) {
        if ($this->head === null) {
            return;
        }

        if ($this->head->data === $key) {
            $this->head = $this->head->next;
            return;
        }

        $current = $this->head;
        while ($current->next !== null && $current->next->data !== $key) {
            $current = $current->next;
        }

        if ($current->next !== null) {
            $current->next = $current->next->next;
        }
    }

    public function display() {
        $current = $this->head;
        while ($current !== null) {
            echo $current->data . " -> ";
            $current = $current->next;
        }
        echo "null\n";
    }
}
// Example usage
$linkedList = new LinkedList();
$linkedList->insertAtEnd(1);
$linkedList->insertAtEnd(2);
$linkedList->insertAtEnd(3);
$linkedList->display(); // Output: 1 -> 2 -> 3 -> null
$linkedList->insertAtBeginning(4);
$linkedList->insertAtBeginning(5);
$linkedList->display();
$linkedList->deleteNode(2);
$linkedList->display(); // Output: 5 -> 4 -> 3 -> null

// $list2 = new LinkedList();
// $list2->insertAtEnd("nishant");
// $list2->insertAtEnd("Bhujwan");
// $list2->insertAtEnd("Mrinalini");
// $list2->insertAtEnd("Shah");
// $list2->display(); // Output: nishant -> Bhujwan -> Mrinalini -> Shah -> null