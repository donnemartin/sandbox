<?hh

function exerciseVec(): void {
  $v = vec['foo', 'barr', 2];
  $v[] = 'bazzz';
  echo var_dump($v);
}

function exerciseDict(): void {
  $d = dict['foo' => 'bar'];
  $d['baz'] = 0;
  echo var_dump($d);
}

function exerciseKeySet(): void {
  $k = keyset['foo', 0];
  $k[] = 'bar';
  echo var_dump($k);
}

function mainHackArrays(array<string> $argv): void {
  exerciseVec();
  exerciseDict();
  exerciseKeySet();
}

mainHackArrays($argv);
