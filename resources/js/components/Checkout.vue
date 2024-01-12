<template>
    <div class='row justify-content-center'>
             <nav class="navbar navbar-expand-lg navbar-light bg-light location-nav">
                <div class="container-fluid">
                <!-- navbar section -->
                    <div class="collapse navbar-collapse" id="navbarNav">
                        <ul class="navbar-nav">
                            <li class="nav-item ">
                            <router-link class="nav-link active" aria-current="page" :to="{name:'Home'}" ><span class='circle'>1</span><span>Location</span><span class="arrow arrow-active">></span></router-link>
                            </li>
                            <li class="nav-item">

                            <router-link class="nav-link active"  :to="{name:'Service'}"><span class='circle'>2</span><span>Services</span>  <span class="arrow arrow-active">></span></router-link>
                            </li>
                            <li class="nav-item">
                            <router-link class="nav-link active" :to="{name:'Date'}"><span class='circle'>3</span><span>Date & Time</span><span class="arrow arrow-active">></span></router-link>
                            </li>
                            <li class="nav-item">
                            <router-link class="nav-link active" :to="{name:'Info'}"><span class='circle'>4</span><span>Information</span><span class="arrow arrow-active">></span></router-link>
                            </li>
                            <li class="nav-item">
                            <router-link class="nav-link active" :to="{name:'Checkout'}"><span class='circle'>5</span><span>Confirmation</span></router-link>
                            </li>
                        </ul>
                    </div>
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
                </div>
            </div>
            <div class="row details_content">
                <div class="col-md-8">
                    <div class="row">
                        <div class="col-md-4">
                            <h6>Location</h6>
                            <span class='itemspan'>{{this.form.place}}</span>
                            <span class='itemspan' v-if='form.placeCity'>{{this.form.placeCity}}</span>
                        </div>
                        <div class="col-md-4">
                            <h6>Date & Time</h6>
                            <span class='itemspan' v-if='form.date'>{{this.form.date}}</span>
                            <span class='itemspan'  v-if='form.time'>{{this.form.time}}</span>
                        </div>

                    </div>
                    <div class="row booking_details">
                        <h6>Booking Info</h6>
                        <table class='table table_details'>
                            <tr>
                                <td class='t_label'>Name</td><td class='t_data'> {{form.name}}</td>
                            </tr>
                            <tr>
                                <td class='t_label'>Email</td><td class='t_data'> {{form.email}}</td>
                            </tr>
                            <tr>
                                <td class='t_label'>Phone</td><td class='t_data'> {{form.phone}}</td>
                            </tr>
                            <tr>
                                <td class='t_label'>City</td><td class='t_data'> {{form.city}}</td>
                            </tr>
                            <tr>
                                <td class='t_label'>Area</td><td class='t_data'> {{form.area}}</td>
                            </tr>
                            <tr>
                                <td class='t_label'>Post Code</td><td class='t_data'> {{form.postcode}}</td>
                            </tr>
                        </table>
                    </div>
                </div>
                <div class="col-md-4">
                    <h6 class='mb-5'>Booking Summary</h6>
                    <span style='font-weight:bold'>Apointment Package Service</span>
                    <ul class='bookingUl'>
                        <li class='bookingLi' style='display:block' id='bookingBed'><span class='booking' v-if='form.bedpay'>Bedroom X {{form.bed}} = ${{form.bedpay}}</span></li>
                        <li class='bookingLi' style='display:block' id='bookingBath'><span class='booking' v-if='form.bathpay'>Bathroom X {{form.bath}} = ${{form.bathpay}}</span></li>
                        <li class='bookingLi' ><span class='booking' style='font-weight: bold;'>Package Fee  $150</span></li>
                        <li class='bookingLi' ><span class='booking' style='font-weight: bold;'>Extra Service</span></li>
                        <li class='bookingLi' style='display:block' id='bookingKitchen'><span class='booking' v-if='form.kitpay'>Kitchen X {{form.kitchen}} = ${{form.kitpay}}</span></li>
                        <li class='bookingLi' style='display:block' id='bookingFridge'><span class='booking' v-if='form.fridgepay'>Fridge X {{form.fridge}} = ${{form.fridgepay}}</span></li>
                        <li class='bookingLi' style='display:block' id='bookingGarden'><span class='booking' v-if='form.gardenpay'>Garden X {{form.garden}} = ${{form.gardenpay}}</span></li>
                        <li class=' mt-5'  style='display:block'><span >Sub Total = ${{form.subtotal}}</span></li>
                        <li class='bookingLi' style='display:block' ><span class='booking' >Tax (+15%)</span></li>
                        <li class=' mt-5' style='display:block'><span >Total = ${{form.total}}</span></li>

                    </ul>
                     <div class="col s12 place-order-button-block text-center mt-2">
                         <button class="btn btn-primary mt-2 orderBtn"  type="button" @click="placeOrder">Place Order</button>
                     </div>


                    <div class="row mt-5 " id='yourPay' style='display:none'>
                        <img src="assets/images/payment.png" style='width:300px;margin-top:10px;' alt="">
                           <Payment> </Payment>
                    </div>


                    <!-- Payment with stripe -->
                </div>
            </div>
        </div>
</template>
<script>
import Payment from './Payment.vue';
export default {

    name:'Checkout',

    components:{
        Payment,
    },
    data(){
        return{
            form:{
            place: '',
            placeCity:'',
            date:'',
            time:'',
            name:'',
            email:'',
            phone:'',
            city:'',
            area:'',
            postcode:'',
            bed:'',
            bath:'',
            kitchen:'',
            fridge:'',
            garden:'',
            bedpay:'',
            bathpay:'',
            kitpay:'',
            fridgepay:'',
            gardenpay:'',
            subtotal:'',
            total:'',
            },
            loaded:false,
            paidfor:false,
            product:{
                price: localStorage.getItem('total'),
            },



         }
    },
    methods:{
        placeOrder(){
            $('#yourPay').css('display','block');

         this.form.date = localStorage.getItem('date');
        this.form.time = localStorage.getItem('time');

        this.form.name = localStorage.getItem('name');
        this.form.email = localStorage.getItem('email');
        this.form.phone = localStorage.getItem('phone');
        this.form.city = localStorage.getItem('city');
        this.form.area = localStorage.getItem('area');
        this.form.postcode = localStorage.getItem('postcode');
        this.form.address = localStorage.getItem('address');
        this.form.gardenpay = localStorage.getItem('gardenpay');
        this.form.bed = localStorage.getItem('bed');
        this.form.bath = localStorage.getItem('bath');
        this.form.kitchen = localStorage.getItem('kitchen');
        this.form.fridge = localStorage.getItem('fridge');
        this.form.garden = localStorage.getItem('garden');
        this.form.bedpay = localStorage.getItem('bedpay');
        this.form.bathpay = localStorage.getItem('bathpay');
        this.form.kitpay = localStorage.getItem('kitpay');
        this.form.fridgepay = localStorage.getItem('fridgepay');
        this.form.subtotal = localStorage.getItem('subtotal');
        this.form.total = localStorage.getItem('total');

         axios.post('/api/pay',this.form).then(({data})=>{console.log(data)}).catch(err => {console.log(err.data)});

        }
    },
    created(){
       let lat = localStorage.getItem('latitude');
       let long  = localStorage.getItem('longitude');
        if(lat > 23.70 && long > 90.00){
            this.form.place = localStorage.getItem('location');
            this.form.placeCity = 'Dhaka';
        }else if(lat==null || long==null){
            this.form.placeCity = "location not selected";
        }else{
            this.form.place = '',
            this.form.placeCity = 'Dhaka';
        }


    },

}
</script>
<style lang="scss" scoped>


  .place-order-button-block {
    margin: 10px 0;
  }
  button {
    background-color: 'light-green';
  }
  .orderBtn{
      float: left;
      margin-left: -20px;
      background:#20c14a;
      border:1px solid #20c14a;
  }
</style>
