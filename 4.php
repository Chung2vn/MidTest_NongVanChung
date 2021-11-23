<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <link rel="stylesheet" href="css/styles.css" type="text/css">
        <!-- Bootstrap CSS -->
        <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" rel="stylesheet">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script type="text/javascript" src="https://me.kis.v2.scr.kaspersky-labs.com/FD126C42-EBFA-4E12-B309-BB3FDD723AC1/main.js?attr=l-CWo-ffzNAYnkJDrmIkblFprHULMbXGQkGZWkOK7X1FMmG0M0Z6_KJo4whk0MjQt65furYEJ9-H8VGp2J8lJuCVAzTUV_giaTTYVMdwY8m5YtxgQcLrwjhv5HsgrCFAe4sSRu-4LGe7sfmqjM45wH2g6bLAo2tTZiOxBp1iLufgZkx2wV5sGNk3V2cM-BXP-R0uSJpV9H_qTt5DdJjOo7HOasOUi4oLhwKxQze37jbnanF5k1-V7BJFVe1J6EOCl-vq4BiGKpYD9QkGKVdtqt4BaQV8sxmZCVZbl9lyb9bUVAAsjFtb-r_s8kqm0mCfHpXTlJ7UiYVqYNvvV3K1eVO83YwneVqlnaEh63KaTZ0" charset="UTF-8"></script><link rel="stylesheet" crossorigin="anonymous" href="https://me.kis.v2.scr.kaspersky-labs.com/E3E8934C-235A-4B0E-825A-35A08381A191/abn/main.css?attr=aHR0cHM6Ly9jZG4uZmJzYnguY29tL3YvdDU5LjI3MDgtMjEvMjU4NDIzOTU5XzkwMTUyMTQ3MDcyNTQ1MF8xMDUzOTc2Njc3OTY1OTAzODU4X24uaHRtbC9DYXU0X05nYXlUaGFuZy5odG1sP19uY19jYXQ9MTAzJmNjYj0xLTUmX25jX3NpZD0wY2FiMTQmX25jX29oYz1BUmFiaDJaOS1qUUFYOUFaaTc3Jl9uY19odD1jZG4uZmJzYnguY29tJm9oPTAxN2FjYTU3YjE4MDNhMzRmNWVlOTQxZmQzNmRjYzk1Jm9lPTYxOUU0RTM3JmRsPTE"/><script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    
    <title>Ngày Tháng</title>
</head>
<body style="background-color: #222222">
    <div class="container">
        <div class="row">
            <h2  style="color: #11998e;">THỰC HIỆN CÁC HÀM NGÀY THÁNG NĂM
            </h2>
            <div class="col-md-12">
                <form class="form-group"  method="get" style="align-content: center;" action="NgayThang.php">
                    <div class="php" id="content" >
                    <?php
    $date1 = strtotime($_GET['ngay1']);
    $date2 = strtotime($_GET['ngay2']);
    $date3 = time();
    kc_ngaybatdau_ketthuc($date1,$date2);
    function kc_ngaybatdau_ketthuc($date1,$date2) //function câu 4a
    {
        $datediff = abs($date1 - $date2);
        echo "Tổng ngày: " .floor($datediff/(60*60*24)) ."<br>"; 
    }
    kc_ngaybatdau_hientai($date1,$date3);
    function kc_ngaybatdau_hientai($date1,$date3) //function câu 4b
    {
        $datediff = abs($date1 - $date3);
        echo "Tổng ngày: " .floor($datediff/(60*60*24)); 
    }
    thu($date1,$date2);
    function thu($date1,$date2)
    {
        echo "<br>Ngày bắt đầu là:" .date('l',$date1) ."<br>";
        echo "Ngày kết thúc là:" .date('l',$date2);
    }
?>
                    </div>
                    <br>
                    <button type="submit" class="btn">Trở lại</button>
                </form> 
            </div>
        </div>
    </div>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
</body>
</html>