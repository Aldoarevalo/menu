@extends('layout.000-basic1')

@section('content')
<style>
    :root {
        --color-primary: #1D4ED8; /* Valor convertido a hexadecimal */
    }

    /* Uso del color */
    .bg-authentication {
        background-color: var(--color-primary); /* Usando la variable de color */
    }

</style>
<div class="content-overlay"></div>
        <div class="header-navbar-shadow"></div>
        <div class="content-wrapper">
            <div class="content-header row">
            </div>
            <div class="content-body">
                <section class="row flexbox-container">
                    <div class="col-xl-8 col-11 d-flex justify-content-center">
                        <div class="card bg-authentication rounded-0 mb-0">
                            <div class="row m-0" style="min-width:600px">
                                <div class="col-lg-6 d-lg-block d-none text-center align-self-center px-1 py-0">
                                    <img src="{{ asset('assets/img/nsa-logo-footer.svg')}}" alt="branding logo"
                                    style="margin: 20px;"
                                    >
                                </div>
                                <div class="col-lg-6 col-12 p-0">
                                    <div class="card rounded-0 mb-0 px-2" style="height: 100%;
                                                                                     justify-content: center;">
                                        <div class="card-header pb-1">
                                            <div class="card-title">
                                                <h4 class="mb-12">La pagina no existe</h4>
                                            </div>
                                        </div>

                                        <div class="login-footer">


                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>

            </div>
        </div>
@endsection
