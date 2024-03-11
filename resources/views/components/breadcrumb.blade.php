<div class="container-fluid">
    <div class="page-header">
      <div class="row">
        <div class="col-lg-6">
          {{ $breadcrumb_title ?? '' }}
          <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="{{ route('index') }}">Accueil</a></li>
              {{ $slot ?? ''}}
          </ol>
        </div>
        <div class="col-lg-6">
          @if(url()->current() === route('commerciale.client.index'))
            <div class="d-flex">
              <a href="{{route('commerciale.client.create')}}" class="btn btn-primary ms-auto">Ajouter un client</a>
            </div>
          @endif
        </div>
      </div>
    </div>
</div>