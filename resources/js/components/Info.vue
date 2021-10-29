<template>
        <div class="row justify-content-center " id='info'>
             <nav class="navbar navbar-expand-lg navbar-light bg-light location-nav">
                <div class="container-fluid">
                <!-- navbar section -->
                    <div class="collapse navbar-collapse" id="navbarNav">
                        <ul class="navbar-nav">
                            <li class="nav-item ">
                            <router-link  :to="{name:'Home'}" class="nav-link active" aria-current="page"  ><span class='circle'>1</span><span>Location</span><span class="arrow arrow-active">></span></router-link>
                            </li>
                            <li class="nav-item">
                                
                            <router-link :to="{name:'Service'}" class="nav-link active" ><span class='circle'>2</span><span>Services</span>  <span class="arrow arrow-active">></span></router-link>
                            </li>
                            <li class="nav-item">
                            <router-link :to="{name:'Date'}" class="nav-link active" ><span class='circle'>3</span><span>Date & Time</span><span class="arrow arrow-active">></span></router-link>
                            </li>
                            <li class="nav-item">
                            <router-link :to="{name:'Info'}" class="nav-link active" ><span class='circle'>4</span><span>Information</span><span class="arrow arrow-active">></span></router-link>
                            </li>
                            <li class="nav-item">
                            <router-link :to="{name:'Checkout'}" class="nav-link" ><span>Confirmation</span></router-link>
                            </li>
                        </ul>
                    </div>
                </div>
            </nav>
            <!-- Booking Info Section -->
            <div id='book_info' class='col-md-12'>
                <h3><span>Booking Information</span></h3>
                <form class='book_form' @submit.prevent='addToInfo'>
                    <div class="form-row rform">
                        <div class="form-group col-md-6">
                            <label for="">Your Name*</label>
                            <input type="text" name="" id="" class='form-control inpPlace' placeholder='Type Your Name' v-model='form.name' required>
                        </div>
                        <div class="form-group col-md-6">
                            <label for="">Your Email*</label>
                            <input type="email" name="" id="" class='form-control inpPlace' placeholder='Type Your Email' v-model='form.email' required>
                        </div>

                    </div>
                    <div class="form-row rform">
                        <div class="form-group col-md-6">
                            <label for="">Phone Number*</label>
                            <input type="text" name="" id="" class='form-control inpPlace' placeholder= 'Type Your Number' v-model='form.phone' required>
                        </div>
                        <div class="form-group col-md-6">
                            <label for="">Your City*</label>
                            <input type="text" name="" id="" class='form-control inpPlace' placeholder='Type Your City' v-model='form.city' required >
                        </div>

                    </div>
                    <div class="form-row rform">
                        <div class="form-group col-md-6">
                            <label for="">Your Area*</label>
                            <input type="text" name="" id="" class='form-control inpPlace' placeholder='Type Your Area' v-model='form.area' required>
                        </div>
                        <div class="form-group col-md-6">
                            <label for="">Post Code*</label>
                            <input type="text" name="" id="" class='form-control inpPlace' placeholder='Type Your Post Code' v-model='form.postcode' required>
                        </div>

                    </div>
                    <div class="form-row rform">
                        <div class="form-group col-md-6">
                            <label for="">Your Address*</label>
                            <input type="text" name="" id="" class='form-control inpPlace' placeholder='Type Your Address' v-model='form.address' required>
                        </div>
                    </div>
                    <div class="form-row rform">
                        <div class="form-group col-md-6">
                            <label for="" class='form-label'>Order Note*</label>
                            <textarea name="" id="" cols="30" rows="5" class='form-control inpPlace' v-model='form.ordernote'></textarea>
                        </div>
                    </div>
                    <div class="form-row btnRow">
                        <button type="button" @click='backToDate' class="btn btn-md subBtnPrev mr-4">Previous</button>
                        <button type="submit" class="btn btn-md subBtn">Next</button>
                    </div>
                </form>
            </div>
        </div>
</template>
<script>
export default {
    name:'Info',
    data(){
        return{
            form:{
            name:'',
            email:'',
            phone:'',
            city:'',
            area:'',
            postcode:'',
            address:'',
            ordernote:'',
            }
        }
    },
    methods:{
        backToDate(){
            this.$router.push({name:'Date'});
        },
        addToInfo(){
            let name = this.form.name;
            let email= this.form.email;
            let phone = this.form.phone;
            let city = this.form.city;
            let area = this.form.area;
            let postcode = this.form.postcode;
            let address= this.form.address;
            let ordernote = this.form.ordernote;
           //let email= this.email;
           
           AppStorage.addInfo(name,email,phone,city, area, postcode,address,ordernote);
           this.$router.push({name:'Checkout'});
        }
    }
}
</script>