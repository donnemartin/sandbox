<?hh

final class User {

  public function __construct(
    private string $name,
    private int $id,
    private Vector<int> $friend_ids,
  ) {}

  public function getName(): string {
    return $this->name;
  }

  public function getId(): int {
    return $this->id;
  }

  public function getFriendIds(): Vector<int> {
    return $this->friend_ids;
  }
}

function getUserName(?User $user): string {
  if ($user === null) {
    throw new RuntimeException('Invalid user');
  }
  return $user->getName();
}
