@extends('layouts.app');
@section('content');

<table>
    <thead>
        <tr>
            <th>title</th>
            <th>company</th>
            <th>offerStatus</th>
        </tr>
    </thead>
    <tbody>
   
        @foreach ($offers as $offer)
   
            <tr>
                <td>{{ $offer->title}}</td>
                <td>{{ $offer->company}}</td>    
                <td>{{ $offer->offerStatus}}</td>    
            </tr>
            @endforeach
    </tbody>
</table>


@endsection

