class Fox extends Animal implements Carnivore, Herbivore, CuttingFur {
    
    public string $name;
  
    public function __construct (string $name) {
      parent::__construct($name);
    }
 
    public function getName() {
      return $this->name;
    }
   
    public function eatMeat() {
      echo 'I like rabbit!\n';
    }

    public function eatingFruit() {
      echo 'I like berries and apples!\n';
    }

    public function eatingVagetables() {
      echo 'I like potatoes!\n';
    }

    public function eatingGrass() {
      echo 'I like lettuce!\n';
    }

    public function cutFur() {
      echo 'I like cutting in summer!';
    }

}