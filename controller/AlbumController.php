<?php

namespace controller;

use model\Foto;

class Album{

    public function index(){
    	$fotos = new Foto();
    	
    	

    	include('view/album.php');
    }

 

    
   
}