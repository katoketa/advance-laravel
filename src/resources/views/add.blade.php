@extends('layouts.default')
<style>
    th {
        background-color: #289ADC;
        color: white;
        padding: 5px 40px;
    }
    tr:nth-child(odd) td {
        background-color: #FFF;
    }
    td {
        padding: 25px 40px;
        background-color: #EEE;
        text-align: center;
    }
    button {
        padding: 10px 20px;
        background-color: #289ADC;
        border: none;
        color: white;
    }
</style>
@section('title', 'add.blade.php')

@section('content')
@if (count($errors) > 0)
    <p>入力に問題があります</p>
    <ul>
        @foreach ($errors->all() as $error)
        <li>{{$error}}</li>
        @endforeach
    </ul>
@endif
<form action="/add" method="post">
    <table>
    @csrf
        @error('name')
        <tr>
            <th style="background-color: red">
                ERROR
            </th>
            <td>
                {{$message}}
            </td>
        </tr>
        @enderror
        <tr>
            <th>name</th>
            <td><input type="text" name="name"></td>
        </tr>
        @error('age')
        <tr>
            <th style="background-color: red">
                ERROR
            </th>
            <td>
                {{$message}}
            </td>
        </tr>
        @enderror
        <tr>
            <th>age</th>
            <td><input type="text" name="age"></td>
        </tr>
        @error('nationality')
        <tr>
            <th style="background-color: red">
                ERROR
            </th>
            <td>
                {{$message}}
            </td>
        </tr>
        @enderror
        <tr>
            <th>nationality</th>
            <td><input type="text" name="nationality"></td>
        </tr>
        <tr>
            <th></th>
            <td><button>送信</button></td>
        </tr>
    </table>
</form>
@endsection