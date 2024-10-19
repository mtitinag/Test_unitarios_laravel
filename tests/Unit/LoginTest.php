<?php

// Importar login.php para utilizar su clase y acceder a sus funciones.
require_once __DIR__ .'login/login.php';

use PHPUnit\Framework\TestCase;

class LoginTest extends TestCase
{
    private $login;
    protected function setUp(): void 
    {
        $this->login = new Login();
    }

    //TEST
    //TEST PARA SUMA
    public function testSumar()
    {
        $result = $this->login->suma(2,3);
        $this->assertEquals(5, $result);
    }

    //TEST PARA RESTA
    public function testResta()
    {
        $result = $this->login->resta(5,2);
        $this->assertEquals(3, $result);
    }

    //TEST PARA MULTIPLACION
    public function testMultiplicacion()
    {
        $result = $this->login->multiplicacion(5,2);
        $this->assertEquals(10, $result);
    }

    //TEST PARA DIVISION
    public function testDivision()
    {
        $result = $this->login->division(5,2);
        $this->assertEquals(2.5, $result);
    }

    //prueba para saber que un valor es verdadero
    public function testVerdadero()
    {
        $result = $this->login->verdadero(3, 3);
        $this->assertEquals(true, $result);
    }

    //prueba para saber que un valor es falso
    public function testFalso()
    {
        $result = $this->login->falso(3, 2);
        $this->assertEquals(false, $result);
    }
}
?>