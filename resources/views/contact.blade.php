@extends('index')
@section('index')
<div class="container">
    <div class="row">
        <div class="col col-sm-6 col-md-6 col-lg-6 col-xl-6 col-xxl-6">
           <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcTQo4hSjtrNDPqHrOAHpoIxTm_c1pNzebKb17i7kBOl4e0Fr_CSX4I0aLbdQXBgQ9Is4jw&usqp=CAU" alt="">
           
            <h3>
                General Info
            </h3>
            Phone No:- +91 484 3423000
            <br>
                       +91 9423501005
                       <br>
            Email:-enquiry@aamiehotel.in
                   aamiehotel@gamil.com

                  <h3>  For International Enquiries </h3>
                    Phone no:-  +91 9946001005
                    <br>
                                aamiehotel@gamil.com
                                www.aamiehotel.in
                    <h3>Address</h3>
                   Aamie Hotel, Kumarakam Road,  Kottayam 680 600, Kerala, India
                    
        </div>
        <div class="col col-sm-6 col-md-6 col-lg-6 col-xl-6 col-xxl-6">
            <h1>Contact Form</h1>
            <table class="table table-borderless">
                <tr>
                    <td><input type="text" class="form-control" placeholder="Enter your name"></td>
                </tr>
                <tr>
                    <td><input type="email" class="form-control" placeholder="Enter your Email"></td>
                </tr>
                <tr>
                    <td><input type="text" class="form-control" placeholder="Enter your Phone number"></td>
                </tr>
                <tr>
                    <td><input type="text" class="form-control" placeholder="Subject"></td>
                </tr>
                <tr>
                    <td><testarea id="Messege"  Name="Messege" row="4" col="30"></testarea></td>
                </tr>
                <tr>
                    <td><button class="btn btn-success">Submit</button></td>
                </tr>
            </table>
        </div>
    </div>
</div>


@endsection