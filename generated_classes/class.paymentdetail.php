
<!-- begin of generated class -->
<?php
/*
*
* -------------------------------------------------------
* CLASSNAME:        paymentdetail
* GENERATION DATE:  07.05.2018
* CLASS FILE:       C:\wamp64\www\genera_clase/generated_classes/class.paymentdetail.php
* FOR MYSQL TABLE:  txnpaymentlinedetail
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

class paymentdetail
{ // class : begin


// **********************
// ATTRIBUTE DECLARATION
// **********************


public $TxnID;   // (normal Attribute)
public $TxnType;   // (normal Attribute)
public $TxnDate;   // (normal Attribute)
public $RefNumber;   // (normal Attribute)
public $TotalAmount;   // (normal Attribute)
public $AppliedAmount;   // (normal Attribute)
public $CustomField1;   // (normal Attribute)
public $CustomField2;   // (normal Attribute)
public $CustomField3;   // (normal Attribute)
public $CustomField4;   // (normal Attribute)
public $CustomField5;   // (normal Attribute)
public $CustomField6;   // (normal Attribute)
public $CustomField7;   // (normal Attribute)
public $CustomField8;   // (normal Attribute)
public $CustomField9;   // (normal Attribute)
public $CustomField10;   // (normal Attribute)
public $CustomField11;   // (normal Attribute)
public $CustomField12;   // (normal Attribute)
public $CustomField13;   // (normal Attribute)
public $CustomField14;   // (normal Attribute)
public $CustomField15;   // (normal Attribute)
public $IDKEY;   // (normal Attribute)
public $GroupIDKEY;   // (normal Attribute)

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
     $TxnID= new Text("TxnID");
$TxnID->setLabel("TxnID");
$TxnID->setFilters(array('striptags', 'strig'));
$TxnID->addValidators(array(
new PresenceOf(array(
'message'=> 'Mensaje de validacion'
))
));
$this->add($TxnID);

$TxnType= new Text("TxnType");
$TxnType->setLabel("TxnType");
$TxnType->setFilters(array('striptags', 'strig'));
$TxnType->addValidators(array(
new PresenceOf(array(
'message'=> 'Mensaje de validacion'
))
));
$this->add($TxnType);

$TxnDate= new Date("TxnDate");
$TxnDate->setLabel("TxnDate");
$TxnDate->addValidators(array(
new PresenceOf(array(
'message'=> 'Mensaje de validacion'
))
));
$this->add($TxnDate);

$RefNumber= new Text("RefNumber");
$RefNumber->setLabel("RefNumber");
$RefNumber->setFilters(array('striptags', 'strig'));
$RefNumber->addValidators(array(
new PresenceOf(array(
'message'=> 'Mensaje de validacion'
))
));
$this->add($RefNumber);

$TotalAmount= new Numeric("TotalAmount");
$TotalAmount->setLabel("TotalAmount");
$TotalAmount->setFilters(array('float'));
$TotalAmount->addValidators(array(
new PresenceOf(array(
'message'=> 'Mensaje de validacion'
))
));
$this->add($TotalAmount);

$AppliedAmount= new Numeric("AppliedAmount");
$AppliedAmount->setLabel("AppliedAmount");
$AppliedAmount->setFilters(array('float'));
$AppliedAmount->addValidators(array(
new PresenceOf(array(
'message'=> 'Mensaje de validacion'
))
));
$this->add($AppliedAmount);

$CustomField1= new Text("CustomField1");
$CustomField1->setLabel("CustomField1");
$CustomField1->setFilters(array('striptags', 'strig'));
$CustomField1->addValidators(array(
new PresenceOf(array(
'message'=> 'Mensaje de validacion'
))
));
$this->add($CustomField1);

$CustomField2= new Text("CustomField2");
$CustomField2->setLabel("CustomField2");
$CustomField2->setFilters(array('striptags', 'strig'));
$CustomField2->addValidators(array(
new PresenceOf(array(
'message'=> 'Mensaje de validacion'
))
));
$this->add($CustomField2);

$CustomField3= new Text("CustomField3");
$CustomField3->setLabel("CustomField3");
$CustomField3->setFilters(array('striptags', 'strig'));
$CustomField3->addValidators(array(
new PresenceOf(array(
'message'=> 'Mensaje de validacion'
))
));
$this->add($CustomField3);

$CustomField4= new Text("CustomField4");
$CustomField4->setLabel("CustomField4");
$CustomField4->setFilters(array('striptags', 'strig'));
$CustomField4->addValidators(array(
new PresenceOf(array(
'message'=> 'Mensaje de validacion'
))
));
$this->add($CustomField4);

$CustomField5= new Text("CustomField5");
$CustomField5->setLabel("CustomField5");
$CustomField5->setFilters(array('striptags', 'strig'));
$CustomField5->addValidators(array(
new PresenceOf(array(
'message'=> 'Mensaje de validacion'
))
));
$this->add($CustomField5);

$CustomField6= new Text("CustomField6");
$CustomField6->setLabel("CustomField6");
$CustomField6->setFilters(array('striptags', 'strig'));
$CustomField6->addValidators(array(
new PresenceOf(array(
'message'=> 'Mensaje de validacion'
))
));
$this->add($CustomField6);

$CustomField7= new Text("CustomField7");
$CustomField7->setLabel("CustomField7");
$CustomField7->setFilters(array('striptags', 'strig'));
$CustomField7->addValidators(array(
new PresenceOf(array(
'message'=> 'Mensaje de validacion'
))
));
$this->add($CustomField7);

$CustomField8= new Text("CustomField8");
$CustomField8->setLabel("CustomField8");
$CustomField8->setFilters(array('striptags', 'strig'));
$CustomField8->addValidators(array(
new PresenceOf(array(
'message'=> 'Mensaje de validacion'
))
));
$this->add($CustomField8);

$CustomField9= new Text("CustomField9");
$CustomField9->setLabel("CustomField9");
$CustomField9->setFilters(array('striptags', 'strig'));
$CustomField9->addValidators(array(
new PresenceOf(array(
'message'=> 'Mensaje de validacion'
))
));
$this->add($CustomField9);

$CustomField10= new Text("CustomField10");
$CustomField10->setLabel("CustomField10");
$CustomField10->setFilters(array('striptags', 'strig'));
$CustomField10->addValidators(array(
new PresenceOf(array(
'message'=> 'Mensaje de validacion'
))
));
$this->add($CustomField10);

$CustomField11= new Text("CustomField11");
$CustomField11->setLabel("CustomField11");
$CustomField11->setFilters(array('striptags', 'strig'));
$CustomField11->addValidators(array(
new PresenceOf(array(
'message'=> 'Mensaje de validacion'
))
));
$this->add($CustomField11);

$CustomField12= new Text("CustomField12");
$CustomField12->setLabel("CustomField12");
$CustomField12->setFilters(array('striptags', 'strig'));
$CustomField12->addValidators(array(
new PresenceOf(array(
'message'=> 'Mensaje de validacion'
))
));
$this->add($CustomField12);

$CustomField13= new Text("CustomField13");
$CustomField13->setLabel("CustomField13");
$CustomField13->setFilters(array('striptags', 'strig'));
$CustomField13->addValidators(array(
new PresenceOf(array(
'message'=> 'Mensaje de validacion'
))
));
$this->add($CustomField13);

$CustomField14= new Text("CustomField14");
$CustomField14->setLabel("CustomField14");
$CustomField14->setFilters(array('striptags', 'strig'));
$CustomField14->addValidators(array(
new PresenceOf(array(
'message'=> 'Mensaje de validacion'
))
));
$this->add($CustomField14);

$CustomField15= new Text("CustomField15");
$CustomField15->setLabel("CustomField15");
$CustomField15->setFilters(array('striptags', 'strig'));
$CustomField15->addValidators(array(
new PresenceOf(array(
'message'=> 'Mensaje de validacion'
))
));
$this->add($CustomField15);

$IDKEY= new Text("IDKEY");
$IDKEY->setLabel("IDKEY");
$IDKEY->setFilters(array('striptags', 'strig'));
$IDKEY->addValidators(array(
new PresenceOf(array(
'message'=> 'Mensaje de validacion'
))
));
$this->add($IDKEY);

$GroupIDKEY= new Text("GroupIDKEY");
$GroupIDKEY->setLabel("GroupIDKEY");
$GroupIDKEY->setFilters(array('striptags', 'strig'));
$GroupIDKEY->addValidators(array(
new PresenceOf(array(
'message'=> 'Mensaje de validacion'
))
));
$this->add($GroupIDKEY);


    }
    
function genJson_paymentdetail($jsonString)
{
$_SESSION['paymentdetail']['TxnID'] = $jsonString->TxnID;
$_SESSION['paymentdetail']['TxnType'] = $jsonString->TxnType;
$_SESSION['paymentdetail']['TxnDate'] = $jsonString->TxnDate;
$_SESSION['paymentdetail']['RefNumber'] = $jsonString->RefNumber;
$_SESSION['paymentdetail']['TotalAmount'] = $jsonString->TotalAmount;
$_SESSION['paymentdetail']['AppliedAmount'] = $jsonString->AppliedAmount;
$_SESSION['paymentdetail']['CustomField1'] = $jsonString->CustomField1;
$_SESSION['paymentdetail']['CustomField2'] = $jsonString->CustomField2;
$_SESSION['paymentdetail']['CustomField3'] = $jsonString->CustomField3;
$_SESSION['paymentdetail']['CustomField4'] = $jsonString->CustomField4;
$_SESSION['paymentdetail']['CustomField5'] = $jsonString->CustomField5;
$_SESSION['paymentdetail']['CustomField6'] = $jsonString->CustomField6;
$_SESSION['paymentdetail']['CustomField7'] = $jsonString->CustomField7;
$_SESSION['paymentdetail']['CustomField8'] = $jsonString->CustomField8;
$_SESSION['paymentdetail']['CustomField9'] = $jsonString->CustomField9;
$_SESSION['paymentdetail']['CustomField10'] = $jsonString->CustomField10;
$_SESSION['paymentdetail']['CustomField11'] = $jsonString->CustomField11;
$_SESSION['paymentdetail']['CustomField12'] = $jsonString->CustomField12;
$_SESSION['paymentdetail']['CustomField13'] = $jsonString->CustomField13;
$_SESSION['paymentdetail']['CustomField14'] = $jsonString->CustomField14;
$_SESSION['paymentdetail']['CustomField15'] = $jsonString->CustomField15;
$_SESSION['paymentdetail']['IDKEY'] = $jsonString->IDKEY;
$_SESSION['paymentdetail']['GroupIDKEY'] = $jsonString->GroupIDKEY;

}

function genInsert_paymentdetail()
{
$this->setTxnID($_SESSION['paymentdetail']['TxnID']);
$this->setTxnType($_SESSION['paymentdetail']['TxnType']);
$this->setTxnDate($_SESSION['paymentdetail']['TxnDate']);
$this->setRefNumber($_SESSION['paymentdetail']['RefNumber']);
$this->setTotalAmount($_SESSION['paymentdetail']['TotalAmount']);
$this->setAppliedAmount($_SESSION['paymentdetail']['AppliedAmount']);
$this->setCustomField1($_SESSION['paymentdetail']['CustomField1']);
$this->setCustomField2($_SESSION['paymentdetail']['CustomField2']);
$this->setCustomField3($_SESSION['paymentdetail']['CustomField3']);
$this->setCustomField4($_SESSION['paymentdetail']['CustomField4']);
$this->setCustomField5($_SESSION['paymentdetail']['CustomField5']);
$this->setCustomField6($_SESSION['paymentdetail']['CustomField6']);
$this->setCustomField7($_SESSION['paymentdetail']['CustomField7']);
$this->setCustomField8($_SESSION['paymentdetail']['CustomField8']);
$this->setCustomField9($_SESSION['paymentdetail']['CustomField9']);
$this->setCustomField10($_SESSION['paymentdetail']['CustomField10']);
$this->setCustomField11($_SESSION['paymentdetail']['CustomField11']);
$this->setCustomField12($_SESSION['paymentdetail']['CustomField12']);
$this->setCustomField13($_SESSION['paymentdetail']['CustomField13']);
$this->setCustomField14($_SESSION['paymentdetail']['CustomField14']);
$this->setCustomField15($_SESSION['paymentdetail']['CustomField15']);
$this->setIDKEY($_SESSION['paymentdetail']['IDKEY']);
$this->setGroupIDKEY($_SESSION['paymentdetail']['GroupIDKEY']);

}

function genLimpia_paymentdetail()
{
$_SESSION['paymentdetail']['TxnID'] = ' ';
$_SESSION['paymentdetail']['TxnType'] = ' ';
$_SESSION['paymentdetail']['TxnDate'] = ' ';
$_SESSION['paymentdetail']['RefNumber'] = ' ';
$_SESSION['paymentdetail']['TotalAmount'] = ' ';
$_SESSION['paymentdetail']['AppliedAmount'] = ' ';
$_SESSION['paymentdetail']['CustomField1'] = ' ';
$_SESSION['paymentdetail']['CustomField2'] = ' ';
$_SESSION['paymentdetail']['CustomField3'] = ' ';
$_SESSION['paymentdetail']['CustomField4'] = ' ';
$_SESSION['paymentdetail']['CustomField5'] = ' ';
$_SESSION['paymentdetail']['CustomField6'] = ' ';
$_SESSION['paymentdetail']['CustomField7'] = ' ';
$_SESSION['paymentdetail']['CustomField8'] = ' ';
$_SESSION['paymentdetail']['CustomField9'] = ' ';
$_SESSION['paymentdetail']['CustomField10'] = ' ';
$_SESSION['paymentdetail']['CustomField11'] = ' ';
$_SESSION['paymentdetail']['CustomField12'] = ' ';
$_SESSION['paymentdetail']['CustomField13'] = ' ';
$_SESSION['paymentdetail']['CustomField14'] = ' ';
$_SESSION['paymentdetail']['CustomField15'] = ' ';
$_SESSION['paymentdetail']['IDKEY'] = ' ';
$_SESSION['paymentdetail']['GroupIDKEY'] = ' ';

}

function gentraverse_paymentdetail($node)
{
$node->getElementsByTagName('TxnID')->item(0) == NULL ? $_SESSION['paymentdetail']['TxnID'] = ' ' : $_SESSION['paymentdetail']['TxnID'] = $node->getElementsByTagName('TxnID')->item(0)->nodeValue;
$node->getElementsByTagName('TxnType')->item(0) == NULL ? $_SESSION['paymentdetail']['TxnType'] = ' ' : $_SESSION['paymentdetail']['TxnType'] = $node->getElementsByTagName('TxnType')->item(0)->nodeValue;
$node->getElementsByTagName('TxnDate')->item(0) == NULL ? $_SESSION['paymentdetail']['TxnDate'] = '2010-08-10' : $_SESSION['paymentdetail']['TxnDate'] = $node->getElementsByTagName('TxnDate')->item(0)->nodeValue;
$node->getElementsByTagName('RefNumber')->item(0) == NULL ? $_SESSION['paymentdetail']['RefNumber'] = ' ' : $_SESSION['paymentdetail']['RefNumber'] = $node->getElementsByTagName('RefNumber')->item(0)->nodeValue;
$node->getElementsByTagName('TotalAmount')->item(0) == NULL ? $_SESSION['paymentdetail']['TotalAmount'] = 0 : $_SESSION['paymentdetail']['TotalAmount'] = $node->getElementsByTagName('TotalAmount')->item(0)->nodeValue;
$node->getElementsByTagName('AppliedAmount')->item(0) == NULL ? $_SESSION['paymentdetail']['AppliedAmount'] = 0 : $_SESSION['paymentdetail']['AppliedAmount'] = $node->getElementsByTagName('AppliedAmount')->item(0)->nodeValue;
$node->getElementsByTagName('CustomField1')->item(0) == NULL ? $_SESSION['paymentdetail']['CustomField1'] = ' ' : $_SESSION['paymentdetail']['CustomField1'] = $node->getElementsByTagName('CustomField1')->item(0)->nodeValue;
$node->getElementsByTagName('CustomField2')->item(0) == NULL ? $_SESSION['paymentdetail']['CustomField2'] = ' ' : $_SESSION['paymentdetail']['CustomField2'] = $node->getElementsByTagName('CustomField2')->item(0)->nodeValue;
$node->getElementsByTagName('CustomField3')->item(0) == NULL ? $_SESSION['paymentdetail']['CustomField3'] = ' ' : $_SESSION['paymentdetail']['CustomField3'] = $node->getElementsByTagName('CustomField3')->item(0)->nodeValue;
$node->getElementsByTagName('CustomField4')->item(0) == NULL ? $_SESSION['paymentdetail']['CustomField4'] = ' ' : $_SESSION['paymentdetail']['CustomField4'] = $node->getElementsByTagName('CustomField4')->item(0)->nodeValue;
$node->getElementsByTagName('CustomField5')->item(0) == NULL ? $_SESSION['paymentdetail']['CustomField5'] = ' ' : $_SESSION['paymentdetail']['CustomField5'] = $node->getElementsByTagName('CustomField5')->item(0)->nodeValue;
$node->getElementsByTagName('CustomField6')->item(0) == NULL ? $_SESSION['paymentdetail']['CustomField6'] = ' ' : $_SESSION['paymentdetail']['CustomField6'] = $node->getElementsByTagName('CustomField6')->item(0)->nodeValue;
$node->getElementsByTagName('CustomField7')->item(0) == NULL ? $_SESSION['paymentdetail']['CustomField7'] = ' ' : $_SESSION['paymentdetail']['CustomField7'] = $node->getElementsByTagName('CustomField7')->item(0)->nodeValue;
$node->getElementsByTagName('CustomField8')->item(0) == NULL ? $_SESSION['paymentdetail']['CustomField8'] = ' ' : $_SESSION['paymentdetail']['CustomField8'] = $node->getElementsByTagName('CustomField8')->item(0)->nodeValue;
$node->getElementsByTagName('CustomField9')->item(0) == NULL ? $_SESSION['paymentdetail']['CustomField9'] = ' ' : $_SESSION['paymentdetail']['CustomField9'] = $node->getElementsByTagName('CustomField9')->item(0)->nodeValue;
$node->getElementsByTagName('CustomField10')->item(0) == NULL ? $_SESSION['paymentdetail']['CustomField10'] = ' ' : $_SESSION['paymentdetail']['CustomField10'] = $node->getElementsByTagName('CustomField10')->item(0)->nodeValue;
$node->getElementsByTagName('CustomField11')->item(0) == NULL ? $_SESSION['paymentdetail']['CustomField11'] = ' ' : $_SESSION['paymentdetail']['CustomField11'] = $node->getElementsByTagName('CustomField11')->item(0)->nodeValue;
$node->getElementsByTagName('CustomField12')->item(0) == NULL ? $_SESSION['paymentdetail']['CustomField12'] = ' ' : $_SESSION['paymentdetail']['CustomField12'] = $node->getElementsByTagName('CustomField12')->item(0)->nodeValue;
$node->getElementsByTagName('CustomField13')->item(0) == NULL ? $_SESSION['paymentdetail']['CustomField13'] = ' ' : $_SESSION['paymentdetail']['CustomField13'] = $node->getElementsByTagName('CustomField13')->item(0)->nodeValue;
$node->getElementsByTagName('CustomField14')->item(0) == NULL ? $_SESSION['paymentdetail']['CustomField14'] = ' ' : $_SESSION['paymentdetail']['CustomField14'] = $node->getElementsByTagName('CustomField14')->item(0)->nodeValue;
$node->getElementsByTagName('CustomField15')->item(0) == NULL ? $_SESSION['paymentdetail']['CustomField15'] = ' ' : $_SESSION['paymentdetail']['CustomField15'] = $node->getElementsByTagName('CustomField15')->item(0)->nodeValue;
$node->getElementsByTagName('IDKEY')->item(0) == NULL ? $_SESSION['paymentdetail']['IDKEY'] = ' ' : $_SESSION['paymentdetail']['IDKEY'] = $node->getElementsByTagName('IDKEY')->item(0)->nodeValue;
$node->getElementsByTagName('GroupIDKEY')->item(0) == NULL ? $_SESSION['paymentdetail']['GroupIDKEY'] = ' ' : $_SESSION['paymentdetail']['GroupIDKEY'] = $node->getElementsByTagName('GroupIDKEY')->item(0)->nodeValue;

}

function adiciona_paymentdetail()
{
        $this->estado = 'ERR';
	$this->db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        try {
        $sql = 'INSERT INTO txnpaymentlinedetail (  TxnID, TxnType, TxnDate, RefNumber, TotalAmount, AppliedAmount, CustomField1, CustomField2, CustomField3, CustomField4, CustomField5, CustomField6, CustomField7, CustomField8, CustomField9, CustomField10, CustomField11, CustomField12, CustomField13, CustomField14, CustomField15, IDKEY, GroupIDKEY) VALUES ( :TxnID, :TxnType, :TxnDate, :RefNumber, :TotalAmount, :AppliedAmount, :CustomField1, :CustomField2, :CustomField3, :CustomField4, :CustomField5, :CustomField6, :CustomField7, :CustomField8, :CustomField9, :CustomField10, :CustomField11, :CustomField12, :CustomField13, :CustomField14, :CustomField15, :IDKEY, :GroupIDKEY)';
	$stmt = $this->db->prepare($sql);
	 $stmt->bindParam(':TxnID', $_SESSION['paymentdetail']['TxnID'] );
	$stmt->bindParam(':TxnType', $_SESSION['paymentdetail']['TxnType'] );
	$stmt->bindParam(':TxnDate', $_SESSION['paymentdetail']['TxnDate'] );
	$stmt->bindParam(':RefNumber', $_SESSION['paymentdetail']['RefNumber'] );
	$stmt->bindParam(':TotalAmount', $_SESSION['paymentdetail']['TotalAmount'] );
	$stmt->bindParam(':AppliedAmount', $_SESSION['paymentdetail']['AppliedAmount'] );
	$stmt->bindParam(':CustomField1', $_SESSION['paymentdetail']['CustomField1'] );
	$stmt->bindParam(':CustomField2', $_SESSION['paymentdetail']['CustomField2'] );
	$stmt->bindParam(':CustomField3', $_SESSION['paymentdetail']['CustomField3'] );
	$stmt->bindParam(':CustomField4', $_SESSION['paymentdetail']['CustomField4'] );
	$stmt->bindParam(':CustomField5', $_SESSION['paymentdetail']['CustomField5'] );
	$stmt->bindParam(':CustomField6', $_SESSION['paymentdetail']['CustomField6'] );
	$stmt->bindParam(':CustomField7', $_SESSION['paymentdetail']['CustomField7'] );
	$stmt->bindParam(':CustomField8', $_SESSION['paymentdetail']['CustomField8'] );
	$stmt->bindParam(':CustomField9', $_SESSION['paymentdetail']['CustomField9'] );
	$stmt->bindParam(':CustomField10', $_SESSION['paymentdetail']['CustomField10'] );
	$stmt->bindParam(':CustomField11', $_SESSION['paymentdetail']['CustomField11'] );
	$stmt->bindParam(':CustomField12', $_SESSION['paymentdetail']['CustomField12'] );
	$stmt->bindParam(':CustomField13', $_SESSION['paymentdetail']['CustomField13'] );
	$stmt->bindParam(':CustomField14', $_SESSION['paymentdetail']['CustomField14'] );
	$stmt->bindParam(':CustomField15', $_SESSION['paymentdetail']['CustomField15'] );
	$stmt->bindParam(':IDKEY', $_SESSION['paymentdetail']['IDKEY'] );
	$stmt->bindParam(':GroupIDKEY', $_SESSION['paymentdetail']['GroupIDKEY'] );
	$stmt->execute();
        } catch(PDOException $e) {
            echo $e->getMessage();
        }    
}

function quitaslashes_paymentdetail()
{
         $_SESSION['paymentdetail']['TxnID'] = htmlspecialchars(strip_tags($_SESSION['paymentdetail']['TxnID']));
$_SESSION['paymentdetail']['TxnType'] = htmlspecialchars(strip_tags($_SESSION['paymentdetail']['TxnType']));
$_SESSION['paymentdetail']['TxnDate'] = htmlspecialchars(strip_tags($_SESSION['paymentdetail']['TxnDate']));
$_SESSION['paymentdetail']['RefNumber'] = htmlspecialchars(strip_tags($_SESSION['paymentdetail']['RefNumber']));
$_SESSION['paymentdetail']['TotalAmount'] = htmlspecialchars(strip_tags($_SESSION['paymentdetail']['TotalAmount']));
$_SESSION['paymentdetail']['AppliedAmount'] = htmlspecialchars(strip_tags($_SESSION['paymentdetail']['AppliedAmount']));
$_SESSION['paymentdetail']['CustomField1'] = htmlspecialchars(strip_tags($_SESSION['paymentdetail']['CustomField1']));
$_SESSION['paymentdetail']['CustomField2'] = htmlspecialchars(strip_tags($_SESSION['paymentdetail']['CustomField2']));
$_SESSION['paymentdetail']['CustomField3'] = htmlspecialchars(strip_tags($_SESSION['paymentdetail']['CustomField3']));
$_SESSION['paymentdetail']['CustomField4'] = htmlspecialchars(strip_tags($_SESSION['paymentdetail']['CustomField4']));
$_SESSION['paymentdetail']['CustomField5'] = htmlspecialchars(strip_tags($_SESSION['paymentdetail']['CustomField5']));
$_SESSION['paymentdetail']['CustomField6'] = htmlspecialchars(strip_tags($_SESSION['paymentdetail']['CustomField6']));
$_SESSION['paymentdetail']['CustomField7'] = htmlspecialchars(strip_tags($_SESSION['paymentdetail']['CustomField7']));
$_SESSION['paymentdetail']['CustomField8'] = htmlspecialchars(strip_tags($_SESSION['paymentdetail']['CustomField8']));
$_SESSION['paymentdetail']['CustomField9'] = htmlspecialchars(strip_tags($_SESSION['paymentdetail']['CustomField9']));
$_SESSION['paymentdetail']['CustomField10'] = htmlspecialchars(strip_tags($_SESSION['paymentdetail']['CustomField10']));
$_SESSION['paymentdetail']['CustomField11'] = htmlspecialchars(strip_tags($_SESSION['paymentdetail']['CustomField11']));
$_SESSION['paymentdetail']['CustomField12'] = htmlspecialchars(strip_tags($_SESSION['paymentdetail']['CustomField12']));
$_SESSION['paymentdetail']['CustomField13'] = htmlspecialchars(strip_tags($_SESSION['paymentdetail']['CustomField13']));
$_SESSION['paymentdetail']['CustomField14'] = htmlspecialchars(strip_tags($_SESSION['paymentdetail']['CustomField14']));
$_SESSION['paymentdetail']['CustomField15'] = htmlspecialchars(strip_tags($_SESSION['paymentdetail']['CustomField15']));
$_SESSION['paymentdetail']['IDKEY'] = htmlspecialchars(strip_tags($_SESSION['paymentdetail']['IDKEY']));
$_SESSION['paymentdetail']['GroupIDKEY'] = htmlspecialchars(strip_tags($_SESSION['paymentdetail']['GroupIDKEY']));

 
    }
    


// **********************
// GETTER METHODS
// **********************


function getTxnID()
{
return $this->TxnID;
}

function getTxnType()
{
return $this->TxnType;
}

function getTxnDate()
{
return $this->TxnDate;
}

function getRefNumber()
{
return $this->RefNumber;
}

function getTotalAmount()
{
return $this->TotalAmount;
}

function getAppliedAmount()
{
return $this->AppliedAmount;
}

function getCustomField1()
{
return $this->CustomField1;
}

function getCustomField2()
{
return $this->CustomField2;
}

function getCustomField3()
{
return $this->CustomField3;
}

function getCustomField4()
{
return $this->CustomField4;
}

function getCustomField5()
{
return $this->CustomField5;
}

function getCustomField6()
{
return $this->CustomField6;
}

function getCustomField7()
{
return $this->CustomField7;
}

function getCustomField8()
{
return $this->CustomField8;
}

function getCustomField9()
{
return $this->CustomField9;
}

function getCustomField10()
{
return $this->CustomField10;
}

function getCustomField11()
{
return $this->CustomField11;
}

function getCustomField12()
{
return $this->CustomField12;
}

function getCustomField13()
{
return $this->CustomField13;
}

function getCustomField14()
{
return $this->CustomField14;
}

function getCustomField15()
{
return $this->CustomField15;
}

function getIDKEY()
{
return $this->IDKEY;
}

function getGroupIDKEY()
{
return $this->GroupIDKEY;
}

// **********************
// SETTER METHODS
// **********************


function setTxnID($val)
{
$this->TxnID =  $val;
}

function setTxnType($val)
{
$this->TxnType =  $val;
}

function setTxnDate($val)
{
$this->TxnDate =  $val;
}

function setRefNumber($val)
{
$this->RefNumber =  $val;
}

function setTotalAmount($val)
{
$this->TotalAmount =  $val;
}

function setAppliedAmount($val)
{
$this->AppliedAmount =  $val;
}

function setCustomField1($val)
{
$this->CustomField1 =  $val;
}

function setCustomField2($val)
{
$this->CustomField2 =  $val;
}

function setCustomField3($val)
{
$this->CustomField3 =  $val;
}

function setCustomField4($val)
{
$this->CustomField4 =  $val;
}

function setCustomField5($val)
{
$this->CustomField5 =  $val;
}

function setCustomField6($val)
{
$this->CustomField6 =  $val;
}

function setCustomField7($val)
{
$this->CustomField7 =  $val;
}

function setCustomField8($val)
{
$this->CustomField8 =  $val;
}

function setCustomField9($val)
{
$this->CustomField9 =  $val;
}

function setCustomField10($val)
{
$this->CustomField10 =  $val;
}

function setCustomField11($val)
{
$this->CustomField11 =  $val;
}

function setCustomField12($val)
{
$this->CustomField12 =  $val;
}

function setCustomField13($val)
{
$this->CustomField13 =  $val;
}

function setCustomField14($val)
{
$this->CustomField14 =  $val;
}

function setCustomField15($val)
{
$this->CustomField15 =  $val;
}

function setIDKEY($val)
{
$this->IDKEY =  $val;
}

function setGroupIDKEY($val)
{
$this->GroupIDKEY =  $val;
}

// ************************************************************************************
// SELECT busca igual en el campo estado retorna OK si existe el registro
//          retorna actualiza si es el mismo registro y tambien carga en la instancia
//          los valores de la lectura
// *************************************************************************************

    function buscaIgual_paymentdetail() {
        $estado = 'ERR';
        $this->db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        try {
            $sql =  'SELECT * FROM invoice WHERE TxnID = :clave ';
            $stmt = $this->db->prepare($sql);
            $stmt->bindParam(':clave', $_SESSION['paymentdetail']['TxnID']);
            $stmt->execute();
            $registro = $stmt->fetch(PDO::FETCH_ASSOC);
            if ( ! $registro){
                $this->estado = 'OK';
            } else {
                if ($registro['TxnID'] === $_SESSION['paymentdetail']['TxnID']) {
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

    function leetodos_paymentdetail() {
        $estado = 'ERR';
        $this->db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        try {
            $sql =  'SELECT * FROM invoice WHERE TxnID = :clave ';
            $stmt = $this->db->prepare($sql);
            $stmt->bindParam(':clave', $_SESSION['paymentdetail']['TxnID']);
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

function select_paymentdetail()
{

$this->db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
	try {
$sql = 'SELECT * FROM txnpaymentlinedetail WHERE TxnID = :clave'; 
$stmt = $this->db->prepare($sql);
    $stmt->bindParam(":clave", $_SESSION['txnpaymentlinedetail']['TxnID']);
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
                
		$this->TxnID = $registro['TxnID'];

		$this->TxnType = $registro['TxnType'];

		$this->TxnDate = $registro['TxnDate'];

		$this->RefNumber = $registro['RefNumber'];

		$this->TotalAmount = $registro['TotalAmount'];

		$this->AppliedAmount = $registro['AppliedAmount'];

		$this->CustomField1 = $registro['CustomField1'];

		$this->CustomField2 = $registro['CustomField2'];

		$this->CustomField3 = $registro['CustomField3'];

		$this->CustomField4 = $registro['CustomField4'];

		$this->CustomField5 = $registro['CustomField5'];

		$this->CustomField6 = $registro['CustomField6'];

		$this->CustomField7 = $registro['CustomField7'];

		$this->CustomField8 = $registro['CustomField8'];

		$this->CustomField9 = $registro['CustomField9'];

		$this->CustomField10 = $registro['CustomField10'];

		$this->CustomField11 = $registro['CustomField11'];

		$this->CustomField12 = $registro['CustomField12'];

		$this->CustomField13 = $registro['CustomField13'];

		$this->CustomField14 = $registro['CustomField14'];

		$this->CustomField15 = $registro['CustomField15'];

		$this->IDKEY = $registro['IDKEY'];

		$this->GroupIDKEY = $registro['GroupIDKEY'];


}

// *******************************
// UNSET METHOD / clean
// *******************************

function cleanSession_paymentdetail()
{

                unset($_SESSION['paymentdetail']['TxnID']);
unset($_SESSION['paymentdetail']['TxnType']);
unset($_SESSION['paymentdetail']['TxnDate']);
unset($_SESSION['paymentdetail']['RefNumber']);
unset($_SESSION['paymentdetail']['TotalAmount']);
unset($_SESSION['paymentdetail']['AppliedAmount']);
unset($_SESSION['paymentdetail']['CustomField1']);
unset($_SESSION['paymentdetail']['CustomField2']);
unset($_SESSION['paymentdetail']['CustomField3']);
unset($_SESSION['paymentdetail']['CustomField4']);
unset($_SESSION['paymentdetail']['CustomField5']);
unset($_SESSION['paymentdetail']['CustomField6']);
unset($_SESSION['paymentdetail']['CustomField7']);
unset($_SESSION['paymentdetail']['CustomField8']);
unset($_SESSION['paymentdetail']['CustomField9']);
unset($_SESSION['paymentdetail']['CustomField10']);
unset($_SESSION['paymentdetail']['CustomField11']);
unset($_SESSION['paymentdetail']['CustomField12']);
unset($_SESSION['paymentdetail']['CustomField13']);
unset($_SESSION['paymentdetail']['CustomField14']);
unset($_SESSION['paymentdetail']['CustomField15']);
unset($_SESSION['paymentdetail']['IDKEY']);
unset($_SESSION['paymentdetail']['GroupIDKEY']);


            }

// **********************
// DELETE
// **********************

function delete_paymentdetail($id)
{


}

// **********************
// UPDATE
// **********************

function update_paymentdetail()
{
    $this->estado = 'ERR';
	 $this->db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            try {
	$sql = 'UPDATE txnpaymentlinedetail SET TxnType=$this->TxnType, TxnDate=$this->TxnDate, RefNumber=$this->RefNumber, TotalAmount=$this->TotalAmount, AppliedAmount=$this->AppliedAmount, CustomField1=$this->CustomField1, CustomField2=$this->CustomField2, CustomField3=$this->CustomField3, CustomField4=$this->CustomField4, CustomField5=$this->CustomField5, CustomField6=$this->CustomField6, CustomField7=$this->CustomField7, CustomField8=$this->CustomField8, CustomField9=$this->CustomField9, CustomField10=$this->CustomField10, CustomField11=$this->CustomField11, CustomField12=$this->CustomField12, CustomField13=$this->CustomField13, CustomField14=$this->CustomField14, CustomField15=$this->CustomField15, IDKEY=$this->IDKEY, GroupIDKEY=$this->GroupIDKEY, WHERE TxnID = :clave;'; 
	$stmt = $this->db->prepare($sql);
	$stmt->bindParam(':clave', $_SESSION['invoice']['TxnID']);
	$stmt->execute();
     } catch(PDOException $e) {
}
     }

// ---------------------------------------------------------
// Actualiza tabla con la opcion del PDO bindparam
// ---------------------------------------------------------

function actualiza_paymentdetail()
{
    $this->estado = 'ERR';
	 $this->db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            try {
	$sql = 'UPDATE txnpaymentlinedetail SET TxnType=:TxnType, TxnDate=:TxnDate, RefNumber=:RefNumber, TotalAmount=:TotalAmount, AppliedAmount=:AppliedAmount, CustomField1=:CustomField1, CustomField2=:CustomField2, CustomField3=:CustomField3, CustomField4=:CustomField4, CustomField5=:CustomField5, CustomField6=:CustomField6, CustomField7=:CustomField7, CustomField8=:CustomField8, CustomField9=:CustomField9, CustomField10=:CustomField10, CustomField11=:CustomField11, CustomField12=:CustomField12, CustomField13=:CustomField13, CustomField14=:CustomField14, CustomField15=:CustomField15, IDKEY=:IDKEY, GroupIDKEY=:GroupIDKEY, WHERE TxnID = :clave;'; 
	$stmt = $this->db->prepare($sql);
	 $stmt->bindParam(':TxnID', $_SESSION['paymentdetail']['TxnID'] );
	$stmt->bindParam(':TxnType', $_SESSION['paymentdetail']['TxnType'] );
	$stmt->bindParam(':TxnDate', $_SESSION['paymentdetail']['TxnDate'] );
	$stmt->bindParam(':RefNumber', $_SESSION['paymentdetail']['RefNumber'] );
	$stmt->bindParam(':TotalAmount', $_SESSION['paymentdetail']['TotalAmount'] );
	$stmt->bindParam(':AppliedAmount', $_SESSION['paymentdetail']['AppliedAmount'] );
	$stmt->bindParam(':CustomField1', $_SESSION['paymentdetail']['CustomField1'] );
	$stmt->bindParam(':CustomField2', $_SESSION['paymentdetail']['CustomField2'] );
	$stmt->bindParam(':CustomField3', $_SESSION['paymentdetail']['CustomField3'] );
	$stmt->bindParam(':CustomField4', $_SESSION['paymentdetail']['CustomField4'] );
	$stmt->bindParam(':CustomField5', $_SESSION['paymentdetail']['CustomField5'] );
	$stmt->bindParam(':CustomField6', $_SESSION['paymentdetail']['CustomField6'] );
	$stmt->bindParam(':CustomField7', $_SESSION['paymentdetail']['CustomField7'] );
	$stmt->bindParam(':CustomField8', $_SESSION['paymentdetail']['CustomField8'] );
	$stmt->bindParam(':CustomField9', $_SESSION['paymentdetail']['CustomField9'] );
	$stmt->bindParam(':CustomField10', $_SESSION['paymentdetail']['CustomField10'] );
	$stmt->bindParam(':CustomField11', $_SESSION['paymentdetail']['CustomField11'] );
	$stmt->bindParam(':CustomField12', $_SESSION['paymentdetail']['CustomField12'] );
	$stmt->bindParam(':CustomField13', $_SESSION['paymentdetail']['CustomField13'] );
	$stmt->bindParam(':CustomField14', $_SESSION['paymentdetail']['CustomField14'] );
	$stmt->bindParam(':CustomField15', $_SESSION['paymentdetail']['CustomField15'] );
	$stmt->bindParam(':IDKEY', $_SESSION['paymentdetail']['IDKEY'] );
	$stmt->bindParam(':GroupIDKEY', $_SESSION['paymentdetail']['GroupIDKEY'] );
	$stmt->bindParam(':clave', $_SESSION['invoice']['TxnID']);
	$stmt->execute();
     } catch(PDOException $e) {
}
     }

}
?>
<!-- end of generated class -->