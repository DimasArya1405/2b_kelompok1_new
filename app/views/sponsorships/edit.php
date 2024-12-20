<!-- app/views/user/edit.php -->
<?php require_once '../public/header.php'; ?>
<?php require_once '../public/main.php'; ?>

<div class="flex flex-col justify-center items-center w-full">
    <div class="ml-64 -mt-5 py-5 flex flex-col justify-center items-center">
        <h1 class="text-center font-bold text-2xl tracking-wider px-10 py-6 bg-gradient-to-r from-purple-500 via-purple-100 to-purple-400 rounded-xl -mt-10 z-10 w-3/5 judul">
            EDIT DATA SPONSORSHIPS
        </h1>
        <div class="btn-create mt-6">
            <a href="/sponsorships/index" class="flex gap-2 bg-red-600 rounded-md w-40 py-2 justify-center items-center gap-1 hover:bg-red-700 transition-duration-300 ease-in-out text-white">
                <i class="bi bi-backspace"></i>
                Kembali
            </a>
        </div>
        <form action="/sponsorships/update/<?php echo $user['id_sponsor']; ?>" method="POST">
            <label for="nama_sponsor">Nama Sponsor:</label>
            <input type="text" id="nama_sponsor" name="nama_sponsor" value="<?php echo $user['nama_sponsor']; ?>" required>
            <label for="nilai_sponsor">Nilai Sponsor:</label>
            <input type="text" id="nilai_sponsor" name="nilai_sponsor" value="<?php echo $user['nilai_sponsor']; ?>" required>
            <label for="jenis_sponsor">Jenis Sponsor:</label>
            <input type="text" id="jenis_sponsor" name="jenis_sponsor" value="<?php echo $user['jenis_sponsor']; ?>" required>
            <label for="acara">Acara</label>
            <select id="select" name="id_events" required>
                <option value="" selected disabled>Pilih Acara</option>
                <?php foreach ($sponsorships as $data): ?>
                    <option value="<?= htmlspecialchars($data['id_events']) ?>" <?= $data['id_events'] == $user['id_events'] ? 'selected' : '' ?>>
                        <?= htmlspecialchars($data['nama_acara']) ?>
                    </option>
                <?php endforeach; ?>
            </select>
            <button type="submit" class=" py-2 bg-green-600 text-white hover:bg-green-800 rounded-md transition duration-300 ease-in-out mt-4">Update</button>
        </form>
    </div>
</div>

<?php require_once '../public/navbar.php'; ?>
<?php require_once '../public/footer.php'; ?>