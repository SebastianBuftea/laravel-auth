@extends('layouts.index')
@section('admin')
    <div class="col">
        <h2>I miei progetti</h2>
        <table class="table table-striped">
            <thead>
                <tr>
                    <th scope="col">id</th>
                    <th scope="col">title</th>
                    <th scope="col">description</th>
                    <th scope="col">slug</th>
                    <th scope="col">languages</th>
                    <th scope="col">relese_date</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($projects as $project)
                    <tr>
                        <td>{{ $project->id }}</td>
                        <td>{{ $project->title }}</td>
                        <td>{{ Str::limit($project->description, 30, '...') }}</td>
                        <td>{{ $project->slug }}</td>
                        <td>{{ $project->languages }}</td>
                        <td>{{ $project->relese_date }}</td>
                        <td>
                            <a href="{{ route('admin.projects.show', ['project' => $project->id]) }}">
                                <button class="btn btn-primary">
                                    <i class="fas fa-eye" style="color: #000000;"></i>
                                </button>
                            </a>
                            <button class="btn btn-danger">
                                <i class="fa-solid fa-trash" style="color: #000000;"></i>
                            </button>
                            <button class="btn btn-warning">
                                <i class="fa-solid fa-pen " style="color: #000000;"></i>
                            </button>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
@endsection
