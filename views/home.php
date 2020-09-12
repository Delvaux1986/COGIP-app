
<section class="col-md-6 offset-md-3 mt-5 mb-5 rounded border border-primary   bg-light">
<h1 class="text-center text-info p-4">Welcome to the COGIP</h1>

<p class="text-left">Bonjour !</p>
<table class="table">
            <thead>
            <h2 class="text-center text-info p-3">Last invoices </h2>
                <tr class=" text-primary">
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
                    echo '<th ><a href="http://localhost/COGIP-app/companies/showCompany/'.$content['ID_Invoice'].'" >'.$content['ID_Invoice'].'</th></a>';
                    echo '<th >'.$content['Number_Invoice'].'</th>';
                    echo '<th >'.$content['Date_Invoice'].'</th>';
                    echo '<th >'.$content['Name'].'</th>';
                    echo '</tr>';
                }
                     ?>
            </tbody>
                </table>
</section>
<section class="col-md-6 offset-md-3 mt-5 rounded border border-primary  bg-light">
    <table class="table">
        <thead>
            <h2 class="text-center text-info p-3">Last contacts </h2>
                <tr class=" text-primary">
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
<section class="col-md-6 offset-md-3 mt-5 rounded border border-primary  mb-5   bg-light">
    <table class="table">
        <thead>
            <h2 class="text-center text-info p-3">Last companies </h2>
                <tr class=" text-primary">
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
                    echo '<th><a href="http://localhost/COGIP-app/companies/showCompany/'.$content['ID_Company'].'"">'.$content['ID_Company'].'</th></a>';
                    echo '<th>'.$content['Name'].  '</th>';
                    echo '<th>'.$content['Country']. '</th>';
                    echo '<th>'.$content['VAT']. '</th>';
                    echo '<th>'.$content['Type_Company'].'</th>';
                    echo '</tr>';
                }?>
                </tbody>
                </table>
</section>