
 
    function updateDateTime() {
        const dateTimeElement = document.getElementById("date-time");

        // Buat objek tanggal baru
        const now = new Date();

        // Ambil nama hari
        const days = ["Minggu", "Senin", "Selasa", "Rabu", "Kamis", "Jumat", "Sabtu"];
        const dayName = days[now.getDay()];

        // Ambil tanggal, bulan, dan tahun
        const date = now.getDate();
        const months = [
            "Januari", "Februari", "Maret", "April", "Mei", "Juni",
            "Juli", "Agustus", "September", "Oktober", "November", "Desember"
        ];
        const monthName = months[now.getMonth()];
        const year = now.getFullYear();

        // Format waktu (opsional)
        const hours = now.getHours().toString().padStart(2, '0');
        const minutes = now.getMinutes().toString().padStart(2, '0');
        const seconds = now.getSeconds().toString().padStart(2, '0');

        // Gabungkan dalam satu string
        const dateTimeString = `${dayName}, ${date} ${monthName} ${year} - ${hours}:${minutes}:${seconds}`;

        // Tampilkan di elemen HTML
        dateTimeElement.textContent = dateTimeString;
    }

    setInterval(updateDateTime, 1000);

    // Panggil fungsi sekali saat halaman dimuat
    updateDateTime();


