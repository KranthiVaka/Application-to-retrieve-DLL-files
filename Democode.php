<?php
if (isset($_GET["id"])) {
    $id = $_GET['id'];

    $query = "SELECT * FROM user where LEFT(`filename`, 1) = '$id'";
    $searchresult = filterTable($query);
} else {

    $query = "select * from user";
    $searchresult = filterTable($query);
}

function filterTable($query) {
    include('dbConnect.php');
    $res = mysqli_query($conn, $query);
    return $res;
}

?>  
<html>  <table>
        <tr>
            <th>filename</th>
        </tr>
<?php
include 'dbConnect.php';
while ($row = mysqli_fetch_array($searchresult)):
    ?>
            <tr>
                <td><?php echo $row["filename"]; ?> </td>
            </tr>
<?php endwhile; ?>
    </table></html>
