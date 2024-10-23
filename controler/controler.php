<?php
class controler
{
  private $Model;
  private $id;
  public $page;

 public function __construct($get)
 {
  if(isset($get))
  {
    $this->page = $get['page'];
    if($this->page < 1)
    {
      $this->page = 1;
    }
  } else {
    $this->page = 1;
  }

  if(isset($get['id']))
  {
    $this->id = (int) $get['id'];
  } else {
    $this->id = 1;
  }

 require_once '../model/model.php';

  $this->Model = new Model($this->page);
 }
 
 //Получение данных для главной страницы
public function get_lastNew()
{
  return $this->Model->get_last_new();
}


 public function get_news($num)
 {
  $num = (int) $num;
  return $this->Model->get_news($num); //Вводим количество новостей
 }

 //Получение числа страниц
 public function get_count_news()
 {
  return $this->Model->get_count_news();
 }

 //Получение данных для детальной страницы
 public function get_new_buyId()
 {
    return $this->Model->get_new_buyId($this->id);
 }
}