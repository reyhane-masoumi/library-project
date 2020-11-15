

@extends('layouts.app')

@section('content')
{{-- <div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Dashboard') }}</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    {{ __('You are logged in!') }}
                </div> --}}
                <html>
                    <head>
                        <title>Welcome</title>
                         <link rel="stylesheet" type="text/css" href="css/home_style.css" />

                    </head>
                    <body>
                        <div id="allTheThings">

                            <a href="">
                                <input type="button" value="Books" />
                            </a><br />
                            @if (auth()->user()->type === 'librarian')
                            <a href="">
                                <input type="button" value="Members" />
                            </a><br />
                            <a href="">
                                <input type="button" value="Register" />
                            </a><br />
                            <a href="">
                                <input type="button" value="Borrowed books" />
                            </a><br />
                            <a href="{{ route('create.book') }}">
                                <input type="button" value="Add a new book" />
                            </a><br />
                            @endif
                            <br />
                        </div>
                    </body>
                </html>
            </div>
        </div>
    </div>
</div>
@endsection
