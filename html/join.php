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
    #intro{
        width=100px;
        height=100px;
    }
</style>
    
<body>
    <?php 
        $res = $_GET['res'];
        if($res)
            echo '<script>alert("이미 존재하는 아이디 입니다.");</script>';
    ?>
    <form action="joinproc.php">
        아이디<input class="idinput" maxlength="20" name="id" type="text" placeholder="아이디"> 
        <input class="sendbtn" value="중복확인" name="sends" type="submit" ><br>
        비밀번호<input class="pwinput" maxlength="20" name="pw" type="password" placeholder="비밀번호"><br>
        전화번호<input class="phoneinput" maxlength="20" name="phone" type="text" placeholder="전화번호"><br>
        소개<input class="introinput" maxlength="100" name="intro" type="text" placeholder="소개"><br>
        <input class="sendbtn" value="가입" name="sends" type="submit" >
        
    </form>
</body>

</html>







