<x-app-layout>
    <!-- <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot> -->

    <style>
        .input-group {
            width: 80%;
            margin: auto;
        }

        .filter-btn {
            font-size: 1.2rem;
        }

        .filter-menu {
            min-width: 200px;
        }

        .card {
            border: 1px solid #f2f2f2;
            border-radius: 8px;
        }

        .card img {
            border-top-left-radius: 8px;
            border-top-right-radius: 8px;
        }

        .card-body {
            text-align: center;
        }

        .rating {
            color: #ffc107;
        }
    </style>
    <!-- Search -->
    <div class="container my-4">
        <div class="input-group">
            <span class="input-group-text bg-transparent border-end-0">🔍</span>
            <input type="text" class="form-control border-start-0" placeholder="Cari">
        </div>
        <!-- Filter -->
        <div class="mt-3">
            <div class="dropdown">
                <button class="btn btn-light filter-btn dropdown-toggle  float-end mx-20" type="button"
                    data-bs-toggle="dropdown" aria-expanded="false">
                    ⚙️ Filter
                </button>

                <ul class="dropdown-menu filter-menu">
                    <li>
                        <div class="form-check px-3">
                            <input class="form-check-input" type="checkbox" id="filter1" checked>
                            <label class="form-check-label" for="filter1">Klinik Pratama</label>
                        </div>
                    </li>
                    <li>
                        <div class="form-check px-3">
                            <input class="form-check-input" type="checkbox" id="filter2">
                            <label class="form-check-label" for="filter2">BPJS</label>
                        </div>
                    </li>
                </ul>
            </div>
        </div>
    </div>

    <!-- Results Section -->
    <div class="container my-4">
        <h5>Hasil</h5>
        <main class="content">
            <div class="event-grid">

                <!-- Repeating Event Cards -->
                <div class="event-card">
                    <a href="{{ route('detail') }}"><img src={{url('/images/event.jpg')}} alt="Event" />
                        <div class="event-details">
                            <h3>Senam Bersama HUT BPJS Kesehatan Ke-56</h3>
                            <p>Klinik Dilla</p>
                            <p>Memperingati HUT BPJS yang ke-56</p>
                            <div class="event-info">
                                <span>📅 Minggu, 14 Juli 2024</span>
                                <span>📍 Klinik Dilla</span>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="event-card">
                    <a href="{{ route('detail') }}"><img src={{url('/images/event.jpg')}} alt="Event" />
                        <div class="event-details">
                            <h3>Senam Bersama HUT BPJS Kesehatan Ke-56</h3>
                            <p>Klinik Dilla</p>
                            <p>Memperingati HUT BPJS yang ke-56</p>
                            <div class="event-info">
                                <span>📅 Minggu, 14 Juli 2024</span>
                                <span>📍 Klinik Dilla</span>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="event-card">
                    <a href="{{ route('detail') }}"><img src={{url('/images/event.jpg')}} alt="Event" />
                        <div class="event-details">
                            <h3>Senam Bersama HUT BPJS Kesehatan Ke-56</h3>
                            <p>Klinik Dilla</p>
                            <p>Memperingati HUT BPJS yang ke-56</p>
                            <div class="event-info">
                                <span>📅 Minggu, 14 Juli 2024</span>
                                <span>📍 Klinik Dilla</span>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="event-card">
                    <a href="{{ route('detail') }}"><img src={{url('/images/event.jpg')}} alt="Event" />
                        <div class="event-details">
                            <h3>Senam Bersama HUT BPJS Kesehatan Ke-56</h3>
                            <p>Klinik Dilla</p>
                            <p>Memperingati HUT BPJS yang ke-56</p>
                            <div class="event-info">
                                <span>📅 Minggu, 14 Juli 2024</span>
                                <span>📍 Klinik Dilla</span>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="event-card">
                    <a href="{{ route('detail') }}"><img src={{url('/images/event.jpg')}} alt="Event" />
                        <div class="event-details">
                            <h3>Senam Bersama HUT BPJS Kesehatan Ke-56</h3>
                            <p>Klinik Dilla</p>
                            <p>Memperingati HUT BPJS yang ke-56</p>
                            <div class="event-info">
                                <span>📅 Minggu, 14 Juli 2024</span>
                                <span>📍 Klinik Dilla</span>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="event-card">
                    <a href="{{ route('detail') }}"><img src={{url('/images/event.jpg')}} alt="Event" />
                        <div class="event-details">
                            <h3>Senam Bersama HUT BPJS Kesehatan Ke-56</h3>
                            <p>Klinik Dilla</p>
                            <p>Memperingati HUT BPJS yang ke-56</p>
                            <div class="event-info">
                                <span>📅 Minggu, 14 Juli 2024</span>
                                <span>📍 Klinik Dilla</span>
                            </div>
                        </div>
                    </a>
                </div>
            </div>
        </main>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
</x-app-layout>