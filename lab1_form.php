<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=<device-width>, initial-scale=1.0" />
    <title>Document</title>
  </head>
  <body>
    
    <!-- fieldset le box banauxa -->
    <fieldset>
      <!-- legend le box bhitra name lekhxa -->
      <legend>Login:</legend>
    <?php echo "hellophp";
    if(isset($_POST['submit'])){
        echo 'password is:'.$_POST['pwd'];
    }
    ?>
        <form action="" method="post">
        <div>
      <label for="">Username:</label>
      <input type="text" name="Username" />
      <!-- //to find out username by server so we use name  -->
    </div>
    <!-- API ho bhane XML or Json but if there is normal website then server response html,css,js -->
    <div>
      <label for="">Password:</label>
      <input type="password" name="pwd" />
    </div>
    <input type="color" name="" id="" />
    <input type="date" name="" id="" />
    <input type="submit" value="Login" name="submit" />
  </fieldset>
    </form>

    <form action="" oninput="x.value=parseInt(a.value)+parseInt(b.value)">
    0
    <input type="range" id="a" name="a" value="50" oninput="showValueOfA()"/>
        <span id="a_value">50</span>

    +
    <input type="number" id="b" name="b" value="30"/>
    =
    <output name="x" for="a b"></output>
    <br/><br/>
    <input type="submit"/>
</form>
<script>
  function showValueOfA(){
    let a_element=document.getElementById('a_value');
    a_element.innerHTML=document.getElementById('a').value;
  }
  </script>
  </body>
</html>
<!-- what are different form element explain with examples -->
