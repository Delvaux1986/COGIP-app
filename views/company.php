<?php 
    session_start();
?>
<section class="col-md-6 offset-md-3 mt-5 mb-5 rounded border border-primary justify-content-center align-item-center bg-light container-fluid">
<h1 class="text-center text-info p-3">Companies's List</h1>

<table class="table ">
            <thead >
                <tr class="font-weight-bold text-primary">
                    <th>#</th>
                    <th>Company Name</th>
                    <th>Country</th>
                    <th>VAT</th>
                </tr>
            </thead>
            <tbody class="font-weight-normal">
                <?php
                    require_once(ROOT.'controllers/Companies.php');
                    
                    foreach($companies as $comp){
                    echo '<tr>';
                    echo '<th ><a href="https://delvauxrobby.yj.fr/delvauxrobby.yj.fr/blog/Assets/COGIP-app/Companies/showCompany/'.$comp['ID_Company'].'" >'.$comp['ID_Company'].'</th>';
                    echo '<th >'.$comp['Name'].'</th>';
                    echo '<th >'.$comp['Country'].'</th>';
                    echo '<th >'.$comp['VAT'].'</th>'; 
                    echo '</tr>';
                }
                     ?>
            </tbody>
                </table>
                </section>