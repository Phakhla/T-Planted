@extends('layouts.main_template')
@section('content')

<div class="jumbotron">
    <div class="container pt-5">
        <h4 class="display-3 head-title text-center">ติดต่อเรา</h4>
    </div>
</div>
<div class="container">
    <section class="mb-4">
        <div class="row">
            <!--Grid column-->
            <div class="col-md-9 mb-md-0 mb-5">
                <form id="contact-form" name="contact-form" action="mail.php" method="POST">
                    <!--Grid row-->
                    <div class="row">
                        <!--Grid column-->
                        <div class="col-md-6">
                            <div class="md-form mb-0">
                                <label for="name" class="">Your Name</label>
                             <input type="text" id="name" name="name" class="form-control" placeholder="Enter name">
                            </div>
                        </div>
                        <!--Grid column-->
                        <!--Grid column-->
                        <div class="col-md-6">
                            <div class="md-form mb-0">
                                <label for="email" class="">Your Email</label>
                                <input type="text" id="email" name="email" class="form-control" placeholder="Enter email">
                                
                            </div>
                        </div>
                        <!--Grid column-->
    
                    </div>
                    <!--Grid row-->
    
                    <!--Grid row-->
                    <div class="row">
                        <div class="col-md-6">
                            <div class="md-form mb-0">
                                <label for="Phone" class="">Phone Number</label>
                                <input type="number" id="subject" name="subject" class="form-control" placeholder="Enter Phone">
                                
                            </div>
                        </div>
                    </div>
                    <!--Grid row-->
    
                    <!--Grid row-->
                    <div class="row">
                        <!--Grid column-->
                        <div class="col-md-12">
                            <div class="md-form">
                                <label for="message">Your message</label>
                                <textarea type="text" id="message" name="message" rows="2" class="form-control md-textarea"></textarea>
                                
                            </div>
    
                        </div>
                    </div>
                    <!--Grid row-->
    
                </form>
                <br><br>
                <div class="text-center text-md-left">
                    <a class="btn btn-primary" onclick="document.getElementById('contact-form').submit();">Send</a>
                </div>
                <div class="status"></div>
            </div>
            <!--Grid column-->
    
            <!--Grid column-->
            <div class="col-md-3 text-center">
                <ul class="list-unstyled mb-0">
                    <li><i class="fas fa-map-marker-alt fa-2x"></i>
                        <p>Maejo University </p>
                    </li>
    
                    <li><i class="fas fa-phone mt-4 fa-2x"></i>
                        <p>+66 96 081 9860</p>
                    </li>
    
                    <li><i class="fas fa-envelope mt-4 fa-2x"></i>
                        <p>worrapon1122@gmail.com</p>
                    </li>
                </ul>
            </div>
            <!--Grid column-->
    
        </div>
    
    </section>
</div>


@endsection