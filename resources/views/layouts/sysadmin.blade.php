@extends('layouts.app')

@section('content1')

  @php
    $data = file_get_contents(resource_path('json/sysadmin-menu.json'));
    $menuList = json_decode($data);
    $segments = request()->segments();
    $currentLink = request()->path();
    $currentLevel1 = '/' . $segments[0] . '/' . $segments[1];
    if (isset($segments[2])) {
      $currentLevel2 = '/' . $segments[0] . '/' . $segments[1] . '/' . $segments[2];
    }
    //dd($currentLevel2);
    foreach ($menuList as $level1) {
      if ($level1->type == 'link') {
        if (route($level1->route,[],false) == $currentLevel1) {
          $activeLevel1 = $level1->name;
          $activeLevel2 = null;
          $pageTitle = $activeLevel1;
          break;
        }
      }

      if ($level1->type == 'dropdown') {
        foreach ($level1->childs as $level2) {
          if (route($level2->route,[],false) == $currentLevel2) {
            $activeLevel1 = $level1->name;
            $activeLevel2 = $level2->name;
            $pageTitle = $activeLevel2;
            break 2;
          }
        }
      }
    }
    //dd($activeLevel1, $activeLevel2);
  @endphp

  <!-- wrapper -->
  <div x-data="{ open: false }" class="wrapper overflow-x-hidden bg-gray-100 dark:bg-gray-900 dark:bg-opacity-40">
    <!-- Sidebar -->
    <x-ui-sidebar :menu-list="$menuList" :active-level-1="$activeLevel1" :active-level-2="$activeLevel2" />

    <!-- Content -->
    <div x-bind:aria-expanded="open" :class="{ 'ltr:ml-64 ltr:-mr-64 md:ltr:ml-0 md:ltr:mr-0 rtl:mr-64 rtl:-ml-64 md:rtl:mr-0 md:rtl:ml-0': open, 'ltr:ml-0 ltr:mr-0 md:ltr:ml-64 rtl:mr-0 rtl:ml-0 md:rtl:mr-64': !(open) }" class="flex flex-col min-h-screen transition-all duration-500 ease-in-out ltr:ml-0 ltr:mr-0 md:ltr:ml-64 rtl:mr-0 rtl:ml-0 md:rtl:mr-64" aria-expanded="false">
      <!-- Navbar -->
      <x-ui-navbar />

      <!-- Page Content -->
      <main class="pt-20 -mt-2">
				<div class="mx-auto p-2">
          <x-ui-page-title :page-title="$pageTitle" />
				</div>
        @yield('content2')
			</main>

    </div>
  </div>

@endsection
