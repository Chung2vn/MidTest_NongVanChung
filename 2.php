<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Giải phương trình bậc 2</title>
    <link rel="stylesheet" href="css/styles.css" type="text/css">
        <!-- Bootstrap CSS -->
        <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" rel="stylesheet">
</head>

<body style="background-color: #222222">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
            <h2 style="color: #11998e;">GIẢI PHƯƠNG TRÌNH BẬC II</h2>
                <form class="form-group"  method="get" action="giaiptb2.php">
                    <div class="php" id="content" >
                    <?php
                    // Khai báo biến
                    $soA = "";
                    $soB = "";
                    $soC = "";

                    // Lấy các hệ số từ Form và kiểm tra số
                    if (isset($_GET["soA"])) {
                        $soA = $_GET["soA"];
                    }
                    if (isset($_GET["soB"])) {
                        $soB = $_GET["soB"];
                    }
                    if (isset($_GET["soC"])) {
                        $soC = $_GET["soC"];
                    }

                    // Hàm giải PT bậc 2
                    function giaiPTbac2($a, $b, $c)
                    {
                        // Kiểm tra biến đầu vào
                        if ($a == "") {
                            $a = 0;
                        }
                        if ($b == "") {
                            $b = 0;
                        }
                        if ($c == "") {
                            $c = 0;
                        }
                        // In phương trình ra màn hình
                        echo "Phương trình " . $a . "x^2 + " . $b . "x + " . $c . " = 0 <br>";
                        // Kiểm tra các hệ số
                        if ($a == 0) {
                            if ($b == 0) {
                                echo "Phương trình vô nghiệm!";
                            } else {
                                echo "Phương trình có 1 nghiệm: " . "x = " . (-$c / $b);
                            }
                            return;
                        }
                        // Tính Delta
                        $delta = pow($b, 2) - 4 * $a * $c;
                        $x1 = "";
                        $x2 = "";
                        // Tính nghiệm
                        if ($delta > 0) {
                            $x1 = (-$b + sqrt($delta)) / (2 * $a);
                            $x2 = (-$b - sqrt($delta)) / (2 * $a);
                            echo "Phương trình có 2 nghiệm: <br>";
                            echo "x1 = " . $x1 . "<br>";
                            echo "x2 = " . $x2;
                        } else if ($delta == 0) {
                            $x1 = (-$b / 2 * $a);
                            echo "Phương trình có nghiệm kép: " . $x1;
                        } else {
                            echo "Phương trình vô nghiệm!";
                        }
                    }

                    // Gọi hàm giải phương trình bậc 2
                    // Sử dụng từ khóa $GLOBAL để đọc các biến toàn cầu và truyền vào
                    if (is_numeric($GLOBALS["soA"]) && is_numeric($GLOBALS["soB"]) && is_numeric($GLOBALS["soC"])) {
                        giaiPTbac2($GLOBALS["soA"], $GLOBALS["soB"], $GLOBALS["soC"]);
                    } else {
                        echo "Giá trị nhập vào không phải số!";
                    }
                    ?>
                    </div>
                    <br>
                    <button type="submit" class="btn">Trở lại</button>
                </form>
                

            </div>
        </div>
    </div>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
        <!-- Bootstrap JavaScript -->
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</body>

</html>