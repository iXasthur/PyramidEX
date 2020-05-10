
<table class="uni-ipHistory">
    <tr>
        <td>USER IP</td>
        <td>COUNT</td>
    </tr>
    <?php
        if (!mysqli_connect_errno()) {
            $sql = 'SELECT * FROM iphistory ORDER BY count DESC';
            $result = mysqli_fetch_all(mysqli_query($link, $sql), MYSQLI_ASSOC);

            foreach ($result as $value) {
                $ip = $value['ip'];
                $count = $value['count'];

                echo '<tr>';
                echo '<td>'.$ip.'</td>';
                echo '<td>'.$count.'</td>';
                echo '</tr>';
            }
        }
    ?>
</table>