<?php 
    include 'model.php';
    $model = new Model();
    $id = $_REQUEST['id'];
    $delete = $model->delete($id);
 
    if ($delete) {
        echo "<script>alert('Deleted '$username'!');</script>";
        echo "<script>window.location.href = 'adminpage.php';</script>";
    }
 ?>