<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <title>Data Penyewa</title>
</head>
<script>
  document.addEventListener('DOMContentLoaded', function() {
    const backButton = document.querySelector('.logo-link');

    backButton.addEventListener('click', function(event) {
      event.preventDefault(); 

      window.location.href = "http://127.0.0.1:8000/dashboard"; 
    });
  });
</script>
<script>
        // Fungsi untuk menampilkan pesan konfirmasi saat tombol hapus ditekan
        function confirmDelete() {
            return confirm('Apakah Anda yakin ingin menghapus data ini?');
        }

        // Mendapatkan semua tombol hapus dengan class btn-danger
        const deleteButtons = document.querySelectorAll('.btn-danger');

        // Menambahkan event listener untuk setiap tombol hapus
        deleteButtons.forEach(button => {
            button.addEventListener('click', (event) => {
                // Mencegah aksi default dari tombol submit
                event.preventDefault();

                // Menampilkan konfirmasi sebelum menghapus
                if (confirmDelete()) {
                    // Jika dikonfirmasi, submit form
                    event.target.parentElement.submit();
                }
            });
        });
</script>
</body>
</html>

<body>
<style>
    body {
            background-image: url('data_gambar/logo_rrc.jpg') ; 
            background-size: cover; /* Agar gambar sesuai dengan ukuran layar */
            background-position: center; /* Menentukan posisi gambar */
            color: white; /* Warna teks */
    }
  .container {
    display: flex; /* Menggunakan flexbox untuk susunan konten */
    align-items: center;
    background-color: #C02323; /* Warna latar belakang */
    color: black; /* Warna teks */
    padding: 10px; /* Spasi di sekitar teks */
    max-width: 2000px; /* Lebar maksimum kontainer */
  }
  .text {
    flex-grow: 1; /* Memperluas teks untuk mengisi ruang yang tersedia */
    text-align: center; /* Posisikan teks di tengah */
    margin-left: 10px;
  }
  .table {
    background-color: black;
    background-color: rgba(0, 0, 0, 0.8);
    color: whitesmoke;
    margin-top: 80px; 
  }
  th, td {
    border: 1px solid white; /* Garis tepi untuk sel */
    padding: 8px; /* Ruang di dalam sel */
  }
  h1 {
    margin-right: 50px; 
  }
  .btn-tambah {
        margin-top: 50px; /* Tambahkan margin-top untuk memberikan jarak */
        margin-bottom: 50px; /* Optional: Tambahkan margin-bottom untuk penyesuaian lebih baik */
   }
    .logo-link {
        max-width: 50px; max-height: 50px;
        color: inherit; /* Mewarisi warna dari kontainer */
    }
</style>
<div class="container"> 
    <img src="https://www.pngarts.com/files/8/Round-Back-Button-PNG-Transparent-Image.png" class="logo-link" alt="logo">
    <div class="text">
        <h1>Data Penyewa</h1>
    </div>
</div>
   <table class="table">
        <thead>
            <tr>
                <th>No</th>
                <th>Id_Penywa</th>
                <th>Nama_Penyewa</th>
                <th>Email</th>
                <th>No_identitas</th>
                <th>No_telephone</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td>1</td>
                <td>1</td>
                <td>Nama Penyewa 1</td>
                <td>email1@example.com</td>
                <td>12345</td>
                <td>1234567890</td>
                <td>
                    <a href="{{ route('penyewa.edit', 1) }}" class="btn btn-primary">Edit</a>
                    <<form action="{{ route('penyewa.destroy', 1) }}" method="POST">
                        @csrf <!-- Tambahkan tag @csrf di dalam formulir -->
                        @method('DELETE')
                        <button type="submit" class="btn btn-danger">Delete</button>
                    </form>
                </td>
            </tr>
            <tr>
                <td>2</td>
                <td>2</td>
                <td>Nama Penyewa 2</td>
                <td>email2@example.com</td>
                <td>54321</td>
                <td>9876543210</td>
                <td>
                    <a href="{{ route('penyewa.edit', 2) }}" class="btn btn-primary">Edit</a>
                    <form action="{{ route('penyewa.destroy', 1) }}" method="POST">
                        @csrf <!-- Tambahkan tag @csrf di dalam formulir -->
                        @method('DELETE')
                        <button type="submit" class="btn btn-danger">Delete</button>
                    </form>
                </td>
            </tr>
        </tbody>
    </table>

    <a href="{{ route('penyewa.create') }}" class="btn btn-primary btn-tambah">Tambah</a>

    <script src="path_to_your_bootstrap_js/bootstrap.min.js"></script>
</body>

</html>
