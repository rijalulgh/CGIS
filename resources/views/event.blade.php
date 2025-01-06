<x-app-layout>
    <!-- <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot> -->

    <style>
        /* Reset */
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            font-family: Arial, sans-serif;
            background-color: #f8f8f8;
            color: #333;
        }

        /* Header */
        .header {
            display: flex;
            justify-content: space-between;
            align-items: center;
            background-color: #FFD27F;
            padding: 15px 20px;
        }

        .header .logo {
            font-size: 24px;
            font-weight: bold;
            color: #009688;
        }

        .header nav a {
            margin: 0 10px;
            text-decoration: none;
            color: #333;
        }

        .header nav a.active {
            font-weight: bold;
            color: #FF6F00;
        }

        .header .menu-icon img {
            width: 24px;
            height: 24px;
        }

        .header .menu-icon {
            display: flex;
        }

        /* Content */
        .content {
            display: flex;
            justify-content: center;
            /* Memusatkan grid secara horizontal */
            align-items: center;
            /* Memusatkan grid secara vertikal */
            min-height: 20vh;
            /* Mengisi tinggi layar sepenuhnya */
            padding: 20px;
        }

        .event-grid {
            display: grid;
            grid-template-columns: repeat(3, 1fr);
            /* Membuat 3 kolom sama besar */
            gap: 20px;
            /* Jarak antar elemen dalam grid */
            justify-content: center;
            /* Memastikan grid berada di tengah secara horizontal */
            align-items: center;
            /* Memastikan item dalam grid berada di tengah */

        }

        .event-card {
            background-color: #fff;
            border: 1px solid #ddd;
            border-radius: 10px;
            border: 1px solid #FFD27F;
            overflow: hidden;
            box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
        }

        .event-card img {
            width: 100%;
            height: 190px;
            object-fit: cover;
        }

        .event-details {
            padding: 15px;
        }

        .event-details h3 {
            font-size: 18px;
            color: #FF6F00;
            margin-bottom: 10px;
        }

        .event-details p {
            font-size: 14px;
            margin-bottom: 5px;
        }

        .event-info span {
            display: block;
            font-size: 12px;
            margin-top: 5px;
            color: #555;
        }
    </style>

    <main class="content">
        <div class="event-grid">
            <!-- Repeating Event Cards -->
            <div class="event-card">
                <img src={{url('/images/event.jpg')}} alt="Event" />
                <div class="event-details">
                    <h3>Senam Bersama HUT BPJS Kesehatan Ke-56</h3>
                    <p>Klinik Dilla</p>
                    <p>Memperingati HUT BPJS yang ke-56</p>
                    <div class="event-info">
                        <span>📅 Minggu, 14 Juli 2024</span>
                        <span>📍 Klinik Dilla</span>
                    </div>
                </div>
            </div>
            <!-- Repeat for more cards -->
            <!-- Repeating Event Cards -->
            <div class="event-card">
                <img src={{url('/images/event.jpg')}} alt="Event" />
                <div class="event-details">
                    <h3>Senam Bersama HUT BPJS Kesehatan Ke-56</h3>
                    <p>Klinik Dilla</p>
                    <p>Memperingati HUT BPJS yang ke-56</p>
                    <div class="event-info">
                        <span>📅 Minggu, 14 Juli 2024</span>
                        <span>📍 Klinik Dilla</span>
                    </div>
                </div>
            </div>
            <!-- Repeat for more cards -->
            <!-- Repeating Event Cards -->
            <div class="event-card">
                <img src={{url('/images/event.jpg')}} alt="Event" />
                <div class="event-details">
                    <h3>Senam Bersama HUT BPJS Kesehatan Ke-56</h3>
                    <p>Klinik Dilla</p>
                    <p>Memperingati HUT BPJS yang ke-56</p>
                    <div class="event-info">
                        <span>📅 Minggu, 14 Juli 2024</span>
                        <span>📍 Klinik Dilla</span>
                    </div>
                </div>
            </div>
            <!-- Repeat for more cards -->
            <!-- Repeating Event Cards -->
            <div class="event-card">
                <img src={{url('/images/event.jpg')}} alt="Event" />
                <div class="event-details">
                    <h3>Senam Bersama HUT BPJS Kesehatan Ke-56</h3>
                    <p>Klinik Dilla</p>
                    <p>Memperingati HUT BPJS yang ke-56</p>
                    <div class="event-info">
                        <span>📅 Minggu, 14 Juli 2024</span>
                        <span>📍 Klinik Dilla</span>
                    </div>
                </div>
            </div>
            <!-- Repeat for more cards -->
            <!-- Repeating Event Cards -->
            <div class="event-card">
                <img src={{url('/images/event.jpg')}} alt="Event" />
                <div class="event-details">
                    <h3>Senam Bersama HUT BPJS Kesehatan Ke-56</h3>
                    <p>Klinik Dilla</p>
                    <p>Memperingati HUT BPJS yang ke-56</p>
                    <div class="event-info">
                        <span>📅 Minggu, 14 Juli 2024</span>
                        <span>📍 Klinik Dilla</span>
                    </div>
                </div>
            </div>
            <!-- Repeat for more cards -->
        </div>
    </main>
</x-app-layout>