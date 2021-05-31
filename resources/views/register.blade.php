@extends('index')
@section('index')
    

    <div class="container">
      <div class="row">
          <div class="col col-12 col-sm-6 col-6">
              <img height="500px" src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcR1CAlyQ3qc-ef3qkikjrSj0Maq4lJgKpAjBsWj2vllnLqnxQcoUZNcZBH051N35qXbuxs&usqp=CAU" alt="">
          </div>
          <div class="col col-12 col-sm-6 col-lg-6">
              <h2><i>RECIPIES</i></h2>
              <table class="table">
                  <tr>
                      <td>Name</td>
                      <td><input type="text" class="form-control"></td>
                  </tr>
                  <tr>
                      <td>Username</td>
                      <td><input type="email"  class="form-control" name="email" id="email"></td>
                  </tr>
                  <tr>
                      <td>Password</td>
                      <td><input type="password" class="form-control" name="password" id="password"></td>
                  </tr>
                  <tr>
                      <td>Confirm Password</td>
                      <td><input type="password" class="form-control" name="password" id="password"></td>
                  </tr>
                  <tr>
                      
                      <td><button class="btn btn-primary">Submit</button></td>
                      <td><label for="">Already have an account ! <a href="/login">Signin here</a></label></td>
                  </tr>
              </table>
          </div>
      </div>
  </div>
  @endsection
 