<?php
class Books {               // Main Class - is a blueprint for creating objects / those not extend class 
    // Properties - are the data that the class will use / hold
    // methods    - are how the class will behave or how class will use data 

    // Access modifiers - are used to control the visibility of the properties and methods 
    // public - can be accessed from anywhere
    // private - can only be accessed from within the class
    // protected - can be accessed from within the class and by classes derived from that class
    
    // Magic Methods - are special methods that are automatically called when certain actions are performed on an object
    // __construct - is called when an object is created
    // __destruct - is called when an object is destroyed
    // __get - is called when a property is accessed
    // __set - is called when a property is set


    public $title = "";
    public $ID      = 0;
    protected $shelf = "Main";
    private $db     = "books.json";
    private $database_type = "file";
    public $isbn    = "";
    public $published_date = "";
    public $thumbnail   = "https://media.istockphoto.com/id/1409329028/vector/no-picture-available-placeholder-thumbnail-icon-illustration-design.jpg?s=612x612&w=0&k=20&c=_zOuJu755g2eEUioiOUdz_mHKJQJn-tDgIAhQzyeKUQ=";
    public $description = "This is a Default Description for this Book";
    public $short_description = "";
    public $pages = 0;
    public $status = "PENDING";
    public $categories = [];
    public $authors    = [];





    public function __construct($id = 0, $title = ""){
        $this->ID = $id;
        $this->title = $title;
        if( $this->database_type == "file" ){
            $data = file_get_contents($this->db);

            if( $data ){
                $data = json_decode($data, true);
                //filtering the data
                $our_data = array_filter($data, function($book){
                    return $book['_id'] == $this->ID || $book['title'] == $this->title;
                });

                ($our_data[0]['title']);

                $book = $our_data[0];
                $this->title = $book['title'];
                $this->_id = $book['_id'];
                $this->isbn = $book['isbn'];
                $this->description = $book['longDescription'];
                $this->short_description = $book['shortDescription'] ??= substr($book['longDescription'], 0, 200);
                $this->thumbnail = $book['thumbnailUrl'];
            }
        }
    }


    public function changeName($to){
        $this->name = $to;
    }

    public function __destruct(){
        echo "<br> Bye Object is being destroyed.<br>";
    }
}



$variable = new Books(2);               // Create an instance of the class / runs when an object is initialized

#$variable->changeName("My name is Babs");

echo $variable->title;                                  