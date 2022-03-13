<?php

Class Conections{

   static public function conect(){

      $link = new PDO("mysql:host=localhost;dbname=users","root","");
      $link->exec('set names utf8');

      return $link;
   }
}


