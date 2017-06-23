<html>
    <style>
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

    </style>
    <body class="bgimg">
        <div style="top:2%; position: absolute; left:94%; font-family: 'FranchiseRegular','Arial Narrow',Arial,sans-serif; display: bold; font-size: 20px;">
           <a href="firstPage.html"><b>Home</b></a></div> <!-- Redirect to home page -->
        <table>
            <tr>
                <th>Data</th>
            </tr>
            <?php
            include 'dbConnect.php';
            if (isset($_GET["id"])) {
                if (isset($_GET["version"])) {
                    if (isset($_GET["bits"])) {
                        $id = $_GET['id'];              //fetching values from fileView.php
                        $version = $_GET['version'];
                        $bits = $_GET['bits'];
                        $result = mysqli_query($conn, "select * from user WHERE filename = '" . $id . "' AND (version = '" . $version . "' AND bits = '" . $bits . "')");
                        while ($row = $result->fetch_assoc()) {   // fetching results from database and print associated content in dll dile
                            ?>
                            <tr><td> <?php echo "bits: " . $row['bits'] . "\n<br/>"; ?></td></tr>
                            <tr><td> <?php echo "compnayname: " . $row['companyname'] . "\n<br/>"; ?></td></tr>
                            <tr><td> <?php echo "description: " . $row['description'] . "\n<br/>"; ?></td>></tr>
                            <tr><td> <?php echo "filename: " . $row['filename'] . "\n<br/>"; ?></td></tr>
                            <tr><td> <?php echo "filesize: " . $row['filesize'] . "\n<br/>"; ?></td></tr>
                            <tr><td> <?php echo "md5: " . $row['md5'] . "\n<br/>"; ?></td></tr>
                            <tr><td> <?php echo "name: " . $row['name'] . "\n<br/>"; ?></td></tr>
                            <tr><td> <?php echo "versionMajor: " . $row['versionMajor'] . "\n<br/>"; ?></td></tr>
                            <tr><td> <?php echo "versionMinor: " . $row['versionMinor'] . "\n<br/>"; ?></td></tr>
                            <tr><td> <?php echo "productname: " . $row['productname'] . "\n<br/>"; ?></td></tr>
                            <tr><td> <?php echo "version: " . $row['version'] . "\n<br/>"; ?></td></tr>
                        <?php
                        }
                    }
                }
            }
            ?>
        </table>
    </body>
</html>
