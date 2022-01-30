<!DOCTYPE >
<html >
<head>
    <meta charset="UTF-8"/>
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

    <title>ประมวลผลโปรแกรมคำนวณเงินทอน</title>
</head>

<body>

      <div class="relative flex items-top justify-center min-h-screen bg-gray-100 dark:bg-gray-900 sm:items-center py-4 sm:pt-0">

        <div align="center">
           
           <h2>โปรแกรมคำนวณเงินทอน</h2>

      <?php

        $money= array("500", "100", "50", "10", "5", "1");
        
        $result=$_POST['receive']-$_POST['price'];

    //รูปแบบ array
        if ($result >= $money[0]) {

          $sum0a=$result/$money[0];
          $sum0b=floor($sum0a)*$money[0];
          $result=$result-$sum0b;

          echo "ธนบัตร 500 = ".floor($sum0a)." ใบ"."<br>";

        }if($result>=$money[1]){

          $sum1a=$result/$money[1];
          $sum1b=floor($sum1a)*$money[1];
          $result=$result-$sum1b;

          echo "ธนบัตร 100 = ".floor($sum1a)." ใบ"."<br>";

        }if($result>=$money[2]){

          $sum2a=$result/$money[2];
          $sum2b=floor($sum2a)*$money[2];
          $result=$result-$sum2b;

          echo "ธนบัตร 50 = ".floor($sum2a)." ใบ"."<br>";

        }if($result>=$money[3]){

          $sum3a=$result/$money[3];
          $sum3b=floor($sum3a)*$money[3];
          $result=$result-$sum3b;

          echo "เหรียญ 10 บาท= ".floor($sum3a)." เหรียญ"."<br>";

        }if($result>=$money[4]){

          $sum4a=$result/$money[4];
          $sum4b=floor($sum4a)*$money[4];
          $result=$result-$sum4b;

          echo "เหรียญ 5 บาท = ".floor($sum4a)." เหรียญ"."<br>";

        }if($result>=$money[5]){

          $sum5a=$result/$money[5];
          $sum5b=floor($sum5a)*$money[5];
          $result=$result-$sum5b;

          echo "เหรียญ 1 บาท = ".floor($sum5a)." เหรียญ"."<br>";
        }



        // if ($result >= 500) {

        //   $sum0a=$result/500;
        //   $sum0b=floor($sum0a)*500;
        //   $result=$result-$sum0b;

        //   echo "ธนบัตร 500 = ".floor($sum0a)." ใบ"."<br>";

        // }if($result>=100){

        //   $sum1a=$result/100;
        //   $sum1b=floor($sum1a)*100;
        //   $result=$result-$sum1b;

        //   echo "ธนบัตร 100 = ".floor($sum1a)." ใบ"."<br>";

        // }if($result>=50){

        //   $sum2a=$result/50;
        //   $sum2b=floor($sum2a)*50;
        //   $result=$result-$sum2b;

        //   echo "ธนบัตร 50 = ".floor($sum2a)." ใบ"."<br>";

        // }if($result>=10){

        //   $sum3a=$result/10;
        //   $sum3b=floor($sum3a)*10;
        //   $result=$result-$sum3b;

        //   echo "เหรียญ 10 บาท= ".floor($sum2)." เหรียญ"."<br>";

        // }if($result>=5){

        //   $sum4a=$result/5;
        //   $sum4b=floor($sum4a)*5;
        //   $result=$result-$sum4b;

        //   echo "เหรียญ 5 บาท = ".floor($sum4a)." เหรียญ"."<br>";

        // }if($result>=1){

        //   $sum5a=$result/1;
        //   $sum5b=floor($sum5a)*1;
        //   $result=$result-$sum5b;

        //   echo "เหรียญ 1 บาท = ".floor($sum5a)." เหรียญ"."<br>";
        // }





          ?>
         
        </div>
       </div> 
</body>
</html>