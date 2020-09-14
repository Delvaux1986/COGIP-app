<section class="col-md-6 offset-md-3 mt-5 mb-5 rounded border border-primary justify-content-center align-item-center bg-light container-fluid">
<h1 class="text-center text-info p-3">Companies's List</h1>

<form action="AddContact.php" method="POST" class="font-weight-bold text-primary">
    <label for="firstname">Firstname :</label>
        <input type="text" name="firstname" value="firstname">
    <label for="lastname">Lastname :</label>
        <input type="text" name="lastname" value="lastname">
    <label for="email">Email :</label>
        <input type="email" name="email" value="email">
    <label for="phone">Phone :</label>
        <input type="text" name="phone" value="phone">
    <button type="submit" class="btn btn-primary" name="submitNewContact">Submit</button>
</form>

<?php
    // require_once(ROOT.'controllers/Admin.php');                
    // foreach($admin as $adm){
    //     echo '<tr>';
    //     echo '<th ><a href="" >'.$adm['ID_User'].'</th>';
    //     echo '<th >'.$adm['Name'].'</th>';
    //     echo '<th >'.$adm['Profil'].'</th>';
    //     echo '</tr>';
    // }
?>

</section>