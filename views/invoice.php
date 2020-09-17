<section class="col-md-6 offset-md-3 mt-5 rounded border">
<h2 class="text-center text-info">Liste des Factures</h2>

<table class="table ">
    <thead>
        <tr>
            <th>Invoice ID</th>invoices
            <th>Invoice number</th>
            <th>Dates</th>
            <th>Companies</th>
            <th>Type</th>
        </tr>
    </thead>
    <tbody>
        <?php
        foreach($invoices as $invoice){
            echo '<tr>';
                echo '<th><a href="'.LOCAL_ROOT.'invoices/invoiceID/'.$invoice['ID_Invoice'].'">'.$invoice['ID_Invoice'].'</a></th>';
                echo '<th><a href="'.LOCAL_ROOT.'invoices/invoiceID/'.$invoice['ID_Invoice'].'">'.$invoice['Number_Invoice'].'</a></th>';
                echo '<th>'.$invoice['Date_Invoice'].'</th>';
                echo '<th>'.$invoice['Name'].'</th>';
                echo '<th>'.$invoice['Type_Company'].'</th>';
                
                if($_SESSION['TypeUser'] === "Admin"){
                    echo '<th><a href="'.LOCAL_ROOT.'invoices/editInvoice/'.$invoice['ID_Invoice'].'">
                        <img src="'.LOCAL_ROOT_WITHOUT_PARAMETER.'assets/img/update.jpeg" class="img-fluid img-thumbnail"></a></th>';
                    echo '<th><a href="'.LOCAL_ROOT.'invoices/deleteInvoice/'.$invoice['ID_Invoice'].'">
                        <img src="'.LOCAL_ROOT_WITHOUT_PARAMETER.'assets/img/Trash-can.jpg" class="img-fluid img-thumbnail" ></a></th>';
                }  
            echo '</tr>';
        }
        ?>
    </tbody>
</table>
</section>