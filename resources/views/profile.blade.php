@include('template.navbar')
{{-- @include('template.background') --}}
<div class="container pt-5" >
<nav class="nav nav-tabs flex-column flex-sm-row mt-1">
  <a class="flex-sm-fill text-sm-center nav-link active " aria-current="page" data-bs-toggle="tab" data-bs-target="#home">Sejarah</a>
  <a class="flex-sm-fill text-sm-center nav-link " data-bs-toggle="tab" data-bs-target="#profile">Visi dan Misi</a>
  <a class="flex-sm-fill text-sm-center nav-link " data-bs-toggle="tab" data-bs-target="#contact">Tujuan SMK Taruna Bhakti</a>
</nav>

<div class="tab-content mb-5" id="myTabContent">
  @foreach ($pages as $page)
     <div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab"><h3 class="mt-5"><b>{{$page->title}}</b></h3>
      <br>
    <p class="mt-3"> {{$page->body}}</p>
    </div>
   @endforeach


  <div class="tab-pane fade show" id="profile" role="tabpanel" aria-labelledby="profile-tab">
    <h3 class="mt-5 fw-bold">Visi</h3>
    <ol>
      <li>Menghasilkan lulusan yang kompeten dalam IPTEK DAN IMTAQ,</li>
      <li>serta mampu bersaing pada tingkat nasional dan global.</li>
    </ol>
    <h3 class="mt-5 fw-bold">Misi</h3>
    <ol>
      <li>Menumbuhkan semangat kreatifitas, bersinergi dan kompetitif kepada seluruh warga sekolah</li>
      <li>Melaksanakan kurikulum melalui pembelajaran dan penilaian berbasis kompetensi, Berbasis wirausaha, berwawasan lingkungan.dan berlandaskan kejujuran.</li>
      <li>Meningkatkan kualitas sumber daya manusia melalui sertifikasi Kompetensi Tingkat Nasional dan Internasional</li>
      <li>Mengembangkan potensi peserta didik melalui kegiatan Minat dan Bakat dan pembinaan kedisiplinan.</li>
      <li>Menerapkan layanan prima dalam pengelolaan sekolah melalui Sistem Manajeman Mutu</li>
    </ol>
  </div>
  <div class="tab-pane fade show" id="contact" role="tabpanel" aria-labelledby="contact-tab">
    <h3 class="mt-5"><b>Tujuan Sekolah</b></h3>
    <ol>
      <li>Menghasilkan lulusan yang kompeten</li>
      <li>Meningkatkan kualitas pembelajaran.</li>
      <li>Menyiapkan peserta didik agar mampu mengembangkan sikap profesional, mampu beradaptasi dan  berkompetisi</li>
      <li>Meningkatkan kepuasan masyarakat untuk memperoleh layanan pendidikan</li>
      <li>Konsistensi pelaksanaan aktifitas, kendali mutu dan jaminan mutu sekolah.</li>
      <li>Meningkatkan kesejahteraan warga sekolah.</li>
    </ol>
    <p>Dalam segala aktivitas Proses Pendidikan menerapkan budaya mutu sebagai berikut :</p>
    <ul>
      <li><b>Perubahan itu masa depan</b></li>
      <li><b>Pelayanan Prima</b></li>
      <li><b>Learning without practising is nothing</b></li>
      <li><b>Service is investment</b></li>
      <li><b>Our quality ask be different</b></li>
    </ul>
  </div>
</div>
</div>
</div>
</div>


@include('template.footer')