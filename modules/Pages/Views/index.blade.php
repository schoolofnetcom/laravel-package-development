<h1>{{ trans('Page::pages.title') }}</h1>


<ul>
@foreach($pages as $page)
    <li>{{ $page->title }}</li>
@endforeach
</ul>