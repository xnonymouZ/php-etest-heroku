<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Ethereal</title>
    <link rel="stylesheet" href="//fonts.googleapis.com/css?family=Roboto:300,300italic,700,700italic">
    <link rel="stylesheet" href="//cdn.rawgit.com/necolas/normalize.css/master/normalize.css">
    <link rel="stylesheet" href="//cdn.rawgit.com/milligram/milligram/master/dist/milligram.min.css">
</head>

<body>

    <div class="main-section">

        <div class="container">
            <h2>Server Variables</h2>
            <table>
                <thead>
                    <tr>
                        <th>Variable Name</th>
                        <th>Value</th>
                    </tr>
                </thead>
                <tbody>
                    <?php foreach ($_SERVER as $key => $value) : ?>
                    <tr>
                        <td><?= $key ?></td>
                        <td><?= $value ?></td>
                    </tr>
                    <?php endforeach; ?>
                </tbody>
            </table>
        </div>
        <hr />

        <div class="container">
            <h2>Environment Variables</h2>
            <table>
                <thead>
                    <tr>
                        <th>Variable Name</th>
                        <th>Value</th>
                    </tr>
                </thead>
                <tbody>
                    <?php foreach ($_ENV as $key => $value) : ?>
                    <tr>
                        <td><?= $key ?></td>
                        <td><?= $value ?></td>
                    </tr>
                    <?php endforeach; ?>
                </tbody>
            </table>
        </div>
        <hr />

        <div class="container">
            <h2>INI Settings</h2>
            <table>
                <thead>
                    <tr>
                        <th>Variable Name</th>
                        <th>Global Value</th>
                        <th>Local Value</th>
                        <th>Access Permission</th>
                    </tr>
                </thead>
                <tbody>
                    <?php foreach (ini_get_all() as $key => $value) : ?>
                    <tr>
                        <td><?= $key ?></td>
                        <td><?= $value['global_value'] ?? '<i>null</i>' ?></td>
                        <td><?= $value['local_value'] ?? '<i>null</i>' ?></td>
                        <td><?= $value['access'] ?? '<i>null</i>' ?></td>
                    </tr>
                    <?php endforeach; ?>
                </tbody>
            </table>
        </div>

    </div>
</body>

</html>