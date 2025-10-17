<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Selamat Datang di LaraPress</title>
    <style>
        /* Reset dasar */
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            font-family: "Poppins", Arial, sans-serif;
        }

        /* Gaya body */
        body {
            background: linear-gradient(135deg, #f0f8ff, #dbeafe);
            color: #333;
            min-height: 100vh;
            display: flex;
            flex-direction: column;
            align-items: center;
            justify-content: center;
            padding: 20px;
        }

        /* Judul utama */
        h1 {
            color: #1e3a8a;
            font-size: 2.5rem;
            margin-bottom: 1rem;
            text-align: center;
            text-shadow: 1px 1px 3px rgba(0, 0, 0, 0.1);
        }

        /* Paragraf */
        p {
            font-size: 1.1rem;
            margin-bottom: 1.5rem;
            text-align: center;
            max-width: 600px;
        }

        /* Link */
        a {
            display: inline-block;
            text-decoration: none;
            background-color: #2563eb;
            color: white;
            padding: 10px 18px;
            border-radius: 8px;
            transition: background-color 0.3s ease, transform 0.2s ease;
            margin: 5px;
        }

        a:hover {
            background-color: #1e40af;
            transform: scale(1.05);
        }

        /* Responsif */
        @media (max-width: 600px) {
            h1 {
                font-size: 2rem;
            }

            p {
                font-size: 1rem;
                padding: 0 10px;
            }

            a {
                padding: 8px 14px;
                font-size: 0.95rem;
            }
        }
    </style>
</head>
<body>
    <h1>Selamat Datang di Blog LaraPress</h1>
    <p>Ini adalah halaman utama dari aplikasi blog kita.</p>
    <a href="/tentang-kami">Lihat Halaman Tentang Kami</a>

    <p>Ini adalah halaman Kontak dari aplikasi blog kita.</p>
    <a href="/kontak-kami">Lihat Halaman Kontak Kami</a>
</body>
</html>