<?php 
$student = [
  
            ["nama" => "Asnawi",
              "npm" => "233040001",
              "email" => "asnawiii09090.com ",
              "jurusan" => "Teknik Informatika",  
              "gambar" => "1"         
            ],
            ["nama" => "Pragos cukurukuk",
              "npm" => "233040002",
              "email" => "Pragosscukurukuukk.com ",
              "jurusan" => "Kedokteran",
              "gambar" => "2"
            ],
            ["nama" => "Dodo",
              "npm" => "233040003",
              "email" => "Dodoo@gmail.com ",
              "jurusan" => "Teknik Sipil",  
              "gambar" => "3"           
            ],
            ["nama" => "Asepp",
              "npm" => "233040004",
              "email" => "acepppp09090@gmail.com ",
              "jurusan" => "Hukum",
              "gambar" => "4"
            ],
            ["nama" => "markus",
              "npm" => "233040005",
              "email" => "markuss01@gmail.com ",
              "jurusan" => "Teknik Informatika",
              "gambar" => "5"
            ],
            ["nama" => "Maguire",
              "npm" => "233040006",
              "email" => "maguireee@gmail.com ",
              "jurusan" => "Teknik mesin",
              "gambar" => "6"
            ],
            ["nama" => "Lampard",
              "npm" => "233040007",
              "email" => "Lampard08@gmail.com ",
              "jurusan" => "Teknologi Pangan",
              "gambar" => "7"
            ],
            ["nama" => "Dono",
              "npm" => "233040108",
              "email" => "Dono999@gmail.com ",
              "jurusan" => "Teknik Industri",
              "gambar" => "8"
            ],
             ["nama" => "Ronaldo",
              "npm" => "233040009",
              "email" => "Ronaldo07@gmail.com ",
              "jurusan" => "Teknik Mesin",
              "gambar" => "9"
            ],
            ["nama" => "Messi",
              "npm" => "233040010",
              "email" => "Messi10@gmail.com ",
              "jurusan" => "Twknik Informatika",
              "gambar" => "10"
            ]

            ];
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Daftar Mahasiswa</title>
  <style>
    
    
    .container {
        
        width: 500px;
        height: 2500px;
        background-color: salmon;
        padding: 5px;
        border: 2px solid black;
    }

    h1 {
        font-family: "Rubik";
    }
  </style>
</head>
<body>
    <div class="container"> 
        <h1>Daftar Mahasiswa</h1>
            <?php foreach ($student as $students) : ?>
                <ul>
                    <img src="https://randomuser.me/api/portraits/men/<?= $students['gambar'] ?>.jpg" width="150" height="150">
                    <li>Nama : <?= $students["nama"]; ?></li>
                    <li>NPM : <?= $students["npm"]; ?></li>
                    <li>Email : <?= $students["email"]; ?></li>
                    <li>Jurusan : <?= $students["jurusan"]; ?></li>
                </ul>
            <?php endforeach; ?>
    </div>
</body>
</html> 