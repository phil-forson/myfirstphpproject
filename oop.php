<?php 
// class Exam{
//     public $name;
//     public $passmark;

//     function setName($name){
//         $this->name = $name;
//     }
//     function getName(){
//         return $this->name;
//     }

//     function setPassMark($passmark){
//         $this->passmark = $passmark;
//     }

//     function getPassMark(){
//         return $this->passmark;
//     }
// }

// $physics = new Exam;
// $math = new Exam;

// $physics->setName("Physics");
// $physics->setPassMark(70);
// $math->setName("Math");
// $math->setPassMark(50);

// echo $physics->getName()."\t" .$physics->getPassMark();
// echo '<br>';
// echo $math->getName()."\t" . $math->getPassMark();

class Exam {
    function __construct($name, $passmark)
    {
        $this->name = $name;
        $this->passmark = $passmark;
    }

    function getName(){
        return $this->name;
    }

    function getPassMark(){
        return $this->passmark;
    }

    function __destruct()
    {
        echo "The exam is on {$this->name} and the passmark is {$this->passmark}";
    }
}

$physics = new Exam("physics",70);
// $math = new Exam("math", 50);

// echo $physics->getName()."\t" .$physics->getPassMark();
// echo '<br>';
// echo $math->getName()."\t" . $math->getPassMark();

?>