
<!-- begin of generated class -->
<?php
/*
*
* -------------------------------------------------------
* CLASSNAME:        bodegas
* GENERATION DATE:  30.07.2018
* CLASS FILE:       C:\wamp64\www\genera_clase/generated_classes/class.bodegas.php
* FOR MYSQL TABLE:  bodegas
* FOR MYSQL DB:     carrillo_dbaurora
* -------------------------------------------------------
* CODE GENERATED BY:
* MY PHP-MYSQL-CLASS GENERATOR
* from: >> www.voegeli.li >> (download for free!)
* modify: >> www.aurora-ec.net >> (download for free!)
* -------------------------------------------------------
*
*/
include_once("../resources/class.aurora.php");
// **********************
// CLASS DECLARATION
// **********************

class bodegas
{ // class : begin


// **********************
// ATTRIBUTE DECLARATION
// **********************


public $ListID;   // (normal Attribute)
public $TimeCreated;   // (normal Attribute)
public $TimeModified;   // (normal Attribute)
public $EditSequence;   // (normal Attribute)
public $Name;   // (normal Attribute)
public $FullName;   // (normal Attribute)
public $IsActive;   // (normal Attribute)
public $ParentRef_ListID;   // (normal Attribute)
public $ParentRef_FullName;   // (normal Attribute)
public $Sublevel;   // (normal Attribute)
public $Status;   // (normal Attribute)
public $Estado;   // (normal Attribute)

var $db; // Instance of class db
var $estado; 


// **********************
// CONSTRUCTOR METHOD
// **********************

function __construct()
{

$this->db = conecta_SYNC();
}

function __destruct()
{


}
public function initialize($entity = null, $options = array())
    {
     $ListID= new Text("ListID");
$ListID->setLabel("ListID");
$ListID->setFilters(array('striptags', 'strig'));
$ListID->addValidators(array(
new PresenceOf(array(
'message'=> 'Mensaje de validacion'
))
));
$this->add($ListID);

$TimeCreated= new Date("TimeCreated");
$TimeCreated->setLabel("TimeCreated");
$TimeCreated->addValidators(array(
new PresenceOf(array(
'message'=> 'Mensaje de validacion'
))
));
$this->add($TimeCreated);

$TimeModified= new Date("TimeModified");
$TimeModified->setLabel("TimeModified");
$TimeModified->addValidators(array(
new PresenceOf(array(
'message'=> 'Mensaje de validacion'
))
));
$this->add($TimeModified);

$EditSequence= new Numeric("EditSequence");
$EditSequence->setLabel("EditSequence");
$EditSequence->setFilters(array('int'));
$EditSequence->addValidators(array(
new PresenceOf(array(
'message'=> 'Mensaje de validacion'
))
));
$this->add($EditSequence);

$Name= new Text("Name");
$Name->setLabel("Name");
$Name->setFilters(array('striptags', 'strig'));
$Name->addValidators(array(
new PresenceOf(array(
'message'=> 'Mensaje de validacion'
))
));
$this->add($Name);

$FullName= new Text("FullName");
$FullName->setLabel("FullName");
$FullName->setFilters(array('striptags', 'strig'));
$FullName->addValidators(array(
new PresenceOf(array(
'message'=> 'Mensaje de validacion'
))
));
$this->add($FullName);

$IsActive= new Text("IsActive");
$IsActive->setLabel("IsActive");
$IsActive->setFilters(array('striptags', 'strig'));
$IsActive->addValidators(array(
new PresenceOf(array(
'message'=> 'Mensaje de validacion'
))
));
$this->add($IsActive);

$ParentRef_ListID= new Text("ParentRef_ListID");
$ParentRef_ListID->setLabel("ParentRef_ListID");
$ParentRef_ListID->setFilters(array('striptags', 'strig'));
$ParentRef_ListID->addValidators(array(
new PresenceOf(array(
'message'=> 'Mensaje de validacion'
))
));
$this->add($ParentRef_ListID);

$ParentRef_FullName= new Text("ParentRef_FullName");
$ParentRef_FullName->setLabel("ParentRef_FullName");
$ParentRef_FullName->setFilters(array('striptags', 'strig'));
$ParentRef_FullName->addValidators(array(
new PresenceOf(array(
'message'=> 'Mensaje de validacion'
))
));
$this->add($ParentRef_FullName);

$Sublevel= new Numeric("Sublevel");
$Sublevel->setLabel("Sublevel");
$Sublevel->setFilters(array('int'));
$Sublevel->addValidators(array(
new PresenceOf(array(
'message'=> 'Mensaje de validacion'
))
));
$this->add($Sublevel);

$Status= new Text("Status");
$Status->setLabel("Status");
$Status->setFilters(array('striptags', 'strig'));
$Status->addValidators(array(
new PresenceOf(array(
'message'=> 'Mensaje de validacion'
))
));
$this->add($Status);

$Estado= new Text("Estado");
$Estado->setLabel("Estado");
$Estado->setFilters(array('striptags', 'strig'));
$Estado->addValidators(array(
new PresenceOf(array(
'message'=> 'Mensaje de validacion'
))
));
$this->add($Estado);


    }
    
function genJson_bodegas($jsonString)
{
$_SESSION['bodegas']['ListID'] = $jsonString->ListID;
$_SESSION['bodegas']['TimeCreated'] = $jsonString->TimeCreated;
$_SESSION['bodegas']['TimeModified'] = $jsonString->TimeModified;
$_SESSION['bodegas']['EditSequence'] = $jsonString->EditSequence;
$_SESSION['bodegas']['Name'] = $jsonString->Name;
$_SESSION['bodegas']['FullName'] = $jsonString->FullName;
$_SESSION['bodegas']['IsActive'] = $jsonString->IsActive;
$_SESSION['bodegas']['ParentRef_ListID'] = $jsonString->ParentRef_ListID;
$_SESSION['bodegas']['ParentRef_FullName'] = $jsonString->ParentRef_FullName;
$_SESSION['bodegas']['Sublevel'] = $jsonString->Sublevel;
$_SESSION['bodegas']['Status'] = $jsonString->Status;
$_SESSION['bodegas']['Estado'] = $jsonString->Estado;

}

function genInsert_bodegas()
{
$this->setListID($_SESSION['bodegas']['ListID']);
$this->setTimeCreated($_SESSION['bodegas']['TimeCreated']);
$this->setTimeModified($_SESSION['bodegas']['TimeModified']);
$this->setEditSequence($_SESSION['bodegas']['EditSequence']);
$this->setName($_SESSION['bodegas']['Name']);
$this->setFullName($_SESSION['bodegas']['FullName']);
$this->setIsActive($_SESSION['bodegas']['IsActive']);
$this->setParentRef_ListID($_SESSION['bodegas']['ParentRef_ListID']);
$this->setParentRef_FullName($_SESSION['bodegas']['ParentRef_FullName']);
$this->setSublevel($_SESSION['bodegas']['Sublevel']);
$this->setStatus($_SESSION['bodegas']['Status']);
$this->setEstado($_SESSION['bodegas']['Estado']);

}

function genLimpia_bodegas()
{
$_SESSION['bodegas']['ListID'] = ' ';
$_SESSION['bodegas']['TimeCreated'] = ' ';
$_SESSION['bodegas']['TimeModified'] = ' ';
$_SESSION['bodegas']['EditSequence'] = ' ';
$_SESSION['bodegas']['Name'] = ' ';
$_SESSION['bodegas']['FullName'] = ' ';
$_SESSION['bodegas']['IsActive'] = ' ';
$_SESSION['bodegas']['ParentRef_ListID'] = ' ';
$_SESSION['bodegas']['ParentRef_FullName'] = ' ';
$_SESSION['bodegas']['Sublevel'] = ' ';
$_SESSION['bodegas']['Status'] = ' ';
$_SESSION['bodegas']['Estado'] = ' ';

}

function gentraverse_bodegas($node)
{
$node->getElementsByTagName('ListID')->item(0) == NULL ? $_SESSION['bodegas']['ListID'] = ' ' : $_SESSION['bodegas']['ListID'] = $node->getElementsByTagName('ListID')->item(0)->nodeValue;
$node->getElementsByTagName('TimeCreated')->item(0) == NULL ? $_SESSION['bodegas']['TimeCreated'] = '2010-08-10' : $_SESSION['bodegas']['TimeCreated'] = $node->getElementsByTagName('TimeCreated')->item(0)->nodeValue;
$node->getElementsByTagName('TimeModified')->item(0) == NULL ? $_SESSION['bodegas']['TimeModified'] = '2010-08-10' : $_SESSION['bodegas']['TimeModified'] = $node->getElementsByTagName('TimeModified')->item(0)->nodeValue;
$node->getElementsByTagName('EditSequence')->item(0) == NULL ? $_SESSION['bodegas']['EditSequence'] = 0 : $_SESSION['bodegas']['EditSequence'] = $node->getElementsByTagName('EditSequence')->item(0)->nodeValue;
$node->getElementsByTagName('Name')->item(0) == NULL ? $_SESSION['bodegas']['Name'] = ' ' : $_SESSION['bodegas']['Name'] = $node->getElementsByTagName('Name')->item(0)->nodeValue;
$node->getElementsByTagName('FullName')->item(0) == NULL ? $_SESSION['bodegas']['FullName'] = ' ' : $_SESSION['bodegas']['FullName'] = $node->getElementsByTagName('FullName')->item(0)->nodeValue;
$node->getElementsByTagName('IsActive')->item(0) == NULL ? $_SESSION['bodegas']['IsActive'] = ' ' : $_SESSION['bodegas']['IsActive'] = $node->getElementsByTagName('IsActive')->item(0)->nodeValue;
$node->getElementsByTagName('ListID')->item(0) == NULL ? $_SESSION['bodegas']['ParentRef_ListID'] = ' ' : $_SESSION['bodegas']['ParentRef_ListID'] = $node->getElementsByTagName('ListID')->item(0)->nodeValue;
$node->getElementsByTagName('FullName')->item(0) == NULL ? $_SESSION['bodegas']['ParentRef_FullName'] = ' ' : $_SESSION['bodegas']['ParentRef_FullName'] = $node->getElementsByTagName('FullName')->item(0)->nodeValue;
$node->getElementsByTagName('Sublevel')->item(0) == NULL ? $_SESSION['bodegas']['Sublevel'] = 0 : $_SESSION['bodegas']['Sublevel'] = $node->getElementsByTagName('Sublevel')->item(0)->nodeValue;
$node->getElementsByTagName('Status')->item(0) == NULL ? $_SESSION['bodegas']['Status'] = ' ' : $_SESSION['bodegas']['Status'] = $node->getElementsByTagName('Status')->item(0)->nodeValue;
$node->getElementsByTagName('Estado')->item(0) == NULL ? $_SESSION['bodegas']['Estado'] = ' ' : $_SESSION['bodegas']['Estado'] = $node->getElementsByTagName('Estado')->item(0)->nodeValue;

}

function adiciona_bodegas()
{
        $this->estado = 'ERR';
	$this->db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        try {
        $sql = 'INSERT INTO bodegas (  ListID, TimeCreated, TimeModified, EditSequence, Name, FullName, IsActive, ParentRef_ListID, ParentRef_FullName, Sublevel, Status, Estado) VALUES ( :ListID, :TimeCreated, :TimeModified, :EditSequence, :Name, :FullName, :IsActive, :ParentRef_ListID, :ParentRef_FullName, :Sublevel, :Status, :Estado)';
	$stmt = $this->db->prepare($sql);
	 $stmt->bindParam(':ListID', $_SESSION['bodegas']['ListID'] );
	$stmt->bindParam(':TimeCreated', $_SESSION['bodegas']['TimeCreated'] );
	$stmt->bindParam(':TimeModified', $_SESSION['bodegas']['TimeModified'] );
	$stmt->bindParam(':EditSequence', $_SESSION['bodegas']['EditSequence'] );
	$stmt->bindParam(':Name', $_SESSION['bodegas']['Name'] );
	$stmt->bindParam(':FullName', $_SESSION['bodegas']['FullName'] );
	$stmt->bindParam(':IsActive', $_SESSION['bodegas']['IsActive'] );
	$stmt->bindParam(':ParentRef_ListID', $_SESSION['bodegas']['ParentRef_ListID'] );
	$stmt->bindParam(':ParentRef_FullName', $_SESSION['bodegas']['ParentRef_FullName'] );
	$stmt->bindParam(':Sublevel', $_SESSION['bodegas']['Sublevel'] );
	$stmt->bindParam(':Status', $_SESSION['bodegas']['Status'] );
	$stmt->bindParam(':Estado', $_SESSION['bodegas']['Estado'] );
	$stmt->execute();
        } catch(PDOException $e) {
            echo $e->getMessage();
        }    
}

function quitaslashes_bodegas()
{
         $_SESSION['bodegas']['ListID'] = htmlspecialchars(strip_tags($_SESSION['bodegas']['ListID']));
$_SESSION['bodegas']['TimeCreated'] = htmlspecialchars(strip_tags($_SESSION['bodegas']['TimeCreated']));
$_SESSION['bodegas']['TimeModified'] = htmlspecialchars(strip_tags($_SESSION['bodegas']['TimeModified']));
$_SESSION['bodegas']['EditSequence'] = htmlspecialchars(strip_tags($_SESSION['bodegas']['EditSequence']));
$_SESSION['bodegas']['Name'] = htmlspecialchars(strip_tags($_SESSION['bodegas']['Name']));
$_SESSION['bodegas']['FullName'] = htmlspecialchars(strip_tags($_SESSION['bodegas']['FullName']));
$_SESSION['bodegas']['IsActive'] = htmlspecialchars(strip_tags($_SESSION['bodegas']['IsActive']));
$_SESSION['bodegas']['ParentRef_ListID'] = htmlspecialchars(strip_tags($_SESSION['bodegas']['ParentRef_ListID']));
$_SESSION['bodegas']['ParentRef_FullName'] = htmlspecialchars(strip_tags($_SESSION['bodegas']['ParentRef_FullName']));
$_SESSION['bodegas']['Sublevel'] = htmlspecialchars(strip_tags($_SESSION['bodegas']['Sublevel']));
$_SESSION['bodegas']['Status'] = htmlspecialchars(strip_tags($_SESSION['bodegas']['Status']));
$_SESSION['bodegas']['Estado'] = htmlspecialchars(strip_tags($_SESSION['bodegas']['Estado']));

 
    }
    


// **********************
// GETTER METHODS
// **********************


function getListID()
{
return $this->ListID;
}

function getTimeCreated()
{
return $this->TimeCreated;
}

function getTimeModified()
{
return $this->TimeModified;
}

function getEditSequence()
{
return $this->EditSequence;
}

function getName()
{
return $this->Name;
}

function getFullName()
{
return $this->FullName;
}

function getIsActive()
{
return $this->IsActive;
}

function getParentRef_ListID()
{
return $this->ParentRef_ListID;
}

function getParentRef_FullName()
{
return $this->ParentRef_FullName;
}

function getSublevel()
{
return $this->Sublevel;
}

function getStatus()
{
return $this->Status;
}

function getEstado()
{
return $this->Estado;
}

// **********************
// SETTER METHODS
// **********************


function setListID($val)
{
$this->ListID =  $val;
}

function setTimeCreated($val)
{
$this->TimeCreated =  $val;
}

function setTimeModified($val)
{
$this->TimeModified =  $val;
}

function setEditSequence($val)
{
$this->EditSequence =  $val;
}

function setName($val)
{
$this->Name =  $val;
}

function setFullName($val)
{
$this->FullName =  $val;
}

function setIsActive($val)
{
$this->IsActive =  $val;
}

function setParentRef_ListID($val)
{
$this->ParentRef_ListID =  $val;
}

function setParentRef_FullName($val)
{
$this->ParentRef_FullName =  $val;
}

function setSublevel($val)
{
$this->Sublevel =  $val;
}

function setStatus($val)
{
$this->Status =  $val;
}

function setEstado($val)
{
$this->Estado =  $val;
}

// ************************************************************************************
// SELECT busca igual en el campo estado retorna OK si existe el registro
//          retorna actualiza si es el mismo registro y tambien carga en la instancia
//          los valores de la lectura
// *************************************************************************************

    function buscaIgual_bodegas() {
        $estado = 'ERR';
        $this->db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        try {
            $sql =  'SELECT * FROM invoice WHERE TxnID = :clave ';
            $stmt = $this->db->prepare($sql);
            $stmt->bindParam(':clave', $_SESSION['bodegas']['TxnID']);
            $stmt->execute();
            $registro = $stmt->fetch(PDO::FETCH_ASSOC);
            if ( ! $registro){
                $this->estado = 'OK';
            } else {
                if ($registro['TxnID'] === $_SESSION['bodegas']['TxnID']) {
                $this->estado = 'ACTUALIZA';
                }
            }
            
        } catch(PDOException $e) {
            echo $e->getMessage();
        } 
    
    return $this->estado;
    }
// ************************************************************************************
// SELECT dependiendo de las condiones recibidas desde el programa llamado se parsea
//          el archivo json para cargar las comparaciones y tambien los nombres de las variables
//          para una lectura de todos los registros que cumplan la condicion
// *************************************************************************************

    function leetodos_bodegas() {
        $estado = 'ERR';
        $this->db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        try {
            $sql =  'SELECT * FROM invoice WHERE TxnID = :clave ';
            $stmt = $this->db->prepare($sql);
            $stmt->bindParam(':clave', $_SESSION['bodegas']['TxnID']);
            $stmt->execute();
            $registro = $stmt->fetchAll(PDO::FETCH_ASSOC);
            if ( ! $registro){
                $this->estado = 'OK';
            } else {
                $this->estado = 'TODOS';
            }
            
        } catch(PDOException $e) {
            echo $e->getMessage();
        } 
    
    return $this->estado;
    }
// **********************
// SELECT METHOD / LOAD
// **********************

function select_bodegas()
{

$this->db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
	try {
$sql = 'SELECT * FROM bodegas WHERE ListID = :clave'; 
$stmt = $this->db->prepare($sql);
    $stmt->bindParam(":clave", $_SESSION['bodegas']['TxnID']);
        $stmt->execute();
	$registro = $stmt->fetch(PDO::FETCH_ASSOC);
	if ( ! $registro) {
		$this->estado = 'OK';
		return $this->estado;
	} else {
                
		if ($registro['TxnID'] === $_SESSION['invoice']['TxnID']) {
                    $this->estado = 'ACTUALIZA';
                    }
                    }
            
                } catch(PDOException $e) {
                    echo $e->getMessage();
                }
                
		$this->ListID = $registro['ListID'];

		$this->TimeCreated = $registro['TimeCreated'];

		$this->TimeModified = $registro['TimeModified'];

		$this->EditSequence = $registro['EditSequence'];

		$this->Name = $registro['Name'];

		$this->FullName = $registro['FullName'];

		$this->IsActive = $registro['IsActive'];

		$this->ParentRef_ListID = $registro['ParentRef_ListID'];

		$this->ParentRef_FullName = $registro['ParentRef_FullName'];

		$this->Sublevel = $registro['Sublevel'];

		$this->Status = $registro['Status'];

		$this->Estado = $registro['Estado'];


}

// *******************************
// UNSET METHOD / clean
// *******************************

function cleanSession_bodegas()
{

                unset($_SESSION['bodegas']['ListID']);
unset($_SESSION['bodegas']['TimeCreated']);
unset($_SESSION['bodegas']['TimeModified']);
unset($_SESSION['bodegas']['EditSequence']);
unset($_SESSION['bodegas']['Name']);
unset($_SESSION['bodegas']['FullName']);
unset($_SESSION['bodegas']['IsActive']);
unset($_SESSION['bodegas']['ParentRef_ListID']);
unset($_SESSION['bodegas']['ParentRef_FullName']);
unset($_SESSION['bodegas']['Sublevel']);
unset($_SESSION['bodegas']['Status']);
unset($_SESSION['bodegas']['Estado']);


            }

// **********************
// DELETE
// **********************

function delete_bodegas($id)
{


}

// **********************
// UPDATE
// **********************

function update_bodegas()
{
    $this->estado = 'ERR';
	 $this->db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            try {
	$sql = 'UPDATE bodegas SET TimeCreated=$this->TimeCreated, TimeModified=$this->TimeModified, EditSequence=$this->EditSequence, Name=$this->Name, FullName=$this->FullName, IsActive=$this->IsActive, ParentRef_ListID=$this->ParentRef_ListID, ParentRef_FullName=$this->ParentRef_FullName, Sublevel=$this->Sublevel, Status=$this->Status, Estado=$this->Estado, WHERE ListID = :clave;'; 
	$stmt = $this->db->prepare($sql);
	$stmt->bindParam(':clave', $_SESSION['invoice']['TxnID']);
	$stmt->execute();
     } catch(PDOException $e) {
}
     }

// ---------------------------------------------------------
// Actualiza tabla con la opcion del PDO bindparam
// ---------------------------------------------------------

function actualiza_bodegas()
{
    $this->estado = 'ERR';
	 $this->db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            try {
	$sql = 'UPDATE bodegas SET TimeCreated=:TimeCreated, TimeModified=:TimeModified, EditSequence=:EditSequence, Name=:Name, FullName=:FullName, IsActive=:IsActive, ParentRef_ListID=:ParentRef_ListID, ParentRef_FullName=:ParentRef_FullName, Sublevel=:Sublevel, Status=:Status, Estado=:Estado, WHERE ListID = :clave;'; 
	$stmt = $this->db->prepare($sql);
	 $stmt->bindParam(':ListID', $_SESSION['bodegas']['ListID'] );
	$stmt->bindParam(':TimeCreated', $_SESSION['bodegas']['TimeCreated'] );
	$stmt->bindParam(':TimeModified', $_SESSION['bodegas']['TimeModified'] );
	$stmt->bindParam(':EditSequence', $_SESSION['bodegas']['EditSequence'] );
	$stmt->bindParam(':Name', $_SESSION['bodegas']['Name'] );
	$stmt->bindParam(':FullName', $_SESSION['bodegas']['FullName'] );
	$stmt->bindParam(':IsActive', $_SESSION['bodegas']['IsActive'] );
	$stmt->bindParam(':ParentRef_ListID', $_SESSION['bodegas']['ParentRef_ListID'] );
	$stmt->bindParam(':ParentRef_FullName', $_SESSION['bodegas']['ParentRef_FullName'] );
	$stmt->bindParam(':Sublevel', $_SESSION['bodegas']['Sublevel'] );
	$stmt->bindParam(':Status', $_SESSION['bodegas']['Status'] );
	$stmt->bindParam(':Estado', $_SESSION['bodegas']['Estado'] );
	$stmt->bindParam(':clave', $_SESSION['invoice']['TxnID']);
	$stmt->execute();
     } catch(PDOException $e) {
}
     }

}
?>
<!-- end of generated class -->
