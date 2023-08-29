<?php

header("Content-type: application/vnd-ms-excel");
header("Content-Disposition: attachment; filename=Data Asset.xls");

?>

<html>

<body>
    <table border="1">
        <thead>
            <tr>
                <th>No</th>
                <th>Nama</th>
                <th>Tipe</th>
                <th>Vendor</th>
                <th>Lokasi</th>
                <th>Unit Pemakai</th>
            </tr>
        </thead>
        <tbody>
            <?php $i = 1; ?>
            <?php foreach ($masterdata->getResultArray() as $row) : ?>
                <tr>
                    <td scope="row"><?= $i; ?></td>
                    <td><?= $row['nama']; ?></td>
                    <td><?= $row['tipe']; ?></td>
                    <td><?= $row['vendor']; ?></td>
                    <td><?= $row['lokasi']; ?></td>
                    <td><?= $row['unit_pemakai']; ?></td>
                </tr>
                <?php $i++; ?>
            <?php endforeach; ?>
        </tbody>
    </table>
</body>

</html>