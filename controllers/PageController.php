<?php
/**
 *
 */
class PageController
{
    public function insertPage()
    {
        
        $aParams = [
            "sTitle" => $_REQUEST["sTitle"], 
            "sContent" => $_REQUEST["sContent"],
            "bHidden" => "0"
        ];

        if(isset($_REQUEST["bHidden"])) {
            $aParams["bHidden"]="1";
        }
        // var_dump($aParams);die;
        $page = new PageModel();
        $page->insert($aParams);
        $sHtml = TemplateHelper::createTable('list', $page->getAll());
        echo $sHtml;

    }
}