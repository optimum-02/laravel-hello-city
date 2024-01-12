<footer>
    <p class="text-gray-400">&copy; Copyright {{date('Y')}} &middot;
        @if(Route:: is ('home'))
        <a href="{{route('about')}}" class="text-indigo-500 hover:text-indigo-700 underline">About us</a>
        @endif
    </p>
</footer>