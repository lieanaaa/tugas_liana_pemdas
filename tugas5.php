<?php
$data = [
    [
        'inputtrue' => false,
        'input2' => false
    ],
    [
        'inputtrue' => false,
        'input2' => true
    ],
    [
        'inputtrue' => true,
        'input2' => false
    ],
    [
        'inputtrue' => true,
        'input2' => true
    ]
];

function strbool($value)
{
    return $value ? 'true' : 'false';
}
function outputand($a, $b)
{
    if ($a && $b) {
        echo 1;
    } else {
        echo 0;
    }
}
function outputor($a, $b)
{
    if ($a || $b) {
        echo 1;
    } else {
        echo 0;
    }
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tugas Liana</title>
</head>

<body>
    <h1>Table Logika 1111</h1>
    <table border="1">
        <tr>
            <th>Input True</th>
            <th>Input False</th>
            <th>AND</th>
            <th>OR</th>
        </tr>
        <?php
        foreach ($data as $output) { ?>
            <tr>
                <td><?php
                    $inputtrue = $output['inputtrue'];
                    echo strbool($inputtrue);
                    ?></td>
                <td><?php
                    $input2 = $output['input2'];
                    echo strbool($input2);
                    ?></td>
                <td><?php outputand($inputtrue, $input2) ?></td>
                <td><?php outputor($inputtrue, $input2)  ?></td>
            </tr>
        <?php } ?>
    </table>
</body>

</html>






<?php
$data = [
    [
        'input1' => 'Ayo',
        'input2' => 'Belajar'
    ],
    [
        'input1' => 'Bersama',
        'input2' => 'Niomic'
    ]
];
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tugas Liana</title>
</head>

<body>
    <h1>Operator String</h1>
    <table border="1">
        <tr>
            <th>Input 1</th>
            <th>Input 2</th>
            <th>Hasil</th>
        </tr>
        <?php
        foreach ($data as $output) { ?>
            <tr>
                <td><?php echo $input1 = $output['input1'] ?></td>
                <td><?php echo $input2 = $output['input2'] ?></td>
                <td><?php echo $hasil = $input1 . " " . $input2 ?></td>
            </tr>
        <?php } ?>
    </table>
    <br>
    <span>Gabungan :
        <?php
        foreach ($data as $output) { ?>
            <span><?php echo $gabungan =  $output['input1'] . " " . $output['input2'] ?></span>
        <?php } ?>
    </span>
</body>

</html>

