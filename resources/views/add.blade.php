
@extends('content')
@section('content')

<main> <br><br><br><br><br><br><br>
  
  <div class="container">
    <div class="row">
      <div class="col-lg-2 col-md-1 col-sm-12"></div>
      <div class="col-lg-8 col-md-10 col-sm-12">
            @if(Session::has('admin'))
            <div class="alert alert-info">
              {{ Session::get('admin') }}
             </div>
            @endif
        <form action="/upload" method="POST" enctype="multipart/form-data">
          @csrf
          <div class="form-group">
            <label for="name"></label>
            <input type="text" id="name" name="name" class="form-control" placeholder="Name of project">
          </div>
          <div class="form-group  ">
           <label for="description"></label>
            <textarea  id="description" name="description" cols="30" rows="10"  class="form-control description" placeholder="Your description" ></textarea>
          </div>
          <div class="form-group">
            <label for="live"></label>
            <input type="text" id="live" name="live" class="form-control" placeholder="link of live project">
          </div>
         <div class="form-group">
            <label for="git"></label>
            <input type="text" id="git" name="git" class="form-control" placeholder="git of project">
          </div>
         <div class="form-group">
            <label for="video"></label>
            <input type="text" id="video" name="video" class="form-control" placeholder="video of project">
          </div><br>
           <div class="form-group pl-2 ">
           <label for="profile_img">Profil img</label>
            <input type="file" id="profile_img" name="profile_img">
          </div>
          <br>

          <input type="submit" class="btn btn-dark" value="Post project">
        </form>

<br><br>

      </div>
      <div class="col-lg-2 col-md-1 col-sm-12"></div>
    </div>
  </div>

</main>

@endsection