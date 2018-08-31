<?php
/**
 *
 */
class ViewController
{
    static public function home() {

        ConnectionHelper::checkConnectedUser();
        
        $page = new PageModel();
        $sHtml = TemplateHelper::createTemplate('home', $page->getOne('title', 'Home'));
        echo $sHtml;
    }
    static public function contact() {
        
        $page = new PageModel();
        $sHtml = TemplateHelper::createTemplate('contact', $page->getOne('title', 'Contact'));
        echo $sHtml;
    }

    static public function article()
    {
        $page = new PageModel();
               
        $sHtml = TemplateHelper::createTemplate('article', $page->getOne('title', 'Article'));
        echo $sHtml;
    }
}
