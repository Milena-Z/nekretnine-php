<?php 
    // Redirektovanje na stranicu
    function redirect($page = FALSE, $message = NULL, $message_type = NULL) {
        if(is_string($page)) {
            $location = $page;
        } else {
            $location = $_SERVER ['SCRIPT_NAME'];
        }

        // Proveriti da li postoje poruke
        if($message != NULL) {
            // Postaviti poruku
            $_SESSION['message'] = $message;
        }

        // Proveriti tip poruke
        if($message_type != NULL) {
            // Postaviti tip poruke
            $_SESSION['message_type'] = $message_type;
        }

        // Redirektovanje
        header('Location: '. $location);
        exit;
    }

    // Prikaz poruke
    function displayMessage() {
        if(!empty($_SESSION['message'])) {

            // Dodeljivanje poruke promenljivoj
            $message = $_SESSION['message'];

            if(!empty($_SESSION['message_type'])) {
                // dodeljivanje tipa promenljivoj
                $message_type = $_SESSION['message_type'];
                // kreiranje autputa
                if ($message_type == 'error') {
                    echo '<div class="alert alert-danger">' . $message . '</div>';
                } else {
                    echo '<div class="alert alert-success">' . $message . '</div>';
                }
            }
            //Resetovanje poruke
            unset($_SESSION['message']);
            unset($_SESSION['message_type']);
        } else {
            echo '';
        }
    }