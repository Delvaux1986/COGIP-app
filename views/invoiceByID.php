<section class="col-md-6 offset-md-3 mt-5 rounded border">
<h2 class="text-center text-info">Facture nr <?php echo $invoice['Number_Invoice']?></h2>

<table class="table ">
    <thead>
        <tr>
            <th>Invoice ID</th>
            <th>Invoice number</th>
            <th>Date</th>
            <th>Companie</th>
            <th>Type</th>
        </tr>
    </thead>
    <tbody>
        <?php
            echo '<tr>';
            echo '<th>'.$invoice['ID_Invoice'].'</th>';
            echo '<th>'.$invoice['Number_Invoice'].'</th>';
            echo '<th>'.$invoice['Date_Invoice'].'</th>';
            echo '<th>'.$invoice['Name'].'</th>';
            echo '<th>'.$invoice['Type_Company'].'</th>';
            
            if($_SESSION['TypeUser'] === "Admin"){
                echo '<th><a href="'.LOCAL_ROOT.'invoices/editInvoice/'.$invoice['ID_Invoice'].'">
                        <img src="'.LOCAL_ROOT_WITHOUT_PARAMETER.'assets/img/update.jpeg" class="img-fluid img-thumbnail"></a></th>';
                echo '<th><a href="'.LOCAL_ROOT.'invoices/deleteInvoice/'.$invoice['ID_Invoice'].'">
                        <img src="'.LOCAL_ROOT_WITHOUT_PARAMETER.'assets/img/Trash-can.jpg" class="img-fluid img-thumbnail"></a></th>';
            }
            echo '</tr>';
        ?>
    </tbody>
</table>
</section>