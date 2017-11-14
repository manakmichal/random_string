<?php

final class StringGenerator
{

  public $numbers = '0123456789';

  public $lowerChars = 'abcdefghijklmnopqrstuvwxyz';

  public $upperChars = 'ABCDEFGHIJKLMNOPQRSTUVWXYZ';

  public $specialChars = '+@#$~^&*-_';

  public $characters;

  public function __construct($numbers = true, $lowerChars = true, $upperChars = true, $specialChars = true){
    $this->characters .= $numbers ? $this->numbers : "";
    $this->characters .= $lowerChars ? $this->lowerChars: "";
    $this->characters .= $upperChars ? $this->upperChars : "";
    $this->characters .= $specialChars ? $this->specialChars : "";
  }

  /**
   * Generate a random string with the specified length
   * @param string
   * @return string
   */
  private function generateString($length){
    $randomString = '';
    $charactersLength = strlen($this->characters);

    for ($i = 0; $i < $length; $i++) {
      $randomString .= $this->characters[rand(0, $charactersLength - 1)];
    }

    return $randomString;
  }

  /**
   * Generate random strings with the specified length and amount
   * @param int
   * @param int
   */
  public function getStrings($length = 10, $number = 10){
    for ($i = 0; $i < $number; $i++) {
      $string = $this->generateString($length);

      echo $string . "<br>";
    }
  }
}

$generator = new StringGenerator();
$generator->getStrings(20, 20);

?>
