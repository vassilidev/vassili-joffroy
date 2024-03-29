@extends('layouts.main')

@section('content')
    <header class="page-header-ui page-header-ui-light bg-white">
        <div class="page-header-ui-content">
            <div class="container px-5">
                <div class="row gx-5 justify-content-center">
                    <div class="col-xl-8 col-lg-10 text-center">
                        <img class="mb-4" src="assets/img/demo/avataaars.svg" style="width: 15rem" />
                        <h1 class="page-header-ui-title">Welcome to my portfolio!</h1>
                        <p class="page-header-ui-text">I am a graphic artist, illustrator, and UI designer specializing in modern, creative design based in Wildemount, TX</p>
                    </div>
                </div>
            </div>
        </div>
        <div class="svg-border-rounded text-light">
            <!-- Rounded SVG Border-->
            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 144.54 17.34" preserveAspectRatio="none" fill="currentColor"><path d="M144.54,17.34H0V0H144.54ZM0,0S32.36,17.34,72.27,17.34,144.54,0,144.54,0"></path></svg>
        </div>
    </header>
    <section class="bg-light py-10">
        <div class="container px-5">
            <div class="row gx-5 text-center">
                <div class="col-lg-4 mb-5 mb-lg-0">
                    <div class="icon-stack icon-stack-xl bg-red text-white mb-4"><i data-feather="edit-3"></i></div>
                    <h3>Illustration</h3>
                    <p class="mb-0">I provide custom illustration services for contract clients</p>
                </div>
                <div class="col-lg-4 mb-5 mb-lg-0">
                    <div class="icon-stack icon-stack-xl bg-yellow text-white mb-4"><i data-feather="layout"></i></div>
                    <h3>UI Design</h3>
                    <p class="mb-0">User experience and interface designs is one of my specialties</p>
                </div>
                <div class="col-lg-4">
                    <div class="icon-stack icon-stack-xl bg-blue text-white mb-4"><i data-feather="droplet"></i></div>
                    <h3>Graphic Design</h3>
                    <p class="mb-0">Photo restoration, post processing, and other photo services</p>
                </div>
            </div>
        </div>
        <div class="svg-border-rounded text-white">
            <!-- Rounded SVG Border-->
            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 144.54 17.34" preserveAspectRatio="none" fill="currentColor"><path d="M144.54,17.34H0V0H144.54ZM0,0S32.36,17.34,72.27,17.34,144.54,0,144.54,0"></path></svg>
        </div>
    </section>
    <section class="bg-white py-10">
        <div class="container px-5">
            <div class="row gx-5">
                <div class="col-md-4">
                    <a class="card card-portfolio mb-5" href="#!">
                        <img class="card-img-top" src="https://source.unsplash.com/jWQj5Wjepuk/400x300" alt="..." />
                        <div class="card-body"><div class="card-title">Book</div></div>
                    </a>
                    <a class="card card-portfolio mb-5" href="#!">
                        <img class="card-img-top" src="https://source.unsplash.com/Ecnx13MEPK0/400x500" alt="..." />
                        <div class="card-body"><div class="card-title">Flower Mug</div></div>
                    </a>
                    <a class="card card-portfolio mb-5 mb-md-0" href="#!">
                        <img class="card-img-top" src="https://source.unsplash.com/eUCy1jb_B7I/400x400" alt="..." />
                        <div class="card-body"><div class="card-title">Cactus Display</div></div>
                    </a>
                </div>
                <div class="col-md-4">
                    <a class="card card-portfolio mb-5" href="#!">
                        <img class="card-img-top" src="https://source.unsplash.com/cuTcfqsES6o/400x500" alt="..." />
                        <div class="card-body"><div class="card-title">Reading</div></div>
                    </a>
                    <a class="card card-portfolio mb-5" href="#!">
                        <img class="card-img-top" src="https://source.unsplash.com/jipR1oTCO7U/400x400" alt="..." />
                        <div class="card-body"><div class="card-title">White Book</div></div>
                    </a>
                    <a class="card card-portfolio mb-5 mb-md-0" href="#!">
                        <img class="card-img-top" src="https://source.unsplash.com/n3sqjJzZiBM/400x300" alt="..." />
                        <div class="card-body"><div class="card-title">Photo Face</div></div>
                    </a>
                </div>
                <div class="col-md-4">
                    <a class="card card-portfolio mb-5" href="#!">
                        <img class="card-img-top" src="https://source.unsplash.com/Zr7MxECDTQ8/400x300" alt="..." />
                        <div class="card-body"><div class="card-title">Catalog</div></div>
                    </a>
                    <a class="card card-portfolio mb-5" href="#!">
                        <img class="card-img-top" src="https://source.unsplash.com/QcyenJDqDzw/400x500" alt="..." />
                        <div class="card-body"><div class="card-title">Notebook</div></div>
                    </a>
                    <a class="card card-portfolio mb-5 mb-md-0" href="#!">
                        <img class="card-img-top" src="https://source.unsplash.com/TIutDBFEtcY/400x400" alt="..." />
                        <div class="card-body"><div class="card-title">Book Stand</div></div>
                    </a>
                </div>
            </div>
        </div>
        <div class="svg-border-rounded text-light">
            <!-- Rounded SVG Border-->
            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 144.54 17.34" preserveAspectRatio="none" fill="currentColor"><path d="M144.54,17.34H0V0H144.54ZM0,0S32.36,17.34,72.27,17.34,144.54,0,144.54,0"></path></svg>
        </div>
    </section>
    <section class="bg-light py-10">
        <div class="container px-5">
            <div class="row gx-5 justify-content-center">
                <div class="col-lg-8 text-center">
                    <h2>Contact me</h2>
                    <p class="mb-5">I am available for contract work, when you're ready - let me know!</p>
                    <div class="row gx-5">
                        <div class="col">
                            <div class="card">
                                <div class="card-body">
                                    <div class="icon-stack icon-stack-lg bg-orange text-white mb-3"><i data-feather="mail"></i></div>
                                    <div class="small"><a href="#!">hello@example.com</a></div>
                                </div>
                            </div>
                        </div>
                        <div class="col">
                            <div class="card">
                                <div class="card-body">
                                    <div class="icon-stack icon-stack-lg bg-green text-white mb-3"><i data-feather="smartphone"></i></div>
                                    <div class="small">555-123-4567</div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="svg-border-rounded text-dark">
            <!-- Rounded SVG Border-->
            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 144.54 17.34" preserveAspectRatio="none" fill="currentColor"><path d="M144.54,17.34H0V0H144.54ZM0,0S32.36,17.34,72.27,17.34,144.54,0,144.54,0"></path></svg>
        </div>
    </section>
@endsection