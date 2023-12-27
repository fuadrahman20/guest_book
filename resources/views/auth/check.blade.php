<!-- resources/views/check/index.blade.php -->

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Kode Referensi</title>

    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.2/font/bootstrap-icons.min.css">

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600;700&display=swap" rel="stylesheet">

    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        .container {
            display: flex;
            position: relative;
        }

        .image1 {
            margin-top: -90px;
            margin-left: -100px;
            width: 250px;
            height: 290px;
            z-index: 3;
        }

        .image2 {
            margin-top: 30px;
            margin-left: -118px;
            width: 450px;
            height: 280px;
            position: relative;
            z-index: 2;
        }

        .image3 {
            margin-top: 20px;
            margin-left: 1200px;
            margin-right: 0;
            width: 150px;
            height: 80px;
            position: absolute;
            z-index: 2;
        }

        .image4 {
            margin-top: 365px;
            margin-left: 1040px;
            margin-right: 0;
            width: 320px;
            height: 340px;
            position: absolute;
            z-index: 2;
        }

        .form-container {
            background-color: #f1f1f1;
            border-radius: 20px;
            padding: 20px;
            margin-top: 65px;
            margin-left: 290px;
            width: 480px;
            height: 180px;
            position: relative;
            z-index: 1;
        }

        h2 {
            margin-top: 10px;
            margin-left: 10px;
            text-align: left;
        }

        label {
            display: block;
            margin-top: 20px;
        }

        input {
            width: calc(100% - 20px);
            padding: 10px;
            margin-top: 5px;
            margin-bottom: 15px;
            border: 1px solid #ccc;
            border-radius: 5px;
            box-sizing: border-box;
        }

        button {
            background-color: #336699;
            color: #fff;
            cursor: pointer;
            padding: 10px;
            border: none;
            border-radius: 10px;
            width: 80px;
            height: 45px;
        }
    </style>
</head>
<body>

    <div class="container">
        <img src="{{ asset('images/element17.png') }}" alt="Gambar 1" class="image1">
        <img src="{{ asset('images/gambar4.png') }}" alt="Gambar 2" class="image2">
        <img src="{{ asset('images/element1.png') }}" alt="Gambar 3" class="image3">
        
        <div class="form-container">
            <label for="kode_referensi" style="font-family: poppins, sans-serif;">Kode Referensi</label>
            <input style="font-family: poppins, sans-serif;" type="text" id="kode_referensi" placeholder="Ketik di sini..." />

            <button type="submit" style="font-family: poppins, sans-serif;">Submit</button>
        </div>

        <img src="{{ asset('images/element15.png') }}" alt="Gambar 1" class="image4">

    </div>


    <script>
    document.addEventListener('DOMContentLoaded', function () {
        var referralCode = "{{ session('referral_code') }}";

        if (referralCode) {
            alert('Kode Referral Anda: ' + referralCode);
            // Tambahkan logika pop-up lainnya di sini
        }

        function showPopup() {
        alert('Berhasil!');
    }
    });
    </script>

<!-- check.blade.php -->
@if(session('success'))
    <script>
        showPopup();
    </script>
@endif



    


</body>
</html>

