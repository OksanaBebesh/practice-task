class SnowLeopard extends Animal implements Carnivore  {
      
      public string $name;
    
      public function  __construct (string $name) {
        parent::__construct($name);
      }
  
      public function getName() {
        return $this->name;
      }
    
      public function eatMeat() {
        echo 'I like rabbits, roe deer, wild boar, hares, marmots!\n';
      }   
        
  } 