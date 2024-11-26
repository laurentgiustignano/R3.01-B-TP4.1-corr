<?php

namespace Iutrds\Tp41;

use PHPUnit\Framework\TestCase;

class AlarmeTest extends TestCase {

  public function testMessageCorrect() {
    $alarme = new Alarme();

    $messageTropCourt = "abcd";
    $messageCourtMaisCorrect = "abcde";
    $messageTropLong = "abcdefghijklmnopqrstuvwxyzabcdefghijklmnopqrstuvwxyz";  // 52 caracteres
    $messageLongMaisCorrect = "abcdefghijklmnopqrstuvwxyzabcdefghijklmnopqrstuvwxy";  // 51 caracteres
    $messageVide = "";

    $alarme->setMessage($messageTropCourt);
    $this->assertNotEquals($messageTropCourt, $alarme->getMessage());
    $this->assertEquals($messageVide, $alarme->getMessage());

    $alarme->setMessage($messageTropLong);
    $this->assertNotEquals($messageTropLong, $alarme->getMessage());
    $this->assertEquals($messageVide, $alarme->getMessage());

    $alarme->setMessage($messageCourtMaisCorrect);
    $this->assertEquals($messageCourtMaisCorrect, $alarme->getMessage());

    $alarme->setMessage($messageLongMaisCorrect);
    $this->assertEquals($messageLongMaisCorrect, $alarme->getMessage());

  }
}
