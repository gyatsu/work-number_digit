<?php
echo "数字を入力してください!\n";
$n = fgets(STDIN);
$num = rtrim($n);
echo "入力した数字の桁数は".strlen($num)."桁です\n";