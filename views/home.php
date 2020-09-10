
<section class="col-md-6 offset-md-3 mt-5 rounded border">
<h2 class="text-center text-info">Welcome to the COGIP</h2>

<table class="table ">
            <thead>
                <tr>
                    <th>#</th>
                    <th>Firstname</th>
                    <th>Lastname</th>
                    <th>Email</th>
                    <th>Phone</th>
                </tr>
            </thead>
            <tbody>
                <?php
                    require_once(ROOT.'controllers/Home.php');
                    var_dump($content);
                    
                    foreach($content as $content){
                    echo '<tr>';
                    echo '<th ><a href="" >'.$content['ID_Contact'].'</th>';
                    echo '<th >'.$content['Firstname'].'</th>';
                    echo '<th >'.$content['Lastname'].'</th>';
                    echo '<th >'.$content['Email'].'</th>';
                    echo '<th >'.$content['Phone'].'</a></th>'; 
                    echo '</tr>';
                }
                     ?>
            </tbody>
                </table>
                </section>