@extends('layouts.index')
@section('admin')
    <div class="container">
        <div class="row">
            <div class="col">
                <h2><strong>{{ $project->title }}</strong></h2>
                <div><strong>Descrizione</strong></div>
                <p>{{ $project->description }}</p>

                <div><strong>Linguaggi utilizzati:</strong> {{ $project->languages }}</div>
                <div><strong>Data consegna:</strong> {{ $project->relese_date }}</div>

            </div>
        </div>
    </div>
    </div>
@endsection
