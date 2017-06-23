<html>
    <style>
        /*CSS for this page*/
        body, html {height: 100%}
        body, a{font-family: "Amatic SC", sans-serif}
        .bgimg {
            background-repeat: no-repeat;
            background-size: cover;
            height: 100%;
            background-attachment: fixed;
            background-image: url("http://www.desktop-background.com/t/2015/01/23/891575_superhd-pics-backgrounds-blurred-colors-minimalistic-multicolor_1920x1080_h.jpg");
        }
        table
        {
            border-collapse: collapse;
            width: 100%;  
            font-size: 25px;

        }
        td,th
        {
            padding: 4px;
            text-align: center;
            border-bottom: 1px solid #ddd;

        }
        tr:hover{background-color:#f5f5f5}
        a:link {
            color: green;
            background-color: transparent;
            text-decoration: none;
            font-weight: bold;
            font-size: 22px;
            top: 35%;

        }
        a:visited {
            color: blue;
            background-color: transparent;
            text-decoration: none;
        }
        a:hover {
            color: red;
            background-color: transparent;
            text-decoration: underline;
        }
        a:active {
            color: yellow;
            background-color: transparent;
            text-decoration: underline;
        }

    </style>
    <body class="bgimg">
        <div style="top:2%; position: absolute; left:94%; font-family: 'FranchiseRegular','Arial Narrow',Arial,sans-serif; display: bold; font-size: 20px;">
            <a href="firstPage.html"><b>Home</b></a></div>
        <table>
            <tr>
                <th>Filename</th>
            </tr>
            <?php
            include 'dbConnect.php';
            $query = "SELECT * FROM user ";  // select columns from database
            $res = mysqli_query($conn, $query);
            while ($row = mysqli_fetch_array($res)) {
                $data = $row[3];     // Getting values in 3rd column
                $data1 = $row[10];   // Getting values in 10th column
                $data2 = $row[0];    // Getting values in 0th column
                ?>
                <tr><td>  
                        <?php echo "<a href=fileViewDB.php?id=$data&version=$data1&bits=$data2> $data</a> <br>"; ?> <!-- Storing values to provide input to fileViewDB.php -->
                    </td>
                </tr>


            <?php } ?>

        </table>
    </body>
</html>

