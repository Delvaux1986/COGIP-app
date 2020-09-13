<h2 class="text-center text-info mt-5">Company</h2>

<section class="col-md-6 offset-md-3 mt-5 mb-5 rounded border border-primary container-fluid bg-light">
    <table class="table p-5">
        <thead>
           <tr class="text-primary">
                <th>#</th>
                <th>Name of company</th>
                <th>Country from company</th>
                <th>n° of VAT</th>
                <th>Type of company</th>
            </tr>
        </thead>
            <tbody>
            <?php
                    require_once(ROOT.'controllers/Companies.php');

                        echo '<tr>';
                        echo '<th >'.$company['ID_Company'].'</th>';
                        echo '<th >'.$company['Name'].'</th>';
                        echo '<th >'.$company['Country'].'</th>';
                        echo '<th >'.$company['VAT'].'</th>';
                        echo '<th >'.$company['Type_Company'].'</th>';
                        echo '</tr>';
                        ?>
            </tbody>
    </table>
</section>
    <h2 class="text-center text-info mt-5">Company's Invoices</h2>
<section class="col-md-6 offset-md-3 mt-5 mb-5 rounded border border-primary container-fluid bg-light">
    
        <table class="table">
                <thead>
                    
                         <tr class="text-primary">
                            <th>#</th>
                            <th>Name of company</th>
                            <th>Invoice number</th>
                            <th>Dates</th>
                            <th>n° of VAT</th> 
                        </tr>
                </thead>
                <tbody>
                    <?php                        
                        foreach($invoices as $inv){
                            echo '<tr>';
                            echo '<th >'.$inv['ID_Invoice'].'</th>';
                            echo '<th >'.$inv['Name'].'</th>';
                            echo '<th >'.$inv['Number_Invoice'].'</th>';
                            echo '<th >'.$inv['Date_Invoice'].'</th>';
                            echo '<th >'.$inv['VAT'].'</th>';
                            echo '</tr>';
                        
                            }?>
                    
                         
                </tbody>
    </table>
</section>