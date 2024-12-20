<?php require_once '../public/header.php'; ?>
<?php require_once '../public/main.php'; ?>

<div class="flex flex-col justify-center items-center w-full">
    <div class="ml-64 -mt-5 py-5 flex flex-col justify-center items-center">
        <h1 class="text-center font-bold text-2xl tracking-wider px-10 py-6 bg-gradient-to-r from-purple-500 via-purple-100 to-purple-400 rounded-xl -mt-10 z-10 w-3/5 judul">
            TAMBAH ORGANISASI
        </h1>
        <div class="btn-create mt-6">
            <a href="/organizers/index" class="flex bg-red-600 rounded-md w-40 py-2 justify-center items-center gap-1 hover:bg-red-700 transition-duration-300 ease-in-out text-white">
                <i class="bi bi-backspace"></i>
                Kembali
            </a>
        </div>
        <form action="/organizers/store" method="POST">
            <label for="nama_penyelenggara">Nama Penyelenggara:</label>
            <input type="text" name="nama_penyelenggara" id="nama_penyelenggara" required>
            <label for="nama_penyelenggara">Acara:</label>
            <select name="id_events" id="id_events" required>
                <option style="border: 1px solid black;" value="" selected disabled>Pilih Acara</option>
                <?php foreach ($events as $index): ?>
                    <option value="<?= $index['id_events'] ?>"><?= $index['nama_acara'] ?></option>
                <?php endforeach ?>
            </select>
            <label for="kontak">Kontak:</label>
            <input type="number" name="kontak" id="kontak" required>
            <label for="email">Email:</label>
            <input type="email" name="email" id="email" required>
            <button type="submit" class="py-2 bg-blue-600 text-white hover:bg-blue-800 rounded-md transition duration-300 ease-in-out mt-4">Simpan</button>
        </form>
    </div>
</div>

<?php require_once '../public/navbar.php'; ?>
<?php require_once '../public/footer.php'; ?>