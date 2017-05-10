<?hh

function exerciseVec(): void {
  $v = vec['foo', 'barr', 2];
  $v[] = 'bazzz';
  echo var_dump($v);
}

function mainHackArrays(array<string> $argv): void {
  exerciseVec();
}

mainHackArrays($argv);
