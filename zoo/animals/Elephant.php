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
  echo 'I like lettuce!';
}

}