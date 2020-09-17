<?php 
    session_start();
    
?>
<section class="col-md-6 offset-md-3 mt-5 mb-5 rounded border border-primary justify-content-center align-item-center bg-light container-fluid">
<h1 class="text-center text-info p-3">Invoices's List</h1>

<table class="table ">
            <thead >
                <tr class="font-weight-bold text-primary">
                    <th>#</th>
                    <th>Invoice number</th>
                    <th>Dates</th>
                    <th>Company</th>
                    <?php 
                        if($_SESSION['TypeUser'] === "Admin"){
                            echo '<th>Delete</th>';
                            echo '<th>Update</th>';
                        }
                        ?>
                </tr>
            </thead>
            <tbody class="font-weight-normal">
                <?php
                    require_once(ROOT.'controllers/Invoice.php'); 
                    foreach($invoices as $inv){
                    echo '<tr>';
                    echo '<th ><a href="https://delvauxrobby.yj.fr/delvauxrobby.yj.fr/blog/Assets/COGIP-app/Invoice/ShowInvoice/'.$inv['ID_Invoice'].'" >'.$inv['ID_Invoice'].'</th>';
                    echo '<th >'.$inv['Number_Invoice'].'</th>';
                    echo '<th >'.$inv['Date_Invoice'].'</th>';
                    echo '<th >'.$inv['Name'].'</th>';
                    if($_SESSION['TypeUser'] === "Admin"){
                        echo '<th><a href="'.URL.'Admin/DeleteInvoiceFromId/'.$inv['ID_Invoice'].'"><svg width="1em" height="1em" class="text-secondary" viewBox="0 0 16 16" class="bi bi-trash" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                        <path d="M5.5 5.5A.5.5 0 0 1 6 6v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5zm2.5 0a.5.5 0 0 1 .5.5v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5zm3 .5a.5.5 0 0 0-1 0v6a.5.5 0 0 0 1 0V6z"/>
                        <path fill-rule="evenodd" d="M14.5 3a1 1 0 0 1-1 1H13v9a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2V4h-.5a1 1 0 0 1-1-1V2a1 1 0 0 1 1-1H6a1 1 0 0 1 1-1h2a1 1 0 0 1 1 1h3.5a1 1 0 0 1 1 1v1zM4.118 4L4 4.059V13a1 1 0 0 0 1 1h6a1 1 0 0 0 1-1V4.059L11.882 4H4.118zM2.5 3V2h11v1h-11z"/>
                      </svg></a></th>';
                      echo '<th>Update</th>';
                    } 
                    echo '</tr>';
                }
                     ?>
            </tbody>
                </table>
                </section>