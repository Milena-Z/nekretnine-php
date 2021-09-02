<?php include_once 'config/init.php'; ?>
 
<?php
    $realestate = new Realestate;

    if(isset($_POST['del_id'])) {
        $del_id = $_POST['del_id'];
        if($realestate -> delete($del_id)) {
            redirect('index.php', 'Offer Deleted', 'success');
        } else {
            redirect('index.php', 'Offer Not Deleted', 'error');
        }
    }
 
    $template = new Template('./templates/real-single.php');

    $realestate_id = isset($_GET['id']) ? $_GET['id'] : null;

    $template -> realestate = $realestate -> getRealestate($realestate_id);

    echo $template;
?>