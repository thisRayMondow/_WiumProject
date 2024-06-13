@extends('dashboard.layouts.main')

@section('container')

<div class="page-header">
  <h3 class="page-title">
    <span class="page-title-icon bg-gradient-info text-white me-2">
      <i class="mdi mdi-home"></i>
    </span> Dashboard
  </h3>
</div>
<div class="row">
  <div class="col-md-4 stretch-card grid-margin">
    <div class="card bg-gradient-primary card-img-holder text-white">
      <div class="card-body">
        <img src="/vendors/assets/images/dashboard/circle.svg" class="card-img-absolute" alt="circle-image" />
        <h4 class="font-weight-normal mb-3"><i class="mdi mdi-account mdi-24px float-right"></i> Anggota Jemaat
        </h4>
        <h2 class="mb-5"> 50 Orang</h2>
        <h6 class="card-text text-end">Anggota Jemaat</h6>
      </div>
    </div>
  </div>
  <div class="col-md-4 stretch-card grid-margin">
    <div class="card bg-gradient-info card-img-holder text-white">
      <div class="card-body">
        <img src="/vendors/assets/images/dashboard/circle.svg" class="card-img-absolute" alt="circle-image" />
        <h4 class="font-weight-normal mb-3"><i class="mdi mdi-account-tie mdi-24px float-right"></i> Pendeta
        </h4>
        <h2 class="mb-5">20 Orang</h2>
        <h6 class="card-text text-end">Pendeta</h6>
      </div>
    </div>
  </div>
  <div class="col-md-4 stretch-card grid-margin">
    <div class="card bg-gradient-success card-img-holder text-white">
      <div class="card-body">
        <h4 class="font-weight-normal mb-3"><i class="mdi mdi-home-city-outline mdi-24px float-right"></i> Departement
        </h4>
        <h2 class="mb-5">{{ count($dept) }} Departement</h2>
        <h6 class="card-text text-end"><button class="btn btn-sm border border-info">Lihat</button></h6>
      </div>
    </div>
  </div>
</div>

@endsection