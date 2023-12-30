@extends('webSite.layouts.homeapp')
@section('content')

    <div class="mainDiv margin-div-top div-padding">
        <div class="container mb-5">
 
            <div class="row d-flex justify-content-center mt-5 mb-5">
                @foreach ($news as $item)
                  
                        <div class="card">
                            
                            <div class="card-body">
                               
                            
                                <a href="{{ route('news.show', $item->id) }}"
                                    class="btn btn-primary small-button-2"> <h6 class="card-title">{{ $item->title}}</h6></a>
                                    <br>
                                    <b>{{$item->body}}
                            </div>


                        </div>
                    <br>
                @endforeach

            </div>
        </div>
    </div>
@endsection
