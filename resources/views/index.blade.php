@extends('layouts.index')

@section('content')

<div class="container">  <!--Body Container -->

    <div class="body-container"><!-- Body Content Container-->
      
            <img src="https://99designs-start-attachments.imgix.net/alchemy-pictures/2020%2F04%2F02%2F00%2F31%2F13%2Fdcd82545-6a6a-4e0a-9522-08a82492fc29%2Fcustom-business-illustration.png?auto=format&ch=Width%2CDPR&fm=png&w=600&h=600" alt=""> <!--content image-->       
        
        <div class="header"> <!--Body Header-->
            Are you looking to Buy, Sell or consult with an Expert?
            <div class="subheader">  <!--sub header-->
                We are here to help you <br>
            </div>
            <a href="#" class="learnmore-button"> <!-- learn more link work as button-->
               Create an Account
            </a>
            
        </div> <!--Body Header-->         
        
    </div><!-- Body Content Container-->
    
    <div class="mt-3"> <!--Margin -->
        <h2 class="text-center mb-3">Choose your desire</h2>
        <div class="list-containers2"> <!-- List Container 2-->
            <div class="row"> <!-- Bootstrap Row-->
                <div class="col-xl-4"> <!-- Bootstrap Column-->
                    <div class="custom-border">
                        <img src="https://img.freepik.com/free-vector/business-man-described-showing-graph-stock-financial-trade-market-diagram-vector-illustration-flat-design_1150-39768.jpg?w=2000" alt="">
                    <div class="heading"> <!-- List COntainer 2 Heading-->
                      Buyer
                    </div> <!-- List COntainer 2 Heading-->
                    <div class="subheading mb-2"> <!-- List COntainer 2 Sub-Heading-->
                      Lorem, ipsum dolor sit amet consectetur adipisicing elit.
                    </div><!-- List COntainer 2 Sub-Heading-->
                    </div>
                    
                </div><!-- Bootstrap Column-->
                
                <div class="col-xl-4 "> <!-- Bootstrap Column-->
                    <div class="custom-border">
                        <img src="https://media.istockphoto.com/vectors/office-situation-partnership-flat-illustration-vector-id1155155080?k=20&m=1155155080&s=612x612&w=0&h=7o9VWEnDbDMd788euG5BaBQ7MSK0s_rdnguSwfnByEA=" alt="">
                        <div class="heading">
                        Seller 
                        </div>
                        <div class="subheading mb-2">
                            Lorem, ipsum dolor sit amet consectetur adipisicing elit.
                        </div>
                    </div>
                    
                </div> <!-- Bootstrap Column-->
                <div class="col-xl-4  "> <!-- Bootstrap Column-->
                    <div class="custom-border">
                        <img src="images/semp.jpg" alt="">
                    <div class="heading">
                      Experts
                    </div>
                    <div class="subheading mb-2">
                        Lorem, ipsum dolor sit amet consectetur adipisicing elit.
                    </div>
                    </div>
                    
                </div> <!-- Bootstrap Column-->
            </div> <!-- Bootstrap Row-->
        </div>  <!-- List Container 2-->          
        
    </div> <!--Margin -->

    <div class="contact-us"> <!--Contact Us-->

      <div class="row"> 
        <div class="col-xl-6">
          <div class="cont"> <!-- class cont mean to create a custom div for contact us-->
            <img src="images/cu.jpg" alt="">
          </div>  
        </div>              

        <div class="col-xl-6"> <!--Bootsrtap Column-->
          <div class="text-center">                
            <p>Contact Us</p>
              <div class="contactus-container"> <!-- contact us container -->
                <div class="row"> <!-- Bootstrap Row-->
                 
                  <div class="col-xl-12"> <!-- Bootstrap Column-->
                    <p class="mt-3">If you want to get more information, Please sent an 
                      E-mail to us.</p>
                  </div> <!-- Bootstrap Column-->
                             
                  <div class="col-xl-12"> <!-- Bootstrap Column-->
                      <form action="" class="input-div"> <!-- input-div meant to create custom container for form-->
                        <input type="email" placeholder="Enter Your Email" class="inputText">
                        <input type="submit" value="Sent" name="" class="submit">
                      </form>
                  </div> <!-- Bootstrap Column-->

                </div> <!-- Bootstrap Row-->
              </div> <!-- contact us container -->
          </div>
        </div> <!-- contact us container -->
      </div>

    </div>
  </div>        


@endsection

