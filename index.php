<!DOCTYPE html>
<html>
    <style>
    .left_header 
    {
    color: #6504b5;
    font-size: large;
   /* float: left;*/
   display: inline;
    }
    /* styling search bar */
    .search input[type=text]{
    width:500px;
    height: 50px;
    border-radius:25px;
    border: 3px solid #6504b5;
    }
         
    .search{
        background-size: 50px 100px;
        margin:7px;
    }
    th {
        display: flex;
        flex-direction: row;
        justify-content: space-between;
        align-items: center;
    }
    .a{
        display: flex;
        flex-direction: row;
        justify-content: space-between;
        align-items: center;
    }
    
    </style>
    <body>
        <div>
<table style="padding:50; width:100% ; height:100% ; ">
    <tr style="background-color:#efeef1;width: 100%;">
       <th style="display: flex'; flex-direction: row; justify-content: space-between;  width: 100%; align-items: space-between ">
            <p class="left_header">Adopt</p>
            <div class="a" style="display: inline-block">
            <img src="heart.png" width="25" height="25">
                <img src="menu-bar.png" width="27" height="23">

            </div>
        </th> 
    </tr>
</table>
        </div>

        <div class="search">
            <center>
             <form action="result.php" method="post">
                 <input type="text"
                     placeholder=" Search Dogs, Cats, Turtles.."
                     name="search">
                 <button>
                     <img src="search-icon.jpg" width="5px" height="5px">
                 </button>
             </form>
             </center>
         </div>


    </body>
</html>