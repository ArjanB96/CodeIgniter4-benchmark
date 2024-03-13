<?php

use App\Controllers\Home;
use CodeIgniter\Test\CIUnitTestCase;

class HomeTest extends CIUnitTestCase
{
    public function testIndex()
    {
        // Maak een instantie van de Home controller
        $controller = new Home();

        // Voer de index methode van de controller uit
        $output = $controller->index();

        // Controleer of de output overeenkomt met de verwachte waarde
        $expectedOutput = view('welcome_message');
        $this->assertSame($expectedOutput, $output);
    }
}