<!DOCTYPE html>
<html lang="en">

@include('Template/head')

<body>
    @include('Template/userNavbar')

    <div class="text-center">
        <h1 id="subtext1">About Us</h1>
    </div>

    <!-- Main Div -->
    <div class="aboutus-main d-md-flex justify-content-center row-cols-md-4 align-items-start" style="margin: 5%;">
        <!-- Profile 1 -->
        <div class="card d-flex flex-column justify-content-center text-center">
            <!-- Picture -->
            <div class="profile-frame d-flex flex-row justify-content-center">
                <img src="{{asset('img/aboutUs/steven.jpg')}}" class="profile-img">
            </div>

            <!-- Name -->
            <div>
                <h2 class="aboutus-name"><b>Steven Lie</b></h2>
            </div>

            <!-- Desc -->
            <div>
                <i class="aboutus-nim">000000XXXXX</i> <br><br>
                Full-Stack Developer <br><br>
                <i class="fab fa-github"></i> steven278 <br>
                <i class="fab fa-instagram"></i> steven_lie9 <br>
            </div>
        </div>

        <!-- Profile 2 -->
        <div class="card d-flex flex-column justify-content-center text-center">
            <!-- Picture -->
            <div class="profile-frame d-flex flex-row justify-content-center">
                <img id="rotate" src="{{asset('img/aboutUs/jerry.jpg')}}" class="profile-img" onmouseover="hover(this);" onmouseout="unhover(this);">
            </div>

            <!-- Name -->
            <div>
                <h2 class="aboutus-name">Jerry Arianto</h2>
            </div>

            <!-- Desc -->
            <div>
                <i class="aboutus-nim">000000XXXXX</i> <br><br>
                Full-Stack Developer <br><br>
                <i class="fab fa-github"></i> jryarianto <br>
                <i class="fab fa-instagram"></i> jryarianto_ <br>
            </div>
        </div>

        <!-- Profile 3 -->
        <div class="card d-flex flex-column justify-content-center text-center">
            <!-- Picture -->
            <div class="profile-frame d-flex flex-row justify-content-center">
                <img src="{{asset('img/aboutUs/michael.jpg')}}" class="profile-img">
            </div>

            <!-- Name -->
            <div>
                <h2 class="aboutus-name">Michael Krisna Cahyadi</h2>
            </div>

            <!-- Desc -->
            <div>
                <i class="aboutus-nim">000000XXXXX</i> <br><br>
                Full-Stack Developer <br><br>
                <i class="fab fa-github"></i> krisnamic <br>
                <i class="fab fa-instagram"></i> krisna_mic <br>
            </div>
        </div>

        <!-- Profile 4 -->
        <div class="card d-flex flex-column justify-content-center text-center">
            <!-- Picture -->
            <div class="profile-frame d-flex flex-row justify-content-center">
                <img src="{{asset('img/aboutUs/joy.jpg')}}" class="profile-img">
            </div>

            <!-- Name -->
            <div>
                <h2 class="aboutus-name">Jonathan Franzeli</h2>
            </div>

            <!-- Desc -->
            <div>
                <i class="aboutus-nim">000000XXXXX</i> <br><br>
                Full-Stack Developer <br><br>
                <i class="fab fa-github"></i> myqpalzm <br>
                <i class="fab fa-instagram"></i> myqpalzm147 <br>
            </div>
        </div>
    </div>

    @include('Template/footer')

    @include('Template/script')
    <script>
        function AnimateRotate(elt, d, duration, ondone){
            $({deg: 0}).animate({deg: d}, {
                easing: 'linear',
                duration: duration,
                step: function(now, fx){
                    $(elt).css({
                        transform: "rotate(" + now + "deg)"
                    });
                },
                complete: ondone.bind(elt)
            });
        }

        $.fn.loopingRotation = function(msPerRotation) {
            if (this.data('rotating') === true) // already rotating
                return;
            this.data('rotating', true);
            AnimateRotate(this, 360, msPerRotation, function() {
                if (this.data('rotating') !== true)
                    return;
                this.data('rotating', false);
                $(this).loopingRotation(msPerRotation);
            });
        }
        $.fn.stopRotation = function() {
            this.data('rotating', false);
        }

        $("#rotate").hover(function(){
            $(this).loopingRotation(1000);
        }, function(){
            $(this).stopRotation();
        });
    </script>
</body>

</html>