<?php

include 'connect.php';
$id=$_GET['updateid'];
$sql="Select * from `tasks` where id=$id";
$result=mysqli_query($con,$sql);
$row=mysqli_fetch_assoc($result);
$title=$row['title'];
$description=$row['description'];
$priority=$row['priority'];
$due_date=$row['due_date'];



if(isset($_POST['submit'])){
    $title = $_POST['title'];
    $description =  $_POST['description'];
    $priority = $_POST['priority'];
    $due_date = $_POST['due_date'];

    $sql="update `tasks` set id=$id,title='$title',description='$description',
    priority='$priority',due_date='$due_date'
    where id=$id";
    $result=mysqli_query($con,$sql);
    if($result){
        echo"data updated successfully";
        //header('location:view_task.php');

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

    <title>TASK MANAGEMENT</title>
</head>

<body>
    <div class="container my-5">
        <form method="post">
            <div class="form-group">
                <label>title</label>
                <input type="varchar" class="form-control" placeholder="Enter title" name="title"autocomplete="off" value=<?php echo $title;?>>
            </div>
            <div class="form-group">
                <label>description</label>
                <input type="text" class="form-control" placeholder="Enter description" name="description"autocomplete="off"value=<?php echo $description;?>>>
            </div>
            <div class="form-group">
                <label>priority</label>
              <select class="form-control" name="priority" id="priority"autocomplete="off"value=<?php echo $priority;?>>>
               <option value="high">High</option>
               <option value="medium">Medium</option>
               <option value="low">Low</option>
              </select>
            </div>
            <form method="post">
            <div class="form-group">
            <label for="due_date">due_date</label>
            <input type="date" class="form-control" placeholder="Enter date" name="due_date" id="date"autocomplete="off"value=<?php echo $due_date;?>>
            </div>



            <button type="submit" class="btn btn-primary"name="submit">Update</button>
        </form>
    </div>

</body>

</html>