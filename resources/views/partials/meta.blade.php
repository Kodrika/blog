<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta http-equiv="X-UA-Compatible" content="ie=edge">
<title>{!! $meta['title'] !!}</title>
<meta name="description" content="{!! $meta['description'] !!}">
<meta name="author" content="{!! config('project.author') !!}">
<link rel="apple-touch-icon" sizes="180x180" href="{!! asset('apple-touch-icon.png') !!}">
<link rel="icon" type="image/png" sizes="32x32" href="{!! asset('favicon-32x32.png') !!}">
<link rel="icon" type="image/png" sizes="16x16" href="{!! asset('favicon-16x16.png') !!}">
<link rel="manifest" href="{!! asset('site.webmanifest') !!}">
<link rel="mask-icon" href="{!! asset('safari-pinned-tab.svg') !!}" color="#5bbad5">
<meta name="msapplication-TileColor" content="#ffffff">
<meta name="theme-color" content="#ffffff">
<meta name="dcterms.Format" content="text/html">
<meta name="dcterms.Language" content="{{ App::getLocale() }}">
<meta name="dcterms.Identifier" content="{{ url()->current() }}">
<meta name="dcterms.Relation" content="{!! config('project.author') !!}">
<meta name="dcterms.Publisher" content="{!! config('project.author') !!}">
<meta name="dcterms.Type" content="text/html">
<meta name="dcterms.Coverage" content="{{ url()->current() }}">
<meta name="dcterms.Title" content="{!! $meta['title'] !!}">
<meta name="dcterms.Subject" content="{!! $meta['keywords'] !!}">
<meta name="dcterms.Contributor" content="{!! config('project.author') !!}">
<meta name="dcterms.Description" content="{!! $meta['description'] !!}">
<meta property="og:locale" content="{!! App::getLocale() !!}">
<meta property="og:type" content="{!! $meta['ogType'] !!}">
<meta property="og:url" content="{{ url()->current() }}">
<meta property="og:title" content="{!! $meta['title'] !!}">
<meta property="og:description" content="{!! $meta['description'] !!}">
<meta property="og:image" content="{!! $meta['ogImage'] !!}">
<meta property="og:site_name" content="{!! $meta['title'] !!}">
<meta name="twitter:card" content="{!! $meta['twitterCard'] !!}">
<meta name="twitter:site" content="{!! config('project.twitter') !!}">
<meta name="twitter:title" content="{!! $meta['title'] !!}">
<meta name="twitter:description" content="{!! $meta['description'] !!}">
<meta name="twitter:image" content="{!! $meta['twitterImage'] !!}">
<meta property="twitter:url" content="{{ url()->current() }}" />
<link rel="search" type="application/opensearchdescription+xml" href="{!! route('web.opensearch') !!}" title="{!! config('app.name') !!}" />
