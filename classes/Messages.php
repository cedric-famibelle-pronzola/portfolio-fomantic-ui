<?php

class Messages
{

  private $messageId;
  private $firstName;
  private $lastName;
  private $email;
  private $subject;
  private $message;

  public function __construct(array $donnees)
  {
    $this->hydrate($donnees);
  }


  /**
   * @param  array $donnees 
   * @return void
   */
  public function hydrate(array $donnees)
  {
    foreach ($donnees as $key => $value) {
      $method = 'set' . ucfirst($key);

      if (method_exists($this, $method)) {
        $this->$method($value);
      }
    }
  }

  public function messageId()
  {
    return $this->messageId;
  }

  public function firstName()
  {
    return $this->firstName;
  }

  public function lastName()
  {
    return $this->lastName;
  }

  public function email()
  {
    return $this->email;
  }

  public function subject()
  {
    return $this->subject;
  }

  public function message()
  {
    return $this->message;
  }

  public function setMessageId($messageId)
  {
    $id = (int) $messageId;

    if ($id > 0) {
      $this->messageId = $messageId;
    }
  }

  public function setFirstName($firstName)
  {
    if (is_string($firstName)) {
      $this->firstName = $firstName;
    }
  }

  public function setLastName($lastName)
  {
    if (is_string($lastName)) {
      $this->lastName = $lastName;
    }
  }

  public function setEmail($email)
  {
    if (is_string($email)) {
      $this->email = $email;
    }
  }

  public function setSubject($subject)
  {
    if (is_string($subject)) {
      $this->subject = $subject;
    }
  }

  public function setMessage($message)
  {
    if (is_string($message)) {
      $this->message = $message;
    }
  }
}
