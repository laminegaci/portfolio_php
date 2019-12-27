<?php 
 require_once('../../../private/initialize.php');?>
<?php $page_title = 'portfolio/admin'; ?>
<?php require_once(SHARED_PATH . '/header.php');?>


<h1 class="admin">PAGE ADMIN</h1>

<table border='1'>
    <tr>
        <th>ID</th>
        <th>Nom</th>
        <th>Prenom</th>
        <th>Message</th>
    </tr>
<?php




$messages = Contact::find_all_message();
// echo '<pre>';
// echo json_encode($messages);
// echo '</pre>';
?> 
<?php foreach($messages as $msg) {?>
    <tr>
        <td><?php echo  $msg->id; ?></td>
        <td><?php echo  $msg->nom; ?></td>
        <td><?php echo  $msg->prenom; ?></td>
        <td><?php echo  $msg->email; ?></td>
        <td><?php echo  $msg->message; ?></td>
    </tr>
<?php }?>
</table>

<?php require_once(SHARED_PATH . '/footer.php');?>