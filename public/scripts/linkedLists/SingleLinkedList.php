<?php 

require_once 'ListNode.php';

class SingleLinkedList 
{
    private ?object $firstNode = null; 
    private int $totalNodes = 0; 

    public function insertNode(string $data = null): bool
    {
        $newNode = new ListNode($data);

        if ($this->firstNode === null) {
            $this->firstNode = &$newNode; 
        } else {
            $currentNode = $this->firstNode; 
            while ($currentNode->next !== null) {
                $currentNode = $currentNode->next;  
            }
            $currentNode->next = $newNode; 
        }
        $this->totalNodes++;

        return true; 
    }

    public function show()
    {
        echo "Total nodes: {$this->totalNodes}" . PHP_EOL;
        $currentNode = $this->firstNode;
        while ($currentNode !== null) {
            echo $currentNode->data . PHP_EOL;
            $currentNode = $currentNode->next; 
        }
    }
}

$exampleNodes = new SingleLinkedList();
$exampleNodes->insertNode('node 1'); 
$exampleNodes->insertNode('node 2');
$exampleNodes->show();