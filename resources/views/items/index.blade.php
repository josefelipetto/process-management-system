@extends('layouts.app')

@section('content')
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    <h4 class="card-title">Items</h4>
                </div>
                <div class="card-body">
                    <button class="btn btn-success" onclick="redirectTo('{{ route('items.create') }}')">
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
                                <th>Descrição</th>
                                <th>Projeto</th>
                                <th>Natureza</th>
                                <th>Tipo</th>
                                <th>Ações</th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach($items as $item)
                                <tr>
                                    <td>{{ $item->code }}</td>
                                    <td>{{ $item->description }}</td>
                                    <td>{{ $item->project->name }}</td>
                                    <td>{{ $item->nature->name }}</td>
                                    <td>{{ $item->type->name }}</td>
                                    <td>
                                        <div class="row">
                                            <a
                                                class="btn btn-info"
                                                href="{{ route('items.workflow', ['item' => $item->id]) }}">
                                                <span class="btn-label">
                                                    <i class="now-ui-icons business_chart-bar-32"></i>
                                                </span>
                                            </a>
                                            <button
                                                class="btn btn-warning"
                                                onclick="redirectTo('{{ route('items.edit', ['item' => $item->id]) }}')">
                                                <span class="btn-label">
                                                    <i class="now-ui-icons design-2_ruler-pencil"></i>
                                                </span>
                                            </button>
                                            <form
                                                method="post"
                                                action="{{ route('items.destroy', ['item' => $item->id]) }}"
                                            >
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
