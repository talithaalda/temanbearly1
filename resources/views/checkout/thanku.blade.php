@extends('layouts.main')

@section('container')

<div class=" container-fluid my-5 mt-5 py-5">
    <div class="row justify-content-center ">
        <div class="col-xl-10 ">
            <div class="card shadow-lg ">
                <div class="text-center mt-5">
                    <h1 >THANK YOU FOR YOUR ORDER!</h1>
                    <h6 class="mt-5">Your order will be processed immediately. 
                        <br>For more information, please go to the order history menu. </h6>
                    
                        <br>
                <a  href="/orderhistory" class="btn btn-primary mb-5 mt-5" >Order History</a>  
                <a href="/" class="btn btn-primary mb-5 mt-5 border-0" style="background-color: #e5345b; color:white;" >Back to home</a> 
                <br><br>
                </div>
            </div>
        </div>
    </div>
</div>

<style>
.space{
    letter-spacing: 0.8px !important;
}

a {
    text-decoration: none !important;
    color: #aaa ;
}

.card-header{
    background-color: #fff;
    border-bottom:0px solid #aaaa !important;
}

p{
    font-size: 13px ;
}
        
.small{
    font-size: 9px !important;
}

.boxed-1{
    padding: 0px 8px 0 8px ;
    color: black !important;
    border: 1px solid #aaaa;
}
</style>
<script>
    function previewImage(){
        const image = document.querySelector('#image');
        const imgpreview = document.querySelector('.img-preview');
        imgpreview.style.display = 'block';
        const oReader = new FileReader();
        oReader.readAsDataURL(image.files[0]);
        oReader.onload = function(oFREvent){
            imgpreview.src = oFREvent.target.result;
        }
    }
</script>
@endsection