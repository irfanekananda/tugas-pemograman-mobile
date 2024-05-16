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

            <h1>Edit Barang Group</h1>
            <form action="<?= base_url('/edit_kls_mhs/' . $kelas['id']) ?>" method="post">
                <label for="name">Nama Kelas:</label>
                <input type="text" name="name" id="name" value="<?= $kelas['name'] ?>" required>
                <input type="submit" value="Update Group" data-theme="b" class="ui-btn-hidden ui-shadow ui-corner-all ui-btn-inline ui-btn-b ui-mini">
            </form>
            <a href="<?= base_url('/delete_kls_mhs/' . $kelas['id']) ?>" class="ui-btn ui-shadow ui-corner-all ui-btn-inline ui-btn-b ui-mini ui-icon-delete ui-btn-icon-left">Delete Group</a>
            <a href="../" data-rel="back" data-ajax="false" class="ui-btn ui-shadow ui-corner-all ui-mini ui-btn-inline ui-icon-carat-l ui-btn-icon-left ui-alt-icon ui-nodisc-icon">Back</a>
            <br>
        </div><!-- /content -->
        <div data-role="panel" data-display="push" data-theme="b" id="nav-panel">

            <?php include('jqm_side_panel_menu.php'); ?>

        </div><!-- /panel -->

    </div><!-- /page -->

</body>

</html>