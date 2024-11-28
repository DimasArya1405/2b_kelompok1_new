<!-- app/views/user/edit.php -->
<?php require_once '../public/header.php'; ?>
<?php require_once '../public/main.php'; ?>

<div class="flex flex-col justify-center items-center w-full">
    <div class="ml-64 -mt-5 py-5 flex flex-col justify-center items-center w-3.8/5">
        <h1 class="text-center font-bold text-2xl tracking-wider px-10 py-6 bg-gradient-to-r from-purple-500 via-purple-100 to-purple-400 rounded-xl -mt-10 z-10 w-3/5 judul">
            EDIT ACARA
        </h1>
        <div class="btn-create mt-6">
            <a href="/events/index" class="flex bg-red-600 rounded-md w-40 py-2 justify-center items-center gap-1 hover:bg-red-700 transition-duration-300 ease-in-out text-white">
            <i class="bi bi-backspace"></i>
                Kembali
            </a>
        </div>


    <form action="/events/update/<?php echo $user['id_events']; ?>" method="POST">
        <label for="nama_acara">Nama Acara:</label>
        <input type="text" id="nama_acara" name="nama_acara" value="<?php echo $user['nama_acara']; ?>" required>
        <br>

        <label for="deskripsi">Deksripsi:</label>
        <input type="text" id="deskripsi" name="deskripsi" value="<?php echo $user['deskripsi']; ?>" required>
        <br>

        <label for="tanggal">Tanggal:</label>
        <input type="date" id="tanggal" name="tanggal" value="<?php echo $user['tanggal']; ?>" required>
        <br>

        <label for="lokasi">Lokasi</label>
        <input type="text" id="lokasi" name="lokasi" value="<?php echo $user['lokasi']; ?>" required>
        <br>

        <button type="submit" class=" w-24 py-2 bg-blue-600 text-white hover:bg-blue-800 rounded-md transition duration-300 ease-in-out mt-4">Update</button>
    </form>

    </div></div>
<?php require_once '../public/navbar.php'; ?>

<?php require_once '../public/footer.php'; ?>