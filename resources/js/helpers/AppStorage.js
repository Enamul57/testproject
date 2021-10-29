class AppStorage{
    storeLat(latitude){
        localStorage.setItem('latitude',latitude);
    }
    storeLong(longitude){
        localStorage.setItem('longitude',longitude);
    }
    storeLocation(lat,long){
        this.storeLat(lat);
        this.storeLong(long);
    }
    setService(bed,bath,kitchen,fridge,garden,total,bedpay, bathpay,kitpay,fridgepay,gardenpay,subtotal){
        localStorage.setItem('bed',bed);
        localStorage.setItem('bath',bath);
        localStorage.setItem('kitchen',kitchen);
        localStorage.setItem('fridge',fridge);
        localStorage.setItem('garden',garden);
        localStorage.setItem('total',total);
        if(bedpay !== null){localStorage.setItem('bedpay',bedpay);}
        if(bathpay !==null){localStorage.setItem('bathpay',bathpay);}
        if(kitpay !== null){localStorage.setItem('kitpay',kitpay);}
        if(fridgepay !== null){localStorage.setItem('fridgepay',fridgepay);}
        if(gardenpay !== null){localStorage.setItem('gardenpay',gardenpay);}
        localStorage.setItem('subtotal',subtotal);
    }
    addToDate(date,time){
        localStorage.setItem('date',date);
        localStorage.setItem('time',time);
   }
   addInfo(name,email,phone,city, area,postcode,address,ordernote){
    localStorage.setItem('name',name);
    localStorage.setItem('email',email);
    localStorage.setItem('phone',phone);
    localStorage.setItem('city',city);
    localStorage.setItem('area',area);
    localStorage.setItem('postcode',postcode);
    localStorage.setItem('address',address);
    localStorage.setItem('ordernote',ordernote);
   
}
}
export default AppStorage = new AppStorage();