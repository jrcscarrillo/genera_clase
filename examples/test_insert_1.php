<?php
session_start();
// SAMPLE FOR METHOD INSERT()

include_once("../generated_classes/class.invoice.php");

$invoice = new invoice();
    $_SESSION['invoice'] = array();
    $doc = new DOMDocument();
    $xml = "../resources/invoice.xml";
    $doc->load($xml);
    $param = "InvoiceRet";
    $factura = $doc->getElementsByTagName($param);
    foreach ($factura as $uno) {
                $invoice->genLimpia_invoice();
                $invoice->gentraverse_invoice($uno);
                $existe = $invoice->buscaIgual_invoice();
                if ($existe == "OK") {
                    $invoice->quitaslashes_invoice();
                    $invoice->genInsert_invoice();
                    $invoice->adiciona_invoice();
                } elseif ($existe == "ACTUALIZA")  {
                    $invoice->quitaslashes_invoice();
                    $invoice->genInsert_invoice();
                    $invoice->update_invoice();
                }
    }
    return true;
// EJEMPLO PARA ADICIOMAR UNA NUEVA FILA EN UNA TABLA
function guardar() {

        $this->db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

try {
    $sql = "INSERT INTO invoice ( TxnID, TimeCreated, TimeModified, EditSequence, TxnNumber, CustomerRef_ListID, CustomerRef_FullName ) VALUES ( :TxnID, :TimeCreated, :TimeModified, :EditSequence, :TxnNumber, :CustomerRef_ListID, :CustomerRef_FullName)";

    $stmt = $this->db->prepare($sql);
    
    $stmt->bindParam(':TxnID', $this->TxnID);
    $stmt->bindParam(':TimeCreated', $this->TimeCreated);
    $stmt->bindParam(':TimeModified', $this->TimeModified);
    $stmt->bindParam(':EditSequence', $this->EditSequence);
    $stmt->bindParam(':TxnNumber', $this->TxnNumber);
    $stmt->bindParam(':CustomerRef_ListID', $this->CustomerRef_ListID);
    $stmt->bindParam(':CustomerRef_FullName', $this->CustomerRef_FullName);         

    $stmt->execute();
} catch(PDOException $e) {
    echo $e->getMessage();
}    
}

?>