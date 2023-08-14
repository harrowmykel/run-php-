<?php
include 'controller.php';
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <link rel="stylesheet" href="tablestyle.css">
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>

<body>
  <section>
    <table>
      <tr>
        <th>Title</th>
        <th>Description</th>
        <th>Date-created</th>
        <th>Action </th>
      </tr>

      <?php
      $sqlquery1 = "SELECT id,title,description,date FROM todos";
      $conn = DB::getConnection();
      $result = $conn->query($sqlquery1);
      if ($result->num_rows > 0) {
        while ($row = $result->fetch_assoc()) {
      ?>
          <tr>
            <td><?php echo $row["id"]; ?></td>
            <td><?php echo $row["title"]; ?></td>
            <td><?php echo $row["description"]; ?></td>
            <td><?php echo $row["date"]; ?></td>
          </tr>
        <?php }
      } else { ?>
        <tr>
          <td colspan="4">No DATA Found in database</td>
        </tr>
      <?php }
      ?>
      <tr>
        <td>
          <button>DELETE</button>
          <a href="add.php">
            <button>ADD</button>
          </a>
          <a href="/run-php-/update.php">
            <button>UPDATE</button>
          </a>
        </td>
      </tr>
    </table>
  </section>
</body>

</html>