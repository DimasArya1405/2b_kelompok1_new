<?php require_once '../public/header.php'; ?>
<?php require_once '../public/main.php'; ?>

<div class="flex flex-col justify-center items-center w-full">
    <div class="ml-64 -mt-5 py-5 flex flex-col justify-center items-center">
        <h1 class="text-center font-bold text-2xl tracking-wider px-10 py-6 bg-gradient-to-r from-purple-500 via-purple-100 to-purple-400 rounded-xl -mt-10 z-10 w-3/5 judul">
            TAMBAH DATA PESERTA
        </h1>
        <div class="btn-create mt-6">
            <a href="/attendees/index" class="flex bg-red-600 rounded-md w-40 py-2 justify-center items-center gap-1 hover:bg-red-700 transition-duration-300 ease-in-out text-white">
                <i class="bi bi-backspace"></i>
                Kembali
            </a>
        </div>
        <form action="/attendees/store" method="POST">
            <label for="name">Nama Peserta:</label>
            <input type="text" name="nama_peserta" id="nama_peserta" required>

            <label for="name">Acara:</label>
            <select name="id_events" id="id_events" required>
        <option style="border: 1px solid black;" value="" selected disabled>Pilih Acara</option>
        <?php foreach ($events as $index  ): ?>
            <option value="<?= $index['id_events'] ?>"><?= $index['nama_acara'] ?></option>
        <?php endforeach ?></select>

            <label for="email" class="mt-4">Email:</label>
            <input type="email" name="email" id="email" required>

            <label for="nomor_telepon">No Telepon:</label>
            <input type="number" name="nomor_telepon" id="nomor_telepon" required>
            <button type="submit" class="p-2 bg-blue-600 text-white rounded-md hover:bg-blue-700 transition duration-300 ease-in-out mt-7">Simpan</button>
        </form>
    </div>
</div>

<?php require_once '../public/navbar.php'; ?>
<?php require_once '../public/footer.php'; ?>