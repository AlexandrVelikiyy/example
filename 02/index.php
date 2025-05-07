<?php
class  MyClass
{

}
function test($class)
{
    return $class;
}
var_dump(new (test(MyClass::class)));
//$a = new MyClass();
//$b = new MyClass();
//var_dump(@$a,$b);
//var_dump(new (MyClass::class));