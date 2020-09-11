<section class="col-md-6 offset-md-3 mt-5 rounded border">
<h2 class="text-center text-info">Contact</h2>

    <table class="table ">
        <thead>
           <tr>
                    <th>#</th>
                    <th>Firstname</th>
                    <th>Lastname</th>
                    <th>Email</th>
                    <th>Phone</th>
                    <th>Company</th>
                    </tr>
            </thead>
            <tbody>
            <?php
                    require_once(ROOT.'controllers/Contacts.php');
                    foreach($user as $user){
                        echo '<tr>';
                        echo '<th ><a href="" >'.$user['ID_Contact'].'</th>';
                        echo '<th >'.$user['Firstname'].'</th>';
                        echo '<th >'.$user['Lastname'].'</th>';
                        echo '<th >'.$user['Email'].'</th>';
                        echo '<th >'.$user['Phone'].'</a></th>'; 
                        echo '</tr>';
                    }
                         ?>
                </tbody>
    </table>
</section>
