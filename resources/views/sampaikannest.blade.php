<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

<x-app1>
    <x-slot name="header">
       
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Sampaikan kebutuhanmu') }}
        </h2>
        
        <div class="container d-flex justify-content-center card mb-3" style="max-width: 540px;">
          <div class="row g-0 justify-content-center">
          <div class=" card-body ">
            <h5 class="card-title text-lg font-bold">Sampaikan Kebutuhanmu</h5>
            <h6 class="card-subtitle mb-2 text-muted">Pengguna dapat langsung menuju ke wa Admin</h6>
            <p class="card-text">Pengguna dapat Selayaknya berkirim pesan,
              pengguna dapat mengirimkan pesan sesuai keperluannya 
              dengan menggunakan  aplikasi WhatsApp.</p><br>
              <a href="https://wa.me/6287729424233?text=Halo%2C%20saya%20ingin%20bertanya" 
              class="d-flex justify-content-center bg-green-500 text-white py-2 px-5 rounded-xl hover:bg-gray-500">
               WhatsApp
           </a>
           
          </div>
        </div>
      </div>

  


          
          
          
    </x-slot>
    
     
</x-app1>
<x-foot>

</x-foot>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>