<?php
    require "conn.php";

    $data = $connection -> query("SELECT * FROM tasks");

?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="styles.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>
    <title>Document</title>
</head>
<body>
<div class="container mt-5">
    <form method="post" action="insert.php">
        <div class="mb-3">
            <label for="task" class="form-label">Task</label>
            <input name="myTask" type="text" class="form-control" id="task">
        </div>
        <button name="submit" type="submit" class="btn btn-primary">Submit</button>
    </form>

<!--    Tabel dta -->
    <table class="table mt-5">
        <thead>
        <tr>
            <th scope="col">#</th>
            <th scope="col">task</th>
            <th scope="col">Handle</th>
        </tr>
        </thead>
        <tbody>
        <?php while ($rows = $data->fetch(PDO::FETCH_OBJ)): ?>
        <tr>
            <td><?php echo $rows->id;?></td>
            <td><?php echo $rows->name;?></td>
            <td><a href="delete.php?id=<?php echo $rows->id; ?>"><button class="btn btn-danger">Delete</button></a></td>
        </tr>
        </tbody>
        <?php endwhile;?>
    </table>
</div>

</body>
</html>
