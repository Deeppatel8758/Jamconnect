
  //     //form 
      
      
      
  //   const arr=[22.47987186506202,22.48918554302083];
  //     const arr2=[69.99624026520785,70.01416125087252];
  
  //       var btn = document.getElementById('btn');

  //     //  function cordinate(){
  
  //     //     var long = document.getElementById('long').value;
  //     //     var lt =document.getElementById('lt').value;
        
  //     //     alert(long);
  //     //     alert(lt);

  //     //     arr[0]=long;
  //     //     arr2[0]=lt;

        
          
  //     //   }
       
  
  
  //       function pop(){
        
  //           var s ='hello';
  //           return s;
  //       }
  
  //       var myIcon = L.icon({
  //     iconUrl: '8092.png',
  //     iconSize: [20, 60],
  //     iconAnchor: [22, 94],
  //     popupAnchor: [-3, -76],
  //     // shadowUrl: 'mark.jpg',
  //     // shadowSize: [68, 95],
  //     // shadowAnchor: [22, 94]
  // });
  //       window.onload = function() {
  //         L.mapquest.key = 'I4nu7wwD1HNdxPXcOxy3MkftSTnZX0lf';
  
  //         var map = L.mapquest.map('map', {
  //           center: [0, 0],
  //           layers: L.mapquest.tileLayer('map'),
  //           zoom: 14
  //         });
  
        
  
  //         L.marker([22.47987186506202, 69.99624026520785]).addTo(map)
        
  //         // L.marker([22.48918554302083, 70.01416125087252],{title:'patelfarm'}).addTo(map)
  
  //         for(let i=0;i<arr.length;i++){
  //           // L.marker([arr[i],arr2[i]]).addTo(map)
            
  //          console.log(arr2[i]);
  
  
  //         }
  //     // .bindPopup('DODHIA S FARM')
  //     // .openPopup();
  //     // L.marker([22.460830359099308, 70.01591745334933]).addTo(map)
  //     // .bindPopup(pop)
  //     // .openPopup();
  
  //       }
  
  // //       var popup = L.popup();
  
  // // function onMapClick(e) {
  // //     popup
  // //         .setLatLng(e.latlng)
  // //         .setContent("You clicked the map at " + e.latlng.toString())
  // //         .openOn(map);
  // // }
  



  //load data
  // var allQuestions = new Array();
    
  // function loadQuestions() {
  //     $.getJSON('cordi.json', function (data) {
  //         allQuestions = data.cordi[0];
  //     }).error(function(){
  //             console.log('error: json not loaded');
  //         });
  //     }
  //      var currentQuestion = allQuestions[0];
  //       console.log(allQuestions);
  
    let data= [];
     
    var details=new Array();
    var long  =[];
    var lat =[];
    var names=[];
  fetch("cordi.json")
.then(response => response.json())
.then(data=>{
  showInfo(data);
  // You can use the 'long' array here, or you can call a function that uses it.
  // For example:
  dosomthing();
  
  
});


function showInfo(data){

    details=data;
    // console.log(details)
   
    for(let i=0; i<details.length;i++){
      long[i]=details[i].longitutude;
      

    }
    for(let i=0; i<details.length;i++){
      lat[i]=details[i].lat;
      

    }
    for(let i=0; i<details.length;i++){
      names[i]=details[i].name;
      

    }
    
    
      
  
    
}

function dosomthing(){
  console.log(long[0]);
  L.mapquest.key = 'I4nu7wwD1HNdxPXcOxy3MkftSTnZX0lf';

  var map = L.mapquest.map('map', {
    center: [22.468550634769795, 70.06355428136122],
    layers: L.mapquest.tileLayer('map'),
    zoom: 14
  });
 
 for(let i=0;i<long.length;i++){
  L.marker([long[i],lat[i]]).addTo(map).bindPopup(names[i])
  .openPopup();
 }

  map.addControl(L.mapquest.control());


}








// const long =[];
// const lt =[];
// for(let i=0;i<details.length;i++){
//   long[i]=details[i]
//   lt[i]=details[i];
// }
// for(let i=0;i<details.length;i++){
//   console.log(long[i])
  
// }


  //complete

 


// console.log(details)