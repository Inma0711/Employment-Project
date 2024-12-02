@extends('layouts.app')
@section('content')
    <table>
        <thead>
            <tr>
                <th>Title</th>
                <th>Company</th>
                <th>Offer Status</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($offers as $offer)
                <tr class="offerTr">
                    <td>{{ $offer->title }}</td>
                    <td>{{ $offer->company }}</td>
                    <td>{{ $offer->offerStatus }}</td>
                </tr>
            @endforeach
        </tbody>
    </table>
@endsection
