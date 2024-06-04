@extends('layouts.admin')
@section('title', $project->title)

@section('content')
<section>
    <div class="d-flex justify-content-between align-items-center py-4">
        <h1>{{ $project->title }}</h1>
    </div>
    <p>{{ $project->content }}</p>
</section>
@endsection