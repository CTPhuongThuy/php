<?
define('FCPATH',__DIR__);
include_once('lib/autoload.php');
// Create a list of animals
$cat = new animal\Cat();
$dog = new  animal\Dog();
$mouse = new  animal\Mouse();
$animals = array($cat, $dog, $mouse);
// Tell the animals to make a sound
foreach($animals as $animal) {
  $animal->makeSound();
  echo '<hr/>';
}
?>