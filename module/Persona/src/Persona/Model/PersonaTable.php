<?php
/**
 * Description of PersonaTable
 *
 * @author anb
 */
namespace Persona\Model;

 use Zend\Db\TableGateway\TableGateway;

 class PersonaTable
 {
     protected $tableGateWay;
     
    public function __construct(TableGateway $tableGateWay) {
        $this->tableGateWay = $tableGateWay;
    }
    
    public function fetchAll()
    {
        $rs = $this->tableGateWay->select();
        return $rs;
    }
    
    public function getPersona($id)
    {
        $id = (int) $id;
        $rowset = $this->tableGateWay->select(array('cod_per' => $id));
        $row = $rowset->current();
        if (!$row) {
             throw new \Exception("Could not find row $id");
        }
        return $row;        
    }
    
    public function savePersona(array $dataPersona)
    {
         $id = (int) $dataPersona['cod_per']; 
         unset($dataPersona['cod_per']);
         if ($id == 0) {             
             $this->tableGateway->insert($dataPersona);
         } else {
             if ($this->getPersona($id)) {
                 $this->tableGateway->update($dataPersona, array('cod_per' => $id));
             } else {
                 throw new \Exception('Persona id does not exist');
             }
         }
    }
    
    public function deletePersona($id)
    {
         $this->tableGateway->delete(array('cod_per' => (int) $id));
    }
 }