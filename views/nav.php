<?php
    session_start();
?>
<section class="d-flex flex-row justify-content-center">   
        <article>
            <img src="https://cdn.uc.assets.prezly.com/e5e83a03-4eba-4a28-a330-d728d6fd8752/-/quality/best/-/format/auto/" class="logo-size navbar-brand img-fluid" alt="becode">
        </article>
        <article>
            <nav class="navbar navbar-expand-sm navbar-dark primary-color">
                <ul class='nav table justify-content-center m-2'>
                    <li class="m-2 btn btn-info "><a  href="https://delvauxrobby.yj.fr/delvauxrobby.yj.fr/blog/Assets/COGIP-app/Home/index" class="text-light font-weight-bold nav-link">Home</a></li>
                    <li class="m-2 btn btn-info "><a  href="https://delvauxrobby.yj.fr/delvauxrobby.yj.fr/blog/Assets/COGIP-app/Invoice/index" class="text-light font-weight-bold nav-link">Invoices</a></li>
                    <li class="m-2 btn btn-info "><a  href="https://delvauxrobby.yj.fr/delvauxrobby.yj.fr/blog/Assets/COGIP-app/Companies/index" class="text-light font-weight-bold nav-link">Companies</a></li>
                    <li class="m-2 btn btn-info "><a  href="https://delvauxrobby.yj.fr/delvauxrobby.yj.fr/blog/Assets/COGIP-app/Contacts/index" class="text-light font-weight-bold nav-link">Contacts</a></li>

                <?php  
                    if($_SESSION['TypeUser'] === 'Admin'){
                        echo '<li class="nav-item dropdown m-2 btn btn-info ">';
                        echo '<a class="nav-link dropdown-toggle font-weight-bold" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Admin</a>';
                        echo ' <div class="dropdown-menu dropdown-primary" aria-labelledby="navbarDropdownMenuLink">';
                        echo '<a class="dropdown-item" href="https://delvauxrobby.yj.fr/delvauxrobby.yj.fr/blog/Assets/COGIP-app/Admin/DashBoard">Dashboard</a>';
                        echo '<a class="dropdown-item" href="https://delvauxrobby.yj.fr/delvauxrobby.yj.fr/blog/Assets/COGIP-app/Admin/NewContact">New Contact</a>';
                        echo '<a class="dropdown-item" href="https://delvauxrobby.yj.fr/delvauxrobby.yj.fr/blog/Assets/COGIP-app/Admin/NewCompany">New Company</a>';
                        echo '<a class="dropdown-item" href="https://delvauxrobby.yj.fr/delvauxrobby.yj.fr/blog/Assets/COGIP-app/Admin/NewInvoice">New Invoice</a>';
                        echo '<a class="dropdown-item" href="https://delvauxrobby.yj.fr/delvauxrobby.yj.fr/blog/Assets/COGIP-app/Admin/Logout">Logout</a>';
                        echo '</div>';
                        echo ' </li>';
                   
                    }
                
                
                ?>

                </ul>
            </nav>
        </article>
    </section>