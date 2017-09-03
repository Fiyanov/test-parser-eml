<?php
/**
 * Created by PhpStorm.
 * User: IF
 * Date: 03.09.2017
 * Time: 21:39
 */

namespace app\commands;

use yii\console\Controller;
use app\services\MailService;

class ParserController extends Controller
{
    public function actionMail()
    {
        echo "start... \r\n";

        (new MailService())->receive();
    }
}