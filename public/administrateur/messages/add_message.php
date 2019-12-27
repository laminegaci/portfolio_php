<?php include('../../../private/initialize.php');?>

<?phP 

echo '----------------page add message<br><br><br>';

if(!empty($_POST)) {
    
    //Create record using post parameters
    $args = [];
    $args['nom'] = $_POST['nom'] ?? NULL;
    $args['prenom'] = $_POST['prenom'] ?? NULL;
    $args['email'] = $_POST['email'] ?? NULL;
    $args['message'] = $_POST['message'] ?? NULL;
    
    $message = new Contact($args);
    $result = $message->create();
    if($result === true) {
        $new_id = $message->id;
        $_SESSION['waslat'] = true;
        header("Location:".url_for('index.php'));
    }
    else{
        $_SESSION['waslat'] = false;
        header("Location:message.php");
        echo json_encode($message);
    }
}

//var_dump($args);

?>

