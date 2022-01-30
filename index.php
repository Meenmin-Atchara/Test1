<!DOCTYPE html>
<html >
    <head>

    <meta charset="UTF-8"/>
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

        <title>โปรแกรมคำนวณเงินทอน</title>

        <style>

        </style>

    </head>

    <body>
        <div class="relative flex items-top justify-center min-h-screen bg-gray-100 dark:bg-gray-900 sm:items-center py-4 sm:pt-0">
    
    <form action="process.php" method="post">
        <div align="center">

            <h2>โปรแกรมคำนวณเงินทอน</h2>
            <br>
                <label>เงินที่รับ : </label><input type="text" name="receive" id="receive" style="width: 130px; margin-left:5px;">
                <label>ราคาสินค้า : </label><input type="text" name="price" id="price" style="width: 130px; margin-left:5px;">

            <br>
            <br>
                <input type="submit" value="คำนวณ" / style="height:40px; width:75px; margin-left:5px; border-radius: 10px; background-color: #5bb3ff;">


        </div>
    </form>
        


        </div>
    </body>
</html>
