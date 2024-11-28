<!-- app/views/user/index.php -->
<?php require_once '../public/header.php'; ?>
<?php require_once '../public/main.php'; ?>

<div class="flex flex-col justify-center items-center w-full">
    <div class="ml-64 -mt-5 py-5 flex flex-col justify-center items-center">
        <h1 class="text-center font-bold text-2xl tracking-wider px-10 py-6 bg-gradient-to-r from-purple-500 via-purple-100 to-purple-400 rounded-xl -mt-10 z-10 w-3/5 judul">
            DAFTAR ACARA
        </h1>
        <div class="btn w-full mt-6 pl-7">
            <a href="/events/create" class="flex bg-green-500 rounded-md w-72 py-2 justify-center items-center gap-1 hover:bg-green-700 transition-duration-300 ease-in-out text-white">
                <i class="bi bi-folder-plus"></i>
                Tambah Acara Baru
            </a>
        </div>

        <?php
        $no = 1; ?>
        <table class="mt-3 rounded-sm">
            <tr>
                <th class="text-center px-2">No</th>
                <th class="text-center px-4"> Nama Acara</th>
                <th class="text-center px-4">Deskripsi</th>
                <th class="text-center px-4">Tanggal</th>
                <th class="text-center px-4">Lokasi</th>
                <th class=" w-44">Action</th>
            </tr>

            <?php
            foreach ($users as $user): ?>
                <tr class=" hover:bg-gray-200">
                    <td class="text-center px-4"><?= $no; ?> </td>
                    <td><?= htmlspecialchars($user['nama_acara']) ?></td>
                    <td><?= htmlspecialchars($user['deskripsi']) ?> </td>
                    <td><?= htmlspecialchars($user['tanggal']) ?></td>
                    <td><?= htmlspecialchars($user['lokasi']) ?></td>
                    <td class="px-4 py-4 text-center gap-4">
                        <a href="/events/edit/<?php echo $user['id_events']; ?>" class=" text-center py-2 px-4 mr-1 bg-yellow-300 hover:bg-yellow-500 transition duration-300 ease-in-out rounded-xl">
                            Edit
                        </a>
                        <a href="/events/delete/<?php echo $user['id_events']; ?>" class="p-2 ml-1 text-white bg-red-500 hover:bg-red-700 transition duration-300 ease-in-out rounded-xl">
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