@extends('adminlte::layouts.app')

@section('htmlheader_title')
    TODO LIST
@endsection

@section('main-content')
    <div id="app">


        <buttom v-on:click="reverseMessage">Reverse</buttom>

        <ol>
            <li v-for="todo in todos">@{{ {todo.name }} | @{{todo.priority}} | @{{ todo.done }}</li>
        </ol>
    </div>
@endsection
