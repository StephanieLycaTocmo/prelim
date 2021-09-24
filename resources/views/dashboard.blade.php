@extends('base')

@section('content')

<style></style>

<body>
  <section id="services" class="container">
     <h2 class="display-4 text-center mt-5 mb-3">Welcome to Bohol</h2>
     
     <div class="row text-center">
        <div class="col-md-4 mb-4">
           <div class="card h-100">
              <img class="card-img-top" src="Beach.jpg" alt="Design">
              <div class="card-body">
                 <h4 class="card-title">Panglao Beach</h4>
                 <p class="card-text">Deliver the best user experience 
                 with our carefully designed responsive websites and applications!</p>
              </div>
              <div class="card-footer py-4">
                 <a href="#" class="btn btn-secondary">Visit &raquo;</a>
              </div>
           </div>
        </div>
        
        
        
        <div class="col-md-4 mb-4">
           <div class="card h-100">
              <img class="card-img-top" src="alona.jpg" alt="Analytics">
              <div class="card-body">
                 <h4 class="card-title">Hotel and Resorts</h4>
                 <p class="card-text">Consult our experts to set up proper goals and 
                 find the best stack for your next application!</p>
              </div>
              <div class="card-footer py-4">
                 <a href="#" class="btn btn-secondary">Visit &raquo;</a>
              </div>
           </div>
        </div>

        <div class="col-md-4 mb-4">
           <div class="card h-100">
              <img class="card-img-top" src="alicia.jpg" alt="Development">
              <div class="card-body">
                 <h4 class="card-title">Mountains and Hills</h4>
                    <p class="card-text">You need software that works on every device. 
                    Leverage the latest technologies and the most powerful tools!</p>
              </div>
              <div class="card-footer py-4">
                 <a href="#" class="btn btn-secondary">Visit &raquo;</a>
              </div>
           </div>
        </div>
     </div>
   </section>
   
</body>
@endsection

