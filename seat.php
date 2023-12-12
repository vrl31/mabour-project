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
        background-image:url("background.png");
        box-shadow: inset 0 0 999999px #d49bef;
        padding-bottom:5px;
       
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
    .check{
        background-color:#620682;
        width: 200px;
        height: 200px;
        border-radius: 100%;
    }
    .check i{
        vertical-align: middle;
        line-height: 200px;
        font-size: 150px;
        color: white;   
    }
    #carder{
        
        margin-top: 100px;
        margin-bottom: 100px;
    }


    /* =============CSS CODE FOR THE SEAT ============= */
    *,*:before,*:after {
  box-sizing: border-box;
}
html {
  font-size: 16px;
}

.plane {
  margin: 20px auto;
  max-width: 300px;
}

.cockpit {
  height: 250px; 
  position: relative;
  overflow: hidden;
  text-align: center;
  border-bottom: 5px solid #d8d8d8;
  &:before {
    content: "";
    display: block;
    position: absolute;
    top: 0;
    left: 0;
    height: 500px;
    width: 100%;
    border-radius: 50%;
    border-right: 5px solid #d8d8d8;
    border-left: 5px solid #d8d8d8;
  }
  h1 {
    width: 60%;
    margin: 100px auto 35px auto;
  }
}

.exit {
  position: relative;
  height: 50px;
  &:before,
  &:after {
    content: "EXIT";
    font-size: 14px;
    line-height: 18px;
    padding: 0px 2px;
    font-family: "Arial Narrow", Arial, sans-serif;
    display: block;
    position: absolute;
    background: green;
    color: white;
    top: 50%;
    transform: translate(0, -50%);
  }
  &:before {
    left: 0;
  }
  &:after {
    right: 0;
  }
}

.fuselage {
  border-right: 5px solid #d8d8d8;
  border-left: 5px solid #d8d8d8;
}

ol {
  list-style :none;
  padding: 0;
  margin: 0;
}

.row {
  
}

.seats {
  display: flex;
  flex-direction: row;
  flex-wrap: nowrap;
  justify-content: flex-start;  
}

.seat {
  display: flex;
  flex: 0 0 14.28571428571429%;
  padding: 5px;
  position: relative;  
  &:nth-child(3) {
    margin-right: 14.28571428571429%;
  }
  input[type=checkbox] {
    position: absolute;
    opacity: 0;
  }
  input[type=checkbox]:checked {
    + label {
      background: #bada55;      
      -webkit-animation-name: rubberBand;
          animation-name: rubberBand;
      animation-duration: 300ms;
      animation-fill-mode: both;
    }
  }
  input[type=checkbox]:disabled {
    + label {
      background: #dddddd;
      text-indent: -9999px;
      overflow: hidden;
      &:after {
        content: "X";
        text-indent: 0;
        position: absolute;
        top: 4px;
        left: 50%;
        transform: translate(-50%, 0%);
      }
      &:hover {
        box-shadow: none;
        cursor: not-allowed;
      }
    }
  }
  label {    
    display: block;
    position: relative;    
    width: 100%;    
    text-align: center;
    font-size: 14px;
    font-weight: bold;
    line-height: 1.5rem;
    padding: 4px 0;
    background: #F42536;
    border-radius: 5px;
    animation-duration: 300ms;
    animation-fill-mode: both;
    
    &:before {
      content: "";
      position: absolute;
      width: 75%;
      height: 75%;
      top: 1px;
      left: 50%;
      transform: translate(-50%, 0%);
      background: rgba(255,255,255,.4);
      border-radius: 3px;
    }
    &:hover {
      cursor: pointer;
      box-shadow: 0 0 0px 2px #5C6AFF;
    }
    
  }
}

@-webkit-keyframes rubberBand {
  0% {
    -webkit-transform: scale3d(1, 1, 1);
            transform: scale3d(1, 1, 1);
  }

  30% {
    -webkit-transform: scale3d(1.25, 0.75, 1);
            transform: scale3d(1.25, 0.75, 1);
  }

  40% {
    -webkit-transform: scale3d(0.75, 1.25, 1);
            transform: scale3d(0.75, 1.25, 1);
  }

  50% {
    -webkit-transform: scale3d(1.15, 0.85, 1);
            transform: scale3d(1.15, 0.85, 1);
  }

  65% {
    -webkit-transform: scale3d(.95, 1.05, 1);
            transform: scale3d(.95, 1.05, 1);
  }

  75% {
    -webkit-transform: scale3d(1.05, .95, 1);
            transform: scale3d(1.05, .95, 1);
  }

  100% {
    -webkit-transform: scale3d(1, 1, 1);
            transform: scale3d(1, 1, 1);
  }
}

@keyframes rubberBand {
  0% {
    -webkit-transform: scale3d(1, 1, 1);
            transform: scale3d(1, 1, 1);
  }

  30% {
    -webkit-transform: scale3d(1.25, 0.75, 1);
            transform: scale3d(1.25, 0.75, 1);
  }

  40% {
    -webkit-transform: scale3d(0.75, 1.25, 1);
            transform: scale3d(0.75, 1.25, 1);
  }

  50% {
    -webkit-transform: scale3d(1.15, 0.85, 1);
            transform: scale3d(1.15, 0.85, 1);
  }

  65% {
    -webkit-transform: scale3d(.95, 1.05, 1);
            transform: scale3d(.95, 1.05, 1);
  }

  75% {
    -webkit-transform: scale3d(1.05, .95, 1);
            transform: scale3d(1.05, .95, 1);
  }

  100% {
    -webkit-transform: scale3d(1, 1, 1);
            transform: scale3d(1, 1, 1);
  }
}

.rubberBand {
  -webkit-animation-name: rubberBand;
          animation-name: rubberBand;
}



    </style>
  </head>
    <body>
        <nav class="navbar navbar-light bg-light fixed-top navbar-expand-md">
            <div class="container">
                <a href="#" id="brand" class="h2 navbar-brand">Travs</a>
                <button type="button" class="navbar-toggler navbar-toggler-right" data-toggle="collapse" data-target="#navbarNav" aria-expanded="false"
                    aria-controls="navbarNav" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse d-lg-flex flex-column align-items-right" id="navbarNav">
                    <ul class="navbar-nav ml-auto">
                        <li class="nav-item mr-sm-0 mr-lg-3">
                            <a href="#0" class="nav-link">Home</a>
                        </li>
                        <li class="nav-item mr-sm-0 mr-lg-3">
                            <a href="#0" class="nav-link">Bookings</a>
                        </li>
                        <li class="nav-item mr-sm-0 mr-lg-3">
                            <a href="#0" class="nav-link">Ticket</a>
                        </li>
                        <li class="nav-item mr-sm-0 mr-lg-3">
                            <a href="#0" class="nav-link">Contact</a>
                        </li>
                        <li class="nav-item mr-sm-0 mr-lg-3">
                            <a href="#0" class="nav-link">About</a>
                        </li>
                        <li class="nav-item">
                            <a href="#0" class="nav-link"><button type="button" id="yoruba" class="btn btn-sm text-white">Yoruba</button></a>
                        </li>
                    </ul> 
                </div>
            </div>
        </nav>
        <section id="section-top">
            <div class="container">
                <div id="carder" class="card text-center mx-auto">
                    <h2 class="card-header">Select seat</h2>
                    <div class="card-body ">
                        <div class="plane">
                            <div class="cockpit">
                              <h1>Please select a seat</h1>
                            </div>
                            <div class="exit exit--front fuselage">
                              
                            </div>
                            <ol class="cabin fuselage">
                              <li class="row row--1">
                                <ol class="seats" type="A">
                                  <li class="seat">
                                    <input type="checkbox" id="1A" />
                                    <label for="1A">1A</label>
                                  </li>
                                  <li class="seat">
                                    <input type="checkbox" id="1B" />
                                    <label for="1B">1B</label>
                                  </li>
                                  <li class="seat">
                                    <input type="checkbox" id="1C" />
                                    <label for="1C">1C</label>
                                  </li>
                                  <li class="seat">
                                    <input type="checkbox" disabled id="1D" />
                                    <label for="1D">Occupied</label>
                                  </li>
                                  <li class="seat">
                                    <input type="checkbox" id="1E" />
                                    <label for="1E">1E</label>
                                  </li>
                                  <li class="seat">
                                    <input type="checkbox" id="1F" />
                                    <label for="1F">1F</label>
                                  </li>
                                </ol>
                              </li>
                              <li class="row row--2">
                                <ol class="seats" type="A">
                                  <li class="seat">
                                    <input type="checkbox" id="2A" />
                                    <label for="2A">2A</label>
                                  </li>
                                  <li class="seat">
                                    <input type="checkbox" id="2B" />
                                    <label for="2B">2B</label>
                                  </li>
                                  <li class="seat">
                                    <input type="checkbox" id="2C" />
                                    <label for="2C">2C</label>
                                  </li>
                                  <li class="seat">
                                    <input type="checkbox" id="2D" />
                                    <label for="2D">2D</label>
                                  </li>
                                  <li class="seat">
                                    <input type="checkbox" id="2E" />
                                    <label for="2E">2E</label>
                                  </li>
                                  <li class="seat">
                                    <input type="checkbox" id="2F" />
                                    <label for="2F">2F</label>
                                  </li>
                                </ol>
                              </li>
                              <li class="row row--3">
                                <ol class="seats" type="A">
                                  <li class="seat">
                                    <input type="checkbox" id="3A" />
                                    <label for="3A">3A</label>
                                  </li>
                                  <li class="seat">
                                    <input type="checkbox" id="3B" />
                                    <label for="3B">3B</label>
                                  </li>
                                  <li class="seat">
                                    <input type="checkbox" id="3C" />
                                    <label for="3C">3C</label>
                                  </li>
                                  <li class="seat">
                                    <input type="checkbox" id="3D" />
                                    <label for="3D">3D</label>
                                  </li>
                                  <li class="seat">
                                    <input type="checkbox" id="3E" />
                                    <label for="3E">3E</label>
                                  </li>
                                  <li class="seat">
                                    <input type="checkbox" id="3F" />
                                    <label for="3F">3F</label>
                                  </li>
                                </ol>
                              </li>
                              <li class="row row--4">
                                <ol class="seats" type="A">
                                  <li class="seat">
                                    <input type="checkbox" id="4A" />
                                    <label for="4A">4A</label>
                                  </li>
                                  <li class="seat">
                                    <input type="checkbox" id="4B" />
                                    <label for="4B">4B</label>
                                  </li>
                                  <li class="seat">
                                    <input type="checkbox" id="4C" />
                                    <label for="4C">4C</label>
                                  </li>
                                  <li class="seat">
                                    <input type="checkbox" id="4D" />
                                    <label for="4D">4D</label>
                                  </li>
                                  <li class="seat">
                                    <input type="checkbox" id="4E" />
                                    <label for="4E">4E</label>
                                  </li>
                                  <li class="seat">
                                    <input type="checkbox" id="4F" />
                                    <label for="4F">4F</label>
                                  </li>
                                </ol>
                              </li>
                              <li class="row row--5">
                                <ol class="seats" type="A">
                                  <li class="seat">
                                    <input type="checkbox" id="5A" />
                                    <label for="5A">5A</label>
                                  </li>
                                  <li class="seat">
                                    <input type="checkbox" id="5B" />
                                    <label for="5B">5B</label>
                                  </li>
                                  <li class="seat">
                                    <input type="checkbox" id="5C" />
                                    <label for="5C">5C</label>
                                  </li>
                                  <li class="seat">
                                    <input type="checkbox" id="5D" />
                                    <label for="5D">5D</label>
                                  </li>
                                  <li class="seat">
                                    <input type="checkbox" id="5E" />
                                    <label for="5E">5E</label>
                                  </li>
                                  <li class="seat">
                                    <input type="checkbox" id="5F" />
                                    <label for="5F">5F</label>
                                  </li>
                                </ol>
                              </li>
                              <li class="row row--6">
                                <ol class="seats" type="A">
                                  <li class="seat">
                                    <input type="checkbox" id="6A" />
                                    <label for="6A">6A</label>
                                  </li>
                                  <li class="seat">
                                    <input type="checkbox" id="6B" />
                                    <label for="6B">6B</label>
                                  </li>
                                  <li class="seat">
                                    <input type="checkbox" id="6C" />
                                    <label for="6C">6C</label>
                                  </li>
                                  <li class="seat">
                                    <input type="checkbox" id="6D" />
                                    <label for="6D">6D</label>
                                  </li>
                                  <li class="seat">
                                    <input type="checkbox" id="6E" />
                                    <label for="6E">6E</label>
                                  </li>
                                  <li class="seat">
                                    <input type="checkbox" id="6F" />
                                    <label for="6F">6F</label>
                                  </li>
                                </ol>
                              </li>
                              <li class="row row--7">
                                <ol class="seats" type="A">
                                  <li class="seat">
                                    <input type="checkbox" id="7A" />
                                    <label for="7A">7A</label>
                                  </li>
                                  <li class="seat">
                                    <input type="checkbox" id="7B" />
                                    <label for="7B">7B</label>
                                  </li>
                                  <li class="seat">
                                    <input type="checkbox" id="7C" />
                                    <label for="7C">7C</label>
                                  </li>
                                  <li class="seat">
                                    <input type="checkbox" id="7D" />
                                    <label for="7D">7D</label>
                                  </li>
                                  <li class="seat">
                                    <input type="checkbox" id="7E" />
                                    <label for="7E">7E</label>
                                  </li>
                                  <li class="seat">
                                    <input type="checkbox" id="7F" />
                                    <label for="7F">7F</label>
                                  </li>
                                </ol>
                              </li>
                              <li class="row row--8">
                                <ol class="seats" type="A">
                                  <li class="seat">
                                    <input type="checkbox" id="8A" />
                                    <label for="8A">8A</label>
                                  </li>
                                  <li class="seat">
                                    <input type="checkbox" id="8B" />
                                    <label for="8B">8B</label>
                                  </li>
                                  <li class="seat">
                                    <input type="checkbox" id="8C" />
                                    <label for="8C">8C</label>
                                  </li>
                                  <li class="seat">
                                    <input type="checkbox" id="8D" />
                                    <label for="8D">8D</label>
                                  </li>
                                  <li class="seat">
                                    <input type="checkbox" id="8E" />
                                    <label for="8E">8E</label>
                                  </li>
                                  <li class="seat">
                                    <input type="checkbox" id="8F" />
                                    <label for="8F">8F</label>
                                  </li>
                                </ol>
                              </li>
                              <li class="row row--9">
                                <ol class="seats" type="A">
                                  <li class="seat">
                                    <input type="checkbox" id="9A" />
                                    <label for="9A">9A</label>
                                  </li>
                                  <li class="seat">
                                    <input type="checkbox" id="9B" />
                                    <label for="9B">9B</label>
                                  </li>
                                  <li class="seat">
                                    <input type="checkbox" id="9C" />
                                    <label for="9C">9C</label>
                                  </li>
                                  <li class="seat">
                                    <input type="checkbox" id="9D" />
                                    <label for="9D">9D</label>
                                  </li>
                                  <li class="seat">
                                    <input type="checkbox" id="9E" />
                                    <label for="9E">9E</label>
                                  </li>
                                  <li class="seat">
                                    <input type="checkbox" id="9F" />
                                    <label for="9F">9F</label>
                                  </li>
                                </ol>
                              </li>
                              <li class="row row--10">
                                <ol class="seats" type="A">
                                  <li class="seat">
                                    <input type="checkbox" id="10A" />
                                    <label for="10A">10A</label>
                                  </li>
                                  <li class="seat">
                                    <input type="checkbox" id="10B" />
                                    <label for="10B">10B</label>
                                  </li>
                                  <li class="seat">
                                    <input type="checkbox" id="10C" />
                                    <label for="10C">10C</label>
                                  </li>
                                  <li class="seat">
                                    <input type="checkbox" id="10D" />
                                    <label for="10D">10D</label>
                                  </li>
                                  <li class="seat">
                                    <input type="checkbox" id="10E" />
                                    <label for="10E">10E</label>
                                  </li>
                                  <li class="seat">
                                    <input type="checkbox" id="10F" />
                                    <label for="10F">10F</label>
                                  </li>
                                </ol>
                              </li>
                            </ol>
                            <div class="exit exit--back fuselage">
                              
                            </div>
                          </div>
                            
                    </div>
                   
                </div>    
            </div>
        </section>
       
        <section id="section-newsletter">
            <div class="container">
                <form class="py-5 text-white">
                    <h2 class="text-center">Sign up for our Newsletter</h2>
                    <p>Receive the latest news and offers by signing up to our newsletter.</p>
                    
                   <div class="row">
                      <div class="col-12 col-sm-6">
                        <div class="form-group">
                        <label for="input-name" class="sr-only">Your Name:</label>
                        <input type="text" class="form-control" placeholder="Firstname Lastname" id="input-name">
                        </div>
                    </div>
                    <div class="col-12 col-sm-6">
                      <div class="form-group">
                        <label for="input-email" class="sr-only">Your Email:</label>
                        <input type="email" class="form-control" placeholder="mail@example.com" id="input-email">
                      </div>
                    </div>
                   </div>
                  <div class="form-check">
                        <label class="form-check-label">
                            <input type="checkbox" class="form-check-input" id="input-terms" value="terms">
                            I have read and accept the <a href="#" data-toggle="modal" data-target="#modal">terms and conditions</a>.
                        </label>
                    </div>
                    <div class="d-flex justify-content-between">
                        <small class="form-text">You can unsubscribe from the mailing list at any time.</small>
                        <button type="submit" class="btn btn-dark">Sign up</button>
                    </div>
                </form>
                <div class="modal fade" id="modal" tabindex="-1" role="dialog" aria-labelledby="modalTitle" aria-hidden="true">
                    <div class="modal-dialog modal-lg" role="document">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title" id="modalTitle">Terms and conditions</h5>
                                <button type="button" class="close" data-dismiss="modal" aria-label="close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                            <div class="modal-body">
                                <p>
                                    <p><h2>PART I: GENERAL CONDITIONS</h2>
                                    <h4>Definitions</h4>
                                    <p>1. In these conditions</p>
                                    <p><b>Authority</b> means a duly constituted legal or administrative person, acting within its legal
                                    powers and exercising jurisdiction within any nation, state, municipality, port or airport.
                                    <p><b>Carriage</b> means the whole or any part of the operations and services of whatsoever
                                    nature undertaken by the Company in relation to the Goods, including but not limited to the
                                    loading, unloading, storage, warehousing and handling of the goods.</p>
                                    <p><b>CMR Convention</b> means the Convention on the Contract for the International Carriage of
                                    Goods by Road, signed at Geneva on May 19, 1956.
                                    Company is Bertling Logistics Spain S.L.</p>
                                    <p><b>Container</b> includes, unless otherwise indicated, any vehicle, container, flat, pallet, trailer,
                                    transportable tank and similar items used for the Consolidation of goods as well as mobile
                                    plant and timber packages.</p>
                                    <p><b>Customer</b> means any person, whether themselves an agent or a principal, at whose
                                    request or on whose behalf the Company provides a service.</p>
                                    <p><b>Dangerous Goods</b> includes goods that are or may become of a dangerous, inflammable,
                                    radio-active or damaging nature, goods liable to taint or affect other goods and goods
                                    likely to harbour or encourage vermin or other pests.</p>
                                    <p><b>Goods</b> includes the cargo and any container not supplied by or on behalf of the Company,
                                    in respect of which the Company provides a service;</p>
                                    <p><b>Hague Rules</b> means the provisions of the International Convention for the Unification of
                                    certain rules Relating to Bills of Lading signed at Brussels on 25th August 1924.
                                    Hague-Visby Rules means the Protocol to Amend the International Convention for the
                                    Unification of Certain Rules of Law relating to Bills of Lading, signed at Brussels on
                                    February 23, 1968.</p>
                                    <p><b>Instructions</b> means a statement of the Customers specific requirements.
                                    Montreal Convention means the Convention for the Unification of Certain Rules for
                                    International Carriage by Air, signed at Montreal on May 28, 1999.</p>
                                    <p><b>Owner</b> includes the owner, shipper and consignee of the Goods and any other Person
                                    who has or may have a legal or equitable relationship to the Goods at a relevant point of
                                    time and anyone acting on their behalf.</p>
                                    <p><b>Person</b> includes persons or anybody or bodies corporate.
                                    Heading of clauses or groups of clauses in these conditions are for indicative purposes
                                    only.
                                    The Customer’s attention is drawn to the Clauses hereof that exclude or limit the
                                    Company’s liability and those that require the Customer to indemnify the Company in
                                    certain circumstances.</p>
                                    </p>
                            </div>
                            <div class="modal-footer"> 
                                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="container">
                    <div class="row">
                        <div class="col-12 col-sm-6 col-md-3">
                            <ul class="list-unstyled">
                                <li class="mb-3"><a href="#section-top" class="text-white mb-3">Home</a></li>
                                <li> <a href="#0" class="text-white">Bookings</a></ul>
                            </ul>
                        </div>
                        <div class="col-12 col-sm-6 col-md-3">
                            <ul class="list-unstyled">
                                <li class="mb-3"><a href="#0" class="text-white">Contact Us</a></li>
                                <li> <a href="#0" class="text-white">Ticket</a></ul>
                            </ul>
                        </div>
                        <div class="col-12 col-sm-6 col-md-3">
                            <ul class="list-unstyled">
                                <li class="mb-3"><a href="#0" class="text-white">FAQ</a></li>
                                <li> <a href="#section-AboutUs" class="text-white">About</a></ul>
                            </ul>
                        </div>
                        <div class="col-12 col-sm-6 col-md-3">
                            <ul class="list-unstyled">
                                <li class="mb-3"><a href="#0" class="text-white">Policy</a></li>
                                <li> <a href="#" data-toggle="modal" data-target="#modal" class="text-white">Terms and Conditions</a></ul>
                            </ul>
                        </div>
                    </div>
                    <div class="text-center">
                            <small class="text-white ">&copy; Trav Incorporation 2021. All right reserved </small></div>
                </div>
        </section>










        <!-- jQuery first, then Popper.js, then Bootstrap JS -->
        <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/smooth-scroll/12.1.5/js/smooth-scroll.min.js" integrity="sha256-MMt0/21G3z0Zg4ET1kI3HC9npItDowkitRDVr0FhCxA=" crossorigin="anonymous"></script>
    </body>
</html>