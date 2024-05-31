<?php

    session_start();
        
    if(isset($_SESSION['sid']))  {
         
        //echo   $_SESSION['suser'] ;
    }
    else{
        header('location:../student/s_login.php');
    }

?>

<html>
    <head>
        <title> student managment system </title>
        <link rel="stylesheet" type="text/css" href="../css/istyle.css" />

    </head>
    <body>
        <table id="nav-bar" style=" height:100px; width:100%;  background-color:brown; ">
                <tr>
                    <td> <p style="color:white;" align="center" class="dh1">Login as :  </p> </td>
                    <td style="color:white;"><?php echo   $_SESSION['suser'] ; ?></td>
                    <td> <h2 align="center" class="heading" style="margin-top:10px; " > Welcome to Student Management System </h2></td>
                    <td> <p  align="center" class="dh3" ><a style="color:white;" href="../student/s_out.php" >Logout</a></p></td>
                </tr>
        </table>
        

        <form method="post" action="s_data_in.php" style=" width:100%" enctype="multipart/form-data">
            <table align="center"  style=" width:100% ; height:100%;">
                <tr>
                    <td align="center" colspan="4">fill tha data correctly<td>
                </tr>
                <tr>
                    <td align="right" > Name :  </td>
                    <td> <input type="text" name="s_name" ></td>
                    <td align="right" > father's name :  </td>
                    <td> <input type="text" name="s_father" ></td>

                </tr>
                <tr>
                    <td align="right" > Roll no :  </td>
                    <td> <input type="number" name="s_roll" ></td>
                    <td align="right" > branch :  </td>
                    <td> <input type="text" name="s_branch" ></td>

                </tr>
                <tr>
                    <td align="right" > semester :</td>
                    <td> <input type="number" name="s_sem" ></td>
                    <td align="right" >total marks obtained :  </td>
                    <td> <input type="number" name="s_marks" ></td>
                    
                </tr>
                
                <tr >  
                    <td align="right"> Upload photo :</td>
                    <td><input type="file" name="img" /></td>
                    <td colspan="4" align="center"> <input type="submit" name="submit" value="submit" ></td>
                    
                </tr>
                
            </table>
            
        </form>
    </body>
</html>



<?php
