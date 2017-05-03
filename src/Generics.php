<?hh

class Store<T> {

  public function __construct(private T $data) {}

  public function get(): T {
    return $this->data;
  }

  public function set(T $x): void {
    $this->data = $x;
  }
}

function main_generics(array<string> $argv): Store<string> {
  $result = new Store($argv[1]);
  return $result;
}

main_generics($argv);
