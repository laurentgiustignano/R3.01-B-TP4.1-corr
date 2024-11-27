<?php

namespace Iutrds\Tp41;

use PHPUnit\Framework\Attributes\DataProvider;
use PHPUnit\Framework\TestCase;

class AlarmeTest extends TestCase {

  #[DataProvider('messageProvider')]
  public function testMessageCorrect(string $message, string $expected) {
    $alarme = new Alarme();


    $alarme->setMessage($message);
    self::assertSame($expected, $alarme->getMessage());
    /*
        $alarme->setMessage($messageTropLong);
        self::assertNotEquals($messageTropLong, $alarme->getMessage());
        self::assertEquals($messageVide, $alarme->getMessage());

        $alarme->setMessage($messageCourtMaisCorrect);
        self::assertEquals($messageCourtMaisCorrect, $alarme->getMessage());

        $alarme->setMessage($messageLongMaisCorrect);
        self::assertEquals($messageLongMaisCorrect, $alarme->getMessage());
    */
  }

  public static function messageProvider() {
    $messageTropCourt = "abcd";
    $messageCourtMaisCorrect = "abcde";
    $messageTropLong = "abcdefghijklmnopqrstuvwxyzabcdefghijklmnopqrstuvwxyz";  // 52 caracteres
    $messageLongMaisCorrect = "abcdefghijklmnopqrstuvwxyzabcdefghijklmnopqrstuvwxy";  // 51 caracteres
    $messageVide = "";

    return [
      [$messageTropCourt, $messageVide],
      [$messageCourtMaisCorrect, $messageCourtMaisCorrect],
      [$messageLongMaisCorrect, $messageLongMaisCorrect],
      [$messageTropLong, $messageVide],
    ];
  }
}
