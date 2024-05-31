<?php
    include '../components/Navigation__Bar.php';
    // ===========Condition==============
        if(isset($_SESSION['IS_LOGGIN'])){
            echo "<script>window.location='Dashboard.php?type=n'</script>";
        }
    // ========X===Condition===x=========
    $username="";
    $password="";
    $msg = '';
    if(isset($_POST['submit'])){
        $username = mysqli_escape_string($con,$_POST['username']);
        $password = mysqli_escape_string($con,$_POST['password']);
        $sql = mysqli_query($con,"SELECT * FROM users WHERE usename = '$username' AND password = '$password'");
        if(mysqli_num_rows($sql)>0){
            $res=mysqli_fetch_assoc($sql);
            $_SESSION['IS_LOGGIN']='yes';
            $_SESSION['USER_ID']=$res['id'];
            $_SESSION['USER_NAME']=$res['usename'];
            $_SESSION['ROLE']=$res['type'];
          
            if($_SESSION['ROLE'] == 0){
                echo "<script>window.location='Dashboard.php?type=n'</script>";
            }else{
                echo "<script>window.location='Customers.php?type=n'</script>";
            }
          
           
        
        }else{
           $msg = "<div class='alert alert-warning alert-dismissible fade show' role='alert'>
                    Please Enter Correct Username and Password.
                    <button type='button' class='btn-close' data-bs-dismiss='alert' aria-label='Close'></button>
                </div>";
        }
    }
    
?>

    <!------------- Login Page ---------------->
        <div class="container" id="login__page">
            <?php echo $msg ?>
            <div class="row text-center">
                <h3>Bem Vindo !</h3>
                <h3>PopKa</h3>
                <p>Porfavor faça o login</p>
            </div>
            <div class="row justify-content-center">
                <div class="col-xl-6">
                    <form method="post" action="">
                        <div class="mb-3">
                            <label for="exampleFormControlInput1" class="form-label">Nome</label>
                            <input type="text" name="username" class="form-control" placeholder="Digita o seu nome" required>
                        </div>
                        <div class="mb-3">
                            <label for="exampleFormControlInput1" class="form-label">Senha</label>
                            <input type="password" name="password" class="form-control" placeholder="Digita a senha" required>
                        </div>
                        <div class="mb-3">
                            <Button type="submit" name="submit" class = "btn btn-primary">Entrar</Button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    <!----------X--- Login Page ---X------------->

<?php
    include '../components/Footer.php';
?>