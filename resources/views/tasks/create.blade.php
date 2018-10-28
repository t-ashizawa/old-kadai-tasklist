@extends('layouts.app')

@section('content')

<h1>タスク新規作成ページ</h1>

<div class="row">
    <div class="col-xs-12 col-sm-offset-2 col-sm-8 col-sm-offset-2 col-lg-offset-3 col-lg-6 col-offset-3">
        {!! Form::model($task, ['route' => 'tasks.store']) !!}
        
        <div class="form-group">
            {!! Form::label('status', 'ステータス：') !!}
            {!! Form::select('status', [
                'working' => '着手',
                'completed' => '完了',
                'pending' => '保留'], null, ['class' => 'form-control']
                ) !!}
        </div>
        <div class="form-group">
            {!! Form::label('content', 'タスク：') !!}
            {!! Form::text('content', null, ['class' => 'form-control']) !!}
        </div>

        {!! Form::submit('作成', ['class' => 'btn btn-primary']) !!}
    </div>  
        {!! Form::close() !!}
</div>

@endsection