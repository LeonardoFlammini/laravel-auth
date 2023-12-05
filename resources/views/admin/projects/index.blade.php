@extends('layouts.admin')

@section('content')
    <h1>Proggetti</h1>

    <table class="table">
        <thead>
          <tr>
            <th scope="col">Id</th>
            <th scope="col">Titolo</th>
            <th scope="col">Azioni</th>
          </tr>
        </thead>
        <tbody>
            @foreach ($projects as $project )
                <tr>
                    <th>{{$project->id}}</th>
                    <td>{{$project->title}}</td>
                    <td>
                        <a href="{{route('admin.projects.show', $project)}}" class="btn btn-success"><i class="fa-solid fa-eye"></i></a>
                        <a href="#" class="btn btn-warning"><i class="fa-solid fa-pencil"></i></a>
                        <a href="#" class="btn btn-danger"><i class="fa-solid fa-trash"></i></i></a>
                    </td>
                </tr>
            @endforeach

        </tbody>
      </table>
      {{$projects->links()}}
@endsection
