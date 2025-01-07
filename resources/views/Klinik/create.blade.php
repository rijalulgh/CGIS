<x-app-layout>
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