<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Buku tamu</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">

        <!-- Styles -->
         <link rel="stylesheet" type="text/css" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
         <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        
         <link rel="stylesheet" type="text/css" href="{{ URL::asset('css/bukutamu.css') }}">
        </head>
    <body>
        <!-- JQUERY STEP -->
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-steps/1.1.0/jquery.steps.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.bundle.min.js"></script>

         
<div class="wrapper">
    <form action="{{ route('kunjungan.store') }}" method="POST">
        @csrf
    
        <div id="wizard">
            <!-- SECTION 1 -->
            <h4></h4>
            <section>
                <div class="form-row"> <input type="text" class="form-control" name="nama" placeholder="Nama"> </div>
                <div class="form-row"> <input type="text" class="form-control" name="email" placeholder="Email"> </div>
                <div class="form-row"> <input type="text" class="form-control" name="no_hp" placeholder="No HP"> </div>
                <div class="form-row"> <input type="text" class="form-control" name="id_ktp" placeholder="ID KTP"> </div>
            </section> <!-- SECTION 2 -->
            <h4></h4>
            <section>
                <div class="form-row"> <input type="text" class="form-control" name="nama_institusi" placeholder="Nama Institusi"> </div>
                <div class="form-row"> <input type="text" class="form-control -ml-px" name="alamat" placeholder="Alamat Institusi"> </div>
            </section> <!-- SECTION 3 -->
            <h4></h4>
            <section>
                <div class="product">
                    <div class="form-row"> <input type="text" class="form-control" name="tujuan" placeholder="Tujuan"> </div>
                    <div class="form-row"> <input type="text" class="form-control" name="keperluan" placeholder="Keperluan"> </div>
                    <div class="form-row" style="margin-bottom: 18px"><textarea name="kesan" placeholder="Kesan" class="form-control" style="height: 108px"></textarea> </div>
                        <input class="btn btn-primary btn-block " type="submit" value="Simpan Data" class="form-control" />
                    </div>
                </div>
        </div>
    </form>
</div>
    </body>


    <script>
        $(function(){
	$("#wizard").steps({
        headerTag: "h4",
        bodyTag: "section",
        transitionEffect: "fade",
        enableAllSteps: true,
        transitionEffectSpeed: 500,
        onStepChanging: function (event, currentIndex, newIndex) { 
            if ( newIndex === 1 ) {
                $('.steps ul').addClass('step-2');
            } else {
                $('.steps ul').removeClass('step-2');
            }
            if ( newIndex === 2 ) {
                $('.steps ul').addClass('step-3');
            } else {
                $('.steps ul').removeClass('step-3');
            }

            if ( newIndex === 3 ) {
                $('.steps ul').addClass('step-4');
                $('.actions ul').addClass('step-last');
            } else {
                $('.steps ul').removeClass('step-4');
                $('.actions ul').removeClass('step-last');
            }
            return true; 
        },
        labels: {
            next: "Next",
            previous: "Previous"
        }
    });
    // Custom Steps Jquery Steps
    $('.wizard > .steps li a').click(function(){
    	$(this).parent().addClass('checked');
		$(this).parent().prevAll().addClass('checked');
		$(this).parent().nextAll().removeClass('checked');
    });
    // Custom Button Jquery Steps
    $('.forward').click(function(){
    	$("#wizard").steps('next');
    })
    $('.backward').click(function(){
        $("#wizard").steps('previous');
    })
 
})
    </script>
</html>
