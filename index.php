<!DOCTYPE html>
<html lang="en">
<head>
  <link rel="stylesheet" href="tablestyle.css">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body><section>
    <table>
  <tr>
    <th>Title</th>
    <th>Description</th>
    <th>Date-created</th>
    <th>Action </th>
  </tr>
  <tr>
                <!-- FETCHING DATA FROM EACH
                    ROW OF EVERY COLUMN -->
                   

                <td><?php echo $rows['id'];?></td>
                <td><?php echo $rows['title'];?></td>
                <td><?php echo $rows['description'];?></td>
                <td><?php echo $rows['date'];?></td>
    <td><button>DELETE</button>
    <button onclick="window.location.href = 'add.php';">ADD</button>
    <button onclick="window.location.href = 'update.php';">UPDATE</button>
  </tr>
</table></section>
</body>
</html>


<?php include 'controller.php';?>