<?php

$depth1 = array();
$depth2 = array();

// $file = "gnb_temp.csv";
// $openfile = fopen($file, "r");
// $cont = fread($openfile, filesize($file));
// echo $cont;

$file = fopen('gnb_temp.csv', 'r');
$j = 0;
$z = 0;
while (($line = fgetcsv($file)) !== FALSE) {
   
    echo '<pre>';
    print_r($line);
    echo '</pre>';
    if($j == 0){
        for($i = 0; $i < count($line); $i++){
            if($i == 0){
                $depth1[$z] = [0,0];
            }
        }
        $j = 1;
    }else if($j == 1){
        $j = 0;
    }
   
    $z++;
   
}
fclose($file);


// DB 혹은 직접 파일 리스트를 넣음
// $depth1 = [
//     [1000,'depth1'],
//     [2000,'depth2'],
//     [3000,'depth3'],
//     [4000,'depth4'],
//     [5000,'depth5'],
//     [6000,'depth6'],
//     [7000,'depth7'],
//     [8000,'depth8'],
//     [9000,'depth9']
// ];

// $depth2 = [
//     [
//         [1010,'depth1-0'],
//         [1011,'depth1-1'],
//         [1012,'depth1-2'],
//         [1013,'depth1-3'],
//         [1014,'depth1-4'],
//         [1015,'depth1-5'],
//         [1016,'depth1-6'],
//     ],
//     [
//         [1020,'depth2-0'],
//         [1021,'depth2-1'],
//         [1022,'depth2-2'],
//         [1023,'depth2-3'],
//         [1024,'depth2-4'],
//         [1025,'depth2-5'],
//         [1026,'depth2-6'],
//     ],
//     [
//         [1030,'depth3-0'],
//         [1031,'depth3-1'],
//         [1032,'depth3-2'],
//         [1033,'depth3-3'],
//         [1034,'depth3-4'],
//         [1035,'depth3-5'],
//         [1036,'depth3-6'],
//     ],
//     [
//         [1040,'depth4-0'],
//         [1041,'depth4-1'],
//         [1042,'depth4-2'],
//         [1043,'depth4-3'],
//         [1044,'depth4-4'],
//         [1045,'depth4-5'],
//         [1046,'depth4-6'],
//     ],
//     [
//         [1050,'depth5-0'],
//         [1051,'depth5-1'],
//         [1052,'depth5-2'],
//         [1053,'depth5-3'],
//         [1054,'depth5-4'],
//         [1055,'depth5-5'],
//         [1056,'depth5-6'],
//     ],
//     [
//         [1060,'depth6-0'],
//         [1061,'depth6-1'],
//         [1062,'depth6-2'],
//         [1063,'depth6-3'],
//         [1064,'depth6-4'],
//         [1065,'depth6-5'],
//         [1066,'depth6-6'],
//     ],
//     [
//         [1070,'depth7-0'],
//         [1071,'depth7-1'],
//         [1072,'depth7-2'],
//         [1073,'depth7-3'],
//         [1074,'depth7-4'],
//     ],
//     [
//         [1080,'depth8-0'],
//         [1081,'depth8-1'],
//         [1082,'depth8-2'],
//         [1083,'depth8-3'],
//         [1084,'depth8-4'],
//         [1085,'depth8-5'],
//         [1086,'depth8-6'],
//     ],
//     [
//         [1090,'depth9-0'],
//         [1091,'depth9-1'],
//         [1092,'depth9-2'],
//         [1093,'depth9-3'],
//         [1094,'depth9-4'],
//         [1095,'depth9-5'],
//         [1096,'depth9-6'],
//         [1097,'depth9-7'],
//         [1098,'depth9-8'],
//         [1099,'depth9-9'],
//     ],

// ]

?>

<!DOCTYPE html>
<html lang="ko">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>gnb_temp</title>
</head>
<body>
    <ul>
        <?php
        // 1뎁스 루프문
        echo count($depth1);
        for($i = 0; $i < count($depth1); $i++ ){?>
        <li>
            <a href="?code=<?=$depth1[$i][0]?>">
                <?=$depth1[$i][1]?>
            </a>
            <?php if(count($depth2[$i]) !== 0){ ?>
            <ul>
                <?php
                // 2뎁스 루프문
                for($j = 0; $j < count($depth2[$i]); $j++ ){
                ?>
                <li>
                    <a href="?code=<?=$depth2[$i][$j][0]?>"> 
                        <?=$depth2[$i][$j][1]?>
                    </a>
                </li>
                <?php
                }
          
                ?>
            </ul>
            <?php 
            }
            ?>
        </li>
        <?php
        }
        ?>
    </ul>
</body>
</html>
