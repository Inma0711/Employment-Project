@extends('layouts.app')
@section('content')
    <table>
        <thead>
            <tr>
                <th>Id</th>
                <th>Fecha</th>
                <th>Oferta</th>
                <th>Empresa</th>
                <th>Estado oferta</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($offers as $offer)
                <tr class="offerTr">
                    <td>{{ $offer->id }}</td>
                    <td>{{ $offer->created_at }}</td>
                    <td>{{ $offer->title }}</td>
                    <td>{{ $offer->company }}</td>
                    <td>{{ $offer->offerStatus }}</td>
                    <td>
                        <a href="{{ route('showDetail', ['id' => $offer->id]) }}">
                            <button type="button" class="buttonDetails">Details</button>
                        </a>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
@endsection
