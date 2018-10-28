@extends('layouts.app')

@section('content')

<h1>id: {{ $task->id }} のタスク編集ページ</h1>

{!! Form::model($task, ['route' => ['tasks.update', $task->id], 'method' => 'put']) !!}

		{!! Form::label('status', 'ステータス：') !!}
		{!! Form::select('status', [
		    'working' => '着手',
		    'completed' => '完了',
		    'pending' => '保留']
		    ) !!}

		{!! Form::label('content', 'タスク：') !!}
		{!! Form::text('content') !!}

		{!! Form::submit('更新') !!}

{!! Form::close() !!}

@endsection