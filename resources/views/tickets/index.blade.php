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
                <li><a href="{{ route('register') }}"> ABOUT</a></li>
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

            <img src="img/progres.jpg" alt="ticket-image" id="ticket">
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
                        <input type="text" class="form-control @error('projectName') border border-danger @enderror"  id="" name="projectName" placeholder="Enter project name" >


                        @error('projectName')
                            <div class="text-danger mt-1 ">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>

                    <div class="form-group">
                        <label for="">Name of Client</label>
                        <input type="text" class="form-control  @error('clientName') border border-danger @enderror" id="" name="clientName" placeholder="Enter your name" >

                        @error('clientName')
                            <div class="text-danger mt-1 ">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>

                    <div class="form-group">
                        <label for="exampleFormControlInput1">Email address</label>
                        <input type="email" class="form-control  @error('email') border border-danger @enderror" id="exampleFormControlInput1" name="email" placeholder="name@example.com"  >

                        @error('email')
                            <div class="text-danger mt-1 ">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>

                    <div class="form-group">
                        <label for="">Contact number</label>
                        <input type="number" class="form-control  @error('contact') border border-danger @enderror" id="" name="contact" pattern="/^-?\d+\.?\d*$/" onKeyPress="if(this.value.length==11) return false;" placeholder="Enter your cellphone number"  >

                        @error('contact')
                            <div class="text-danger mt-1 ">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>

                    <div class="form-group">
                        <label for="">Account Manager Name</label>
                        <input type="text" class="form-control  @error('managerName') border border-danger @enderror" id="" name="managerName" placeholder="Enter account manager's name"  >

                        @error('managerName')
                            <div class="text-danger mt-1 ">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>

                    <div class="form-group">
                        <label for="">Site link/url</label>
                        <input type="text" class="form-control  @error('siteUrl') border border-danger @enderror"id="" name="siteUrl" placeholder="Enter link address" >

                        @error('siteUrl')
                            <div class="text-danger mt-1 ">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>
                </div>

                <div class="col-md-6">

                    <div class="form-group">
                        <label for="">Escalation Subject</label>
                        <input type="text" class="form-control  @error('subject') border border-danger @enderror"id="" name="subject" placeholder="Enter answer" >

                        @error('subject')
                            <div class="text-danger mt-1 ">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>

                    <div class="form-group">
                        <label for="">Due Date of request to be finished</label>
                        <input type="date" class="form-control  @error('date') border border-danger  @enderror"id="" name="date" >

                        @error('date')
                            <div class="text-danger mt-1 ">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>

                    <div class="form-group col-sm-6">
                        <label for="">File upload</label>
                        <input type="file" class="form-control-file  @error('file') border border-danger @enderror"id="" name="file"  >

                        @error('file')
                            <div class="text-danger mt-1 ">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>

                    <div class="form-group">
                        <label for="">Details</label>
                        <textarea class="form-control  @error('description') border border-danger @enderror"id="" name="description" rows="6" placeholder="Enter details.." ></textarea>

                        @error('description')
                            <div class="text-danger mt-1 ">
                                {{ $message }}
                            </div>
                        @enderror
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
