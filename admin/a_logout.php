<?php
     session_start();
     if(isset($_SESSION['aid'])){
         header('location:../admin/dashboard.php');
     }
?>

<html>
    <head>
        <title> student managment system </title>
        <link rel="stylesheet" type="text/css" href="../css/istyle.css" />

    </head>
    <body>
        <h3 align="right" style="margin-right:40px; color:white; " class="a_login">
            <a href="../index.php" style=" color:white; font-family:Times New Roman; ">Home</a></h3>
        <h2 align="center" class="heading"> Welcome to Student Management System </h2>
        
        <h3 align="center" style=" color:brown;">Admin portal</h3>
        
        <form method="post" action="a_login.php" >
            <table align="center" >
                <tr>
                    <td align="right" > User Name :  </td>
                    <td> <input type="text" name="auser" ></td>

                </tr>
                
                <tr>
                    <td align="right" > Password :  </td>
                    <td> <input type="password" name="apass" ></td>
                    
                </tr>
                <tr >  
                    <td colspan="2" align="center"> <input type="submit" name="alogin" value="Login" ></td>
                    
                </tr>
                <p></p>
            </table>
            
        </form>
    </body>
</html>


<?php