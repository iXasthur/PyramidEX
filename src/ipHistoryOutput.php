
<table class="uni-ipHistory">
    <tr>
        <td>USER IP</td>
        <td>COUNT</td>
    </tr>
    <?php
        if (!mysqli_connect_errno()) {
            $sql = 'SELECT * FROM iphistory';
            $result = mysqli_fetch_all(mysqli_query($link, $sql), MYSQLI_ASSOC);

            usort($result, function ($v1, $v2) {
                return $v1['count'] < $v2['count'];
            });

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