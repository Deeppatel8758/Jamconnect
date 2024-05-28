
<h1>Introduction to project :</h1>
jamconnect is a webapp specially design for jamnagar municipality under the SSIP hackathon 2023 , jamconnect provides complete hospital appointment booking as well as complete ticket booking of all the public aminities of jamnagar , it also provide faclility to book and verfy ticket fromandmin side , and also hospital management from hospital side , it also provide details and direction 

technology stack :
php ,mysql ,javascript ,html ,css

**apis :**


payment gateway : Razorpay


map Api : mapQuest (ref :https://developer.mapquest.com/documentation/)

**type of user** 


1.Normal citizen (use publicly available website)


2.Admin ( IT admin which add place details and other cordinates for map)


3.Hospital admin (upload details of doctor with their avialble time and slot)


4.ticket admin (uplad available ticket and their price detials)

**flow chart for enitre process** 


there are two work flows in this projects


1.Noraml user  (end user) work flow 

![Basic_user_workflow ](https://github.com/Deeppatel8758/Jamconnect/assets/69745981/9445ea0e-e20e-4b3b-bb3e-95118c1f6f89)




2. Admin work flow

   
   ![admin_both_workflow](https://github.com/Deeppatel8758/Jamconnect/assets/69745981/8c0a1775-a63a-42c7-bda4-837f307610cc)


<h1 style="font-size:20px;">Setup to Local device</h1>
<h3> 1.Download Repo</h3>
<h3>2. Download Xampp or wammp and start my sql and apache services</h3>

![step1](https://github.com/Deeppatel8758/Jamconnect/assets/69745981/8a0f2f49-9d09-4e6a-b26f-02b090ad439c)



<h3>2. open any browser and go to local database using 127.0.0.1/phpmyadmin</h3>


![step2](https://github.com/Deeppatel8758/Jamconnect/assets/69745981/ef146e99-1e56-48a7-92b2-98cde093bb05)

<h3>3.Make new Databse and tabels provided in Database directory of repository </h3>
<p>use import database and use sql files which is provided in /Database directory</p>
<p>Below is databse schema (all the sql files are provided in /Databse dir </p>


![image](https://github.com/Deeppatel8758/Jamconnect/assets/69745981/e11d5b85-4d98-4af0-81fe-5ec287eb55cf)

<h3>4. Setup direcotry  </h3>
<p> locate xammmp in your pc (by defaulut its c:/xampp/)</p>
<p> copy enitire Repo and pase it in xammp/htdocs</p>

![image](https://github.com/Deeppatel8758/Jamconnect/assets/69745981/dc04b54f-c318-452a-a478-fbe18460b561)

<h3>Website is ready to launch</h3>
<h3>type 127.0.0.1/your-repo-name/ in browser </h3>

<h1> Dependencies </h1>
<p>1. Razorpay Payment gateway </p>
<p>2. Map quest api(ref :https://developer.mapquest.com/documentation/)</p>

<hr>
<h1>Snap Shot of website </h1>

<h2>1.From Normal User (Citizen)</h2>
<p> Registration od user using otp which is send on email </p>


![user_register](https://github.com/Deeppatel8758/Jamconnect/assets/69745981/4836c522-4836-4a4f-9030-fd5f54734d40)

<h2> 2.Landing page for Aminties serach and other options</h2>

![main_user_basic](https://github.com/Deeppatel8758/Jamconnect/assets/69745981/e9897402-3e3f-49f2-bfa4-614860316f45)

<h2>3. Snapp shot for appointment booking </h2>
<p>for appointment booking you have to select one hosputal and all the details of avilabe doctor with their live data is visible to user
</p>

![image](https://github.com/Deeppatel8758/Jamconnect/assets/69745981/6270b4ae-2df4-4f0d-853e-bae2db42cba5)

<h3>4. After selection click on submit </h3>
<p> After clicking on submit you will recive a mail which consist complete booking details .
with time and docotor name </p>

<h1>Ticket Booking (Public garder or other aminites)</h1>

<h2>Select Public aminity and fiil details </h2>

![image](https://github.com/Deeppatel8758/Jamconnect/assets/69745981/9e98acae-cbea-40d7-8974-0f76010b8356)

<h2> Pay and Get ticket </h2>
<p>ticket will be send on email with unique id and paymnet id </p>

![pay](https://github.com/Deeppatel8758/Jamconnect/assets/69745981/1e422a33-308a-4a9b-8d44-a33ba2fa656f)

<hr>
<h1>Admin side  </h1>

<h1>1.ticket admin</h1>
<p>After login </p>
<p> 1.Can verify ticket</p>
<p>2.update  aminity capacity</p>
<p>3.update timing </p>
<p>4.Can see all the booktickets</p>

![TICKETAUTH_01](https://github.com/Deeppatel8758/Jamconnect/assets/69745981/d037ed56-2ce4-4665-b565-6bb610338b42)


![TICKETAUTH02](https://github.com/Deeppatel8758/Jamconnect/assets/69745981/19121f3c-b9c6-47eb-b3ad-b0731df0d046)

<hr>

<h1>2.Hospital Admin</h1>
<p> After Login</p>
<p>1.View all appointment</p>
<p>2.add doctor details with slot</p>
<p>3.Can remove or add slot </p>

![adddoctor](https://github.com/Deeppatel8758/Jamconnect/assets/69745981/644ecae7-5080-4172-a5b4-860d22abaeb8)

![viewslot](https://github.com/Deeppatel8758/Jamconnect/assets/69745981/3c7376ab-3fc6-4006-af3b-a4ca5afb2693)

![patients](https://github.com/Deeppatel8758/Jamconnect/assets/69745981/29a4b5ee-322d-49e9-bb7f-d1e18e4e1da0)

<hr>
<h1>3. Main admin </h1>
<p>
	login
</p>
<p>1.Add aminities</p>
<p>view/Edit aminity</p>
<p>Add to Map</p>
<p>Add Hospital Admin</p>

![addaminity](https://github.com/Deeppatel8758/Jamconnect/assets/69745981/9168ab6c-3545-4e12-a7f0-555daec2c7fc)

![addtomap](https://github.com/Deeppatel8758/Jamconnect/assets/69745981/5b2d0f0b-aad9-403b-a042-3526b1d3eac8)

![addhosadmin](https://github.com/Deeppatel8758/Jamconnect/assets/69745981/9b5daa55-de9f-4c31-967e-6bdafa32aab6)

<hr>
<h1>Some Configuration You have to Change according to your system</h1>
<p> Email : use your email to send otp and tickets ( ref of how to change email :https://youtu.be/4TmD4ly7V_E?si=G6gB4GVutEqQTG5T)</p>
<p> Razorpay Payment Gateway Api key : you have to get Razorpay api and use it in project (ref : razorpay official webiste)</p>
<p>Mapquest Api key : change Map Api key (ref :https://developer.mapquest.com/documentation/)</p>
<p>Install some Packages using composer like Pdfgenerator etc.</p>



