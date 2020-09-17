<section class="col-md-9 offset-md-2 mt-5 rounded border bl-light">
<h2 class="text-center text-info">Contact  <?php echo $contact['Firstname'].' '.$contact['Lastname']?></h2>

<table class="table table-light" >
    <thead>
        <tr>
            <th>Contact ID</th>
            <th>Firstname</th>
            <th>Lastname</th>
            <th>Email</th>
            <th>Phone</th>
            <th>Company</th>
        </tr>
    </thead>
    <tbody>
        <?php
            if($_SESSION['TypeUser'] === "Admin"){
                echo '<table class="table bg-light">';
                echo '<tr><form method="POST" action="'.URL.'Contacts/updateContact">';
            } else {
                echo '<tr>';
            }
            echo '<td>'.$contact['ID_Contact'].'</td>';
            //hidden field used for the submit of the form, so that the ID_Invoice is in the $_POST variable.
            echo '<input type="text" id="ID_Contact" name="ID_Contact" value="'.$contact['ID_Contact'].'" hidden>';
            echo '<td><input type="text" id="Firstname" name="Firstname" value="'.$contact['Firstname'].'"></td>';
            echo '<td><input type="text" id="Lastname" name="Lastname" value="'.$contact['Lastname'].'"></td>';
            echo '<td><input type="text" id="Email" name="Email" value="'.$contact['Email'].'"></td>';
            echo '<td><input type="text" id="Phone" name="Phone" value="'.$contact['Phone'].'"></td>';
            echo '<td><input type="text" id="Name" name="NameCompany" value="'.$contact['Name'].'"></td>';
            
            if($_SESSION['TypeUser'] === "Admin"){
                echo '<tr><td colspan="5"><input type="submit" name="UpdateContactSend" value="Update" ></td></tr>';
                echo '</form></tr>';
            } else {
                echo '</tr>';
            }
            echo '</table>';
        ?>
    </tbody>
</table>
</section>