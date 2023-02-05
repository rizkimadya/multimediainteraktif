@extends('User.Layoutuser.app', ['title' => 'Detail Evaluasi'])

@section('content')
    <section id="evaluasi">
        <div class="container">
            <div class="row text-center">
                <div class="col-12">
                    <p class="title">Evaluasi 1</p>
                    <p class="subtitle">Materi Trakea</p>
                </div>
            </div>
            <div class="row d-flex justify-content-center">
                <div class="col-md-8 col-11">
                    <iframe
                        src="https://docs.google.com/forms/d/e/1FAIpQLSe3l9EDhTYJRqNUc0AyX4Y_RlAZ6BpbrQyFnlyHbIQJnU1SUg/viewform?embedded=true"
                        width="100%" style="height:100vh;" frameborder="0">Loading…</iframe>
                </div>
            </div>
        </div>
    </section>
@endsection
