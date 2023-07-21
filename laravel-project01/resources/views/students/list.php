<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>List Student</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">

    <!-- jQuery library -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>

    <!-- Latest compiled JavaScript -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</head>
<body>
<h2 style="text-align: center">Danh sách Student</h2>
<div class="container">
    <div class="card-deck mb-3 text-center">
        <table class="table table-bordered">
            <thead>
            <tr>
                <th scope="col">ID</th>
                <th scope="col">Name</th>
            </tr>
            </thead>
            <tbody>
            <?php foreach ($students as $key => $student) { ?>
            <tr>
                <td><?= $student['id']; ?></td>
                <td><?= $student['name']; ?></td>
            </tr>
            <?php }?>
            </tbody>
        </table>
    </div>
</div>
</body>
</html>
