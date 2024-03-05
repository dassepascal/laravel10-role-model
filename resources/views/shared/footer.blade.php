


<div class="container">
  <footer class="py-5">
    <div class="row">
      <div class="col-2">
        <h5>A découvrir</h5>
        <ul class="nav flex-column">
          <li class="nav-item mb-2"><a href="{{ route('conseils') }}" class="nav-link p-0 text-muted">Nos conseils</a></li>
          <li class="nav-item mb-2"><a href="{{ route('actualites') }}" class="nav-link p-0 text-muted">Nos actualités<source></a></li>

        </ul>
      </div>

      <div class="col-2">
        <h5>A propos</h5>
        <ul class="nav flex-column">
          <li class="nav-item mb-2"><a href="{{ route('notreAgence') }}" class="nav-link p-0 text-muted">Notre agence</a></li>
          <li class="nav-item mb-2"><a href="{{ route('quiSommesNous') }}" class="nav-link p-0 text-muted">Qui sommes-nous</a></li>

        </ul>
      </div>

      <div class="col-2">
        <h5>Confidentiabilité</h5>
        <ul class="nav flex-column">
          <li class="nav-item mb-2"><a href="{{ route('sitemap') }}" class="nav-link p-0 text-muted">Plan du site</a></li>
          <li class="nav-item mb-2"><a href="{{ route('informations')}}" class="nav-link p-0 text-muted">Informations légales</a></li>
          <li class="nav-item mb-2"><a href="{{ route('politiques') }}" class="nav-link p-0 text-muted">Politique de protection des données</a></li>
          <li class="nav-item mb-2"><a href="{{ route('politiqueCookies') }}" class="nav-link p-0 text-muted">Politique des cookies</a></li>
          <li class="nav-item mb-2"><a href="{{ route('gestionCookies') }}" class="nav-link p-0 text-muted">Gestion des cookies</a></li>
        </ul>
      </div>

      <div class="col-4 offset-1">
        {{-- <form>
          <h5>Subscribe to our newsletter</h5>
          <p>Monthly digest of whats new and exciting from us.</p>
          <div class="d-flex w-100 gap-2">
            <label for="newsletter1" class="visually-hidden">Email address</label>
            <input id="newsletter1" type="text" class="form-control" placeholder="Email address">
            <button class="btn btn-primary" type="button">Subscribe</button>
          </div>
        </form> --}}
      </div>
    </div>

    <div class="d-flex justify-content-between py-4 my-4 border-top">
      <p>&copy; 2024.</p>
      <ul class="list-unstyled d-flex">
        <li class="ms-3"><a class="link-dark" href="#"><svg class="bi" width="24" height="24"><use xlink:href="#twitter"/></svg></a></li>
        <li class="ms-3"><a class="link-dark" href="#"><svg class="bi" width="24" height="24"><use xlink:href="#instagram"/></svg></a></li>
        <li class="ms-3"><a class="link-dark" href="#"><svg class="bi" width="24" height="24"><use xlink:href="#facebook"/></svg></a></li>
      </ul>
    </div>
  </footer>
</div>


