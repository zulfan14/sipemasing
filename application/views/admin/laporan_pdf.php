<!DOCTYPE>
<html><head>
    <title>Laporan Lulus</title>
</head><body>
    <table BORDER="1" CELLPADDING="10">
        <tr>
            <th>NO</th>
            <th>NAMA</th>
            <th>EMAIL</th>
            <th>NIK</th>
            <th>NOMOR HP</th>
            <th>NEGARA</th>
            <th>TEMPAT_LAHIR</th>
            <th>IJAZAH</th>
        </tr>
        <?php
        $no = 1;
        foreach ($lulus as $l) : ?>
            <tr>
                <th scope="row"><?= $no; ?></th>
                <td><?= $l['nama']; ?></td>
                <td><?= $l['email']; ?></td>
                <td><?= $l['nik'] ?></td>
                <td><?= $l['hp'] ?></td>
                <td><?= $l['negara'] ?></td>
				<td><?= $l['tempat_lahir'] ?></td>
                <td><a href="<?= base_url('assets/document/'); ?><?= $l['ijazah']; ?>">Download</a></td>
            </tr>
        <?php $no++;
        endforeach; ?>
    </table>
</body></html>