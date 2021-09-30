<?php 

session_start();
if(!isset($_SESSION['username'])){
    header('Location:welcome.html');
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard</title>
    <link rel="stylesheet" type="text/css" href="home.css">
    <link
      href="https://fonts.googleapis.com/css2?family=Lato:wght@400;700&display=swap"
      rel="stylesheet"
    />
</head>
<body>
    <div class="nav-bar">
        <header>
            <h3>Welcome <?php echo $_SESSION['username']; ?> </h3>
            <a href="logout.php">Logout</a>
        </header>
    </div>

    <div class="box">
        <h2>Enter your marks</h2>
        <form action="marks.php" method="post">
        <div class="subjects">
            <div class="left">
            <div class="name">
                <label>Your Name</label>
                <input type="text" name="name" placeholder="Enter your name" required />
            </div>
            <div class="sem">
                <label>Semester</label>
                <input type="text" name="semester" placeholder="Enter your semester" required />
            </div>
            <div class="sub-1">
                <label>Subject 1</label>
                <input type="text" name="subject1" placeholder="Enter subject marks" required />
            </div>
            <div class="sub-2">
                <label>Subject 2</label>
                <input type="text" name="subject2" placeholder="Enter subject marks" required />
            </div>
            </div>

            <div class="right">
            <div class="sub-3">
                <label>Subject 3</label>
                <input type="text" name="subject3" placeholder="Enter subject marks" required />
            </div>
            <div class="sub-4">
                <label>Subject 4</label>
                <input type="text" name="subject4" placeholder="Enter subject marks" required />
            </div>
            <div class="sub-5">
                <label>Subject 5</label>
                <input type="text" name="subject5" placeholder="Enter subject marks" required />
            </div>
            <div class="sub-6">
                <label>Subject 6</label>
                <input type="text" name="subject6" placeholder="Enter subject marks" required />
            </div>
            </div>
            
            
        </div>
        <button type="submit" class="btn btn-primary">Submit</button>
        </form>
    </div>

</body>
</html>