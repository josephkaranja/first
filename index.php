<?php
//this is a comment
/**
	$a=2;
	$b=6;
	$c=$a+$b;

   echo $c;
**/
/**
 * 
 */

//public,private,protected
class animal{

public $numberOfLegs;//this is an attribute
//this is a metjhod
public function move(){

 echo "i walk";
}

 public function youngOne($baby){
 	echo "my young one is".$baby;

 
}
public function initializenumofleg($legs){
$this->numberOfLegs= $legs;
//this acces attributes within a class
}
public function shownumoflegs(){

	echo $this->numberOfLegs;
}

public function showeverything($baby, $legs){
	$this->move();
	$this->youngOne($baby);
	$this->initializenumofleg($legs);
	$this->shownumoflegs();
}

}

$man=new animal();

$man->showeverything("toto",2);

//echo($man->numberOfLegs);



//this is an object
/**
$dog=new animal();
$dog->move();
echo("<br>".$dog->numberOfLegs);
$dog->youngOne("puppy");
//new object
$cat=new animal();
echo("<br>".$cat->numberOfLegs);
**/
?>