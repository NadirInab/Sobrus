@extends('layouts.app')
@section('content')

    <div class="container text-center ">
        <h2 class="hero border-bottom w-50 m-auto">Our Customers Satisfaction is Our Priority !
        </h2>
    </div>
    <div class="row d-flex p-3 m-3">
        <div class="col-6">
            <p class="text-secondary fw-bold w-100 h-100 p-4 lh-lg">
                The leader in Cloud solutions provides its customers with professional teams, available and always ready to listen.
                Being aware and accustomed to confidentiality
                and data security, Sobrus ensures that all embedded information is encrypted according to international security standards . <br>
                At Sobrus, our mission is to support healthcare professionals to help them develop their business, increase their turnover and give them broad visibility on everything that is happening in their business. <br> 
                Listening to our customers, supporting them, knowing their needs is a priority that allows us to present them with the best 100% Cloud Solutions.
            </p>
            <p>
            </p>
        </div>
        <div class="col-6">
            <img class="w-100 h-100 rounded" src="https://sobrus.com/_next/image?url=%2F_next%2Fstatic%2Fmedia%2Fwork.9e20fb1d.png&w=1920&q=30" alt="">
        </div>
    </div>

    <div id="solutions" class="solutions pt-3">
        <h2 class="text-center text-success border-bottom fw-bold">Our Solutions</h2>
        <div class="container d-flex">

            <div class="limit w-75 m-auto p-3 border-2 border-end">
                <img src="https://sobrus.com/_next/image?url=%2Fassets%2Flogos%2Fpharma.png&w=384&q=30" alt="" srcset="" class="p-4 d-block m-auto">
                <p class="text-secondary fw-bold">
                    <br>
                    Sobrus Pharma is a pharmacy management software designed in collaboration with pharmacists for pharmacists. Fully aware of the increasing difficulties encountered in pharmacy management.
                </p>
                <small><a href="http://pharma.sobrus.com/">Soburs-Pharma.</a></small>
            </div>
            <div class="limit w-75 m-auto  p-3 border-2 border-end mx-2">
                <img src="https://sobrus.com/_next/image?url=%2Fassets%2Flogos%2Flabs.png&w=384&q=30" alt="" srcset="" class="p-4 d-block m-auto">
                <p class="text-muted fw-bold ">
                    Sobrus Labs is the software for managing customer relations, communication and order taking between pharmacies, healthcare establishments and pharmaceutical laboratories.
                </p>
                <small> <a href="https://sobrus.com/labs">Sobrus-lab</a></small>
            </div>
            <div class="limit w-75 m-auto  p-3">
                <img src="https://sobrus.com/_next/image?url=%2Fassets%2Flogos%2Fsns.png&w=384&q=30" alt="" srcset="" class="p-4 d-block m-auto">
                <p class="text-secondary fw-bold">
                   Sobrus SNS High-performance software for managing online orders between pharmacists and wholesaler-distributors.
                   <br>
                </p>
                <small><a href="https://sns.sobrus.com/">Sobrus-SNS.</a></small>
            </div>
        </div>
    </div>

    <div id="tools" class="solutions pt-3">
        <h2 class="text-center text-success border-bottom fw-bold">Our Tools</h2>
        <div class="container d-flex">

            <div class="limit w-75 m-auto p-3 border-2 border-end">
                <img src="https://monordonnance.sobrus.com/static/media/LogoMonOrdonnance.7a6aa3db.png" alt="" srcset="" class="tools p-4 d-block m-auto">
                <p class="text-secondary fw-bold">
                    The first software in Africa, 100% free, dedicated to specialists and general practitioners, which allows you to manage your prescriptions and medical prescriptions with ease thanks to its intuitive interface and an available Support team
                </p>
                <small> <a href="https://monordonnance.sobrus.com/">monordonnance</a></small>
            </div>
            <div class="limit w-75 m-auto  p-3 border-2 border-end mx-2">
                <img src="http://monmedicament.ma/images/logo.png" alt="" srcset="" class="p-4 d-block m-auto">
                <p class="text-muted fw-bold ">      
                    By registering on Quelmedicament.ma you will be able to receive all the news on medicines in Morocco, both price changes and new products marketed on the market.
                </p>
                <small><a href="http://monmedicament.ma/">monmedicament</a></small>
            </div>
            <div class="limit w-75 m-auto  p-3">
                <img src="https://monpharmacien.sobrus.com/static/media/Logo%20MonPharmacien.e5de99e4.png" alt="" srcset="" class="tools p-4 d-block m-auto">
                <p class="text-secondary fw-bold">
                    The objective of MonPharmacien is to improve the pharmacist-patient relationship, for better access to care and better follow-up of patients with their community pharmacy.
                </p>
                <small><a href="https://monpharmacien.sobrus.com/">monpharmacien</a></small>
            </div>
        </div>
    </div>

    <div id="contactUs" class="mt-5 mb-5 text-center">
        <h2 class="fw-bold text-success border-bottom m-3">Contact Us : </h2>

        <div class="d-flex">
            <div class="p-3">
                <p class="left text-secondary fw-bold p-4 lh-lg">
                    The Sobrus team is always at your disposal whatever your need. <br> Do not hesitate to contact us by any of the means bellow . <br>
                    Or you are most <strong class="text-danger fw-bolder"> welcome </strong> to visit us at our company .
                </p>
                <ul class="list-group fw-bold ">
                <li class="left list-group-item">
                 <strong class="text-danger"> Phone : </strong> +212 5 30 500 500 </li>
                 <li class="left list-group-item"> <strong class="text-danger"> Email : </strong> support@sobrus.com </li>
                 <li class="left list-group-item">
                   <strong class="text-danger"> Address : </strong>  Villa N°222 rue Tetouan, Harhoura، Avenue Moustapha Assayeh,Temara
                 </li>

                </ul>
            </div>
            <div id="map" >
            </div>  
        </div>
    </div>
    <script>
          function initMap() {
          const myLatLng = { lat: 33.94041, lng: -6.93848 };
          const map = new google.maps.Map(document.getElementById("map"), {
            zoom: 10,
            center: myLatLng,
          });
  
          new google.maps.Marker({
            position: myLatLng,
            map,
            label: {
                fontSize: "20px",
                fontWeight: "bold", 
                padding: "10px",
                color : "Aqua",
                text: "Sobrus"
            }
          });
        }
        window.initMap = initMap;
    </script>
    
    <script type="text/javascript"
        src="https://maps.google.com/maps/api/js?key={{ env('GOOGLE_MAP_KEY') }}&callback=initMap" ></script>
@endsection