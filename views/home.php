
<section class="col-md-6 offset-md-3 mt-5 mb-5 rounded border">
<h2 class="text-center text-info">Welcome to the COGIP</h2>

<p class="text-left">Bonjour !</p>
<table class="table">
            <thead>
            <h3 class="text-center text-success">Last invoices :</h3>
                <tr>
                    <th>#</th>
                    <th>Invoice number</th>
                    <th>Dates</th>
                    <th>Company</th>
                </tr>
            </thead>
            <tbody>
                <?php
                    require_once(ROOT.'controllers/Home.php');
                    
                    
                    // var_dump($contentInv);

                    foreach($contentInv as $content){
                    echo '<tr>';
                    echo '<th ><a href="" >'.$content['ID_Invoice'].'</th></a>';
                    echo '<th >'.$content['Number_Invoice'].'</th>';
                    echo '<th >'.$content['Date_Invoice'].'</th>';
                    echo '<th >'.$content['Name'].'</th>';
                    echo '</tr>';
                }
                     ?>
            </tbody>
                </table>
</section>
<section class="col-md-6 offset-md-3 mt-5 rounded border">
    <table class="table">
        <thead>
            <h3 class="text-center text-success">Last contacts :</h3>
                <tr>
                    <th>#</th>
                    <th>Name</th>
                    <th>Phone</th>
                    <th>e-mail</th>
                    <th>Company</th>
                </tr>
            </thead>
        <tbody>
            <?php
                
                foreach($contentCont as $content){
                    echo '<tr>';
                    echo '<th><a href="http://localhost/COGIP-app/contacts/showContact/'.$content["ID_Contact"].'">'.$content['ID_Contact'].'</th></a>';
                    echo '<th>'.$content['Firstname']. ' '.$content['Lastname']. '</th>';
                    echo '<th>'.$content['Phone']. '</th>';
                    echo '<th>'.$content['Email']. '</th>';
                    echo '<th>'.$content['Name'].'</th>';
                    echo '</tr>';
                    // http://localhost/COGIP-app/contacts/showContact('.$content['ID_Contact'].')

}?>
                </tbody>
                </table>
</section>
<section class="col-md-6 offset-md-3 mt-5 rounded border mb-5">
    <table class="table">
        <thead>
            <h3 class="text-center text-success">Last companies :</h3>
                <tr>
                    <th>#</th>
                    <th>Name</th>
                    <th>TVA</th>
                    <th>Country</th>
                    <th>Type</th>
                </tr>
            </thead>
        <tbody>
            <?php
                foreach($contentComp as $content){
                    echo '<tr>';
                    echo '<th><a href="">'.$content['ID_Company'].'</th></a>';
                    echo '<th>'.$content['Name'].  '</th>';
                    echo '<th>'.$content['Country']. '</th>';
                    echo '<th>'.$content['VAT']. '</th>';
                    echo '<th>'.$content['Type_Company'].'</th>';
                    echo '</tr>';
                }?>
                </tbody>
                </table>
</section>