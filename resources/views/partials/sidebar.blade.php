@auth
    <div id="sidebar" class="bg-darkslategray text-center text-white font-libre pt-8 font-weight-bold" style="width:200px;display:none">
        <ul class="list-reset justify-between items-center">
            <li class="mt-4">
                <a class="font-libre no-underline text-white tracking-wide font-bold text-md hover:opacity-75"
                   href="javascript:">{{ __('Homepage') }}</a>
            </li>
            <li class="mt-4">
                <a class="font-libre no-underline text-white tracking-wide font-bold text-md hover:opacity-75"
                   href="javascript:">{{ __('Categories') }}</a>
            </li>
            <li class="mt-4">
                <a class="font-libre no-underline text-white tracking-wide font-bold text-md hover:opacity-75"
                   href="javascript:">{{ __('Articles') }}</a>
            </li>
            <li class="mt-4">
                <a class="font-libre no-underline text-white tracking-wide font-bold text-md hover:opacity-75"
                   href="javascript:">{{ __('Pages') }}</a>
            </li>
            <li class="mt-4">
                <a class="font-libre no-underline text-white tracking-wide font-bold text-md hover:opacity-75"
                   href="javascript:">{{ __('Media') }}</a>
            </li>
            <li class="mt-4">
                <a class="font-libre no-underline text-white tracking-wide font-bold text-md hover:opacity-75"
                   href="javascript:">{{ __('Profile') }}</a>
            </li>
            <li class="mt-4">
                <a class="font-libre no-underline text-white tracking-wide font-bold text-md hover:opacity-75"
                   href="{{ route('logout') }}"
                   onclick="event.preventDefault();document.getElementById('logout-form').submit();">{{ __('Logout') }}</a>
                <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                    @csrf
                </form>
            </li>
        </ul>
    </div>
@endauth
