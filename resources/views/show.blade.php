@extends('layouts.app')

@section('content')
    <a href="{{ route('home') }}">Back</a>
    <div class="offerInfo">
        <div>
            <h3>{{ $offer->title }}</h3>
            <h5>{{ $offer->company }}</h5>
            <h5>{{ $offer->offerStatus }}</h5>
        </div>
    </div>

    <div class="offerProgress">
        <table class="table table-bordered container" id="table">
            <thead>
                <tr>
                    <th scope="col" id="headerTable">#</th>
                    <th scope="col" id="headerTable">Date</th>
                    <th scope="col" id="headerTable">Comment</th>
                </tr>
            </thead>
            <tbody>
                @if (!($offer->progresses)->isEmpty())
                    @foreach ($offer->progresses as $progress)
                        <tr>
                            <td>{{ $progress->id }}</td>
                            <td>{{ $progress->created_at }}</td>
                            <td>{{ $progress->comentary }}</td>
                        </tr>
                    @endforeach
                @else
                    <tr>
                        <td colspan="3">There's no progress yet</td>
                    </tr>
                @endif
            </tbody>
        </table>
    </div>
@endsection