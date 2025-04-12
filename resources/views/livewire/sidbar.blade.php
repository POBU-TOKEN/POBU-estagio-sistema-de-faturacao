<div>
    <nav id="sidebarMenu" class="col-md-3 col-lg-2 d-md-block bg-light sidebar collapse">
        <div class="position-sticky pt-3">
          <ul class="nav flex-column">
            <li class="nav-item">
              <a class="nav-link {{Request::is('dashboard') ? 'active' : ''}}" aria-current="page" href="/dashboard">
                <span data-feather="home"></span>
                Dashboard
              </a>
            </li>
            <li class="nav-item">
                <a class="nav-link {{Request::is('Check-in') ? 'active' : ''}}" href="/Check-in">
                  <span data-feather="file"></span>
                  Check-in
                </a>
            </li>
            <li class="nav-item">
              <a class="nav-link {{Request::is('quartos') ? 'active' : ''}}" href="/quartos">
                <span data-feather="file"></span>
                Quartos
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link {{Request::is('reservas') ? 'active' : ''}}" href="/reservas">
                <span data-feather="file"></span>
                Reservas
              </a>
            </li>
            <li class="nav-item">
                <a class="nav-link {{Request::is('add-quarto') ? 'active' : ''}}" href="/add-quarto">
                  <span data-feather="file"></span>
                  Adicionar quarto
                </a>
              </li>
            <li class="nav-item">
                <a class="nav-link {{Request::is('hospedes') ? 'active' : ''}}" href="/hospedes">
                  <span data-feather="file"></span>
                  Hospedes
                </a>
            </li>
            <li class="nav-item">
              <a class="nav-link {{Request::is('faturas') ? 'active' : ''}}" href="/faturas">
                <span data-feather="shopping-cart"></span>
                Faturas
              </a>
            </li>

          </ul>
        </div>
    </nav>
</div>
