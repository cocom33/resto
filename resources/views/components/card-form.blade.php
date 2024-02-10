@props(['page'])

<div class="main-content">
    <section class="section">
        <div class="section-header">
            <h1>New {{ $page }} Forms</h1>
            <div class="section-header-breadcrumb">
                <div class="breadcrumb-item active"><a href="#">Dashboard</a></div>
                <div class="breadcrumb-item"><a href="#">Forms</a></div>
                <div class="breadcrumb-item">{{ $page }}</div>
            </div>
        </div>

        <div class="section-body">
            {{ $slot }}
        </div>
    </section>
</div>
