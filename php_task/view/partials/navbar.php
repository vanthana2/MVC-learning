<div class="header">
    <div class="minidiv">
            <div class="logo"><a href="home">HOGWARTS UNIVERSITY</a></div>
            <div class="view">
            <?php 
        session_start(); 

        if(isset($_SESSION['email']) && $_SESSION['email']=="vigneshcdckap@gmail.com"){
            echo "<a href='table'><span>View Members</span></a>";
        } else {
            echo "";
        }
    ?>
            </div>
            <div class='login'>
            <?php 
        session_start(); 

        if(isset($_SESSION['email'])){
            echo "<a href='logout'><span>Logout</span></a><img class='imgwidth' src='view/src/pro.webp'>";
        } else {
            echo "<a href='login'>LOGIN</a>";
        }
    ?>
    </div>
            </div>
        </div>