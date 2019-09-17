<?php
/**
 * Created by PhpStorm.
 * User: sergejslepenkov
 * Date: 2019-09-17
 * Time: 13:52
 */

global $title;
global $keywords;
global $description;
$page = basename($_SERVER['REQUEST_URI']);
//echo $page;
$res = do_query("SELECT * FROM `head` JOIN `page` ON head.meta_url = page.url WHERE head.meta_url = '{$page}'");
if (is_array($res) || is_object($res)){

    foreach ($res as $item) {
        if ($page == $item['meta_url']) {
            $title = $item['meta_title'] .' | jim wood - jim-wood.info';
            $keywords = $item['meta_keywords'];
            $description = $item['meta_description'];
        }
    }
}