<?php

include 'connect.php';
if(isset($_POST['submit'])){
    $title = $_POST['title'];
    $description =  $_POST['description'];
    $priority = $_POST['priority'];
    $due_date = $_POST['due_date'];

    $sql="insert into`tasks`(title,description,priority,due_date)
    values('$title','$description','$priority','$due_date')";
    $result=mysqli_query($con,$sql);
    if($result){
        //echo"data inserted successfully";
        header('location:view_task.php');

    }else{
        die(mysqli_error($con));
    }
}

?>


<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css">

    
</head>
<head>TASK MANAGEMENT</head>
<
<body>


    <div class="container my-5">
        <form method="post">
            <div class="form-group">
                <label>title</label>
                <input type="varchar" class="form-control" placeholder="Enter title" name="title"autocomplete="off">
            </div>
            <div class="form-group">
                <label>description</label>
                <input type="text" class="form-control" placeholder="Enter description" name="description"autocomplete="off">
            </div>
            <div class="form-group">
                <label>priority</label>
              <select class="form-control" name="priority" id="priority"autocomplete="off">
               <option value="high">High</option>
               <option value="medium">Medium</option>
               <option value="low">Low</option>
              </select>
            </div>
            <form method="post">
            <div class="form-group">
            <label for="due_date">due_date</label>
            <input type="date" class="form-control" placeholder="Enter date" name="due_date" id="date"autocomplete="off">
            </div>



            <button type="submit" class="btn btn-primary"name="submit">Submit</button>
        </form>
    </div>

</body>

</html>