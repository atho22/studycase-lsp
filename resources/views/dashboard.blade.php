<x-app-layout>

<style>
    {
  font-family: Arial, Helvetica, sans-serif;
  margin: 0;
  padding: 0;
}
.toggle-sidebar {
  border: none;
  background-color: #3097af;
  color: white;
  font-weight: bold;
  padding: 10px;
  position: absolute;
  right: 10px;
  top: 10px;
  cursor: pointer;
}
.sidebar {
  height: 100vh;
  width: 200px;
  list-style: none;
  background-color: #3097af;
}
.sidebar li a {
  display: block;
  padding: 25px;
  text-decoration: none;
  color: white;
  font-weight: bold;
  text-transform: uppercase;
  border-bottom: 1px solid silver;
  transition: background-color 0.5s;
}
.sidebar li a:hover {
  background-color: rgba(255, 255, 255, 0.3);
}
</style>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>
    <div>
    <div>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900 dark:text-gray-100">
                    {{ __("You're logged in!") }}
                </div>
            </div>
        </div>
    </div>
    <button class="toggle-sidebar" id="toggle-sidebar">Toggle Sidebar</button>
    
    <ul class="sidebar">
      <li><a href="#">Beranda</a></li>
      <li><a href="/index">kelola data produk</a></li>
    </ul>
</div>
    </div>
   
</x-app-layout>
