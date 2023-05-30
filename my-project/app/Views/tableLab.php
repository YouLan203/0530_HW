<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= esc($title) ?></title>
</head>
<body>
    <h1><?= esc($heading) ?></h1>

    <table>
        <thead>
            <tr>
                <th>Time Used</th>
                <th>Step</th>
                <th>Description</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($todo_list as $thing => $week_list) : ?> <!--謝謝小老師一邊看我撞牆寫出他也出現過的錯誤-->
                <tr>
                    <td><?= esc($thing) ?></td>
                    <?php foreach ($week_list as $item) : ?>
                        <td><?= esc($item) ?></td>
                    <?php endforeach ?>
                </tr>
            <?php endforeach ?>
        </tbody>
    </table>
</body>
</html>