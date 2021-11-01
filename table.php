<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://fonts.googleapis.com/css?family=Roboto:400,700" rel="stylesheet">
    <title>Display Data</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script> 
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@fortawesome/fontawesome-free@5.15.3/css/fontawesome.min.css">
</head>
<body>

<div class="container">
  <h1 class="text-center text-primary">Display DATA</h1>           
  <table class="table table-striped table-hover table-bordered">
    
      <tr class = "text-center bg-dark text-white">
        <th>Index</th>
        <th>Firstname</th>
        <th>Lastname</th>
        <th>Email</th>
        <th>Password</th>
        <th>EDIT</th>
        <th>DELETE</th>
      </tr>

      <?php
        include 'conn.php';

        $data = "SELECT * FROM cred";
        
        $query= mysqli_query($connection, $data);

        while($row = mysqli_fetch_array($query)){
          extract($row);

          ?>

      <tr class="text-center">
        <td> <?= $row['id']; ?> </td>
        <td> <?= $row['FNAME']; ?> </td>
        <td> <?= $row['LNAME']; ?> </td>
        <td> <?= $row['EMAIL']; ?> </td>
        <td> <?= $row['PASSWD']; ?> </td>
        <td>
        <a style = 'color: green;' href='update.php?id=<?= $row['id']; ?>'>UPDATE</a>
        </td>
          
        <td>
        <a style = 'color: red;' href='delete.php?id=<?= $row['id']; ?>''>DELETE</a>
      </td>
      </tr>
    <?php
        }
    ?>
  </table>
  <a style = 'color: red;' href='index.php'>SignUp Again</a>

</div>
    
</body>
</html>