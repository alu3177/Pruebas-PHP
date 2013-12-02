<?php

require_once "../clases/Picture.php";
require_once 'PHPUnit.php';

class PictureTest extends PHPUnit_TestCase{
    
    var $_picture;
    
    function setUp(){
        $this->_picture = new Picture(0, "user", "../images/Big Ben.JPG", 1.0, -0.57);
    }
    
    function testValidPath(){
        $this->assertTrue($this->_picture->validPath() == true);
    }
    
    function testInvalidPath(){
        $this->_picture->path = "/foo/bar.jpg";
        $this->assertTrue($this->_picture->validPath() == false);
    }
    
}

