<html>
<style>
    .background {
  /* The image used */
  background-image: url("plan.png");
  position:relative;
  background-repeat: no-repeat;
  background-size: cover;
}
</style>    

<body class="background">
    <center/>
  <form action="Checkout.php" method="post"  >    
  <br><br><br><br><br><br><br><br><br><br>
    <div style="background-color:white;border-radius:10px;height:200px;
  top: 50%;
  left: 50%;
  width: 300px;
  "><br><br><br><br>
            <table><tr><td> How many guests:</td>
           <td><input type="number" name="guests" value="1" max="20" min="1" required></td></tr>
           <table><tr><td> How many days:</td>
           <td><input type="number" name="days" value="1" max="20" min="1" required></td></tr>
            <tr><td>Including transport:</td>
         <td> <input type="radio" name="transport" value="Yes" checked> Yes</td><td>
        <input type="radio" name="transport" value="No" checked>No</td><td></td></tr>
      </table>
<input type="submit" value="GO"></td>
</div>
    </form>
</body>

</html>

<?php
session_start();
$_SESSION["photo"] = $_POST['photo']; 
?>