<!DOCTYPE html>
<html>
<link rel="stylesheet" href="main.css">
<style>
    .empty
    {
    position: relative;
     top:50%;
     left: 1%;
    right:50%;
    bottom: 50%;
    font-size: 200%;
    }
    .wrapper
    {
        display: flex;
        flex-direction: column;
        gap: 15px 15%;
        flex-flow: row;
        justify-content: center;
        list-style: none;
        position: relative;
        top: 5%;
    }
    .button
    {
        height: 19em;
        width: 17em;
        border-radius: 2em;
        overflow: hidden;
    }
    
    .button .img{
        height: 70%;
        width: auto;
        display: block;
        position:relative;
        left: 5%;
    }
    .button:hover{
        background-color: rgb(144, 138, 144);
    }
    .button:active{background-color: green; opacity: 0.5;}
     .inner_button
    {
        height: 2em;
        width: 5em;
        position: absolute;
        border-radius: 6px;
        left: 34%;
        right: 20%;
        bottom: 4%;
    }
    .inner_button:hover{background-color: green;}
    .inner_button:active{background-color: rgb(30, 30, 30);}
</style>
<body>
    <header style="background-color: white;">
        <p class="left_header_adopt"><a href="home.html"> &nbsp &nbsp &nbsp Adopt</p>
       <button class="btn heart" style="background-color: white;">
            <a href="favourites.php"><img src="heart1.png" height="35px" width="35px"></a>
       </button> 
       <div class="dropdown" style="background-color: white;"> <button class="dropbtn">
        </button>
        <div class="dropdown-content">
            <a href="Uploads_Bought.php">My Animals</a>
            <a href="Account.php">Account</a>
            <a href="Setting.php">Setting</a>
            </div>
        </div>
    </header>
    <center>
        <div style="background-color: #efeef1;height: 90vh; width:100%">
          <!--  <p class="empty" >No favourites added!</p> -->
                <ul  class="wrapper">
                    <li> <button class="button"><img src="tyler.jpg" class="button img"></li><button class="inner_button"> GET</button>
                    <li><button class="button"><img src="tyler.jpg" class="button img"><p> Up for adoption</p></button></li>
                </ul>
    </div>
</body>
<footer><?php include 'footer.html';?></footer>
</html>