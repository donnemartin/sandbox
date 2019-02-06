<?hh

use PHPUnit\Framework\TestCase;

final class HelloWorldTestCase extends TestCase {

  public function testCanBeCreatedFromValidEmailAddress() {
    $this->assertInstanceOf(
      Email::class,
      Email::fromString('user@example.com'));
  }

  public function testCannotBeCreatedFromInvalidEmailAddress() {
    $this->expectException(InvalidArgumentException::class);

    Email::fromString('invalid');
  }

  public function testCanBeUsedAsString() {
    $this->assertEquals(
      'user@example.com',
      Email::fromString('user@example.com'));
  }
}
