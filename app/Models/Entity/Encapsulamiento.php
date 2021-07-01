<?php

class MyClass
{
    // Declaración de un constructor public
    public function __construct() { }

    // Declaración de un método public
    public function MyPublic() { }

    // Declaración de un método protected
    protected function MyProtected() { }

    // Declaración de un método private
    private function MyPrivate() { }

    // Esto es public
    function Foo()
    {
        $this->MyPublic();
        $this->MyProtected();
        $this->MyPrivate();
    }
}

$myclass = new MyClass;
$myclass->MyPublic(); // Funciona
//$myclass->MyProtected(); // Error Fatal
//$myclass->MyPrivate(); // Error Fatal
$myclass->Foo(); // Public, Protected y Private funcionan
