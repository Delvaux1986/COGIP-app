
<section class="col-md-6 offset-md-3">
<h2 class="text-center text-info">Liste des Contacts</h2>

<table class="table ">
            <thead>
                <tr>
                    <th>#</th>
                    <th>Firstanme</th>
                    <th>Lastname</th>
                    <th>Email</th>
                    <th>Phone</th>
                </tr>
            </thead>
            <tbody>
                <?php
                    require_once(ROOT.'controllers/Contacts.php');
                    
                    // echo $contacts['Firstname'];
                    foreach($contacts as $contact){
                    echo '<tr>';
                    echo '<th >'.$contact['ID_Contact'].'</th>';
                    echo '<th >'.$contact['Firstname'].'</th>';
                    echo '<th >'.$contact['Lastname'].'</th>';
                    echo '<th >'.$contact['Email'].'</th>';
                    echo '<th >'.$contact['Phone'].'</th>'; 
                    echo '</tr>';
                }
                     ?>
            </tbody>
                </table>
                </section>