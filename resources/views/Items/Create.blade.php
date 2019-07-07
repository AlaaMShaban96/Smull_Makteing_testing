@extends('master.master')

@section('titel')
    ADD Items
@endsection
   
@section('body')

    <form action="{{ url('items/create')}}" method="post" enctype="application/x-www-form-urlencoded">
        @csrf
        <label for="name">name</label>
        <input type="text" name="name" class="ml-1"><br>

        <label for="price">price</label>
        <input type="text" name="Price" class="ml-2"><br>

        <label for="img">img</label>
        <input type="text" name="img" class="ml-3"><br>

        <label for="details">details</label>
        <input type="text" name="details" class="ml-3"><br>

        <button type="submit" class="btn btn-primary ml-5">ADD</button>
    </form>


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
                        <form action="{{url('items/'.$item->id.'')}}" method="get">
                                @csrf
                            <button type="submit" class="btn btn-danger" id="delet" >Delet</button>
                        </form>
                    </div>
                        
                @endforeach
            </div>
        </div>
@endsection

    
