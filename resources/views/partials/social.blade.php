@if(!is_null(config('project.social.gitlab')))
    <a class="inline-block text-white no-underline text-center h-10 p-2 md:h-auto md:p-4 hover:opacity-75" href="#" target="_blank" rel="noopener">
        <i class="fab fa-gitlab"></i>
    </a>
@endif
@if(!is_null(config('project.social.github')))
    <a class="inline-block text-white no-underline text-center h-10 p-2 md:h-auto md:p-4 hover:opacity-75" href="#" target="_blank" rel="noopener">
        <i class="fab fa-github"></i>
    </a>
@endif
@if(!is_null(config('project.social.facebook')))
    <a class="inline-block text-white no-underline text-center h-10 p-2 md:h-auto md:p-4 hover:opacity-75" href="#" target="_blank" rel="noopener">
        <i class="fab fa-facebook"></i>
    </a>
@endif
@if(!is_null(config('project.social.twitter')))
    <a class="inline-block text-white no-underline text-center h-10 p-2 md:h-auto md:p-4 hover:opacity-75" href="#" target="_blank" rel="noopener">
        <i class="fab fa-twitter"></i>
    </a>
@endif
@if(!is_null(config('project.social.linkedin')))
    <a class="inline-block text-white no-underline text-center h-10 p-2 md:h-auto md:p-4 hover:opacity-75" href="#" target="_blank" rel="noopener">
        <i class="fab fa-linkedin"></i>
    </a>
@endif
@if((bool)config('project.rss'))
    <a class="inline-block text-white no-underline text-center h-10 p-2 md:h-auto md:p-4 hover:opacity-75" href="{!! route('feeds.main') !!}">
        <i class="fa fa-rss"></i>
    </a>
@endif
