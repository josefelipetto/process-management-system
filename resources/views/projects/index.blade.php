@extends('layouts.app')

@section('content')
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    <h4 class="card-title">Projetos</h4>
                </div>
                <div class="card-body">
                    <button class="btn btn-success" onclick="redirectTo('{{ route('projects.create') }}')">
                        <span class="btn-label">
                            <i class="now-ui-icons ui-1_simple-add"></i>
                        </span>

                        Novo
                    </button>

                    @if ($errors->any())
                        <div class="alert alert-danger">
                            <ul>
                                @foreach ($errors->all() as $error)
                                    <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                        </div>
                    @endif

                    @if (session('success') !== null)
                        <div class="alert alert-success">
                            <button type="button" aria-hidden="true" class="close">
                                <i class="now-ui-icons ui-1_simple-remove"></i>
                            </button>
                            <span>
                                {{ session('success') }}
                            </span>
                        </div>
                    @endif

                    <div class="table-responsive">
                        <table class="table">
                            <thead class="text-primary">
                            <tr>
                                <th>Código</th>
                                <th>Nome</th>
                                <th>Responsável</th>
                                <th>Ações</th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach($projects as $project)
                                <tr>
                                    <td>{{ $project->code }}</td>
                                    <td>{{ $project->name }}</td>
                                    <td>{{ $project->responsible }}</td>
                                    <td>
                                        <div class="row">
                                            <button
                                                class="btn btn-warning"
                                                onclick="redirectTo('{{ route('projects.edit', ['project' => $project->id]) }}')"
                                            >
                                                <span class="btn-label">
                                                    <i class="now-ui-icons design-2_ruler-pencil"></i>
                                                </span>
                                            </button>
                                            <form method="post" action="{{ route('projects.destroy', ['project' => $project->id]) }}">
                                                @method('DELETE')
                                                @csrf
                                                <button class="btn btn-danger" type="submit">
                                                    <span class="btn-label">
                                                        <i class="now-ui-icons ui-1_simple-remove"></i>
                                                    </span>
                                                </button>
                                            </form>
                                        </div>
                                    </td>
                                </tr>
                            @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
