<?php include_once 'config/init.php'; ?>
  
<?php
    $realestate = new Realestate;

    $realestate_id = isset($_GET['id']) ? $_GET['id'] : null;

    if(isset($_POST['submit'])) {
        $data = array();
        $data['realestate_title'] = $_POST['realestate_title'];
        $data['company'] = $_POST['company'];
        $data['category_id'] = $_POST['category'];
        $data['description'] = $_POST['description'];
        $data['location'] = $_POST['location'];
        $data['price'] = $_POST['price'];
        $data['contact_agent'] = $_POST['contact_agent'];
        $data['contact_email'] = $_POST['contact_email'];

        if($realestate ->update($realestate_id, $data)) {
            redirect('index.php', 'Your offer has been updated', 'success');
        } else {
            redirect('index.php', 'Something went wrong', 'error');
        }
    }
    $template = new Template('./templates/real-edit.php');

    $template -> realestate = $realestate -> getRealestate($realestate_id);
    $template -> categories = $realestate -> getCategories();

    echo $template;