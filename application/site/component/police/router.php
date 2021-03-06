<?php
/**
 * Belgian Police Web Platform - Police Component
 *
 * @copyright	Copyright (C) 2012 - 2013 Timble CVBA. (http://www.timble.net)
 * @license		GNU GPLv3 <http://www.gnu.org/licenses/gpl.html>
 * @link		https://github.com/belgianpolice/internet-platform
 */

use Nooku\Library;

class PoliceRouter extends Library\DispatcherRouter
{
    public function build(Library\HttpUrl $url)
    {
        $segments = array();


        return $segments;
    }

    public function parse(Library\HttpUrl $url)
    {
        $vars = array();
        $path = &$url->path;

        $page = $this->getObject('application.pages')->getActive();

        $view  = $page->getLink()->query['view'];

        if($view == 'page')
        {
            if(!empty($path)) {
                throw new Library\HttpExceptionNotFound('Page does not exist');
            }
        }

        return $vars;
    }
}

