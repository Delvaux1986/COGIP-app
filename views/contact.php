<?php 
    session_start();
    
?>
<section class="col-md-6 offset-md-3 mt-5 mb-5 rounded border border-primary   bg-light">
<h1 class="text-center text-info p-3">Liste des Contacts</h1>

<table class="table ">
            <thead>
                <tr class=" text-primary">
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
                    foreach($comp as $com){
                    echo '<tr>';
                    echo '<th ><a href="https://delvauxrobby.yj.fr/delvauxrobby.yj.fr/blog/Assets/COGIP-app/contacts/showContact/'.$com['ID_Contact'].'" >'.$com['ID_Contact'].'</th>';
                    echo '<th >'.$com['Firstname'].'</th>';
                    echo '<th >'.$com['Lastname'].'</th>';
                    echo '<th >'.$com['Email'].'</th>';
                    echo '<th >'.$com['Phone'].'</th>';
                    echo '<th >'.$com['Name'].'</a></th>';  
                    echo '</tr>';
                }// REMPLACER HREF PAR ROOT 
                     ?>
            </tbody>
                </table>
                </section>
               