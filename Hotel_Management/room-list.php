<?php
include_once 'header.php';
require_once 'database.php';
?>

<div class="content table-responsive table-full-width">
    <table id="expenseCategoryTable" class="table table-hover table-striped">
        <?php
        $query = "select * from room";
        $rows = db_select($query);
        $count = 0;
        $html = '<thead>
                            <tr>
                                <th>SL.</th>
                                <th>Room No</th>
                                <th>Room Type</th>
                                <th>Rate</th>
                                <th>Telephone</th>
                                <th>Status</th>
                            </tr>
                            </thead>';
        foreach ($rows as $row) {
            $html .= '<tr>
                                <td>' . (++$count) . '</td>
                                <td>' . $row['roomId'] . '</td>
                                <td>' . $row['Room_type'] . '</td>
                                <td>' . $row['Rate'] . '</td>
                                <td>' . $row['Phone_no'] . '</td>';
            if (session_status() == PHP_SESSION_NONE) {
                session_start();
            }
            $user = $_SESSION['userId'];
            $roomId = $row['id'];
            $html .=( $row['isReserved'] ==0)?"<td><a href='room-reserve.php?roomId= $roomId & userId=$user' style='color: green'>Reserve<a/></td>":"<td><span style='color: red'>Reserved</span></td>";

                            $html .= '</tr>';
        }
        echo $html;
        ?>

    </table>
</div>



<?php
include_once 'footer.php';
?>
