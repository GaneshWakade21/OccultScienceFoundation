<?php include "db.php"; ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>View</title>
    <style>
        body{
            display: flex;
            justify-content: center;
            align-items: center;
            flex-wrap: wrap;
            min-height: 100vh;
        }
        .alb{
            width: 250px;
            height: 250px;
            padding: 10px;
        }
        .alb img{
            width: 100%;
            height: 100%;
            cursor: pointer;
            border: 3px solid blue;
            transition: transform .2s;
        }
        /* .alb img:hover{
            transform: scale(1.5);
            position: absolute;
            z-index: 1;
            top: 0;
            left: 0;
            width: 79vw;
            height: 79vh;
            background-size: contain;
            background-repeat: no-repeat no-repeat;
            background-position: center center;
        } */
        a{
            text-decoration: none;
            color: black;
        }
  </style>
</head>
<body>
    <a href="addimage.php">&#8592;</a>
    <?php 
        $sql = "SELECT * FROM images ORDER BY id DESC";
        $res = mysqli_query($conn, $sql);

        if (mysqli_num_rows($res) > 0) {
            while ($images = mysqli_fetch_assoc($res)) { ?>
                <div class="alb">
                    <img src="uploads/<?=$images['image_url']?>" >
                    
                    <!-- Delete Button Start-->
                    <!-- <a href="delete.php?id=<?=$images['id']?>" style="color: red">DELETE</a> -->
                    <!-- Delete Button end -->

                </div>
    <?php } }?>
</body>
</html>