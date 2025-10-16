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
@section('title', 'edit.blade.php')

@section('content')
@if (count($errors) > 0)
<p>入力に誤りがあります</p>
@endif
<form action="/edit" method="post">
    <table>
        @csrf
        @error('id')
        <th style="background-color: red">ERROR</th>
        <td>{{$message}}</td>
        @enderror
        <tr>
            <th>id</th>
            <td>
                <input type="text" name="id" value="{{$form->id}}">
            </td>
        </tr>
        @error('name')
        <th style="background-color: red">ERROR</th>
        <td>{{$message}}</td>
        @enderror
        <tr>
            <th>name</th>
            <td>
                <input type="text" name="name" value="{{$form->name}}">
            </td>
        </tr>
        @error('age')
        <th style="background-color: red">ERROR</th>
        <td>{{$message}}</td>
        @enderror
        <tr>
            <th>age</th>
            <td>
                <input type="text" name="age" value="{{$form->age}}">
            </td>
        </tr>
        @error('nationality')
        <th style="background-color: red">ERROR</th>
        <td>{{$message}}</td>
        @enderror
        <tr>
            <th>nationality</th>
            <td>
                <input type="text" name="nationality" value="{{$form->nationality}}">
            </td>
        </tr>
        <tr>
            <th></th>
            <td><button>送信</button></td>
        </tr>
    </table>
</form>
@endsection