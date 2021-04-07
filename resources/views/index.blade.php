@extends('layout')

@section('content')
<div class="container">
    <nav class="navbar navbar-expand-lg navbar-light bg-light" style="height: 100px;" loading="lazy">
        <img src="/img/wayv.png" style="height: 50px; width: 50px;"> <a class="navbar-brand" href="#">Wayzeni Center</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="col-md-3">
            <table>
                <tr>
                    <td><img src="/img/phone.png"></td>
                    <td><p class="text-right"><b>Phone Number:</b> <br> +6281 223 224 225</p></td>
                </tr>
            </table>          
        </div>
        <div class="col-md-3">
            <table>
                <tr>
                    <td><img src="/img/loc.png"></td>
                    <td><p class="text-right"><b>Contact Address:</b> <br> Mojokerto - Jawa Timur</p></td>
                </tr>
            </table>          
        </div>
        <div class="col-md-3">
            <table>
                <tr>
                    <td><img src="/img/mail.png"></td>
                    <td><p class="text-right"><b>E-Mail Address:</b> <br> wayzenni@wayzenni.sch.id</p></td>
                </tr>
            </table>          
        </div>
    </nav>
</div>
<div id="carouselExampleSlidesOnly" class="carousel slide" data-ride="carousel">
    <div class="carousel-inner">
        <div class="carousel-item active">
            <img src="/img/school.jpg" class="d-block w-100" alt="..." height="550px">
            <div class="carousel-caption">
                <img src="/img/wayv.png" class="my-3">
                <h1>Welcome To WayzenNi School</h1>
                <h4 class="mb-5">We Are Your Vision!</h4>
            </div>
        </div>
    </div>
</div>
<br>
<div class="row">
    <div class="col-md-12 text-center">            
        <div class="container">
            <div class="row">
                <div class="col-md-4 col-sm-6">
                    <div class="bg-info text-white">
                        <div class="features-div">
                            <a href="/"><img src="/img/wayv.png" style="height: 100px; width: 100px;"></a>
                            <h3>Home</h3>
                        </div>
                    </div>
                </div><!-- End col-md-3-->
                <div class="col-md-4 col-sm-6">
                    <div class="bg-danger text-white">
                        <div class="features-div">
                            <a href="/about"><img src="/img/wayv.png" style="height: 100px; width: 100px;"></a>
                            <h3>About Us</h3>
                        </div>
                    </div>
                </div><!-- End col-md-3-->
                <div class="col-md-4 col-sm-6">
                    <div class="bg-warning text-white">
                        <div class="features-div">
                            <a href="/pegawai"><img src="/img/wayv.png" style="height: 100px; width: 100px;"></a>
                            <h3>List Siswa</h3>
                        </div>			
                    </div>			
                </div><!-- End col-md-3-->
            </div><!-- End row -->
        </div>
    </div>
</div>
@endsection