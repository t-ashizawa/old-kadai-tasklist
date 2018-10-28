@extends('layouts.app')

@section('content')

<h1>タスク新規作成ページ</h1>


{!! Form::model($task, ['route' => 'tasks.store']) !!}

{!! Form::label('status', 'ステータス：') !!}
{!! Form::select('status', [
    'working' => '着手',
    'completed' => '完了',
    'pending' => '保留']
    ) !!}

{!! Form::label('content', 'タスク：') !!}
{!! Form::text('content') !!}

{!! Form::submit('作成') !!}

{!! Form::close() !!}


@endsection