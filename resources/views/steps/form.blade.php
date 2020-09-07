@extends('layouts.app')

@section('content')
    <div class="row" style="margin-top: 5%;">
        <div class="col">
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
        </div>
    </div>
    <form method="post" action="{{ route('steps.update', ['step' => $step->id]) }}" enctype="multipart/form-data">
        @method('PUT')
        @csrf
        <div class="row">
            <div class="col">
                <button type="submit" class="btn btn-fill btn-primary">Atualizar</button>
                <button type="button" class="btn btn-info">
                    Voltar
                </button>
            </div>
        </div>
        <div class="row">
            <div class="col">
                <div class="card">
                    <div class="card-header">
                        <h3> Inputs </h3>
                    </div>
                    <div class="card-body">
                        @foreach($step->states as $state)
                            @if ($state->stateStepInformation($step->step_map_id)->first()->type === \App\StatesMap::INPUT)
                                @if ($state->stateStepInformation($step->step_map_id)->first()->stateInformation->type === \App\StatesMap::FILE)
                                    <div class="form-group">
                                        <label for="input-{{ $state->id }}">
                                            {{ $state->stateStepInformation($step->step_map_id)->first()->stateInformation->name }}
                                            {{ $state->stateStepInformation($step->step_map_id)->first()->stateInformation->is_mandatory ? "(*)" : "" }}
                                        </label>

                                        <input
                                            type="file"
                                            class="form-control-file"
                                            id="input-{{ $state->id }}"
                                            name="{{ $state->id }}"
                                            required="{{ $state->stateStepInformation($step->step_map_id)->first()->stateInformation->is_mandatory ? "true" : "false" }}"
                                        />
                                    </div>
                                    <table class="table">
                                        <thead class="text-primary">
                                        <th>#</th>
                                        <th>Arquivo</th>
                                        <th>Criado em</th>
                                        </thead>

                                        <tbody>
                                        @foreach($state->files as $file)
                                            <tr>
                                                <td>{{ $file->id }}</td>
                                                <td>
                                                    <a href="{{ \Illuminate\Support\Facades\Storage::url($file->path) }}">
                                                        {{ $file->path }}
                                                    </a>
                                                </td>
                                                <td>{{ $file->created_at->format('d/m/Y H:i:s') }}</td>
                                            </tr>
                                        @endforeach
                                        </tbody>
                                    </table>
                                @elseif ($state->stateStepInformation($step->step_map_id)->first()->stateInformation->type === \App\StatesMap::TEXT)
                                    <div class="form-group">
                                        <label for="input-{{ $state->id }}">
                                            {{ $state->stateStepInformation($step->step_map_id)->first()->stateInformation->name }}
                                            {{ $state->stateStepInformation($step->step_map_id)->first()->stateInformation->is_mandatory ? "(*)" : "" }}
                                        </label>
                                        <input
                                            type="text"
                                            class="form-control"
                                            id="input-{{ $state->id }}"
                                            name="{{ $state->id }}"
                                            value="{{ $state->value }}"
                                            required="{{ $state->stateStepInformation($step->step_map_id)->first()->stateInformation->is_mandatory ? "true" : "false" }}"
                                        >
                                    </div>
                                @elseif ($state->stateStepInformation($step->step_map_id)->first()->stateInformation->type === \App\StatesMap::DATE)
                                    <div class="form-group">
                                        <label for="input-{{ $state->id }}">
                                            {{ $state->stateStepInformation($step->step_map_id)->first()->stateInformation->name }}
                                            {{ $state->stateStepInformation($step->step_map_id)->first()->stateInformation->is_mandatory ? "(*)" : "" }}
                                        </label>
                                        <input
                                            type="date"
                                            class="form-control"
                                            id="input-{{ $state->id }}"
                                            name="{{ $state->id }}"
                                            value="{{ $state->value }}"
                                            required="{{ $state->stateStepInformation($step->step_map_id)->first()->stateInformation->is_mandatory ? "true" : "false" }}"
                                        >
                                    </div>
                                @endif
                            @endif
                        @endforeach
                    </div>
                </div>
            </div>
            <div class="col">
                <div class="card">
                    <div class="card-header">
                        <h3> Outputs </h3>
                    </div>
                    <div class="card-body">
                        @foreach($step->states as $state)
                            @if ($state->stateStepInformation($step->step_map_id)->first()->type === \App\StatesMap::OUTPUT)
                                @if ($state->stateStepInformation($step->step_map_id)->first()->stateInformation->type === \App\StatesMap::FILE)
                                    <div class="form-group">
                                        <label for="input-{{ $state->id }}">
                                            {{ $state->stateStepInformation($step->step_map_id)->first()->stateInformation->name }}
                                            {{ $state->stateStepInformation($step->step_map_id)->first()->stateInformation->is_mandatory ? "(*)" : "" }}
                                        </label>
                                        <input
                                            type="file"
                                            class="form-control-file"
                                            id="input-{{ $state->id }}"
                                            name="{{ $state->id }}"
                                            required="{{ $state->stateStepInformation($step->step_map_id)->first()->stateInformation->is_mandatory ? "true" : "false" }}"
                                        />
                                    </div>
                                    <table class="table">
                                        <thead class="text-primary">
                                        <th>#</th>
                                        <th>Arquivo</th>
                                        <th>Criado em</th>
                                        </thead>

                                        <tbody>
                                        @foreach($state->files as $file)
                                            <tr>
                                                <td>{{ $file->id }}</td>
                                                <td>
                                                    <a href="{{ \Illuminate\Support\Facades\Storage::url($file->path) }}">
                                                        {{ $file->path }}
                                                    </a>
                                                </td>
                                                <td>{{ $file->created_at->format('d/m/Y H:i:s') }}</td>
                                            </tr>
                                        @endforeach
                                        </tbody>
                                    </table>
                                @elseif ($state->stateStepInformation($step->step_map_id)->first()->stateInformation->type === \App\StatesMap::TEXT)
                                    <div class="form-group">
                                        <label for="input-{{ $state->id }}">
                                            {{ $state->stateStepInformation($step->step_map_id)->first()->stateInformation->name }}
                                            {{ $state->stateStepInformation($step->step_map_id)->first()->stateInformation->is_mandatory ? "(*)" : "" }}
                                        </label>
                                        <input
                                            type="text"
                                            class="form-control"
                                            id="input-{{ $state->id }}"
                                            name="{{ $state->id }}"
                                            value="{{ $state->value }}"
                                            required="{{ $state->stateStepInformation($step->step_map_id)->first()->stateInformation->is_mandatory ? "true" : "false" }}"
                                        >
                                    </div>
                                @elseif ($state->stateStepInformation($step->step_map_id)->first()->stateInformation->type === \App\StatesMap::DATE)
                                    <div class="form-group">
                                        <label for="input-{{ $state->id }}">
                                            {{ $state->stateStepInformation($step->step_map_id)->first()->stateInformation->name }}
                                            {{ $state->stateStepInformation($step->step_map_id)->first()->stateInformation->is_mandatory ? "(*)" : "" }}
                                        </label>
                                        <input
                                            type="date"
                                            class="form-control"
                                            id="input-{{ $state->id }}"
                                            name="{{ $state->id }}"
                                            value="{{ $state->value }}"
                                            required="{{ $state->stateStepInformation($step->step_map_id)->first()->stateInformation->is_mandatory ? "true" : "false" }}"
                                        >
                                    </div>
                                @endif
                            @endif
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </form>
@endsection
