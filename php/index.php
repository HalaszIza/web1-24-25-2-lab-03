<?php
include 'includes/header.php';

include 'includes/menu.php';

// http://localhost/web1-24-25-2-lab-03/php/index.php?page=home
$uri_parts = explode ('/', $_SERVER['REQUEST_URI']);
$page = array_pop($uri_parts);
switch ($_GET['page']) {
    case 'home':
        include 'home.php';
        break;
    case 'products':
        include 'products.php';
        break;
    case 'users':
        include 'users.php';
        break;
    default:
        echo 'page not found';
}


/* echo '<pre>';
print_r( array_pop ($uri_parts) );
echo '</pre>'; */

include 'includes/footer.php';

