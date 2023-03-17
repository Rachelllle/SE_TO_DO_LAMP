<?php

switch($vars['action']){
    case "list":{
        $items = $db->query('SELECT * FROM items')->fetchAll();
        
        include("view/header.php");
        include("view/list.php");
        include("view/footer.php");
        exit;
    }break;

    case "do_add":{
        $db->query("INSERT INTO items (title) VALUES (?)",$vars['title']);
        header("location: index.php");
        exit;        
        
    }break;
    
    case "delete":{
        $db->query("DELETE FROM items WHERE item_id = ?",$vars['item_id']);
        header("location: index.php");
        exit;        
    }break;

   
    case "do_edit":{
        $title= $_POST['title'];
        $item_id=$_POST['item_id'];
        $db->query("UPDATE items SET title = '$title' WHERE item_id = $item_id");
        header("location: index.php");
        exit;
    }break;
    
    case "help":{
        //some code here to show help 
        exit;
    }break;
    
    
}

?>