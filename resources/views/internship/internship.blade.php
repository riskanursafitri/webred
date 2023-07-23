@extends('layouts.navbar')
@section('content')
@push('styles')
<link href="{{ asset('user/assets/vendor/aos/aos.css') }}" rel="stylesheet">
<link href="{{ asset('user/assets/vendor/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet">
<link href="{{ asset('user/assets/vendor/bootstrap-icons/bootstrap-icons.css') }}" rel="stylesheet">
<link href="{{ asset('user/assets/css/style.css') }}" rel="stylesheet">
@endpush

<section id="detailint" class="detailint">

  <div class="container" data-aos="fade-up" style="padding-top: 8%;">
    <div class="row gy-4">
      <div class="col-lg-4">
        <div class="content px-xl-5">
          <h3>Internship <strong>Standard Operating Procedure</strong></h3>
          <p>
            Panduan ini berisi definisi prakerin, konsep prakerin, tujuan rakerin, peran, peraturan, konsekuensi, agenda dan syarat seorang peserta prakerin dinyatakan telah lulus prakerin. Pedoman ini wajib dipahami oleh peserta prakerin maupun yang berencana mendaftar prakerin, agar bisa beradaptasi dengan baik, menghindari kesalahpahaman dan mendapatkan hasil prakerin yang maksimal.
          </p>
          <div class="joininternship">
            <a href="{{ URL::to('/internshipdata') }}">Join Internship</a>
          </div>
        </div>
      </div>


      <div class="col-lg-8">
        <div class="accordion accordion-flush" id="detailintlist" data-aos="fade-up" data-aos-delay="100">

          <!-- definition -->
          <div class="accordion-item">
            <h3 class="accordion-header">
              <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#detailint-content-1">
                <span class="num">1.</span>
                Definition of Internship
              </button>
            </h3>
            <div id="detailint-content-1" class="accordion-collapse collapse" data-bs-parent="#detailintlist">
              <div class="accordion-body">
                Menurut Undang-Undang Nomor 13 Tahun 2003 tentang Ketenagakerjaan, Pemagangan adalah bagian dari sistem pelatihan kerja yang diselenggarakan secara terpadu antara pelatihan di lembaga pelatihan dengan bekerja secara langsung di bawah bimbingan dan pengawasan instruktur atau pekerja/buruh yang lebih berpengalaman, dalam proses produksi barang dan/atau jasa di perusahaan, dalam rangka menguasai keterampilan atau keahlian tertentu.
                <br><br>Prakerin (Praktik Kerja Industri) adalah kegiatan pendidikan, pelatihan dan pembelajaran yang dilaksanakan di dunia usaha atau dunia industri yang relevan dengan kompetensi (kemampuan) siswa sesuai bidangnya.
                <br><br>Dalam sistem ini, prakerin dilakukan dengan konsep pendidikan, yang mana terdapat proses pengubahan sikap dan perilaku peserta sebagai usaha mendewasakan peserta prakerin dalam hal dunia pekerjaan, yang mana disebut dengan istilah <b>PROFESIONAL</b>.
              </div>
            </div>
          </div>
          <!-- end definition -->

          <!-- goals -->
          <div class="accordion-item">
            <h3 class="accordion-header">
              <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#detailint-content-2">
                <span class="num">2.</span>
                Goals
              </button>
            </h3>
            <div id="detailint-content-2" class="accordion-collapse collapse" data-bs-parent="#detailintlist">
              <div class="accordion-body">
                Target dari sistem prakerin Red Levl Mediatama adalah <b>"Membantu Peserta menjadi Talent Profesional"</b>.
                <br><br><b>Definisi Membantu</b>
                <br>Red Levl hanya berperan untuk membantu dengan memberi arahan, bimbingan, mentor, dan lain sebagainya. Namun, kunci keberhasilan untuk mencapai level profesional <b>TERGANTUNG PADA INDIVIDU MASING-MASING</b>.
                <br><br><b>Definisi Profesional</b>
                <ol>
                  <li>Cerdas</li>
                  <div class="option1">Meliputi namun tidak terbatas:</div>
                  <div class="option1"><i class="bi bi-check-square-fill"></i> Inisiatif</div>
                  <div class="option1"><i class="bi bi-check-square-fill"></i> Kreatif</div>
                  <div class="option1"><i class="bi bi-check-square-fill"></i> Mampu menganalisa masalah dengan tepat</div>
                  <div class="option1"><i class="bi bi-check-square-fill"></i> Open mind</div>
                  <div class="option1"><i class="bi bi-check-square-fill"></i> Peka terhadap masalah</div>
                  <div class="option1"><i class="bi bi-check-square-fill"></i> Perencanaan yang baik</div>
                  <div class="option1"><i class="bi bi-check-square-fill"></i> Problem Solving yang baik</div>
                  <br>
                  <li>Jujur</li>
                  <div class="option1">Meliputi namun tidak terbatas:</div>
                  <div class="option1"><i class="bi bi-check-square-fill"></i> Detail</div>
                  <div class="option1"><i class="bi bi-check-square-fill"></i> Fokus pada kebenaran dan kenyataan</div>
                  <div class="option1"><i class="bi bi-check-square-fill"></i> Kesesuaian antara ucapan, catatan dan perbuatan</div>
                  <div class="option1"><i class="bi bi-check-square-fill"></i> Tegas</div>
                  <div class="option1"><i class="bi bi-check-square-fill"></i> Menghindari asumsi</div>
                  <div class="option1"><i class="bi bi-check-square-fill"></i> Perencanaan yang baik</div>
                  <div class="option1"><i class="bi bi-check-square-fill"></i> Transparan</div>
                  <br>
                  <li>Komunikatif</li>
                  <div class="option1">Meliputi namun tidak terbatas:</div>
                  <div class="option1"><i class="bi bi-check-square-fill"></i> Berpikir dan bersikap positif</div>
                  <div class="option1"><i class="bi bi-check-square-fill"></i> Mampu berkomunikasi dengan client</div>
                  <div class="option1"><i class="bi bi-check-square-fill"></i> Mampu membuat dokumentasi yang baik</div>
                  <div class="option1"><i class="bi bi-check-square-fill"></i> Pendengar yang baik</div>
                  <div class="option1"><i class="bi bi-check-square-fill"></i> Penuh keyakinan namun tidak over acting</div>
                  <div class="option1"><i class="bi bi-check-square-fill"></i> Respect</div>
                  <div class="option1"><i class="bi bi-check-square-fill"></i> Teamwork yang baik</div>
                  <br>
                  <li>Kredibel</li>
                  <div class="option1">Meliputi namun tidak terbatas:</div>
                  <div class="option1"><i class="bi bi-check-square-fill"></i> Bekerja keras, cerdas dan tuntas</div>
                  <div class="option1"><i class="bi bi-check-square-fill"></i> Bersikap efektif dan efisien</div>
                  <div class="option1"><i class="bi bi-check-square-fill"></i> Disiplin</div>
                  <div class="option1"><i class="bi bi-check-square-fill"></i> Fokus pada goal</div>
                  <div class="option1"><i class="bi bi-check-square-fill"></i> Kebersihan</div>
                  <div class="option1"><i class="bi bi-check-square-fill"></i> Pantang menyerah</div>
                  <div class="option1"><i class="bi bi-check-square-fill"></i> Tanggung jawab</div>
                  <div class="option1"><i class="bi bi-check-square-fill"></i> Tidak mengabaikan kualitas</div>
                </ol>
              </div>
            </div>
          </div>
          <!-- end goals -->

          <!-- role -->
          <div class="accordion-item">
            <h3 class="accordion-header">
              <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#detailint-content-3">
                <span class="num">3.</span>
                Role
              </button>
            </h3>
            <div id="detailint-content-3" class="accordion-collapse collapse" data-bs-parent="#detailintlist">
              <div class="accordion-body">
                Peran utama anggota prakerin adalah sebagai Tim Support yang akan membantu tim inti maupun perusahaan, baik secara teknis maupun non-teknis. Namun apabila anggota prakerin memiliki potensi untuk menjadi tim inti, maka mempunyai kemungkinan akan dimasukkan ke dalam tim inti.
                <br><br>Tim Support → Bertanggung jawab kepada Tim Inti dan Owner
                <br><br>Tim Inti → Bertanggung jawab langsung kepada Client dan Owner
              </div>
            </div>
          </div>
          <!-- end role -->

          <!-- rules -->
          <div class="accordion-item">
            <h3 class="accordion-header">
              <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#detailint-content-4">
                <span class="num">4.</span>
                Rules
              </button>
            </h3>
            <div id="detailint-content-4" class="accordion-collapse collapse" data-bs-parent="#detailintlist">
              <div class="accordion-body">
                <ol>
                  <li>Jam dan Hari Kerja - Senin s/d Sabtu, pukul 12.00 s/d 18.00 WIB. Kecuali jika ada kebijakan khusus.</li>
                  <li>Pakaian - Bebas nyaman, kecuali ada instruksi khusus.</li>
                  <li>Komunikatif - Dengan tetap menjaga hak dan kewajiban masing-masing.</li>
                </ol>

                <b>Daily Activity Report:</b>
                <ul>
                  <li>Tidak mengabaikan kualitas</li>
                  <li>Laporan target hari ini</li>
                  <li>Inspeksi dari anggota lain (pertanyaan, saran, informasi, dll.)</li>
                  <li>Adaptasi target hari ini, jika diperlukan penyesuaian setelah diinspeksi</li>
                </ul>

                <b>Perizinan:</b>
                <ol>
                  <li>Izin tidak masuk kantor bukan berarti melalaikan tugas yang sebelumnya telah diberikan.</li>
                  <li>Izin harus mengetahui anggota tim dan pembimbing.</li>
                  <li>Izin selambat-lambatnya diajukan H-1 pada jam kerja dan hari kerja dengan persetujuan anggota tim (berlaku kelipatan). Lebih dari itu pembimbing berhak menolak pengajuan izin.</li>
                  <li>Izin pada hari H (mendadak) hanya berlaku untuk kondisi special seperti orang tua sakit parah, meninggal, kendaraan mogok di perjalanan, kecelakaan, musibah, dan semacamnya.</li>
                </ol>

                <b>Konsekuensi dalam Prakerin:</b>
                <ol>
                  <li>Tugas wajib diselesaikan di awal (weekday). Jika tidak selesai, maka peserta prakerin diwajibkan masuk di weekend untuk menyelesaikan tugasnya.</li>
                  <li>Jika 2 minggu sebelum tanggal berakhir prakerin masih belum menuntaskan DoD (Syarat Kelulusan Prakerin), maka durasi prakerin akan diperpanjang selama 2 minggu, berlaku kelipatan hingga DoD telah tuntas.</li>
                  <li>Jika dalam masa Training, peserta prakerin tidak menunjukkan perkembangan yang baik, tim Prakerin atau mentor akan inspeksi terkait hambatan atau potensi bidang lain. Jika ternyata memang ada potensi bidang lain yang lebih baik, maka peserta prakerin akan dipindahkan ke posisi yang lain.</li>
                  <li>Pelanggaran yang bersifat menengah akan diberikan SP 2 dan peserta dikembalikan sementara ke sekolah/kampus untuk dilakukan pembinaan (1 minggu).</li>
                  <li>Jika peserta prakerin melakukan kesalahan teknis, selama masih ada niat baik dan tanggung jawab, maka masih bisa ditoleransi. Namun jika peserta prakerin melanggar dan atau terlibat dalam pelanggaran norma hukum, perilaku, sopan santun atau adab dalam belajar, maka peserta prakerin akan diberhentikan dari prakerin (dikeluarkan).</li>
                </ol>

                <b>Adab dalam Belajar:</b>
                <ol>
                  <li>Bersungguh-sungguh dalam belajar</li>
                  <li>Bertanggung jawab terhadap tugas yang diberikan</li>
                  <li>Disiplin</li>
                  <li>Jujur</li>
                  <li>Mau berbagi ilmu</li>
                  <li>Memiliki niat atau tujuan yang baik</li>
                  <li>Memiliki persiapan yang terbaik</li>
                  <li>Mencatat setiap ilmu yang didapatkan</li>
                  <li>Sabar</li>
                </ol>

                <b>Syarat dan Ketentuan Prakerin:</b>
                <ol>
                  <li>Soft Skills</li>
                  <ul>
                    <li>Analytic skills</li>
                    <li>Attitude</li>
                    <li>Collaboration</li>
                    <li>Communication</li>
                    <li>Creativity</li>
                    <li>Decision Making</li>
                    <li>Emotional Intelligence</li>
                    <li>Empathy</li>
                    <li>Flexibility</li>
                    <li>Initiative</li>
                    <li>Leadership</li>
                    <li>Self-Awareness</li>
                    <li>Teamwork</li>
                    <li>Work Ethic</li>
                  </ul>
                  <li>Hard Skills</li>
                  <ul>
                    <li>An industry-specific certification</li>
                    <li>Bookkeeping</li>
                    <il>Coding ability</li>
                      <li>Computer skills</li>
                      <li>Data mining</li>
                      <li>Foreign language skills</li>
                      <li>SEO marketing</li>
                      <li>Typing speed</li>
                  </ul>
                  <li>Support Device</li>
                  <ul>
                    <li>Mobile Phone</li>
                    <li>Personal Computer/Laptop </li>
                  </ul>
                </ol>

                <b>Tahapan Pemberhentian Prakerin:</b>
                <ol>
                  <li>Apabila telah melanggar peraturan di atas, maka akan mendapatkan teguran terlebih dahulu.</li>
                  <li>Apabila masih mengulangi kesalahan yang sama setelah mendapat teguran, maka akan mendapatkan surat peringatan 1 dan 2 .</li>
                  <li>Apabila telah mendapat surat peringatan yang terakhir, maka akan ada pemberhentian hubungan prakerin dan anggota prakerin akan dikembalikan ke sekolah atau kampusnya, jika prakerin wajib dari sekolah/kampus.</li>
                </ol>
              </div>
            </div>
          </div>
          <!-- end rules -->

          <!-- dod -->
          <div class="accordion-item">
            <style>
              ol.m {
                list-style-type: lower-latin;
              }
            </style>
            <h3 class="accordion-header">
              <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#detailint-content-5">
                <span class="num">5.</span>
                Definition of Done (DoD) Prakerin
              </button>
            </h3>
            <div id="detailint-content-5" class="accordion-collapse collapse" data-bs-parent="#detailintlist">
              <div class="accordion-body">
                Ada beberapa syarat seorang prakerin dapat dikatakan "SELESAI" atau lulus prakerin di Red Levl Mediatama:
                <ol class="m">
                  <li>Menyelesaikan minimal 1 (satu) Project</li>
                  <li>Selalu mengisi Daily Journal</li>
                  <li>Menyiapkan Sertifikat Prakerin (hubungi admin)</li>
                  <li>Membuat Slide presentasi journey recap</li>
                  <li>Menyelesaikan Laporan kampus/sekolah</li>
                  <li>Menyiapkan form Nilai untuk kampus/sekolah untuk diberikan pada mentor</li>
                  <li>Mengisi dan menandatangani form pernyataan (hubungi admin)</li>
                </ol>
                <ol class=""></ol>
              </div>
            </div>
          </div>
          <!-- end dod -->

          <!-- congrats -->
          <div class="accordion-item">
            <h3 class="accordion-header">
              <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#detailint-content-6">
                <span class="num">6.</span>
                Congratulations
              </button>
            </h3>
            <div id="detailint-content-6" class="accordion-collapse collapse" data-bs-parent="#detailintlist">
              <div class="accordion-body">
                Selamat, Anda telah selesai mempelajari sistem prakerin di Red levl Mediatama!
              </div>
            </div>
          </div>
          <!-- end congrats -->

        </div>
      </div>
    </div>
</section>

@push('scripts')
<script src="{{ asset('user/assets/vendor/aos/aos.js') }}"></script>
<script src="{{ asset('user/assets/vendor/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
<script src="{{ asset('user/assets/vendor/glightbox/js/glightbox.min.js') }}"></script>
<script src="{{ asset('user/assets/vendor/swiper/swiper-bundle.min.js') }}"></script>
<script src="{{ asset('user/assets/js/main.js') }}"></script>
@endpush
@endsection