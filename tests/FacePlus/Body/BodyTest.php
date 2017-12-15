<?php

namespace AI\Tests\FacePlus\Body;

use AI\Entry;

/**
 * Created by PhpStorm.
 * User: hahaxixi2017
 * Date: 2017/12/8
 * Time: 15:56
 */
class BodyTest extends \PHPUnit_Framework_TestCase
{
    //vendor/phpunit/phpunit/phpunit --testdox tests/FacePlus/Body/BodyTest.php
    public function testGet()
    {
        $config = require __DIR__ . '/../../config/ai.php';
        $result = Entry::FacePlus($config)->body->select('gesture')->where(['image_file' =>__DIR__ . '/../../file/Gesture6.jpg' , 'return_gesture' => '1'])->get();//Gesture
//        $result = Entry::FacePlus($config)->body->select('gesture')->where(['image_base64' => \AI\Common\Tool\File::base64LocalImage(__DIR__ . '/../../file/face_01.jpg'), 'return_attributes' => 'skinstatus'])->get();//Gesture
//        $result = Entry::FacePlus($config)->body->select('gesture')->where(['image_url' => 'http://open.youtu.qq.com/app/img/experience/face_img/face_06.jpg', 'return_attributes' => 'skinstatus'])->get();//Gesture
        var_dump($result);
        exit;
    }
}