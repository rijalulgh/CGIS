<x-app-layout>
    <style>
        .container {
            display: table;
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
        <h2>Edit Data Klinik</h2>
        @if (session('success'))
            <div style="color: green; margin-bottom: 15px;">
                {{ session('success') }}
            </div>
        @endif

        <form action="{{ route('klinik.update', $klinik->id) }}" method="POST">
            @csrf <!-- Token keamanan -->
            <div class="form-group">
                <label for="nama-klinik">Nama Klinik</label>
                <input type="text" id="nama-klinik" name="nama_klinik" value="{{ $klinik->data['Nama Klinik'] }}"
                    required>
            </div>
            <div class="form-group">
                <label for="jam-operasional">Jam Operasional</label>
                <input type="text" id="jam-operasional" name="jam_operasional"
                    value="{{ $klinik->data['Jam Operasional'] }}" required>
            </div>
            <div class="form-group">
                <label for="keterangan-bpjs">Keterangan BPJS</label>
                <select id="keterangan-bpjs" name="bpjs" required>
                    <option value="menerima" {{ $klinik->data['BPJS/tidak BPJS'] == 'menerima' ? 'selected' : '' }}>
                        Menerima BPJS
                    </option>
                    <option value="tidak-menerima"
                        {{ $klinik->data['BPJS/tidak BPJS'] == 'tidak-menerima' ? 'selected' : '' }}>Tidak Menerima BPJS
                    </option>
                </select>
            </div>
            <div class="form-group">
                <label for="range-harga">Range Harga</label>
                <input type="text" id="range-harga" name="harga" value="{{ $klinik->data['Harga'] }}" required>
            </div>
            <div class="form-group">
                <label for="longitude">Longitude</label>
                <input type="text" id="longitude" name="longitude" value="{{ $klinik->data['Bujur'] }}" required>
            </div>
            <div class="form-group">
                <label for="latitude">Latitude</label>
                <input type="text" id="latitude" name="latitude" value="{{ $klinik->data['Lintang'] }}" required>
            </div>
            <div class="form-group">
                <button type="submit">Update</button>
            </div>
        </form>
    </div>
</x-app-layout>
