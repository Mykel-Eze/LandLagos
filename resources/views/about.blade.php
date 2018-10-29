@extends('layouts.main')
@section('styles')
    <style>
        body{
            position: relative;
        }
        body::before{
            height: 100%;
            width: 100%;
            position: absolute;
            content: '';
            top: 0;
            left: 0;
            background: url(' img/goals.png');
            opacity: 0.15;
            z-index: -1;

        }
       .imgs{
            font-family: var(--font);
            font-weight: 300;
        }
        .imgs img{
            width: 100%;
            height: auto;
            border-radius: 50%;
            max-height: 199px;
            max-width: 125px;
        }
        .imgs h4{
            font-size: 1.15rem;
            margin: 0;
            font-weight: 400;
        }
        .imgs .img{
            margin: 20px auto;
        }
/* */
       
    .mdt{
        margin-top: 3rem;
    }
    .visible-tabb{
        display: none;
    }
    .hidden-tabb{
        display: block;
    }
    
    .img {
        height: 160px;
	}
	.quote{
		font-style: italic;
	}

    .imgs .col.m4.l3.center-align.img {
        height: 27vh;
        /* overflow: hidden; */
    }
    @media(min-width: 601px){
        .btn-join{
            position: absolute;
		}
		.q-author{
			margin-top: -5px;
		}
    }

    @media(min-width: 601px) and (max-width: 991px){
        .visible-tabb{
            display: block;
        }
        .hidden-tabb{
            display: none;
        }
    }
        @media(max-width: 600px){
            .imgs .img{
                height: auto;
            }
            .modal-content .col.s12{
                padding: 0
			}
			.img {
				height: 120px;
			}
        }

    </style>
@endsection

@section('content')
        <div class="section jb asset-bg">
        <div class="row">
            <div class="container">
                <div>
                      <h3 class="center" style="color:#DD5206;" >About Us - Our Philosophy </h3>
                      <h5 class="pry-txt sec-font">
						<p class="center quote"> <span class="sec-txt">&quot;</span> A people with property 
							are vested in the state, a people without would cause a fire.<span class="sec-txt">&quot;</span>
						</p>
						  <p class="center q-author"> - Anonymous -</p>
                        </h5>
                      <p class="center text-justify-xs">
						  Profit has always been the motive of business, the same motive that has caused for 
						  the destruction of one natural ecosystem after the other, the same that has caused 
						  for the pricing of property in Lagos state to be so high that we are now the third 
						  most expensive property location on the continent without the accompanying development 
						  that is expected. The average salary earner spends about 37% of their earnings on rent 
						  in the state. Property, the only true way of transferring financial wealth from one 
						  generation to the other has become a pipe dream and because of that, profit alone must 
						  now become a poor motive.
                      </p>

                      <p class="center text-justify-xs">
						  Our vision at Landlagos is to see the Nigeria worker become an owner and a decision in 
						  their own time. This leads to our mission statement- To control and reverse the unfair and 
						  unrealistic inflation of property pricing that makes the average Nigerian unable to own their own. 
                      </p>

                      <p class="center text-justify-xs">
						  In other to achieve our vision and mission statement, we at landlagos peg the inflation rate of 
						  property to allow for more people to be able to afford them in due time. Currently property pricing 
						  is determined by the “feelings” of the seller. It has very little to do with actual development in 
						  the area. It is as simple as one person deciding that a new higher price with the surrounding estate 
						  adopting that to be the new reality. We are reversing that trend. By pegging the price of property 
						  and its inflation, we frustrate surrounding property owners who would want to increase their property 
						  without reason as our own development offering more would make it very hard for them to justify their 
						  “new price”. This causes for our own development over time to be very sought after.  
                      </p>

                      <p class="center text-justify-xs">
						  Every holding of Landlagos is earmarked for development two years after purchase. The development plan 
						  is to see the popularization of affordable prefabricated homes that cost less than a third of regular 
						  offerings,made with stronger material and come with more design options with a strong modern aesthetic 
						  appeal. This affordable luxury setting can either be owned by the owner of the land and developed at 
						  zero initial cost, or the property can be bought at the current inflated rate, making the land owner 
						  a decent profit and the buyer a new owner. 
                      </p>

                      <p class="center text-justify-xs">
						  At Landlagos we believe that property should be the right of every hardworking and income earning Nigerian. 
						  We cannot continue to let market forces driven by persons whose only motive is profit force the majority 
						  into poverty. We believe that a people with property that they own and can transfer to the next generation 
						  are the true beneficiary of the state and its resources. 
                      </p>

                </div>
                
                <br>
                <hr>
                <br>

                <div class="container mdt">
                  <h4 class="center">MEET THE TEAM <br>
                    <div class="" style="line-height: .5">
                      <hr class="borline">
                    </div>
                  </h4>

                </div>


                <div class="col s12" id="">

                    <div class="col s6 m4 l3 center-align img">
                        <img src="img/team/1.png" alt="" style="width: 100%">
                    </div>

                    <div class="col s6 m4 l3 center-align img">
                        <img src="img/team/2.jpg" alt="" style="width: 100%">
                    </div>

                    <div class="col s6 m4 l3 center-align img">
                        <img src="img/team/3.jpg" alt="" style="width: 100%">
                    </div>

                    <div class="col s6 m4 l3 center-align img">
                        <img src="img/team/5.jpg" alt="" style="width: 100%">
                    </div>

                    <div class="col s6 m4 l3 center-align img">
                        <img src="img/team/6.png" alt="" style="width: 100%">
                    </div>

                    <div class="col s6 m4 l3 center-align img">
                        <img src="img/team/7.jpg" alt="" style="width: 100%">
                    </div>

                    <div class="col s6 m4 l3 center-align img">
                        <img src="img/team/8.jpg" alt="" style="width: 100%">
                    </div>
                    
                    <div class="col s6 m4 l3 center-align img">
                        <img src="img/team/9.jpg" alt="" style="width: 100%">
                    </div>

                    <div class="col s6 m4 l3 center-align img">
                        <img src="img/team/10.jpg" alt="" style="width: 100%">
                    </div>

                    <div class="col s6 m4 l3 center-align img">
                        <img src="img/team/11.jpg" alt="" style="width: 100%">
                    </div>

                    <div class="col s6 m4 l3 center-align img">
                        <img src="img/team/12.jpg" alt="" style="width: 100%">
                    </div>

                    <div class="col s6 m4 l3 center-align img">
                        <img src="img/team/13.png" alt="" style="width: 100%">
                    </div>

                    <div class="col s6 m4 l3 center-align img">
                        <img src="img/team/14.jpg" alt="" style="width: 100%">
                    </div>

                    <div class="col s6 m4 l3 center-align img">
                        <img src="img/team/15.jpg" alt="" style="width: 100%">
                    </div>

                    <div class="col s6 m4 l3 center-align img">
                        <img src="img/team/16.jpg" alt="" style="width: 100%">
                    </div>

                    <div class="col s6 m4 l3 center-align img">
                        <img src="img/team/17.jpg" alt="" style="width: 100%">
                    </div>

                    <div class="col s6 m4 l3 center-align img">
                        <img src="img/team/18.jpg" alt="" style="width: 100%">
                    </div>

                    <div class="col s6 m4 l3 center-align img">
                        <img src="img/team/19.jpg" alt="" style="width: 100%">
                    </div>

                </div>

                <br>
                <br>

            </div>

        </div>
    </div>
@endsection

@section('scripts')
    {{-- <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script> --}}
        <script type="text/javascript">
          $(document).ready(function () {
              $('.materialboxed').materialbox();
              $('.parallax').parallax();
              $('.modal').modal();
              });


              /* $(document).ready(function(){
                $("#pteam").hide();
              });
              $("#pteam-btn").click(function(){
                  $("#pteam-btn").text('See More');
                $("#pteam").slideToggle(1500);
                $("#pteam-btn").toggleClass('show-less-btn');
                $(".show-less-btn").text('See Less');
              }); */
        </script>



@endsection
