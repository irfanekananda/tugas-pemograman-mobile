<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>View Form</title>
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
                        <a href="javascript:void(0)" onclick="editForm('<?= $mhs['id'] ?>', '<?= $mhs['npm'] ?>', '<?= $mhs['nama'] ?>')">Edit</a>
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
        function editForm(id, npm, nama) {
            document.getElementById('id').value = id;
            document.getElementById('npm').value = npm;
            document.getElementById('nama').value = nama;
            document.getElementById('form').addEventListener('submit', function(e) {
                e.preventDefault();
                var newNpm = document.getElementById('npm').value;
                var newNama = document.getElementById('nama').value;
                updateMahasiswa(id, newNpm, newNama);
            });

        }

        function updateMahasiswa(id, npm, nama) {
            var xhr = new XMLHttpRequest();
            xhr.open('PUT', '<?= base_url('mahasiswa') ?>/' + id, true);
            xhr.setRequestHeader('Content-type', 'application/x-www-form-urlencoded');
            xhr.onload = function() {
                if (xhr.status === 200) {
                    document.getElementById('form').style.display = 'none';
                    document.getElementById('form').reset();
                    location.reload();
                } else {
                    alert('Gagal mengubah data');
                }
            };
            xhr.send('npm=' + encodeURIComponent(npm) + '&nama=' + encodeURIComponent(nama));
            // xhr.send('npm=' + npm + '&nama=' + nama);
        }

        function cancelForm() {
            document.getElementById('form').style.display = 'none';
            document.getElementById('form').reset();
        }
    </script>
</body>

</html>

