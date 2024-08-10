<!-- Navbar Start -->
<div class="container-fluid p-0 nav-bar">
    <nav class="navbar navbar-expand-lg bg-none navbar-dark py-3">
        <a href="index.html" class="navbar-brand px-lg-4 m-0">
            <h1 class="m-0 display-4 text-uppercase text-white">CIATER</h1>
        </a>
        <button type="button" class="navbar-toggler" data-toggle="collapse" data-target="#navbarCollapse">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse justify-content-between" id="navbarCollapse">
            <div class="navbar-nav ml-auto p-4">
                <a href="index.php" class=" if($currentPage =='index.php'){
                    echo 'nav-item nav-link active';}
                    else{echo 'nav-item nav-link';}
                    ">Home</a>
                <a href="paket.php" class="if($currentPage =='paket.php'){
                    echo 'nav-item nav-link active';}
                    else{echo 'nav-item nav-link';}
                    ">Paket</a>
                <a href="pesanan.php" class=" if($currentPage =='pesanan.php'){
                        echo 'nav-item nav-link active';}
                        else{echo 'nav-item nav-link';}
                        ">Reservasi</a>
                <a href="reservation/reservation.php" class=" if($currentPage =='reservation/reservation.php'){
                echo 'nav-item nav-link active';}
                else{echo 'nav-item nav-link';}
                ">Pesanan</a>
            </div>
        </div>
    </nav>
</div>
<!-- Navbar End -->