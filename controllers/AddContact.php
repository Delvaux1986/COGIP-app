<?php
require_once(ROOT.'controllers/Admin.php');
if(isset($_POST['submitNewContact'])) {
    // Check security of inputs
    newContact();
}