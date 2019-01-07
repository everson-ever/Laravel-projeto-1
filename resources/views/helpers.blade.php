@extends('layouts.app')

@section('content')

  <div class="container">
    {{ route('clients.edit', ['id' => 20]) }}
  </div>
  
@endsection