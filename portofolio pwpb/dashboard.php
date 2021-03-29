<?php
include 'koneksi.php';
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous" />

    <title>Hello, world!</title>
    <style>
.jumbotron {
  padding-top: 5%;
  background-color: #2bcbba;
}
.glombang {
  margin-top: -5%;
}
#galery {
  background-color: #2bcbba;
}

    </style>
  </head>
  <body>
  <nav class="navbar navbar-expand-lg navbar-dark sticky-top" style="background-color: #0fb9b1;">
      <div class="container">
        <a class="navbar-brand" href="#">Sufianto </a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
          <ul class="navbar-nav ms-auto">
            <li class="nav-item">
              <a class="nav-link active" aria-current="page" href="#">Home</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#about">About</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#galery">Gallery</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#contact">Contact</a>
            </li>
          </ul>
        </div>
      </div>
      <a type="button" class="btn btn-light me-3" href="admin.php">admin</a>
    </nav>

    <?php
                        
                        $id = mysqli_query($connect,'SELECT * FROM profil ORDER BY profil.id');
                        while ($prdk = mysqli_fetch_array($id)){
                            $idp = $prdk['id'];

                        ?>

    <section class="jumbotron text-center pb-3" >
      <img src="<?php echo $prdk['gambar_profil'] ?>" alt="" width="200" height="190" class="rounded-circle" />
      <h1 class="display-4"><?php echo $prdk['nama_profil'] ?></h1>
      <p class="lead" id="about"><?php echo $prdk['isi_profil'] ?></p>
    </section>

    <?php
                        }
                        ?>

    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320"><path fill="#2bcbba" fill-opacity="1" d="M0,160L13.3,181.3C26.7,203,53,245,80,256C106.7,267,133,245,160,240C186.7,235,213,245,240,218.7C266.7,192,293,128,320,138.7C346.7,149,373,235,400,229.3C426.7,224,453,128,480,112C506.7,96,533,160,560,176C586.7,192,613,160,640,133.3C666.7,107,693,85,720,112C746.7,139,773,213,800,245.3C826.7,277,853,267,880,245.3C906.7,224,933,192,960,197.3C986.7,203,1013,245,1040,224C1066.7,203,1093,117,1120,112C1146.7,107,1173,181,1200,208C1226.7,235,1253,213,1280,202.7C1306.7,192,1333,192,1360,192C1386.7,192,1413,192,1427,192L1440,192L1440,0L1426.7,0C1413.3,0,1387,0,1360,0C1333.3,0,1307,0,1280,0C1253.3,0,1227,0,1200,0C1173.3,0,1147,0,1120,0C1093.3,0,1067,0,1040,0C1013.3,0,987,0,960,0C933.3,0,907,0,880,0C853.3,0,827,0,800,0C773.3,0,747,0,720,0C693.3,0,667,0,640,0C613.3,0,587,0,560,0C533.3,0,507,0,480,0C453.3,0,427,0,400,0C373.3,0,347,0,320,0C293.3,0,267,0,240,0C213.3,0,187,0,160,0C133.3,0,107,0,80,0C53.3,0,27,0,13,0L0,0Z"></path></svg>
    
    <?php
                        
                        $id = mysqli_query($connect,'SELECT * FROM about ORDER BY about.id');
                        while ($prdk = mysqli_fetch_array($id)){
                            $idp = $prdk['id'];

                        ?>
    
    <section >
      <div class="container">
        <div class="row text-center">
          <div class="col fs-3 pt-3">About Me</div>
        </div>
        <div class="row text-justify pt-4 justify-content-center">
          <div class="col-md-5 fs-5 mb-4"><?php echo $prdk['isi1'] ?></div>

          <!-- <div class="col-md-5 fs-5"><?php echo $prdk['isi2'] ?></div> -->
        </div>
      </div>
      <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320"><path fill="#2bcbba" fill-opacity="1" d="M0,160L13.3,181.3C26.7,203,53,245,80,256C106.7,267,133,245,160,240C186.7,235,213,245,240,218.7C266.7,192,293,128,320,138.7C346.7,149,373,235,400,229.3C426.7,224,453,128,480,112C506.7,96,533,160,560,176C586.7,192,613,160,640,133.3C666.7,107,693,85,720,112C746.7,139,773,213,800,245.3C826.7,277,853,267,880,245.3C906.7,224,933,192,960,197.3C986.7,203,1013,245,1040,224C1066.7,203,1093,117,1120,112C1146.7,107,1173,181,1200,208C1226.7,235,1253,213,1280,202.7C1306.7,192,1333,192,1360,192C1386.7,192,1413,192,1427,192L1440,192L1440,320L1426.7,320C1413.3,320,1387,320,1360,320C1333.3,320,1307,320,1280,320C1253.3,320,1227,320,1200,320C1173.3,320,1147,320,1120,320C1093.3,320,1067,320,1040,320C1013.3,320,987,320,960,320C933.3,320,907,320,880,320C853.3,320,827,320,800,320C773.3,320,747,320,720,320C693.3,320,667,320,640,320C613.3,320,587,320,560,320C533.3,320,507,320,480,320C453.3,320,427,320,400,320C373.3,320,347,320,320,320C293.3,320,267,320,240,320C213.3,320,187,320,160,320C133.3,320,107,320,80,320C53.3,320,27,320,13,320L0,320Z"></path></svg>
    </section>

    <?php
                        }
                        ?>

    <section id="galery">
      <div class="container">
        <div class="row text-center">
          <div class="col fs-3 mb-5">My Project</div>
        </div>
         <div class="card-group justify-content-evenly text-center">
                        
                        <?php
                        
                        $id = mysqli_query($connect,'SELECT * FROM tbl_galery ORDER BY tbl_galery.id_galery');
                        while ($prdk = mysqli_fetch_array($id)){
                            $idp = $prdk['id_galery'];

                        ?>

                          <div class="col-md-4 mb-5">
                            <a href="dashboard.php?id=<?php echo $prdk['id_galery']; ?>" style="text-decoration: none; color: black;">
                                <div class="card m-2 shadow-sm" style="width: 300px;height:250px;">
                                    <img src="<?php echo $prdk['gambar_galery'] ?>" style="height:150px; width:100%;" alt="Gambar">
                                    <div class="card-body">
                                        <h5 class="card-title fw-bold" style="margin-top:-5%;"><?php echo $prdk['nama_galery'] ?></h5>
                                        <p class="card-text" style="margin-top:%;"><?php echo $prdk['about_galery'] ?></p>
                                    </div>
                                </div>
                            </a>
                            </div>
                            <?php
                        }
                        ?>
                            
                        </div>
        </div>
        </div>
      </div>           
      
    </section>
    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320"><path fill="#2bcbba" fill-opacity="1" d="M0,160L13.3,181.3C26.7,203,53,245,80,256C106.7,267,133,245,160,240C186.7,235,213,245,240,218.7C266.7,192,293,128,320,138.7C346.7,149,373,235,400,229.3C426.7,224,453,128,480,112C506.7,96,533,160,560,176C586.7,192,613,160,640,133.3C666.7,107,693,85,720,112C746.7,139,773,213,800,245.3C826.7,277,853,267,880,245.3C906.7,224,933,192,960,197.3C986.7,203,1013,245,1040,224C1066.7,203,1093,117,1120,112C1146.7,107,1173,181,1200,208C1226.7,235,1253,213,1280,202.7C1306.7,192,1333,192,1360,192C1386.7,192,1413,192,1427,192L1440,192L1440,0L1426.7,0C1413.3,0,1387,0,1360,0C1333.3,0,1307,0,1280,0C1253.3,0,1227,0,1200,0C1173.3,0,1147,0,1120,0C1093.3,0,1067,0,1040,0C1013.3,0,987,0,960,0C933.3,0,907,0,880,0C853.3,0,827,0,800,0C773.3,0,747,0,720,0C693.3,0,667,0,640,0C613.3,0,587,0,560,0C533.3,0,507,0,480,0C453.3,0,427,0,400,0C373.3,0,347,0,320,0C293.3,0,267,0,240,0C213.3,0,187,0,160,0C133.3,0,107,0,80,0C53.3,0,27,0,13,0L0,0Z"></path></svg>
    <section id="contact">
      <div class="container">
          <div class="row text-center">
            <div class="col fs-3">Contact</div>
          </div>
          

        <div class="row justify-content-center">
          <div class="col-md-7">
            <form action="simpanpesan.php" method="POST">

              <div class="mb-3">
                <label for="name" class="form-label">Nama Anda</label>
                <input type="text" class="form-control" name="nama_user" id="nama_user" aria-describedby="name">
              </div>

              <div class="mb-3">
                <label for="email" class="form-label">Email</label>
                <input type="email" class="form-control" name="email_user" id="email_user" aria-describedby="email">
              </div>

              <div class="mb-3">
                <label for="pesan" class="form-label">Pesan</label>
                <textarea class="form-control" id="pesan_user" name="pesan_user" rows="3"></textarea>
              </div>

              <button type="submit" name="simpanpesan" class="btn" style="background-color: #0fb9b1 ; color: white;">Kirim</button>
            </form>
          </div>
        </div>
      </div>
      </section>

      <footer style="background-color:#0fb9b1;">
        <div class=" text-white  mt-5" style="background-color:#0fb9b1;">
          
          <div class="card-header">Footer</div>
          <div class="card-body">
            <ul>
              <li><a href=""></a>Sufianto Ahmad A</li>
              <!-- <li><a href=""></a>portal</li> -->
            </ul>
          </div>
        </div>
      </footer>


    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.bundle.min.js" integrity="sha384-b5kHyXgcpbZJO/tY9Ul7kGkf1S0CWuKcCD38l8YkeH8z8QjE0GmW1gYU5S9FOnJ0" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.6.0/dist/umd/popper.min.js" integrity="sha384-KsvD1yqQ1/1+IA7gi3P0tyJcT3vR+NdBTt13hSJ2lnve8agRGXTTyNaBYmCR/Nwi" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.min.js" integrity="sha384-nsg8ua9HAw1y0W1btsyWgBklPnCUAFLuTMS2G72MMONqmOymq585AcH49TLBQObG" crossorigin="anonymous"></script>
    -->
  </body>
</html>
