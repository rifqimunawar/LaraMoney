<!--
=========================================================
* Soft UI Dashboard - v1.0.7
=========================================================

* Product Page: https://www.creative-tim.com/product/soft-ui-dashboard
* Copyright 2023 Creative Tim (https://www.creative-tim.com)
* Licensed under MIT (https://www.creative-tim.com/license)
* Coded by Creative Tim

=========================================================

* The above copyright notice and this permission notice shall be included in all copies or substantial portions of the Software.
-->
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <link rel="apple-touch-icon" sizes="76x76" href="{{ asset('template/assets/img/apple-icon.png') }}">
  <link rel="icon" type="image/png" href="template/assets/img/favicon.png">
  <title>
    Money Management
  </title>
  <!--     Fonts and icons     -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700" rel="stylesheet" />
  <!-- Nucleo Icons -->
  <link href="template/assets/css/nucleo-icons.css" rel="stylesheet" />
  <link href="template/assets/css/nucleo-svg.css" rel="stylesheet" />
  <!-- Font Awesome Icons -->
  <script src="https://kit.fontawesome.com/42d5adcbca.js" crossorigin="anonymous"></script>
  <link href="template/assets/css/nucleo-svg.css" rel="stylesheet" />
  <!-- CSS Files -->
  <link id="pagestyle" href="template/assets/css/soft-ui-dashboard.css?v=1.0.7" rel="stylesheet" />
  <!-- Nepcha Analytics (nepcha.com) -->
  <!-- Nepcha is a easy-to-use web analytics. No cookies and fully compliant with GDPR, CCPA and PECR. -->
  <script defer data-site="rifqi.pmiiuninus.com" src="https://api.nepcha.com/js/nepcha-analytics.js"></script>

</head>

<body class="g-sidenav-show  bg-gray-100 virtual-reality" style="zoom: 75%">
  <div class="border-radius-xl mt-3 mx-3 position-relative" style="background-image: url('template/assets/img/vr-bg.jpg') ; background-size: cover;">
    <main class="main-content mt-1 border-radius-lg">
      <div class="section min-vh-85 position-relative transform-scale-0 transform-scale-md-3">
      {{-- <div> --}}
        <div class="text-center pt-7">
          <h1 class="text-uppercase pb-6 ms-1">Money Management</h1>
        </div>
        <div class="container pb-5">
          <div class="row pt-2">
            <div class="col-lg-1 col-md-1 pt-5 pt-lg-0 ms-lg-5 text-center">
              <a href="{{ route('profile.edit') }}" class="avatar avatar-md border-0" data-bs-toggle="tooltip" data-bs-placement="left">
                <img class="border-radius-lg" alt="Image placeholder" src="template/assets/img/team-1.jpg">
              </a>
              <a href="{{ route('dashboard') }}">
                <button class="btn btn-white border-radius-lg p-2" type="button" data-bs-toggle="tooltip" data-bs-placement="left">
                  <i class="fas fa-home p-2"></i>
                </button>
              </a>
              <a href="{{ route('dashboard') }}">
                <button class="btn btn-white border-radius-lg p-2" type="button" data-bs-toggle="tooltip" data-bs-placement="left">
                  <i class="fas fa-search p-2"></i>
                </button>
              </a>
              <a href="{{ route('dashboard') }}">
                <button class="btn btn-white border-radius-lg p-2" type="button" data-bs-toggle="tooltip" data-bs-placement="left">
                  <i class="fas fa-ellipsis-h p-2"></i>
                </button>
              </a>
            </div>
            
            <div class="col-lg-8 col-md-11">
              <div class="d-flex">
                <div class="me-auto">
                  <h1 class="display-1 font-weight-bold mt-n4 mb-0">28°C</h1>
                  <h6 class="text-uppercase mb-0 ms-1">Cloudy</h6>
                  
                </div>
                <div class="ms-auto">
                  <img class="w-50 float-end mt-lg-n4" src="template/assets/img/small-logos/icon-sun-cloud.png" alt="image sun">
                </div>
              </div>
              <div class="row mt-4">
                <div class="col-lg-4 col-md-4">
                  <div class="card move-on-hover overflow-hidden">
                    <div class="card-body">
                      <div class="d-flex">
                        <h6 class="mb-0 me-3">08:00</h6>
                        <h6 class="mb-0">Synk up with Mark
                          <small class="text-secondary font-weight-normal">Hangouts</small>
                        </h6>
                      </div>
                      <hr class="horizontal dark">
                      <div class="d-flex">
                        <h6 class="mb-0 me-3">09:30</h6>
                        <h6 class="mb-0">Gym <br />
                          <small class="text-secondary font-weight-normal">World Class</small>
                        </h6>
                      </div>
                      <hr class="horizontal dark">
                      <div class="d-flex">
                        <h6 class="mb-0 me-3">11:00</h6>
                        <h6 class="mb-0">Design Review<br />
                          <small class="text-secondary font-weight-normal">Zoom</small>
                        </h6>
                      </div>
                    </div>
                    <a href="{{ route('dashboard') }}" class="bg-gray-100 w-100 text-center py-1" data-bs-toggle="tooltip" data-bs-placement="top">
                      <i class="fas fa-chevron-down text-primary"></i>
                    </a>
                  </div>
                </div>
                <div class="col-lg-4 col-md-4 mt-4 mt-sm-0">
                  <div class="card bg-gradient-dark move-on-hover">
                    <div class="card-body">
                      <div class="d-flex">
                        <h5 class="mb-0 text-white">To Do</h5>
                        <div class="ms-auto">
                          <h1 class="text-white text-end mb-0 mt-n2">7</h1>
                          <p class="text-sm mb-0 text-white">items</p>
                        </div>
                      </div>
                      <p class="text-white mb-0">Shopping</p>
                      <p class="mb-0 text-white">Meeting</p>
                    </div>
                    <a href="{{ route('dashboard') }}" class="w-100 text-center py-1" data-bs-toggle="tooltip" data-bs-placement="top" title="Show More">
                      <i class="fas fa-chevron-down text-white"></i>
                    </a>
                  </div>
                  <div class="card move-on-hover mt-4">
                    <div class="card-body">
                      <div class="d-flex">
                        <p class="mb-0">Emails (21)</p>
                        <a href="{{ route('dashboard') }}" class="ms-auto" data-bs-toggle="tooltip" data-bs-placement="top">
                          Check
                        </a>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="col-lg-4 col-md-4 mt-4 mt-sm-0">
                  <div class="card card-background card-background-mask-primary move-on-hover align-items-start">
                    <div class="cursor-pointer">
                      <div class="full-background" style="background-image: url('template/assets/img/curved-images/curved1.jpg')"></div>
                      <div class="card-body">
                        <h5 class="text-white mb-0">Some Kind Of Blues</h5>
                        <p class="text-white text-sm">Deftones</p>
                        <div class="d-flex mt-5">
                          <button class="btn btn-outline-white rounded-circle p-2 mb-0" type="button" data-bs-toggle="tooltip" data-bs-placement="top" title="Prev">
                            <i class="fas fa-backward p-2"></i>
                          </button>
                          <button class="btn btn-outline-white rounded-circle p-2 mx-2 mb-0" type="button" data-bs-toggle="tooltip" data-bs-placement="top" title="Pause">
                            <i class="fas fa-play p-2"></i>
                          </button>
                          <button class="btn btn-outline-white rounded-circle p-2 mb-0" type="button" data-bs-toggle="tooltip" data-bs-placement="top" title="Next">
                            <i class="fas fa-forward p-2"></i>
                          </button>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="card move-on-hover mt-4">
                    <div class="card-body">
                      <div class="d-flex">
                        <p class="my-auto">Messages</p>
                        <div class="ms-auto">
                          <div class="avatar-group">
                            <a href="{{ route('dashboard') }}" class="avatar avatar-sm border-0 rounded-circle" data-bs-toggle="tooltip" data-bs-placement="top">
                              <img alt="Image placeholder" src="template/assets/img/team-1.jpg">
                            </a>
                            <a href="{{ route('dashboard') }}" class="avatar avatar-sm border-0 rounded-circle" data-bs-toggle="tooltip" data-bs-placement="top" >
                              <img alt="Image placeholder" src="template/assets/img/team-2.jpg">
                            </a>
                            <a href="{{ route('dashboard') }}" class="avatar avatar-sm border-0 rounded-circle" data-bs-toggle="tooltip" data-bs-placement="top" >
                              <img alt="Image placeholder" src="template/assets/img/team-3.jpg">
                            </a>
                            <a href="{{ route('dashboard') }}" class="avatar avatar-sm border-0 rounded-circle" data-bs-toggle="tooltip" data-bs-placement="top" >
                              <img alt="Image placeholder" src="template/assets/img/team-4.jpg">
                            </a>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </main>
  </div>
  {{-- <footer class="footer pt-3  ">
    <div class="container-fluid">
      <div class="row align-items-center justify-content-lg-between">
        <div class="col-lg-6 mb-lg-0 mb-4">
          <div class="copyright text-center text-sm text-muted text-lg-start">
            © <script>
              document.write(new Date().getFullYear())
            </script>,
            made with <i class="fa fa-heart"></i> by
            <a href="https://www.creative-tim.com" class="font-weight-bold" target="_blank">Creative Tim</a>
            for a better web.
          </div>
        </div>
        <div class="col-lg-6">
          <ul class="nav nav-footer justify-content-center justify-content-lg-end">
            <li class="nav-item">
              <a href="https://www.creative-tim.com" class="nav-link text-muted" target="_blank">Creative Tim</a>
            </li>
            <li class="nav-item">
              <a href="https://www.creative-tim.com/presentation" class="nav-link text-muted" target="_blank">About Us</a>
            </li>
            <li class="nav-item">
              <a href="https://www.creative-tim.com/blog" class="nav-link text-muted" target="_blank">Blog</a>
            </li>
            <li class="nav-item">
              <a href="https://www.creative-tim.com/license" class="nav-link pe-0 text-muted" target="_blank">License</a>
            </li>
          </ul>
        </div>
      </div>
    </div>
  </footer> --}}
  <div class="fixed-plugin">
    {{-- <a class="fixed-plugin-button text-dark position-fixed px-3 py-2">
      <i class="fa fa-cog py-2"> </i>
    </a> --}}
    <div class="card shadow-lg ">
      <div class="card-header pb-0 pt-3 ">
        <div class="float-start">
          <h5 class="mt-3 mb-0">Soft UI Configurator</h5>
          <p>See our dashboard options.</p>
        </div>
        <div class="float-end mt-4">
          <button class="btn btn-link text-dark p-0 fixed-plugin-close-button">
            <i class="fa fa-close"></i>
          </button>
        </div>
        <!-- End Toggle Button -->
      </div>
      <hr class="horizontal dark my-1">
      <div class="card-body pt-sm-3 pt-0">
        <!-- Sidebar Backgrounds -->
        <div>
          <h6 class="mb-0">Sidebar Colors</h6>
        </div>
        <a href="javascript:void(0)" class="switch-trigger background-color">
          <div class="badge-colors my-2 text-start">
            <span class="badge filter bg-gradient-primary active" data-color="primary" onclick="sidebarColor(this)"></span>
            <span class="badge filter bg-gradient-dark" data-color="dark" onclick="sidebarColor(this)"></span>
            <span class="badge filter bg-gradient-info" data-color="info" onclick="sidebarColor(this)"></span>
            <span class="badge filter bg-gradient-success" data-color="success" onclick="sidebarColor(this)"></span>
            <span class="badge filter bg-gradient-warning" data-color="warning" onclick="sidebarColor(this)"></span>
            <span class="badge filter bg-gradient-danger" data-color="danger" onclick="sidebarColor(this)"></span>
          </div>
        </a>
        <!-- Sidenav Type -->
        <div class="mt-3">
          <h6 class="mb-0">Sidenav Type</h6>
          <p class="text-sm">Choose between 2 different sidenav types.</p>
        </div>
        <div class="d-flex">
          <button class="btn bg-gradient-primary w-100 px-3 mb-2 active" data-class="bg-transparent" onclick="sidebarType(this)">Transparent</button>
          <button class="btn bg-gradient-primary w-100 px-3 mb-2 ms-2" data-class="bg-white" onclick="sidebarType(this)">White</button>
        </div>
        <p class="text-sm d-xl-none d-block mt-2">You can change the sidenav type just on desktop view.</p>
        <!-- Navbar Fixed -->
        <div class="mt-3">
          <h6 class="mb-0">Navbar Fixed</h6>
        </div>
        <div class="form-check form-switch ps-0">
          <input class="form-check-input mt-1 ms-auto" type="checkbox" id="navbarFixed" onclick="navbarFixed(this)">
        </div>
        <hr class="horizontal dark my-sm-4">
        <a class="btn bg-gradient-dark w-100" href="https://www.creative-tim.com/product/soft-ui-dashboard">Free Download</a>
        <a class="btn btn-outline-dark w-100" href="https://www.creative-tim.com/learning-lab/bootstrap/license/soft-ui-dashboard">View documentation</a>
        <div class="w-100 text-center">
          <a class="github-button" href="https://github.com/creativetimofficial/soft-ui-dashboard" data-icon="octicon-star" data-size="large" data-show-count="true" aria-label="Star creativetimofficial/soft-ui-dashboard on GitHub">Star</a>
          <h6 class="mt-3">Thank you for sharing!</h6>
          <a href="https://twitter.com/intent/tweet?text=Check%20Soft%20UI%20Dashboard%20made%20by%20%40CreativeTim%20%23webdesign%20%23dashboard%20%23bootstrap5&amp;url=https%3A%2F%2Fwww.creative-tim.com%2Fproduct%2Fsoft-ui-dashboard" class="btn btn-dark mb-0 me-2" target="_blank">
            <i class="fab fa-twitter me-1" aria-hidden="true"></i> Tweet
          </a>
          <a href="https://www.facebook.com/sharer/sharer.php?u=https://www.creative-tim.com/product/soft-ui-dashboard" class="btn btn-dark mb-0 me-2" target="_blank">
            <i class="fab fa-facebook-square me-1" aria-hidden="true"></i> Share
          </a>
        </div>
      </div>
    </div>
  </div>
  <!--   Core JS Files   -->
  <script src="template/assets/js/core/popper.min.js"></script>
  <script src="template/assets/js/core/bootstrap.min.js"></script>
  <script src="template/assets/js/plugins/perfect-scrollbar.min.js"></script>
  <script src="template/assets/js/plugins/smooth-scrollbar.min.js"></script>
  <script>
    var win = navigator.platform.indexOf('Win') > -1;
    if (win && document.querySelector('#sidenav-scrollbar')) {
      var options = {
        damping: '0.5'
      }
      Scrollbar.init(document.querySelector('#sidenav-scrollbar'), options);
    }
  </script>
  <!-- Github buttons -->
  <script async defer src="https://buttons.github.io/buttons.js"></script>
  <!-- Control Center for Soft Dashboard: parallax effects, scripts for the example pages etc -->
  <script src="template/assets/js/soft-ui-dashboard.min.js?v=1.0.7"></script>
</body>

</html>