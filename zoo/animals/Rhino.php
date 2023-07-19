class Rhino extends Animal implements Herbivore {
      
      public string $name;
    
      public function __construct (string $name) {
        parent::__construct($name);
      }
    
      public function getName() {
        return $this->name;
      }
    
      public function eatingGrass() {
        echo 'I like foliage from trees and bushes!\n';
      }
  
      public function eatingFruit() {
        echo 'I like apples!';
      }
  
      public function eatingVagetables() {
        echo 'I like carrots!\n';
      }
  
  }