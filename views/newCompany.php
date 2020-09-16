<?php 
    session_start();
?>
<section class="col-md-6 offset-md-3 mt-5 mb-5 rounded border border-primary justify-content-center align-item-center bg-light container-fluid">
<h1 class="text-center text-info p-3">Add company</h1>
<?php
    if($_SESSION['TypeUser'] === "Admin"){
        echo '<form action="" method="POST" class="font-weight-bold text-primary">';
        echo '<label for="compName">';
        echo '<input type="text" name="compName" placeholder="Company\'s name"></label></br>';
        echo '<label for="compCountry">';
        echo '<input type="text" name="compCountry" placeholder="Country"></label></br>';
        echo '<label for="compVAT">';
        echo '<input type="text" name="compVAT" placeholder="VAT"></label></br>';
        echo '<label for="comType">';
        echo '<select name="compType">';
        echo ' <option value="1" selected>Client</option>';
        echo '<option value="2">Supplier</option>';
        echo ' </select>';
        echo ' </label></br>';
        echo '<button type="submit" class="btn btn-primary" name="submitNewCompany">Submit</button>';
        echo '</form>';
        echo '</section>';
        
    }
