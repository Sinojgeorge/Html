<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>login</title>
    <style>
        .q
        {
            background-color: rgb(19, 7, 71);
            color: rgb(255, 255, 255);
            height: 50px;
            width: 1000px;
            border-radius: 20px;
        }
        .qq
        {
            background-color: rgba(21, 42, 61, 0.973);
            border-color: rgb(248, 248, 248);
            width: 500px;
            height: 200px;
            padding: 100px;
            border-radius: 20px;
            
            
         box-shadow: 10px 10px;

        }
        .w{
            color:red;
        }
    </style>
</head>
<body bgcolor="black">
<header class="q" border="0"><h1>login</h1></header>
<center>
    <form action="loginaction.php" method="POST">
        <table border="1" class="qq" rowspan="10px" colspan="10px">
            <tr><td> <p class="w">email</p>         <input type="text" name="email" id="f1"></td></tr>
            <tr><td><p class="w">passw</p> <input type="password" id="f2" name="password"></td></tr>
            <tr><td><input type="submit" id="f3" onclick="" value="sign in" name="submit"></td></tr>

        </table>
    </form>
</center>
</body>
</html>