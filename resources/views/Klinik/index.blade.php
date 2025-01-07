<x-app-layout>
<style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            background-color: #f5f5f5;
        }

        /* Container utama */
        .container {
            width: 90%;
            max-width: 1200px;
            margin: 20px auto;
            display: flex;
            flex-wrap: wrap;
            gap: 20px;
        }

        /* Card Styling */
        .card {
            background-color: #ffffff;
            border-radius: 10px;
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
            overflow: hidden;
            padding: 20px;
            flex: 1;
        }

        .card img {
            width: 100%;
            height: auto;
            border-radius: 10px;
        }

        .card h5 {
            margin: 15px 0;
            font-size: 18px;
            color: #333;
        }

        .card p {
            margin: 5px 0;
            font-size: 14px;
            color: #555;
        }

        .card .map-container img {
            width: 100%;
            border-radius: 10px;
        }

        /* Galeri */
        .d-flex {
            display: flex;
            gap: 10px;
        }

        .img-thumbnail {
            width: 80px;
            height: 80px;
            border-radius: 10px;
            object-fit: cover;
            border: 1px solid #ddd;
        }

        /* Deskripsi dan Fasilitas */
        .row {
            display: flex;
            gap: 20px;
            flex-wrap: wrap;
        }

        .row .col {
            flex: 1;
        }

        h5 {
            margin-bottom: 10px;
            font-size: 16px;
            color: #222;
        }

        p {
            line-height: 1.5;
            color: #444;
        }

        /* Button untuk Modal */
        button#openModalBtn {
            background-color: #4CAF50;
            color: white;
            border: none;
            padding: 10px 15px;
            border-radius: 5px;
            font-size: 16px;
            cursor: pointer;
            margin: 20px 0;
        }

        button#openModalBtn:hover {
            background-color: #45a049;
        }

        /* Modal Styling */
        .modal {
            display: none;
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background-color: rgba(0, 0, 0, 0.5);
            z-index: 1000;
        }

        .modal-content {
            background-color: #fff;
            border-radius: 10px;
            margin: 10% auto;
            padding: 20px;
            width: 80%;
            max-width: 600px;
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
            text-align: center;
        }

        .close {
            color: #aaa;
            font-size: 20px;
            position: absolute;
            top: 10px;
            right: 15px;
            cursor: pointer;
        }

        .close:hover {
            color: black;
        }

        /* Rating Stars */
        .rating {
            display: flex;
            justify-content: center;
            flex-direction: row-reverse;
            gap: 5px;
        }

        .rating input {
            display: none;
        }

        .rating label {
            font-size: 30px;
            color: #ddd;
            cursor: pointer;
        }

        .rating input:checked~label,
        .rating input:hover~label {
            color: #ffa500;
        }

        /* Comment Section */
        textarea#comment {
            width: 100%;
            padding: 10px;
            border: 1px solid #ddd;
            border-radius: 5px;
            resize: none;
            font-size: 14px;
        }

        .submit-btn {
            background-color: #4CAF50;
            color: white;
            border: none;
            padding: 10px 15px;
            border-radius: 5px;
            font-size: 16px;
            cursor: pointer;
            margin-top: 10px;
        }

        .submit-btn:hover {
            background-color: #45a049;
        }
    </style>
    <main class="content">
        <div class="event-grid">
            @foreach ($kliniks as $klinik)
                <div class="event-card">
                    <img src="{{ url('/images/event.jpg') }}" alt="Event" />
                    <div class="event-details">
                        <h3>{{ $klinik->data['Nama Klinik'] }}</h3>
                        <p>Jam Operasional: {{ $klinik->data['Jam Operasional'] }}</p>
                        <p>BPJS: {{ $klinik->data['BPJS/tidak BPJS'] }}</p>
                        <p>Harga: {{ $klinik->data['Harga'] }}</p>
                        <div class="event-info">
                            <span>📍 Koordinat: {{ $klinik->data['Lintang'] }}, {{ $klinik->data['Bujur'] }}</span>
                            <span>⭐ Rating: {{ $klinik->data['Rating'] }}</span>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </main>
</x-app-layout>
