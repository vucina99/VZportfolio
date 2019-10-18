
@extends('content')
@section('content')

<main> <br><br><br><br><br><br>
  <div class="text-center"><h1 class="all">All Comments</h1></div> <br>
  <div class="container">
    <div class="row">
      <div class="col-lg-2 col-md-1 col-sm-12"></div>
      <div class="col-lg-8 col-md-10 col-sm-12">
            @if(Session::has('uscomm'))
            <div class="alert alert-info">
              {{ Session::get('uscomm') }}
             </div>
            @endif
          <ul class="list-group">
              @foreach($comments as $comm)
              <li class="list-group-item d-flex justify-content-between pt-2 pb-0">
              <p> {{$comm->email}}</p>
              <div><form action="/deletecommentadmin/{{$comm->id}}" method="POST">
                @csrf
                @method('DELETE')
                <input type="submit" class="btn btn-dark btn-sm" value="Delete"></form></div>
              </li>
              @endforeach
              {{$comments->links()}}
          </ul>
      </div>
      <div class="col-lg-2 col-md-1 col-sm-12"></div>
    </div>
  </div>

</main>

@endsection