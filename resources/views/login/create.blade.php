@extends('main.master')

@section('content')

    <div class="col-md-8">
        <h1>Sign in</h1>

        <form method="POST" action="/login">
            {{csrf_field()}}

            <div class="form-group">
                <label for="login">Login:</label>
                <input type="login" class="form-control" id="login" name="login" required>
            </div>

            <div class="form-group">
                <label for="password">Password:</label>
                <input type="password" class="form-control" id="password" name="password" required>
            </div>

            <div class="form-group">
                <button type="submit" class="btn btn-primary">Sign In</button>
            </div>


        </form>

        @include('error.errors')

    </div>

@endsection