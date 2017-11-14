<?php

final class StringGenerator
{

  public $numbers = '0123456789';

  public $lowerChars = 'abcdefghijklmnopqrstuvwxyz';

  public $upperChars = 'ABCDEFGHIJKLMNOPQRSTUVWXYZ';

  public $specialChars = '+@#$~^&*-_';

  public $characters;

  public $strings = array();

  public function __construct($numbers = true, $lowerChars = true, $upperChars = true, $specialChars = true)
  {
    if(!$numbers && !$lowerChars && !$upperChars && !$specialChars)
      throw new InvalidArgumentException();

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
  private function generateString($length)
  {
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
   * @return StringGenerator
   * @throws InvalidArgumentException
   */
  public function generateStrings($length = 10, $number = 10)
  {
    if(gettype($length) != 'integer' || $length === 0)
      throw new InvalidArgumentException();

    if(gettype($number) != 'integer' || $number === 0)
      throw new InvalidArgumentException();

    for ($i = 0; $i < $number; $i++) {
      $string = $this->generateString($length);

      $this->strings[] = $string;
    }

    return $this;
  }

  /**
   * Return the strings as an array
   * @return array
   */
  public function getStrings(){
    if(count($this->strings) == 0)
      throw new UnexpectedValueException();

    return $this->strings;
  }
}

?>
