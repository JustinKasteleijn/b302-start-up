@extends('layout')

@section('link')
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bulma@0.8.0/css/bulma.min.css">
@endsection

@section('content')
    <div class="wrapper">
        <div id="page" class="container">
            <h1>Update article: <strong>{{$product->title}}</strong></h1>

            <form method="POST" action="/product/{{$product->id}}">
                @csrf
                @method('PUT')
                <div class="field">
                    <label class="label" for="title">Title</label>

                    <div class="control">
                        <input class="input" type="text" name="title" id="title" value="{{ $product->title }}">
                    </div>
                </div>

                <div class="field">
                    <label class="label">Description</label>

                    <div class="control">
                        <label for="description"></label><textarea class="textarea" name="description"
                                                                   id="description">{{$product->description}}</textarea>
                    </div>
                </div>

                <div class="field">
                    <label class="label">Price</label>

                    <div class="control">
                        <label>
                            <input name="price" type="number" min="0.00" max="10000.00" step="0.01" value="{{$product->price}}"/>
                        </label>
                    </div>

                </div>

                <div class="field is-ignored">
                    <div class="control">
                        <button class="button is-link" type="submit">Submit</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
@endsection