<!DOCTYPE html>
<html>
    <head>
        <style>
            .center
            {
                margin: auto;
                width: 50%;
                border: 3px solid;
                padding : 10px;
            }
            </style>

</head>
<body>
<fieldset class="center">
        <legend>editing a task</legend>   
        
        <form action="../index.php" method="POST" id="nameform">
        edit: <input type="text" name="title" value=<?php echo $_GET['old_title'] ?>></br>
        <input type="hidden" name="action" value="do_edit"/>
        <input type="hidden" name="item_id" value = <?php echo $_GET['item_id'] ?> ></br>
        <button type="submit" form="nameform" value="submit">Submit</button>
        <button type="reset" value="Reset">Reset to old title</button>
        </form>
        </fieldset>



</body>
</html>