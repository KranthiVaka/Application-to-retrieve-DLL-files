
<html lang="en" class="no-js">
    <head>
        <meta charset="utf-8">
        <title>Login</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta name="description" content="">
        <meta name="author" content="">
        <style>
            /*Css for this page*/
            body, html {height: 100%}
            body, a{font-family: "Amatic SC", sans-serif}
            .bgimg {
                background-repeat: no-repeat;
                background-size: cover;
                background-image: url("http://www.desktop-background.com/t/2015/01/23/891575_superhd-pics-backgrounds-blurred-colors-minimalistic-multicolor_1920x1080_h.jpg");
            }

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

    </head>
    <body class="bgimg">
        <label style="top:10%; float:center; display: block; color:green;font-size: 40px;font-weight: bold;text-align: center;">View Files Based on Alphabetical Order</label>
        <div style="top:2%; position: absolute; left:94%; font-family: 'FranchiseRegular','Arial Narrow',Arial,sans-serif; display: bold; font-size: 20px;">
            <a href="firstPage.html"><b>Home</b></a></div>
        <br><br><br><br><br><br><br><br><br><br><br><br>    
        <?php
        //Display alphabets from a to z 
        foreach (range('a', 'z') as $i) {

            echo "<a href=sortedAlphabets.php?id=$i>" . strtoupper($i) . "</a> &emsp;";
        }
        ?>
    </label>
</div></form>
</body></html>






