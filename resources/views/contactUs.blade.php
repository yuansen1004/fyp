@extends('layout')
@section('content')

&nbsp;

<div class="container-fluid" id="bg1">
  <div style="text-align:center">
  &nbsp;
    <h2>Contact Us</h2>
    <p>Have some questions? Please Contact Us!!!</p>
  </div>

  <div class="row">

    <div class="col-md-6">
      <img src="{{asset('image/ContactUs1.jpg')}}" style="width:550px">
    </div>
    
    <div class="col-md-6">
        <label for="name">Name</label>
        <input type="text" id="name" name="name" placeholder="Your name..">
        <label for="email">Email</label>
        <input type="text" id="email" name="email" placeholder="Your email..">
        <label for="subject">Subject</label>
        <textarea id="subject" name="subject" placeholder="Write something.." style="height:170px"></textarea>
        <input type="submit" value="Submit">
    </div>
    &nbsp;
  </div>
</div>

<hr class="featurette-devider">

<div class="container-fluid" id="bg1">
&nbsp;
  <div style="text-align:center">
    <h2>Here We Are</h2>
  </div>

  <div class="row">
    <div class="col-sm-12" style="text-align:center">
      <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3988.3890261111837!2d103.67954781394823!3d1.533680361386419!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x31da73c109632e0b%3A0x74cda51bf210c304!2sSouthern%20University%20College!5e0!3m2!1sen!2smy!4v1649392474240!5m2!1sen!2smy" width="1150" height="490" style="border:10px;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
    </div>
  </div>
  &nbsp;
</div>

&nbsp;

<style>
  h2{
    font-family: Arial;
    font-weight: bold;
    font-style: italic;
    text-align: center;
    color: seagreen;
  }


  #bg1{
    background-image: linear-gradient(115deg, #9CF479, #c0ecff);
 }

    * {
  box-sizing: border-box;
}

label[for]{
    font-family: Arial;
    font-weight: bold;
    font-style: italic;
}

/* Style inputs */
input[type=text], textarea {
  width: 100%;
  padding: 12px;
  border: 1px solid #ccc;
  margin-top: 6px;
  margin-bottom: 16px;
  resize: vertical;
  padding-top: 10px;
  padding-bottom: 10px;
  padding-left: 15px;
  padding-right: 15px;
  border-radius: 20px;
}

input[type=submit] {
    background-color: rgb(2, 158, 255);
    color:white;
    border: none;
    padding-top: 10px;
    padding-bottom: 10px;
    padding-left: 15px;
    padding-right: 15px;
    border-radius: 18px;
    font-weight: bold;
    font-size: 15px;
    cursor: pointer;
    margin-left: 8px;
    transition: box-shadow 0.15s;
    vertical-align: top;
}

input[type=submit]:hover {
    box-shadow: 5px 5px 10px rgba(0, 0, 0, 0.15);
    padding-top: 12px;
    padding-bottom: 12px;
    padding-left: 17px;
    padding-right: 17px;
}

/* Style the container/contact section */
.container {
    border-radius: 5px;
    padding: 10px;
    background-color: #f2f2f2;
}

/* Create two columns that float next to eachother */
.column {
  float: left;
  width: 50%;
  margin-top: 6px;
  padding: 20px;
}

/* Clear floats after the columns */
.row:after {
  content: "";
  display: table;
  clear: both;
}

/* Responsive layout - when the screen is less than 600px wide, make the two columns stack on top of each other instead of next to each other */
@media screen and (max-width: 600px) {
  .column, input[type=submit] {
    width: 100%;
    margin-top: 0;
  }
}
</style>

@endsection