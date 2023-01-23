<footer class="bg-green-900 py-10 mt-20">
    <div class="container mx-auto flex justify-between items-center px-6">
        
        <div>
            <h3 class="font-bold text-green-100">Pages</h3>
            <ul class="pt-4 text-green-400">
                <li class="pb-2">
                    <a class="hover:text-green-100 transition duration-300" href="{{ url('/') }}">Home</a>
                </li>
                <li class="pb-2">
                    <a class="hover:text-green-100 transition duration-300" href="{{ url('/blog') }}">Blog</a>
                </li>
                <li class="pb-2">
                    <a class="hover:text-green-100 transition duration-300" href="{{ url('/login') }}">Login</a>
                </li>
                <li class="pb-2">
                    <a class="hover:text-green-100 transition duration-300" href="{{ url('/register') }}">Register</a>
                </li>
            </ul>
        </div>

        <div>
            <h3 class="font-bold text-green-100">Recent Posts</h3>
            <ul class="pt-4 text-green-400">
                <li class="pb-2">
                    <a class="hover:text-green-100 transition duration-300" href="{{ url('/') }}">The last post</a>
                </li>
                <li class="pb-2">
                    <a class="hover:text-green-100 transition duration-300" href="{{ url('/') }}">The second last post</a>
                </li>
                <li class="pb-2">
                    <a class="hover:text-green-100 transition duration-300" href="{{ url('/') }}">The third last post</a>
                </li>
            </ul>
        </div>

    </div>
</footer>