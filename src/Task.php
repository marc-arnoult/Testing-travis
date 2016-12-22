<?php
namespace Marc;

class Task
{
    private $description;
    private $completed = false;

    public function __construct($description)
    {
        $this->description = $description;
    }

    public function complete()
    {
        $this->completed = true;
    }

    /**
     * @return bool
     */
    public function isCompleted()
    {
        return $this->completed;
    }

    /**
     * @return mixed
     */
    public function getDescription()
    {
        return $this->description;
    }

}

