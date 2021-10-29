<template>
        <div class="row justify-content-center">
            <nav class="navbar navbar-expand-lg navbar-light bg-light location-nav">
            <div class="container-fluid">
                <!-- navbar section -->
                <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav">
                    <li class="nav-item ">
                    <router-link :to="{name:'Home'}" class="nav-link active" aria-current="page"  ><span class='circle'>1</span><span>Location</span><span class="arrow arrow-active">></span></router-link>
                    </li>
                    <li class="nav-item">
                        
                    <router-link :to="{name:'Service'}" class="nav-link active" ><span class='circle'>2</span><span>Services</span>  <span class="arrow arrow-active">></span></router-link>
                    </li>
                    <li class="nav-item">
                    <router-link :to="{name:'Date'}" class="nav-link" ><span>Date & Time</span><span class="arrow">></span></router-link>
                    </li>
                     <li class="nav-item">
                    <router-link  :to="{name:'Info'}" class="nav-link" ><span>Information</span><span class="arrow">></span></router-link>
                    </li>
                    <li class="nav-item">
                    <router-link :to="{name:'Checkout'}" class="nav-link" ><span>Confirmation</span></router-link>
                    </li>

                </ul>
                </div>
                <!-- service section -->
            </div>
            </nav>
                <div class="row service_row">
                    
                        <div class="col-md-8">
                             <div class="row">
                                <div class="col-md-3 imgReview">
                                   <img src="assets/images/review.jpg" alt="">
                                 </div>
                                <div class="col-md-5 titleReview">
                                    <h6>Lorem Ipsum is simply dummy text of the printing and typesetting industry. </h6>  
                                    <div class="footerReview">
                                        <span class="fa fa-star checked"></span> <span style='font-weight:300'>4.9(231)</span>
                                    </div>
                                </div>
                            </div>
                            <div class="row include">
                                <h6>What's Included</h6>
                                <div class="removeToCart">
                                    <div class="row">
                                        <div class="col-md-8">
                                            <div>
                                                <ul class='cartUl'>
                                                    <li class='cartData' id='bedList' style='display:block'>
                                                        <span style='margin-right: 20px;font-weight:300'>Bed Room</span>$30 X 
                                                        <input class='inp' id='inpBed' @keyup='AddBed' type="text" v-model='cart.bed'>
                                                        <span class='text-success span_pos' v-if='cart.bedpay'> = ${{cart.bedpay}}</span>
                                                        <a  @click='vanishBed' class='text-danger span_pos_remove'>Remove</a></li>
                                                    <li class='cartData' id='bathList' style='display:block'>
                                                        <span style='margin-right: 20px;font-weight:300'>Bath Room</span>$10 X
                                                        <input  class='inp' id='inpBath' type="text" @keyup='AddBath' v-model='cart.bath'><span class='text-success span_pos' v-if='cart.bathpay'> = ${{cart.bathpay}}</span>
                                                        <a @click='vanishBath'  class='text-danger span_pos_remove'>Remove</a></li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                             <div class="extra">
                                <h6 class='mt-5'>Upgrade your order with extras</h6>
                                <div class="extraCart">
                                    <div class="row mt-5"> 
                                        <div class="col-md-4">
                                            <span>Kitchen Cleaning</span>
                                            <div>
                                                <ul>
                                                    <li>
                                              <span>$25 x </span><input  id='inpKitchen' class='inp' type="text" @keyup='AddKitchen' v-model='kitchen'>
                                                <span class='text-success span_pos' v-if='kitpay'> = ${{kitpay}}</span>

                                                    </li>
                                                </ul>
                                            </div>

                                        </div>
                                        <div class="col-md-4">
                                            <span>Fridge</span>
                                            <div>
                                                <span>$25 x </span><input id='inpFridge' class='inp' type="text" @keyup='AddFridge' v-model='fridge'>
                                                <span class='text-success span_pos' v-if='fridgepay'> = ${{fridgepay}}</span>
                                            </div>

                                        </div>
                                        <div class="col-md-4">
                                            <span>Garden</span>
                                             <div>
                                                <span>$25 x </span><input id='inpGarden' class='inp' type="text" @keyup='AddGarden' v-model='garden'>
                                                <span class='text-success span_pos' v-if='gardenpay'> = ${{gardenpay}}</span>
                                            </div>

                                        </div>
                                        
                                    </div> 
                                </div>
                            </div>

                        </div>
                        <div class="col-md-4 ">
                            <h6 class='mb-5'>Booking Summary</h6>
                            <span style='font-weight:bold'>Apointment Package Service</span>
                            <ul class='bookingUl'> 
                                <li class='bookingLi' id='bookingBed'><span class='booking'>Bedroom X {{cart.bed}} = ${{cart.bedpay}}</span></li>
                                <li class='bookingLi' id='bookingBath'><span class='booking'>Bathroom X {{cart.bath}} = ${{cart.bathpay}}</span></li>
                                <li class='bookingLi' ><span class='booking' style='font-weight: bold;'>Package Fee  $150</span></li>
                                <li class='bookingLi' ><span class='booking' style='font-weight: bold;'>Extra Service</span></li>
                                <li class='bookingLi' id='bookingKitchen'><span class='booking'>Kitchen X {{kitchen}} = ${{kitpay}}</span></li>
                                <li class='bookingLi' id='bookingFridge'><span class='booking'>Fridge X {{fridge}} = ${{fridgepay}}</span></li>
                                <li class='bookingLi' id='bookingGarden'><span class='booking'>Garden X {{garden}} = ${{gardenpay}}</span></li>
                                <li class=' mt-5' ><span >Sub Total = ${{subtotal}}</span></li>
                                <li class='bookingLi' ><span class='booking' >Tax (+15%)</span></li>
                                <li class=' mt-5' ><span >Total = ${{total}}</span></li>
                            </ul>
                        </div>
                </div>
                <div class="row mt-5 benrow">
                    <h6>Benefits of the packages</h6>
                    <ul class='mt-3 benul'>
                        <li class='ben'><span>Lorem ipsum is a placeholder text commonly used to</span></li>
                        <li class='ben'><span>Lorem ipsum is a placeholder text commonly used to</span></li>
                        <li class='ben'><span>Lorem ipsum is a placeholder text commonly used to</span></li>
                    </ul>
                </div>
                <div class='row'>
                    <div class="button-class">
                        <a  @click='backToHome' class="but previous btn btn-md"> Previous</a>
                        <a  @click='addTolocal' class="but next">Next</a>
                    </div>
                </div>
   
        </div>
      
           

        
</template>
<script>
export default {
    name:'Service',
    data(){
        return {
            cart:{
                bed:'',
                bath:'',
                bedpay:null,
                bathpay:null,
            },
                kitchen:'',
                fridge:'',
                garden:'',
                kitpay : null,
                fridgepay: null,
                gardenpay:null,
                
                subtotal:0,
                total:0,
        }
    },
    created(){
        //console.log("long: "+localStorage.getItem('longitude'));
    }
    ,
    computed:{

},
    methods:{
        AddBed(event){
            this.cart.bed = event.target.value;
             let cost = 30 * this.cart.bed;
             this.cart.bedpay= cost;
             this.subtotal = this.subtotal+ (this.cart.bedpay * .15) + this.cart.bedpay ;
             this.displayBed();
             this.total = 150+this.subtotal;
        },
         AddBath(event){
            this.cart.bath = event.target.value;
             let cost = 10 * this.cart.bath;
             this.cart.bathpay= cost;
             this.subtotal = this.subtotal+ (this.cart.bathpay * .15) + this.cart.bathpay;
             this.displayBath();
            this.total = 150+this.subtotal;

        },
        AddKitchen(event){
            this.kitchen = event.target.value;
            let count = this.kitchen;
            let cost = 25 * count;
            this.kitpay = cost;
            this.subtotal = this.subtotal+ (this.kitpay * .15 ) + this.kitpay;
            this.displayKitchen();
            this.total =  150+this.subtotal ;


        },
        AddFridge(event){
            this.fridge = event.target.value;
            let count = this.fridge;
            let cost = 25 * count;
            this.fridgepay = cost;
            this.subtotal = this.subtotal+ (this.fridgepay * .15 ) + this.fridgepay;
            this.displayFridge();
            this.total = 150+this.subtotal;


        }

        ,
        AddGarden(event){
            this.garden = event.target.value;
            let count = this.garden;
            let cost = 25 * count;
            this.gardenpay = cost;
            this.subtotal = this.subtotal+(this.gardenpay * .15 ) + this.gardenpay;
            this.displayGarden();
            this.total = 150+this.subtotal ;

        }
        ,

        
        vanishBed(){
            $('#bedList').css('display','none');
            $('#bookingBed').css('display','none');

            this.subtotal = this.subtotal - (this.cart.bedpay * .15 + this.cart.bedpay);
            this.total =  this.subtotal+150 ;
        },
        vanishBath(){
            $('#bathList').hide();
            $('#bookingBath').css('display','none');
            this.subtotal = this.subtotal - (this.cart.bathpay * .15 + this.cart.bathpay);
            this.total =  this.subtotal+150;
        },
        displayBed(){
            $('#bookingBed').css('display','block');
            $('#inpBed').prop('disabled','disabled');
        },
        displayBath(){
            $('#bookingBath').css('display','block');
             $('#inpBath').prop('disabled','disabled');
        },
        displayKitchen(){
            $('#bookingKitchen').css('display','block');
            $('#inpKitchen').prop('disabled','disabled');
        },
        displayFridge(){
            $('#bookingFridge').css('display','block');
             $('#inpFridge').prop('disabled','disabled');
        },
        displayGarden(){
            $('#bookingGarden').css('display','block');
             $('#inpGarden').prop('disabled','disabled');
        },
        backToHome(){
            this.$router.push({name:'Home'});
        }
        ,
        addTolocal(){
            let bed = this.cart.bed;
            let bath = this.cart.bath;
            let kitchen = this.kitchen;
            let fridge = this.fridge;
            let garden = this.garden;
            let total = this.total;

            let bedpay = this.cart.bedpay;
            let bathpay = this.cart.bathpay;
            let kitpay = this.kitpay;
            let fridgepay = this.fridgepay;
            let gardenpay = this.gardenpay;
            let subtotal = this.subtotal;
            console.log(total);
             AppStorage.setService(bed,bath,kitchen,fridge,garden,total,bedpay, bathpay,kitpay,fridgepay,gardenpay,subtotal);
             this.$router.push({name:'Date'});
        }

    }
}
</script>
<style >


</style>