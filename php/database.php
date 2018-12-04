
<?php

  class database{
 private $dsn="mysql:host=localhost;dbname=doctors";
 private $user="root";
 private $password="root";
 private $pd=null;


 function __construct(){

   $this->pd=new PDO($this->dsn,$this->user,$this->password,
   array(PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES UTF8"));

 }

  public function getrow($query,$param=array()){

      $stm= $this->pd->prepare($query);
      $stm->execute($param);

      return $stm->fetch();
   }

   public function getRows($query,$param=array())
   {
    $stm= $this->pd->prepare($query);
    $stm->execute($param);

    return $stm->fetchAll();

   }
   public function queryOb($query,$param=array())
   {
     $stm=$this->pd->prepare($query);
     $stm->execute($param);
   }
 }


?>
