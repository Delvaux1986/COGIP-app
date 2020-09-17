<section class="col-md-9 offset-md-2 mt-5 rounded border">
<h2 class="text-center text-info">Facture nr <?php echo $invoice['Number_Invoice']?></h2>

<table class="table table-light" >
    <thead>
        <tr>
            <th>Invoice ID</th>
            <th>Invoice number</th>
            <th>Date</th>
            <th>Companie</th>
            <th>Contact</th>
        </tr>
    </thead>
    <tbody>
        <?php
            if($_SESSION['TypeUser'] === "Admin"){
                echo '<tr><form method="POST" action="'.URL.'Invoice/updateInvoice">';
            } else {
                echo '<tr>';
            }
            echo '<td>'.$invoice['ID_Invoice'].'</td>';
            //hidden field used for the submit of the form, so that the ID_Invoice is in the $_POST variable.
            echo '<input type="text" id="ID_Invoice" name="ID_Invoice" value="'.$invoice['ID_Invoice'].'" hidden>';
            echo '<td><input type="text" id="invoiceNumber" name="invoiceNumber" value="'.$invoice['Number_Invoice'].'"></td>';
            echo '<td><input type="text" id="invoiceDate" name="invoiceDate" value="'.$invoice['Date_Invoice'].'"></td>';
            echo '<td><input type="text" id="companyName" name="companyName" value="'.$invoice['Name'].'"></td>';
            echo '<td><input type="text" id="contactName" name="contactName" value="'.$invoice['Firstname'].' '.$invoice['Lastname'].'"></td>';
            
            if($_SESSION['TypeUser'] === "Admin"){
                echo '<tr><td colspan="5"><input type="submit" name="submit" value="Update" ></td></tr>';
                echo '</form></tr>';
            } else {
                echo '</tr>';
            }
        ?>
    </tbody>
</table>
</section>