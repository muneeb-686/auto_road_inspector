<!DOCTYPE html>
<html lang="en" class="">
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Admin Dashboard</title>

  <!-- Tailwind is included -->
  <!-- Scripts -->
  @vite(['resources/css/app.css', 'resources/js/app.js'])
 
  @vite(['resources/css/card.css'])
  @vite(['resources/css/side-nav.css'])
  @vite(['resources/css/main.css'])
  @vite(['resources/css/modal.css'])
  @vite(['resources/css/herobar.css'])
  @vite(['resources/css/titlebar.css'])
  @vite(['resources/css/navbar.css'])
  @vite(['resources/css/table.css'])
  @vite(['resources/css/icon.css'])
 

  <link rel="mask-icon" href="safari-pinned-tab.svg" color="#00b4b6"/>

  <meta name="description" content="Admin Dashboard">


</head>
<body>

<div id="app">

<nav id="navbar-main" class="navbar is-fixed-top">
  <div class="navbar-brand">
    <a class="navbar-item mobile-aside-button">
      <span class="icon"><i class="mdi mdi-forwardburger mdi-24px"></i></span>
    </a>
    <!--
        Search bar
    -->
    <div class="navbar-item">
      <div class="control">
      
        <input placeholder=" Search " class="input">
      </div>
    </div>
  </div>
  <div class="navbar-brand is-right">
    <a class="navbar-item --jb-navbar-menu-toggle" data-target="navbar-menu">
      <span class="icon"><i class="mdi mdi-dots-vertical mdi-24px"></i></span>
    </a>
  </div>
  <div class="navbar-menu" id="navbar-menu">
    <div class="navbar-end">
      
      <div class="navbar-item dropdown has-divider has-user-avatar">
        <a class="navbar-link">
          <div class="user-avatar">
            <!-- <img src="https://avatars.dicebear.com/v2/initials/john-doe.svg" alt="Admin" class="rounded-full"> -->
            <span class="icon"><i class="mdi mdi-account-circle mdi-36px"></i></span>
          </div>
          <div class="is-user-name"><span>Admin</span></div>
          <span class="icon"><i class="mdi mdi-chevron-down"></i></span>
        </a>
        <div class="navbar-dropdown">
          <a href="profile.html" class="navbar-item">
            <span class="icon"><i class="mdi mdi-account"></i></span>
            <span>My Profile</span>
          </a>
          <a class="navbar-item">
            <span class="icon"><i class="mdi mdi-settings"></i></span>
            <span>Settings</span>
          </a>
          <a class="navbar-item">
            <span class="icon"><i class="mdi mdi-email"></i></span>
            <span>Messages</span>
          </a>
          <hr class="navbar-divider">
          <a class="navbar-item">
            <a href="login.html">
            <span class="icon"><i class="mdi mdi-logout"></i></span>
            <span>Log Out</span>
            </a>
          </a>
        </div>
      </div>      
                                    
      <a href="route('logout')" title="Log out" class="navbar-item desktop-icon-only"
        onclick="event.preventDefault(); this.closest('form').submit();">
        <span class="icon"><i class="mdi mdi-logout"></i></span>
        <span>Log out</span>
      </a>
    </div>
  </div>
</nav>

<!--
  Admin Sidebar Navigation
  included from components
-->

@include('components.side-navigation')


<!--
Admin / Dashboard 
Section
-->

<section class="is-title-bar">
  <div class="flex flex-col md:flex-row items-center justify-between space-y-6 md:space-y-0">
    <ul>
      <li>Admin</li>
      <li>Dashboard</li>
    </ul>
  </div>
</section>


<!--
    Cards section 
-->

  <section class="section main-section space-y-4">
    <div class="container flex space-x-4">
      <div class="card">
        <div class="card-content">
          <div class="flex items-center justify-between">
            <div class="widget-label">
              <h3>
                Users
              </h3>
              <h1>
              {{ Auth::user()->count()-1 }}
              </h1>
            </div>
            <span class="icon widget-icon text-green-500"><i class="mdi mdi-account-multiple mdi-48px"></i></span>
          </div>
        </div>
      </div>
      <div class="card">
        <div class="card-content">
          <div class="flex items-center justify-between">
            <div class="widget-label">
              <h3>
                Potholes Detected
              </h3>
              <h1>
                1675
              </h1>
            </div>
            <span class="icon widget-icon text-blue-500"><i class="mdi mdi-finance mdi-48px"></i></span>
          </div>
        </div>
      </div>

      <div class="card">
        <div class="card-content">
          <div class="flex items-center justify-between">
            <div class="widget-label">
              <h3>
                Request to be Added
              </h3>
              <h1>
                6
              </h1>
            </div>
            <span class="icon widget-icon text-red-500"><i class="mdi mdi-map-marker-plus mdi-48px"></i></span>
          </div>
        </div>
      </div>

      <div class="card">
        <div class="card-content">
          <div class="flex items-center justify-between">
            <div class="widget-label">
              <h3>
                Requests to be Removed
              </h3>
              <h1>
                12
              </h1>
            </div>
            <span class="icon widget-icon text-red-500"><i class="mdi mdi-beaker-remove mdi-48px"></i></span>
          </div>
        </div>
      </div>
      
    </div>

    <!--
        Performance Chart 
    -->
      
    <div class="chart-card mb-6">
      <header class="card-header">
        <p class="card-header-title">
          <span class="icon"><i class="mdi mdi-finance"></i></span>
          Model Accuracy
        </p>
        <a href="#" class="card-header-icon">
          <span class="icon"><i class="mdi mdi-reload"></i></span>
        </a>
      </header>
      <div class="card-content">
        <div class="chart-area">
          <div class="h-full">
            <div class="chartjs-size-monitor">
              <div class="chartjs-size-monitor-expand">
                <div></div>
              </div>
              <div class="chartjs-size-monitor-shrink">
                <div></div>
              </div>
            </div>
            <canvas id="big-line-chart" width="2992" height="1000" class="chartjs-render-monitor block" style="height: 400px; width: 1197px;"></canvas>
          </div>
        </div>
      </div>
    </div>
    
   
    <!--
        Users Table 
    -->

    <div class="table-card has-table">
      <header class="card-header">
        <p class="card-header-title">
          <span class="icon"><i class="mdi mdi-account-multiple"></i></span>
          Users
        </p>
        <a href="#" class="card-header-icon">
          <span class="icon"><i class="mdi mdi-reload"></i></span>
        </a>
      </header>
      <div class="card-content">
        <table>
          <thead>
          <tr>
            <th></th>
            <th>Name</th>
            <th>Company</th>
            <th>City</th>
            <th>Created</th>
            <th></th>
          </tr>
          </thead>
          <tbody>
          <tr>
            <td class="image-cell">
              <div class="image">
                <img src="https://avatars.dicebear.com/v2/initials/rebecca-bauch.svg" class="rounded-full">
              </div>
            </td>
            <td data-label="Name">Rebecca Bauch</td>
            <td data-label="Company">Daugherty-Daniel</td>
            <td data-label="City">South Cory</td>
          
            <td data-label="Created">
              <small class="text-gray-500" title="Oct 25, 2021">Oct 25, 2021</small>
            </td>
            <td class="actions-cell">
              <div class="buttons right nowrap">
                <button class="button small green --jb-modal"  data-target="sample-modal-2" type="button">
                  <span class="icon"><i class="mdi mdi-eye"></i></span>
                </button>
                <button class="button small red --jb-modal" data-target="sample-modal" type="button">
                  <span class="icon"><i class="mdi mdi-trash-can"></i></span>
                </button>
              </div>
            </td>
          </tr>
          <tr>
            <td class="image-cell">
              <div class="image">
                <img src="https://avatars.dicebear.com/v2/initials/felicita-yundt.svg" class="rounded-full">
              </div>
            </td>
            <td data-label="Name">Felicita Yundt</td>
            <td data-label="Company">Johns-Weissnat</td>
            <td data-label="City">East Ariel</td>
            <td data-label="Created">
              <small class="text-gray-500" title="Jan 8, 2021">Jan 8, 2021</small>
            </td>
            <td class="actions-cell">
              <div class="buttons right nowrap">
                <button class="button small green --jb-modal"  data-target="sample-modal-2" type="button">
                  <span class="icon"><i class="mdi mdi-eye"></i></span>
                </button>
                <button class="button small red --jb-modal" data-target="sample-modal" type="button">
                  <span class="icon"><i class="mdi mdi-trash-can"></i></span>
                </button>
              </div>
            </td>
          </tr>
          <tr>
            <td class="image-cell">
              <div class="image">
                <img src="https://avatars.dicebear.com/v2/initials/mr-larry-satterfield-v.svg" class="rounded-full">
              </div>
            </td>
            <td data-label="Name">Mr. Larry Satterfield V</td>
            <td data-label="Company">Hyatt Ltd</td>
            <td data-label="City">Windlerburgh</td>
            <td data-label="Created">
              <small class="text-gray-500" title="Dec 18, 2021">Dec 18, 2021</small>
            </td>
            <td class="actions-cell">
              <div class="buttons right nowrap">
                <button class="button small green --jb-modal"  data-target="sample-modal-2" type="button">
                  <span class="icon"><i class="mdi mdi-eye"></i></span>
                </button>
                <button class="button small red --jb-modal" data-target="sample-modal" type="button">
                  <span class="icon"><i class="mdi mdi-trash-can"></i></span>
                </button>
              </div>
            </td>
          </tr>
          </tbody>
        </table>
        
      </div>
    </div>
  </section>

<!--
  Footer included
  from components
-->  
@include('components.footer')


<!--
  Popup Dialog box
-->
<div id="sample-modal" class="modal">
  <div class="modal-background --jb-modal-close"></div>
  <div class="modal-card">
    <header class="modal-card-head">
      <p class="modal-card-title">Sample modal</p>
    </header>
    <section class="modal-card-body">
      <p>Lorem ipsum dolor sit amet <b>adipiscing elit</b></p>
      <p>This is sample modal</p>
    </section>
    <footer class="modal-card-foot">
      <button class="button --jb-modal-close">Cancel</button>
      <button class="button red --jb-modal-close">Confirm</button>
    </footer>
  </div>
</div>

<!--
    this stylesheet is 
    related to icons used
    in the website
-->
<link rel="stylesheet" href="https://cdn.materialdesignicons.com/4.9.95/css/materialdesignicons.min.css">

<script type="text/javascript" src="js/main.min.js?v=1628755089081"></script>
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.8.0/Chart.min.js"></script>
<script type="text/javascript" src="js/chart.sample.min.js"></script>

</body>
</html>
