@extends('layout')

@section('title', 'Contacto')

@section('content')
    <h1>{{ __('Contact') }}</h1>

    {{-- @if ($errors->any)
        @foreach ($errors->all() as $error)
            <p>{{ $error }}</p>
        @endforeach
    @endif --}}

    {{-- @if ($errors->any)
        {{ $errors-first('name')}}
    @endif --}}

    <form action="{{ route('contact') }}" method="POST">
      @csrf
      
      <input type="text" name="name" placeholder="Nombre">
      @error('name')
          {{ $message }}
      @enderror
      <input type="text" name="email" placeholder="Email">
      @error('email')
          {{ $message }}
      @enderror
      <input type="text" name="subject" placeholder="Asunto">
      <textarea name="content" id="content" placeholder="Mensaje"></textarea>
      <button type="submit">Enviar formulario</button>
    </form>
@endsection