<aside class="left-sidebar">
  <!-- Sidebar scroll-->
  <div>
      <div class="brand-logo d-flex align-items-center justify-content-between">
          <a href="{{ url('/') }}" class="text-nowrap logo-img">
              shoman
          </a>

          <div class="close-btn d-xl-none d-block sidebartoggler cursor-pointer" id="sidebarCollapse">
              <i class="ti ti-x fs-8"></i>
          </div>
      </div>
      <!-- Sidebar navigation-->
      <nav class="sidebar-nav scroll-sidebar" data-simplebar="">
          <ul id="sidebarnav">
              <li class="nav-small-cap">
                  <i class="ti ti-home nav-small-cap-icon fs-4"></i>
                  <span class="hide-menu">Home</span>
              </li>

              

              <li class="sidebar-item">
                  <a class="sidebar-link" href="{{url('privacy')}}" aria-expanded="false">
                      <span>
                          <i class="ti ti-file"></i>
                      </span>
                      <span class="hide-menu">privacy</span>
                  </a>
              </li>


            
              
              <li class="sidebar-item">
                <a class="sidebar-link" href="{{url('category')}}" aria-expanded="false">
                    <span>
                        <i class="ti ti-user"></i>
                    </span>
                    <span class="hide-menu">category</span>
                </a>
            </li>

              <li class="sidebar-item">
                  <a class="sidebar-link" href="{{url('index/about')}}" aria-expanded="false">
                      <span>
                          <i class="ti ti-user"></i>
                      </span>
                      <span class="hide-menu">about</span>
                  </a>
              </li>

              <li class="sidebar-item">
                  <a class="sidebar-link" href="{{url('ownerBussiness')}}" aria-expanded="false">
                      <span>
                          <i class="ti ti-lock"></i>
                      </span>
                      <span class="hide-menu">ownerBussiness</span>
                  </a>
              </li>

              <li class="sidebar-item">
                  <a class="sidebar-link" href="{{url('influncer')}}" aria-expanded="false">
                      <span>
                          <i class="ti ti-star"></i>
                      </span>
                      <span class="hide-menu">influncer</span>
                  </a>
              </li>

              <li class="sidebar-item">
                  <a class="sidebar-link" href="{{url('admin')}}" aria-expanded="false">
                      <span>
                          <i class="ti ti-comment-alt"></i>
                      </span>
                      <span class="hide-menu">Admins</span>
                  </a>
              </li>

         

               

              <li class="sidebar-item">
                  <a class="sidebar-link" href="{{url('logout')}}" aria-expanded="false">
                      <span>
                          <i class="ti ti-power-off"></i>
                      </span>
                      <span class="hide-menu">Logout</span>
                  </a>
              </li>

          </ul>
      </nav>
      <!-- End Sidebar navigation -->
  </div>
  <!-- End Sidebar scroll-->
</aside>
