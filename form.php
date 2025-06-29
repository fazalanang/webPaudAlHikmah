<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8" />
    <title>Form Pendaftaran</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport" />

    <!-- Google Fonts -->
    <link
      href="https://fonts.googleapis.com/css2?family=Heebo:wght@400;500;600&display=swap"
      rel="stylesheet"
    />

    <!-- Bootstrap & Icons -->
    <link
      href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/css/bootstrap.min.css"
      rel="stylesheet"
    />
    <link
      href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css"
      rel="stylesheet"
    />

    <!-- External CSS -->
    <link href="form.html" rel="stylesheet" />
    <!-- Customized Bootstrap Stylesheet -->
    <link href="css/bootstrap.min.css" rel="stylesheet" />
    <!-- Template Stylesheet -->
    <link href="css/style.css" rel="stylesheet" />
  </head>

  <body>
    <!-- Navbar -->
    <nav
      class="navbar navbar-expand-lg bg-white navbar-light sticky-top px-4 px-lg-5 py-lg-0"
    >
      <a href="index.html" class="navbar-brand">
        <h1 class="m-0 text-primary">
          <i class="fa fa-book-reader me-3"></i>Paud Al-Hikmah
        </h1>
      </a>
      <button
        type="button"
        class="navbar-toggler"
        data-bs-toggle="collapse"
        data-bs-target="#navbarCollapse"
      >
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarCollapse">
        <div class="navbar-nav mx-auto">
          <a href="index.php" class="nav-item nav-link">Home</a>
          <a href="gallery.html" class="nav-item nav-link">Gallery</a>
          <a href="classes.html" class="nav-item nav-link">Classes</a>
          <a href="ppdb.html" class="nav-item nav-link active">PPDB</a>
          <a href="contact.html" class="nav-item nav-link">Contact Us</a>
        </div>
        <a
          href="login.php"
          class="btn btn-primary rounded-pill px-3 d-none d-lg-block"
          >Login<i class="fa fa-arrow-right ms-3"></i
        ></a>
      </div>
    </nav>

    <!-- Page Header -->
    <div class="container-xxl py-5 page-header position-relative mb-5">
      <div class="container py-5">
        <h1 class="display-2 text-white animated slideInDown mb-4">
          Form PPDB
        </h1>
        <nav aria-label="breadcrumb animated slideInDown">
          <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="index.html">Home</a></li>
            <li class="breadcrumb-item"><a href="ppdb.html">PPDB</a></li>
            <li class="breadcrumb-item text-white active" aria-current="page">
              Form PPDB
            </li>
          </ol>
        </nav>
      </div>
    </div>

    <div class="container py-5">
      <div class="form-section">
        <h1 class="mb-4 text-center">Form Pendaftaran</h1>
        <form id="registrationForm" method="post">
          <div class="row g-3">
            <div class="col-md-6">
              <div class="form-floating">
                <input
                  type="text"
                  class="form-control"
                  id="fullName"
                  placeholder="Nama Lengkap"
                  name="namaLengkap"
                />
                <label for="fullName">Nama Lengkap</label>
              </div>
            </div>
            <div class="col-md-6">
              <div class="form-floating">
                <input
                  type="text"
                  class="form-control"
                  id="nickname"
                  placeholder="Nama Panggilan"
                  nama="namaPanggilan"
                />
                <label for="nickname">Nama Panggilan</label>
              </div>
            </div>

            <div class="col-md-6">
              <div class="form-floating">
                <input
                  type="text"
                  class="form-control"
                  id="birthPlaceDate"
                  placeholder="Tempat Tanggal Lahir"
                  name="ttl"
                />
                <label for="birthPlaceDate">Tempat Tanggal Lahir</label>
              </div>
            </div>
            <div class="col-md-6">
              <div class="form-floating">
                <select class="form-select" id="gender" name="jenisKelamin">
                  <option selected disabled>Pilih jenis kelamin</option>
                  <option value="Laki-laki">Laki-laki</option>
                  <option value="Perempuan">Perempuan</option>
                </select>
                <label for="gender">Jenis Kelamin</label>
              </div>
            </div>

            <div class="col-md-6">
              <div class="form-floating">
                <input
                  type="text"
                  class="form-control"
                  id="religion"
                  placeholder="Agama"
                  name="agama"
                />
                <label for="religion">Agama</label>
              </div>
            </div>
            <div class="col-md-6">
              <div class="form-floating">
                <input
                  type="number"
                  class="form-control"
                  id="childNumber"
                  placeholder="Anak Ke"
                  name="anakKe"
                />
                <label for="childNumber">Anak Ke</label>
              </div>
            </div>

            <div class="col-md-6">
              <div class="form-floating">
                <input
                  type="number"
                  class="form-control"
                  id="siblings"
                  placeholder="Jumlah Saudara Kandung"
                  name="jumlahSaudaraKandung"
                />
                <label for="siblings">Jumlah Saudara Kandung</label>
              </div>
            </div>
            <div class="col-md-6">
              <div class="form-floating">
                <input
                  type="text"
                  class="form-control"
                  id="nik"
                  placeholder="NIK"
                  name="nik"
                />
                <label for="nik">NIK</label>
              </div>
            </div>

            <div class="col-md-6">
              <div class="form-floating">
                <input
                  type="text"
                  class="form-control"
                  id="height"
                  placeholder="Tinggi Badan"
                  name="tinggiBadan"
                />
                <label for="height">Tinggi Badan</label>
              </div>
            </div>
            <div class="col-md-6">
              <div class="form-floating">
                <input
                  type="text"
                  class="form-control"
                  id="weight"
                  placeholder="Berat Badan"
                  name="beratBadan"
                />
                <label for="weight">Berat Badan</label>
              </div>
            </div>

            <div class="col-12 form-gap pt-5">
              <div class="form-floating">
                <input
                  type="text"
                  class="form-control"
                  id="fatherName"
                  placeholder="Nama Ayah"
                  name="namaAyah"
                />
                <label for="fatherName">Nama Ayah</label>
              </div>
            </div>
            <div class="col-md-6">
              <div class="form-floating">
                <input
                  type="text"
                  class="form-control"
                  id="fatherBirth"
                  placeholder="Tempat Tanggal Lahir"
                  name="ttlAyah"
                />
                <label for="fatherBirth">Tempat Tanggal Lahir</label>
              </div>
            </div>
            <div class="col-md-6">
              <div class="form-floating">
                <input
                  type="text"
                  class="form-control"
                  id="fatherJob"
                  placeholder="Pekerjaan"
                  name="pekerjaanAyah"
                />
                <label for="fatherJob">Pekerjaan</label>
              </div>
            </div>
            <div class="col-md-6">
              <div class="form-floating">
                <input
                  type="text"
                  class="form-control"
                  id="fatherEdu"
                  placeholder="Pendidikan Terakhir"
                  name="pendidikanAyah"
                />
                <label for="fatherEdu">Pendidikan Terakhir</label>
              </div>
            </div>
            <div class="col-md-6">
              <div class="form-floating">
                <input
                  type="text"
                  class="form-control"
                  id="fatherIncome"
                  placeholder="Penghasilan Perbulan"
                  name="penghasilanAyah"
                />
                <label for="fatherIncome">Penghasilan Perbulan</label>
              </div>
            </div>
            <div class="col-md-6">
              <div class="form-floating">
                <input
                  type="text"
                  class="form-control"
                  id="fatherPhone"
                  placeholder="No. Telp"
                  name="noTlpAyah"
                />
                <label for="fatherPhone">No. Telp</label>
              </div>
            </div>

            <div class="col-12 form-gap pt-5">
              <div class="form-floating">
                <input
                  type="text"
                  class="form-control"
                  id="motherName"
                  placeholder="Nama Ibu"
                  name="namaIbu"
                />
                <label for="motherName">Nama Ibu</label>
              </div>
            </div>
            <div class="col-md-6">
              <div class="form-floating">
                <input
                  type="text"
                  class="form-control"
                  id="motherBirth"
                  placeholder="Tempat Tanggal Lahir"
                  name="ttlIbu"
                />
                <label for="motherBirth">Tempat Tanggal Lahir</label>
              </div>
            </div>
            <div class="col-md-6">
              <div class="form-floating">
                <input
                  type="text"
                  class="form-control"
                  id="motherJob"
                  placeholder="Pekerjaan"
                  name="pekerjaanIbu"
                />
                <label for="motherJob">Pekerjaan</label>
              </div>
            </div>
            <div class="col-md-6">
              <div class="form-floating">
                <input
                  type="text"
                  class="form-control"
                  id="motherEdu"
                  placeholder="Pendidikan Terakhir"
                  name="pendidikanIbu"
                />
                <label for="motherEdu">Pendidikan Terakhir</label>
              </div>
            </div>
            <div class="col-md-6">
              <div class="form-floating">
                <input
                  type="text"
                  class="form-control"
                  id="motherIncome"
                  placeholder="Penghasilan Perbulan"
                  name="penghasilanIbu"
                />
                <label for="motherIncome">Penghasilan Perbulan</label>
              </div>
            </div>
            <div class="col-md-6">
              <div class="form-floating">
                <input
                  type="text"
                  class="form-control"
                  id="motherPhone"
                  placeholder="No. Telp"
                  name="noTlpIbu"
                />
                <label for="motherPhone">No. Telp</label>
              </div>
            </div>

            <div class="col-12 form-gap pt-5">
              <div class="form-floating">
                <input
                  type="text"
                  class="form-control"
                  id="distance"
                  placeholder="Jarak dari Rumah ke Sekolah"
                  name="jarakRumahSekolah"
                />
                <label for="distance">Jarak dari Rumah ke Sekolah</label>
              </div>
            </div>
            <div class="col-md-12">
              <div class="form-floating">
                <select class="form-select" id="transport" name="Kendaraan">
                  <option selected disabled>Pilih Kendaraan</option>
                  <option value="Jalan Kaki">Jalan Kaki</option>
                  <option value="Motor">Motor</option>
                  <option value="Mobil">Mobil</option>
                </select>
                <label for="transport">Kendaraan</label>
              </div>
            </div>
            <div class="col-12">
              <h5 class="mt-5">Unggah Dokumen</h5>
              <div class="mb-3">
                <label for="akta" class="form-label"
                  >Fotokopi Akta Kelahiran</label
                >
                <input class="form-control" type="file" id="akta" />
              </div>
              <div class="mb-3">
                <label for="kk" class="form-label"
                  >Fotokopi Kartu Keluarga</label
                >
                <input class="form-control" type="file" id="kk" />
              </div>
              <div class="mb-3">
                <label for="ktp" class="form-label"
                  >Fotokopi KTP Orang Tua</label
                >
                <input class="form-control" type="file" id="ktp" />
              </div>
            </div>
            <div class="col-12">
              <button class="btn btn-primary w-100 py-3 mt-4" type="">
                Submit
              </button>
            </div>
          </div>
        </form>
      </div>
    </div>
    <div
      class="modal fade"
      id="infoModal"
      tabindex="-1"
      aria-labelledby="infoModalLabel"
      aria-hidden="true"
    >
      <div class="modal-dialog">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="infoModalLabel">
              Informasi Biaya Pendaftaran
            </h5>
            <button
              type="button"
              class="btn-close"
              data-bs-dismiss="modal"
              aria-label="Close"
            ></button>
          </div>
          <div class="modal-body">
            <p>
              Selanjutnya kami sampaikan kepada Orang tua/Wali murid, biaya
              pendaftaran uang masuk sekolah PAUD KB AL HIKMAH Tahun Ajaran 2024
              / 2025 sebesar Rp. 1.800.000,- yang terdiri dari :
            </p>
            <ul>
              <li>Uang Sarana dan Prasarana Sekolah</li>
              <li>Perlengkapan Sekolah untuk 1 tahun</li>
              <li>Buku Pembelajaran 1 Tahun</li>
              <li>Seragam Sekolah 5 Stel + 1 kaos kegiatan</li>
              <li>Kegiatan Cooking Class untuk 1 Tahun (4 kali kegiatan)</li>
              <li>Kegiatan Menu Sehat 1 Tahun (4 kali kegiatan)</li>
              <li>SPP Bulan Juli 2024 Rp. 160.000,-</li>
            </ul>
            <p><strong>Keterangan:</strong></p>
            <ul>
              <li>1x Pembayaran = Rp. 1.600.000</li>
              <li>
                2x Pembayaran = Rp. 1.700.000 (I = Rp. 1.000.000, II = Rp.
                700.000)
              </li>
              <li>
                3x Pembayaran = Rp. 1.800.000 (I = Rp. 1.000.000, II = Rp.
                500.000, III = Rp. 300.000)
              </li>
            </ul>
            <p>
              Demikian pembertahuan ini kami sampaikan atas perhatian Bapak/Ibu
              Orang Tua Wali Murid, kami ucapkan terimakasih.
            </p>
          </div>
          <div class="modal-footer">
            <button
              type="button"
              class="btn btn-secondary"
              data-bs-dismiss="modal"
            >
              Kembali ke Form
            </button>
            <button type="submit" class="btn btn-primary" id="submitBtn">
              Lanjutkan Pembayaran
            </button>
          </div>
        </div>
      </div>
    </div>
    <!-- Bootstrap JS & Dependencies -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>

    <!-- Your Custom JS (MUST BE LAST) -->
    <script src="js/form.js"></script>
  </body>
</html>
