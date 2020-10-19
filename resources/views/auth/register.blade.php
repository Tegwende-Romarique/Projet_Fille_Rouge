@extends('layouts.Accueil.liens')

<div id="ms-preload" class="ms-preload">
    <div id="status">
      <div class="spinner">
        <div class="dot1"></div>
        <div class="dot2"></div>
      </div>
    </div>
  </div>
  <div class="ms-site-container-fluid">
    <div class="bg-full-page ms-hero-bg-dark ms-hero-img-airplane back-fixed">
      <div class="mw-500 absolute-center">
        <div class="card color-dark shadow-6dp animated fadeIn animation-delay-7">
          <div class="ms-hero-bg-primary ms-hero-img-mountain">
            <h2 class="text-center no-m pt-4 pb-4 color-white index-1">Formulaire d'Authentification</h2>
          </div>
          <ul class="nav nav-tabs nav-tabs-full nav-tabs-3 nav-tabs-transparent indicator-primary" role="tablist">
            <li class="nav-item" role="presentation"><a href="#ms-login-tab" aria-controls="ms-login-tab" role="tab" data-toggle="tab" class="nav-link withoutripple active"><i class="fa fa-user"></i> Login</a></li>
            <li class="nav-item" role="presentation"><a href="#ms-register-tab" aria-controls="ms-register-tab" role="tab" data-toggle="tab" class="nav-link withoutripple"><i class="fa fa-user-plus"></i> Register</a></li>
            <li class="nav-item" role="presentation"><a href="#ms-recovery-tab" aria-controls="ms-recovery-tab" role="tab" data-toggle="tab" class="nav-link withoutripple"><i class="fa fa-key"></i> Recovery</a></li>
          </ul>
          <div class="card-body">
              {{-- LE formulaire pour l'Authentification --}}
            <div class="tab-content">
              <div role="tabpanel" class="tab-pane fade active show" id="ms-login-tab">
                <form method="POST" action="{{ route('login') }}">
                    @csrf

                  <fieldset>
                    <div class="form-group label-floating">
                      <div class="input-group">
                        <span class="input-group-addon"><i class="fa fa-user"></i></span>
                        <label class="control-label" for="email">Email</label>
                        <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>
                        @error('email')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                      </div>
                    </div>
                    <div class="form-group label-floating">
                      <div class="input-group">
                        <span class="input-group-addon"><i class="fa fa-lock"></i></span>
                        <label class="control-label" for="password">Password</label>                        <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">

                        @error('password')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                      </div>
                    </div>
                    <div class="row mt-2">
                      <div class="col-5">
                        <div class="form-group mt-1">
                          <div class="form-check">
                            <label class="form-check-label" for="remember">
                                <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>
                          </div>
                        </div>
                      </div>
                      <div class="col-7">
                        <button class="btn btn-raised btn-primary pull-right">Login</button>
                      </div>
                    </div>
                  </fieldset>
                </form>
              </div>

              {{-- formulaire pour l'enregistrement à d'un nouveau utilisateur --}}
              <div role="tabpanel" class="tab-pane fade" id="ms-register-tab">
                <form method="POST" action="{{ route('register') }}">
                    @csrf
                  <fieldset>

                    <div class="form-group label-floating">
                      <div class="input-group">
                        <span class="input-group-addon"><i class="fa fa-user"></i></span>
                        <label class="control-label" for="ms-form-user-r">Nom</label>
                        <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>
                        @error('name')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                      </div>
                    </div>
                    <div class="form-group label-floating">
                        <div class="input-group">
                          <span class="input-group-addon"><i class="fa fa-user-plus"></i></span>
                          <label class="control-label" for="ms-form-user-r">Prenom</label>
                          <input id="prenom" type="text" class="form-control @error('prenom') is-invalid @enderror" name="prenom" value="{{ old('prenom') }}" required autocomplete="prenom" autofocus>
                            @error('prenom')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                      </div>
                    <div class="form-group label-floating">
                      <div class="input-group">
                        <span class="input-group-addon"><i class="fa fa-envelop"></i></span>
                        <label class="control-label" for="-email">Email</label>
                        <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email">

                        @error('email')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                      </div>
                    </div>
                    <div class="form-group label-floating">
                      <div class="input-group">
                        <span class="input-group-addon"><i class="fa fa-lock"></i></span>
                        <label class="control-label" for="password">Password</label>
                        <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">
                        @error('password')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                      </div>
                    </div>
                    <div class="form-group label-floating">
                      <div class="input-group">
                        <span class="input-group-addon"><i class="fa fa-lock"></i></span>
                        <label class="control-label" for="password-confirm">confirmer le mot de passe</label>
                        <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password">
                      </div>
                    </div>
                    <div class="form-group label-floating">
                        <div class="input-group">
                          <span class=""><i class="fa fa-cog"></i></span>
                          <label class="control-label" for="role">Statut</label>
                          <select id="role" class="form-control @error('role') is-invalid @enderror" name="role_id" value="{{ old('role_id') }}" required autocomplete="role" autofocus>
                            @foreach (roles() as $item)
                            <option value="{{$item->id}}">{{$item->name}}</option>
                            @error('role')
                                <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                             @endforeach
                           </select>
                        </div>
                      </div>
                      <button class="btn btn-raised btn-block btn-primary">Enregsitrer</button>
                    <button class="btn btn-raised btn-block btn-danger">Annuler</button>
                  </fieldset>
                </form>
              </div>
              <div role="tabpanel" class="tab-pane fade" id="ms-recovery-tab">
                <fieldset>
                  <div class="form-group label-floating">
                    <div class="input-group">
                      <span class="input-group-addon"><i class="fa fa-account"></i></span>
                      <label class="control-label" for="ms-form-user-recovery">Username</label>
                      <input type="text" id="ms-form-user-recovery" class="form-control">
                    </div>
                  </div>
                  <div class="form-group label-floating">
                    <div class="input-group">
                      <span class="input-group-addon"><i class="fa fa-email"></i></span>
                      <label class="control-label" for="ms-form-email-recovery">Email</label>
                      <input type="email" id="ms-form-email-recovery" class="form-control">
                    </div>
                  </div>
                  <button class="btn btn-raised btn-block btn-primary">Send Password</button>
                </fieldset>
                </form>
              </div>
            </div>
          </div>
        </div>
        <div class="text-center animated fadeInUp animation-delay-7">
          <a href="index.html" class="btn btn-white"><i class="fa fa-home"></i> Accueil</a>
        </div>
      </div>
    </div>






