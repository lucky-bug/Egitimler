@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-body">
                        <table class="table table-striped border">
                            <thead>
                            <tr>
                                <th>{{ __('#') }}</th>
                                <th>{{ __('Front Title') }}</th>
                                <th>{{ __('Front Subtitle') }}</th>
                                <th>{{ __('Back Title') }}</th>
                                <th>{{ __('Back Subtitle') }}</th>
                                <th>{{ __('Actions') }}</th>
                            </tr>
                            </thead>
                            <tbody>
                            @forelse($cards as $card)
                                <tr>
                                    <td>{{$card->id}}</td>
                                    <td>{{$card->front_title}}</td>
                                    <td>{{$card->front_subtitle}}</td>
                                    <td>{{$card->back_title}}</td>
                                    <td>{{$card->back_subtitle}}</td>
                                    <td>
                                        <a href="{{route('card.show', $card->id)}}">Show</a>
                                        <a href="{{route('card.edit', $card->id)}}">Edit</a>
                                        <form method="post" action="{{route('card.destroy', $card->id)}}">
                                            @method('delete')
                                            @csrf
                                            <input type="submit" value="Delete" class="btn btn-link"/>
                                        </form>
                                    </td>
                                </tr>
                            @empty
                                <tr>
                                    <td colspan="6">
                                        <strong>{{ __('No cards found!') }}</strong>
                                    </td>
                                </tr>
                            @endforelse
                            </tbody>
                        </table>
                        <a href="{{route('card.create')}}" class="btn btn-primary">Add</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
