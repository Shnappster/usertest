@extends('admin.panel')

@section('content')

    <form method="post" action="/users/{{$user->id}}/update">
        {{ csrf_field() }}
        {{ method_field('patch') }}

        <div class="form-group">
            <label for="login">Login:</label>
            <input type="text" name="login" class="form-control"  value="{{ $user->login }}" />
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

        <button type="submit" class="btn btn-primary">Send</button>
    </form>

@endsection