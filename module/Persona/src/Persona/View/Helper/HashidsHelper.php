<?php
namespace Persona\View\Helper;

use Zend\View\Helper\AbstractHelper;
use Hashids; 
class HashidsHelper extends AbstractHelper
{
    private $hashids;
    
    public function __construct() {
        $this->hashids = new Hashids\Hashids(
            'this is my salt #HASH',  4);
    }
    /*
    public function __invoke($str)
    {
        // 01 - config addional by library composer
        //$id = $hashids->encode(1, 2, 3);
        //$numbers = $hashids->decode($id);
        
        
        if (is_string($str)){
            return $this->hashids->encode($str);
        }

 
        return 'found';
    }
    */
    
    /**
     * 
     * @param string $str caracter ID 
     * @return type string hash
     */
    public function encode($str)
    {
        return $this->hashids->encode($str);
    }
    
    public function decode($id)
    {
        return $this->hashids->decode($id);
    }
}