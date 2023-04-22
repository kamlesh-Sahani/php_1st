<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        body {
            background-color: aqua;

        }

        .container {
            background-color: #eee;
            height: 90%;
            width: 80%;
            border-radius: 10px;
            box-shadow: 10px 10px 30px 10px rgb(18, 89, 196);
            margin: 30px auto;
        }

        table {
            width: 100%;
          padding:20px;
          border-radius: 20px;
         
        }

        table tr td {
            padding-left:20px;
            padding-top: 30px;
            cursor: pointer;
            border-bottom: 2px solid grey;
            color:grey;
        }
        table tr:nth-child(odd){
         color: rgb(53, 52, 52);
        }

        table tr td:hover{
            color: rgb(165, 157, 157);
        }
       
    </style>
</head>

<body>
    <div class="container">
        <table>
            <tr>
                <th>Id</th>
                <th>Mobile</th>
                <th>Email</th>
                <th>Degree</th>
                <th>qualification</th>
                <th>Profession</th>
            </tr>
            <TR>
                <?php
                $conn = mysqli_connect("localhost", "root", "", "1_form");
                $query="select * from job_form";
                $data = mysqli_query($conn,$query);
                while( $res=mysqli_fetch_array($data)) {
                    ?>
                    <td><?php echo $res['ID']; ?></td>
                    <td><?php echo $res['MOBLIE_N0']; ?></td>
                    <td><?php echo $res['EMAIL']; ?></td>
                    <td><?php echo $res['DEGREE']; ?></td>
                    <td><?php echo $res['QUALIFICATION']; ?></td>
                    <td><?php echo $res['JOB_POST']; ?></td>
                </TR>
                <?php
                }

                 
                ?>
               
        </table>
    </div>
</body>

</html>