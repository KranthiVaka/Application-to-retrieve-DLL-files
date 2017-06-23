<?php
if (isset($_GET["id"])) {   // get input of clicked alphabet by storing in id
    $id = $_GET['id'];

    $query = "SELECT * FROM user where LEFT(`filename`, 1) = '$id'";  // select filenames based on 1st letter
    $searchresult = filterTable($query);
} 

function filterTable($query) {                     //function for connecting to database and store in res
    include('dbConnect.php');
    $res = mysqli_query($conn, $query);
    return $res;
}
?>  
<html>
    <style>
        body, html {height: 100%}
        body, a,table {font-family: "Amatic SC", sans-serif}
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

    </style>
    <body class="bgimg">
        <div style="top:2%; position: absolute; left:94%; font-family: 'FranchiseRegular','Arial Narrow',Arial,sans-serif; display: bold; font-size: 20px;">
            <a href="firstPage.html"><b>Home</b></a></div>
        <table>
            <tr>
                <th>filenames</th>
            </tr>
            <?php
            include 'dbConnect.php';
            while ($row = mysqli_fetch_array($searchresult)):
                ?>
                <tr>
                    <td><?php echo $row["filename"]; ?> </td>       <!-- display filenames starting with chosen alphabets -->
                </tr>
            <?php endwhile; ?>
        </table>
    </body>
</html>
