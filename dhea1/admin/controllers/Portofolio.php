<?php
 
 class Portofolio extends Controller 
 {
     public function index()
     {
         echo "$this->view('portofolio/index')";  //menargetkan ke index.php yang ada di folder views/portofolio

         ;
     }
 }