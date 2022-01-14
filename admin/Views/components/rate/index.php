<?php

if (isset($_REQUEST['action'])) {
    $Listbook = loadModel("Listbook");
    if ($_REQUEST['action'] == 'delete') {
        if ($Listbook->Delete_book($_REQUEST['idSach'])) {
            echo '<script>alert("Xóa Thành Công")</script>';
        } else
            echo '<script>alert("Xóa Không Thành Công")</script>';
    }
}
?>

<div class="row" style="display:inline-block;">
</div>
<div class="row">
</div>
<div class="btn" style="width:100%">
    <form action="" method="post">
        <div id="filter" class="filter">


        </div>
    </form>
</div>

<div class="tb table" id="data_table">
    <table class="table" style="border:1px solid black">
        <tr>
            <th>STT</th>
            <th>Tên sách</th>
            <th>Số sao đánh giá</th>
        </tr>
        <?php
        $rate = loadModel('rate');
        $result = $rate->Select_Rate();
        $i = 1;
        if ($result->num_rows > 0)
            while ($row = $result->fetch_assoc()) {
                $rate = $row['sosao'];
        ?>
            <tr>
                <td><?php echo $i++; ?></td>
                <td><?php echo $row['Tensach']; ?></td>
                <td><?php echo round($rate, 1) . "★"; ?></td>
            </tr>
        <?php }
        ?>
    </table>
</div>
<!-- /page content -->
<!-- footer content -->
<!-- /footer content -->