@extends('layouts.frontend.main')

@section('content')

<div class="container">
    <div class="row align-items-center">
        <div class="col-md-6">
            <h5 class="display-5">mari kita jelajahi dan bergabung dalam <a href="#" class="text-decoration-underline">project</a> mahasiswa ini.</h5>
            <p class="lead">Project adalah solusi yang sudah terbukti efektif dan dapat membantu Anda mencapai tujuan Anda. Sudah ratusan proyek yang terselesaikan dengan baik. Jadi, tunggu apa lagi? Bergabunglah sekarang juga dan rasakan manfaatnya!</p>
            <a href="#" class="btn btn-dark btn-lg">Lihat Proyek</a>
        </div>
        <div class="col-md-6 text-center p-0">
            <img src="{{ asset('frontend/assets/images/banner-kanan.png') }}" class="img-fluid" alt="Banner Image">
        </div>
    </div>
    <div class="row">
        <div class="col-md-6 bg-dark text-white p-5">
            <h2>Selamat datang di platform ElkaMania</h2>
            <p>Platform pengembangan hard skill mahasiswa yang diresmikan oleh ElkaMania. Platform ini menyediakan berbagai macam pelatihan dan kursus yang dapat membantu mahasiswa untuk mengembangkan keterampilan mereka di bidang-bidang yang relevan dengan program studi mereka.</p>
        </div>
        <div class="col-md-6 bg-light p-5">
            <div class="d-flex justify-content-center mb-3">
                <span class="badge bg-primary me-2">Design</span>
                <span class="badge bg-warning text-dark me-2">Surat</span>
                <span class="badge bg-info text-dark me-2">Coding</span>
                <span class="badge bg-secondary">Another</span>
            </div>
            <p>Di platform kami, Anda akan menemukan beragam kategori proyek yang telah kami tampilkan, sehingga Anda memiliki banyak opsi untuk dieksplorasi dan menemukan inspirasi.</p>
        </div>
    </div>
</div>

<div class="container my-5">
    <div class="row align-items-center">
        <div class="col-md-6 text-center">
            <img src="{{ asset('frontend/assets/images/mask-group.png') }}" class="img-fluid" alt="Mask Group Image">
        </div>
        <div class="col-md-6">
            <h2>Yuk, mari kita bergabung dalam proyek-proyek kami</h2>
            <div class="mt-4">
                <h5><i class='bx bx-group'></i> Kolaborasi Kreatif</h5>
                <p>Anda memiliki kesempatan untuk berkolaborasi dengan mahasiswa lain yang memiliki minat dan keahlian serupa. Ini membuka pintu untuk ide-ide inovatif dan pengalaman yang memperkaya.</p>
            </div>
            <div class="mt-4">
                <h5><i class='bx bx-group'></i> Paparan dan pengakuan</h5>
                <p>Memamerkan proyek-proyek Anda di platform ini memberikan eksposur yang luas kepada karya Anda. Ini dapat meningkatkan pengakuan Anda sebagai mahasiswa kreatif dan membantu membangun portofolio yang kuat.</p>
            </div>
            <div class="mt-4">
                <h5><i class='bx bx-book'></i> Pembelajaran dan pengembangan</h5>
                <p>Terlibat dalam proyek-proyek mahasiswa memungkinkan Anda untuk terus belajar, mengembangkan keterampilan, dan mengaplikasikan pengetahuan yang Anda peroleh selama studi. Ini merupakan kesempatan untuk pertumbuhan pribadi dan profesional yang berkelanjutan.</p>
            </div>
        </div>
    </div>
</div>

<div class="container my-5">
    <h2 class="mb-4">Browse talent by category</h2>
    <p>Looking for work? <a href="#" class="text-decoration-underline">Browse Jobs</a></p>
    <div class="row">
        <div class="col-md-3 mb-4">
            <div class="card h-100">
                <div class="card-body">
                    <h5 class="card-title">Development & IT</h5>
                    <p class="card-text"><i class='bx bxs-star'></i> 4.85/5</p>
                    <p class="card-text">1853 skills</p>
                </div>
            </div>
        </div>
        <div class="col-md-3 mb-4">
            <div class="card h-100">
                <div class="card-body">
                    <h5 class="card-title">AI Services</h5>
                    <p class="card-text"><i class='bx bxs-star'></i> 4.8/5</p>
                    <p class="card-text">294 skills</p>
                </div>
            </div>
        </div>
        <div class="col-md-3 mb-4">
            <div class="card h-100">
                <div class="card-body">
                    <h5 class="card-title">Design & Creative</h5>
                    <p class="card-text"><i class='bx bxs-star'></i> 4.91/5</p>
                    <p class="card-text">968 skills</p>
                </div>
            </div>
        </div>
        <div class="col-md-3 mb-4">
            <div class="card h-100">
                <div class="card-body">
                    <h5 class="card-title">Sales & Marketing</h5>
                    <p class="card-text"><i class='bx bxs-star'></i> 4.77/5</p>
                    <p class="card-text">392 skills</p>
                </div>
            </div>
        </div>
        <div class="col-md-3 mb-4">
            <div class="card h-100">
                <div class="card-body">
                    <h5 class="card-title">Writing & Translation</h5>
                    <p class="card-text"><i class='bx bxs-star'></i> 4.92/5</p>
                    <p class="card-text">505 skills</p>
                </div>
            </div>
        </div>
        <div class="col-md-3 mb-4">
            <div class="card h-100">
                <div class="card-body">
                    <h5 class="card-title">Admin & Customer Support</h5>
                    <p class="card-text"><i class='bx bxs-star'></i> 4.77/5</p>
                    <p class="card-text">508 skills</p>
                </div>
            </div>
        </div>
        <div class="col-md-3 mb-4">
            <div class="card h-100">
                <div class="card-body">
                    <h5 class="card-title">Finance & Accounting</h5>
                    <p class="card-text"><i class='bx bxs-star'></i> 4.79/5</p>
                    <p class="card-text">214 skills</p>
                </div>
            </div>
        </div>
        <div class="col-md-3 mb-4">
            <div class="card h-100">
                <div class="card-body">
                    <h5 class="card-title">Engineering & Architecture</h5>
                    <p class="card-text"><i class='bx bxs-star'></i> 4.85/5</p>
                    <p class="card-text">650 skills</p>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="container my-5">
    <div class="row align-items-center bg-dark">
        <div class="col-md-8 text-white p-5">
            <h2 class="display-5">Selamat datang di <br>Platform Project ElkaMania</h2>
            <p>Platform pengembangan hard skill mahasiswa yang dipersembahkan oleh ElkaMania. Platform ini menyediakan berbagai macam proyek yang dapat membantu mahasiswa untuk mengembangkan keterampilan mereka di bidang-bidang yang relevan dengan program studi mereka.</p>
            <ul class="list-unstyled">
                <li class="mb-2"><i class='bx bx-check'></i> Pelatihan dan kursus yang berkualitas</li>
                <li class="mb-2"><i class='bx bx-check'></i> Akses yang terjangkau</li>
                <li class="mb-2"><i class='bx bx-check'></i> Fitur yang mudah digunakan</li>
            </ul>
            <a href="#" class="btn btn-light">Learn more</a>
        </div>
        <div class="col-md-4 text-center p-0">
            <img src="{{ asset('frontend/assets/images/people.jpg') }}" class="img-fluid" alt="People Image">
        </div>
    </div>
</div>

<div class="container my-5">
    <h2 class="mb-4 text-center">Project Unggulan</h2>
    <div class="row">
        @foreach ($projects as $project)
            <div class="col-md-4 mb-4">
                <div class="card h-100">
                    <div class="card-body">
                        <span class="badge bg-primary mb-2">Programming & Tech</span>
                        <h5 class="card-title">{{ $project->name }}</h5>
                        <p class="card-text">Halo selamat datang di proyek kelompok kami, selamat melihat lihat</p>
                        <img src="{{ Storage::url($project->thumbnail) }}" class="img-fluid mb-3" alt="Project Image">
                        <div class="d-flex justify-content-between align-items-center">
                            <div class="d-flex align-items-center">
                                <img src="{{ asset('assets/img/avatars/1.png') }}" class="rounded-circle me-2" alt="Avatar" width="30" height="30">
                                <img src="{{ asset('assets/img/avatars/1.png') }}" class="rounded-circle me-2" alt="Avatar" width="30" height="30">
                                <img src="{{ asset('assets/img/avatars/1.png') }}" class="rounded-circle me-2" alt="Avatar" width="30" height="30">
                            </div>
                            <small class="text-muted">{{ date('d F Y', strtotime($project->created_at)) }}</small>
                        </div>
                    </div>
                </div>
            </div>
        @endforeach
    </div>
    <div class="text-center mt-4">
        <a href="#" class="btn btn-dark btn-lg">Lihat Program Lainnya</a>
    </div>
</div>

<div class="container my-5 text-center">
    <div class="row">
        <div class="col-md-4">
            <h3>560+</h3>
            <p>Global Brands Use "Project"</p>
        </div>
        <div class="col-md-4">
            <h3>120+</h3>
            <p>Lorem ipsum dolor sit amet</p>
        </div>
        <div class="col-md-4">
            <h3>360K+</h3>
            <p>Lorem ipsum dolor sit amet</p>
        </div>
    </div>
</div>

<div class="container my-5">
    <div class="row align-items-center">
        <div class="col-md-4 text-center">
            <img src="{{ asset('frontend/assets/images/costumer.svg') }}" class="img-fluid" alt="Customer Image">
        </div>
        <div class="col-md-8">
            <h5 class="text-primary">What They Say</h5>
            <h2>what our customer say about us</h2>
            <p>“Saya sangat senang dengan adanya platform Project dalam meningkatkan pengembangan hard skill mahasiswa yang dipersembahkan oleh ElkaMania. Platform ini sangat bermanfaat bagi mahasiswa untuk mengembangkan keterampilan dan kompetensi mereka di bidang-bidang yang relevan dengan program studi mereka.”</p>
            <div class="d-flex align-items-center">
                <img src="{{ asset('assets/img/avatars/1.png') }}" class="rounded-circle me-3" alt="Customer Avatar" width="50" height="50">
                <div>
                    <h5 class="mb-0">Eleanor Pena</h5>
                    <p class="mb-0">Student</p>
                    <div class="text-warning">
                        <i class='bx bxs-star'></i>
                        <i class='bx bxs-star'></i>
                        <i class='bx bxs-star'></i>
                        <i class='bx bxs-star'></i>
                        <i class='bx bxs-star'></i>
                    </div>
                </div>
            </div>
            <a href="#" class="btn btn-dark mt-4">All Stories</a>
        </div>
    </div>
</div>

<div class="container my-5 bg-light">
    <div class="row align-items-center">
        <div class="col-md-8">
            <h2 class="display-5">Suddenly it's all so <em>doable</em>.</h2>
            <a href="#" class="btn btn-dark btn-lg mt-3">Join Project</a>
        </div>
        <div class="col-md-4 text-center">
            <img src="{{ asset('frontend/assets/images/doable.svg') }}" class="img-fluid" alt="Doable Image">
        </div>
    </div>
</div>

@endsection