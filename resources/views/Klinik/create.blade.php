<x-app-layout>
    <style>
        .container {
            display: grid;
            justify-content: center;
            align-items: center;
            min-height: 100vh;
            background-color: #f9f9f9;
            padding: 120px;
        }

        .card {
            background-color: #ffffff;
            border-radius: 10px;
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
            padding: 30px;
            width: 100%;
            max-width: 500px;
        }

        .card h2 {
            margin-bottom: 20px;
            font-size: 24px;
            text-align: center;
            color: #333;
        }

        .form-group {
            margin-bottom: 15px;
        }

        .form-group label {
            display: block;
            font-weight: bold;
            margin-bottom: 5px;
            color: #555;
        }

        .form-group input,
        .form-group select {
            width: 100%;
            padding: 10px;
            font-size: 14px;
            border: 1px solid #ddd;
            border-radius: 5px;
            transition: border-color 0.3s ease;
        }

        .form-group input:focus,
        .form-group select:focus {
            border-color: #ffa54d;
            outline: none;
        }

        button[type="submit"] {
            background-color: #ffa54d;
            color: white;
            font-size: 16px;
            font-weight: bold;
            padding: 10px 15px;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            transition: background-color 0.3s ease;
            width: 100%;
        }

        button[type="submit"]:hover {
            background-color: #ff8c1a;
        }
    </style>
    <div class="container">
        <h2>Form Input Klinik</h2>
        <form>
            <div class="form-group">
                <label for="nama-klinik">Nama Klinik</label>
                <input type="text" id="nama-klinik" name="nama-klinik" placeholder="Masukkan nama klinik">
            </div>
            <div class="form-group">
                <label for="jam-operasional">Jam Operasional</label>
                <input type="text" id="jam-operasional" name="jam-operasional" placeholder="Contoh: 08:00 - 20:00">
            </div>
            <div class="form-group">
                <label for="keterangan-bpjs">Keterangan BPJS</label>
                <select id="keterangan-bpjs" name="keterangan-bpjs">
                    <option value="">Pilih...</option>
                    <option value="menerima">Menerima BPJS</option>
                    <option value="tidak-menerima">Tidak Menerima BPJS</option>
                </select>
            </div>
            <div class="form-group">
                <label for="range-harga">Range Harga</label>
                <input type="text" id="range-harga" name="range-harga" placeholder="Contoh: 50.000 - 200.000">
            </div>
            <div class="form-group">
                <label for="longitude">Longitude</label>
                <input type="text" id="longitude" name="longitude" placeholder="Masukkan longitude">
            </div>
            <div class="form-group">
                <label for="latitude">Latitude</label>
                <input type="text" id="latitude" name="latitude" placeholder="Masukkan latitude">
            </div>
            <div class="form-group">
                <button type="submit">Submit</button>
            </div>
        </form>
    </div>

</x-app-layout>