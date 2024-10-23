<?php
class Model
{
  protected $bd;
  private $news_num;
  private $row;
  private $count_news;
  private $max_page;
  private $id;
  public $page;
  public $news;
  public $last_new;

  function __construct($page)
  {
    //получение данных для подключения
    require_once '../config_bd.inc.php';
    
    //подключение к БД
    $this->bd = new mysqli(
      BD_HOST,
      BD_USER,
      BD_PASSWORD,
      BD_BASE
    );

    if($this->bd == false)
    {
      echo 'Ошибка подключения';
    }

    //получение переменных
    $this->page = $page;
  }

  //Получение последней новости
  public function get_last_new()
  {
    return $this->last_new = $this->bd
      ->query("SELECT * FROM `news` ORDER BY `date` DESC LIMIT 1")
      ->fetch_assoc();
  }

  //Получение списка новостей
  public function get_news($news_num)
  {
    $this->news_num = $news_num;
    $this->row = (int)($this->page - 1) * $this->news_num;
    $this->response = mysqli_real_escape_string($this->bd, $this->row);
    $this->result = $this->bd
      ->query("SELECT * FROM `news` ORDER BY `date` DESC LIMIT {$this->news_num} OFFSET {$this->response}");
    while($i = mysqli_fetch_assoc($this->result))
    {
      $this->news[] = $i; 
    }
    unset($i);
    return $this->news;
  }  

  //Получение количества страниц
  public function get_count_news()
  {
    $this->count_news = 
      mysqli_query($this->bd, "SELECT COUNT(*) FROM `news`")
      ->fetch_assoc()['COUNT(*)'];      
    return $this->max_page = ceil($this->count_news/$this->news_num);
  }


  //Получение новости по id
  public function get_new_buyId($id)
  {
    $this->id = (int) $id;
    
    $this->id = mysqli_real_escape_string($this->bd, $this->id);

    // запрос у базы определенной новости
    return $this->result = $this->bd
      ->query("SELECT * FROM `news` WHERE `id` = {$this->id}")
      ->fetch_assoc();
  }

  function __distruct()
  {
    $this->bd
      ->close();
  }
}