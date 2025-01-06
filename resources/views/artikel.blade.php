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

        /* Container */
        .container {
            max-width: 800px;
            margin: 20px auto;
            padding: 10px;
            text-align: center;
        }

        .container h1 {
            font-size: 24px;
            color: #FF6F00;
            margin-bottom: 20px;
        }

        /* Article List */
        .article-list {
            display: flex;
            flex-direction: column;
            gap: 20px;
        }

        .article-card {
            display: flex;
            align-items: center;
            background-color: #fff;
            border: 1px solid #FFD27F;
            border-radius: 10px;
            padding: 15px;
            box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
            transition: transform 0.3s;
        }

        .article-card:hover {
            transform: translateY(-5px);
        }

        /* Image Container */
        .image-container {
            flex: 1;
            max-width: 100px;
        }

        .image-container img {
            width: 100%;
            height: auto;
            border-radius: 8px;
        }

        /* Text Container */
        .text-container {
            flex: 3;
            padding-left: 15px;
            text-align: left;
        }

        .text-container h2 {
            font-size: 18px;
            color: #333;
            margin-bottom: 10px;
        }

        .text-container p {
            font-size: 14px;
            color: #555;
        }
    </style>

    <div class="container">
        <h1>Kumpulan Artikel Seputar Kesehatan</h1>
        <div class="article-list">
            <!-- Repeating Article Cards -->
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
            <!-- Repeat for more articles -->
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
            <!-- Repeat more as needed -->
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
            <!-- Repeat more as needed -->
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
            <!-- Repeat more as needed -->
        </div>
    </div>
</x-app-layout>