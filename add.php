<!DOCTYPE html>
<html lang="en">

<head>
    <link rel="stylesheet" href="style.css">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ADD</title>
</head>

<body>
    <form action="controller.php" method="POST">
        <input type="hidden" name="post-action" value="add-property"><br>
        <label for="title">Note Title:</label><br>
        <input type="text" id="title" name="title"><br>
        <label for="description">Description:</label><br>
        <input type="text" id="description" name="description" value="TEST"><br>
        <input type="submit" value="Add">
    </form>
</body>

</html>