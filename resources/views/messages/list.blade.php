@extends('app')

@section('content')
<div class="container-fluid">
<form method="POST" action="message">
    <label>message</label>
    <input name="message-content">
    <input type="submit">
    <input type="hidden" name="_token" value="{{ csrf_token() }}">

</form>

@foreach ($messages as $message)
    <div>
        <span>{{ e($message->user->name) }}</span>
        <span>{{ e($message->content) }}</span>
    </div>
@endforeach

<?php echo $messages->setPath('message')?>
</div>

@endsection
