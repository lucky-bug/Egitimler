@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-body">
                        <form method="post" action="{{route('card.update', $card->id)}}">
                            @csrf
                            @method('put')
                            <div class="form-group">
                                <label class="col-form-label-lg">Front Title: {{$card->front_title}}</label>
                            </div>
                            <div class="form-group">
                                <label class="col-form-label-lg">Front Subtitle: {{$card->front_subtitle}}</label>
                            </div>
                            <div class="form-group">
                                <label class="col-form-label-lg">Back Title: {{$card->back_title}}</label>
                            </div>
                            <div class="form-group">
                                <label class="col-form-label-lg">Back Subtitle: {{$card->back_subtitle}}</label>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
