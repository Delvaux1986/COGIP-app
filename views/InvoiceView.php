<?php 
    session_start();
    
?>
<section class="col-md-6 offset-md-3 mt-5 mb-5 rounded border border-primary justify-content-center align-item-center bg-light container-fluid">
<h1 class="text-center text-info p-3">Invoice</h1>

<table class="table ">
            <thead >
                <tr class="font-weight-bold text-primary">
                    <th>#</th>
                    <th>Invoice number</th>
                    <th>Dates</th>
                    <th>Company</th>
                </tr>
            </thead>
            <tbody class="font-weight-normal">
                <?php
                    require_once(ROOT.'controllers/Invoice.php');
                    
                    echo '<tr>';
                    echo '<th ><a href="#">'.$inv[0]['ID_Invoice'].'</th>';
                    echo '<th >'.$inv[0]['Number_Invoice'].'</th>';
                    echo '<th >'.$inv[0]['Date_Invoice'].'</th>';
                    echo '<th >'.$inv[0]['Name'].'</th>'; 
                    echo '</tr>';
                
                     ?>
            </tbody>
                </table>
                </section>