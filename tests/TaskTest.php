<?php



class TaskTest extends PHPUnit_Framework_TestCase
{
    public function testReturnTrue()
    {
        $task = new \Marc\Task('Go to the store');
        $this->assertFalse($task->isCompleted());

    }

    public function testEqual()
    {
        $task = new \Marc\Task('Go to the store');
        $task->complete();
        $this->assertEquals(true, $task->isCompleted());
    }
}