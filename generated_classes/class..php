
<!-- begin of generated class -->
<?php
/*
*
* -------------------------------------------------------
* CLASSNAME:        
* GENERATION DATE:  04.05.2018
* CLASS FILE:       C:\wamp64\www\genera_clase/generated_classes/class..php
* FOR MYSQL TABLE:  
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

class 
{ // class : begin


// **********************
// ATTRIBUTE DECLARATION
// **********************



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
     
    }
    
function genJson_($jsonString)
{

}

function genInsert_()
{

}

function genLimpia_()
{

}

function gentraverse_($node)
{

}

function adiciona_()
{
        $this->estado = 'ERR';
	$this->db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        try {
        $sql = 'INSERT INTO  ( ) VALUES ()';
	$stmt = $this->db->prepare($sql);
	 $stmt->execute();
        } catch(PDOException $e) {
            echo $e->getMessage();
        }    
}

function quitaslashes_()
{
         
 
    }
    


// **********************
// GETTER METHODS
// **********************


// **********************
// SETTER METHODS
// **********************


// ************************************************************************************
// SELECT busca igual en el campo estado retorna OK si existe el registro
//          retorna actualiza si es el mismo registro y tambien carga en la instancia
//          los valores de la lectura
// *************************************************************************************

    function buscaIgual_() {
        $estado = 'ERR';
        $this->db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        try {
            $sql =  'SELECT * FROM invoice WHERE TxnID = :clave ';
            $stmt = $this->db->prepare($sql);
            $stmt->bindParam(':clave', $_SESSION['']['TxnID']);
            $stmt->execute();
            $registro = $stmt->fetch(PDO::FETCH_ASSOC);
            if ( ! $registro){
                $this->estado = 'OK';
            } else {
                if ($registro['TxnID'] === $_SESSION['']['TxnID']) {
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

    function leetodos_() {
        $estado = 'ERR';
        $this->db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        try {
            $sql =  'SELECT * FROM invoice WHERE TxnID = :clave ';
            $stmt = $this->db->prepare($sql);
            $stmt->bindParam(':clave', $_SESSION['']['TxnID']);
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

function select_()
{

$this->db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
	try {
$sql = 'SELECT * FROM  WHERE  = :clave'; 
$stmt = $this->db->prepare($sql);
    $stmt->bindParam(":clave", $_SESSION['']['TxnID']);
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
                

}

// *******************************
// UNSET METHOD / clean
// *******************************

function cleanSession_()
{

                

            }

// **********************
// DELETE
// **********************

function delete_($id)
{


}

// **********************
// UPDATE
// **********************

function update_()
{
    $this->estado = 'ERR';
	 $this->db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            try {
	$sql = 'UPDATE  SET  WHERE  = :clave;'; 
	$stmt = $this->db->prepare($sql);
	$stmt->bindParam(':clave', $_SESSION['invoice']['TxnID']);
	$stmt->execute();
     } catch(PDOException $e) {
}
     }

// ---------------------------------------------------------
// Actualiza tabla con la opcion del PDO bindparam
// ---------------------------------------------------------

function actualiza_()
{
    $this->estado = 'ERR';
	 $this->db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            try {
	$sql = 'UPDATE  SET  WHERE  = :clave;'; 
	$stmt = $this->db->prepare($sql);
	 $stmt->bindParam(':clave', $_SESSION['invoice']['TxnID']);
	$stmt->execute();
     } catch(PDOException $e) {
}
     }

}
?>
<!-- end of generated class -->
