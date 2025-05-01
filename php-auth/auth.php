<?php

session_start();

print_r(value: $_SESSION);

if (isset($_SESSION['valid']) && $_SESSION['valid'] == true ) {
    header(header: 'Location: dashboard.php');
}
else {
    header(header: 'Location: login.php');

}

