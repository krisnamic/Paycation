<!DOCTYPE html>
<html lang="en">

@include('Template/head')
<title>Paycation | About Us</title>

<body>
    @include('Template/userNavbar')

    <div class="text-center">
        <h1 class="subtext1">About Us</h1>
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
                <i class="aboutus-nim">00000033747</i> <br><br>
                Full-Stack Developer <br><br>
                <a href="https://github.com/steven278" target="_blank"><i class="fab fa-github"></i> steven278</a> <br>
                <a href="https://www.instagram.com/steven_lie9/" target="_blank"><i class="fab fa-instagram"></i> steven_lie9</a> <br>
            </div>
        </div>

        <!-- Profile 2 -->
        <div class="card d-flex flex-column justify-content-center text-center">
            <!-- Picture -->
            <div class="profile-frame d-flex flex-row justify-content-center">
                <img src="{{asset('img/aboutUs/jerry.jpg')}}" class="profile-img">
            </div>

            <!-- Name -->
            <div>
                <h2 class="aboutus-name"><b>Jerry Arianto</b></h2>
            </div>

            <!-- Desc -->
            <div>
                <i class="aboutus-nim">000000XXXXX</i> <br><br>
                Full-Stack Developer <br><br>
                <a href="https://github.com/jryarianto" target="_blank"><i class="fab fa-github"></i> jryarianto</a> <br>
                <a href="https://www.instagram.com/jryarianto_/" target="_blank"><i class="fab fa-instagram"></i> jryarianto_</a> <br>
            </div>
        </div>

        <!-- Profile 3 -->
        <div class="card d-flex flex-column justify-content-center text-center">
            <!-- Picture -->
            <div class="profile-frame d-flex flex-row justify-content-center">
                <img id="rotate" src="{{asset('img/aboutUs/michael.jpg')}}" class="profile-img" onmouseover="hover(this);" onmouseout="unhover(this);">
            </div>

            <!-- Name -->
            <div>
                <h2 class="aboutus-name"><b>Michael Krisna Cahyadi</b></h2>
            </div>

            <!-- Desc -->
            <div>
                <i class="aboutus-nim">000000XXXXX</i> <br><br>
                Full-Stack Developer <br><br>
                <a href="https://github.com/krisnamic" target="_blank"><i class="fab fa-github"></i> krisnamic</a> <br>
                <a href="https://www.instagram.com/krisna_mic/" target="_blank"><i class="fab fa-instagram"></i> krisna_mic</a> <br>
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
                <h2 class="aboutus-name"><b>Jonathan Franzeli</b></h2>
            </div>

            <!-- Desc -->
            <div>
                <i class="aboutus-nim">000000XXXXX</i> <br><br>
                Full-Stack Developer <br><br>
                <a href="https://github.com/myqpalzm" target="_blank"><i class="fab fa-github"></i> myqpalzm</a> <br>
                <a href="https://www.instagram.com/myqpalzm147/" target="_blank"><i class="fab fa-instagram"></i> myqpalzm147</a> <br>
            </div>
        </div>
    </div>

    @include('Template/footer')

    @include('Template/script')
    <script>
        function AnimateRotate(elt, d, duration, ondone) {
            $({
                deg: 0
            }).animate({
                deg: d
            }, {
                easing: 'linear',
                duration: duration,
                step: function(now, fx) {
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

        $("#rotate").hover(function() {
            $(this).loopingRotation(1000);
        }, function() {
            $(this).stopRotation();
        });
    </script>
</body>

</html>