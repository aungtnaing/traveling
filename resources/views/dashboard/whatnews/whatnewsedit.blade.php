@extends('dashboard.default')
@section('content')


<div id="content">
  <div id="content-header">
    <div id="breadcrumb"> <a href="{{ url('/dashboard') }}" title="Go to Home" class="tip-bottom"><i class="icon-home"></i> Home</a> <a href="#" class="current">edit freelisting</a> </div>

  </div>
  <div class="container-fluid">

    @if (count($errors) > 0)
    <div class="alert alert-danger">
      <ul>
        @foreach ($errors->all() as $error)
        <li>{{ $error }}</li>
        @endforeach
      </ul>
    </div>
    @endif  
    <hr>

    <div class="row-fluid">

      <div class="span10">
        <div class="widget-box">
          <div class="widget-title"> <span class="icon"> <i class="icon-align-justify"></i> </span>
            <h5>freelisting-info</h5>
          </div>
          <div class="widget-content">
           <form action="{{ route("whatnew.update", $whatnew->id) }}" method="POST" enctype="multipart/form-data">
            <input name="_method" type="hidden" value="PATCH">
            <input type="hidden" name="_token" value="{{ csrf_token() }}">

            <ul class="thumbnails">
              <li class="span3"> 
                <input style="display:none;" id="file-input1" name="photourl1" type='file' onchange="readURL(this);"/>                    
                <label for="file-input1">
                  <i class="icon-camera"></i>.Main 400 X 300<br>
                  @if($whatnew->photourl1!="")
                  <img id="blah" src= "{{ $whatnew->photourl1 }}" width="100" height="100">
                  @else
                  <img id="blah" src="//placehold.it/100" alt="avatar" alt="your image" />
                  @endif
                </label>
                <div class="actions"><a id="preview1" class="lightbox_trigger" herf=""><i class="icon-search"></i></a> </div>

              </li>
              


            </ul>



            <div class="form-process"></div>

            <div class="col_one_third">
              <label for="template-contactform-name">Business Name </label>
              <input type="text" id="template-contactform-name" name="businessname" value="{{ $whatnew->businessname }}" class="sm-form-control required" />
            </div>

            <div class="col_one_third">
              <label for="template-contactform-email">Business Email </label>
              <input type="email" id="template-contactform-email" name="businessemail" value="{{ $whatnew->businessemail }}" class="required email sm-form-control" />
            </div>

            <div class="col_one_third col_last">
              <label for="template-contactform-phone">Business Phone</label>
              <input type="text" id="template-contactform-phone" name="businessphone" value="{{ $whatnew->businessphone }}" class="sm-form-control" />
            </div>

            <div class="clear"></div>

            <div class="col_two_third">
              <label for="template-contactform-subject">Business Address</label>
              <input type="text" id="template-contactform-subject" name="address" value="{{ $whatnew->address }}" class="required sm-form-control" />
            </div>
            <div class="col_one_third col_last">
              <label for="template-contactform-phone">Postal Code</label>
              <input type="text" id="template-contactform-phone" name="postalcode" value="{{ $whatnew->postalcode }}" class="sm-form-control" />
            </div>

            <div class="clear"></div>

            <div class="col_one_third">
              <label for="template-contactform-city">Region</label>
              <select id="template-contactform-service" name="region" class="sm-form-control">
                <option value="{{ $whatnew->region }}">{{ $whatnew->region }}</option>
                <option value="Ayeyarwady">Ayeyarwady Region</option>
                <option value="Bago">Bago Region</option>
                <option value="Chin">Chin State</option>
                <option value="Kachin">Kachin State</option>
                <option value="Kayah">Kayah State</option>
                <option value="Kayin">Kayin State</option>
                <option value="Magway">Magway Region</option>
                <option value="Mandalay">Mandalay Region</option>
                <option value="Mon">Mon State</option>
                <option value="Rakhine">Rakhine State</option>
                <option value="Shan">Shan State</option>
                <option value="Sagaing">Sagaing Region</option>
                <option value="Sagaing">Tanintharyi Region</option>
                <option value="Yagon">Yagon Region</option>
                <option value="Naypyidaw">Naypyidaw Union Territory</option>



              </select></div>



              <div class="col_one_third" >
                <label for="template-contactform-township">City</label>
                <select id="template-contactform-service" name="city" class="sm-form-control">

                 <option value="{{ $whatnew->city }}">{{ $whatnew->city }}</option>
                 <optgroup label="Ayarwady Region">
                  <option value="Hinthada">Hinthada District</option>
                  <option value="Labutta">Labutta District</option>Ma-ubin District
                  <option value="Ma-ubin">Ma-ubin District</option>
                  <option value="Myaungmya">Myaungmya District</option>
                  <option value="Pathein">Pathein District</option>
                  <option value="Pyapon">Pyapon District</option>
                  <option value="Kyonpyaw">Kyonpyaw District</option>
                  <option value="Myaungmya">Myanaung District</option>
                  <option value="Main cities and towns">Main cities and towns</option>


                  <optgroup label="Bago Region">
                    <option value="Bago">Bago District</option>
                    <option value="Taungoo ">Taungoo District</option>


                    <optgroup label="Chin State">
                      <option value="Falam">Falam District</option>
                      <option value="Hakha">Hakha District</option>
                      <option value="Mindat">Mindat District</option>
                      <option value="Cities and towns">Main cities and towns</option>

                      <optgroup label="Kachin State">
                        <option value="Mohnyin">Mohnyin District</option>
                        <option value="Myitkyina">Myitkyina District</option>
                        <option value="Putao">Putao District</option>
                        <option value="Bhamo">Bhamo District</option>
                        <option value="Cities and towns">Main cities and towns</option>

                        <optgroup label="Kayah State">
                          <option value="Loikaw">Loikaw District</option>
                          <option value="Bawlakhe">Bawlakhe District</option>
                          <option value="Cities and towns">Main cities and towns</option>



                          <optgroup label="Kayin State">
                            <option value="Hpapun">Hpapun District</option>
                            <option value="Kawkareik">Kawkareik District</option>
                            <option value="Myawaddy">Myawaddy District</option>
                            <option value="Hpa-an">Hpa-an District</option>
                            <option value="Gangaw ">Gangaw Districtt</option>
                            <option value="Cities and towns">Main cities and towns</option>


                            <optgroup label="Magway Region">
                              <option value="Magway">Magway District</option>
                              <option value="Minbu">Minbu District</option>
                              <option value="Pakokku">Pakokku District</option>
                              <option value="Thayet ">Thayet District</option>
                              <option value="cities and towns ">Main cities and towns</option>


                              <optgroup label="Mandalay Region">
                                <option value="Kyaukse">Kyaukse District</option>
                                <option value="Mandalay">Mandalay District</option>
                                <option value="Myingyan">Myingyan District</option>
                                <option value="Nyaung-U">Nyaung-U District</option>
                                <option value="Pyinoolwin">Pyinoolwin District</option>
                                <option value="Yamethin">Yamethin District</option>
                                <option value="cities and towns ">Main cities and towns</option>


                                <optgroup label="Mon Region">
                                  <option value="Mawlamyine">Mawlamyine District</option>
                                  <option value="Thaton">Thaton District</option>
                                  <option value="cities and towns ">Main cities and towns</option>



                                  <optgroup label="Rakhine State">
                                    <option value="Kyaukpyue">Kyaukpyu District</option>
                                    <option value="Maungdaw">Maungdaw District</option>
                                    <option value="Sittwe">Sittwe District</option>
                                    <option value="Thandwe">Thandwe District</option>
                                    <option value="Mrauk-U ">Mrauk-U District</option>
                                    <option value="cities and towns">Main cities and towns</option>


                                    <optgroup label="Shan State">
                                      <option value="Kengtung ">Kengtung District</option>
                                      <option value="Mong Hpayaki">Mong Hpayak District</option>
                                      <option value="Mong Hsat">Mong Hsat District</option>
                                      <option value="Tachileik">Tachileik District</option>
                                      <option value="Kunlong">Kunlong District</option>
                                      <option value="Kyaukme">Kyaukme District</option>
                                      <option value="Lashio">Lashio District</option>
                                      <option value="Muse">Mu Se District</option>
                                      <option value="Mongmit">Mongmit Districtt</option>
                                      <option value="Kokang">Kokang Self-Administered Zone</option>Pa Laung Self-Administered Zone1
                                      <option value="Pa Laung">Pa Laung Self-Administered Zone1</option>
                                      <option value="Wa Self-Administered Division">Wa Self-Administered Division</option>
                                      <option value="Langkho">Langkho District</option>
                                      <option value="Loilen">Loilen District</option>
                                      <option value="Taunggyi">Taunggyi District</option>
                                      <option value="Danu">Danu Self-Administered Zone</option>
                                      <option value="Pa-O ">Pa-O Self-Administered Zone</option>
                                      <option value="cities and towns">Main cities and towns</option>

                                      <optgroup label="Sagaing Region">
                                       <option value="Hkamti">Hkamti District</option>
                                       <option value="Kanbalu">Kanbalu District</option>
                                       <option value="Kale">Kale District</option>
                                       <option value="Katha">Katha District</option>
                                       <option value="Mawlaik ">Mawlaik District</option>
                                       <option value="Monywa">Monywa District</option>
                                       <option value="Sagaing">Sagaing District</option>
                                       <option value="Shwebo ">Shwebo District</option>
                                       <option value="Tamu">Tamu District</option>
                                       <option value="Yinmabin">Yinmabin District</option>
                                       <option value="Naga">Naga Self-Administered Zone1</option>


                                       <optgroup label="Tanintharyi Region">
                                         <option value="Dawei">Dawei District</option>
                                         <option value="Kawthaung">Kawthaung District</option>
                                         <option value="Myeik">Myeik District</option>
                                         <option value=" cities and towns">Main cities and towns</option>


                                         <optgroup label="Tanintharyi Region">
                                           <option value="Dawei">Dawei District</option>
                                           <option value="Kawthaung">Kawthaung District</option>
                                           <option value="Myeik">Myeik District</option>
                                           <option value=" cities and towns">Main cities and towns</option>


                                           <optgroup label="Yangon Region">
                                             <option value="East Yangon">East Yangon Region</option>
                                             <option value="North Yangon">North Yangon Region</option>
                                             <option value="South Yangon">South Yangon Region</option>
                                             <option value=" West Yangon">West Yangon Region</option>
                                             <option value=" cities and towns">Main cities and towns</option>


                                             <optgroup label="Naypyitaw Region">
                                               <option value="North Naypyitaw">Ottara District-North Nyapyitaw</option>
                                               <option value="South Naypyitaw">Ottara District South Naypyitaw</option>
                                               <option value=" cities and towns">Main cities and towns</option>




                                             </select></div>


                                             <div class="col_one_third" >
                                              <label for="template-contactform-township">Township</label>
                                              <select id="template-contactform-service" name="township" class="sm-form-control">
                                              <option value="{{ $whatnew->township }}">{{ $whatnew->township }}</option>


                                                <optgroup label="Hinthada District">
                                                  <option value="Hinthada">Hinthada Township</option>
                                                  <option value="Lemyethna ">Lemyethna Township</option>
                                                  <option value="Ma-ubin">Ma-ubin District</option>
                                                  <option value="Myaungmya">Myaungmya District</option>

                                                  <optgroup label="Labutta v">
                                                    <option value="Labutta">Labutta Township</option>
                                                    <option value="Mawlamyinegyun">Mawlamyinegyun Township</option>
                                                    <option value="Kyonmanage">Kyonmanage Township</option>
                                                    <option value="Pyinsalu">Pyinsalu Township</option>

                                                    <optgroup label="Ma-ubin District">
                                                      <option value="Danubyu">Danubyu Township</option>
                                                      <option value="Ma-ubin">Ma-ubin Township</option>
                                                      <option value="Nyaungdon">Nyaungdon Township</option>
                                                      <option value="Pantanaw">Pantanaw Township</option>Myaungmya District

                                                      <optgroup label="Pathein District">
                                                        <option value="Kangyidaunk">Kangyidaunk Township</option>
                                                        <option value="Ngapudaw">Ngapudaw Township</option>
                                                        <option value="Nyaungdon">Nyaungdon Township</option>
                                                        <option value="Thabaung">Thabaung Township</option>
                                                        <option value="Thabaung">Chaungtha Township</option>
                                                        <option value="Hainggyi">Hainggyi Township</option>
                                                        <option value="Ngayokekaung">Ngayokekaung Township</option>

                                                        <optgroup label="Pyapon District">
                                                          <option value="Bogale">Bogale Township</option>
                                                          <option value="Dedaye>Dedaye Township</option>
                                                          <option value="Kyaiklat">Kyaiklat Township</option>
                                                          <option value="Pyapon">Pyapon Township</option>
                                                          <option value="Ahmar">Ahmar Township</option>

                                                        </select></div>





                                                        <div class="col_one_third col_half">
                                                          <label for="template-contactform-email">Website</label>
                                                          <input type="text" id="template-contactform-email" name="websiteurl" value="{{ $whatnew->websiteurl }}" class="sm-form-control" />
                                                        </div>





                                                        <div class="col_one_third col_half">
                                                          <label for="template-contactform-phone">Category</label>
                                                          <select id="template-contactform-service" name="category" class="sm-form-control">
                                                            <option value="{{ $whatnew->category }}">{{ $whatnew->category }}</option>
                                                            <option value="Airline">Airline</option>
                                                            <option value="Bakery">Bakery</option>
                                                            <option value="Bar">Bar</option>
                                                            <option value="Book Stores">Book Stores</option>
                                                            <option value="Cafe">Cafe`</option>
                                                            <option value="Car Rental">Car Rental</option>
                                                            <option value="Cafe">Cafe</option>
                                                            <option value="Catering service">Catering service</option>
                                                            <option value="Clinic & Hospital">Clinic & Hospital</option>
                                                            <option value="Gems & Jewelry">Gems & Jewelry</option>
                                                            <option value="Guest house">Guest house</option>
                                                            <option value="Handy Craft">Handy Craft</option>
                                                            <option value="Hospitality traning">Hospitality traning</option>
                                                            <option value="Hostel">Hostel</option>
                                                            <option value="Hotel">Hotel</option>
                                                            <option value="Hotel supplier">Hotel supplier</option>
                                                            <option value="Motel">Online Travel Agent</option>
                                                            <option value="Resort">Resort</option>
                                                            <option value="Restaurant">Restaurant</option>
                                                            <option value="River Cruise">River Cruise</option>
                                                            <option value="Spa & Massage">Spa & Massage</option>
                                                            <option value="Ticketing">Tour guide</option>
                                                            <option value="Ticketing">Ticketing</option>
                                                            <option value="Ticketing">Travel agent</option>
                                                            <option value="Ticketing">Wine & Spirits</option>

                                                          </select>
                                                        </div>





                                                        <div class="clear"></div>
                                                        <div class="fancy-title title-dotted-border">
                                                          <h3>Contact Info</h3>
                                                        </div>

                                                        <div class="col_one_third">
                                                          <label for="template-contactform-name"> Name</label>
                                                          <input type="text" id="template-contactform-name" name="name" value="{{ $whatnew->name }}" class="sm-form-control required" />
                                                        </div>

                                                        <div class="col_one_third">
                                                          <label for="template-contactform-email">Email </label>
                                                          <input type="email" id="template-contactform-email" name="email" value="{{ $whatnew->email }}" class="required email sm-form-control" />
                                                        </div>

                                                        <div class="col_one_third col_last">
                                                          <label for="template-contactform-phone">Phone</label>
                                                          <input type="text" id="template-contactform-phone" name="phone" value="{{ $whatnew->phone }}" class="sm-form-control" />
                                                        </div>

                                                        <div class="clear"></div>

                                                        <div class="col_full">
                                                          <label for="template-contactform-message">Message</label>
                                                          <textarea class="required sm-form-control" id="template-contactform-message" name="message" rows="6" cols="30">{{ $whatnew->message }}</textarea>
                                                        </div>

                                                        <div class="col_full hidden">
                                                          <input type="text" id="template-contactform-botcheck" name="template-contactform-botcheck" value="" class="sm-form-control" />
                                                        </div>



                                                        <div class="control-group">

                                                          @if($whatnew->active==0)
                                                          <input type="checkbox" name="active" value="">Active<br>  
                                                          @else   
                                                          <input type="checkbox" name="active" value="" checked>Active<br>
                                                          @endif
                                                        </div>



                                                        <div class="form-actions">
                                                         <input class="btn btn-primary" type="submit" value="Save Changes"> 
                                                       </div>
                                                     </form>
                                                   </div>
                                                 </div>


                                               </div>
                                             </div>
                                           </div>
                                         </div>



                                         <script src="<?php echo url(); ?>/assets/js/jquery.min.js"></script> 
                                         <script src="<?php echo url(); ?>/assets/js/jquery.ui.custom.js"></script> 
                                         <script src="<?php echo url(); ?>/assets/js/bootstrap.min.js"></script> 
                                         <script src="<?php echo url(); ?>/assets/js/bootstrap-colorpicker.js"></script> 
                                         <script src="<?php echo url(); ?>/assets/js/bootstrap-datepicker.js"></script> 
                                         <script src="<?php echo url(); ?>/assets/js/jquery.toggle.buttons.js"></script> 
                                         <script src="<?php echo url(); ?>/assets/js/masked.js"></script> 
                                         <script src="<?php echo url(); ?>/assets/js/jquery.uniform.js"></script> 
                                         <script src="<?php echo url(); ?>/assets/js/select2.min.js"></script> 
                                         <script src="<?php echo url(); ?>/assets/js/matrix.js"></script> 
                                         <script src="<?php echo url(); ?>/assets/js/matrix.form_common.js"></script> 
                                         <script src="<?php echo url(); ?>/assets/js/wysihtml5-0.3.0.js"></script> 
                                         <script src="<?php echo url(); ?>/assets/js/jquery.peity.min.js"></script> 
                                         <script src="<?php echo url(); ?>/assets/js/bootstrap-wysihtml5.js"></script> 

                                         <script>
                                           $('.textarea_editor').wysihtml5();
                                         </script>

                                         <script type="text/javascript">




                                          function readURL(input) {


                                            if (input.files && input.files[0]) {
                                              var reader = new FileReader();

                                              reader.onload = function (e) {
                                                $('#blah')
                                                .attr('src', e.target.result)
                                                .width(100)
                                                .height(100);

                                              };

                                              reader.readAsDataURL(input.files[0]);
                                            }
                                          }





                                        </script>
                                        @stop