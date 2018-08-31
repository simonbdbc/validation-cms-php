<?php
/**
 *
 */
class ConnectionHelper
{

    public static function checkConnectedUser()
    {
        $aConf = parse_ini_file ("config.ini",true);
        $sSessionKey = $aConf["auth"]["sessionKey"];
        $sLoginURI = $aConf["auth"]["loginURI"];

        if(isset($_SESSION[$sSessionKey])) {
            $user = new UserModel();
            $user->checkConnection($_SESSION[$sSessionKey]);
        } else {
            header('Location: ' . $sLoginURI);die;
        }
    }
}
