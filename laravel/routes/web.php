<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

/**
 * KETIKA DIJALANKAN AKAN ERROR KARENA CONTROLLER BELUM DIBUAT, 
 * OLEH KARENA ITU MATIKAN `//` (JANGAN DIHAPUS) ROUTE YANG TIDAK DIKERJAKAN
 */

// 1, Adi Suprono, 0755201120185, Tampilan Awal Website Mahasiswa
Route::get('/home', 'HomeController@index')->name('home');

// 2, Novi Febriani, 2015150002, Halaman Login Website Mahasiswa menggunakan PAuS dan Contoh Tampilan Ganti Password
// #sudah disediakan, coba cek menggunakan php artisan route:list, tinggal ganti view nya

// 3, Rizkia Nur Baety, 2015150003, Halaman Utama Aplikasi Mahasiswa 
Route::get('/dashboard', 'DashboardController@index')->name('dasahboard');

// 4, Fiqriatul Qoriah, 2015150004, Tampilan Menu Aplikasi Mahasiswa 
// #tidak menggunakan route, hanya mengedit view, dan menyesuaiakn linknya sesuai dengan route

// 5, Muhajir, 2015150006, Contoh Tampilan Transkrip Nilai Mahasiswa 
Route::get('/transkrip/nilai', 'NilaiController@index')->name('nilai');

// 6, Rizky Maulana Malik Ibrahim, 2015150007,Contoh Tampilan KKS Mahasiswa 
Route::get('/kks', 'KksController@index')->name('kks');

// 7, Tri Aji Purnomo, 2015150008, Contoh Pengisian KRS Mahasiswa 
Route::get('/krs', 'KrsController@showFormPengisianKrs')->name('pengisian krs');

// 8, Andum Kurnia Rizkiana, 2015150009, Contoh Setelah Pengisian KRS Mahasiswa 
Route::get('/krs/result', 'KrsController@showResultKrs')->name('result krs');

// 9, Fajar Rizki Haryanto, 2015150010, Tampilan Halaman Perubahan Kartu Rencana Studi (PKRS)
Route::get('/krs/perubahan', 'KrsController@showFormPerubahanKrs')->name('perubahan krs');

// 10, Alfian Ramadhan, 2015150012, Tampilan Halaman KRS Semester Antara
Route::get('/krs/smt_antara', 'KrsController@showFormKrsSmtAntara')->name('krs smt antara');

// 11, Hasogi Candra Suseno, 2015150013, Tampilan Halaman Detail KRS Antara
Route::get('/krs/smt_antara/detail', 'KrsController@showDetailKrsSmtAntara')->name('detail krs smt antara');

// 12, Nur Rosyid, 2015150014, contoh hasil download KRS semester antara (hal 13)
Route::get('/krs/smt_antara/download', 'KrsController@showDownloadKrsSmtAntara')->name('download krs smt antara');

// 13, Haryati Rusdiyah, 2015150017, Contoh Tampilan Kurikulum
Route::get('/kurikulum', 'KurikulumController@index')->name('kurikulum');

// 14, Saromah, 2015150020,15 . Contoh Tampilan Form Konsultasi Mahasiswa
Route::get('/konsultasi', 'KonsultasiController@index')->name('konsultasi');

// 15, Sri Handayani, 2015150021, Contoh Lihat Pesan Konsultasi Mahasiswa
Route::get('/konsultasi/{id_konsultasi}', 'KonsultasiController@showDetailKonsultasi')->name('detail konsultasi');

// 16, Muhammad Armysyifa, 2015150023, Form Tulis Pesan Konsultasi Mahasiswa
Route::get('/konsultasi/new', 'KonsultasiController@showFormKonsultasi')->name('new konsultasi');

// 17, Rohmat Dwi Aryanto, 2015150027, Contoh Tampilan Jadwal dan Absensi Kuliah
Route::get('/jadwal', 'JadwalController@index')->name('jadwal');

// 18, Nala Fisnia, 2015150029, Contoh Tampilan Detail Absensi Kuliah
Route::get('/jadwal/{id_jadwal}/absensi', 'AbsensiKuliahController@index')->name('absensi kuliah');

// 19, Andi Musin, 2015150039, Contoh Tampilan Transkrip Kemahasiswaan
Route::get('/transkrip/kemahasiswaan', 'TranskripController@index')->name('transkrip kemahasiswaan');

// 20, David Abdurrokhman, 2015150040,Tampilan Awal Informasi Umum pada Halaman KKNm
Route::get('/kknm', 'KknmController@index')->name('kknm');

// 21, Azza Fahriani, 2015150047,Menu Kuliah Kerja Nyata Tab Pendaftaran KKNmM
Route::get('/kknm/daftar', 'KknmController@showFormKknmm')->name('daftar kknmm');

// 22, Dimas Mandalin Putra, 2015150051,tampilan bukti pendaftaran KKNmM
Route::get('/kknm/result', 'KknmController@showResultKknmm')->name('result kknmm');
Route::get('/kknm/cetak', 'KknmController@showCetakKknmm')->name('cetak kknmm');

// 23, Edi Purnomo, 2015150053,Menu Kuliah Kerja Nyata Tab Plotting KKNmM
Route::get('/kknm/plotting', 'KknmController@showPlottingKknmm')->name('plotting kknmm');

// 24, Rosida El Rahma, 2015150055,Menu Kuliah Kerja Nyata Tab Informasi Lokasi KKNmM
Route::get('/kknm/lokasi', 'KknmController@showLokasigKknmm')->name('lokasi kknmm');

// 25, Fu'ad Ahmad Endaryanto, 2015150056,Menu Kuliah Kerja Nyata Tab Informasi Kelompok KKNmM
Route::get('/kknm/kelompok', 'KknmController@showLokasigKknmm')->name('kelompok kknmm');

// 26, Gandung Kurniawan Puastowo, 2015150057,Menu Kuliah Kerja Nyata Tab Pembatalan KKNmM
Route::get('/kknm/pembatalan', 'KknmController@showPembatalanKknmm')->name('pembatalan kknmm');

// 27, Yoga, 2015150061,Halaman Menu Daftar Semester Antara - Tab Informasi Umum
Route::get('/semester_antara', 'SemesterAntaraController@showInfo')->name('info smt antara');

// 28, Hani Faturafiqoh, 2015150064,Halaman Menu Daftar Semester Antara - Tab Mata Kuliah Semester Antara
Route::get('/semester_antara/matakuliah', 'SemesterAntaraController@showMatakuliahList')->name('matakuliah smt antara');

// 29, Very Afirman, 2015150068,Halaman Menu Daftar Semester Antara - Tab Pendaftaran Semester Antara
Route::get('/semester_antara/daftar', 'SemesterAntaraController@showPendaftaran')->name('daftar smt antara');

// 30, Arifatun Niswah, 2015150070,Tampilan Informasi Tagihan
Route::get('/semester_antara/tagihan', 'SemesterAntaraController@showTagihan')->name('tagihan smt antara');

// 31, Catra Andika Ramadhani, 2015150071,Tampilan Rincian Informasi Tagihan
Route::get('/semester_antara/tagihan/detail', 'SemesterAntaraController@showTagihanDetail')->name('detail tagihan smt antara');

// 32, Adji Septiawan, 2015150072,Tampilan Informasi Rincian Tagihan [Download PDF]
Route::get('/semester_antara/tagihan/cetak', 'SemesterAntaraController@showTagihanCetak')->name('cetak tagihan smt antara');

// 33, Disca Ferly Adistya, 2015150077,Tampilan Informasi Tagihan Status Sudah Bayar
Route::get('/semester_antara/status_bayar', 'SemesterAntaraController@showStatusBayar')->name('status bayar smt antara');

// 34, Muhammad Job Jailani, 2015150078,Contoh Tampilan Unggah Karya Ilmiah
Route::get('/karya_ilmiah', 'KaryaIlmiahController@showInfo')->name('info karya ilmiah');
Route::get('/karya_ilmiah/unggah', 'KaryaIlmiahController@showFormUnggah')->name('unggah karya ilmiah');

// 35, Eko Wahyudi, 2015150082,Contoh Tampilan Unggah File
Route::get('/karya_ilmiah/unggah/file', 'KaryaIlmiahController@showFormUnggahFile')->name('unggah file karya ilmiah');

// 36, Aji Tri Santosa, 2015150085,Contoh Tampilan Halaman Wisuda
Route::get('/wisuda', 'WisudaController@showInfo')->name('info wisuda');

// 37, Iqbal Faton, 2015150091,"Tampilan Pelatihan, Seminar, Diskusi, dll"
Route::get('/kegiatan', 'KegiatanController@showInfo')->name('info kegiatan');

// 38, Rizaq Dian Akmal, 2015150097,Contoh Tampilan Rincian Tagihan Mahasiswa
Route::get('/registrasi/rincian_tagihan', 'RegistrasiController@showRincianTagihan')->name('rincian tagihan');

// 39, Dino Mahardhika Rizki, 2015150098,Contoh Tampilan Status Her-Registrasi
Route::get('/registrasi/status_her', 'RegistrasiController@showStatusHer')->name('her registrasi');

// 40, Adi Sukron Ginanjar, 2015150103,Contoh Pengisian Biodata `Data Pribadi` Mahasiswa
Route::get('/biodata/data_diri', 'BiodataController@showFormDatadiri')->name('form datadiri');

// 41, Zulhilmi Dharma Nugraha, 2015150111,Contoh Pengisian Biodata `Alamat` Mahasiswa
Route::get('/biodata/data_alamat', 'BiodataController@showFormAlamat')->name('form alamat');

// 42, Ali Hasan, 8011161,Contoh Pengisian Biodata `Data Keluarga` Mahasiswa
Route::get('/biodata/data_keluarga', 'BiodataController@showFormKeluarga')->name('form keluarga');