<?php


class ParentClass
{
    function test1()
    {
        return 'test1';
    }

    function test2()
    {
        return $this->test1() . '2';
    }

}

class MediatorClass extends ParentClass
{
    function test1()
    {
        return '1' . parent::test1();
    }
}

class ChildClass extends MadiatorClass
{
}

class Child2Class extends MadiatorClass
{
}

$obj = new ChildClass();

echo $obj->test2();


