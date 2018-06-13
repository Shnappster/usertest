@extends('admin.panel')

@section('content')

    <form action="/panel/manage-user/create">
        <button id="add_user_btn" type="submit" class="btn btn-primary">Add User</button>
    </form>

    <table class="table table-bordered">
        <thead>
        <tr>
            <th scope="col">id</th>
            <th scope="col">Login</th>
            <th scope="col" width="300px">Action</th>
        </tr>
        </thead>
        <tbody>
        @foreach($users as $user)
            <tr>
                <th scope="row">{{$user->id}}</th>
                <td>{{$user->login}}</td>
                <td>
                    <form id="action_btn" action="/users/{{$user->id}}">
                        <button type="submit" class="btn btn-primary">Edit</button>
                    </form>

                    @if ($user->isBlocked == "0")
                        <form id="action_btn" action="/users/{{$user->id}}/block">
                            <button type="submit" class="btn btn-warning">Ban</button>
                        </form>
                    @else
                        <form id="action_btn" action="/users/{{$user->id}}/block">
                            <button type="submit" class="btn btn-success">UnBan</button>
                        </form>
                    @endif

                    <form id="action_btn" method="post" action="/users/{{$user->id}}/delete">
                        {{ csrf_field() }}
                        {{ method_field('DELETE') }}
                        <button type="submit" class="btn btn-danger">Delete</button>
                    </form>
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>

@endsection