<!DOCTYPE html>
<html lang="en">

<head>
    <title>Edit barang Group</title>
    <?php include('jqm_base_header.php'); ?>
</head>

<body>
    <div data-role="page" class="jqm-demos ui-responsive-panel" id="panel-responsive-page1" data-title="Panel responsive page">

        <div data-role="header">
            <h1>Edit Kelas</h1>
            <a href="#nav-panel" data-icon="bars" data-iconpos="notext">Menu</a>
            <!-- <a href="#add-form" data-icon="gear" data-iconpos="notext">Add</a> -->
        </div><!-- /header -->

        <div role="main" class="ui-content jqm-content jqm-fullwidth">

            <h1>Edit Mahasiswa</h1>
            <form action="<?= base_url('/edit_mhs_with_kls/' . $mahasiswa['id']) ?>" method="post">
            <div data-role="fieldcontain">
                    <label for="npm">NPM:</label>
                    <input type="text" name="npm" id="npm" value="<?= $mahasiswa['npm'] ?>">
                </div>
                <div data-role="fieldcontain">
                    <label for="nama">Nama:</label>
                    <input type="text" name="nama" id="nama" value="<?= $mahasiswa['nama'] ?>">
                </div>
                <div data-role="fieldcontain">
                    <label for="kelas_id">Kelas:</label>
                    <select name="kelas_id" id="kelas_id">
                        <?php foreach ($kelas as $k) : ?>
                            <option value="<?= $k['id'] ?>" <?php echo ($mahasiswa['kelas_id'] == $k['id']) ? 'selected' : '' ?>><?= $k['name'] ?></option>
                        <?php endforeach; ?>
                    </select>
                </div>
                <input type="submit" value="Update Group" data-theme="b" class="ui-btn-hidden ui-shadow ui-corner-all ui-btn-inline ui-btn-b ui-mini">
            </form>
            <a href="<?= base_url('/delete_mhs_with_kls/' . $mahasiswa['id']) ?>" class="ui-btn ui-shadow ui-corner-all ui-btn-inline ui-btn-b ui-mini ui-icon-delete ui-btn-icon-left">Delete Mahasiswa</a>
            <a href="../" data-rel="back" data-ajax="false" class="ui-btn ui-shadow ui-corner-all ui-mini ui-btn-inline ui-icon-carat-l ui-btn-icon-left ui-alt-icon ui-nodisc-icon">Back</a>
            <br>
        </div><!-- /content -->
        <div data-role="panel" data-display="push" data-theme="b" id="nav-panel">

            <?php include('jqm_side_panel_menu.php'); ?>

        </div><!-- /panel -->

    </div><!-- /page -->

</body>

</html>