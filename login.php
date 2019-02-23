<?php include 'template/header.php'; ?>

<?php 
    $action = $_GET['action'];
    if($action){
        if($action==='login'){
            $username = $_POST['username'];
            $password = $_POST['password'];

            $hashPassword = hash('SHA256',$password);

            $sql= "SELECT*FROM table_member WHERE member_username='$username' AND member_password='$hashPassword' ";

            $query = $conn->query($sql);
            $result =$query->fetch();

            if($result){
                 $_SESSION['username'] =$result['member_username']; ;
                $_SESSION['user_id'] =$result['member_id']; ;
                echo"<script>alert('เข้าสู่ระบบ')</script>";
               echo"<script>window.location='home.php'</script>";

            }else{
                    echo"<script>alert('ชื่อผู้ใช้ไม่ถูกต้อง')</script>";
                    echo"<script>window.history.back()</script>";
                }
                exit();
        }
    }

?>

<div class="container">
    <form action="login.php?action=login" method="post">
    <h1>Login page.</h1>
        <div style="width: 300px; margin: 0 auto">
            <div class="form-group">
                <label for="username">username</label>
                <input type="text" name="username" placeholder="username"  id="username" class="form-control">
            </div>
            <div class="form-group">
                <label for="password">password</label>
                <input type="pssword" name="password" placeholder="password" id="password" class="form-control">
            </div>
            
            <div class="form-group">
                <input type="submit" class="btn btn-primary" value="Login">
            </div>
        </div>   
    </form>
</div>
<?php include 'template/footer.php'; ?>