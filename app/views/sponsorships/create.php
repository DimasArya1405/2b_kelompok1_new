<!-- app/views/user/create.php -->
<?php require_once '../public/header.php'; ?>
<?php require_once '../public/main.php'; ?>

<div class="flex flex-col justify-center items-center w-full">
    <div class="ml-64 -mt-5 py-5 flex flex-col justify-center items-center">
        <h1 class="text-center font-bold text-2xl tracking-wider px-10 py-6 bg-gradient-to-r from-purple-500 via-purple-100 to-purple-400 rounded-xl -mt-10 z-10 w-3/5 judul">
            TAMBAH SPONSORSHIPS
        </h1>
        <div class="btn-create mt-6">
            <a href="/sponsorships/index" class="flex bg-red-600 rounded-md w-40 py-2 justify-center items-center gap-1 hover:bg-red-700 transition-duration-300 ease-in-out text-white">
                <i class="bi bi-backspace"></i>
                Kembali
            </a>
        </div>

        <form action="/sponsorships/store" method="POST">

            <label for="nama_sponsor">Nama Sponsorships:</label>
            <input type="text" name="nama_sponsor" id="nama_sponsor" required>

            <label for="nilai_sponsor">Nilai Sponsor:</label>
            <input type="number" name="nilai_sponsor" id="nilai_sponsor" required>

            <label for="jenis_sponsor">Jenis Sponsor:</label>
            <input type="text" name="jenis_sponsor" id="jenis_sponsor" required>
            


            <button type="submit" class=" w-24 py-2 bg-blue-600 text-white hover:bg-blue-800 rounded-md transition duration-300 ease-in-out mt-4">Simpan</button>
        </form>
    </div>
</div>
<?php require_once '../public/navbar.php'; ?>

<?php require_once '../public/footer.php'; ?>