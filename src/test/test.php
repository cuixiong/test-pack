<?php
/**
 * User: set (798396652='czx')
 * createTime: 2021/12/11  10:00
 * description:
 */

use Huosdk\TestPack\controller\PersonController;
use Huosdk\TestPack\controller\StudentController;
use Huosdk\TestPack\lib\constant\PersonConstant;

require '../../vendor/autoload.php';

echo (new PersonController())->eat() . PHP_EOL;

echo (new StudentController())->study() . PHP_EOL;

echo PersonConstant::NAME;