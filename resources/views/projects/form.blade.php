@extends('layouts.app')

@section('content')
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    {{ request()->route()->getName() === 'projects.create' ? 'Novo' : 'Editar' }} Projeto
                </div>
                <div class="card-body">

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
                    <form
                        method="post"
                        action="{{ request()->route()->getName() === 'projects.create' ? route('projects.store') : route('projects.update', ['project' => $project->id])}}"
                        class="form-horizontal"
                    >
                        @csrf

                        @if (request()->route()->getName() === 'projects.edit')
                            @method('PUT')
                        @endif
                        <div class="row">
                            <label class="col-sm-2 col-form-label">Código</label>
                            <div class="col-sm-10">
                                <div class="form-group">
                                    <input type="text"
                                           class="form-control"
                                           name="code"
                                           value="{{ old('code') ?? $project->code ?? ''}}"
                                           placeholder="Código do projeto..."
                                           required
                                    >
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <label class="col-sm-2 col-form-label">Nome</label>
                            <div class="col-sm-10">
                                <div class="form-group">
                                    <input type="text"
                                           class="form-control"
                                           name="name"
                                           value="{{ old('name') ?? $project->name ?? ''}}"
                                           placeholder="Digite o nome do projeto..."
                                           required
                                    >
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <label class="col-sm-2 col-form-label">Responsável</label>
                            <div class="col-sm-10">
                                <div class="form-group">
                                    <input type="text"
                                           class="form-control"
                                           name="responsible"
                                           value="{{ old('responsible') ?? $project->responsible ?? ''}}"
                                           placeholder="Digite o nome do responsável..."
                                           required
                                    >
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-sm-2 col-form-label"></div>
                            <div class="col-sm-10">
                                <button type="submit" class="btn btn-fill btn-primary">Submit</button>
                            </div>

                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
