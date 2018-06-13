@extends('admin.panel')

@section('content')

    <div class="col-sm-8 blog-main">
        <h1>Create user</h1>

        <hr>

        <form method="POST" action="/users">
            {{csrf_field()}}

            <div class="form-group">
                <label for="login">Login:</label>
                <input type="text" class="form-control" id="login" name="login">
            </div>

            <div class="form-group">
                <label for="role">Role:</label>
                <select id="role" name="role">
                    @foreach($roles as $role)
                        <option value="{{$role->id}}">{{$role->name}}</option>
                    @endforeach
                </select>
            </div>

            <div class="form-group">
                <label for="password">Password:</label>
                <input type="password" class="form-control" id="password" name="password">
            </div>

            <div class="form-group">
                <label for="password_confirmation">Password Confirmation:</label>
                <input type="password" class="form-control" id="password_confirmation" name="password_confirmation" required>
            </div>

            <div class="form-group">
                <button type="submit" class="btn btn-primary">Publish</button>
            </div>

            @include('error.errors')

        </form>

    </div>
@endsection