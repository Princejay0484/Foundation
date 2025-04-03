<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="/css/Mayashope.css">
    <link rel="icon" href="/img/logo.png" type="image/png">
    <title>Account Information</title>
</head>
<body>
    <header id="header">
         @include('/header')
    </header>
        
        <main id="main">
         
<div class="main_first_div">

   
   
<div class="main_first_div_container_carlo">
               <img src="/img/sampleuser.png" alt="user">
               <h3 class="h3">{{auth()->user()->name}}</h3>
            </div>
   
<div class="main_first_div_container h2">
               <a href="/admin_dasboard">Dashboard</a> 
            </div>

            <div class="main_first_div_container h3">
               <a href="/accoutinformation"><img src="/img/accountinfo.png" alt="accountinfologo">
               <h3 class="h3">Account Information</h3></a> 
            </div>

            <div class="main_first_div_container h2">
                <a href="/events"><h2 class="h3"class="h2">Events</h2></a>
            </div>

            <div class="main_first_div_container h3">
           
                <a href="/mayas"> <img src="/img/chaliecelogo.png" alt="chaliecelogo">
                <h3 class="h3">Chalice</h3></a>
            </div>

            <div class="main_first_div_container h3">
            <a href="/mayashope"><img src="/img/mayalogo.png" alt="mayalogo">
            <h3 class="h3">Maya's Hope</h3></a>
            </div>

            <div class="main_first_div_container h3">
                <a href="/donation"> <img src="/img/mayalogo.png" alt="mayalogo">
                <h3 class="h3">Donation</h3></a>
            </div>

            <div class="main_first_div_container h2">
                <a href=""><h2 class="h3">Notification</h2></a> 
            </div>

        

            <div class="main_first_div_container h3">
           <a href="{{route('logout')}}" class="logout"> <img src="/img/logout.png" alt="" class="icon">LOG OUT </a>  
            </div>
</div>

</div>

<div class="main_second_div">
 <div class="main_second_div_top">
       <h2>DONATION</h2>
 </div>

 

 <div class="main_div3">

     <div class="main_div3_container_serch">

     </div>

     <div class="main_div3_container_print">
         
     </div>
             <div class="main_div3_container_search">
                <input type="text" placeholder="CATEGORY"> 
                 <div class="main_div3_container_search_divider">
                    <img src="/img/search.png" alt="search"> 
                 </div>
             </div>

             <div class="main_div3_container_print">
                 <img src="/img/print.png" alt="plus">   
                 <h5>PRINT</h5>  
              </div>

              <div class="main_div3_container">
                <img src="/img/plus.png" alt="plus">   
                <h5>CREATE NEW</h5>         
              </div>

             
          </div>

          <div class="main_div4"> 
             <table>
                 <thead>
                     <tr>
                         <th>No.</th>
                         <th>EMAIL ADDRESS</th>
                         <th>REFERENCE NUMBER</th>
                         <th>DONATION DATE</th>
                         <th>PAYMENT METHOD</th>
                         <th class="actions">Action</th>
                     </tr>
                 </thead>
                 <tbody>
                     <tr>
                         <td colspan="5"></td>
                         <td class="actions">
                             <a href="#">View</a>
                             <a href="#">delete</a>
                         </td>
                     </tr>
                 </tbody>
             </table>

          </div> 


 </div>


</div>

        </main>
        
    <footer id="footer">

    </footer>
</body>
</html>