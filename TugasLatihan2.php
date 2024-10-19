<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Penilaian Mahasiswa</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #6e6868;
            margin: 0;
            padding: 20px;  
        }
   
        .container {
            max-width: 600px;
            margin: auto;
            background: white;
            padding: 20px;
            border-radius: 5px;
            box-shadow: 0 2px 10px rgba(0, 0, 0, 0.1);
        }

        h1 {
            text-align: center;
            color: #333;
        }

        .input-group {
            margin-bottom: 15px;
        }

        label {
            display: block;
            margin-bottom: 5px;
            color: #555;
        }

        input[type="number"] {
            width: 100%;
            padding: 8px;
            border: 1px solid #ccc;
            border-radius: 4px;
        }

        button {
            background-color: #28a745;
            color: white;
            padding: 10px 15px;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            width: 100%;
        }

        button:hover {
            background-color: #218838;
        }

        .status {
            margin-top: 10px;
            font-size: 1.2em;    
        }
    </style>
</head>
<body>
    <div class="container">
        <h1>Penilaian Mahasiswa</h1>
        <form method="post">
            <div class="input-group">
                <label for="nilai1">Nilai Mata Kuliah 1:</label>
                <input type="number" id="nilai1" name="nilai1" required>
            </div>

            <div class="input-group">
                <label for="nilai2">Nilai Mata Kuliah 2:</label>
                <input type="number" id="nilai2" name="nilai2" required>
            </div>

            <div class="input-group">
                <label for="nilai3">Nilai Mata Kuliah 3:</label>
                <input type="number" id="nilai3" name="nilai3" required>
            </div>

            <button type="submit">Submit</button>
        </form>

        <?php
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            $nilai1 = $_POST['nilai1'];
            $nilai2 = $_POST['nilai2'];
            $nilai3 = $_POST['nilai3'];

            $rataRata = ($nilai1 + $nilai2 + $nilai3) / 3;

            echo "<h2>Hasil Penilaian:</h2>";
            echo "Nilai Rata-rata: " . number_format($rataRata, 2) . "<br>";
            echo "<div class='status'>";
            if ($rataRata >= 60) {
                echo "Status    : Lulus";
            } else {
                echo "Status    : Tidak Lulus";
            }
            echo "</div>";
        }
        ?>
    </div>
</body>
</html>