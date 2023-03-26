<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css" >
    <title>BOX MOVIES</title>
   
</head>
<body>
<?php
        if(isset($_POST['cari'])){
            $judul = $_POST['judul'];
            echo "<h1>Hasil Pencarian</h1>";
        
            $url = 'http://www.omdbapi.com/?apikey=b893c632&s="'.$judul.'"';

           //Akses API dengan CURL
            $ch = curl_init();
            curl_setopt($ch, CURLOPT_URL, $url);
            curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
            $output = curl_exec($ch);
            curl_close($ch);

            // var_dump($output);
            $data = json_decode($output, TRUE);
            // $data = $data['Search'];
            
            foreach ($data['Search'] as $movie) {
                
                echo "\n <p>Judul: ".$movie["Title"]."</p>";
                echo "<p>Tahun: ".$movie["Year"]."</p>";
                echo '<img src= "'.$movie['Poster'].'">';
            }    
        }

        ?> 
        
  <header>
  <nav class="navbar navbar-light" style="background-color: red">

  <h3>DISNEY MOVIES</h3>
    <form method="post" action="index.php">
        <input type="text" name="judul"></input>
        <input type="submit" value="Search" name="cari"></input>
     
    </form>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav ms-0">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="#">Home</a>
        </li>  
      </ul>
    </div>
  </div>
</nav>
</header>
<div class="container">
<div class="row mt-2 text-center">
  <div class="col">
<h1>POPULER</h1>
</div>
</div>

    
<div class="row row-cols-1 row-cols-md-3 g-4">
  <div class="col">
    <div class="card">
      <img src="frozen.jpg" class="card-img-top" height="350px">
      <div class="card-body">
        <h5 class="card-title">Frozen</h5>
        <p class="card-text">Film ini menceritakan tentang seorang princess yang memiliki kekuatan untuk menciptakan dan mengontrol es, dan adiknya yang tidak memiliki kekuatan apa-apa tapi berhati hangat yang bisa meluluhkan es di hati kakaknya</p>
      </div>
    </div>
  </div>
  <div class="col">
    <div class="card">
      <img src="beauty.jpg" class="card-img-top" height="350px">
      <div class="card-body">
        <h5 class="card-title">Beauty And The Beast</h5>
        <p class="card-text">Belle si gadis desa pergi ke sebuah kastil untuk menyelamatkan sang ayah. Seiring berjalannya waktu, ia mengetahui bahwa makhluk mengerikan yang menangkap ayahnya adalah pangeran tampan yang dikutuk.</p>
      </div>
    </div>
  </div>
  <div class="col">
    <div class="card">
      <img src="cinderella.jpg" class="card-img-top" height="350px">
      <div class="card-body">
        <h5 class="card-title">Cinderella</h5>
        <p class="card-text">Sepeninggal ayahnya, hidup Ella merana akibat perlakuan kejam dan licik dari Ibu dan kedua saudari tirinya. Harapan mulai merekah ketika ia tak sengaja bertemu sesosok pria tampan-berwibawa di hutan.</p>
      </div>
    </div>
  </div>
  <div class="col">
    <div class="card">
      <img src="Maleficent.jpg" class="card-img-top" height="350px">
      <div class="card-body">
        <h5 class="card-title">Maleficent</h5>
        <p class="card-text">Maleficent adalah sosok peri baik hati, yang dikhianati oleh kekasih hatinya, Stefan. Tak lama lagi, ia akan memberi kutukan pada putrinya, Aurora, dalam rangka untuk membalas rasa haus akan keadilan.</p>
      </div>
    </div>
  </div>
  <div class="col">
    <div class="card">
      <img src="tangled.jpg" class="card-img-top" height="350px">
      <div class="card-body">
        <h5 class="card-title">Tangled</h5>
        <p class="card-text">Dikisahkan, Rapunzel yang sedari kecil sudah diculik oleh seorang wanita tua licik, kini sudah bertumbuh besar dan sadar tentang dunia luar; hal yang sama sekali tidak boleh ia lakukan atau sentuh oleh ‘Ibu’nya. Namun ketekadan hatinya yang membuat ia melanggar semua dan akhirnya mengetahui keadaan sebenarnya tentang hidup Rapunzel.</p>
      </div>
    </div>
  </div>
  <div class="col">
    <div class="card">
      <img src="aladdin.jpg" class="card-img-top" height="350px">
      <div class="card-body">
        <h5 class="card-title">Aladdin</h5>
        <p class="card-text">Aladdin, seorang anak jalanan yang jatuh cinta pada seorang putri. Dengan perbedaan kasta dan harta, Aladdin pun berusaha mencari jalan agar bisa mejadi seorang pangeran, tak disangka ia menemukan lampu dengan jin di dalamnya. Aladdin pun menggunakan lampu untuk mengubah dirinya menjadi seorang pangeran untuk memenangkan hati Putri Jasmine, tapi Wazir jahat juga mengejar lampu tersebut untuk menguasai kerajaan.</p>
      </div>
    </div>
  </div>
  
    </div>
   
   
  

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

</body>
</html>
