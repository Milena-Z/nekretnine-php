

<?php include_once 'config/init.php'; ?>

<?php
    $realestate = new Realestate;

    $template = new Template('./templates/frontpage.php');

    $category = isset($_GET['category']) ? $_GET['category'] : null;

    if($category) {
        $template -> realestates = $realestate -> getByCategory($category);
        $template -> title = 'Nekretnine u kategoriji: '. $realestate -> getCategory($category)->name;
    } else {
        $template -> title = 'Najnoviji oglasi';
        $template -> realestates = $realestate -> getAllRealestate();
    }
 
    $template -> categories = $realestate -> getCategories();
    
    echo $template;
?>