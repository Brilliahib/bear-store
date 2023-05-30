<html>
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title></title>
        <link rel="stylesheet" href="css/stylee.css">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
        <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@100;200;300;400;500;600;700;800;900&display=swap" rel="stylesheet">  
      <head>
      
    <body>
      <header>
      </header>
      <div class="wrapper">
            <div class="container text-white">
              <div class="head text-center pb-4">
              <h2 class="container-header text-center text-white fw-bold">Hasil Data</h2>
                <img src="bg-covid.png" alt="">
              </div>
                  <table class="form text-white">
                    <tr>
                      <td>Nama Pasien </td> 
                      <td>: <?php echo $nama = $_POST['nama']; ?></td> 
                    </tr>
                    <tr>
                      <td>Asal</td>
                      <td>: <?php 
                      $asal = $_POST['asal'];
                      if ($asal == 'semarang'){
                        echo "Semarang, anda boleh vaksinasi disini!";
                      } else {
                        echo "Anda bukan asli semarang, tidak boleh vaksin disini!";
                      }
                      ;
                      ?></td>
                    </tr>
                    <tr>  
                      <td>Riwayat Kesehatan</td>                
                      <td>: <?php 
                      $jk = $_POST['jk'];
                      if ($jk == 'laki') {
                          $hasil = "Boneka"; 
                          } else {
                          $hasil = "Mainan";
                          }       
                          echo $hasil;
                      ?></td> 
                    </tr>
                    <tr>
                      <td>Lokasi Vaksin </td>
                        <td> : 
                        <?php 
                        if (isset($_POST['check1'])) {  
                          echo $_POST['check1']." <br/>";  
                            }  
                        if (isset($_POST['check2'])) {  
                          echo $_POST['check2']." <br/>";  
                            }  
                        if (isset($_POST['check3'])) {  
                          echo $_POST['check3']." <br/>";  
                            }  
                        if (isset($_POST['check4'])) {  
                          echo $_POST['check4']." <br/>";  
                            }  
                        ?>
                      </td>
                    </tr>
                    <tr>
                    <?php 
                    for ($i = 1; $i <= 5; $i++) {
                      echo "SELAMAT ANDA BERHASIL MASUK DAN LIHAT HASIL REGISTRASI ANDA! " . "<br>";
                  }?>
                  <td>Daftar Antrian</td>
                  <td>: <?php
                    session_start();
                    $queue = new SplQueue();
                    $queue->enqueue('Ardo,');
                    $queue->enqueue('Budi,');
                    $queue->enqueue('Salman,');
                    $queue->enqueue('Khila,');
                    $queue->enqueue('Nanda,');


                        /////// ENQUEUE ///////
                        if ($_POST['nama'] != NULL) {
                            $data[0] = $_POST['nama'];
                            for ($i = 0; $i < 1; $i++) {
                                if ($data[$i] != null) {
                                    $queue->enqueue($data[$i]);
                                }
                            }

                            $queueSize = $queue->count();
                            for ($i = 0; $i < $queueSize; $i++) {
                                $item = $queue->dequeue();
                                print($item . " ");
                                $queue->enqueue($item);
                            }
                        }

                    ?></td>
                    </tr>
                  </table>
            </div>
      </div>     
     </body>
</html>