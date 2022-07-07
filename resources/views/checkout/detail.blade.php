@extends('layouts.main')

@section('container')

<div class=" container-fluid my-5 mt-5 py-5">
    <div class="row justify-content-center ">
        <div class="col-xl-10 ">
            <div class="card shadow-lg ">
                <div class="text-center mt-5">
                    <h1 >THANK YOU FOR YOUR ORDER!</h1>
                    <h2 class="mb-5">Rp {{ number_format($order->total, 0, ".", ".")  }}</h2>
                    <h6 class="margin" >Please make payment before 1x24 hours to some of the methods below. Don't forget to upload your proof of payment in here</h6>
                    
                    <dt class="mt-3">Method : {{ $order->methodpay}}</dt>
                    @if($order->methodpay=="Dana")
                    <dl>
                    <dd>- 08123111380 a/n teman bearly beauty</dd>
                    @elseif(($order->methodpay=="Ovo"))
                    <dd>- 08123111380 a/n teman bearly beauty</dd>
                    @elseif(($order->methodpay=="Gopay"))
                    <dd>- 08123111380 a/n teman bearly beauty</dd>
                    @elseif(($order->methodpay=="BCA"))
                    <dd>- 8735089032 a/n teman bearly beauty</dd>
                    @elseif(($order->methodpay=="Mandiri"))
                    <dd>- 1410018488403 a/n teman bearly beauty</dd>
                    </dl>
                    @endif

                <form method="post" action="/checkout/{{ $order->id }}" class="md-form" enctype="multipart/form-data">
                    @method('put')
                    @csrf
                </div>
                <div class="mb-3 margin" >
                    <img class="img-preview img-fluid mb-3 col-sm-5"  style="margin-left: 200px; margin-right:200px">
                    <label for="nota">Upload Nota</label>
                    <input class="form-control @error('nota') is-invalid @enderror" type="file" id="image" name="nota" onchange="previewImage()">
                        @error('nota')
                        <div class="invalid-feedback">Please input your nota</div> @enderror
                </div>
                <input name="status" type="hidden" value= "Paid">
                <button type="submit" class="btn btn-primary mb-5 mt-5 margin">Confirm</button>  
                <br>
                </form>
            </div>
        </div>
    </div>
</div>

<style>

@media (max-width: 576px) { 
	.margin{
    margin-left: 100px; 
    margin-right:100px
    } 
}
@media (min-width: 576px) { 
	.margin{
    margin-left: 100px; 
    margin-right:100px
    } 
}
@media (min-width: 1024px) { 
	.margin{
        margin-left: 200px; 
        margin-right:200px
    }
}
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