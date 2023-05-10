@foreach($listsFooter as $list)
{{$list['title']}}
    @foreach($list['links'] as $linkFooter)
    {{$linkFooter}}
    @endforeach
@endforeach