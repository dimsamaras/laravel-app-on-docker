@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">Post a tweet</div>

                    <div class="card-body">
                        @if (session('status'))
                            <div class="alert alert-success" role="alert">
                                {{ session('status') }}
                            </div>
                        @endif
                        @if($errors->any())
                            <h4>{{$errors->first()}}</h4>
                        @endif
                        Post a tweet using the form bellow.
                            <div class="container">

                                <form method="POST" action="/postatweet">

                                    {{ csrf_field() }}

                                    <div>
                                        <label>Tweet text</label>
                                        <input type="text" name="text" placeholder="280 characters tweet">

                                    </div>
                                    <div>
                                        <input type="submit" value="Submit">
                                    </div>

                                </form>

                            </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
