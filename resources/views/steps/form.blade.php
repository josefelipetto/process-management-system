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

    <div class="row">
        <div class="col">
            <h2> {{ $step->stepInformation->name }}</h2>
        </div>
    </div>

    <form method="post" action="{{ route('steps.update', ['step' => $step->id]) }}" enctype="multipart/form-data">
        @method('PUT')
        @csrf
        <div class="row">
            <div class="col">
                <button type="submit" class="btn btn-fill btn-primary">Atualizar</button>
                <button type="button" class="btn btn-info" onclick="backToWorkflow()">
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
                                            onchange="fillFilename(this)"
                                            class="form-control-file ipt"
                                            id="input-{{ $state->id }}"
                                            name="{{ $state->id }}"
                                            @if ($state->files->count() > 0)
                                            @elseif ($state->stateStepInformation($step->step_map_id)->first()->stateInformation->is_mandatory)
                                            required="true"
                                            @endif
                                        />

                                        <span id="input-filename-{{ $state->id }}"></span>
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
                                            required="{{$state->stateStepInformation($step->step_map_id)->first()->stateInformation->is_mandatory ? "true" : "false"}}"
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
                                        <label for="output-{{ $state->id }}">
                                            {{ $state->stateStepInformation($step->step_map_id)->first()->stateInformation->name }}
                                            {{ $state->stateStepInformation($step->step_map_id)->first()->stateInformation->is_mandatory ? "(*)" : "" }}
                                        </label>
                                        <input
                                            type="file"
                                            class="form-control-file opt"
                                            onchange="fillFilename(this)"
                                            id="input-{{ $state->id }}"
                                            name="{{ $state->id }}"
                                            @if ($state->files->count() > 0)
                                            @elseif ($state->stateStepInformation($step->step_map_id)->first()->stateInformation->is_mandatory)
                                            required="true"
                                            @endif
                                        />
                                        <span id="output-filename-{{ $state->id }}"></span>
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
        <div class="rol">
            <div class="col">
                <div class="card">
                    <div class="card-header">
                        <h2>Atividades</h2>
                    </div>
                    <div class="card-body">
                        <div class="col-sm-10 checkbox-radios">
                        @foreach($step->activities as $activity)
                            <div class="form-check">
                                <label class="form-check-label">
                                    <input class="form-check-input"
                                           type="checkbox"
                                           id="activity_{{ $activity->id }}"
                                           name="activity_{{ $activity->id }}"
                                           @if ($activity->checked)
                                               checked
                                           @endif
                                    >
                                    <span class="form-check-sign"></span>
                                    <h6>{{ $activity->description }}</h6>
                                </label>
                            </div>
                        @endforeach
                        </div>
                    </div>
                </div>
            </div>
            <div class="col">
                <div class="card">
                    <div class="card-header">
                        <h2> Aprovação da fase</h2>
                    </div>
                    <div class="card-body">
                        <label class="col-sm-2 col-form-label">Nome do Aprovador</label>
                        <div class="col">
                            <div class="form-group">
                                <input type="text"
                                       class="form-control"
                                       name="approver"
                                       value="{{ old('approver') ?? $step->approver ?? ''}}"
                                       placeholder="Nome do aprovador"
                                       required
                                >

                                <br />

                                <div class="form-group">
                                    <label for="exampleFormControlTextarea1">Comentários</label>
                                    <textarea class="form-control" id="comments" name="comments" rows="5" style="color: black;">{{ old('comments') ?? $step->comments ?? '' }}</textarea>
                                </div>

                                <div class="form-check form-check-radio">
                                    <label class="form-check-label">
                                        <input
                                            class="form-check-input"
                                            type="radio"
                                            name="status"
                                            id="statusRadio"
                                            value="{{ \App\Step::UNCHECKED }}"
                                            @if ($step->status === \App\Step::UNCHECKED)
                                            checked
                                            @endif
                                        >
                                        <span class="form-check-sign"></span>
                                        Pendente
                                    </label>
                                </div>
                                <div class="form-check form-check-radio">
                                    <label class="form-check-label">
                                        <input
                                            class="form-check-input"
                                            type="radio"
                                            name="status"
                                            id="statusRadio"
                                            value="{{ \App\Step::DENIED }}"
                                            @if ($step->status === \App\Step::DENIED)
                                            checked
                                            @endif
                                        >
                                        <span class="form-check-sign"></span>
                                        Reprovado
                                    </label>
                                </div>
                                <div class="form-check form-check-radio">
                                    <label class="form-check-label">
                                        <input
                                            class="form-check-input"
                                            type="radio"
                                            name="status"
                                            id="statusRadio"
                                            value="{{ \App\Step::APPROVED }}"
                                            @if ($step->status === \App\Step::APPROVED)
                                            checked
                                            @endif
                                        >
                                        <span class="form-check-sign"></span>
                                        Aprovado
                                    </label>
                                </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    </form>
@endsection

@section('scripts')
    <script type="text/javascript">
        $('#status').click(function() {
            console.log($('#status').not(this));
            $('#status').not(this).prop('checked', false);
        });

        function backToWorkflow()
        {
            window.location.href = "{{ route('items.workflow', ['item' => $step->item->id]) }}";
        }

        function fillFilename(context) {
            let filename = context.files[0].name;

            if (context.className.search('ipt') !== -1) {
                $("#input-filename-" + context.getAttribute('name')).html(filename);
                return;
            }

            if (context.className.search('opt') !== -1) {
                $("#output-filename-" + context.getAttribute('name')).html(filename);
            }
        }
    </script>
@endsection
