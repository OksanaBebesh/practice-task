interface Carnivore {
    public function eatMeat();
}

interface Herbivore {
    public function eatingFruit();
    public function eatingVagetables();
    public function eatingGrass();
}

interface CombWool {
    public function combWool();
}

abstract class Animal {

  public string $name;
  
  public function __construct($name) {
      $this->name = $name;
  }

  public function __toString() {
      return $this->name . ' '. get_class($this) . PHP_EOL;
  }
}

class Elephant extends Animal implements Herbivore {

  public string $name;
  
  public function __construct(string $name) {
      parent::__construct($name);
  }

  public function getName() {
    return $this->name;
  }
  
  public function eatingFruit() {
    echo 'I like Banana!';
  }

  public function eatingVagetables() {
    echo 'I like Potatoes!';
  }

  public function eatingGrass() {
    echo 'I like lettuce!\n';
  }

}

class Fox extends Animal implements Carnivore, Herbivore, CombWool {
    
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

    public function combWool() {
      echo 'I like when I have comb wool!';
    }

}

class SnowRabbit extends Animal implements CombWool, Herbivore {
  
    public string $name;
  
    public function __construct (string $name) {
      parent::__construct($name);
    }

    public function getName() {
      return $this->name;
    }
  
    public function eatingFruit() {
        echo 'I like apple!';
    }

    public function eatingVagetables() {
      echo 'I like Potatoes!';
    }

    public function eatingGrass() {
      echo 'I like lettuce!\n';
    }

    public function combWool() {
      echo 'I like to be combed!';
    }

}

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

class Zoo {
  
  public string $name;
  private array $collection;
  
  public function __construct(string $name) {
    $this->name = $name;
  }

  public function __toString(){
    return $this->name;
  }

   public function getName() {
    return $this->name;
  }
  
  public function setItemCollection(Animal $animal) {
    $this->collection[] = $animal;
  }

  public function getItemCollection() {
    return $this->collection;
  }

  public function printZoo(array $animalCollection) {
    echo '<pre>';
      var_export($animalCollection);
    echo '<pre>';
  }
  
}
//tiger, elephant + , rhino, fox + , snow leopard + snow rabbit
$elephant = new Elephant('Teddy');
echo $elephant;

$fox = new Fox('Kate');
$tiger = new Tiger('Black');
$rabbit = new SnowRabbit('Minni');
$snowLeopard = new SnowLeopard('Bars');
$rhino = new Rhino('Green');

$zooWarshaw = new Zoo('Warshaw Zoo');
$zooWarshaw->setItemCollection($tiger);
$zooWarshaw->setItemCollection($rabbit);
$zooWarshaw->setItemCollection($rhino);
echo ($zooWarshaw);
$zooWarshaw->printZoo($zooWarshaw->getItemCollection());

$zooLodz = new Zoo('Lodz Zoo');
$zooLodz->setItemCollection($elephant);
$zooLodz->setItemCollection($rabbit);
$zooLodz->setItemCollection($snowLeopard);
echo ($zooLodz);
$zooLodz->printZoo($zooLodz->getItemCollection());