<a @class([
    "link duration-300 ease-in-out font-semibold uppercase tracking-wide hover:link-primary no-underline",
    "link-primary" => Request::path() == $page['url']
    ]) href="{{$page['url']}}">
    {{$page['name']}}
</a>