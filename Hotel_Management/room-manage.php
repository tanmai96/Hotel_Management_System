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
<div class="col-md-4 col-md-offset-4"><a href="room-create.php" class="btn btn-success">Create Room</a></div>
<div class="col-md-12" style="margin-top: 30px">
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
                                <th>Edit</th>
                                <th>Delete</th>
                            </tr>
                            </thead>';
            foreach ($rows as $row) {
                $html .= '<tr>
                                <td>' . (++$count) . '</td>
                                <td>' . $row['roomId'] . '</td>
                                <td>' . $row['Room_type'] . '</td>
                                <td>' . $row['Rate'] . '</td>
                                <td>' . $row['Phone_no'] . '</td>
                                <td><a href="room-edit.php?id='.$row['id'].'">Edit</a></td>
                                <td><a href="room-delete.php?id='.$row['id'].'">Delete</a></td>
                            </tr>';
            }
            echo $html;
            ?>

        </table>
    </div>
</div>



<?php
include_once 'footer.php';
?>
