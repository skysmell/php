<!DOCTYPE html>
<html>

<head>
    <meta charset='utf-8'>
    <meta http-equiv='X-UA-Compatible' content='IE=edge'>
    <title>Page Title</title>
    <meta name='viewport' content='width=device-width, initial-scale=1'>
    <link rel='stylesheet' type='text/css' media='screen' href='main.css'>
    <script src='main.js'></script>
</head>
<style>
    p{
        font-size: 200%;
    }
</style>
    <link rel="stylesheet" href="syyle.css">
<body>
    <?php
        $servername = "localhost";
        $username = "skysmell";
        $password = "L2909L5l1!";
        $dbname = "skysmell";
        $flag=1;
        $con = new mysqli($servername,$username,$password,$dbname);
        //mysql_query('SET NAMES utf8 ');
        
        $id = $_GET['id'];
        $pw = $_GET['pw'];
        $phone = $_GET['phone'];
        $intro = $_GET['intro'];

        $sql = "SELECT `id` FROM `member` WHERE id='$id'";
        $searchid=($con -> query($sql));
        
        if($con -> query($sql))
        { 
            $row = $searchid->fetch_assoc();
            $idname=$row["id"];
            if($idname == $id)
            {
                echo $idname."<br/>";
                echo $id."<br/>";
                $flag=0;
                header("Location: join.php?res=1");
            }
            else
            header("Location: join.php?res=2");
                
        }
        
    //     if ($con -> connect_error){
    // //        die("error", $con-=>connect_error);
    //         echo "실패\n";
    //     }
    //     else
    //         echo "성공\n";
            
        $sql = "insert into member (id , pw, phone, intro) values ('$id','$pw','$phone','$intro')";
        
        if($con -> query($sql) && $flag && $id !="" && $pw !="" && $phone !="" && $intro !=""){
            echo "query성공"."<br/>";
            echo "id = ".$id."<br/>";
            echo "pw = ".$pw."<br/>";
            echo "phone = ".$phone."<br/>";
            echo "intro = ".$intro."<br/>";
        }
        else
            echo "query실패";

        $con->close();
    ?>

</body>


</html>
