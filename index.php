<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Test logika</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
  </head>
  <body>
    <div class="container">
        <h2 class="text-center mt-5 "><a href="http://mldnfaqih.epizy.com/" class="text-dark" target="_blank">Mauludin Faqih</a> </h3>
        <div class="card m-5 p-5">
            <!--Soal No.1-->
            <p class="">1. Buatkan fungsi untuk memeriksa apakah sebuah bilangan adalah bilangan prima</p>
            <div class="ms-4">
                <?php
                    for($a=1;$a<=50;$a++){ 
                        $k=0;
                        for($b=1;$b<=$a;$b++){ 
                            if($a % $b == 0){ 
                                $k++;
                            }
                        }
                        if($k == 2){ 
                            echo $a.', ';
                        }
                    }
                ?>
            </div>

            <!--Soal No.2-->
            <p class="mt-3">2. Buatkan fungsi untuk menentukan bilangan terbesar dari sederet bilangan dalam array (11, 6, 31, 201, 99, 861, 1, 7, 14, 79)</p>
            <div class="ms-4">
                <?php
                    $bilangan = array(11, 6, 31, 201, 99, 861, 1, 7, 14, 79);
                    $len = 0;

                    foreach ($bilangan as $bil) {
                        $len = $len + 1 ;
                    }

                    $max = $bilangan[0];
                    for($i=1; $i<$len; $i++){
                        if($bilangan[$i] > $max) {
                            $max = $bilangan[$i];
                        }
                    }
                    echo "$max"
                ?>
            </div>

            <!--Soal No.3-->
            <p class="mt-3">3. Buatkan fungsi yang dapat menghasilkan format </p>
            <div class="ms-4">
                <?php 
                    function deret_angka($jumlah){
                        $angka_pertama = 1;
                        $angka_kedua = 1;
                
                        $hasil = "$angka_kedua";
                        for ($i=0; $i<$jumlah-1; $i++) {

                            $output = $angka_kedua + $angka_pertama;
                            $hasil = $hasil."$output";

                            $angka_pertama = $angka_pertama;
                            $angka_pertama = $output;
                        }
                        return $hasil;
                    }
                    function piramida($tingkat){
                        for($i=1; $i<$tingkat+1; $i++){
                            echo deret_angka($i);
                            echo "<br>";
                        }
                    }
                    piramida(8);
                ?>
            </div>

            <!--Soal No.4-->
            <p class="mt-3">4. Dengan menggunakan teknik bubble sorting, urutkan bilangan array (99, 2, 64, 8, 111, 33, 65, 11, 102, 50); </p>
            <div class="ms-4">
                <?php 
                function bubblesort(&$Array, $n) {
                    $temp;
                    for($i=0; $i<$n; $i++) {
                        for($j=0; $j<$n-$i-1; $j++) {
                            if($Array[$j]>$Array[$j+1]) {
                                $temp = $Array[$j];
                                $Array[$j] = $Array[$j+1];
                                $Array[$j+1] = $temp;
                            }
                        }
                    }
                }
                function PrintArray($Array, $n) { 
                    for ($i = 0; $i < $n; $i++) 
                    echo $Array[$i]." ";
                    echo "\n"; 
                } 
                // test the code
                $bilangan = array(99, 2, 64, 8, 111, 33, 65, 11, 102, 50);

                $n = sizeof($bilangan); 
                bubblesort($bilangan, $n);
                PrintArray($bilangan, $n);

                ?>
            </div>

            <!--Soal No.4-->
            <p class="mt-3">5. Buatkan fungsi untuk menghasilkan output berikut: </p>
            <div class="ms-4">
                <?php
                    class Perulangan{ 

                        function tampilUlang(){ 
                            for( $i = 1; $i<=10; $i+=4 ) { 
                                echo ' '.$i;
                            }
                            echo '<br>';
                            for( $i = 2; $i<=10; $i+=4 ) { 
                                echo ' '.$i;
                            }
                            echo '<br>';
                            for( $i = 3; $i<=12; $i+=4 ) { 
                                echo ' '.$i;
                            }
                            echo '<br>';
                            for( $i = 4; $i<=12; $i+=4 ) { 
                                echo ' '.$i;
                            }
                        }
                    }

                    $ulang = new Perulangan();  
                    $ulang->tampilUlang(); 

                ?>
            </div>
        </div>
    </div>
    
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>
  </body>
</html>
