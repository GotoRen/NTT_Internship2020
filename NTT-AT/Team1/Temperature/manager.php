<?php


/* 変数初期化 */
$selectDate = NULL;
$label = NULL;
$data1 = NULL;
$data2 = NULL;


echo $_POST["fact"];
/* CSVファイル読み込み */
if($_POST["fact"] == "工場A"){
	$csvFile = "../data/c0961c722405.csv";
}else{
	$csvFile = "../data/fcc142466ffe.csv";
}

echo $csvFile;
/* インスタンス化 */
$csvData = new SplFileObject($csvFile);
$csvData->setFlags(SplFileObject::READ_CSV);


/* 選択した日付取得 */
if(isset($_POST['calendar'])){
	$selectDate = $_POST['calendar'];
}

/* タイムゾーン設定 */
date_default_timezone_set('Asia/Tokyo');

/* 日付未選択時は当日を表示対象とする */
if(is_null($selectDate)){
	$selectDate = date('Y-m-d');
}

/* CSVファイルを一行ごとに読み込む */
foreach ($csvData as $line){
	// データ未存在は処理しない
    if(!is_null($line[0]) && isset($line[3]) ){
		// 該当日付けのみ処理する
		if($selectDate == substr($line[1], 0, 10)){
			// 日付
            $label = $label . substr($line[1], 0, 16) . "','";
			// 湿度
            $data1 = $data1 . $line[2] . "','";
			// 温度
            $data2 = $data2 . $line[3] . "','";
        }
        //echo $label;
		//echo $data1;
		//echo $data2;
	}
}

/* 表示用に整形 */
$label = substr($label, 0, -3);
$data1 = substr($data1, 0, -3);
$data2 = substr($data2, 0, -3);


?>


<!DOCTYPE html>
<html lang="ja">
<head>
<meta charset="UTF-8">
<title><?php echo $selectDate; ?></title>
<script type="text/javascript" src="../js/Chart.bundle.min.js"></script>
<script type="text/javascript" src="../js/jquery.min.js"></script>
<script type="text/javascript" src="../js/jquery-ui.min.js"></script>
<script type="text/javascript" src="../js/jquery.ui.datepicker-ja.min.js"></script>
<link rel="stylesheet" href="../css/jquery-ui.css">
<link rel="stylesheet" href="../css/graph.css">
</head>

<body>
    <div id="wrapper">
        <div>
            <h3><?php echo $selectDate; ?></h3>
        </div>
        <form method="post">
            日付選択: <input type="text" id="calendar" name="calendar" />
            <input type="submit" value="表示" />
        </form>
    </div>
    <div>
        <canvas id="canvas"></canvas>
    </div>
    <div class="container" style="width:100%"></div>

<script>
window.onload = function() {
    $.datepicker.setDefaults($.datepicker.regional["js"]); 
    $("#calendar").datepicker({
	    dateFormat: "yy-mm-dd",   
	    onSelect: function(selectedDate){
	        /* 選択した日付をフォームにセット */
	        $(':text[name="calendar"]').val(selectedDate);	
	    }
    });
    /* グラフの描画 */
    ctx = document.getElementById("canvas").getContext("2d");
    window.myBar = new Chart(ctx, {
        type: 'line',
        data: barChartData,
        options: complexChartOption
    });
};
</script>

<script>
/* データをセットする */
var barChartData = {
labels: ['<?php echo $label; ?>'],
    datasets: [
    {
        type: 'line',
        label: '湿度',
	data: ['<?php echo $data1; ?>'],
        borderColor             : "rgba(254,97,132,0.8)",
        pointBackgroundColor    : "rgba(254,97,132,0.8)",
        fill                    : false,
    },
    {
        type: 'line',
        label: '温度',
	data: ['<?php echo $data2; ?>'],
        borderColor             : "rgba(54,164,235,0.8)",
        pointBackgroundColor    : "rgba(254,97,132,0.8)",
        fill                    : false,
    },
    ],
};
</script>

<script>
var complexChartOption = {
    responsive: true,
    scales: {
        yAxes: [{
            type: "linear",
            position: "left",
            ticks: {
                min: 20,
            },
        }
        ],
    }
};
</script>

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