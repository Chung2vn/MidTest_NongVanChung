<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tìm UCLN và BCNN</title>
    <link rel="stylesheet" href="css/styles.css" type="text/css">
        <!-- Bootstrap CSS -->
        <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" rel="stylesheet">
</head>

<body style="background-color: #222222">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
            <h2 style="color: #11998e;">TÌM ƯCLN VÀ BCNN</h2>
                
                <form class="form-group" action="USC_BSC.php">
                    <?php
                    // Khai báo biến
                    $so1 = "";
                    $so2 = "";

                    // Đọc hệ số từ Form và kiểm tra số có tồn tại
                    if (isset($_GET["so1"])) {
                        $so1 = $_GET["so1"];
                    }
                    if (isset($_GET["so2"])) {
                        $so2 = $_GET["so2"];
                    }

                    // Tìm UCLN
                    function UCLN($so1, $so2)
                    {
                        if ($so2 == 0) return $so1;
                        return UCLN($so2, $so1 % $so2);
                    }
                    // Tìm BSNN
                    function BCNN($so1, $so2)
                    {
                        return ($so1 * $so2) / UCLN($so1, $so2);
                    }

                    if (is_numeric($GLOBALS["so1"]) && is_numeric($GLOBALS["so2"])) {
                    ?>
                        <!-- UCLN -->
                        <label for="UCLN" style="color: #11998e;">UCLN:</label>
                        <input class="form-field" type="text" name="UCLN" id="UCLN" value="<?php echo UCLN($so1, $so2); ?>"><br>
                        <!-- BCNN -->
                        <label for="so1" style="color: #11998e;">BCNN:</label>
                        <input class="form-field" type="text" name="BCNN" id="BCNN" value="<?php echo BCNN($so1, $so2); ?>"><br>
                    <?php
                    } else {
                        echo "Giá trị nhập vào không phải số!";
                    }
                    ?>
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