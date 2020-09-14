<!DOCTYPE html>
<html lang="ja"></html>
<head>
    <meta charset="UTF-8">
    <link href="https://fonts.googleapis.com/css?family=Homemade+Apple rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="style.css">
    <title>pulldown.php</title>
</head>
<body>
    <tr>
        <td>
            温度設定
            <select name="temperature" id="temperature">
            <?php
            $temperature = array('-10', '-9', '-8', '-7', '-6', '-5', '-4',
            '-3','-2','-1', '+1','+2', '+3', '+4','+5',' +6',
             '+7','+8','+9','+10');
             foreach($temperature as $out) {
                print('<option value="' . $temperature . '">' . $out . ' ℃' . '</option>');
                }
            ?>
            </select>
        </td>
        &emsp;&emsp;
        <td>
            湿度設定
            <select name="humidity" id="humidity">
            <?php
            $humidity = array('-10', '-9', '-8', '-7', '-6', '-5', '-4',
            '-3','-2','-1', '+1','+2', '+3', '+4','+5',' +6',
             '+7','+8','+9','+10');
             foreach($humidity as $out) {
                print('<option value="' . $humidity . '">' . $out . ' %' . '</option>');
                }
            ?>
            </select>
        </td>
    <tr>
</body>        
</html>