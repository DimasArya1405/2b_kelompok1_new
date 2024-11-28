<!-- app/views/user/edit.php -->
<!-- app/views/user/create.php -->
<?php require_once '../public/header.php'; ?>
<?php require_once '../public/main.php'; ?>

<div class="flex flex-col justify-center items-center w-full">
    <div class="ml-64 -mt-5 py-5 flex flex-col justify-center items-center">
        <h1 class="text-center font-bold text-2xl tracking-wider px-10 py-6 bg-gradient-to-r from-purple-500 via-purple-100 to-purple-400 rounded-xl -mt-10 z-10 w-3/5 judul">
            TAMBAH ACARA
        </h1>
        <div class="btn-create mt-6">
            <a href="/sponsorships/index" class="flex bg-red-600 rounded-md w-40 py-2 justify-center items-center gap-1 hover:bg-red-700 transition-duration-300 ease-in-out text-white">
            <i class="bi bi-backspace"></i>
                Kembali
            </a>
        </div>

        <form action="/attendees/update/<?php echo $user['id_peserta']; ?>" method="POST">
        <label for="nama_peserta">Nama Peserta:</label>
        <input type="text" id="nama_peserta" name="nama_peserta" value="<?php echo $user['nama_peserta']; ?>" required>
        <br>

        <label for="email">Email:</label>
        <input type="email" id="email" name="email" value="<?php echo $user['email']; ?>" required>
        <br>

        <label for="nomor_telepon">No Telepon:</label>
        <input type="number" id="nomor_telepon" name="nomor_telepon" value="<?php echo $user['nomor_telepon']; ?>" required>
        <br>

        <label for="acara">Acara</label>
        <input type="text" id="acara" name="acara" value="<?php echo $user['acara']; ?>" required>
        <br>

        <button type="submit">Update</button>
    </form>
    </div></div>
<?php require_once '../public/navbar.php'; ?>

<?php require_once '../public/footer.php'; ?>