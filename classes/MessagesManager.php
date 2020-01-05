<?php

class MessagesManager
{

  private $_db;

  public function __construct($db)
  {
    $this->setDb($db);
  }

  public function setDb(PDO $db)
  {
    $this->_db = $db;
  }

  /**
   * Permet de récupérer les informations d'un message grâce à son ID
   * --------------------------------------------------------------------
   * 
   * @param  integer $id ID d'un utilisateur
   * @return object Retourne l'objet Users
   */
  public function get(Messages $messageId)
  {

    $id = $messageId->messageId();

    $q = $this->_db->query('SELECT *
				FROM messages
				WHERE id = ' . $id);

    $reponse = $q->fetch(PDO::FETCH_ASSOC);

    return $reponse;
  }

  public function addMessage(Messages $message)
  {
    try {
      $q = $this->_db->prepare('INSERT INTO messages(first_name, last_name, email, subject, message) 
      VALUES(:firstName, :lastName, :email, :subject, :message)');

      $q->bindValue(':firstName', $message->firstName(), PDO::PARAM_STR);
      $q->bindValue(':lastName', $message->lastName(), PDO::PARAM_STR);
      $q->bindValue(':email', $message->email(), PDO::PARAM_STR);
      $q->bindValue(':subject', $message->subject(), PDO::PARAM_STR);
      $q->bindValue(':message', $message->message(), PDO::PARAM_STR);

      $q->execute();
    } catch (PDOExeption $e) {
      echo $e->getMessage();
    }
  }


  /**
   * Envoie un mail de confirmation après l'ajout d'un utilisateur
   * ---------------------------------------------------------------
   *
   * @param Users $user Atttend un objet Users
   * @param object $mail Attend l'objet PHPMailer en argument
   * @param html $mailBody Attend le cors du mail en argument
   * @return void
   */
  public function sendItToMe(Messages $message, $sendItToMe, $body)
  {

    $sendItToMe->isSMTP();
    $sendItToMe->CharSet = 'UTF-8';
    $sendItToMe->Encoding = 'base64';
    $sendItToMe->Host = 'host';
    $sendItToMe->SMTPAuth = true;
    $sendItToMe->Username = 'username';
    $sendItToMe->Password = 'pass';
    $sendItToMe->SMTPSecure = 'tls';
    $sendItToMe->Port = 587;

    $sendItToMe->setFrom("username", "WebContact -> " . $message->firstName() . ' ' . $message->lastName() . ' ( ' . $message->email() . ' )');
    $sendItToMe->addAddress('username');

    $sendItToMe->isHTML(true);
    $sendItToMe->Subject = $message->subject();
    $sendItToMe->Body = "$body";

    $sendItToMe->send();
  }
}
