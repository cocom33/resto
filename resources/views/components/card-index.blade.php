@props(['page', 'routeCreate', 'routeCreate'])

<div class="main-content">
    <section class="section">
        <div class="section-header">
            <h1>List {{ $page }}</h1>
            <div class="section-header-button">
                <a href="{{ $routeCreate }}" class="btn btn-primary">Add New</a>
            </div>
            <div class="section-header-breadcrumb">
                <div class="breadcrumb-item active"><a href="#">Dashboard</a></div>
                <div class="breadcrumb-item"><a href="#">{{ $page }}</a></div>
                <div class="breadcrumb-item">All {{ $page }}</div>
            </div>
        </div>
        <div class="section-body">
            <div class="row">
                <div class="col-12">
                    @include('layouts.alert')
                </div>
            </div>
            <h2 class="section-title">{{ $page }}</h2>
            <p class="section-lead">
                You can manage all {{ $page }}, such as editing, deleting and more.
            </p>


            <div class="row mt-4">
                <div class="col-12">
                    {{ $slot }}
                </div>
            </div>
        </div>
    </section>
</div>
