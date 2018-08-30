<?php
session_start();
// SAMPLE FOR METHOD INSERT()

include_once("../generated_classes/class.invoicedetail.php");

$invoicedetail = new invoicedetail();
    $_SESSION['invoicedetail'] = array();
    $doc = new DOMDocument();
    $xml = "../resources/invoice.xml";
    $doc->load($xml);
    $param = "InvoiceLineRet";
    $factura = $doc->getElementsByTagName($param);
    foreach ($factura as $uno) {
                        $invoicedetail->genLimpia_invoicedetail();
                        $invoicedetail->gentraverse_invoicedetail($uno);
                        $existe = $invoicedetail->buscaIgual_invoicedetail();
                        if ($existe == "OK") {
                            $invoicedetail->quitaslashes_invoicedetail();
                            $invoicedetail->genInsert_invoicedetail();
                            $invoicedetail->adiciona_invoicedetail();
                        } else {
                            $invoicedetail->quitaslashes_invoicedetail();
                            $invoicedetail->genInsert_invoicedetail();
                            $invoicedetail->update_invoicedetail();
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