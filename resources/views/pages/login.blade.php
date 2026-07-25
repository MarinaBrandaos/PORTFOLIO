@extends('layouts.default')
@section('content')
@if ($errors->any())

    @foreach ($errors->all() as $error)
    
    {{ $error }}

    @endforeach

@endif
<section class="login-container">
    <form class="login" action="{{ route('login') }}" method="POST">
        @csrf
        <input type="password" name="password" placeholder="password">
        <button type="submit">Login</button>
    </form>
</section>

