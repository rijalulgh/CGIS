import "./bootstrap";

import Alpine from "alpinejs";

window.Alpine = Alpine;

Alpine.start();

import "../css/map.css";
import { Map, Overlay, Tile, View } from "ol";
import TileLayer from "ol/layer/Tile";
import VectorLayer from "ol/layer/Vector";
import { fromLonLat } from "ol/proj";
import OSM from "ol/source/OSM";
import GeoJSON from "ol/format/GeoJSON.js";
import VectorSource from "ol/source/Vector";
import { Icon, Style } from "ol/style.js";

import axios from "axios"; // Jika menggunakan Axios

const container = document.getElementById("popup");
const content_element = document.getElementById("popup-content");
const closer = document.getElementById("popup-closer");
//Buat overlay popup

const overlay = new Overlay({
    element: container,
    autoPan: {
        animation: {
            duration: 250,
        },
    },
});

const kabRiau = new VectorLayer({
    background: "#1a2b39",
    source: new VectorSource({
        url: "data/kab_riau.json",
        format: new GeoJSON(),
    }),
    style: {
        "fill-color": [
            "interpolate",
            ["linear"],
            ["get", "FID"],
            1,
            "#ffff33",
            13,
            "#3358ff",
        ],
    },
});

const pekanbaru = new VectorLayer({
    // background: "#1a2b39",
    source: new VectorSource({
        url: "pekanbaru.json",
        format: new GeoJSON(),
    }),
    style: {
        "fill-color": [
            "interpolate",
            ["linear"],
            ["get", "FID"],
            1,
            "#ffff3360",
            13,
            "#3358ff60",
        ],
    },
});

const map = new Map({
    overlays: [overlay],
    target: document.getElementById("map"),
    layers: [
        new TileLayer({
            source: new OSM(),
        }),
        pekanbaru,
    ],
    view: new View({
        center: fromLonLat([101.458609, 0.51044]),
        zoom: 13,
    }),
});
// Membuat elemen popup
const popupElement = document.createElement("div");
popupElement.id = "popup";
popupElement.className = "ol-popup";

// Membuat overlay popup
const popupOverlay = new Overlay({
    element: popupElement,
    positioning: "bottom-center",
    stopEvent: false,
    offset: [0, -10],
});

// Tambahkan overlay ke peta
map.addOverlay(popupOverlay);

// Fungsi untuk menampilkan informasi fitur di popup
const displayPopup = function (pixel) {
    const feature = map.forEachFeatureAtPixel(pixel, function (feat) {
        return feat;
    });

    if (feature) {
        const coordinates = feature.getGeometry().getCoordinates();
        const klinikName = feature.get("Nama_Klinik") || null;
        const jamOperasional =
            feature.get("Jam_Operasional") || null;
        const harga = feature.get("Harga") || null;

        if (klinikName && jamOperasional && harga) {
            // Isi konten popup
            popupElement.innerHTML = `
        <div>
          <strong>${klinikName}</strong><br />
          Jam Operasional: ${jamOperasional}<br />
          Harga: ${harga}<br />
        </div>
      `;
            // Atur posisi popup
            popupOverlay.setPosition(coordinates);
        } else {
            popupElement.innerHTML = null;
            // Sembunyikan popup jika data tidak tersedia
            popupOverlay.setPosition(pixel);
        }

        // Atur posisi popup
        popupOverlay.setPosition(coordinates);
    } else {
        // Sembunyikan popup jika tidak ada fitur
        popupOverlay.setPosition(undefined);
    }
};

// Event pointermove untuk menampilkan popup
map.on("pointermove", function (evt) {
    if (evt.dragging) {
        popupOverlay.setPosition(undefined);
        return;
    }

    const pixel = map.getEventPixel(evt.originalEvent);
    displayPopup(pixel);
});

// Fungsi untuk memuat data GeoJSON
async function fetchKlinikData() {
    try {
        const response = await axios.get("/api/klinik-data"); // API endpoint
        const geoJSONData = response.data; // GeoJSON dari API

        const klinikLayer = new VectorLayer({
            source: new VectorSource({
                features: new GeoJSON().readFeatures(geoJSONData, {
                    dataProjection: "EPSG:4326", // Proyeksi data GeoJSON
                    featureProjection: "EPSG:3857", // Proyeksi peta OpenLayers
                }),
            }),
            style: new Style({
                image: new Icon({
                    anchor: [0.5, 0.5],
                    src: "/icon/klinik.png", // URL icon klinik
                    scale: 0.05, // Ukuran icon
                }),
            }),
        });

        // Tambahkan layer ke peta
        map.addLayer(klinikLayer);
        map.on("singleclick", function (evt) {

          console.log('ha')
          const feature = map.forEachFeatureAtPixel(evt.pixel, function (feat) {
              return feat;
          });

          if (feature) {
              const klinikId = feature.get("id"); // Ambil ID dari properti fitur
              if (klinikId) {
                console.log('ha')
                  // Arahkan ke route berdasarkan ID klinik
                  window.location.href = `/klinik/${klinikId}`;
              }
          }
      });
    } catch (error) {
        console.error("Error fetching klinik data:", error);
    }
}

// Panggil fungsi fetchKlinikData
fetchKlinikData();

// const popup = new Overlay({
//     element: document.getElementById("popup"),
//     positioning: "top-center",
//     stopEvent: false,
//     offset: [0, -15],
// });
// map.addOverlay(popup);
// map.on("singleclick", function (evt) {
//     const feature = map.forEachFeatureAtPixel(evt.pixel, function (feat) {
//         return feat;
//     });

//     if (feature) {
//         const coordinates = feature.getGeometry().getCoordinates();
//         let content = "<h3>Informasi Fitur</h3>";
//         content +=
//             "<p>Nama Daerah: <strong>" +
//             feature.get("Nama_Pemetaan") +
//             "</strong></p>" +
//             "<p>Jumlah Korban: " +
//             feature.get("Jumlah_Korban") +
//             "</p>";
//         document.getElementById("popup-content").innerHTML = content;

//         popup.setPosition(coordinates);
//     } else {
//         popup.setPosition(undefined);
//     }
// });

// const featureOverlay = new VectorLayer({
//   source: new VectorSource(),
//   map: map,
//   style: {
//     "stroke-color": "rgba(255, 255, 255, 0.7)",
//     "stroke-width": 2,
//   },
// });
// let highlight;
// const highlightFeature = function (pixel) {
//   const feature = map.forEachFeatureAtPixel(pixel, function (feature) {
//     return feature;
//   });
//   if (feature !== highlight) {
//     if (highlight) {
//       featureOverlay.getSource().removeFeature(highlight);
//     }
//     if (feature) {
//       featureOverlay.getSource().addFeature(feature);
//     }
//     highlight = feature;
//   }
// };
// const displayFeatureInfo = function (pixel) {
//   const feature = map.forEachFeatureAtPixel(pixel, function (feat) {
//     return feat;
//   });
//   const info = document.getElementById("info");
//   if (feature) {
//     info.innerHTML = feature.get("Kabupaten") || "&nbsp;";
//   } else {
//     info.innerHTML = "&nbsp;";
//   }
// };

// map.on("pointermove", function (evt) {
//   if (evt.dragging) {
//     popup.setPosition(undefined);
//   }
//   const pixel = map.getEventPixel(evt.originalEvent);
//   highlightFeature(pixel);
//   displayFeatureInfo(pixel);
// });

// const polygonLayerCheckbox = document.getElementById("polygon");
// const pointLayerCheckbox = document.getElementById("point");
// polygonLayerCheckbox.addEventListener("change", function () {
//   kabRiau.setVisible(polygonLayerCheckbox.checked);
// });
// pointLayerCheckbox.addEventListener("change", function () {
//   banjir.setVisible(pointLayerCheckbox.checked);
// });

// map.addOverlay(overlay);

// // map.on("singleclick", function (evt) {
// //   const feature = map.forEachFeatureAtPixel(evt.pixel, function (feature) {
// //     return feature;
// //   });
// //   if (!feature) {
// //     return;
// //   }

// //   const coordinate = evt.coordinate;
// //   const content =
// //     "<h3>Nama Daerah: " +
// //     feature.get("Nama_Pemetaan") +
// //     "</h3>" +
// //     "<p>Jumlah Korban: " +
// //     feature.get("Jumlah_Korban") +
// //     "</p>";
// //   content_element.innerHTML = content;
// //   overlay.setPosition(coordinate);
// // });

// closer.onclick = function () {
//   overlay.setPosition(undefined);
//   closer.blur();
//   return false;
// };
