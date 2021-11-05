// MENGHITUNG ANGKA 7 YANG MUNCUL DARI 100 ANGKA
<?php
$output=0;

for($i=1; $i<100; $i++){
$slptInput = str_split($i);
for($a=0; $a<count($slptInput); $a++){
if($slptInput[$a] == 7){
$output++;
echo $i."<br/>";
}
}
}
echo $output;
?>



//MENCARI ANGKA TERTINGGI DAN TERKECIL
<?php
echo(min(0, 150, 30, 20, -8, -200));  // HASIL -200
echo "<br>";
echo(max(0, 150, 30, 20, -8, -200));  // HASIL 150
?>

//REPLACE HURUF DENGAN ARRAY
<?php
$input = "Saya Fauzi Keren Banget";
$expInput = explode(" ",$input);
//print_r (explode(" ",$input));

$hasil = str_replace("Banget", "sekali", $expInput[3]);

echo $hasil;
?>



//Fizz Buzz dengan PHP
<?php
for($i=1;$i<100;$i++){

    if ($i%3==0 && $i%5==0){
    echo 'FizzBuzz';
    }
	else if($i%3==0){
    echo 'Fizz';
    }
    else if($i%5==0){
    echo 'Buzz';
    }
    else {
    echo $i;
    }
    
    echo"<br>";
    
}
?> 



//MEMBALIK HURUF
<?php
echo strrev("NAITSUGA IZUAF"); // Outputnya adalah = FAUZI AGUSTIAN
?> 


//MENGHITUNG SELISIH HARI
<?php 
$tgl1 = strtotime("2020-01-01"); 
$tgl2 = strtotime("2020-01-20"); 

$jarak = $tgl2 - $tgl1;

$hari = $jarak / 60 / 60 / 24;
echo "Selisih waktu= $hari Hari";
?>





