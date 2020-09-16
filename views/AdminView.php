<?php session_start(); ?>
<section class="col-md-6 offset-md-3 mt-5 mb-5 rounded border border-primary justify-content-center align-item-center bg-light container-fluid">
    <h1 class="text-center text-info p-3">DashBoard</h1>
        <p class="text-left">Welcome <?= $_SESSION['TypeUser']?></P> 
        <article class="row">
        <div class="col-md-12 ">
        <h1 class="text-center text-info p-4"><svg width="1em" class="ml-1" height="1em" viewBox="0 0 19 13" class="bi bi-calculator" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
  <path fill-rule="evenodd" d="M12 1H4a1 1 0 0 0-1 1v12a1 1 0 0 0 1 1h8a1 1 0 0 0 1-1V2a1 1 0 0 0-1-1zM4 0a2 2 0 0 0-2 2v12a2 2 0 0 0 2 2h8a2 2 0 0 0 2-2V2a2 2 0 0 0-2-2H4z"/>
  <path d="M4 2.5a.5.5 0 0 1 .5-.5h7a.5.5 0 0 1 .5.5v2a.5.5 0 0 1-.5.5h-7a.5.5 0 0 1-.5-.5v-2zm0 4a.5.5 0 0 1 .5-.5h1a.5.5 0 0 1 .5.5v1a.5.5 0 0 1-.5.5h-1a.5.5 0 0 1-.5-.5v-1zm0 3a.5.5 0 0 1 .5-.5h1a.5.5 0 0 1 .5.5v1a.5.5 0 0 1-.5.5h-1a.5.5 0 0 1-.5-.5v-1zm0 3a.5.5 0 0 1 .5-.5h1a.5.5 0 0 1 .5.5v1a.5.5 0 0 1-.5.5h-1a.5.5 0 0 1-.5-.5v-1zm3-6a.5.5 0 0 1 .5-.5h1a.5.5 0 0 1 .5.5v1a.5.5 0 0 1-.5.5h-1a.5.5 0 0 1-.5-.5v-1zm0 3a.5.5 0 0 1 .5-.5h1a.5.5 0 0 1 .5.5v1a.5.5 0 0 1-.5.5h-1a.5.5 0 0 1-.5-.5v-1zm0 3a.5.5 0 0 1 .5-.5h1a.5.5 0 0 1 .5.5v1a.5.5 0 0 1-.5.5h-1a.5.5 0 0 1-.5-.5v-1zm3-6a.5.5 0 0 1 .5-.5h1a.5.5 0 0 1 .5.5v1a.5.5 0 0 1-.5.5h-1a.5.5 0 0 1-.5-.5v-1zm0 3a.5.5 0 0 1 .5-.5h1a.5.5 0 0 1 .5.5v4a.5.5 0 0 1-.5.5h-1a.5.5 0 0 1-.5-.5v-4z"/>
    </svg> COGIP Accounting Software<svg width="1em" height="1em" class="ml-3" viewBox="0 0 19 13" class="bi bi-calculator" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
  <path fill-rule="evenodd" d="M12 1H4a1 1 0 0 0-1 1v12a1 1 0 0 0 1 1h8a1 1 0 0 0 1-1V2a1 1 0 0 0-1-1zM4 0a2 2 0 0 0-2 2v12a2 2 0 0 0 2 2h8a2 2 0 0 0 2-2V2a2 2 0 0 0-2-2H4z"/>
  <path d="M4 2.5a.5.5 0 0 1 .5-.5h7a.5.5 0 0 1 .5.5v2a.5.5 0 0 1-.5.5h-7a.5.5 0 0 1-.5-.5v-2zm0 4a.5.5 0 0 1 .5-.5h1a.5.5 0 0 1 .5.5v1a.5.5 0 0 1-.5.5h-1a.5.5 0 0 1-.5-.5v-1zm0 3a.5.5 0 0 1 .5-.5h1a.5.5 0 0 1 .5.5v1a.5.5 0 0 1-.5.5h-1a.5.5 0 0 1-.5-.5v-1zm0 3a.5.5 0 0 1 .5-.5h1a.5.5 0 0 1 .5.5v1a.5.5 0 0 1-.5.5h-1a.5.5 0 0 1-.5-.5v-1zm3-6a.5.5 0 0 1 .5-.5h1a.5.5 0 0 1 .5.5v1a.5.5 0 0 1-.5.5h-1a.5.5 0 0 1-.5-.5v-1zm0 3a.5.5 0 0 1 .5-.5h1a.5.5 0 0 1 .5.5v1a.5.5 0 0 1-.5.5h-1a.5.5 0 0 1-.5-.5v-1zm0 3a.5.5 0 0 1 .5-.5h1a.5.5 0 0 1 .5.5v1a.5.5 0 0 1-.5.5h-1a.5.5 0 0 1-.5-.5v-1zm3-6a.5.5 0 0 1 .5-.5h1a.5.5 0 0 1 .5.5v1a.5.5 0 0 1-.5.5h-1a.5.5 0 0 1-.5-.5v-1zm0 3a.5.5 0 0 1 .5-.5h1a.5.5 0 0 1 .5.5v4a.5.5 0 0 1-.5.5h-1a.5.5 0 0 1-.5-.5v-4z"/>
</svg></h1>

        
            <table class="table table-sm-responsive">
                <thead>
                <h2 class="text-center text-info pt-3">Last invoices </h2>
                    <tr class="text-center text-primary d-flex flex-wrap justify-content-center align-item-center">
                        <th>#</th>
                        <th>Invoice number</th>
                        <th>Dates</th>
                        <th>Company</th>
                <?php 
                        if($_SESSION['TypeUser'] === "Admin"){
                            echo '<th>Delete</th>';
                        }
                        ?>
                    </tr>
                </thead>
                <tbody class="text-justify">
                    <?php                     
                        require_once(ROOT.'controllers/Home.php');
                        var_dump($_SESSION['TypeUser']);
                        foreach($invoices as $content){
                            echo '<tr class="d-flex flex-wrap justify-content-center align-item-center">';
                            echo '<th ><a href="https://delvauxrobby.yj.fr/delvauxrobby.yj.fr/blog/Assets/COGIP-app/Invoice/ShowInvoice/'.$content['ID_Invoice'].'" >'.$content['ID_Invoice'].'</th></a>';
                            echo '<th >'.$content['Number_Invoice'].'</th>';
                            echo '<th >'.$content['Date_Invoice'].'</th>';
                            echo '<th >'.$content['Name'].'</th>';
                            if($_SESSION['TypeUser'] === "Admin"){
                                echo '<th><a href="'.URL.'Admin/DeleteInvoiceFromId/'.$content['ID_Invoice'].'"><svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-trash" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                                <path d="M5.5 5.5A.5.5 0 0 1 6 6v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5zm2.5 0a.5.5 0 0 1 .5.5v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5zm3 .5a.5.5 0 0 0-1 0v6a.5.5 0 0 0 1 0V6z"/>
                                <path fill-rule="evenodd" d="M14.5 3a1 1 0 0 1-1 1H13v9a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2V4h-.5a1 1 0 0 1-1-1V2a1 1 0 0 1 1-1H6a1 1 0 0 1 1-1h2a1 1 0 0 1 1 1h3.5a1 1 0 0 1 1 1v1zM4.118 4L4 4.059V13a1 1 0 0 0 1 1h6a1 1 0 0 0 1-1V4.059L11.882 4H4.118zM2.5 3V2h11v1h-11z"/>
                              </svg></a></th>';
                            }
                            echo '</tr>';
                          
                        }  
                    ?>
                </tbody>
            </table>
        </div>
    </article>
</section>

<section class="col-md-6 offset-md-3  text-center mt-5 rounded border border-primary container-fluid bg-light">
    <!-- <div class="row"> -->
        <!-- <div class="col-md-12 d-flex flex-wrap"> -->
            <table class="table table-sm-responsive">
                <thead>
                    <h2 class="text-center text-info pt-3">Last contacts </h2>
                    <tr class=" text-primary  d-flex flex-wrap justify-content-center align-item-center">
                        <th>#</th>
                        <th>Name</th>
                        <th>Phone</th>
                        <th>e-mail</th>
                        <th>Company</th>
                        <?php 
                        if($_SESSION['TypeUser'] === "Admin"){
                            echo '<th>Delete</th>';
                        }
                        ?>
                    </tr>
                </thead>
                <tbody>
                <?php
                    
                    foreach($contacts as $content){
                        echo '<tr class="d-flex flex-wrap justify-content-center align-item-center">';
                        echo '<th><a href="https://delvauxrobby.yj.fr/delvauxrobby.yj.fr/blog/Assets/COGIP-app/Contacts/showContact/'.$content["ID_Contact"].'">'.$content['ID_Contact'].'</th></a>';
                        echo '<th>'.$content['Firstname']. ' '.$content['Lastname']. '</th>';
                        echo '<th>'.$content['Phone']. '</th>';
                        echo '<th>'.$content['Email']. '</th>';
                        echo '<th>'.$content['Name'].'</th>';
                        if($_SESSION['TypeUser'] === "Admin"){
                            echo '<th><a href="'.URL.'Admin/DeleteContactFromId/'.$content['ID_Invoice'].'"><svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-trash" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                            <path d="M5.5 5.5A.5.5 0 0 1 6 6v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5zm2.5 0a.5.5 0 0 1 .5.5v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5zm3 .5a.5.5 0 0 0-1 0v6a.5.5 0 0 0 1 0V6z"/>
                            <path fill-rule="evenodd" d="M14.5 3a1 1 0 0 1-1 1H13v9a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2V4h-.5a1 1 0 0 1-1-1V2a1 1 0 0 1 1-1H6a1 1 0 0 1 1-1h2a1 1 0 0 1 1 1h3.5a1 1 0 0 1 1 1v1zM4.118 4L4 4.059V13a1 1 0 0 0 1 1h6a1 1 0 0 0 1-1V4.059L11.882 4H4.118zM2.5 3V2h11v1h-11z"/>
                          </svg></a></th>';
                        }
                        echo '</tr>';
                        // REMPLACER HREF PAR ROOT 

                    }?>
                </tbody>
            </table>
        <!-- </div> -->
    <!-- </div> -->
</section>
<section class="col-md-6 offset-md-3 mt-5 text-center rounded border border-primary  mb-5 container-fluid  bg-light">
    <table class="table table-sm-responsive">
        <thead>
            <h2 class="text-center text-info pt-3">Last companies </h2>
                <tr class=" d-flex flex-wrap text-primary justify-content-center align-item-center">
                    <th>#</th>
                    <th>Name</th>
                    <th>TVA</th>
                    <th>Country</th>
                    <th>Type</th>
                    <?php 
                        if($_SESSION['TypeUser'] === "Admin"){
                            echo '<th>Delete</th>';
                        }
                        ?>
                </tr>
            </thead>
        <tbody>
            <?php
                foreach($companies as $content){
                    echo '<tr class="d-flex flex-wrap justify-content-center align-item-center">';
                    echo '<th><a href="https://delvauxrobby.yj.fr/delvauxrobby.yj.fr/blog/Assets/COGIP-app/Companies/showCompany/'.$content['ID_Company'].'">'.$content['ID_Company'].'</th></a>';
                    echo '<th>'.$content['Name'].  '</th>';
                    echo '<th>'.$content['Country']. '</th>';// REMPLACER HREF PAR ROOT 
                    echo '<th>'.$content['VAT']. '</th>';
                    echo '<th>'.$content['Type_Company'].'</th>';
                    if($_SESSION['TypeUser'] === "Admin"){
                        echo '<th><a href="'.URL.'Admin/DeleteCompanyFromId/'.$content['ID_Invoice'].'"><svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-trash" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                        <path d="M5.5 5.5A.5.5 0 0 1 6 6v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5zm2.5 0a.5.5 0 0 1 .5.5v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5zm3 .5a.5.5 0 0 0-1 0v6a.5.5 0 0 0 1 0V6z"/>
                        <path fill-rule="evenodd" d="M14.5 3a1 1 0 0 1-1 1H13v9a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2V4h-.5a1 1 0 0 1-1-1V2a1 1 0 0 1 1-1H6a1 1 0 0 1 1-1h2a1 1 0 0 1 1 1h3.5a1 1 0 0 1 1 1v1zM4.118 4L4 4.059V13a1 1 0 0 0 1 1h6a1 1 0 0 0 1-1V4.059L11.882 4H4.118zM2.5 3V2h11v1h-11z"/>
                      </svg></a></th>';
                    }
                    echo '</tr>';
                }?>
                </tbody>
                </table>
</section>
</section>