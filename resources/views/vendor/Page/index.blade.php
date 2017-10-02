<h1>{{ trans('Page::pages.title') }}</h1>

<a href="/locale/pt-br">pt-br</a> <a href="/locale/en">en</a> <a href="/locale/es">es</a>

<ul>
@foreach($pages as $page)
    <li>{{ $page->title }}</li>
@endforeach
</ul>