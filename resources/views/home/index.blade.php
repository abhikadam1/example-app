<x-header data="Header Title"/>
@include('inner')
<h1>{{ $data['message'] }}</h1>

@foreach ($data as $value )
<div class="row">
    <div class="col-md-4">
    <h3><i><u>{{$value}}</u></i></h3>
    </div>
</div>

@endforeach
<!-- <h1><a href="{{ url('/') }}">{{ url('/') }}</a></h1> -->

<script>
    let data = @json($data);
    console.log(data, " data instanceof");
    
</script>