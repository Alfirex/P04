<?php
//*En esta cuarta fase damos un giro bastante importante ya que encaminamos nuestro proyecto hacia el proyecto definitivo incluyendo los arrays de naves

class ia
{
//Atributos o propiedades de la IA: variables simples
  public $tipo="nave";
  public $mapaCol=4;
  public $mapaFil=4;
  public $numNaves=3;

//Array
//Naves humanas-array vacio 

  public $navesHumano=[];

//Array
//Inteligencia artificial
//Variables multiples=ARRAYS con claves y valores;  array dinamico 
  public $navesIA=[
    0=>["tipo"=>"nave",
        "col"=>0,
        "fil"=>3],
    1=>["tipo"=>"nave",
        "col"=>2,
        "fil"=>3],
    2=>["tipo"=>"nave",
        "col"=>1,
        "fil"=>3],
];
//Metodo o funcion GET(Pide): pide la variable con return$this->
  public function getMapaColumna() {
    return $this->mapaCol;
  }
  public function getMapaFila() {
    return $this->mapaFil;
  }
  public function getNave() {
    return $this->numNaves;
  }
  public function getNaveshumano(){
    return $this->navesHumano;
  }
  public function getNavesIA(){
    return $this->navesIA;
  }
//SETERS(modifica) se establece estructura de control a la columna y fila,
  public function setMapaCol($mapaCol){
      
      if($mapaCol>3 ){
         $this->mapaCol = 3;
      }
      elseif ($mapaCol<0) {
        $this->mapaCol = 0;
      }
      else{
        $this->mapaCol = $mapaCol;
      }
  }
  public function setMapaFil($mapaFil){
      
      if($mapaFil>3 ){
         $this->mapaFil = 3;
     }    
      elseif ($mapaFil<0){
        $this->mapaFil = 0;
     }    
      else{
        $this->mapaFil = $mapaFil;
     }
  }
  //haces seter para navesHumano variables que pide y con array: FUNCION ARRAY PUSH DE $NAVE,
  //*Funcion que hace añade una nueva nave al array de naves humanas.
  public function setNaveHumana($tipo,$col,$fil){
    $this->navesHumano[]=[
      "tipo"=>$tipo,
      "col"=>$col,
      "fil"=>$fil,
    ];
  }
  public function setNavesIA($navesIA){
    $this->navesIA = $navesIA;
  }
//Movimiento RAMDOM de naves =rand(); 
  public function randompos() {
  $this->columna=rand(0,3);
  $this->fila=rand(0,3);
  }
}
?>