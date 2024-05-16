<!DOCTYPE html>
<html>

<head>
    <?php include('jqm_base_header.php'); ?>
</head>

<body>
    <div data-role="page" class="jqm-demos ui-responsive-panel" id="panel-responsive-page1" data-title="Panel responsive page">

        <div data-role="header">
            <h1>List Mahasiswa</h1>
            <a href="#nav-panel" data-icon="bars" data-iconpos="notext">Menu</a>
            <a href="#add-form" data-icon="gear" data-iconpos="notext">Add</a>
        </div><!-- /header -->

        <div role="main" class="ui-content jqm-content jqm-fullwidth">
        <!-- <?= print_r($mahasiswa); ?> -->
            <p>Note: Jika URL tidak sesuai, tekan tombol refresh</p>
            <form id="add-form" data-ajax="false" action="<?= base_url('list_mhs_with_kls') ?>" method="post">
                <div data-role="fieldcontain">
                    <label for="npm">NPM:</label>
                    <input type="text" name="npm" id="npm">
                </div>
                <div data-role="fieldcontain">
                    <label for="nama">Nama:</label>
                    <input type="text" name="nama" id="nama">
                </div>
                <div data-role="fieldcontain">
                    <label for="kelas_id">Kelas:</label>
                    <select name="kelas_id" id="kelas_id">
                        <?php foreach ($kelas as $k) : ?>
                            <option value="<?= $k['id'] ?>"><?= $k['name'] ?></option>
                        <?php endforeach; ?>
                    </select>
                </div>
                <button type="submit" data-inline="true" data-icon="plus">Add</button>
            </form>
            <?php if ($mahasiswa) : ?>
                <table data-role="table" id="table-mahasiswa" data-mode="columntoggle" class="ui-responsive table-stroke ui-shadow">
                    <thead>
                        <tr>
                            <th data-priority="1">ID</th>
                            <th>NPM</th>
                            <th>Nama</th>
                            <th>Kelas</th>
                            <th>Edit</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php foreach ($mahasiswa as $mhs) : ?>
                            <tr>
                                <td><?= $mhs['id'] ?></td>
                                <td><?= $mhs['npm'] ?></td>
                                <td><?= $mhs['nama'] ?></td>
                                <td><?= $mhs['kelas_name'] ?></td>
                                <td><a href="edit_mhs_with_kls/<?= $mhs['id'] ?>" data-ajax="false" class="ui-btn ui-mini ui-icon-edit ui-btn-icon-left"></a></td>
                            </tr>
                        <?php endforeach; ?>
                    </tbody>
                </table>
            <?php else : ?>
                <center>
                    <tr>
                        <td colspan="4">Data Kosong</td>
                    </tr>
                </center>
            <?php endif; ?>
            <br>
            <a href="../" data-rel="back" data-ajax="false" class="ui-btn ui-shadow ui-corner-all ui-mini ui-btn-inline ui-icon-carat-l ui-btn-icon-left ui-alt-icon ui-nodisc-icon">Back</a>
            <a href="<?= base_url('/list_mhs_with_kls') ?>" data-icon="refresh" data-iconpos="notext" data-ajax="false" class="ui-btn ui-shadow ui-corner-all ui-btn-inline ui-mini">Refresh</a>

        </div><!-- /content -->

        <div data-role="panel" data-display="push" data-theme="b" id="nav-panel">

            <?php include('jqm_side_panel_menu.php'); ?>


        </div><!-- /panel -->

        <div data-role="panel" data-position="right" data-display="reveal" data-theme="a" id="add-form">

            <form class="userform">

                <h2>Login</h2>

                <label for="name">Username:</label>
                <input type="text" name="name" id="name" value="" data-clear-btn="true" data-mini="true">

                <label for="password">Password:</label>
                <input type="password" name="password" id="password" value="" data-clear-btn="true" autocomplete="off" data-mini="true">

                <div class="ui-grid-a">
                    <div class="ui-block-a"><a href="#" data-rel="close" class="ui-btn ui-shadow ui-corner-all ui-btn-b ui-mini">Cancel</a></div>
                    <div class="ui-block-b"><a href="#" data-rel="close" class="ui-btn ui-shadow ui-corner-all ui-btn-a ui-mini">Save</a></div>
                </div>
            </form>

        </div><!-- /panel -->

    </div><!-- /page -->

    <div data-role="page" id="panel-responsive-page2">

        <div data-role="header">
            <h1>Landing page</h1>
        </div><!-- /header -->

        <div role="main" class="ui-content jqm-content">

            <p>This is just a landing page.</p>

            <a href="#panel-responsive-page1" class="ui-btn ui-shadow ui-corner-all ui-btn-inline ui-mini ui-icon-back ui-btn-icon-left">Back</a>

        </div><!-- /content -->

    </div><!-- /page -->

</body>

</html>