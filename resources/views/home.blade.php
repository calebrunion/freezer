<x-layout>
    <script>
        // document.getElementById('themeSwitch').addEventListener('change', function(event){
        //     (event.target.checked)
        //         ? document.body.setAttribute('data-theme', 'dark')
        //         : document.body.removeAttribute('data-theme');
        // });

        function darkThemeToggle(isDarkMode) {
            return (isDarkMode)
                ? document.body.setAttribute('data-theme', 'dark')
                : document.body.removeAttribute('data-theme');
        }
    </script>
    <div x-data="{ darkMode: true }" class="">
        theme toggle button:
        <button x-text="(darkMode) ? 'Light-Mode' : 'Dark-Mode'" x-on:click="darkMode = !darkMode; darkThemeToggle(darkMode)"
            class="flex p-3 mt-5 text-gray-800 rounded shadow bg-pink-50"></button>
    </div>

</x-layout>