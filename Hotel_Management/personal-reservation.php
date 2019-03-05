<?php
include_once 'header.php';
require_once 'database.php';

if (session_status() == PHP_SESSION_NONE) {
    session_start();
}
if(isset($_SESSION['msg'])){
    echo $_SESSION['msg'];
    unset($_SESSION['msg']);
}
?>

<div class="content table-responsive table-full-width">
    <table id="expenseCategoryTable" class="table table-hover table-striped">
        <?php
        if (session_status() == PHP_SESSION_NONE) {
            session_start();
        }
        $user = $_SESSION['userId'];
        $count = 0;
        $query="SELECT room.roomId,room.Room_type,reservation.check_in,reservation.check_out,reservation.isAccepted from room,reservation where reservation.roomId=room.id AND reservation.userId=$user";
        $rows=db_select($query);




        $html = '<thead>
                            <tr>
                                <th>SL.</th>
                                <th>Room No</th>
                                <th>Room Type</th>
                                <th>Check In</th>
                                <th>Check out</th>
                                <th>Status</th>
                            </tr>
                            </thead>';
        foreach ($rows as $row) {
            $html .= '<tr>
                                <td>' . (++$count) . '</td>
                                <td>' . $row['roomId'] . '</td>
                                <td>' . $row['Room_type'] . '</td>
                                <td>' . $row['check_in'] . '</td>
                                <td>' . $row['check_out'] . '</td>';
            $status = $row['isAccepted'] ;
            if($status==1) $html.= '<td><span style="color: orange">Pending</span></td>';
            else if($status==2) $html.= '<td><span style="color: green">Accepted</span></td>';
            else if($status==3) $html.= '<td><span style="color: red">Rejected</span></td>';


            $html .= '</tr>';
        }
        echo $html;
        ?>

    </table>
</div>



<?php
include_once 'footer.php';
?>
