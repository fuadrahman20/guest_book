@extends('layouts.master')
@section('content')

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Pendaftaran</title>

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
        }

        .form-container {
            display: flex;
            border-radius: 15px;
            overflow: hidden;
            margin: 20px;
            background-color: #f1f1f1;
            width: 500px;
        }

        .image-container {
            flex: 1;
            display: flex;
            padding: 20px;
        }

        .form-section {
            flex: 2;
            padding: 20px;
        }

        .form-section input,
        .form-section select,
        .form-section textarea,
        .form-section button {
            width: 100%;
            padding: 10px;
            margin-bottom: 15px;
            border: 1px solid #ccc;
            border-radius: 5px;
            box-sizing: border-box;
        }

        .form-section button {
            background-color: #336699;
            color: #fff;
            cursor: pointer;
        }

        .form-section button:hover {
            background-color: #1a4570;
        }

        .check-button {
            background-color: #336699;
            color: #fff;
            cursor: pointer;
            border: none;
            padding: 10px;
            border-radius: 5px;
        }

        .check-button:hover {
            background-color: #1a4570;
        }

    </style>
</head>
<body>

    <div class="container">

       <div class="image-container">                                                                                                                                                                                    
            <!-- Gambar 1 -->
            <img src="{{ asset('images/element14.png') }}" alt="Gambar 1" style="width: 70%; height: 75%; margin-bottom: 10px; margin-left: -170px; margin-top: -80px;">

            <!-- Gambar 2 -->
            <img src="{{ asset('images/gambar3.png') }}" alt="Gambar 2" style="width: 65%; height: 60%; margin-bottom: 10px; margin-left: -130px; margin-top: -250;">

            <!-- Gambar 3 -->
            <img src="{{ asset('images/element15.png') }}" alt="Gambar 3" style="width: 80%; height: 80%; margin-left: -130px; margin-top: -250px;">
        </div>


        <div class="form-container">

            <div class="form-section">
                <form method="POST" action="{{ route('submit-form') }}">
                    @csrf
                    <div style="display: flex; justify-content: space-between;">
                        <div>
                           <label for="nama" style="font-family: poppins, sans-serif;">Nama Pendaftar</label>
                           <input style="font-family: poppins, sans-serif;" type="text" name="nama" id="nama" placeholder="Type here..." style="background-color: #fff;">
                        </div>

                        <div>
                           <label for="jumlah_tamu" style="font-family: poppins, sans-serif;">Jumlah Tamu</label>
                           <input style="font-family: poppins, sans-serif;" type="text" name="jumlah_tamu" id="jumlah_tamu" style="background-color: #fff;">
                        </div>
                    </div>

                    <div style="display: flex; justify-content: space-between;">
                        <div>
                            <label for="tanggal_mulai" style="font-family: poppins, sans-serif;">Tanggal Mulai</label>
                            <input style="font-family: poppins, sans-serif;" type="date" name="tanggal_mulai" id="tanggal_mulai" placeholder="hh/bb/tttt">
                        </div>
                        <div>
                            <label for="tanggal_selesai" style="font-family: poppins, sans-serif;">Tanggal Selesai</label>
                            <input style="font-family: poppins, sans-serif;" type="date" name="tanggal_selesai" id="tanggal_selesai" placeholder="hh/bb/tttt">
                        </div>
                    </div>

                    <label for="domisili" style="font-family: poppins, sans-serif;">Domisili</label>
                    <select name="domisili" id="domisili">
                    <option value="select" style="font-family: poppins, sans-serif;">Select</option>
                    <option value="dalam_kota" style="font-family: poppins, sans-serif;">Dalam Kota</option>
                    <option value="luar_kota" style="font-family: poppins, sans-serif;">Luar Kota</option>
                    </select>

                    <div style="display: flex; justify-content: space-between;">

                        <div>
                           <label for="tujuan" style="font-family: poppins, sans-serif;">Tujuan</label>
                           <select name="tujuan" id="tujuan">
                           <option value="select" style="font-family: poppins, sans-serif;">Select</option>
                           <option value="kunjungan_industri" style="font-family: poppins, sans-serif;">Kunjungan Industri</option>
                           <option value="kunjungan_kedinasan" style="font-family: poppins, sans-serif;">Kunjungan Kedinasan</option>
                           <option value="lainnya" style="font-family: poppins, sans-serif;">Lainnya</option>
                           </select>
                        </div>

                        <div>
                            <label for="staff" style="font-family: poppins, sans-serif;">Staff (Optional)</label>
                            <select name="staff" id="staff">
                                <option value="select" style="font-family: poppins, sans-serif;">Select</option>
                                <option value="staff1" style="font-family: poppins, sans-serif;">Staff 1</option>
                            </select>
                        </div>
                    </div>


                    <label for="keterangan" style="font-family: poppins, sans-serif;">Keterangan</label>
                    <textarea name="keterangan" id="keterangan" placeholder="Type here..."></textarea>

                    <div style="display: flex; justify-content: space-between;">
                    <button type="submit" style="font-family: poppins, sans-serif;">Submit</button>

                    <button class="check-button">
                        <a href="{{ route('check') }}" style="text-decoration: none; color: white; font-family: poppins, sans-serif;">Check</a>
                    </button>
                    </div>
                </form>
            

            </div>
        </div>
        

    </div>
    

</body>
</html>
@endsection
