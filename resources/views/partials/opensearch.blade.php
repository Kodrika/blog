{!! '<?xml version="1.0" encoding="UTF-8"?>' !!}
<OpenSearchDescription xmlns="http://a9.com/-/spec/opensearch/1.1/">
    <ShortName>{!! config('project.name') !!}</ShortName>
    <Image width="16" height="16">{!! asset('favicon.ico') !!}</Image>
    <Url type="text/html" template="{!! route('web.home') !!}?search={searchTerms}" />
</OpenSearchDescription>
