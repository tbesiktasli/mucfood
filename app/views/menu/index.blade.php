@section('content')
<img src="http://www.kids-party-world.de/images/produkte/i80/804609-igel-nici-schluesselanhaenger.png" />
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
    <br />
    <img src="http://www.netanimations.net/animated_neon_pulsing_heart.gif" />
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

@if(isset($hedgehogs))
    <br /><img src="http://informaction.org/httpdocs/images/kids/ifa_gifs/hedgehog1.gif" width="200" />
    <br /><br />Igel kann man wahrlich nicht genug haben!!! Willst Du noch mehr?!<br />
    {{ Form::open( array('url'=>'menus/index') ) }}
        {{ Form::selectRange('hedgehogs', 1, 32) }}
        {{ Form::submit('ich will auch noch mehr Igel!!!!') }}
    {{ Form::close() }}
@endif

@if(isset($hedgehogs) && $hedgehogs > 0)
    @for($i=0; $i<$hedgehogs; $i++)
        <img src="http://informaction.org/httpdocs/images/kids/ifa_gifs/hedgehog1.gif" width="200" />
    @endfor 
@endif

@stop