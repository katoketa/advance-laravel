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
    svg.w-5.h-5 {
        width: 15px;
        height: 15px;
    }
</style>
@section('title', 'index.blade.php')

@section('content')
<table>
    <tr>
        <th>Data</th>
    </tr>
    @foreach($authors as $author)
    <tr>
        <td>{{$author->getDetail()}}</td>
    </tr>
    @endforeach
</table>
{{$authors->links()}}
@endsection