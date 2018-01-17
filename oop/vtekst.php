<?php
/**
 * Created by PhpStorm.
 * User: Karli
 * Date: 17.01.2018
 * Time: 09:27
 */

require_once 'tekst.php'; // lisame kasutuse klass,
// mida laiendame
class vtekst extends tekst
{
    // klassi omadused
    var $varv = '';
    /**
     * vtekst constructor.
     * @param string $varv
     */
    public function __construct($s = '', $v = '')
    {
        parent::maaraTekst($s); // tekst klassist kutsume tööle maaraTekst() funktsiooni
        $this->maaraVarv($v); // käsitsi loodud setter funktsioon
    }
    function maaraVarv($v){
        $this->varv = $v;
    }
    function prindiTekst()
    {
        if($this->varv == ''){
            parent::prindiTekst();
        } else {
            echo '<font color="'.$this->varv.'">'.$this->sone.'</font><br />';
        }
    }
}