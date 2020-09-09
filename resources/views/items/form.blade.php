@extends('layouts.app')

@section('content')
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    {{ request()->route()->getName() === 'items.create' ? 'Novo' : 'Editar' }} Item
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
                        action="{{ request()->route()->getName() === 'items.create'
                                    ? route('items.store')
                                    : route('items.update', ['item' => $item->id])}}"
                        class="form-horizontal"
                    >
                        @csrf

                        @if (request()->route()->getName() === 'items.edit')
                            @method('PUT')
                        @endif
                        <div class="row">
                            <label class="col-sm-2 col-form-label">Código</label>
                            <div class="col-sm-10">
                                <div class="form-group">
                                    <input type="text"
                                           class="form-control"
                                           name="code"
                                           value="{{ old('code') ?? $item->code ?? ''}}"
                                           placeholder="Código do Item..."
                                           required
                                    >
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <label class="col-sm-2 col-form-label">Descrição</label>
                            <div class="col-sm-10">
                                <div class="form-group">
                                    <input type="text"
                                           class="form-control"
                                           name="description"
                                           value="{{ old('description') ?? $item->description ?? ''}}"
                                           placeholder="Digite a descrição do item..."
                                           required
                                    >
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <label class="col-sm-2 col-form-label">Status</label>
                            <div class="col-sm-10">
                                <div class="form-group">
                                    <select class="select" name="status_id" required>
                                        @foreach($statuses as $status)
                                            <option
                                                value="{{ $status->id }}"
                                                selected="{{ isset($item) && $status->id === $item->status->id
                                                                            ? 'selected' : ''}}"
                                            >
                                                {{ $status->name }}
                                            </option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <label class="col-sm-2 col-form-label">Projeto</label>
                            <div class="col-sm-10">
                                <div class="form-group">
                                    <select class="select" name="project_id" required>
                                        <option value="">Selecione um projeto...</option>

                                        @foreach($projects as $project)
                                            <option
                                                value="{{ $project->id }}"
                                                selected="{{ isset($item) && $project->id === $item->project->id
                                                                            ? 'selected' : ''}}"
                                            >
                                                {{ $project->code }} - {{ $project->name }}
                                            </option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <label class="col-sm-2 col-form-label">Natureza</label>
                            <div class="col-sm-10">
                                <div class="form-group">
                                    <select class="select" name="nature_id" required>
                                        <option value="">Selecione uma natureza...</option>
                                        @foreach(\App\Nature::all() as $nature)
                                        <option value="{{ $nature->id }}">{{ $nature->name }}</option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <label class="col-sm-2 col-form-label">Tipo</label>
                            <div class="col-sm-10">
                                <div class="form-group">
                                    <select class="select" name="type_id" required>
                                        <option value="">Selecione um tipo...</option>
                                        @foreach(\App\Type::all() as $type)
                                            <option value="{{ $type->id }}">{{ $type->name }}</option>
                                        @endforeach
                                    </select>
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
