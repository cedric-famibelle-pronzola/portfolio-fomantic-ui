<?php

session_start();

mb_internal_encoding('UTF-8');

use PHPMailer\PHPMailer\PHPMailer;

require_once 'PHPMailer/Exception.php';
require_once 'PHPMailer/PHPMailer.php';
require_once 'PHPMailer/SMTP.php';

include './secure/connect.php';
include './secure/regex.php';
include './secure/functions.php';

spl_autoload_register('chargerClasse');             # permet de charger les classes

$messagesManager = new MessagesManager($db);
$regexEmail = '[A-Za-z0-9](([_\.\-]?[a-zA-Z0-9]+)*)@([A-Za-z0-9]+)(([_\.\-]?[a-zA-Z0-9]+)*)\.([A-Za-z]{2,})';
$regexName = '^[a-zA-Z0-9áàâäãåçéèêëíìîïñóòôöõúùûüýÿæœÁÀÂÄÃÅÇÉÈÊËÍÌÎÏÑÓÒÔÖÕÚÙÛÜÝŸÆŒ._\s-]{2,30}$';


if(isset($_POST['sendMessage']))
{
  $firstName = trim(ucfirst(mb_strtolower($_POST['firstName'])));
  $lastName = trim(mb_strtoupper($_POST['lastName']));
  $email = trim($_POST['email']);
  $subject = htmlspecialchars(trim($_POST['subject']));
  $message = htmlspecialchars(trim($_POST['message']));
  $cgu = isset($_POST['checkbox']) ? true : false;

  if(!$cgu)
  {
    $_SESSION['noCGU'] = true;
    header('Location: ./');
    return;
  }

  if(!checkRegex($regexName, $firstName))
  {
    $_SESSION['wrongFirstName'] = true;
    header('Location: ./');
    return;
  }

  if(!checkRegex($regexName, $lastName))
  {
    $_SESSION['wrongLastName'] = true;
    header('Location: ./');
    return;
  }

  if(!checkRegex($regexEmail, $email))
  {
    $_SESSION['wrongEmail'] = true;
    header('Location: ./');
    return;
  }

  if(empty($subject))
  {
    $_SESSION['emptySubject'] = true;
    header('Location: ./');
    return;
  }
  
  if(empty($message))
  {
    $_SESSION['emptyMessage'] = true;
    header('Location: ./');
    return;
  }

  $messageArray = array(
    'firstName' => $firstName,
    'lastName' => $lastName,
    'email' => $email,
    'subject' => $subject,
    'message' => $message,
  );

  $newMessage = new Messages($messageArray);
  $messagesManager->addMessage($newMessage);

  $sendItToMe = new PHPMailer(true);
  $body = $newMessage->message();
  $messagesManager->sendItToMe($newMessage, $sendItToMe, $body);

  var_dump($newMessage);



}