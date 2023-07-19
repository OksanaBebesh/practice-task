abstract class Animal {

public string $name;

public function __construct($name) {
    $this->name = $name;
}

public function __toString() {
    return $this->name . ' '. get_class($this) . PHP_EOL;
}
}