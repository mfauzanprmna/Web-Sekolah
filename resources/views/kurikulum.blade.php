@include('template.navbar')
@include('template.background')
@include('template.carousel')
<div class="container pt-5">
<nav class="nav nav-tabs flex-column flex-sm-row mt-1">
  <a class="flex-sm-fill text-sm-center nav-link active " aria-current="page" data-bs-toggle="tab" data-bs-target="#home">Guru SMK Taruna Bhakti</a>
  <a class="flex-sm-fill text-sm-center nav-link " data-bs-toggle="tab" data-bs-target="#kurikulum">Kurikulum SMK Taruna Bhakti</a>
  <a class="flex-sm-fill text-sm-center nav-link " data-bs-toggle="tab" data-bs-target="#contact">Kompetensi Keahlian</a>

  {{-- <a class="flex-sm-fill text-sm-center nav-link " data-bs-toggle="tab" data-bs-target="#sistem">Sistem Pembelajaran</a>
  <a class="flex-sm-fill text-sm-center nav-link " data-bs-toggle="tab" data-bs-target="#sertifikasi">Sertifikasi Internasional</a> --}}
</nav>




<div class="tab-content mb-5" id="myTabContent">


     <div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">      <section id="popular-courses" class="courses">
        <div class="container" data-aos="fade-up">
          <div class="row" data-aos="zoom-in" data-aos-delay="100">
            <div class="col-lg-4 col-md-6 d-flex align-items-stretch mb-4">
              <div class="course-item">
                <img src="{{asset('template/assets/img/abouttb.jpg')}}" class="img-fluid" alt="..."  style="height: 300px;width:100%;"/>
                <div class="course-content">

                  <h3><a href="course-details.html">Tim Manajemen Sekolah</a></h3>
                  <p>Et architecto provident deleniti facere repellat nobis iste. Id facere quia quae dolores dolorem tempore.</p>
                                    <div class="d-flex justify-content-between align-items-center mb-3">
                    <a class="btn btn-primary" href="">Detail</a>
                  </div>
                </div>
              </div>
            </div>
            <!-- End Course Item-->

            <div class="col-lg-4 col-md-6 d-flex align-items-stretch mt-4 mt-md-0 mb-4">
              <div class="course-item">
                <img src="{{asset('template/assets/img/abouttb.jpg')}}" class="img-fluid" alt="..."  style="height: 300px;width:100%;"/>
                <div class="course-content">
                  <h3><a href="course-details.html">Staff Tata Usaha</a></h3>
                  <p>Et architecto provident deleniti facere repellat nobis iste. Id facere quia quae dolores dolorem tempore.</p>
                                    <div class="d-flex justify-content-between align-items-center mb-3">
                    <a class="btn btn-primary" href="">Detail</a>
                  </div>
                </div>
              </div>
            </div>
            <!-- End Course Item-->

            <div class="col-lg-4 col-md-6 d-flex align-items-stretch mt-4 mt-lg-0 mb-4">
              <div class="course-item">
                <img src="{{asset('template/assets/img/abouttb.jpg')}}" class="img-fluid" alt="..."  style="height: 300px;width:100%;"/>
                <div class="course-content">
                   <h3><a href="course-details.html">Guru Bimbingan Konseling</a></h3>
                  <p>Et architecto provident deleniti facere repellat nobis iste. Id facere quia quae dolores dolorem tempore.</p>
                                    <div class="d-flex justify-content-between align-items-center mb-3">
                    <a class="btn btn-primary" href="">Detail</a>
                  </div>
                </div>
              </div>
            </div>
            <!-- End Course Item-->
            <div class="col-lg-4 col-md-6 d-flex align-items-stretch mt-4 mt-lg-0 mb-4">
              <div class="course-item">
                <img src="{{asset('template/assets/img/abouttb.jpg')}}" class="img-fluid" alt="..."  style="height: 300px;width:100%;"/>
                <div class="course-content">
                   <h3><a href="course-details.html">Guru Kejuruan</a></h3>
                  <p>Et architecto provident deleniti facere repellat nobis iste. Id facere quia quae dolores dolorem tempore.</p>
                                    <div class="d-flex justify-content-between align-items-center mb-3">
                    <a class="btn btn-primary" href="">Detail</a>
                  </div>
                </div>
              </div>
            </div>
            <!-- End Course Item-->
            <div class="col-lg-4 col-md-6 d-flex align-items-stretch mt-4 mt-lg-0 mb-4">
              <div class="course-item">
                <img src="{{asset('template/assets/img/abouttb.jpg')}}" class="img-fluid" alt="..."  style="height: 300px;width:100%;"/>
                <div class="course-content">
                   <h3><a href="course-details.html">Guru Normatif Dan Adaptif</a></h3>
                  <p>Et architecto provident deleniti facere repellat nobis iste. Id facere quia quae dolores dolorem tempore.</p>
                                    <div class="d-flex justify-content-between align-items-center mb-3">
                    <a class="btn btn-primary" href="">Detail</a>
                  </div>
                </div>
              </div>
            </div>
            <!-- End Course Item-->
          </div>
        </div>
      </section>
    </div>
      <!-- End Popular Courses Section -->
  


    <div class="tab-pane fade" id="contact" role="tabpanel" aria-labelledby="contact-tab">
    <h3 class="mt-5"><b>Kompetensi Keahlian</b></h3>
    <br>
    <p><b>Pembelajaran di smk menggabungan antara teori dan praktek dengan orientasi pada kesiapan kerja lulusannya. </b> Kurikulum dalam pendidikan smk terkonsentrasi pada sistem pembelajaran keahlian pada kejuruan-kejuruan khusus. karena itu dalam persaingan  global saat ini lulusan smk dipersiapkan menjadi tenaga yang siap terjun ke dunia usaha dan industri</p>
<br>
    <p> SMK Taruna Bhakti Memiliki 5 Kompetensi keahlian yang Terdiri dari :</p>
    <ol>
      <li>Teknik Komputer Dan Jaringan</li>
      <li>Multimedia</li>
      <li>Rekayasa Perangkat Lunak</li>
      <li>Teknik Elektronika Industri</li>
      <li>Broadcasting</li>
    </ol>
  </div>

    <div class="tab-pane fade" id="kurikulum" role="tabpanel" aria-labelledby="kurikulum-tab">
      @include('struktur')
  </div>


</div>
</div>



@include('template.footer')
