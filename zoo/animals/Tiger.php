class Tiger extends Animal implements Carnivore {
    
    public string $name;
  
    public function __construct (string $name) {
      parent::__construct($name);
    }

    public function getName() {
      return $this->name;
    }
    
    public function eatMeat() {
      echo 'I like rabbits, deer, roe deer, wild boar!\n';
    }
    
}