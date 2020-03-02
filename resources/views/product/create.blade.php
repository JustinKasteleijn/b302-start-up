@extends('layout')

@section('link')
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bulma@0.8.0/css/bulma.min.css">
@endsection

@section('content')
    <div class="wrapper">
        <div id="page" class="container">
            <h1>New product</h1>

            <form method="post" action="/products">
                @csrf
                <div class="field">
                    <label class="label" for="title">Title</label>

                    <div class="control">
                        <input class="input @error('title') is-danger @enderror" type="text" name="title" id="title" value="{{ @old('title') }}">

                        @error('title')
                        <p class="help is-danger">{{$errors->first('title')}}</p>
                        @enderror
                    </div>
                </div>

                <div class="field">
                    <label class="label">Description</label>

                    <div class="control">
                        <label for="description"></label><textarea
                                class="textarea @error('description') is-danger @enderror" name="description"
                                id="description">{{ @old('description') }}</textarea>

                        @error('description')
                        <p class="help is-danger">{{$errors->first('description')}}</p>
                        @enderror
                    </div>
                </div>

                <div class="field">
                    <label class="label">Price</label>

                    <div class="control">
                        <label></label>
                            <input class="input @error('price') is-danger @enderror" name="price" type="number" min="0.00"
                                   max="10000.00" step="0.01" value="{{ @old('price') }}"/>
                        @error('price')
                        <p class="help is-danger">{{$errors->first('price')}}</p>
                        @enderror
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