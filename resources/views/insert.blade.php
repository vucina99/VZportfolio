@extends('logreg')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12 col-sm-12 col-lg-1"></div>
        <div class="col-md-12 col-sm-12 col-lg-10">
            <div class="card boja">
                <div class="card-header">Update  comment </div>
               
                <div class="card-body">
                                      @if ($errors->any())
                            <div class="alert alert-danger text-center">
                                <ul>
                                    @foreach ($errors->all() as $error)
                                        <li>{{ $error }}</li>
                                    @endforeach
                                </ul>
                            </div>
                        @endif
                    <form method="POST" action="/insert/{{$comm->id}}">
                        @csrf
                        @method('PATCH')
                        <div class="form-group row">
                            <div class="col-md-2"></div>

                            <div class="col-md-8">
                                <textarea name="description" id="" cols="30" rows="10" class="form-control levo" ></textarea>

                            <div class="col-md-2"></div>
                            </div>
                        </div>

                        
                        <div class="form-group row">
                            <div class="col-md-2"></div>

                            <div class="col-md-8">
                                <div class="text-center">
                                <div class="rating ">
                                    <input type="radio" id="star5" name="rating" value="5" class="d-hidden" /><label class = "full" for="star5" title="Awesome - 5 stars"></label>
                                    
                                    <input type="radio" id="star4" name="rating" value="4"  class="d-hidden"/><label class = "full" for="star4" title=" 4 stars"></label>
                                    
                                    <input type="radio" id="star3" name="rating" value="3"  class="d-hidden"/><label class = "full" for="star3" title=" 3 stars"></label>
                                    
                                    <input type="radio" id="star2" name="rating" value="2"  class="d-hidden" / ><label class = "full" for="star2" title=" 2 stars"></label>
                                    
                                    <input type="radio" id="star1" name="rating" value="1" class="d-hidden" /><label class = "full" for="star1" title=" 1 star"></label>
                                    
                                </div></div>

                            <div class="col-md-2"></div>
                            </div>
                        </div>
                        <input type="number" value="{{$comm->user_id}}" class="logout-form">
                        <div class="text-center">
                            <input type="submit" value="Save" class="btn btn-outline-light siri">
                        </div>

                    </form>
                </div>
            </div>
        </div>
        <div class="col-md-12 col-sm-12 col-lg-1"></div>

    </div>
</div>
@endsection
