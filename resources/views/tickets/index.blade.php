@extends('layouts.app')

@section('content')

        <div class="container-fluid ticket col-lg-12 d-flex justify-content-between header">

            <div class="icons">
                <span><a href="https://www.facebook.com/Highly.Succeed.Inc/" target="__blank"><i class="fa fa-facebook-f"></i></a></span>
                <span><a href="https://twitter.com/HighlySucceed" target="__blank"><i class="fa fa-twitter"></i></a></span>
                <span><a href="https://www.youtube.com/channel/UCZQomd0zZmdUZ2l5yuBzYww"><i class="fa fa-youtube"></i></a></span>
            </div>

            <div class="contactDetails">
                <p><a href="#">&#128379; 02 586 87 29</a>
                <a href="mailto:support@highlysucceed.com"><i class="fa fa-envelope"></i> support@highlysucceed.com</a></p>
            </div>
        </div>

        {{-- NAVIGATION --}}
        <div class="nav-header">

            <img src="img/hsiTitle.png" alt="hsi-title" id="hsiTitle">

            <ul class="nav">
                <li><a href="/"> HOME</a></li>
                <li><a href="#"> ABOUT</a></li>
                <li><a href="#"> SERVICES</a></li>
                <li><a href="#"> PROJECT</a>S</li>
                <li><a href="#"> BLOG</a></li>
                <li><a href="#"> CONTACT</a></li>
                <li><a href="#"> TICKETS</a></li>
                <li><a href="#"> ENGAGE</a></li>
            </ul>
        </div>

        {{-- BANNER --}}
        <div class="banner">

            <img src="img/ticket.jpg" alt="ticket-image" id="ticket">
            <h1 class="ticket-text">Tickets</h1>

        </div>


        {{-- Ticket Form --}}
        <div class="container ticket-form">

            <h1 class="ticket-titlehead">Fill out</h1>

            <form action="{{ route('tickets.store') }}" method="POST" class="col-lg-12 d-flex justify-content-between">
                @csrf
                <div class="col-md-6">

                    <div class="form-group">
                        <label for="">Project Name</label>
                        <input type="text" class="form-control" id="" name="projectName" placeholder="Enter project name" required>
                    </div>

                    <div class="form-group">
                        <label for="">Name of Client</label>
                        <input type="text" class="form-control" id="" name="clientName" placeholder="Enter your name" required>
                    </div>

                    <div class="form-group">
                        <label for="exampleFormControlInput1">Email address</label>
                        <input type="email" class="form-control" id="exampleFormControlInput1" name="email" placeholder="name@example.com"  required>
                    </div>

                    <div class="form-group">
                        <label for="">Contact number</label>
                        <input type="number" class="form-control" id="" name="contact" placeholder="Enter your cellphone number"  required>
                    </div>

                    <div class="form-group">
                        <label for="">Account Manager Name</label>
                        <input type="text" class="form-control" id="" name="managerName" placeholder="Enter account manager's name"  required>
                    </div>

                    <div class="form-group">
                        <label for="">Site link/url</label>
                        <input type="text" class="form-control" id="" name="siteUrl" placeholder="Enter link address" required>
                    </div>

                </div>

                <div class="col-md-6">

                    <div class="form-group">
                        <label for="">Escalation Subject</label>
                        <input type="text" class="form-control" id="" name="subject" placeholder="Enter answer" required>
                    </div>

                    <div class="form-group">
                        <label for="">Due Date of request to be finished</label>
                        <input type="date" class="form-control" id="" name="date" required>
                    </div>

                    <div class="form-group">
                        <label for="">File upload</label>
                        <input type="file" class="form-control-file" id="" name="file"  required>
                    </div>

                    <div class="form-group">
                        <label for="">Details</label>
                        <textarea class="form-control" id="" name="description" rows="6" placeholder="Enter details.." required></textarea>
                    </div>

                    <div class="form-group ">
                        <button type="submit" class="col-lg-12 btn btn-lg" id="btn-sub">Submit</button>
                    </div>


                </div>
            </form>

        </div>

        {{-- FOOTER --}}
        <div class="container-fluid col-lg-12 d-flex justify-content-around bg-dark p-5 footer text-white">

            <div class="box">
                <h4 class="pb-3">Highly Succeed Inc.</h4>
                <h5 class="">586-87-29</h5>
                <h5 class="pb-3">support@highlysucceed.com</h5>
                <span><a href="https://www.facebook.com/Highly.Succeed.Inc/" target="__blank"><i class="fa fa-facebook-f pr-3"></i></a></span>
                <span><a href="https://twitter.com/HighlySucceed" target="__blank"><i class="fa fa-twitter pr-3"></i></a></span>
                <span><a href="https://www.youtube.com/channel/UCZQomd0zZmdUZ2l5yuBzYww"><i class="fa fa-youtube"></i></a></span>

            </div>
            <div class="box">
                <h5>Helpful Links</h5>
                <ul class="list-unstyled">
                    <li><a href="">Home  </a></li>
                    <li><a href="">About </a></li>
                    <li><a href="">Services </a></li>
                    <li><a href="">Projects </a></li>
                    <li><a href="">Blog </a></li>
                    <li><a href="">Contact </a></li>
                    <li><a href="">Ticket </a></li>
                </ul>
            </div>
            <div class="box">
                <h5 class="pb-3">Subscribe to our newsletter</h5>
                <input type="text" name="" id="" placeholder="Your name"><br><br>
                <input type="text" name="" id="" placeholder="Your Email"><br><br>
                <button type="submit" class="btn text-white" style="background-color: var(--primary);">Submit</button>
            </div>
        </div>

        {{-- BOTTOM FOOTER --}}
        <div class="container-fluid col-lg-12 d-flex justify-content-around p-3 text-center text-secondary b-footer" style="background-color: #000;">
           <h6>All rights reserved &#169; 2021 <b>Highly Succeed</b></h6>

            <div class="row">
                <h6 class="pr-2">Terms & Conditions</h6>
                <h6 class="pr-2">Privacy Policy</h6>
                <h6 class="pr-2">Help</h6>
            </div>

        </div>

@endsection
