@extends ('layout')

@section('content')
    <div class="container">
        <br>
        <h1>{{$product->title}}</h1>
        <img class=cardimg alt="default image" src="https://googleplus-covers.com/covers/nature_balloon_ride.jpg" width="100%"
             height="50%">
        <p> {{$product->description }}</p><br>
        <h2>Email of the seller: {{ $product->user->email }}</h2><br>
        <h2> &euro;{{$product->price}}</h2>
        <hr>
        <br>

        @if(Gate::forUser(Auth::user())->any(['update-product', 'delete-product'], $post))
            <form action="{{$product->id}}./edit" method="get">
                <input type="submit" value="Update product"
                       name="Submit" class="button" style="background-color: gray"/>
            </form>
            <br>
            <form action="{{$product->id}}./delete" method="get">
                <input type="submit" value="Delete"
                       name="Submit" class="button" style="background-color: red"/>
            </form>
        @endif
    </div>
@endsection