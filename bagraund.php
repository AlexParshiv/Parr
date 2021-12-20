<?php
include 'time.php'
?>
<head>
    <link rel="stylesheet"><?php
    if(CompareTime (timeSet:"20-00") == 1 || CompareTime (timeSet:"8-00") == -1){
        echo hrev="style/style1.css";
        }
    else {
        echo hrev="style/style.css";
    }
    ?>
</head>
