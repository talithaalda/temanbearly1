<header style="background-color: #e5345b" class="navbar navbar-dark sticky-top flex-md-nowrap p-0 shadow">
  <a class="navbar-brand col-md-3 col-lg-2 me-0 px-3" href="/">Teman Bearly Beauty</a>
    <button class="navbar-toggler position-absolute d-md-none collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#sidebarMenu" aria-controls="sidebarMenu" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="navbar-nav">
      <div class="nav-item text-nowrap">
        <a href="/"><form action="/logout" method="post"></form>
          @csrf
          <form action="/logout" method="post" >
            @csrf
              <button type="submit" style="background-color: #e5345b" class="border-0 text-light">
                <i class="bi bi-box-arrow-up-right text-light"></i> Logout &emsp;&emsp;</button>
          </form>
        </a>
      </div>
    </div>
  </a>
</header>