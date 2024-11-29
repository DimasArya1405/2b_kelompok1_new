<?php require_once '../public/header.php'; ?>
<?php require_once '../public/main.php'; ?>

<div class="flex flex-col justify-center items-center w-full">
    <div class="ml-64 -mt-5 py-5 flex flex-col justify-center items-center">
        <h1 class="text-center font-bold text-2xl tracking-wider px-10 py-6 bg-gradient-to-r from-purple-500 via-purple-100 to-purple-400 rounded-xl -mt-10 z-10 w-3/5 judul">
            DAFTAR PESERTA
        </h1>
        <div class="btn w-full mt-6 pl-7">
            <a href="/attendees/create" class="flex bg-green-500 rounded-md w-72 py-2 justify-center items-center gap-1 hover:bg-green-700 transition-duration-300 ease-in-out text-white">
                <i class="bi bi-folder-plus"></i>
                Tambah Peserta Baru
            </a>
        </div>
        <?php
        $no = 1; ?>
        <table border="1" style="border-collapse: collapse;" class="mt-3 shadow-md rounded-sm">
            <tr>
                <th class="text-center px-2">No</th>
                <th class="text-center px-4">Nama Peserta</th>
                <th class="text-center px-4">Email</th>
                <th class="text-center px-4">Nomor Telepon</th>
                <th class="text-center px-4">Nama Acara</th>
                <!-- <th class="text-center px-4">Acara</th> -->
                <th class=" w-44">Action</th>
            </tr>
            <?php
            foreach ($attendees as $user): ?>
                <tr class=" hover:bg-gray-200">
                    <td class="text-center px-4"><?= $no; ?> </td>
                    <td><?= htmlspecialchars($user['nama_peserta']) ?></td>
                    <td><?= htmlspecialchars($user['email']) ?> </td>
                    <td><?= htmlspecialchars($user['nomor_telepon']) ?></td>
                    <td><?= htmlspecialchars($user['nama_acara']) ?></td>
                    <td class="px-4 py-4 text-center gap-4">
                        <a href="/attendees/edit/<?php echo $user['id_peserta']; ?>" class=" text-center py-2 px-4 mr-1 bg-yellow-300 hover:bg-yellow-500 transition duration-300 ease-in-out rounded-xl">
                            Edit
                        </a>
                        <a href="/attendees/delete/<?php echo $user['id_peserta']; ?>" class="p-2 ml-1 text-white bg-red-500 hover:bg-red-700 transition duration-300 ease-in-out rounded-xl">
                            Delete
                        </a>
                    </td>
                </tr>
                <?php
                $no++;
                ?>
            <?php endforeach; ?>
        </table>
    </div>
</div>

<?php require_once '../public/navbar.php'; ?>
<?php require_once '../public/footer.php'; ?>