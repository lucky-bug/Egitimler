@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-body">
                        <form method="post" action="{{route('card.store')}}">
                            @csrf
                            <div class="form-group">
                                <label class="col-form-label-lg">Front Title</label>
                                <input class="form-control-lg" type="text" name="front_title">
                            </div>
                            <div class="form-group">
                                <label class="col-form-label-lg">Front Subtitle</label>
                                <input class="form-control-lg" type="text" name="front_subtitle">
                            </div>
                            <div class="form-group">
                                <label class="col-form-label-lg">Back Title</label>
                                <input class="form-control-lg" type="text" name="back_title">
                            </div>
                            <div class="form-group">
                                <label class="col-form-label-lg">Back Subtitle</label>
                                <input class="form-control-lg" type="text" name="back_subtitle">
                            </div>
                            <div class="form-group">
                                <input class="btn btn-primary btn-lg" type="submit" value="Create">
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
