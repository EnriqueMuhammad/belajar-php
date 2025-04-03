<?php
class Person
{
    //Buat Constant, idealnya uppercase
    const AUTHOR = "Manto";

    //Properties
    //set string type, idealnya camelCase
    var string $name;
    //nullable string type
    var ?string $address = null;
    //set default value
    var string $country = "Indonesia";

    //Constructor
    //Constructor adalah function yang dipanggil pertama kali ketika object diinstansiasi
    public function __construct(string $name, string $address)
    {
        $this->name = $name;
        $this->address = $address;
    }

    //destructor
    function __destruct()
    {
        //Destructor adalah function yang dipanggil ketika object dihapus dari memory
        echo "Object $this->name is destroyed" . PHP_EOL;
    }
    
    //Function untuk menampilkan nama
    //Nullable string type, jika tidak ada parameter maka harus null
    function sayHello(?string $name)
    {
        if(is_null($name)){
            echo "Hi, my name is $this->name" . PHP_EOL;
        }
        else{
            echo "Hi, my name is $this->name, and I want to say hello to $name" . PHP_EOL;
        }
    }

    //function untuk menampilkan author dengan constant
    function info()
    {
        echo "Author : " . self::AUTHOR . PHP_EOL;
    }

}