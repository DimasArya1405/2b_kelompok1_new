<?php require_once '../public/header.php'; ?>
<?php require_once '../public/main.php'; ?>

<div class="flex flex-col justify-center items-center w-full">
    <div class="ml-64 -mt-5 py-5 flex flex-col justify-center items-center w-3.8/5">
        <div class="text-center px-10 py-3 bg-white rounded-xl h-52 -mt-10 z-10 w-2/3 judul mb-5">
            <div class="welcome font-bold">SELAMAT DATANG</div>
            <p>Di Website Sistem Manajemen Acara Seni dan Budaya</p>
            <div id="date-time"></div>

        </div>
        <!-- <div  class="flex flex-col justify-center items-center w-3">
    <div class="ml-64 -mt-5 py-5 flex flex-col justify-center items-center w-3"></div>
</div> -->
        <div class="con flex items-center justify-center p-5 w-full gap-5">
            <div class="card w-52 h-96 bg-gradient-to-br from-purple-500 p-5 to-purple-300  flex-col flex justify-center items-center gap-5 rounded-lg">
                <div class="font-bold">EVENTS</div>
                <img src="../../../public/assets/event.png" alt="">
                <p class="text-center text-sm font-normal">Acara seni dan budaya yang mencakup jadwal dan lokasi acara.</p>
                <a href='/events/index' class="py-2 bg-purple-700 hover:bg-purple-900 text-white rounded-md cursor-pointer transition duration-300 ease-in-out">View</a>
            </div>
            <div class="card w-52 h-96 bg-gradient-to-br from-purple-500 p-5 to-purple-300  flex-col flex justify-center items-center gap-5 rounded-lg">
                <div class="font-bold">ORGANIZERS</div>
                <img src="../../../public/assets/organisasi.png" alt="">
                <p class="text-center text-sm font-normal">Berisi penyelenggara, organisasi, kontak dan email</p>
                <a href="/organizers/index" class="py-2 bg-purple-700 hover:bg-purple-900 text-white rounded-md cursor-pointer transition duration-300 ease-in-out">View</a>
            </div>
            <div class="card w-52 h-96 bg-gradient-to-br from-purple-500 p-5 to-purple-300  flex-col flex justify-center items-center gap-5 rounded-lg">
                <div class="font-bold">ATTENDEES</div>
                <img src="../../../public/assets/attendees.png" alt="">
                <p class="text-center text-sm font-normal">Peserta yang terdaftar untuk menghadiri acara seni dan budaya </p>
                <a href="/attendees/index" class="py-2 bg-purple-700 hover:bg-purple-900 text-white rounded-md cursor-pointer transition duration-300 ease-in-out">View</a>
            </div>
            <div class="card w-52 h-96 bg-gradient-to-br from-purple-500 p-5 to-purple-300  flex-col flex justify-center items-center gap-5 rounded-lg">
                <div class="font-bold">SPONSHORSHIP</div>
                <img src="../../../public/assets/sponsor.png" alt="">
                <p class="text-center text-sm font-normal">Pihak yang memberikan dana atau fasilitas untuk acara </p>
                <a href="sponsorships/index" class="py-2 bg-purple-700 hover:bg-purple-900 text-white rounded-md cursor-pointer transition duration-300 ease-in-out">View</a>
            </div>
        </div>
    </div>
</div>

<?php require_once '../public/navbar.php'; ?>
<?php require_once '../public/footer.php'; ?>