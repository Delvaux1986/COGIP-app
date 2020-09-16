<?php
    session_start();
?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" href="https://delvauxrobby.yj.fr/delvauxrobby.yj.fr/blog/Assets/COGIP-app/assets/css/style.css">
    <link href="https://fonts.googleapis.com/css2?family=Karma:wght@300;400;600;700&display=swap" rel="stylesheet">
    <title>COGIP</title>
</head>
<body class="bg-dark text-center m-3">
  <header>
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
                    if(isset($_SESSION['TypeUser']) && $_SESSION['TypeUser'] === 'Admin'){
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
  </header>   
        <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>  
</body>
</html>



    <!-- Links -->


    <!-- <li class="ml-2 btn btn-info "><a  href="http://localhost/COGIP-app/Admin/index" class="text-light font-weight-bold nav-link">Admin </a></li>REMPLACER LES HREF PAR < ?php echo ROOT.'controller/action'?> -->