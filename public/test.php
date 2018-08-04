<?php
/**
 * Created by PhpStorm.
 * User: Oksalina
 * Date: 13.07.2018
 * Time: 21:26
 */

//class Parent1
//{
//    const T = 1;
//    public static function test()
//    {
//        return self::T;
//    }
//}

class Parent1
{
    const T = 1;
    public static function test()
    {
        return static::T;
    }
}

class Parent2 extends Parent1
{
    const T = 2;

    public static function test()
    {
        return static::T;
    }
}

class Parent3 extends Parent2
{
    const T = 3;
}

echo Parent2::test();
echo "\n\r";
echo Parent3::test();