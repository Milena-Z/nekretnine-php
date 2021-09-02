<?php include_once 'config/init.php'; ?>
 
<?php
    $realestate = new Realestate;

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

        if($realestate -> create($data)) {
            redirect('index.php', 'Your offer has been listed', 'success');
        } else {
            redirect('index.php', 'Something went wrong', 'error');
        }
    }
    $template = new Template('./templates/real-create.php');

    $template -> categories = $realestate -> getCategories();

    echo $template;
