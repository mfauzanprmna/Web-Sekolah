@extends('layouts.app')
@section('title', 'Dashboard')
@section('css')
    <style>
        .ck-editor__editable {
    min-height: 100px;
}
        </style>
@endsection

@section('main')
    <div>
        {{-- <div class="container-fluid"> --}}
            
        <div class="row">
            
            <div class="container">


            <div class="col-12 ">
                {{-- <center> --}}
                    {{-- //ini buat welcome nya smeisal make welcome --}}
                    {{-- //WELCOME --}}
                    <div class="d-flex justify-content-center">
                            <div class="container ">
                                <div class="card mt-5 bg-welcome-dashboard " >
                                    <div class="card-body">
                                        <div class="row">
                                            <div class="col-4">
                                                <h2 class="card-title justify-content-start">Selamat Datang!</h2>
                                                <h3 class="card-text" style="color: white">{{ Auth::guard('manager')->user()->name }}</h3>
                                            </div>
                                            <div class="col-4">
                                             
                                            </div>
                                            <div class="col-4">
                                                <div class="row">
                                                    <div class="col-3">
                                                        <ul class="list-group text-dark font-weight-bold" style="list-style-type: none;">
                                                            <li class="" style="text-dark">Jabatan </li>
                                                            <li class="" style="text-dark">Nik     </li>
                                                            <li class="" style="text-dark">Email   </li>
                                                          </ul>
                                                    </div>
                                                    <div class="col-1 mr-5">
                                                        <ul class="list-group text-dark font-weight-bold" style="list-style-type: none;">
                                                            <li class="" style="text-dark"> : </li>
                                                            <li class="" style="text-dark"> : </li>
                                                            <li class="" style="text-dark"> : </li>
                                                          </ul>
                                                    </div>
                                                    <div class="col-4" style="margin-left: -60px;">
                                                        <ul class="list-group text-dark font-weight-bold" style="list-style-type: none;">
                                                            <li class="" style="text-dark">  
                                                                <span class="badge badge badge-success font-weight-bold text-white" ><small>{{Auth::guard('manager')->user()->jabatan}}</small></span>
                                                            </li>
                                                            <li class="" style="text-dark"> 
                                                                <span class="badge badge  font-weight-bold text-white" ><small>{{Auth::guard('manager')->user()->nik}}</small></span>
                                                            </li>
                                                            <li class="" style="text-dark"> 
                                                                <span class="badge badge  font-weight-bold text-white" ><small>{{Auth::guard('manager')->user()->email}}</small></span>
                                                            </li>
                                                          </ul>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                    </div>
                    {{-- //WELCOME --}}

                {{-- </center> --}}

                {{-- // ini pake profile semisal pen make profile --}}

                {{-- Profile  --}}
                {{-- <div class="row mt-5 align-items-center ">
                    <div class="col-md-3 text-center mx-5">
                        <div class="avatar avatar-xl">
                            <img src="{{ asset('img/default.png') }}" alt="..." class="avatar-img rounded-circle">
                        </div>
                    </div>
                    <div class="col">
                        <div class="row align-items-center">
                            <div class="col-md-7">
                                <h4 class="mb-1">{{ Auth::guard('manager')->user()->name }}</h4>
                                <p class="small mb-3"><span class="badge badge-pill badge-success">Guru SMK Taruna
                                        Bhakti</span></p>
                            </div>
                        </div>
                        <div class="row mb-4">
                            <div class="col-md-7">
                                <p class="text-muted"> Lorem ipsum dolor sit amet, consectetur adipiscing elit. Mauris
                                    blandit nisl ullamcorper, rutrum metus in, congue lectus. In hac habitasse platea
                                    dictumst. Cras urna quam, malesuada vitae risus at, pretium blandit sapien. </p>
                            </div>
                            <div class="col">
                                <p class="small mb-0 text-muted"></p>
                                <p class="small mb-0 text-muted">{{ Auth::guard('manager')->user()->email }}</p>
                                <p class="small mb-0 text-muted">(537) 315-1481</p>
                            </div>
                        </div>
                    </div>
                </div> --}}
                {{-- Profile  --}}

            </div>
            

            {{-- <div class="collapse" id="collapseExample"> --}}
                <div class="card card-body">

                    <div class="row">
                      <div class="col-md-12">
                        <div class="card shadow mb-4">
                          <div class="card-header">
                            <strong class="card-title">Form Article</strong>
                          </div>
                          <div class="card-body">
                            <form action="{{route('article.update',$article->id)}}" method="POST" enctype="multipart/form-data">
                              @method('PATCH')
                                @csrf
                              <div class="form-row">
                                  
                                  <div class="form-group col-md-6">
                                      <label for="categories">Categories</label>
                                      <select name="category" id="categories" class="form-control">
                                        {{-- <option value="{{$item->id}}">{{$item->name}}</option> --}}

                                                @foreach ($categories as $item)
                                                    @if ($item->id === $article->category_id)
                                                    <option value="{{$article->id}}" selected>{{$item->name}}</option>

                                                    @else 
                                                    <option value="{{$item->id}}">{{$item->name}}</option>

                                                    @endif

                                                
                                                @endforeach
                                      </select>
                                    </div>
                                <div class="form-group col-md-6">
                                  <label for="title">Title</label>
                                  <input type="text" class="form-control" id="title" name="title" value="{{$article->title}}">
                                </div>
                              </div>
                              <div class="form-row">
                                  <div class="form-group col-md-6">
                                      <label for="seo">seo Title</label>
                                      <input type="text" class="form-control" id="seo" name="seo_title" value="{{$article->seo_title}}">
                                    </div>
                                    <div class="form-group col-md-6">
                                      <label for="seo">Image</label>
                                        <div class="custom-file">
                                          <input type="file" class="custom-file-input"  name="image" onchange="loadFile(event)" accept="image/*" >
                                          <label class="custom-file-label" >Add image file</label>
                                        </div>
                                    </div>
                                   
                              </div>

                              {{-- <div class="form-row"> --}}
                                  {{-- <img  style="width: 200px; height:200px;" alt=""> --}}
                                <div class="row d-flex justify-content-center" >
                                      <center>
                                          <div class="container">
                                              <img id="output" style="width: 250px; height:200px;" src="{{asset('article-img/'.$article->image)}}"/>
                                        </div>
                                    </center>
                                </div>

                              {{-- </div> --}}
                                 
                            </div>
                            

                              <div class="form-group">
                                 <label for="task-textarea">Deskripsi</label> 
                                 <textarea  name="description" class="form-control ck-editor__editable" id="task-textarea"  cols="100" rows="10">{{$article->body}}    </textarea> 
                                {{-- <div class="card-body">
                                  <h5 class="card-title">Editor</h5>
                                  <p>Pages type scale includes a range of contrasting styles that support the needs of your product and its content.</p>
                                  <!-- Create the editor container -->
                                  <div id="editor" style="min-height:100px;">
                                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nunc lobortis convallis efficitur. Cras nisi felis, luctus nec nibh quis, consequat maximus velit. Ut iaculis at lacus sed pellentesque.</p>
                                    <p>Maecenas luctus nisl quis leo porta, quis elementum mi tempus. Morbi blandit metus ut nulla scelerisque, sed ornare purus elementum. Vivamus sed augue in tortor commodo malesuada sed et nulla. Nullam cursus erat eget tellus maximus, ut placerat lorem fringilla.</p>
                                  </div>
                                </div> --}}
                              </div>
                              
                              <div class="row">
                                <div class="col-2">
                                    <a href="{{route('dashboard.manager')}}" class="btn btn-warning">Kembali</a>
                                </div>
                                <div class="col-8">

                                </div>
                                <div class="col-2">
                                    <button type="submit" class="btn btn-primary">Update</button>
                                </div>
                              </div>
                              
                            </form>
                          </div> <!-- /. card-body -->
                        </div> <!-- /. card -->
                      </div> <!-- /. col -->
                    </div> <!-- /. end-section -->
              </div>
            {{-- </div> --}}
        </div>
        {{-- </div> --}}


    </div>
@endsection
{{-- @push('script') --}}


@section('script')
<script>
 
    // ClassicEditor
    //     .create( document.querySelector( '#task-textarea' ) )
    //     .catch( error => {
    //         console.error( error );
    //     } );


</script>

    
@endsection
