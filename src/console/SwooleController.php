<?php
/**
 * Created by PhpStorm.
 * User: lee
 * Date: 2018/7/31
 * Time: 15:19
 */

namespace Elilee\swoole\console;


use yii\console\Controller;

class SwooleController extends Controller
{

    public function actionStart(){
        $swoole = new swoole_websocket_server(

        );
        $this->stdout('nihao');
    }

}