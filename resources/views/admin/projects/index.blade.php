@extends('layouts.app')
@section('title', 'Projects')

@section('content')
<section>
    <div class="d-flex justify-content-between align-items-center py-4">
        <h1>Progetti</h1>
        <a href="{{ route('admin.projects.create') }}" class="btn btn-primary">Aggiungi nuovo progetto</a>
    </div>

    <table class="table table-striped">
        <thead>
            <tr>
              <th scope="col">Id</th>
              <th scope="col">Titolo</th>
              <th scope="col">Contenuto</th>
              <th scope="col">Creato il</th>
              <th scope="col">Aggiornato il</th>
              <th scope="col">Azioni</th>
            </tr>
          </thead>
          <tbody>
            @foreach ($projects as $project)
            <tr>
                <td>{{$project->id}}</td>
                <td>{{$project->title}}</td>
                <td>{{$project->slug}}</td>
                <td>{{$project->created_at}}</td>
                <td>{{$project->updated_at}}</td>
                <td>
                    <a href="{{ route('admin.projects.edit', $project->slug) }}" class="btn btn-warning">Modifica</a>
                    <form action="{{ route('admin.projects.destroy', $project->slug) }}" method="POST" style="display:inline;">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-danger" onclick="return confirm('Are you sure?')">Elimina</button>
                    </form>
                </td>
            </tr>
            @endforeach


          </tbody>
      </table>
</section>
@endsection