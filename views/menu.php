
<?php 
    session_start();
?>
<nav>
        <ul class='nav table justify-content-center mt-1 mb-5 text-light'>
                <li class="ml-2 btn btn-info"><a  href="http://localhost/COGIP-app/Home/index">Home</a></li>
                <li class="ml-2 btn btn-info text-light"><a  href="http://localhost/COGIP-app/Invoices/index">Invoices</a></li>
                <li class="ml-2 btn btn-info text-light"><a  href="http://localhost/COGIP-app/Companies/index">Companies</a></li>
                <li class="ml-2 btn btn-info text-light"><a  href="http://localhost/COGIP-app/Contacts/index">Contacts</a></li>
                <li class="ml-2 btn btn-info text-light"><a  href="http://localhost/COGIP-app/Admin/index">Admin </a></li>
                <!-- REMPLACER LES HREF PAR < ?php echo ROOT.'controller/action'?> -->
        </ul>
    
</nav>