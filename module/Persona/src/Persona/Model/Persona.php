<?php
/**
 * Description of Persona
 *
 * @author anb
 */

 namespace Persona\Model;

 class Persona
 {
    public $cod_per;
    public $nom_per; 
    public $ape_patper;
    public $ape_matpe;
    public $dni_per;
    public $fec_nacper; 
    public $est_civilper; 
    public $miembro_per; 
    public $fec_conversionper; 
    public $dir_per;
    public $ref_per; 
    public $tel_per; 
    public $cel_per; 
    public $bs_per;
    public $cod_iglesia; 
    public $cod_ubigeo;
     
     public function exchangeArray($data)
     {
        $this->cod_per = (!empty($data['cod_per'])) ? $data['cod_per'] : null;
        $this->nom_per = (!empty($data['nom_per'])) ? $data['nom_per'] : null; 
        $this->ape_patper = (!empty($data['ape_patper'])) ? $data['ape_patper'] : null;
        $this->ape_matpe = (!empty($data['ape_matpe'])) ? $data['ape_matpe'] : null;
        $this->dni_per = (!empty($data['dni_per'])) ? $data['dni_per'] : null;
        $this->fec_nacper = (!empty($data['fec_nacper'])) ? $data['fec_nacper'] : null;
        $this->est_civilper = (!empty($data['est_civilper'])) ? $data['est_civilper'] : null;
        $this->miembro_per = (!empty($data['miembro_per'])) ? $data['miembro_per'] : null;
        $this->fec_conversionper = (!empty($data['fec_conversionper'])) ? $data['fec_conversionper'] : null;
        $this->dir_per = (!empty($data['dir_per'])) ? $data['dir_per'] : null;
        $this->ref_per = (!empty($data['ref_per'])) ? $data['ref_per'] : null;
        $this->tel_per = (!empty($data['tel_per'])) ? $data['tel_per'] : null;
        $this->cel_per = (!empty($data['cel_per'])) ? $data['cel_per'] : null;
        $this->bs_per = (!empty($data['bs_per'])) ? $data['bs_per'] : null;
        $this->cod_iglesia = (!empty($data['cod_iglesia'])) ? $data['cod_iglesia'] : null;
        $this->cod_ubigeo = (!empty($data['cod_ubigeo'])) ? $data['cod_ubigeo'] : null;
     }
     
     public function ejemplo()
     {
         
     }
 }
