<?php

namespace app\services;

use PhpImap\Mailbox;
use PhpImap\IncomingMail;
use PhpImap\IncomingMailAttachment;
/**
 * Created by PhpStorm.
 * User: IF
 * Date: 03.09.2017
 * Time: 21:53
 */
class MailService extends Service
{
    public $host;
    public $user;
    public $pass;

    public function __construct()
    {
       include 'config/mail.php';

        $this->host = $config['host'];
        $this->pass = $config['pass'];
        $this->user = $config['user'];
    }

    public function receive()
    {
        print "receive from {$this->host} \r\n";

        $mailbox = new Mailbox("{{$this->host}}INBOX", $this->user, $this->pass, 'download');

        $mailsIds = $mailbox->searchMailbox('ALL');

        print_r($mailsIds);
    }
}