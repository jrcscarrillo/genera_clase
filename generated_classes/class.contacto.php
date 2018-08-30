
<!-- begin of generated class -->
<?php
/*
*
* -------------------------------------------------------
* CLASSNAME:        contacto
* GENERATION DATE:  05.08.2015
* CLASS FILE:       C:\wamp\www\genera_clase/generated_classes/class.contacto.php
* FOR MYSQL TABLE:  contactos
* FOR MYSQL DB:     aurora
* -------------------------------------------------------
* CODE GENERATED BY:
* MY PHP-MYSQL-CLASS GENERATOR
* from: >> www.voegeli.li >> (download for free!)
* modify: >> www.aurora-ec.net >> (download for free!)
* -------------------------------------------------------
*
*/
include_once("class.aurora.php");
// **********************
// CLASS DECLARATION
// **********************

class contacto
{ // class : begin


// **********************
// ATTRIBUTE DECLARATION
// **********************


public $idcontactos;   // (normal Attribute)
public $email;   // (normal Attribute)
public $telefono;   // (normal Attribute)
public $celular;   // (normal Attribute)
public $nombre;   // (normal Attribute)
public $apellido;   // (normal Attribute)
public $organizacion;   // (normal Attribute)
public $website;   // (normal Attribute)
public $mensaje;   // (normal Attribute)
public $tipo;   // (normal Attribute)
public $estado;   // (normal Attribute)
public $activo;   // (normal Attribute)

var $db; // Instance of class database


// **********************
// CONSTRUCTOR METHOD
// **********************

function __construct()
{

$this->db = new AuroraDB();
}

function __destruct()
{


}

function genJson_contacto($jsonString)
{
$_SESSION['idcontactos'] = $jsonString->idcontactos;
$_SESSION['email'] = $jsonString->email;
$_SESSION['telefono'] = $jsonString->telefono;
$_SESSION['celular'] = $jsonString->celular;
$_SESSION['nombre'] = $jsonString->nombre;
$_SESSION['apellido'] = $jsonString->apellido;
$_SESSION['organizacion'] = $jsonString->organizacion;
$_SESSION['website'] = $jsonString->website;
$_SESSION['mensaje'] = $jsonString->mensaje;
$_SESSION['tipo'] = $jsonString->tipo;
$_SESSION['estado'] = $jsonString->estado;
$_SESSION['activo'] = $jsonString->activo;

}

function genInsert_contacto()
{
$obj_contacto->setidcontactos($_SESSION['idcontactos']);
$obj_contacto->setemail($_SESSION['email']);
$obj_contacto->settelefono($_SESSION['telefono']);
$obj_contacto->setcelular($_SESSION['celular']);
$obj_contacto->setnombre($_SESSION['nombre']);
$obj_contacto->setapellido($_SESSION['apellido']);
$obj_contacto->setorganizacion($_SESSION['organizacion']);
$obj_contacto->setwebsite($_SESSION['website']);
$obj_contacto->setmensaje($_SESSION['mensaje']);
$obj_contacto->settipo($_SESSION['tipo']);
$obj_contacto->setestado($_SESSION['estado']);
$obj_contacto->setactivo($_SESSION['activo']);

}

// **********************
// GETTER METHODS
// **********************


function getidcontactos()
{
return $this->idcontactos;
}

function getemail()
{
return $this->email;
}

function gettelefono()
{
return $this->telefono;
}

function getcelular()
{
return $this->celular;
}

function getnombre()
{
return $this->nombre;
}

function getapellido()
{
return $this->apellido;
}

function getorganizacion()
{
return $this->organizacion;
}

function getwebsite()
{
return $this->website;
}

function getmensaje()
{
return $this->mensaje;
}

function gettipo()
{
return $this->tipo;
}

function getestado()
{
return $this->estado;
}

function getactivo()
{
return $this->activo;
}

// **********************
// SETTER METHODS
// **********************


function setidcontactos($val)
{
$this->idcontactos =  $val;
}

function setemail($val)
{
$this->email =  $val;
}

function settelefono($val)
{
$this->telefono =  $val;
}

function setcelular($val)
{
$this->celular =  $val;
}

function setnombre($val)
{
$this->nombre =  $val;
}

function setapellido($val)
{
$this->apellido =  $val;
}

function setorganizacion($val)
{
$this->organizacion =  $val;
}

function setwebsite($val)
{
$this->website =  $val;
}

function setmensaje($val)
{
$this->mensaje =  $val;
}

function settipo($val)
{
$this->tipo =  $val;
}

function setestado($val)
{
$this->estado =  $val;
}

function setactivo($val)
{
$this->activo =  $val;
}

// **********************
// SELECT METHOD / LOAD
// **********************

function select($id)
{

$db = $this->db->aurora_connect();
$sql =  "SELECT * FROM contactos WHERE idcontactos = ?";
$stmt = $db->prepare($sql) or die(mysqli_error($db));
    $stmt->bind_param("s", $id);
        $stmt->bind_result($db_idcontactos, $db_email, $db_telefono, $db_celular, $db_nombre, $db_apellido, $db_organizacion, $db_website, $db_mensaje, $db_tipo, $db_estado, $db_activo);
            $stmt->execute();
                if ($stmt->fetch()) {
                $this->idcontactos = $db_idcontactos;
$this->email = $db_email;
$this->telefono = $db_telefono;
$this->celular = $db_celular;
$this->nombre = $db_nombre;
$this->apellido = $db_apellido;
$this->organizacion = $db_organizacion;
$this->website = $db_website;
$this->mensaje = $db_mensaje;
$this->tipo = $db_tipo;
$this->estado = $db_estado;
$this->activo = $db_activo;


            }
$db->close();
}

// *******************************
// SELECT METHOD / FETCH LOOP
// *******************************

function seleccionar($id)
{

$db = $this->db->aurora_connect();
$sql =  "SELECT * FROM contactos WHERE idcontactos = ?";
$stmt = $db->prepare($sql) or die(mysqli_error($db));
    $stmt->bind_param("s", $id);
        $stmt->bind_result($db_idcontactos, $db_email, $db_telefono, $db_celular, $db_nombre, $db_apellido, $db_organizacion, $db_website, $db_mensaje, $db_tipo, $db_estado, $db_activo);
            $stmt->execute();
                while ($stmt->fetch()) {
                $obj_contacto->idcontactos = $db_idcontactos;
$obj_contacto->email = $db_email;
$obj_contacto->telefono = $db_telefono;
$obj_contacto->celular = $db_celular;
$obj_contacto->nombre = $db_nombre;
$obj_contacto->apellido = $db_apellido;
$obj_contacto->organizacion = $db_organizacion;
$obj_contacto->website = $db_website;
$obj_contacto->mensaje = $db_mensaje;
$obj_contacto->tipo = $db_tipo;
$obj_contacto->estado = $db_estado;
$obj_contacto->activo = $db_activo;


            }
$db->close();
}

// *******************************
// SELECT METHOD / FETCH LOOP
// *******************************

function recorrer($id)
{

$db = $this->db->aurora_connect();
$sql =  "SELECT * FROM contactos WHERE idcontactos = ?";
$stmt = $db->prepare($sql) or die(mysqli_error($db));
    $stmt->bind_param("s", $id);
        $stmt->bind_result($db_idcontactos, $db_email, $db_telefono, $db_celular, $db_nombre, $db_apellido, $db_organizacion, $db_website, $db_mensaje, $db_tipo, $db_estado, $db_activo);
            $stmt->execute();
                if ($stmt->fetch()) {
                $_SESSION['idcontactos'] = $obj_contacto->getidcontactos();
$_SESSION['email'] = $obj_contacto->getemail();
$_SESSION['telefono'] = $obj_contacto->gettelefono();
$_SESSION['celular'] = $obj_contacto->getcelular();
$_SESSION['nombre'] = $obj_contacto->getnombre();
$_SESSION['apellido'] = $obj_contacto->getapellido();
$_SESSION['organizacion'] = $obj_contacto->getorganizacion();
$_SESSION['website'] = $obj_contacto->getwebsite();
$_SESSION['mensaje'] = $obj_contacto->getmensaje();
$_SESSION['tipo'] = $obj_contacto->gettipo();
$_SESSION['estado'] = $obj_contacto->getestado();
$_SESSION['activo'] = $obj_contacto->getactivo();


            }
$db->close();
}

// **********************
// DELETE
// **********************

function delete($id)
{
$db = $this->db->aurora_connect();
$sql = "DELETE FROM contactos WHERE idcontactos = ?";
$stmt = $db->prepare($sql) or die(mysqli_error($db));
    $stmt->bind_param("s", $id);
        $stmt->execute();

$db->close();
}

// **********************
// INSERT
// **********************

function insert()
{
$this->idcontactos = ""; // clear key for autoincrement
$db = $this->db->aurora_connect();
$sql = "INSERT INTO contactos ( email,telefono,celular,nombre,apellido,organizacion,website,mensaje,tipo,estado,activo ) VALUES ( '$this->email','$this->telefono','$this->celular','$this->nombre','$this->apellido','$this->organizacion','$this->website','$this->mensaje','$this->tipo','$this->estado','$this->activo' )";
$stmt = $db->prepare($sql) or die(mysqli_error($db));
$stmt->execute();

$db->close();
}

// **********************
// UPDATE
// **********************

function update($id)
{

$db = $this->db->aurora_connect();

$sql = " UPDATE contactos SET  email = '$this->email',telefono = '$this->telefono',celular = '$this->celular',nombre = '$this->nombre',apellido = '$this->apellido',organizacion = '$this->organizacion',website = '$this->website',mensaje = '$this->mensaje',tipo = '$this->tipo',estado = '$this->estado',activo = '$this->activo' WHERE idcontactos = ? ";

$stmt = $db->prepare($sql) or die(mysqli_error($db));
    $stmt->bind_param("s", $id);
        $stmt->execute();

$db->close();

}


} // class : end

?>
<!-- end of generated class -->