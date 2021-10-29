<template>
    <div class="container">
        <div class="row justify-content-center">
            <nav class="navbar navbar-expand-lg navbar-light bg-light location-nav">
            <div class="container-fluid">
                <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav">
                    <li class="nav-item ">
                    <router-link :to="{name:'Home'}" class="nav-link active" aria-current="page" style='text-align:center' ><span class='circle'>1</span><span>Location</span><span class="arrow arrow-active">></span></router-link>
                    </li>
                    <li class="nav-item">
                        
                    <router-link  :to="{name:'Service'}" class="nav-link" ><span>Services</span>  <span class="arrow">></span></router-link>
                    </li>
                    <li class="nav-item">
                    <router-link :to="{name:'Date'}"  class="nav-link" ><span>Date & Time</span><span class="arrow">></span></router-link>
                    </li>
                     <li class="nav-item">
                    <router-link :to="{name:'Info'}" class="nav-link" ><span>Information</span><span class="arrow">></span></router-link>
                    </li>
                    <li class="nav-item">
                    <router-link :to="{name:'Checkout'}" class="nav-link" ><span>Confirmation</span></router-link>
                    </li>

                </ul>
                </div>
            </div>
            </nav>
            <nav class='navbar navbar-expand-lg navbar-light bg-light location-btn'>
                <a  class="btn  btn-lg  btn-custom" @click='setLocation'>
                    {{location}}
                </a>
            </nav>
                
        </div>
      
        <div id="showmap">
        <div class="card" >
        <div class="card-body map">
            <p class="card-text locText"> Your Current Location Is </p>
            <img class="card-img-top mapImg" src="assets/images/maps.png" alt="Card image cap">
        </div>
        </div>
    <!-- Async script executes immediately and must be after any DOM elements used in callback. -->
           <div>
               <button  class="btn custom-btn" @click='servicePage'> Next</button>
               
           </div>
        </div>   
           

        
    </div>
</template>

<script>

    export default {
        name:'Home',
        data(){
            return {
                location:'Click For Location',
                maps:[],
                map:null,
            }
        },
        methods:{
            setLocation(){
                if(navigator.geolocation){
                    navigator.geolocation.getCurrentPosition(
                        (position)=>{
                            console.log(position);
                            const latitude = position.coords.latitude;
                            const longitude =  position.coords.longitude;
                            console.log(position.coords.latitude);
                            console.log(position.coords.longitude);
                            //this.location = 'Latitude is:'+position.coords.latitude+ " & Longitude is:"+position.coords.longitude;
                             if(latitude > 23.70 && longitude >90.00){
                                 this.location='Banasree,Dhaka';
                             }else{
                                 this.location = 'Rampura,Dhaka';
                             }
                             AppStorage.storeLocation(latitude ,longitude);

                  })
             }

            },
    //         async getStreetAddressFrom(lat,long){
    //        await $.get( "https://api.opencagedata.com/geocode/v1/json?q=PLACENAME&key=665e91e8ffb4473c8419badd720f368d", function(data) {
                            
    //                         this.maps= data.results[0];
    //                         console.log(this.maps);
    //                     }).catch(err=> console.log(err.data));
    //         // $.get( "https://maps.googleapis.com/maps/api/geocode/json?latlng="+ lat + "," + long +"&key=AIzaSyAe-7DKy3o9XtCNjgqg6Jw0CTtlaRB0-dU", function(data) {
    //         //         console.log(data);
    //         //       })
                        
    //    },
            servicePage(){
                this.$router.push({name:'Service'});
            }
        },
                
    }
</script>
