<?php

class Queue
{
    protected $queue;
    protected $limit;

    public function __construct($limit = 10, $initial = [])
    {
        $this->queue = $initial;
        $this->limit = $limit;
    }

    public function enqueue($item)
    {
        if (count($this->queue) < $this->limit) {
            array_push($this->queue, $item);
        } else {
            throw new RuntimeException('Queue is full!');
        }
    }

    public function dequeue()
    {
        if ($this->isEmpty()) {
            throw new RuntimeException('Queue is empty!');
        } else {
            return array_shift($this->queue);
        }
    }

    public function front()
    {
        return reset($this->queue);
    }

    public function isEmpty()
    {
        return empty($this->queue);
    }

    public function getSize()
    {
        return count($this->queue);
    }
}

$queue = new Queue();
$queue->enqueue(1);
$queue->enqueue(2);
$queue->enqueue(3);
$queue->enqueue(4);
$queue->enqueue(5);
$queue->enqueue(6);

echo $queue->front();
