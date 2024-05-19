<!DOCTYPE html>
<html lang="en">

<head>
    <title>List Jadwal</title>
    <?php include('jqm_base_header.php'); ?>
    <style>
        table {
            width: 100%;
            border-collapse: collapse;
        }
        th, td {
            padding: 8px;
            text-align: left;
            border-bottom: 1px solid #ddd;
        }
        th {
            background-color: #f2f2f2;
        }
    </style>
</head>

<body>
    <div data-role="page" class="jqm-demos ui-responsive-panel" id="panel-responsive-page1" data-title="Panel responsive page">

        <div data-role="header">
            <h1>List Jadwal Kelas</h1>
            <a href="#nav-panel" data-icon="bars" data-iconpos="notext">Menu</a>
            <!-- <a href="#add-form" data-icon="gear" data-iconpos="notext">Add</a> -->
        </div><!-- /header -->

        <div role="main" class="ui-content jqm-content jqm-fullwidth">
            <h1>List Jadwal</h1>
            <form action="<?= base_url('/list_jadwal') ?>" method="post">
                <label for="name">Nama Mata Kuliah :</label>
                <input type="text" name="nama" id="name" value="" required>
                <label for="dosen">Dosen :</label>
                <input type="text" name="dosen" id="dosen" value="" required>
                <input type="submit" value="Tambah Jadwal" data-theme="b" class="ui-btn-hidden ui-shadow ui-corner-all ui-btn-inline ui-btn-b ui-mini">
            </form>

            <br>
            <table data-role="table" class="ui-responsive">
                <thead>
                    <tr>
                        <th>Nama Mata Kuliah</th>
                        <th>Dosen</th>
                        <th>Edit</th>
                    </tr>
                </thead>
                <tbody>
                    <?php foreach ($jadwal as $j) : ?>
                        <tr>
                            <td><?= $j['nama'] ?></td>
                            <td><?= $j['dosen'] ?></td>
                            <td><a href="<?= base_url('/list_jadwal_edit/' . $j['id']) ?>" class="ui-btn ui-btn-inline ui-mini">Edit</a></td>
                        </tr>
                    <?php endforeach; ?>
                </tbody>
            </table>
            <br>
            <a href="../" data-rel="back" data-ajax="false" class="ui-btn ui-shadow ui-corner-all ui-mini ui-btn-inline ui-icon-carat-l ui-btn-icon-left ui-alt-icon ui-nodisc-icon">Back</a>
            <a href="<?= base_url('/list_jadwal') ?>" data-icon="refresh" data-iconpos="notext" data-ajax="false" class="ui-btn ui-shadow ui-corner-all ui-btn-inline ui-mini">Refresh</a>
        </div><!-- /content -->

        <div data-role="panel" data-display="push" data-theme="b" id="nav-panel">
            <?php include('jqm_side_panel_menu.php'); ?>
        </div><!-- /panel -->

    </div><!-- /page -->

</body>

</html>
