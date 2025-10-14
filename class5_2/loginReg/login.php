<!DOCTYPE html>
<html lang="en">

<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
<head>
    <title>User login and Registration</title>
    <link rel="stylesheet" type="text/css" href="style.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
</head>
<body>

    <div class="container">
        <div class="login-box">
            <div class="row">
               <div class="col-md-6 login-left">
                   <h2>Login Here</h2>
                   <form action="validation.php" method="post">
                   <div class="form-group">
                       <label>Username</label>
                       <input type="text" name="user" class="form-control" required>
                   </div>
                   <div class="form-group">
                       <label>Password</label>
                       <input type="password" name="password" class="form-control" required>
                   </div>
                   <button type="submit" class="btn btn-primary">Login</button>
                   </form>
               </div>
                <div class="col-md-6 login-right">
                    <h2>Registration Here</h2>
                    <form action="registration.php" method="post">
                        <div class="form-group">
                            <label>Username</label>
                            <input type="text" name="user" class="form-control" required>
                        </div>
                        <div class="form-group">
                            <label>Password</label>
                            <input type="password" name="password" class="form-control" required>
                        </div>
                        <div class="form-group">
                            <label>Student ID</label>
                            <input type="text" name="student_id" class="form-control" required>
                        </div>
                        <div class="form-group">
                            <label>Class Name</label>
                            <input type="text" name="class_name" class="form-control" required>
                        </div>
                         <div class="form-group">
                            <label>Country</label>
                            <input type="text" name="country" class="form-control" required>
                        </div>
                        

                        <button type="submit" class="btn btn-primary">Register</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</body>
</html>