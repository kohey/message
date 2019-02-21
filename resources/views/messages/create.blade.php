@extends('layouts.app')
@section('content')
<div class="row">
    <div class="col-6">
        {!! Form::model($message,['route'=>'messages.store'])!!}
        <div class="form-group">
            {!! Form::label('content','メッセージ')!!}
            {!! Form::text('content',null,['class' => 'form-controll'])!!}
        </div>
        {!! Form::submit('投稿',['class'=>'btn-primary']) !!}
        {!! Form::close() !!}
    </div>

</div>
@endsection 