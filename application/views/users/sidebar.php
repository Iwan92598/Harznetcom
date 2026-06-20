      <!--begin::Sidebar-->
      <aside class="app-sidebar bg-body-secondary shadow" data-bs-theme="dark">
        <!--begin::Sidebar Brand-->
        <div class="sidebar-brand">
          <!--begin::Brand Link-->
          <a href="#" class="brand-link">
            <!--begin::Brand Image-->
            <img
              src="<?= base_url('favicon_32x32.png') ?>"
              alt="AdminLTE Logo"
              class="brand-image opacity-75 shadow"
            />
            <!--end::Brand Image-->
            <!--begin::Brand Text-->
            <span class="brand-text fw-light">My Harznet</span>
            <!--end::Brand Text-->
          </a>
          <!--end::Brand Link-->
        </div>
        <!--end::Sidebar Brand-->
        <!--begin::Sidebar Wrapper-->
        <div class="sidebar-wrapper">
          <nav class="mt-2">
            <!--begin::Sidebar Menu-->
            <ul
              class="nav sidebar-menu flex-column"
              data-lte-toggle="treeview"
              role="navigation"
              aria-label="Main navigation"
              data-accordion="false"
              id="navigation"
            >
            
              <!-- <li class="nav-item">
                <a href="#" class="nav-link active">
                  <i class="nav-icon bi bi-speedometer"></i>
                  <p>
                    Dashboard
                    <i class="nav-arrow"></i>
                  </p>
                </a>
              </li>
                <li class="nav-item">
                <a href="#" class="nav-link">
                  <i class="nav-icon bi bi-speedometer"></i>
                  <p>
                    Paket
                    <i class="nav-arrow"></i>
                  </p>
                </a>
              </li> -->


              <li class="nav-item">
                  <a href="<?= base_url('users/dashboard') ?>"
                    class="nav-link <?= ($this->uri->segment(2) == 'dashboard') ? 'active' : ''; ?>">
                      <i class="nav-icon bi bi-speedometer"></i>
                      <p>Dashboard</p>
                  </a>
              </li>

              <li class="nav-item">
                  <a href="<?= base_url('users/paket') ?>"
                    class="nav-link <?= ($this->uri->segment(2) == 'paket') ? 'active' : ''; ?>">
                      <i class="nav-icon bi bi-box"></i>
                      <p>Paket</p>
                  </a>
              </li>
              <li class="nav-item">
                  <a href="<?= base_url('users/tiket') ?>"
                    class="nav-link <?= ($this->uri->segment(2) == 'tiket') ? 'active' : ''; ?>">
                      <i class="nav-icon bi bi-clipboard-fill"></i>
                      <p>Tiket</p>
                  </a>
              </li>
              <li class="nav-item">
                  <a href="<?= base_url('users/pengumuman') ?>"
                    class="nav-link <?= ($this->uri->segment(2) == 'pengumuman') ? 'active' : ''; ?>">
                      <i class="nav-icon bi bi-bell-fill"></i>
                      <p>Pengumuman</p>
                  </a>
              </li>

            </ul>
            <!--end::Sidebar Menu-->
          </nav>
        </div>
        <!--end::Sidebar Wrapper-->
      </aside>
      <!--end::Sidebar-->