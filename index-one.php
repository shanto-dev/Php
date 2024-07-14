<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
    <style>
        .star_drowing{
            max-width: 360px;
            margin: 100px auto;
            background-color: #efefef;
            border-radius: 8px;
            box-shadow: rgba(50, 50, 93, 0.25) 0px 50px 100px -20px, rgba(0, 0, 0, 0.3) 0px 30px 60px -30px;
            padding: 25px;
        }
        ul{
            list-style: none;
            margin:0;
            padding:0;
        }
        ul li{
            font-size: 30px;
            line-height: 25px;
            color: #1f1f1f;
            text-align: center;
        }
        .star_drowing_tow{
            margin-bottom: 60px;
        }
    </style>
<body>

    <section class="star_drowing">
        <ul>
        <?php
            for($col = 0; $col < 7; $col++){
                echo "<li>";
                for($i = 7; $i > $col; $i--){
                    echo " * ";
                }
                echo "</li>";
            }
        ?>

        </ul>
    </section>
    <section class="star_drowing star_drowing_tow">
        <!-- Second Loop  -->
        <ul>
        <?php
            for($col = 0; $col < 7; $col++){
                echo "<li>";
                for($i = 7; $i > $col; $i--){
                    echo " * ";
                }
                echo "</li>";
            }
            for($col = 0; $col < 7; $col++){
                echo "<li>";
                    for($i = 0; $i < $col; $i++){
                        echo " * ";
                    }
                echo "</li>";
            }
        ?>

        </ul>
    </section>
</body>
</html>