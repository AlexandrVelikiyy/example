<?php

class A
{
    public string $public = 'public';
    protected string $protected = 'protected';
    private string $private = 'private';


public function printProps(): void
{
    echo __CLASS__ . PHP_EOL;
    echo $this->public . PHP_EOL;
    echo $this->protected . PHP_EOL;
    echo $this->private . PHP_EOL;

}

    public function getPrivate(): string
    {
        return $this->private;
    }

    public function setPrivate(string $private): void
    {
        $this->private = $private;
    }
}