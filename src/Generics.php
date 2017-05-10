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

function mainGenerics(array<string> $argv): Store<string> {
  $result = new Store($argv[1]);
  return $result;
}

mainGenerics($argv);
