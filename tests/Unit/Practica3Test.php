<?php

namespace Tests\Unit;

use PHPUnit\Framework\TestCase;

class Practica3Test extends TestCase
{
    //Crear una función que me permita crear un Array mediante un objeto, 
        //la cual solicite mediante una prueba unitaria, acceder a su data
        public function compararData (){
            $data = [
                'user' => [
                    'name' => 'John Doe',
                    'age' => 30,
                    'email' => 'johndoe@example.com',
                    'address' => [
                        'street' => '123 Main St',
                        'city' => 'New York',
                        'state' => 'NY',
                        'country' => 'USA'
                    ]
                ]
                    ];

                    $this->assertEquals("user", $data);
        }
}