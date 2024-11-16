@php
    $metas = DB::table('metas')->where('status','Published')->get();
@endphp
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta name="description" content="A best clean, modern, stylish, creative, responsive theme for different eCommerce business or industries."/>
<meta name="author" content="spacingtech_webify">
@isset($metas)
@foreach ($metas as $meta)
 @isset($meta->Keyword)
<meta name="{{ $meta->title }}" content="{{ $meta->Keyword }}"/>
 @endisset
@isset($meta->Description)
<meta name="description" content="{!! $meta->Description !!}"/>
 @endisset
@endforeach
@endisset


