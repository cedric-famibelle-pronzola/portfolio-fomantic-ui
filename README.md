# Portfolio réalisé avec *Fomantic UI (fork de Semantic UI)*

# Table des matières
- # [Prérequis](#prérequis)
- # [Installation](#installation)
- # [Configuration](#configuration)
    * ## [Base de données](#base-de-données)
    * ## [PHPMailer](#phpmailer)
- # [Lien](#lien)

---

# Prérequis 
- NodeJS >= 8
- npm >= 5
- Serveur (Laragon, LAMP, XAMP, MAMP ou WAMP)
- [Base données](./bdd/messages.sql) (permet d'utiliser le formulaire de contact)

# Installation

Après avoir décompressé ou cloné le repo, accédez au dossier et installez les dépendances grâce aux commandes suivantes (à effectuer dans le terminal) :
- $ `cd portfolio-fomantic-ui` (accès au dossier)
- $ `npm i` (installation des dépendances)

# Configuration

## Base de données

Accédez tout d'abord au fichier [DbInfos.php](./classes/DbInfos.php) qui se trouve ici -> `/classes/DbInfos.php`. Ce dernier contient les constantes vous permettant de vous connecter à la base de données. Vous pouvez modifier les informations à votre convenance.

```php
4 CONST HOST = 'localhost';     // adresse du serveur
5 CONST DB_NAME = 'fomantic';   // nom de la base de données
6 CONST USER = 'fomantic';      // nom d'utilisateur
7 CONST PASS = 'Fomantic57*';   // mot de passe
```
*Pensez à importer la [base de données](./bdd/messages.sql).*

## PHPMailer

Il faudra ensuite configurer [PHPMailer](./classes/MessagesManager.php#L67) (utile pour réceptionner les informations envoyées via le formulaire de contact). Le fichier est ici -> `/classes/MessagesManager.php`.

```php
70 $sendItToMe->isSMTP();
71 $sendItToMe->CharSet = 'UTF-8';
72 $sendItToMe->Encoding = 'base64';
73 $sendItToMe->Host = 'host';            // server mail (exemple -> ssl0.ovh.net)
74 $sendItToMe->SMTPAuth = true;
75 $sendItToMe->Username = 'username';    // nom d'utilisateur (exemple -> senku@ishigami.jp)
76 $sendItToMe->Password = 'pass';        // mot de passe (exemple -> Dr.Stone)
77 $sendItToMe->SMTPSecure = 'tls';
78 $sendItToMe->Port = 587;
79
80 $sendItToMe->setFrom("username", "WebContact -> " . $message->firstName() . ' ' . $message->lastName() . ' ( ' . $message->email() . ' )');
81 $sendItToMe->addAddress('username');
82
83 $sendItToMe->isHTML(true);
84 $sendItToMe->Subject = $message->subject();
85 $sendItToMe->Body = "$body";
86
87 $sendItToMe->send();
```

# Lien

Le dépôt a été déployé à cette adresse -> [https://www.famibelle-pronzola.website](https://www.famibelle-pronzola.website)