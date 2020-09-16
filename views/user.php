<?php 
    session_start();
?>
<section class="col-md-6 offset-md-3 mt-5 mb-5 rounded border  bg-light">
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
                        echo '<th >'.$contacts[0]['ID_Contact'].'</th>';
                        echo '<th >'.$contacts[0]['Firstname'].'</th>';
                        echo '<th >'.$contacts[0]['Lastname'].'</th>';
                        echo '<th >'.$contacts[0]['Email'].'</th>';
                        echo '<th >'.$contacts[0]['Phone'].'</th>';
                        echo '<th >'.$contacts[0]['Name'].'</th>';  
                        echo '</tr>';
                    
                         ?>
                </tbody>
    </table>
</section>

<section class="col-md-6 offset-md-3 mt-5 mb-5 rounded border border-primary   bg-light">
<h1 class="text-center text-info p-3">Invoices for this contact</h1>

<table class="table ">
            <thead>
                <tr class=" text-primary">
                    <th>#</th>
                    <th>N° of invoice</th>
                    <th>Date of invoice</th>
                    <th>Name of contact</th>
                </tr>
            </thead>
            <tbody>
                <?php
                    require_once(ROOT.'controllers/Contacts.php');
                    
                    foreach($invoices as $inv){
                    echo '<tr>';
                    echo '<th ><a href="https://delvauxrobby.yj.fr/delvauxrobby.yj.fr/blog/Assets/COGIP-app/contacts/showContact/'.$inv['ID_Contact'].'" >'.$inv['ID_Contact'].'</th>';
                    echo '<th >'.$inv['Number_Invoice'].'</th>';
                    echo '<th >'.$inv['Date_Invoice'].'</th>';
                    echo '<th >'.$inv['Firstname'].' '.$inv['Lastname'].'</th>';
                    echo '</tr>';
                }// REMPLACER HREF PAR ROOT 
                     ?>
            </tbody>
                </table>
                </section>
