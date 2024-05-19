<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mahasiswa</title>
</head>

<body>
    <form id="form" action="<?= base_url('mahasiswa') ?>" method="post" style="display: block; position: absolute; top: 50%; left: 50%; transform: translate(-50%, -50%);">
        <input type="hidden" id="id" name="id" value="">
        <label for="npm">NPM:</label>
        <input type="text" id="npm" name="npm"><br><br>
        <label for="nama">Nama:</label>
        <input type="text" id="nama" name="nama"><br><br>
        <button type="button" onclick="cancelForm()">Cancel</button>
        <button type="submit">Submit</button>
    </form>

    <table border="1">
        <tr>
            <th>ID</th>
            <th>NPM</th>
            <th>Nama</th>
            <th>Aksi</th>
        </tr>
        <?php if ($mahasiswa) : ?>
            <?php foreach ($mahasiswa as $mhs) : ?>
                <tr>
                    <td><?= $mhs['id'] ?></td>
                    <td><?= $mhs['npm'] ?></td>
                    <td><?= $mhs['nama'] ?></td>
                    <td>
                        <a href="<?= base_url('mahasiswa/update/' . $mhs['id']) ?>">Edit</a>
                        |
                        <a href="<?= base_url('mahasiswa/delete/' . $mhs['id']) ?>">Delete</a>
                    </td>
                </tr>
            <?php endforeach; ?>
        <?php else : ?>
            <tr>
                <td colspan="4">Data Kosong</td>
            </tr>
        <?php endif; ?>
    </table>
    <script>
        function cancelForm() {
            document.getElementById('form').reset();
        }
    </script>
</body>

</html>

