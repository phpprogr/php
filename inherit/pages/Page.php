<?php ## Базовый класс страницы
ini_set('display_errors', 1);
error_reporting(E_ALL);
echo '1'; die();
  class Page
  {
    // Любая страница имеет заголовок
    protected $title;
    // И содержимое
    protected $content;
    // Конструктор класса
    public function __construct($title = '', $content = '')
    {
      $this->title = $title;
      $this->content = $content;
    }
    // Получение заголовка страницы
    public function title()
    {
      return $this->title;
    }
    // Получение содержимого страницы
    public function content()
    {
      return $this->content;
    }
    // Формирование HTML-представления страницы
    public function render()
    {
      echo "<h1>".htmlspecialchars($this->title())."</h1>";
      echo "</p>".nl2br(htmlspecialchars($this->content()))."</p>";
    }
  }
$content = "Hello world!";

$aa = new Page($content);
////$title = "Hello world!";
//
 $aa->render();
//$content = "Hello world!";

// $aa->content($content);

//Page::render();
?>