<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        body {
            text-transform: capitalize;

        }

        .container {
            height: 80vh;
            width: 90%;
            margin: 30px auto;
            background-color: rgb(18, 89, 196);
            position: relative;
            display: flex;
            border-radius: 10px;
            box-shadow: 1px 1px 10px 1px #beb6b6;
        }

        .container .title {
            position: absolute;
            top: 190px;
            left: 27px;
            height: 200px;
            width: 200px;
            color: white;
            font-family: sans-serif;

        }

        .title h2 {
            margin-left: 30px;
        }

        .title button {
            height: 30px;
            width: 140px;
            border-radius: 100px;
            border: none;
        }

        .container .frm {
            position: absolute;
            top: 20px;
            background-color: #eee;
            height: 90%;
            width: 600px;
            right: 10px;
            border-radius: 90px 0px 0px 90px;
        }

        .frm h2 {
            margin-left: 180px;
            color: #504f4f;
        }

        .frm input {
            margin-left: 70px;
            margin-top: 40px;
            height: 30px;
            width: 190px;
            border-radius: 5px;
            border: none;
            padding-left: 10px;

        }

        .frm select {
            height: 30px;
            width: 190px;
            border-radius: 5px;
            margin-left: 70px;
        }

        input[type='submit'] {
            background-color: rgb(18, 89, 196);
            border-radius: 100px;
            color: white;
            height: 35px;
            width: 180px;
            float: right;
            margin-right: 60px;
            margin-top: 80px;
        }
    </style>
</head>

<body>
    <div class="container">
        <div class="title">
            <h2>welcome</h2>
            <p>Lorem ipsum dolor sit amer
                consectetur adipisicing elit. Doloribus, facilis?</p>
           <a href="record.php"><button>check detail</button></a>
        </div>
        <div class="frm">
            <h2>Registration form for job</h2>
            <form action="3.php" method="POST">

                <input type="text" name="name" placeholder="Enter your name" required>
                <input type="text" name="qualification" placeholder="Enter your qualification" required>
                <input type="text" name="mobile" placeholder="Mobile Number" required>
                <input type="text" name="degree" placeholder="Degree" required>
                <input type="email" name="email" placeholder="Email id*" required>
                <select name="job_post">
                    <option>Web developer</option>
                    <option>App developer</option>
                    <option>software engineer</option>
                    <option>web designer</option>
                    <option>hardware engineer</option>
                    <option>netwaork engineer</option>
                    <option>Computer security</option>
                    <option>data science</option>
                </select>
                <input type="submit" value="register" name="submit">
            </form>

        </div>
    </div>

</body>

</html>
<?php
$server = "localhost";
$username = "root";
$password = "";
$database = "1_form";
$conn = mysqli_connect($server, $username, $password, $database);




if (isset($_POST['submit'])) {
    $name = $_POST['name'];
    $qual = $_POST['qualification'];
    $mobile = $_POST['mobile'];
    $degree = $_POST['degree'];
    $email = $_POST['email'];
    $job_post = $_POST['job_post'];
    $query = "INSERT INTO JOB_FORM VALUES('','$name','$degree','$email','$mobile','$qual','$job_post')";
    $data = mysqli_query($conn, $query);






    if ($data) {
?>
        <script>
            window.alert("Data is sucessful inserted");
        </script>
    <?php
    } else {
    ?>
        <script>
            window.alert("Some error occur try again");
        </script>
<?php
    }
}
?>