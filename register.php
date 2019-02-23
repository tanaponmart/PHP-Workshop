<?php include 'template/header.php'; ?>


<?php
    $action = $_GET['action'];

    if($action) {
    if($action=== 'register'){

      $username = $_POST['username'];
      $password = $_POST['password'];
      $name = $_POST['name'];
      $lastName = $_POST['lastName'];
      $email = $_POST['email'];
      $gender = $_POST['gender'];
        
        $hashPassword = hash('SHA256',$password);
        $sql= "INSERT INTO table_member (member_username,member_password,member_role,member_name,member_lastName,member_email,member_gender) 
                                        VALUES ( '$username','$hashPassword','0','$name','$lastName','$email','$gender')";
                                        //echo $sql;
                                        $result= $conn->exec($sql);
                                        if($result){
                                            echo "<script>alert('ลงทะเบียนสำเร็จ')</script>";
                                            echo "<script>window.location='login.php'</script>";
                                        } else{
                                            echo "<script>alert('ลงทะเบียนไม่สำเร็จ')</script>";
                                            echo "<script>window.history.back()</script>";
                                        }
    }
    }
?>
<div class="container">
    
    <form action="register.php?action=register" method="post">
    <h2>Register</h2>
        <div class="form-group">
            <label for="username">username</label>
            <input type="text" name="username" placeholder="username"  id="username" class="form-control">
        </div>
        <div class="form-group">
            <label for="password">password</label>
            <input type="pssword" name="password" placeholder="password" id="password" class="form-control">
        </div>
        <div class="form-group">
            <label class="name">name</label>
            <input type="text" name="name" placeholder="name" id="name" class="form-control">
        </div>
        <div class="form-group">
            <label class="lastname">lastName</label>
            <input type="text" name="lastName" placeholder="lastName" id="lastName" class="form-control">
        </div>
        <div class="form-group">
            <label class="email">email</label>
            <input type="email" name="email" placeholder="email" id="email" class="form-control">
        </div>
        <div class="form-check">
            <input type="radio" name="gender" value="Male" id="M" class="form-check-input">
            <label for="M" class="form-check-label">M</label>
        </div>
        <div class="form-check">
            <input type="radio" name="gender" value="Female" id="F" class="form-check-input">
            <label for="F" class="form-check-label" >F</label>
        </div>

        <div class="form-check">
        <input type="submit" class="btn btn-primary" value="Register">
        </div>
    </form>
</div>

<?php include 'template/footer.php'; ?>