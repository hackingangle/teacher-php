<?php
/**
 * 人
 */
class Person
{
    /**
     * 年龄
     * @var integer
     */
    public $age = 1;

    /**
     * 姓名
     * @var string
     */
    public $name;

    /**
     * 创建时自动调用
     * 1. 起名
     * @param string $name 姓名
     */
    public function __construct($name) {
        $this->name = $name;
    }

    /**
     * 长大
     * @return null
     */
    public function growUp()
    {
        $this->age++;
    }
}

$first = new Person("张三");
var_dump($first->name, $first->age);

$second = new Person("李四");
var_dump($second->name, $second->age);

// 3
$first->growUp();
$first->growUp();
var_dump($first->name, $first->age);

// 2
$second->growUp();
var_dump($second->name, $second->age);
