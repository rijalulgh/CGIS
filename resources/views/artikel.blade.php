<x-app-layout>
    <!-- <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot> -->

    <div class="container">
        <h1>Kumpulan Artikel Seputar Kesehatan</h1>
        <div class="article-list">
            <!-- Repeating Article Cards -->
            <a href="https://www.siloamhospitals.com/informasi-siloam/artikel/obat-sakit-perut-alami" target="_blank">
                <div class="article-card">
                    <div class="image-container">
                        <img src={{url('/images/artikel.png')}} alt="Doctor Image" />
                    </div>
                    <div class="text-container">
                        <h2>5 Cara Meredakan Sakit Perut Secara Alami</h2>
                        <p>
                            Sering merasa sakit perut? Segera baca ini untuk meredakannya!
                        </p>
                    </div>
                </div>
            </a>
            <!-- Repeat for more articles -->
            <a href="https://www.siloamhospitals.com/informasi-siloam/artikel/obat-sakit-perut-alami" target="_blank">
            <div class="article-card">
                <div class="image-container">
                    <img src={{url('/images/artikel.png')}} alt="Doctor Image" />
                </div>
                <div class="text-container">
                    <h2>5 Cara Meredakan Sakit Perut Secara Alami</h2>
                    <p>
                        Sering merasa sakit perut? Segera baca ini untuk meredakannya!
                    </p>
                </div>
            </div>
            </a>
            <!-- Repeat more as needed -->
            <a href="https://www.siloamhospitals.com/informasi-siloam/artikel/obat-sakit-perut-alami" target="_blank">
            <div class="article-card">
                <div class="image-container">
                    <img src={{url('/images/artikel.png')}} alt="Doctor Image" />
                </div>
                <div class="text-container">
                    <h2>5 Cara Meredakan Sakit Perut Secara Alami</h2>
                    <p>
                        Sering merasa sakit perut? Segera baca ini untuk meredakannya!
                    </p>
                </div>
            </div>
            </a>
            <!-- Repeat more as needed -->
            <a href="https://www.siloamhospitals.com/informasi-siloam/artikel/obat-sakit-perut-alami" target="_blank">
            <div class="article-card">
                <div class="image-container">
                    <img src={{url('/images/artikel.png')}} alt="Doctor Image" />
                </div>
                <div class="text-container">
                    <h2>5 Cara Meredakan Sakit Perut Secara Alami</h2>
                    <p>
                        Sering merasa sakit perut? Segera baca ini untuk meredakannya!
                    </p>
                </div>
            </div>
            </a>
            <!-- Repeat more as needed -->
        </div>
    </div>
</x-app-layout>