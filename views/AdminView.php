<section class="col-md-6 offset-md-3 mt-5 mb-5 rounded border border-primary justify-content-center align-item-center bg-light container-fluid">
<h1 class="text-center text-info p-3">Companies's List</h1>

<table class="table ">
            <thead >
                <tr class="font-weight-bold text-primary">
                    <th>#</th>
                    <th>Name</th>
                    <th>Profil</th>
                </tr>
            </thead>
            <tbody class="font-weight-normal">
                <?php
                    require_once(ROOT.'controllers/Admin.php');
                    
                    foreach($admin as $adm){
                    echo '<tr>';
                    echo '<th ><a href="" >'.$adm['ID_User'].'</th>';
                    echo '<th >'.$adm['Name'].'</th>';
                    echo '<th >'.$adm['Profil'].'</th>';
                    echo '</tr>';
                }
                     ?>
            </tbody>
                </table>
                </section>