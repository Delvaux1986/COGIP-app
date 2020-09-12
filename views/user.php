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
                    
                    
                        
                        echo '<tr>';
                        echo '<th >'.$contacts['ID_Contact'].'</th>';
                        echo '<th >'.$contacts['Firstname'].'</th>';
                        echo '<th >'.$contacts['Lastname'].'</th>';
                        echo '<th >'.$contacts['Email'].'</th>';
                        echo '<th >'.$contacts['Phone'].'</th>'; 
                        echo '</tr>';
                    
                         ?>
                </tbody>
    </table>
</section>
