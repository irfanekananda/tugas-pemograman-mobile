<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<form id="form" action="<?= base_url('mahasiswa/update/'.$mahasiswa['id']) ?>" method="post" style="display: block; position: absolute; top: 50%; left: 50%; transform: translate(-50%, -50%);">
        <label for="npm">NPM:</label>
        <input type="text" id="npm" name="npm" value="<?= $mahasiswa['npm'] ?>"><br><br>
        <label for="nama">Nama:</label>
        <input type="text" id="nama" name="nama" value="<?= $mahasiswa['nama'] ?>"><br><br>
        <button type="submit">Submit</button>
    </form>
</body>
</html>