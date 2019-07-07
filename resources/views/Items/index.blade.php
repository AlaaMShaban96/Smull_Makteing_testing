@extends('master/master')
@section('titel')
    Show all Items
@endsection
<head>
    
    <style>
    #mt{

    margin-top: 60px;
    }  
    </style>
    <script>
    </script>
</head>



@section('body')
    <div class="container ">
        <div class="card-columns " id="mt">
            @foreach ($items as $item)
                <div class="card text-left">
                        <img class="card-img-top" src="holder.js/100px180/" alt="">
                        <div class="card-body">
                            <h4 class="card-title">{{$item->Name}}</h4>
                            <p class="card-text">{{$item->Price}}</p>
                            <p class="card-text">{{$item->details}}</p>
                        </div>
                           
                </div>
                    
            @endforeach
        </div>
    </div>
@endsection