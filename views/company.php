
<section class="col-md-6 offset-md-3 mt-5">
<h2 class="text-center text-info">Liste des Companies</h2>

<table class="table ">
            <thead>
                <tr>
                    <th>#</th>
                    <th>Company Name</th>
                    <th>Country</th>
                    <th>VAT</th>
                </tr>
            </thead>
            <tbody>
                <?php
                    require_once(ROOT.'controllers/Companies.php');
                    
                    foreach($companies as $comp){
                    echo '<tr>';
                    echo '<th ><a href="'.ROOT.'companies/index/'.$comp['ID_Company'].'" >'.$comp['ID_Company'].'</th>';
                    echo '<th >'.$comp['Name'].'</th>';
                    echo '<th >'.$comp['Country'].'</th>';
                    echo '<th >'.$comp['VAT'].'</th>'; 
                    echo '</tr>';
                }
                     ?>
            </tbody>
                </table>
                </section>