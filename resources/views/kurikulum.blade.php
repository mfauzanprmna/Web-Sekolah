@include('template.navbar')
@include('template.background')
@include('template.carousel')
<head>
  <style>
    .guru:hover{
      -ms-transform: scale(1.05); /* IE 9 */
      -webkit-transform: scale(1.05); /* Safari 3-8 */
      transform: scale(1.05);
    }
  </style>
</head>
<div class="container pt-5">
<nav class="nav nav-tabs flex-column flex-sm-row mt-1">
  <a class="flex-sm-fill text-sm-center nav-link active fw-bold" aria-current="page" data-bs-toggle="tab" data-bs-target="#home">Guru SMK Taruna Bhakti</a>
  <a class="flex-sm-fill text-sm-center nav-link fw-bold" data-bs-toggle="tab" data-bs-target="#kurikulum">Kurikulum SMK Taruna Bhakti</a>
  <a class="flex-sm-fill text-sm-center nav-link fw-bold" data-bs-toggle="tab" data-bs-target="#contact">Kompetensi Keahlian</a>

  {{-- <a class="flex-sm-fill text-sm-center nav-link " data-bs-toggle="tab" data-bs-target="#sistem">Sistem Pembelajaran</a>
  <a class="flex-sm-fill text-sm-center nav-link " data-bs-toggle="tab" data-bs-target="#sertifikasi">Sertifikasi Internasional</a> --}}
</nav>




<div class="tab-content mb-5" id="myTabContent">


     <div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">      <section id="popular-courses" class="courses">
        <div class="container" data-aos="fade-up">
          <div class="row card-group " data-aos="zoom-in" data-aos-delay="100">

              <div class="col-lg-4 col-md-6 d-flex align-items-stretch mb-4 guru">
                <a href="/fotoguru">
                  <div class="course-item">
                    <img src="{{asset('template/assets/img/abouttb.jpg')}}" class="img-fluid" alt="..."  style="height: 70%;width:100%;"/>
                    <div class="course-content">
                      <h3><a href="">Tim Manajemen Sekolah</a></h3>
                      <p>Et architecto provident deleniti facere repellat nobis iste. Id facere quia quae dolores dolorem tempore.</p>
                    </div>
                  </div>
                </a>
              </div>

            <div class="col-lg-4 col-md-6 d-flex align-items-stretch mt-4 mt-md-0 mb-4 guru">
              <a href="/fotoguru">
                <div class="course-item">
                  <img src="{{asset('template/assets/img/abouttb.jpg')}}" class="img-fluid" alt="..."  style="height: 70%;width:100%;"/>
                  <div class="course-content">
                    <h3><a href="">Staff Tata Usaha</a></h3>
                    <p>Et architecto provident deleniti facere repellat nobis iste. Id facere quia quae dolores dolorem tempore.</p>
                  </div>
                </div>
              </a>
            </div>

            <div class="col-lg-4 col-md-6 d-flex align-items-stretch mt-4 mt-lg-0 mb-4 guru">
              <a href="/fotoguru">
                <div class="course-item">
                  <img src="{{asset('template/assets/img/abouttb.jpg')}}" class="img-fluid" alt="..."  style="height: 70%;width:100%;"/>
                  <div class="course-content">
                     <h3><a href="">Guru Bimbingan Konseling</a></h3>
                    <p>Et architecto provident deleniti facere repellat nobis iste. Id facere quia quae dolores dolorem tempore.</p>
                  </div>
                </div>
              </a>
            </div>
            
            <div class="col-lg-4 col-md-6 d-flex align-items-stretch mt-4 mt-lg-0 mb-4 guru">
              <a href="/fotoguru">
                <div class="course-item">
                  <img src="{{asset('template/assets/img/abouttb.jpg')}}" class="img-fluid" alt="..."  style="height: 70%;width:100%;"/>
                  <div class="course-content">
                     <h3><a href="">Guru Kejuruan</a></h3>
                    <p>Et architecto provident deleniti facere repellat nobis iste. Id facere quia quae dolores dolorem tempore.</p>
                  </div>
                </div>
              </a>
            </div>

            <div class="col-lg-4 col-md-6 d-flex align-items-stretch mt-4 mt-lg-0 mb-4 guru">
              <a href="/fotoguru">
                <div class="course-item">
                  <img src="{{asset('template/assets/img/abouttb.jpg')}}" class="img-fluid" alt="..."  style="height: 70%;width:100%;"/>
                  <div class="course-content">
                     <h3><a href="">Guru Normatif Dan Adaptif</a></h3>
                    <p>Et architecto provident deleniti facere repellat nobis iste. Id facere quia quae dolores dolorem tempore.</p>
                  </div>
                </div>
              </a>
            </div>

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