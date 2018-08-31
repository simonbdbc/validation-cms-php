<?php
/**
 *
 */
class AuthController
{

    public function login()
    {
        echo TemplateHelper::createTemplate('login', new stdClass());
    }

    public function loginAction()
    {
        $aConf = parse_ini_file ("config.ini",true);
        $sSessionKey = $aConf["auth"]["sessionKey"];
        
        $user = new UserModel();
        $username = $user->connectUser();
        $_SESSION[$sSessionKey] = $username;
        header('Location: /view/home');die;

    }
    public function logoutAction()
    {
        //@TODO update is_connected to 0
        session_destroy();
        header('Location: /view/home');die;
    }
}
