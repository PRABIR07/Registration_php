<html>
  <head>
    <title>PHP Test</title>
  </head>
  <body>
   <h1 style="text-align:center;">REGISTRATION FORM</h1>
    <form action="pk.php" method="post">
    User Name:<br>
    <input type="text" name="username" /><br>
    Password:<br>
    <input type="password" name="password" /><br>
    Email:<br>
    <input type="text" name="email" /><br>
    Gender:
    MALE:<input type="radio"  name="gender" value="male"/>
    FEMALE:<input type="radio" name="gender" value="female" />
    OTHERS:<input type="radio" name="gender" value="others" /><br>
    Address:<br>
    <textarea name="address"></textarea><br>
    <p><input type="submit" name="submit" value="submit"/>
    </form>
  </body>
</html>