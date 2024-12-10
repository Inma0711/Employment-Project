@extends('layouts.app')

@section('content')
    <div class="main">
        <div class="globalContainer">
            <div class="titleOffer">
                <div class="titleCompany">
                    <h3>{{ $offer->title }}</h3>
                    <h5>{{ $offer->company }}</h5>
                </div>
                <div class="statusContainer" id="statusContainer">
                    <h5>{{ $offer->offerStatus }}</h5>
                </div>
            </div>

            <div class="progressContainer">
                <table>
                    <thead class="thead">
                        <tr>
                            <th>#</th>
                            <th>Fecha</th>
                            <th>Comentario</th>
                        </tr>
                    </thead>
                    <tbody class="tbody">
                        @if (!$offer->progresses->isEmpty())
                            @foreach ($offer->progresses as $progress)
                                <tr class="progressTr">
                                    <td>{{ $progress->id }}</td>
                                    <td>{{ $progress->created_at }}</td>
                                    <td>{{ $progress->comentary }}</td>
                                </tr>
                            @endforeach
                        @else
                            <div class="alert">
                                <p>No hay ningun comentario</p>
                            </div>
                        @endif
                    </tbody>
                </table>
            </div>
        </div>
        <div class="buttonContainer">
            <a href="{{ route('home') }}">
                <button type="button" class="buttonProgress">Volver</button>
            </a>
        </div>
    </div>
@endsection
