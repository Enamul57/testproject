<template>
        <div class="row justify-content-center " id='date_content'>
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
                        <router-link  :to="{name:'Date'}" class="nav-link active" ><span class='circle'>3</span><span>Date & Time</span><span class="arrow arrow-active">></span></router-link>
                        </li>
                        <li class="nav-item">
                        <router-link :to="{name:'Info'}" class="nav-link" ><span>Information</span><span class="arrow">></span></router-link>
                        </li>
                        <li class="nav-item">
                        <router-link :to="{name:'Checkout'}" class="nav-link" ><span>Confirmation</span></router-link>
                        </li>

                    </ul>
                    </div>
                <!-- service section -->
            </div>
            </nav>
            <div class="available row justify-content-center">
                 <h6><span>Available on : </span></h6>

                <!-- start -->
                
                <div class="row mr-5 " id='Dlayer'>
                    <div class="col-md-3 colDate"><button @click='clickDate' id='dtO' class="btn btn-md dayBtn">{{presentDay()}}</button></div>
                    <div class="col-md-3 colDate"><button @click='clickNxtDate' id='dtN' class="btn btn-md  dayBtn">{{nextDay()}}</button></div>
                    <div class="col-md-3 colDate"><button @click='clickThirdDate' id='dtT' class="btn btn-md dayBtn">{{thirdDay()}}</button></div>
                    <div class="col-md-3 colDate"><button @click='clickFourthDate' id='dtF' class="btn btn-md dayBtn">{{fourthDay()}}</button></div>
                </div>
                </div>
                 <div class="row mt-5 schedule" id='Tlayer'>
                    <h6>Available Schedule on : {{orderdate}} </h6>
                    <div class="col-md-3 colDate">
                        <button @click='getTimeOne' id='ft' class="btn btn-md dayBtn"><span >{{times[0].val}}</span></button>
                    </div>
                    <div class="col-md-3 colDate">
                        <button @click='getTimeTwo' id='st' class="btn btn-md dayBtn"><span >{{times[1].val}}</span></button>
                    </div>

                    <div class="col-md-3 colDate">
                        <button @click='getTimeThree' id='tt' class="btn btn-md dayBtn"><span >{{times[2].val}}</span></button>
                    </div>
                    <div class="col-md-3 colDate">
                        <button @click='getTimeFour' id='fth' class="btn btn-md dayBtn"><span >{{times[3].val}}</span></button>
                    </div>
                   

                </div>
                <div class='row'>
                    <div class="dateSubmitBtn">
                        <button  @click='backToService' class="btn btn-md  subBtn"> Previous</button>
                        <button  @click='addToDate' class="btn btn-md  subBtn">Next</button>
                    </div>
                </div>
            
        </div>

</template>
<script>
export default {
    name:'Date', 
    data(){
        return {
            orderdate : null,
            times:[
                {id:1,val: '10:00AM-11:00AM'},
                {id:2,val: '12:00PM-01:00PM'},
                {id:3,val: '04:00PM-05:00AM'},
                {id:4, val: '06:00PM-07:00PM'},
            ],
            time:'',
        }
    } ,  
 
   methods:{
        presentDay(){
            const date = new Date();
            date.setDate(date.getDate());
            const day = date.toLocaleDateString();
            return day;
        },
        nextDay(){
            const date = new Date();
            date.setDate(date.getDate()+1);
            const d = date.toLocaleDateString();
            return d;
        },
        thirdDay(){
            const date = new Date();
            date.setDate(date.getDate()+2);
            const day = date.toLocaleDateString();
            return day;
            
        },
        fourthDay(){
            const date = new Date();
            date.setDate(date.getDate()+3);
            const day = date.toLocaleDateString();
            return day;
        },
        clickDate(){
            this.orderdate = this.presentDay();
            console.log(this.orderdate);
            $('#dtO').css('background','#00c06c');
            $('#dtO').css('color','white');
        },
        clickNxtDate(){
            this.orderdate = this.nextDay();
            console.log(this.orderdate);
            $('#dtN').css('background','#00c06c');
            $('#dtN').css('color','white');

        },
        clickThirdDate(){
            this.orderdate = this.thirdDay();
            console.log(this.orderdate);
            $('#dtT').css('background','#00c06c');
            $('#dtT').css('color','white');

        },
        clickFourthDate(){
            this.orderdate = this.fourthDay();
            console.log(this.orderdate);
            $('#dtF').css('background','#00c06c');
            $('#dtF').css('color','white');

        },
        getTimeOne(){
            this.time = this.times[0].val;
            $('#ft').css('background','#00c06c');
            $('#ft').css('color','white');

            console.log(this.time);
        },
         getTimeTwo(){
            this.time = this.times[1].val;
            $('#st').css('background','#00c06c');
            $('#st').css('color','white');

             console.log(this.time);

        }, 
        getTimeThree(){
            this.time = this.times[2].val;
            $('#tt').css('background','#00c06c');
            $('#tt').css('color','white');
            console.log(this.time);

        },
         getTimeFour(){
            this.time = this.times[3].val;
            $('#fth').css('background','#00c06c');
            $('#fth').css('color','white');
            console.log(this.time);

        },
        backToService(){
            this.$router.push({name:'Service'});
        }
        ,
        addToDate(){
            
             AppStorage.addToDate(this.orderdate,this.time);
             this.$router.push({name:'Info'});
        }



   },
    
}
</script>
