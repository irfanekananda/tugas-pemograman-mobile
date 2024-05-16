<!DOCTYPE html>
<html lang="en">

<head>
    <title>List barang Group</title>
    <?php include('jqm_base_header.php'); ?>
</head>

<body>
    <div data-role="page" class="jqm-demos ui-responsive-panel" id="panel-responsive-page1" data-title="Panel responsive page">

        <div data-role="header">
            <h1>List Kelas</h1>
            <a href="#nav-panel" data-icon="bars" data-iconpos="notext">Menu</a>
            <!-- <a href="#add-form" data-icon="gear" data-iconpos="notext">Add</a> -->
        </div><!-- /header -->

        <div role="main" class="ui-content jqm-content jqm-fullwidth">
        <p>Note: Jika URL tidak sesuai, tekan tombol refresh</p>
            <h1>List Kelas</h1>
            <form action="<?= base_url('/list_kls_mhs') ?>" method="post">
                <label for="name">Nama:</label>
                <input type="text" name="name" id="name" value="" required>
                <input type="submit" value="Add Kelas" data-theme="b" class="ui-btn-hidden ui-shadow ui-corner-all ui-btn-inline ui-btn-b ui-mini">
            </form>
            <br>
            <ul data-role="listview">
                <?php foreach ($kelas as $k) : ?>
                    <li><a href="<?= base_url('/edit_kls_mhs/' . $k['id']) ?>"><?= $k['name'] ?></a></li>
                <?php endforeach; ?>
            </ul>
            <br>
            <a href="../" data-rel="back" data-ajax="false" class="ui-btn ui-shadow ui-corner-all ui-mini ui-btn-inline ui-icon-carat-l ui-btn-icon-left ui-alt-icon ui-nodisc-icon">Back</a>
            <a href="<?= base_url('/list_kls_mhs') ?>" data-icon="refresh" data-iconpos="notext" data-ajax="false" class="ui-btn ui-shadow ui-corner-all ui-btn-inline ui-mini">Refresh</a>
        </div><!-- /content -->

        <div data-role="panel" data-display="push" data-theme="b" id="nav-panel">

            <?php include('jqm_side_panel_menu.php'); ?>

        </div><!-- /panel -->

    </div><!-- /page -->

</body>

</html>