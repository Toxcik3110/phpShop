<?php

/**
 *
 */
class CabinetController
{

    function actionIndex()
    {
        $userId = User::checkLogged();

        $user = User::getUserById($userId);

        require_once(ROOT.'/views/cabinet/index.php');

        return true;
    }
}


 ?>
