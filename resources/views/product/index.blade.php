@extends ('layout')

@section('content')
    @foreach($products as $product)
        <div class=card style="border-style: solid; margin-top: 20px; border-color: white">
            <img class=cardimg src="https://googleplus-covers.com/covers/nature_balloon_ride.jpg" width="100%"
                 height="50%">
            <div class=cardcontent>
                <p>{{ $product->created_at }}</p>
                <h3>{{ $product->title }}</h3>
                <h1>&euro; {{$product->price}}</h1>
                <p>{{ $product->description }}</p>
            </div>
            <div class=cardfooter>
                <h3>Read More</h3>
                <a href="{{ route('product.show', $product->id) }}"><i class="fa fa-arrow-circle-right cardreadme" style="font-size:24px"></i></a>
            </div>

            <div class=cardbutton>
                <i class="fa fa-envelope-open" style="font-size: 24px"></i>
            </div>

        </div>
    @endforeach
        {!! $products->render("pagination::default") !!}
@endsection