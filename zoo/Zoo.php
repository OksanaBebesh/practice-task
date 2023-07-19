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