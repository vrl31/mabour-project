<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link href="https://fonts.googleapis.com/css?family=Open+Sans|Rubik" rel="stylesheet">
    <title>Travs</title>
    <link rel="stylesheet" href="css/bootstrap.min.css">
    
    <style type="text/css">
    #section-top{
        background-image:url("tua.png");
        box-shadow: inset 0 0 999999px #d49bef;
        padding-bottom:290px;
       
    }
    section{
        padding-top:4rem;
    }
    #section-newsletter,
    #yoruba,
    #continue-button,
    #submit-button{
        background-color:#620682;
    }
    #howitworks-heading,
    #comfort,
    #AboutUs,
    #brand,
    #feedback-card-header{
        color: #620682;
    }
    #section-newsletter{
        padding-bottom:10px;
        padding-top:2rem;
    }
    
    </style>
    
  </head>

    <body>
        <nav class="navbar navbar-light bg-light fixed-top navbar-expand-md">
            <div class="container">
                <a href="#" id="brand" class="h2 navbar-brand">Form Reservasi</a>
                <button type="button" class="navbar-toggler navbar-toggler-right" data-toggle="collapse" data-target="#navbarNav" aria-expanded="false"
                    aria-controls="navbarNav" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse d-lg-flex flex-column align-items-right" id="navbarNav">
                    <ul class="navbar-nav ml-auto">
                        <li class="nav-item mr-sm-0 mr-lg-3">
                            <a href="index.html" class="nav-link">Home</a>
                        </li>
                        <li class="nav-item mr-sm-0 mr-lg-3">
                            <a href="index3.html" class="nav-link">Bookings</a>
                        </li>
                        <li class="nav-item mr-sm-0 mr-lg-3">
                            <a href="ticket.html" class="nav-link">Ticket</a>
                        </li>
                        <li class="nav-item mr-sm-0 mr-lg-3">
                            <a href="#0" class="nav-link">About</a>
                        </li>
                    </ul> 
                </div>
            </div>
        </nav>
        <form action="post">
        <section id="section-top">
            <div class="container">
                <div class="card text-center mt-3 mb-10">
                    <h2 class="card-header">Lengkapi Form Berikut</h2>
                    
                    <div class="card-body">
                        <form class="row mb-4" method="post">    
                                <div class="col- col-md-6">
                                    <div class="form-group">
                                        <label for="fullname" class="required sr-only">Nama Lengkap</label>
                                        <input type="text" class="form-control" name="Nama Lengkap" id="fullname" placeholder="nama_lengkap">
            
                                        </form>
                                    </div>
                                </div>

                                <div class="col-12 col-md-6">
                                    <div class="form-group">
                                        <label for="phonenumber" class="sr-only">No Handphone</label>
                                        <input type="number" class="tel form-control" placeholder="no_telp" id="phonenumber">
                                    </div>
                                </div>

                                <div class="col-12 col-md-6">
                                    <div class="form-group">
                                        <label for="date" class="sr-only">Date:</label>
                                        <input type="text" class="form-control text-n" onfocusin="(this.type='date')" 
                                        onfocusout="(this.type='text')" placeholder="Pilih Tanggal" id="date">
                                        *beroperasi hari kamis, sabtu dan minggu*
                                    </div>
                                </div>
                                <div class="col-12 col-md-6">
                                    <div class="form-group">
                                        <label for="departure" class="required sr-only">Departure:</label>
                                        <select class="form-control" name="departure[location]" id="departure">
                                        <option selected >Pilih Jam</option>
                                        <option value="Ibadan">18.00-18.30</option>
                                        <option value="Osogbo">18.30-19.00</option>
                                        <option value="Osogbo">19.45-20.15</option>
                                        <option value="Osogbo">20.15-20.45</option>
                                        </select>
                                    </div>
                                </div>
                                
                                <div class="col-12 col-md-6">
                                        <a href="ticket.html" id="continue-button" class="btn text-white">Continue</button>
                                    </a>
                                </div>
                            </div>
                    </section>
            
                        </form> 
                    </div>
                </div> <section id="section-newsletter">
                                    <div class="container">
                                       
                                            <div class="text-center">
                                                    <small class="text-white ">&copy; Madiun Bus Tour 2023 (kelompok 4)                                                                                                                                     </small></div>
                                        </div>

        </section>
        










        <!-- jQuery first, then Popper.js, then Bootstrap JS -->
        <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/smooth-scroll/12.1.5/js/smooth-scroll.min.js" integrity="sha256-MMt0/21G3z0Zg4ET1kI3HC9npItDowkitRDVr0FhCxA=" crossorigin="anonymous"></script>
    </body>
</html>