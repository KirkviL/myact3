<?php

include 'connect.php';
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>TASK MANAGEMENT</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css">
</head>
<body>
    <div class="container">

    <button class="btn btn-primary my-5"> <a href="task.php"
    class="text-light">Add task</a>
    
    </button>
    <table class="table">
  <thead>
    <tr>
      <th scope="col">sl no</th>
      <th scope="col">title</th>
      <th scope="col">description</th>
      <th scope="col">priority</th>
      <th scope="col">due_date</th>
      <th scope="col">operations</th>
    </tr>
  </thead>
  <tbody>

  <?php
  
  $sql="select * from `tasks`";
  $result=mysqli_query($con,$sql);
  if($result){
   while($row=mysqli_fetch_assoc($result)){
    $id=$row['id'];
    $title=$row['title'];
    $description=$row['description'];
    $priority=$row['priority'];
    $due_date=$row['due_date'];
    echo '<tr>
    <th scope="row">'.$id.'</th>
    <td>'.$title.'</td>
    <td>'.$description.'</td>
    <td>'.$priority.'</td>
    <td>'.$due_date.'</td>
    <td>
    <button class="btn btn-primary"><a href="update.php?
    updateid='.$id.'" class="text-light">update</a></
    button>
    <button class="btn btn-danger"><a href="delete_task.php?
    deleteid='.$id.'" class="text-light">Delete</a></
    button>
    </td>
  </tr>';
   }
  }
  
  ?>
  
  </tbody>
</table>
    </div>
    
</body>
</html>