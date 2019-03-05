<?php
include_once 'header.php';
require_once 'database.php';
?>

<div class="content table-responsive table-full-width">
    <table id="expenseCategoryTable" class="table table-hover table-striped">
        <?php
        if (session_status() == PHP_SESSION_NONE) {
            session_start();
        }
        $user = $_SESSION['userId'];
        $count = 0;
        $query="SELECT reservation.id, user.user_name, room.roomId,room.Room_type,reservation.check_in,reservation.check_out,reservation.isAccepted from room,reservation,user where reservation.roomId=room.id AND reservation.userId=user.user_id && reservation.isAccepted='1'";
        $rows=db_select($query);




        $html = '<thead>
                            <tr>
                                <th>SL.</th>
                                <th>Client</th>
                                <th>Room No</th>
                                <th>Room Type</th>
                                <th>Check In</th>
                                <th>Check out</th>
                                <th>Status</th>
                                <th>Accept/Reject</th>
                            </tr>
                            </thead>';
        foreach ($rows as $row) {
            $html .= '<tr>
                                <td>' . (++$count) . '</td>
                                <td>' . $row['user_name'] . '</td>
                                <td>' . $row['roomId'] . '</td>
                                <td>' . $row['Room_type'] . '</td>
                                <td>' . $row['check_in'] . '</td>
                                <td>' . $row['check_in'] . '</td>
                                <td>Pending</td>
                                <td><a style="color: green" href="accepect.php?id='.$row['id'].'">Accept</a>/<a style="color: red" href="reject?id='.$row['id'].'">Reject</a></td>';
            $status = $row['isAccepted'] ;

            $html .= '</tr>';
        }
        echo $html;
        ?>

    </table>
</div>



<?php
include_once 'footer.php';
?>
