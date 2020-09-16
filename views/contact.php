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
                    <?php 
                        if($_SESSION['TypeUser'] === "Admin"){
                            echo '<th>Delete</th>';
                            echo '<th>Update</th>';
                        }
                        ?>
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
                    if($_SESSION['TypeUser'] === "Admin"){
                        echo '<th><a href="'.URL.'Admin/DeleteContactFromId/'.$com['ID_Contact'].'"><svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-trash" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                        <path d="M5.5 5.5A.5.5 0 0 1 6 6v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5zm2.5 0a.5.5 0 0 1 .5.5v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5zm3 .5a.5.5 0 0 0-1 0v6a.5.5 0 0 0 1 0V6z"/>
                        <path fill-rule="evenodd" d="M14.5 3a1 1 0 0 1-1 1H13v9a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2V4h-.5a1 1 0 0 1-1-1V2a1 1 0 0 1 1-1H6a1 1 0 0 1 1-1h2a1 1 0 0 1 1 1h3.5a1 1 0 0 1 1 1v1zM4.118 4L4 4.059V13a1 1 0 0 0 1 1h6a1 1 0 0 0 1-1V4.059L11.882 4H4.118zM2.5 3V2h11v1h-11z"/>
                      </svg></a></th>';
                      echo '<th>Update</th>';
                    }  
                    echo '</tr>';
                }// REMPLACER HREF PAR ROOT 
                     ?>
            </tbody>
                </table>
                </section>
               