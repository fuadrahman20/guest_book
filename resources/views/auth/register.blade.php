@extends('layouts.master')
@section('content')

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Pendaftaran</title>
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
                           <label for="nama">Nama Pendaftar</label>
                           <input type="text" name="nama" id="nama" placeholder="Type here..." style="background-color: #fff;">
                        </div>

                        <div>
                           <label for="jumlah_tamu">Jumlah Tamu</label>
                           <input type="text" name="jumlah_tamu" id="jumlah_tamu" style="background-color: #fff;">
                        </div>
                    </div>

                    <div style="display: flex; justify-content: space-between;">
                        <div>
                            <label for="tanggal_mulai">Tanggal Mulai</label>
                            <input type="date" name="tanggal_mulai" id="tanggal_mulai" placeholder="hh/bb/tttt">
                        </div>
                        <div>
                            <label for="tanggal_selesai">Tanggal Selesai</label>
                            <input type="date" name="tanggal_selesai" id="tanggal_selesai" placeholder="hh/bb/tttt">
                        </div>
                    </div>

                    <label for="domisili">Domisili</label>
                    <select name="domisili" id="domisili">
                    <option value="select">Select</option>
                    <option value="dalam_kota">Dalam Kota</option>
                    <option value="luar_kota">Luar Kota</option>
                    </select>

                    <div style="display: flex; justify-content: space-between;">

                        <div>
                           <label for="tujuan">Tujuan</label>
                           <select name="tujuan" id="tujuan">
                           <option value="select">Select</option>
                           <option value="kunjungan_industri">Kunjungan Industri</option>
                           <option value="kunjungan_kedinasan">Kunjungan Kedinasan</option>
                           <option value="lainnya">Lainnya</option>
                           </select>
                        </div>

                        <div>
                            <label for="staff">Staff (Optional)</label>
                            <select name="staff" id="staff">
                                <option value="select">Select</option>
                                <option value="staff1">Staff 1</option>
                            </select>
                        </div>
                    </div>


                    <label for="keterangan">Keterangan</label>
                    <textarea name="keterangan" id="keterangan" placeholder="Type here..."></textarea>

                    <div style="display: flex; justify-content: space-between;">
                    <button type="submit">Submit</button>

                    <button class="check-button">
                        <a href="/check" style="text-decoration: none; font-color: white;">Check</a>
                    </button>
                    </div>


                </form>

            </div>
        </div>

    </div>

</body>
</html>
@endsection
