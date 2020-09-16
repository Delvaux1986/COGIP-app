<?php 
    session_start();
    
?>
<section class="col-md-6 offset-md-3 mt-5 mb-5 rounded border border-primary justify-content-center align-item-center bg-light container-fluid">
<h1 class="text-center text-info p-3">Add contact</h1>


<form action="" method="POST" class="font-weight-bold text-primary">
    <label for="firstname">
        <input type="text" name="firstname" placeholder="firstname"></label></br>
    <label for="lastname">
        <input type="text" name="lastname" placeholder="lastname"></label></br>
    <label for="email">
        <input type="email" name="email" placeholder="email"></label></br>
    <label for="phone">
        <input type="text" name="phone" placeholder="phone"></label></br>
    <label for="idComp">
        <input type="number" name="idComp" placeholder="Company" min="1" max="100"></label></br>
    <button type="submit" class="btn btn-primary" name="submitNewContact">Submit</button>
</form>


</section>