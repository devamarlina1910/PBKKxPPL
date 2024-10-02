<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sistem Manajemen Barang Pada UNIB Store</title>
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        /* Custom styling for a more appealing look */
        body {
            font-family: Arial, sans-serif;
            line-height: 1.6;
        }

        header {
            background: linear-gradient(90deg, rgba(2, 0, 36, 1) 0%, rgba(9, 9, 121, 1) 35%, rgba(0, 212, 255, 1) 100%);
            color: white;
        }

        header h1 {
            font-size: 3rem;
            font-weight: bold;
        }

        header p {
            font-size: 1.25rem;
        }

        section {
            padding: 60px 0;
        }

        .card:hover {
            transform: translateY(-10px);
            transition: transform 0.3s ease-in-out;
        }

        footer {
            background: #0d6efd;
            color: white;
            padding: 30px 0;
        }

        .btn-custom {
            background-color: #ffffff;
            color: #0d6efd;
            border: 2px solid #0d6efd;
            transition: background-color 0.3s, color 0.3s;
        }

        .btn-custom:hover {
            background-color: #0d6efd;
            color: #fff;
        }

        ul.list-group li {
            background-color: transparent;
        }
    </style>
</head>

<body>
    <!-- Header Section -->
    <header class="text-center py-5">
        <div class="container">
            <h1>Sistem Manajemen Barang</h1>
            <p class="lead">Kelola Stok dan Inventaris Barang Anda Secara Efisien</p>
            <a href="#features" class="btn btn-custom btn-lg mt-3">Jelajahi Fitur</a>
        </div>
    </header>

    <!-- About Section -->
    <section id="about" class="bg-light text-center">
        <div class="container">
            <h2>Tentang Proyek Ini</h2>
            <p class="lead mt-3">
                Sistem Manajemen Barang kami dirancang untuk menyederhanakan pengelolaan inventaris di gudang atau lingkungan ritel. 
                Mulai dari melacak inventaris, mengelola pesanan, hingga memantau level stok, sistem kami menawarkan solusi intuitif dan kuat untuk mengelola barang dengan lebih efektif.
            </p>
        </div>
    </section>

    <!-- Features Section -->
    <section id="features">
        <div class="container">
            <h2 class="text-center">Fitur Utama</h2>
            <div class="row mt-4">
                <div class="col-md-6 col-lg-3">
                    <div class="card h-100 shadow-sm">
                        <div class="card-body text-center">
                            <h5 class="card-title">Pelacakan Inventaris</h5>
                            <p class="card-text">Pantau dan lacak level stok barang secara real-time.</p>
                            <a href="#" class="btn btn-primary mt-3">Pelajari Lebih Lanjut</a>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-3">
                    <div class="card h-100 shadow-sm">
                        <div class="card-body text-center">
                            <h5 class="card-title">Laporan Real-Time</h5>
                            <p class="card-text">Hasilkan laporan rinci tentang status inventaris, penjualan, dan banyak lagi.</p>
                            <a href="#" class="btn btn-primary mt-3">Pelajari Lebih Lanjut</a>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-3">
                    <div class="card h-100 shadow-sm">
                        <div class="card-body text-center">
                            <h5 class="card-title">Pemberitahuan & Peringatan</h5>
                            <p class="card-text">Dapatkan notifikasi ketika stok rendah atau ada pengiriman mendatang.</p>
                            <a href="#" class="btn btn-primary mt-3">Pelajari Lebih Lanjut</a>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-3">
                    <div class="card h-100 shadow-sm">
                        <div class="card-body text-center">
                            <h5 class="card-title">Manajemen Pemasok & Vendor</h5>
                            <p class="card-text">Kelola hubungan dengan pemasok dan vendor secara efisien.</p>
                            <a href="#" class="btn btn-primary mt-3">Pelajari Lebih Lanjut</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Benefits Section -->
    <section id="benefits" class="bg-light text-center">
        <div class="container">
            <h2>Manfaat</h2>
            <ul class="list-group list-group-flush mt-3 text-start mx-auto" style="max-width: 600px;">
                <li class="list-group-item">Meningkatkan efisiensi dalam mengelola stok dan barang.</li>
                <li class="list-group-item">Mengurangi kesalahan manual dan keterlambatan dalam pemrosesan pesanan.</li>
                <li class="list-group-item">Visibilitas yang lebih baik ke level inventaris, membantu menghindari kekurangan stok atau overstock.</li>
                <li class="list-group-item">Mendukung pengambilan keputusan yang lebih baik dengan analitik dan laporan rinci.</li>
                <li class="list-group-item">Penghematan waktu dan biaya untuk operasional bisnis.</li>
            </ul>
        </div>
    </section>

    <!-- Footer Section -->
    <footer class="text-center">
        <div class="container">
            <h2>Mulai Kelola Barang Anda Hari Ini!</h2>
            <p class="lead">Siap menyederhanakan manajemen barang Anda? Hubungi kami untuk informasi lebih lanjut tentang bagaimana sistem kami dapat membantu bisnis Anda.</p>
            <a href="mailto:contact@yourcompany.com" class="btn btn-light btn-lg">Hubungi Kami</a>
        </div>
    </footer>

    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js"></script>
</body>

</html>
