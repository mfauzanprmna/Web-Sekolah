@include('template.navbar')
@include('template.background')
@include('template.carousel')

<div class="container mt-5 mb-5">
<nav>
  <div class="nav nav-tabs" id="nav-tab" role="tablist">
    <button class="nav-link active fw-bold" id="nav-home-tab" data-bs-toggle="tab" data-bs-target="#osis" type="button" role="tab" aria-controls="nav-home" aria-selected="true">Kegiatan OSIS</button>

  </div>
</nav>
<div class="tab-content" id="nav-tabContent">
  <div class="tab-pane fade show active" id="osis" role="tabpanel" aria-labelledby="nav-home-tab">
    <div class="container" data-aos="fade-up">
        <h5 class="mt-5"><b>Kegiatan Osis</b></h5>
        <hr>
        <br>
        <p>
            Musyawarah Siswa merupakan salah satu agenda yang diwajibkan dari setiap organisasi yang ada, hal ini dikarenakan Muyawarah Siswa (MUSIS) akan membahas persoalan pembahasan Laporan pertanggung jawaban kepengurusan sebelumnya, Anggaran Dasar dan Anggaran Rumah Tangga sebuah organisasi tentunya juga akan menentukan pemimpin baru untuk memimpin organisasi tersebut. Oleh karena itu Musis adalah hal yang sakral dari sebua organisasi. Ini merupakan agenda rutin yang dilakukan OSIS SMK Taruna Bhakti setiap tahunnya.
        </p>

        </div>
  </div>
</div>
</div>
</div>
<br>

@include('template.footer')

