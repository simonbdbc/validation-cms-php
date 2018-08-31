<?php
/**
 *
 */
class TemplateHelper
{
    public static function createTemplate(String $templateName, stdClass $values)
    {
        $aConf = parse_ini_file ("config.ini",true);
        $sTemplateDirectory = $aConf["template"]["templateDirectory"];

        $header = file_get_contents($sTemplateDirectory . '/layouts/header.html');
        $emptyTemplate = file_get_contents($sTemplateDirectory . '/' . $templateName . '.html');
        $footer = file_get_contents($sTemplateDirectory . '/layouts/footer.html');
        $result = $header . $emptyTemplate . $footer;
        foreach ($values as $key => $value) {
            $tag = strtoupper($key);
            if (strpos($result, '%%'.$tag.'%%')) {
                $result = str_replace('%%'.$tag.'%%', $value, $result);
            }
        }
        // var_dump($result);die;
        return $result;
    }

    public static function createTable(String $templateName, $aParms)
    {
        $aConf = parse_ini_file ("config.ini",true);
        $sTemplateDirectory = $aConf["template"]["templateDirectory"];

        $header = file_get_contents($sTemplateDirectory . '/layouts/header.html');
        $n = count($aParms);
        var_dump($n);
        $emptyTemplate = '';   
        for ($i=0; $i < $n ; $i++) { 
            foreach ($aParms[$i] as $key => $value) {
            // var_dump($value);
                $emptyTemplate .= '<tr><td><label>'.$key.'</label><p>'.$value.'</p></td></tr>';
            }
        }
        
        $footer = file_get_contents($sTemplateDirectory . '/layouts/footer.html');
        $result = $header . $emptyTemplate . $footer;
       
        return $result;
    }
}
