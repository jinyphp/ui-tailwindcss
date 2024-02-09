<!-- Toggle Dark Navigation -->
<nav class="space-y-1">
    <a href="javascript:void(0)" class="flex items-center space-x-3 px-3 font-medium rounded text-gray-200 bg-gray-800 bg-opacity-50">
      <span class="flex-none flex items-center opacity-50">
        <svg stroke="currentColor" fill="none" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg" class="hi-outline hi-home inline-block w-5 h-5"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 12l2-2m0 0l7-7 7 7M5 10v10a1 1 0 001 1h3m10-11l2 2m-2-2v10a1 1 0 01-1 1h-3m-6 0a1 1 0 001-1v-4a1 1 0 011-1h2a1 1 0 011 1v4a1 1 0 001 1m-6 0h6"></path></svg>
      </span>
      <span class="py-2 grow">Dashboard</span>
      <span class="px-2 py-1 rounded-full text-xs font-medium leading-4 bg-opacity-10 text-gray-100 bg-gray-400">3</span>
    </a>

    <!-- Submenu -->
    <div
      x-data="{ open: false }"
      class="space-y-1"
    >
      <a
        href="javascript:void(0)"
        class="flex items-center space-x-3 px-3 font-medium rounded relative z-1 text-gray-300 hover:text-gray-100 hover:bg-gray-800 hover:bg-opacity-50 active:bg-gray-800 active:bg-opacity-25"
        x-on:click="open = !open"
      >
        <span class="flex-none flex items-center opacity-50">
          <svg stroke="currentColor" fill="none" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg" class="hi-outline hi-user-circle inline-block w-5 h-5"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5.121 17.804A13.937 13.937 0 0112 16c2.5 0 4.847.655 6.879 1.804M15 10a3 3 0 11-6 0 3 3 0 016 0zm6 2a9 9 0 11-18 0 9 9 0 0118 0z"></path></svg>
        </span>
        <span class="py-2 grow">Profile</span>
        <span x-bind:class="{ 'rotate-90': !open, 'rotate-0': open }" class="transform transition ease-out duration-150 opacity-75 rotate-0">
          <svg fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg" class="hi-solid hi-chevron-down inline-block w-5 h-5"><path fill-rule="evenodd" d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z" clip-rule="evenodd"></path></svg>
        </span>
      </a>
      <div
        x-show="open"
        x-transition:enter="transition ease-out duration-100"
        x-transition:enter-start="transform -translate-y-6 opacity-0"
        x-transition:enter-end="transform translate-y-0 opacity-100"
        x-transition:leave="transition ease-in duration-100 bg-transparent"
        x-transition:leave-start="transform translate-y-0 opacity-100"
        x-transition:leave-end="transform -translate-y-6 opacity-0"
        class="relative z-0"
      >
        <a href="javascript:void(0)" class="flex items-center space-x-3 px-3 font-medium rounded text-sm ml-8 text-gray-400 hover:text-gray-300 active:text-gray-400">
          <span class="py-2 grow">Account</span>
        </a>
        <a href="javascript:void(0)" class="flex items-center space-x-3 px-3 font-medium rounded text-sm ml-8 text-gray-400 hover:text-gray-300 active:text-gray-400">
          <span class="py-2 grow">Security</span>
        </a>
        <a href="javascript:void(0)" class="flex items-center space-x-3 px-3 font-medium rounded text-sm ml-8 text-gray-400 hover:text-gray-300 active:text-gray-400">
          <span class="py-2 grow">Subscriptions</span>
        </a>
        <a href="javascript:void(0)" class="flex items-center space-x-3 px-3 font-medium rounded text-sm ml-8 text-gray-400 hover:text-gray-300 active:text-gray-400">
          <span class="py-2 grow">Invoices</span>
        </a>
        <a href="javascript:void(0)" class="flex items-center space-x-3 px-3 font-medium rounded text-sm ml-8 text-gray-400 hover:text-gray-300 active:text-gray-400">
          <span class="py-2 grow">Privacy</span>
        </a>
        <a href="javascript:void(0)" class="flex items-center space-x-3 px-3 font-medium rounded text-sm ml-8 text-gray-400 hover:text-gray-300 active:text-gray-400">
          <span class="py-2 grow">Notifications</span>
        </a>
      </div>
    </div>
    <!-- END Submenu -->

    <div class="px-3 pt-5 pb-2 text-xs font-medium uppercase tracking-wider text-gray-400">Projects</div>
    <a href="javascript:void(0)" class="flex items-center space-x-3 px-3 font-medium rounded text-gray-300 hover:text-gray-100 hover:bg-gray-800 hover:bg-opacity-50 active:bg-gray-800 active:bg-opacity-25">
      <span class="flex-none flex items-center opacity-50">
        <svg stroke="currentColor" fill="none" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg" class="hi-outline hi-view-grid inline-block w-5 h-5"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6a2 2 0 012-2h2a2 2 0 012 2v2a2 2 0 01-2 2H6a2 2 0 01-2-2V6zM14 6a2 2 0 012-2h2a2 2 0 012 2v2a2 2 0 01-2 2h-2a2 2 0 01-2-2V6zM4 16a2 2 0 012-2h2a2 2 0 012 2v2a2 2 0 01-2 2H6a2 2 0 01-2-2v-2zM14 16a2 2 0 012-2h2a2 2 0 012 2v2a2 2 0 01-2 2h-2a2 2 0 01-2-2v-2z"></path></svg>
      </span>
      <span class="py-2 grow">Manage</span>
      <span class="px-2 py-1 rounded-full text-xs font-medium leading-4 bg-opacity-10 text-gray-100 bg-gray-400">99+</span>
    </a>
    <a href="javascript:void(0)" class="flex items-center space-x-3 px-3 font-medium rounded text-gray-300 hover:text-gray-100 hover:bg-gray-800 hover:bg-opacity-50 active:bg-gray-800 active:bg-opacity-25">
      <span class="flex-none flex items-center opacity-50">
        <svg stroke="currentColor" fill="none" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg" class="hi-outline hi-clipboard-list inline-block w-5 h-5"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5H7a2 2 0 00-2 2v12a2 2 0 002 2h10a2 2 0 002-2V7a2 2 0 00-2-2h-2M9 5a2 2 0 002 2h2a2 2 0 002-2M9 5a2 2 0 012-2h2a2 2 0 012 2m-3 7h3m-3 4h3m-6-4h.01M9 16h.01"></path></svg>
      </span>
      <span class="py-2 grow">Tasks</span>
      <span class="px-2 py-1 rounded-full text-xs font-medium leading-4 bg-opacity-10 text-gray-100 bg-gray-400">9</span>
    </a>
    <a href="javascript:void(0)" class="flex items-center space-x-3 px-3 font-medium rounded text-gray-300 hover:text-gray-100 hover:bg-gray-800 hover:bg-opacity-50 active:bg-gray-800 active:bg-opacity-25">
      <span class="flex-none flex items-center opacity-50">
        <svg stroke="currentColor" fill="none" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg" class="hi-outline hi-users inline-block w-5 h-5"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 4.354a4 4 0 110 5.292M15 21H3v-1a6 6 0 0112 0v1zm0 0h6v-1a6 6 0 00-9-5.197M13 7a4 4 0 11-8 0 4 4 0 018 0z"></path></svg>
      </span>
      <span class="py-2 grow">Clients</span>
      <span class="px-2 py-1 rounded-full text-xs font-medium leading-4 bg-opacity-10 text-gray-100 bg-gray-400">26</span>
    </a>
    <a href="javascript:void(0)" class="flex items-center space-x-3 px-3 font-medium rounded text-gray-300 hover:text-gray-100 hover:bg-gray-800 hover:bg-opacity-50 active:bg-gray-800 active:bg-opacity-25">
      <span class="flex-none flex items-center opacity-50">
        <svg stroke="currentColor" fill="none" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg" class="text-emerald-300 hi-outline hi-plus-circle inline-block w-5 h-5"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 9v3m0 0v3m0-3h3m-3 0H9m12 0a9 9 0 11-18 0 9 9 0 0118 0z"></path></svg>
      </span>
      <span class="py-2 grow">Add New</span>
    </a>
    <div class="px-3 pt-5 pb-2 text-xs font-medium uppercase tracking-wider text-gray-400">More</div>
    <a href="javascript:void(0)" class="flex items-center space-x-3 px-3 font-medium rounded text-gray-300 hover:text-gray-100 hover:bg-gray-800 hover:bg-opacity-50 active:bg-gray-800 active:bg-opacity-25">
      <span class="flex-none flex items-center opacity-50">
        <svg stroke="currentColor" fill="none" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg" class="hi-outline hi-cog inline-block w-5 h-5"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10.325 4.317c.426-1.756 2.924-1.756 3.35 0a1.724 1.724 0 002.573 1.066c1.543-.94 3.31.826 2.37 2.37a1.724 1.724 0 001.065 2.572c1.756.426 1.756 2.924 0 3.35a1.724 1.724 0 00-1.066 2.573c.94 1.543-.826 3.31-2.37 2.37a1.724 1.724 0 00-2.572 1.065c-.426 1.756-2.924 1.756-3.35 0a1.724 1.724 0 00-2.573-1.066c-1.543.94-3.31-.826-2.37-2.37a1.724 1.724 0 00-1.065-2.572c-1.756-.426-1.756-2.924 0-3.35a1.724 1.724 0 001.066-2.573c-.94-1.543.826-3.31 2.37-2.37.996.608 2.296.07 2.572-1.065z"></path><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z"></path></svg>
      </span>
      <span class="py-2 grow">Preferences</span>
    </a>
    <a href="javascript:void(0)" class="flex items-center space-x-3 px-3 font-medium rounded text-gray-300 hover:text-gray-100 hover:bg-gray-800 hover:bg-opacity-50 active:bg-gray-800 active:bg-opacity-25">
      <span class="flex-none flex items-center opacity-50">
        <svg stroke="currentColor" fill="none" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg" class="text-red-300 hi-outline hi-lock-open inline-block w-5 h-5"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 11V7a4 4 0 118 0m-4 8v2m-6 4h12a2 2 0 002-2v-6a2 2 0 00-2-2H6a2 2 0 00-2 2v6a2 2 0 002 2z"></path></svg>
      </span>
      <span class="py-2 grow">Log out</span>
    </a>
  </nav>
  <!-- END Toggle Dark Navigation -->
