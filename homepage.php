<?php
include 'database.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Employee Management System</title>
    <link rel="stylesheet" href="style.css">
    <script type="text/javascript">
function onClickP(){
    alert("Data submitted into database.")
}
    </script>
</head>
<body background="image/MDM Company.png" height="100%" width="100%">
    <h1>Employee Information</h1>
    <form action="form.php" method="post">
        <div class="right">
            <div id="a">
                <p>Add Information</p>
        Employee Name:<input type="text" style="background-color:orange;" name="name" placeholder="Employee Name"></br>
        Employee Number:<input type="text" style="background-color:orange;"name="number" placeholder="Employee Number"><br>
        Employee Email:<input type="text"style="background-color:orange;" name="email" placeholder="Employee Email"><br>
        Employee ID:<input type="text" style="background-color:orange;"name="id" placeholder="Employee ID"><br>
        <input type="submit" style="background-color:green;color:black;" value="submit" onclick="onClickP()"><br>
        <section>
            <div>
        <a href="next.php">Search</a>
</div>
</section>
</div>
</div>
    </form>
</body>
</html>
