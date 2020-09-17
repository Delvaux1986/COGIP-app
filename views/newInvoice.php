<?php 
    session_start();
    
?>
<section class="col-md-6 offset-md-3 mt-5 mb-5 rounded border border-primary justify-content-center align-item-center bg-light container-fluid">
<h1 class="text-center text-info p-3">Add invoice</h1>


<form action="" method="POST" class="font-weight-bold text-primary">
    <label for="numberInvoice">
        <input type="text" name="numberInvoice" placeholder="Invoice's number"></label></br>
    <label for="dateInvoice">
        <input type="date" name="dateInvoice" placeholder="date"></label></br>
    <label for="idComp">
        <input type="number" name="idComp" placeholder="Company"></label></br>
    <label for="idContact">
        <select name="idContact">
            <?php
            require_once(ROOT.'controllers/Admin.php');
                        
            echo '<option value="null">Choose a contact</option>';
            foreach($listContacts as $con) {
                echo '<option value="'.$con["ID_Contact"].'">'.$con["Firstname"].' '.$con["Lastname"].'</option>';
            }
            ?>
        </select></br>
       

    <button type="submit" class="btn btn-primary" name="submitNewInvoice">Submit</button>
</form>

</section>