<?php
require_once 'Post.php';
require_once 'User.php';
class Foo{
    private $bar = null;
    public $users = array();

    public function __construct(){
        // we make eager loading call the data get function when we create a new instance of the class
       // $this->bar = $this->getBar();
       // Eager loading the users
       $this->users = $this->userLoading();
    }

    public function getPost(): array{
        if($this->bar == null){
            $this->bar = $this->expensiveCall();
        }
        return $this->bar;
       
    }
    private function expensiveCall(){
        return [
            new Post("Shofique shahariara"),
            new Post("Moshiur Rahaman"),
        ];
    }
    public function userLoading(){
       $userload = new User("testuser","testmail@example.com");
       return $userload->getUser();
    }
}

$lazyload= new Foo();
var_dump($lazyload);


// Lazyload the posts
$lazyloads = $lazyload->getPost();
foreach($lazyloads as $lazyload){
    echo $lazyload. "\n";
}

?>