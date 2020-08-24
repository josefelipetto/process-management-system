@extends('layouts.app')

@section('content')
<div class="row">
    <div class="col-md-12">
        <div class="card">
            <div class="card-header">
                <h4 class="card-title">Projetos</h4>
            </div>
            <div class="card-body">
                <button class="btn btn-success">
                    <span class="btn-label">
                        <i class="now-ui-icons ui-1_simple-add"></i>
                    </span>
                    Novo
                </button>
                <div class="table-responsive">
                    <table class="table">
                        <thead class=" text-primary">
                            <tr>
                                <th>
                                    Código
                                </th>
                                <th>
                                    Nome
                                </th>
                                <th>
                                    Responsável
                                </th>
                            </tr>
                        </thead>
                        <tbody>
                        @foreach($projects as $project)
                            <tr>
                                <td>{{ $project->code }}</td>
                                <td>{{ $project->name }}</td>
                                <td>{{ $project->user->name }}</td>
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
