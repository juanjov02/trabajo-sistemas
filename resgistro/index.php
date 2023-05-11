<?php
$sql = "SELECT * FROM users";
$query = mysqli_query($con, $sql);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>usuarios CRUD</title>
</head>

<body>  
 <div>
 <form action="insert_user.php" method= "POST">
    <h1>crear usuario</h1>
    
    <input type="text" name= "name" placeholder= "nombre">
    <input type="text" name= "lastename" placeholder= "apellido">
    <input type="text" name= "username" placeholder= "username">
    <input type="text" name= "password" placeholder= "password"> 
    <input type="text" name= "email" placeholder= "email">
    <input type="submit" value= "agregar usuario">
 </form>
 </div>

 <div>
    <h2> usuarios registrados</h2>
    <table>
        <thead>
            <tr>
                <th>ID</th>
                <th>nombre</th>
                 <th>apellido</th>
                 <th>username</th>
                 <th>password</th>
                 <th>email</th>
                 <th></th>
                 <th></th>
            </tr>
        </thead>
         <body>
         <?php while($row = mysqli_fetch_array($query)):?>
            <tr> 
            <th> <?= $row['id'] ?> </th>
            <th> <?= $row['name'] ?> </th>
            <th> <?= $row['lastname'] ?> </th>
            <th> <?= $row['username'] ?> </th>
            <th> <?= $row['password'] ?> </th>
            <th> <?= $row['email'] ?> </th>
            
            <th><a href="">Editar</a></th>
            <th><a href="">Eliminar</a></th>
            </tr>
            <?php endwhile; ?>
         </body>
    </table>
 </div>
</body>
</html>