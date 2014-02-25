@section('content')
Hey Igel! Gib mal eine Zahl ein!!!
<br />
<img src="http://img.galerie.chip.de/imgserver/communityimages/336300/336332/1280x.jpg" width="200" />
<br />
{{ Form::open( array('url'=>'menus/index') ) }}
    {{ Form::text('number') }}
    {{ Form::submit('und ab geht die Post!!!') }}
{{ Form::close() }}

@if(isset($number) && $number > 0)
    <span style="font-size: 30px">AFFE HAT DEN IGEL ENDLOS LIEB UND SOGAR NOCH {{$number}} MAL MEHR!</span>
@endif

@if(isset($image))
    <br /><img src="http://kalason.de/files/aeffchen-coco.jpg" width="200" />
    <br /><br />was???? Ein Affe reicht nicht?! Wieviele willst du denn???<br />
    {{ Form::open( array('url'=>'menus/index') ) }}
        {{ Form::selectRange('apes', 1, 32) }}
        {{ Form::submit('ich will mehr Affen!!!!') }}
    {{ Form::close() }}
@endif

@if(isset($apes) && $apes > 0)
    @for($i=0; $i<$apes; $i++)
        <img src="http://kalason.de/files/aeffchen-coco.jpg" width="200" />
    @endfor
@endif

@stop