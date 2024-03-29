@extends('layouts.app')

@section('titulo-pagina')
    <h1>Lista de clientes</h1>
@endsection

@section('content')
    <div class="row">
        <div class="col-md-12">
            <table class="table table-striped">
                <thead>
                    <tr>
                        <th>Id</th>
                        <th>Nome</th>
                        <th>Email</th>
                        <th>Ações</th>
                    </tr>
                </thead>
                <tbody>

                    @forelse($clients as $client)
                        <tr>
                            <td>{{ $client->id }}</td>
                            <td>
                                <a href="{{ route('clients.show', $client->id) }}">
                                    {{ $client->name }}
                                </a>
                            </d>
                            <td>{{ $client->email }}</td>
                            <td>
                                <a class="btn btn-primary" href="{{ route('clients.edit', $client->id) }}">Editar</a>
                                <form style="display: inline-block" action="{{ route('clients.destroy', $client->id) }}" method="POST">
                                        {{ csrf_field() }}
                                        {{ method_field('DELETE') }}

                                        <button class="btn btn-danger" type="submit" onclick=" return confirm('Tem certeza que deseja remover o cliente?')">
                                            Deletar
                                        </button>
                                </form>
                            </td>
                        </tr>
                    @empty
                        <tr>
                            <td>Nenhum cliente cadastrado</td>
                        </tr>
                    @endforelse
                    
                </tbody>
            </table>

            <a href="{{ route('clients.create') }}">Criar cliente</a>
        </div>
    </div>   
@endsection



