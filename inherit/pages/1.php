<?php
ini_set('display_errors', 1);
error_reporting(E_ALL);
class Page
{
    public function title()
    {
        echo "title";
    }
    public function content()
    {
        echo "content";
    }
}

print_r( Page::content())
?>
