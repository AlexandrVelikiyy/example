<?php

require __DIR__ . '/A.php';
require __DIR__ . '/B.php';

error_reporting(-1);

$a = new A();
//var_dump($a->public);
//var_dump($a->protected);
//var_dump($a->private);
//$a ->printProps();

$b = new B();
var_dump($b->getPrivate());
$b->setPrivate('private set');
var_dump($b->getPrivate());
//$b ->printProps();
$b->setProtected('protected set');
var_dump($b->getProtected());


