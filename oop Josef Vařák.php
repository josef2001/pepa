<?php

abstract class User {
    
    public function __construct() {
 }

    private $Telefon;
    private $Email;
    protected $Ucet;
    protected $Heslo;
    protected $Tajemstvi;
    public $Jmeno = 'Josef';
    public $Prijmeni  = 'varak';
    public $Vek = '19';
    public $Zamestnani = 'bezdomovec';
    public $Skola = 'ssemi';

       abstract public  function var_dump($Skola,$Prijmeni,$Vek, $Zamestnani, $Jmeno, $Telefon, $Email,$Ucet, $Heslo , $Tajemstvi );
    
    
     private function setTelefon () {
        
     
         }
     private function setEmail () {
    }
            public function getJmeno () {
     
            }
            public function getPrijmeni () {
       }
            public function getVek () {
     }
            public function getZamestnani () {
       }
            public function getSkola () {
       }
  
  
       
  
}
?>

<?php 
echo 'Josef' . '<br />' ;
echo 'varak'. '<br />';
echo '19'. '<br />';
echo 'bezdomovec'. '<br />';
echo 'ssemi'. '<br />';
?>


