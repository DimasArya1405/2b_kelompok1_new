<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Anton&family=Merriweather:ital,wght@0,300;0,400;0,700;0,900;1,300;1,400;1,700;1,900&family=New+Amsterdam&family=Orbitron:wght@400..900&family=Poppins:wght@200;400;500;700;800;900&family=Rajdhani:wght@300;400;500;600;700&display=swap" rel="stylesheet">

    <style>
        * {
            font-family: 'Poppins', sans-serif;
        }

        th,
        td,
        input {
            border: 1px solid #333;
            padding: 7px;
        }
        .btn-create{
            width: 45rem;
            margin-top: 2rem;
        }

        form {
            border: 1px solid black;
            display: flex;
            flex-direction: column;
            padding: 1rem;
            border-radius: 10px;
            width: 45rem;
            margin-top: 1rem;
            background-color: #ffff;
            box-shadow: 0 3px 3px 0 black !important;
        }

        form input {
            margin-bottom: 10px;
            border-radius: 5px;
        }

        th {
            padding-left: 5px;
            margin-right: 5px;
        }

        .judul {
            box-shadow: 0 5px 5px 0 black !important;
        }

        table {
            box-shadow: 0 3px 3px 0 black !important;
            border-radius: 10px !important;
            border-collapse: separate;
            border-collapse: separate;
            border-spacing: 0;
            /* Hilangkan jarak antar sel */
            overflow: hidden;
            /* Potong isi agar mengikuti radius */
            width: 60rem !important;
        }

        .welcome {
            font-size: 3rem;
            letter-spacing: 5px;
        }

        img {
            width: 8rem;
            height: 8rem;
        }

        .card {
            box-shadow: 0 5px 10px 0 black !important;
        }

        .con .font-bold {
            letter-spacing: 3px;
        }

        .con a {
            width: 5rem;
            text-align: center;
        }

        .outlined-text {
            letter-spacing: 3rem;
            font-size: 100px;
            /* Ukuran teks besar */
            color: rgba(2555, 255, 255, 0.2);
            text-align: center;
            /* Agar teks rata tengah */
        }
        label{
            letter-spacing: 2px;
            margin-top: 5px;
            margin-bottom: 2px;
        }


        /* Gaya untuk seluruh scrollbar */
        ::-webkit-scrollbar {
            width: 10px;
            /* Lebar scrollbar vertikal */
            height: 10px;
            /* Tinggi scrollbar horizontal */
        }

        /* Gaya untuk track scrollbar */
        ::-webkit-scrollbar-track {
            background: #e0c1ff;
            /* Warna background */
            border-radius: 5px;
            /* Membulatkan sudut */
        }

        /* Gaya untuk handle (thumb) */
        ::-webkit-scrollbar-thumb {
            background: #972fff;
            /* Warna handle */
            border-radius: 5px;
            /* Membulatkan sudut */
        }

        /* Gaya untuk handle saat di-hover */
        ::-webkit-scrollbar-thumb:hover {
            background: #870fff;
            /* Warna saat di-hover */
        }

        .overlay {
            position: absolute;
            inset: 0;
            /* Mengisi seluruh container */
            background: linear-gradient(to bottom, rgba(0, 0, 0, 0), #fff);
            /* Gradasi dari transparan ke hitam */
            z-index: -1;
            /* Layer di atas video */
        }
    </style>
</head>


<body class=" bg-purple-100">

