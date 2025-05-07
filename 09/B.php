<?php

class B extends A
{
    public string $public = 'public B';
    protected string $protected = 'protected B';
    private string $private = 'private B';
    public function printProps(): void
    {
        echo __CLASS__ . PHP_EOL;
        echo $this->public . PHP_EOL;
        echo $this->protected . PHP_EOL;
        echo $this->private . PHP_EOL;

    }

    public function getProtected(): string
    {
        return $this->protected;
    }

    public function setProtected(string $protected): void
    {
        $this->protected = $protected;
    }
}