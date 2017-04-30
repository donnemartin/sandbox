<?hh

function addExclamation(string $message): string {
  return $message."!";
}

function main(array<string> $argv): void {
  echo addExclamation($argv[1]);
}

main($argv);
