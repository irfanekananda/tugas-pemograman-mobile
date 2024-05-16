<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Panel responsive - jQuery Mobile Demos</title>
    <link rel="stylesheet" href="<?= base_url('/css/themes/default/jquery.mobile-1.4.5.min.css') ?>">
    <link rel="stylesheet" href="<?= base_url('/_assets/css/jqm-demos.css') ?>">
    <link rel="shortcut icon" href="<?= base_url('/favicon.ico') ?>">
    <link rel="stylesheet" href="http://fonts.googleapis.com/css?family=Open+Sans:300,400,700">

    <script src="<?= base_url('/js/jquery.js') ?>"></script>
    <script src="<?= base_url('/_assets/js/index.js') ?>"></script>
    <script src="<?= base_url('/js/jquery.mobile-1.4.5.min.js') ?>"></script>
</head>

<body>
    <div data-role="page" class="jqm-demos ui-responsive-panel" id="panel-responsive-page1" data-title="Panel responsive page">

        <div data-role="header">
            <h1>Panel responsive</h1>
            <a href="#nav-panel" data-icon="bars" data-iconpos="notext">Menu</a>
            <a href="#add-form" data-icon="gear" data-iconpos="notext">Add</a>
        </div><!-- /header -->

        <div role="main" class="ui-content jqm-content jqm-fullwidth">
            <form id="add-form" data-ajax="false" action="<?= base_url('mahasiswa') ?>" method="post">
                <div data-role="fieldcontain">
                    <label for="npm">NPM:</label>
                    <input type="text" name="npm" id="npm">
                </div>
                <div data-role="fieldcontain">
                    <label for="nama">Nama:</label>
                    <input type="text" name="nama" id="nama">
                </div>
                <div data-role="fieldcontain">
                    <label for="alamat">Alamat:</label>
                    <textarea name="alamat" id="alamat"></textarea>
                </div>
                <button type="submit" data-inline="true" data-icon="plus">Add</button>
                <button type="reset" data-inline="true" data-icon="delete">Cancel</button>
            </form>
            <table data-role="table" id="table-mahasiswa" data-mode="columntoggle" class="ui-responsive table-stroke ui-shadow">
                <thead>
                    <tr>
                        <th data-priority="1">ID</th>
                        <th>NPM</th>
                        <th>Nama</th>
                    </tr>
                </thead>
                <tbody>
                    <?php if ($mahasiswa) : ?>
                        <?php foreach ($mahasiswa as $mhs) : ?>
                            <tr>
                                <td><?= $mhs['id'] ?></td>
                                <td><?= $mhs['npm'] ?></td>
                                <td><?= $mhs['nama'] ?></td>
                            </tr>
                        <?php endforeach; ?>
                    <?php else : ?>
                        <tr>
                            <td colspan="4">Data Kosong</td>
                        </tr>
                    <?php endif; ?>
                </tbody>
            </table>

            <a href="../" data-rel="back" data-ajax="false" class="ui-btn ui-shadow ui-corner-all ui-mini ui-btn-inline ui-icon-carat-l ui-btn-icon-left ui-alt-icon ui-nodisc-icon">Back</a>

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