<x-app-layout>
  <!-- <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot> -->

  <div class="background">
    <!-- Search Button -->
    <div class="search-section">
      <input type="text" id="search-input"
        class="w-full p-3 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500"
        placeholder="Cari klinik..." />
    </div>
    <div class="info-section">
      <h1>Cari klinik di Pekanbaru?</h1>
      <p>Carinya di <span class="highlight">C-GIS </span> aja!</p>
      <p>
        <span class="description"> <strong>Apa itu C-GIS?</strong></span>
        C-GIS (Clinic GIS) adalah aplikasi berbasis web yang dirancang untuk
        memetakan persebaran klinik kesehatan di Pekanbaru. Aplikasi ini
        menggunakan teknologi Sistem Informasi Geografis (SIG) untuk
        menampilkan lokasi klinik secara interaktif, lengkap dengan informasi
        layanan, jam operasional, dan kontak.
      </p>
    </div>
  </div>



  <script>
    const searchInput = document.getElementById('search-input');

    searchInput.addEventListener('input', async function () {
      const query = searchInput.value;

      try {
        const response = await fetch(`/search-klinik?query=${query}`);
        const geoJSONData = await response.json();

        // Update peta dengan data hasil pencarian
        klinikLayer.getSource().clear(); // Hapus fitur lama
        const features = new ol.format.GeoJSON().readFeatures(geoJSONData, {
          dataProjection: 'EPSG:4326',
          featureProjection: 'EPSG:3857',
        });
        klinikLayer.getSource().addFeatures(features);
      } catch (error) {
        console.error('Error fetching search results:', error);
      }
    });

    // Layer untuk menampilkan klinik
    const klinikLayer = new ol.layer.Vector({
      source: new ol.source.Vector(),
    });
    map.addLayer(klinikLayer);
  </script>

</x-app-layout>