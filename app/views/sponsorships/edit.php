<!-- app/views/user/edit.php -->
<?php require_once '../public/header.php'; ?>
<?php require_once '../public/main.php'; ?>

<div class="flex flex-col justify-center items-center w-full">
    <div class="ml-64 -mt-5 py-5 flex flex-col justify-center items-center">
        <h1 class="text-center font-bold text-2xl tracking-wider px-10 py-6 bg-gradient-to-r from-purple-500 via-purple-100 to-purple-400 rounded-xl -mt-10 z-10 w-3/5 judul">
            EDIT ORGANISASI
        </h1>
        <div class="btn-create mt-6">
            <a href="/sponsorships/index" class="flex gap-2 bg-red-600 rounded-md w-40 py-2 justify-center items-center gap-1 hover:bg-red-700 transition-duration-300 ease-in-out text-white">
            <i class="bi bi-backspace"></i>
                Kembali
            </a>
        </div>
 
    <form action="/sponsorships/update/<?php echo $sponsorships['id_sponsor']; ?>" method="POST">
        <label for="nama_sponsor">Nama Sponsor:</label>
        <input type="text" id="nama_sponsor" name="nama_sponsor" value="<?php echo $sponsorships['nama_sponsor']; ?>" required>
        
        <label for="nilai_sponsor">Nilai Sponsor:</label>
        <input type="text" id="nilai_sponsor" name="nilai_sponsor" value="<?php echo $sponsorships['nilai_sponsor']; ?>" required>
        
        <label for="jenis_sponsor">Jenis Sponsor:</label>
        <input type="text" id="jenis_sponsor" name="jenis_sponsor" value="<?php echo $sponsorships['jenis_sponsor']; ?>" required>
        
        <button type="submit">Update</button>
    </form>
    <a href="/sponsorships/index">Back to List</a>
    </div></div>
<?php require_once '../public/navbar.php'; ?>

<?php require_once '../public/footer.php'; ?>
